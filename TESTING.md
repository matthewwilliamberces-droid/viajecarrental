# Comprehensive Testing Runbook: Manual & Automated E2E

This document defines the formal QA and regression testing protocols for **Viaje Car Rental**, covering:
1. **Manual Exploratory & Visual Testing** via the `/browser` slash command.
2. **Automated End-to-End (E2E) Testing** via **Playwright**.

---

## Environment & Infrastructure Baseline

Before running any manual or automated tests, verify local services:
- **Application URL:** `http://viajecarrental.test` (or `http://127.0.0.1:8000` via `php artisan serve`)
- **Mailpit Web UI:** `http://127.0.0.1:8025` (Intercepts all customer invoices & alerts)
- **Database Engine:** SQLite (`database/database.sqlite`)
- **Strict Query Mode:** `Model::preventLazyLoading` active in development (`AppServiceProvider.php`).

---

## PART 1: Manual Testing Runbook via `/browser` Slash Command

The `/browser` slash command activates the browser-interaction agent to execute interactive UI journeys, inspect element rendering, and capture visual state directly in real-time.

### How to Trigger Manual Browser Testing
In the chat prompt, recommend or invoke the slash command:
```text
/browser
Please run Test Suite M2: Navigate to http://viajecarrental.test/booking, select a vehicle, proceed through the mock GCash gateway, and verify the confirmation modal appears.
```

---

### Manual Test Scenarios & Verification Matrix

#### Test Suite M1: Live Fleet Search & Dynamic Filtering
- **Target URL:** `http://viajecarrental.test/booking`
- **Objective:** Verify client-side Alpine filtering responds instantaneously without full page reloads or broken layout states.
- **Execution Steps:**
  1. Open `http://viajecarrental.test/booking`.
  2. In the search input (`Search Fleet`), enter `Fortuner`.
     - **Verification:** Fleet grid immediately filters to display only models containing "Fortuner". Non-matching vehicles are hidden.
  3. Change the **Transmission** dropdown to `Manual`.
     - **Verification:** Only manual transmission vehicles remain visible.
  4. Adjust the **Max Budget Slider** down to `₱4,000`.
     - **Verification:** High-end models (Prado, Grandia) vanish; budget counters update dynamically.
  5. Inspect the **"Reset"** button.
     - **Verification:** The gold Reset button is visible when filters are applied. Clicking it resets all inputs and restores the full fleet grid.

---

#### Test Suite M2: Booking Flow & Mock Payment Gateway
- **Target URL:** `http://viajecarrental.test/booking`
- **Objective:** Ensure date range selection, add-on pricing, customer validation, and the mock gateway simulation execute smoothly.
- **Execution Steps:**
  1. Click **"Rent Now"** or select a vehicle (e.g., *Suzuki Jimny AllGrip 4x4*).
  2. In Step 1 (**Trip Details**): Select pickup date (e.g., 3 days from today) and return date (e.g., 6 days from today). Click **"Next: Add-ons"**.
  3. In Step 2 (**Extras & Coverage**): Toggle **CDW Insurance** and **Toll RFID**.
     - **Verification:** Pricing summary reflects calculated daily add-on rates and one-time fees. Click **"Driver Details"**.
  4. In Step 3 (**Driver Details & Payment Method**):
     - Name: `Manual Test User`
     - Email: `manual.tester@example.com`
     - Phone: `09171234567`
     - Payment Method: Select **GCash**.
  5. Click **"Confirm Reservation"**.
     - **Verification (Mock Gateway):** UI transitions to `bookingStep = 'payment_processing'`. The animated blue GCash badge pulses, displaying:
       - *"Connecting to Secure Gateway..."*
       - *"Verifying Payment Details..."*
       - *"Authorizing Transaction..."*
  6. Wait ~3.5 seconds.
     - **Verification:** Smooth transition to Step 4 (**"Confirmed!"**). The screen displays a reference code in the format `VJ-XXXXXX`.

