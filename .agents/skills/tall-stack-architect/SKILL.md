---
name: tall-stack-architect
description: >-
  Senior TALL Stack Architect skill unifying Tailwind CSS, Alpine.js, Laravel, and Livewire v3.
  Focuses on end-to-end component design, fullstack reactivity, entangle state synchronization,
  Blade slots, morphdom safety, and modern fullstack UX patterns.
---

# TALL Stack Architect Skill

This skill governs fullstack development using the unified **TALL Stack**: **T**ailwind CSS, **A**lpine.js, **L**aravel, and **L**ivewire. It provides architectural patterns to combine all four technologies seamlessly.

---

## 1. Architectural Roles & Division of Responsibilities

| Layer | Technology | Primary Responsibility | Avoid |
| :--- | :--- | :--- | :--- |
| **Backend & State** | **Laravel (PHP 8.2+)** | Business logic, authentication, authorization, database transactions, queue processing, background jobs. | Heavy client-side state manipulation. |
| **Server Reactivity** | **Livewire v3** | Real-time DOM updates, form submissions, complex validations, query-driven pagination & filtering. | Instant micro-animations, toggling UI visibility via round trips. |
| **Client Interactivity** | **Alpine.js v3** | Dropdown toggles, modals, tabs, tooltips, client validation, local storage persistence, keyboard shortcuts. | Direct database operations or unauthenticated logic. |
| **Design & Tokens** | **Tailwind CSS (v3/v4)** | Atomic utility styling, theme tokens, fluid responsive layouts, dark mode, CSS transitions. | Writing arbitrary non-utility CSS files or inline style tags. |

---

## 2. Server & Client State Synchronization

### A. Two-Way Binding with `$wire.entangle`
Synchronize an Alpine client variable with a Livewire server property cleanly:
```html
<div x-data="{ open: $wire.entangle('showModal') }">
    <button @click="open = true">Open Modal</button>

    <div x-show="open" x-cloak x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
        <div @click.outside="open = false" class="bg-white rounded-xl shadow-xl p-6 max-w-lg w-full">
            <h3 class="text-lg font-semibold text-zinc-900">Modal Header</h3>
            <button @click="open = false" class="mt-4 px-4 py-2 bg-zinc-100 rounded-lg">Close</button>
        </div>
    </div>
</div>
```

### B. Livewire Defer vs. Live with Entangle
- `open: $wire.entangle('showModal').live`: Instantly informs the server whenever Alpine updates `open`.
- `open: $wire.entangle('showModal')`: Updates Alpine locally; only sends value to server when a Livewire action executes.

---

## 3. Reusable Headless Blade Components

Design flexible Blade components that forward attributes and merge Tailwind classes safely:

### Component Definition (`resources/views/components/button.blade.php`)
```blade
@props([
    'variant' => 'primary',
    'size' => 'md',
])

@php
$baseClasses = 'inline-flex items-center justify-center font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none rounded-lg';

$variants = [
    'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700 focus:ring-indigo-500 shadow-sm',
    'secondary' => 'bg-white text-zinc-700 border border-zinc-300 hover:bg-zinc-50 focus:ring-indigo-500 shadow-sm',
    'danger' => 'bg-rose-600 text-white hover:bg-rose-700 focus:ring-rose-500 shadow-sm',
    'ghost' => 'text-zinc-600 hover:bg-zinc-100 hover:text-zinc-900 focus:ring-zinc-400',
];

$sizes = [
    'sm' => 'px-2.5 py-1.5 text-xs gap-1.5',
    'md' => 'px-3.5 py-2 text-sm gap-2',
    'lg' => 'px-4 py-2.5 text-base gap-2.5',
];

$classes = "{$baseClasses} {$variants[$variant]} {$sizes[$size]}";
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $classes]) }}>
    {{ $slot }}
</button>
```

---

## 4. DOM Morphing & Third-Party Library Integration

When embedding rich JavaScript libraries (Chart.js, ApexCharts, TinyMCE, Flatpickr, Google Maps) inside Livewire views:

1. Wrap the widget in `wire:ignore` or `wire:ignore.self`.
2. Initialize via Alpine `x-init` or `x-data`.
3. Dispatch events to communicate across the boundary:

```html
<div wire:ignore x-data="chartComponent({ data: @js($chartData) })">
    <canvas x-ref="canvas"></canvas>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('chartComponent', ({ data }) => ({
        chart: null,
        init() {
            this.chart = new Chart(this.$refs.canvas, {
                type: 'line',
                data: data,
            });

            this.$watch('$wire.chartData', (newData) => {
                this.chart.data = newData;
                this.chart.update();
            });
        }
    }));
});
</script>
```

---

## 5. Modern SPA Experience with `wire:navigate`

- Use `<a href="..." wire:navigate>` or `<a href="..." wire:navigate.hover>` for instantaneous, pre-fetched page transitions without a full browser refresh.
- Ensure all persistent global scripts (like Google Analytics, theme initializers) register on `livewire:navigated` instead of just `DOMContentLoaded`:
  ```javascript
  document.addEventListener('livewire:navigated', () => {
      // Re-initialize or track page view
  });
  ```
