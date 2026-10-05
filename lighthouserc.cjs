/**
 * Lighthouse CI configuration — Core Web Vitals budgets for VIAJE Car Rental.
 *
 * Enforces Google's mobile "good" CWV thresholds:
 *   - Largest Contentful Paint (LCP) <= 2500 ms
 *   - Cumulative Layout Shift (CLS)  <= 0.1
 *   - Total Blocking Time (TBT)      <= 200 ms (INP lab proxy)
 *
 * Targets both local Herd dev environment (http://viajecarrental.test)
 * and production URL (https://viaje.matthewberces.dev) via LHCI_BASE_URL.
 */

const BASE_URL = process.env.LHCI_BASE_URL || 'http://viajecarrental.test';

/** Pages whose budgets are enforced. */
const AUDIT_URLS = [
  `${BASE_URL}/`,
  `${BASE_URL}/booking`,
];

/** Core Web Vitals budgets on mobile — Google's "good" thresholds */
const LCP_BUDGET_MS = 2500; // Google good LCP threshold
const TBT_BUDGET_MS = 200;  // INP lab proxy threshold
const CLS_BUDGET = 0.1;     // Google good CLS threshold

module.exports = {
  ci: {
    collect: {
      url: AUDIT_URLS,
      numberOfRuns: 3,
      settings: {
        preset: process.env.LHCI_FORM_FACTOR === 'desktop' ? 'desktop' : undefined,
        onlyCategories: [
          'performance',
          'seo',
          'accessibility',
          'best-practices',
        ],
      },
    },
    assert: {
      aggregationMethod: 'median-run',
      assertions: {
        // --- Core Web Vitals budgets -------------------------------------
        'largest-contentful-paint': ['error', { maxNumericValue: LCP_BUDGET_MS }],
        'cumulative-layout-shift': ['error', { maxNumericValue: CLS_BUDGET }],
        'total-blocking-time': ['error', { maxNumericValue: TBT_BUDGET_MS }],
        'interaction-to-next-paint': ['warn', { maxNumericValue: TBT_BUDGET_MS }],

        // --- Category score floors --------------------------------------
        'categories:performance': ['error', { minScore: 0.80 }],
        'categories:seo': ['error', { minScore: 0.95 }],
        'categories:accessibility': ['error', { minScore: 0.90 }],
        'categories:best-practices': ['error', { minScore: 0.90 }],
      },
    },
    upload: {
      target: 'filesystem',
      outputDir: './.lighthouseci',
    },
  },
};