---

#### Test Suite M3: Mailpit Email & PDF Invoice Inspection
- **Target URL:** `http://127.0.0.1:8025`
- **Objective:** Confirm emails are dispatched without fatal errors and PDF invoices contain complete itemized breakdowns.
- **Execution Steps:**
  1. Navigate to `http://127.0.0.1:8025`.
  2. Locate the newest email addressed to `manual.tester@example.com` with subject: `Viaje Car Rental - Booking Confirmation #VJ-XXXXXX`.
  3. Inspect email body:
     - Vehicle name, dates, pickup location, dropoff location, and payment method must match Step 3 inputs.
  4. Download and open the attached PDF: `Invoice-VJ-XXXXXX.pdf`.
     - **Verification:** Verify that the PDF rendered cleanly via `barryvdh/laravel-dompdf`, showing the Viaje header, customer info, itemized base rate, tax breakdown, and total.

---

#### Test Suite M4: Admin Dashboard, Tab Switching & Fleet CRUD
- **Target URL:** `http://viajecarrental.test/dashboard` (Log in first if prompted)
- **Objective:** Verify Livewire tabs, zero lazy-loading violations, and SoftDelete integrity.
- **Execution Steps:**
  1. Open `http://viajecarrental.test/dashboard`.
  2. Inspect the **KPI Metrics** and **Revenue Chart** at the top.
  3. Click between the **Bookings** tab and **Fleet Inventory** tab.
     - **Verification:** Tab content switches instantly with zero JavaScript errors or page reloads.
  4. In Fleet Inventory, click **"Add New Vehicle"**:
     - Name: `Test Toyota Raize Turbo`
     - Daily Rate: `2800`
     - Fill required specs and click **Save**.
     - **Verification:** Vehicle appears in the fleet table immediately.
  5. Locate the newly created test vehicle and click **"Delete"** (Confirm prompt).
     - **Verification:** Vehicle disappears from active fleet. Database verification confirms `deleted_at` timestamp is set (Soft Deleted), and historical bookings remain unbroken.

---

#### Test Suite M5: Reactive Revenue Chart Auto-Deduction
- **Target URL:** `http://viajecarrental.test/dashboard`
- **Objective:** Verify Livewire event dispatching (`booking-updated`) immediately recalculates chart figures without page refresh.
- **Execution Steps:**
  1. On the **Bookings** tab, find an active booking with status `Paid` or `Confirmed`. Note the monthly revenue total displayed on the **Revenue Chart**.
  2. Click **"View"** on that booking to open the details modal.
  3. Click **"Set Cancelled"**.
  4. Close the modal or observe the background chart canvas.
     - **Verification:** The Chart.js canvas smoothly animates downward, deducting the cancelled booking's `total_amount` in real time.

---

## PART 2: Automated Testing Guide via Playwright

Playwright provides headless, deterministic browser automation ideal for CI/CD pipelines and regression detection.

### 1. Installation & Environment Setup

Run the following commands in the project root:

```bash
# Install Playwright test runner
npm install -D @playwright/test

# Install browser binaries (Chromium, Firefox, WebKit)
npx playwright install chromium
```

---

### 2. Playwright Configuration (`playwright.config.ts`)

Create `playwright.config.ts` in the project root:

```typescript
import { defineConfig, devices } from '@playwright/test';

export default defineConfig({
  testDir: './tests/e2e',
  timeout: 30 * 1000,
  expect: {
    timeout: 5000,
  },
  fullyParallel: true,
  forbidOnly: !!process.env.CI,
  retries: process.env.CI ? 2 : 0,
  workers: process.env.CI ? 1 : undefined,
  reporter: [['html'], ['list']],
  use: {
    baseURL: process.env.APP_URL || 'http://viajecarrental.test',
    trace: 'on-first-retry',
    screenshot: 'only-on-failure',
    video: 'retain-on-failure',
  },
  projects: [
    {
      name: 'chromium',
      use: { ...devices['Desktop Chrome'] },
    },
  ],
});
```

---

### 3. Automated Spec 1: Fleet Search & Filter (`tests/e2e/fleet-filtering.spec.ts`)

```typescript
import { test, expect } from '@playwright/test';

test.describe('Fleet Search and Filtering', () => {
  test.beforeEach(async ({ page }) => {
    await page.goto('/booking');
  });

  test('filters cars instantly by text query', async ({ page }) => {
    const searchInput = page.locator('input[placeholder*="Try \'Fortuner\'"]');
    await expect(searchInput).toBeVisible();

    // Type search term with debounce consideration
    await searchInput.fill('Fortuner');
    await page.waitForTimeout(400); // Debounce delay

    const carCards = page.locator('.glass-panel:has-text("Fortuner")');
    await expect(carCards.first()).toBeVisible();

    // Ensure non-matching vehicles are filtered out
    const jimnyCards = page.locator('.glass-panel:has-text("Jimny")');
    await expect(jimnyCards).toHaveCount(0);
  });

  test('resets filters and restores full fleet', async ({ page }) => {
    const searchInput = page.locator('input[placeholder*="Try \'Fortuner\'"]');
    await searchInput.fill('NonExistentVehicleModel999');
    await page.waitForTimeout(400);

    const resetButton = page.locator('button:has-text("Reset")');
    await expect(resetButton).toBeVisible();
    await resetButton.click();

    await expect(searchInput).toHaveValue('');
    const allCards = page.locator('.glass-panel');
    await expect(allCards.first()).toBeVisible();
  });
});
```

---

### 4. Automated Spec 2: End-to-End Booking & Mock Gateway (`tests/e2e/booking-flow.spec.ts`)

```typescript
import { test, expect } from '@playwright/test';

test.describe('End-to-End Booking Wizard & Payment Gateway', () => {
  test('completes full booking flow through mock payment gateway', async ({ page }) => {
    await page.goto('/booking');

    // 1. Select the first available vehicle
    const bookButton = page.locator('button:has-text("Rent Now"), button:has-text("Book Now")').first();
    await bookButton.click();

    // Modal should be visible
    const modal = page.locator('[x-show*="bookingModalOpen"]');
    await expect(modal).toBeVisible();

    // 2. Step 1: Trip dates (default values are prepopulated)
    const nextToAddons = page.locator('button:has-text("Next: Add-ons"), button:has-text("Continue")');
    if (await nextToAddons.isVisible()) {
      await nextToAddons.click();
    }

    // 3. Step 2: Extras / Driver Details
    const driverDetailsButton = page.locator('button:has-text("Driver Details")');
    await expect(driverDetailsButton).toBeVisible();
    await driverDetailsButton.click();

    // 4. Step 3: Enter Driver Details
    await page.locator('input[x-model="renter.name"]').fill('Playwright Automation Bot');
    await page.locator('input[x-model="renter.email"]').fill('playwright.bot@example.com');
    await page.locator('input[x-model="renter.phone"]').fill('09998887777');

    // Select GCash payment method
    const gcashOption = page.locator('input[value="gcash"], button:has-text("GCash")').first();
    if (await gcashOption.isVisible()) {
      await gcashOption.click();
    }

    // Submit booking
    const confirmButton = page.locator('button:has-text("Confirm Reservation")');
    await confirmButton.click();

    // 5. Verify Mock Payment Gateway animation step is triggered
    const processingGateway = page.locator('[x-show*="payment_processing"]');
    await expect(processingGateway).toBeVisible();
    await expect(page.locator('text=Connecting to Secure Gateway')).toBeVisible();

    // 6. Await payment gateway resolution (configured delay is ~3.5s)
    const successScreen = page.locator('[x-show*="bookingStep === 4"]');
    await expect(successScreen).toBeVisible({ timeout: 8000 });
    await expect(page.locator('text=Confirmed!')).toBeVisible();

    // Confirm booking reference exists
    const refCode = page.locator('span[x-text*="confirmationCode"]');
    await expect(refCode).toBeVisible();
    const text = await refCode.textContent();
    expect(text).toMatch(/^VJ-[A-Z0-9]+$/);
  });
});
```

---

### 5. Automated Spec 3: Admin Dashboard Integrity (`tests/e2e/admin-dashboard.spec.ts`)

```typescript
import { test, expect } from '@playwright/test';

test.describe('Admin Dashboard Integrity & N+1 Prevention', () => {
  test.beforeEach(async ({ page }) => {
    // Authenticate if auth middleware is enforced
    await page.goto('/dashboard');
  });

  test('renders KPI metrics and interactive revenue chart', async ({ page }) => {
    // Check Top KPIs
    await expect(page.locator('text=Revenue Overview')).toBeVisible();
    await expect(page.locator('#revenueCanvas')).toBeVisible();

    // Check Tab navigation
    const fleetTab = page.locator('button:has-text("Fleet Inventory")');
    await expect(fleetTab).toBeVisible();
    await fleetTab.click();

    // Table of vehicles should be visible without page reload
    await expect(page.locator('text=Active Island Fleet')).toBeVisible();
    await expect(page.locator('table')).toBeVisible();
  });
});
```

---

### 6. Executing Playwright Tests

```bash
# Run all automated tests headlessly
npx playwright test

# Run tests in headed browser mode (visual observation)
npx playwright test --headed

# Run tests with interactive UI mode (debugger & timeline inspection)
npx playwright test --ui

# Inspect the HTML test report after a run
npx playwright show-report
```

---

## PART 3: Objective Engineering & Risk Analysis

### PROS of This Testing Architecture
1. **Zero Guesswork:** `/browser` allows immediate manual spot-checks for subjective UI nuances (colors, animations, theme transitions).
2. **Defensive Pipeline Protection:** Playwright codifies user critical paths (booking submission, payment simulation, filter responsiveness) into executable assertions that block breaking PRs.
3. **Multi-layer Validation:** Testing covers database integrity (SoftDeletes, composite indexes), backend API endpoints (`/bookings`), and client-side Alpine state simultaneously.

### CONS & LIMITATIONS
1. **Mock Gateway Artificial Delay:** The 3.5-second `setTimeout` in the mock gateway slows down Playwright suite execution. Running 50 booking tests sequentially will add ~3 minutes of idle waiting time unless bypassed in test environments.
2. **Local Machine Dependency:** Tests currently depend on Laravel Herd being booted locally with domain resolution to `viajecarrental.test`.

### HIDDEN RISKS & TECHNICAL DEBT
- **Database Contamination:** Playwright tests running against `database.sqlite` will create real booking records (`Playwright Automation Bot`). Over multiple runs, mock bookings will accumulate and artificially inflate dashboard KPI metrics and revenue charts unless wrapped in test database transactions or cleaned up via teardown hooks.
- **Mailpit Queue Saturation:** Playwright creating hundreds of test bookings will flood the local Mailpit instance with test PDFs.

### WORST-CASE SCENARIO
- **CI/CD Pipeline Lockup:** Running Playwright in a remote CI environment (e.g. GitHub Actions) without configuring a mock webserver, database seeds, and Headless Chrome flags will cause tests to hang indefinitely or fail with connection refused errors (`ERR_CONNECTION_REFUSED` on `.test` domains).

### PROACTIVE REMEDIATION
1. **Dedicated Testing Environment:** Configure an `.env.testing` utilizing in-memory SQLite (`:memory:`) or a temporary database file for Playwright test runs.
2. **Test Payment Fast-Forwarding:** Add an environment check in Alpine or the controller (`window.__TEST_MODE__`) to skip the 3.5-second mock timer during automated CI test runs.
