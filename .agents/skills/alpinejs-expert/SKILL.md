---
name: alpinejs-expert
description: >-
  Specialized Alpine.js v3 engineer skill. Focuses on client-side state management,
  micro-interactions, accessible headless UI patterns, plugins, transitions, and performance.
---

# Alpine.js v3 Expert Skill

This skill provides comprehensive patterns, architectural guidelines, and best practices for building lightweight, accessible, and reactive client-side interfaces using Alpine.js v3.

---

## 1. Core Principles & Philosophy

1. **Lightweight & Declarative**: Keep JavaScript in markup when simple, extract into reusable Alpine components/stores when complex.
2. **Prevent Layout Shift**: Always use `x-cloak` alongside `[x-cloak] { display: none !important; }` in CSS to prevent un-rendered markup flicker on initial load.
3. **Accessibility First**: Implement proper ARIA attributes (`aria-expanded`, `aria-controls`, `role`) and keyboard navigation across all interactive widgets.
4. **Performance & Memory**: Clean up listeners and intervals when components tear down, and avoid heavy computation in tight reactivity loops.

---

## 2. Reusable Component Patterns

### A. Inline vs. Component Functions
For simple widgets (tooltips, toggles), inline `x-data` is preferred:
```html
<div x-data="{ open: false }">
    <button @click="open = !open" :aria-expanded="open.toString()">Toggle</button>
    <div x-show="open" x-cloak x-transition>Dropdown Content</div>
</div>
```

For complex widgets (dropdowns, modals, multi-step wizards), register reusable data objects:
```javascript
document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', () => ({
        open: false,
        toggle() {
            this.open = !this.open;
        },
        close() {
            this.open = false;
        }
    }));
});
```

```html
<div x-data="dropdown" @click.outside="close" @keydown.escape.window="close">
    <button @click="toggle">Menu</button>
    <div x-show="open" x-cloak x-transition.origin.top.left>...</div>
</div>
```

---

## 3. Alpine.js Global State (`Alpine.store`)

Manage cross-component global state without prop drilling or external state libraries:
```javascript
document.addEventListener('alpine:init', () => {
    Alpine.store('theme', {
        dark: Alpine.$persist(false).as('user_theme_dark'),
        toggle() {
            this.dark = !this.dark;
            document.documentElement.classList.toggle('dark', this.dark);
        }
    });
});
```

Access in HTML:
```html
<button @click="$store.theme.toggle()">
    <span x-text="$store.theme.dark ? 'Switch to Light' : 'Switch to Dark'"></span>
</button>
```

---

## 4. Transitions & Micro-Animations

Use Tailwind utility classes seamlessly with `x-transition`:

### Shorthand Transitions
```html
<div x-show="open" 
     x-transition.opacity.duration.300ms 
     x-transition.scale.origin.top>
</div>
```

### Granular Tailwind Transitions
```html
<div x-show="open"
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0 translate-y-1 sm:translate-y-0 sm:scale-95"
     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
     x-transition:leave-end="opacity-0 translate-y-1 sm:translate-y-0 sm:scale-95">
</div>
```

---

## 5. Magic Helpers & Directives Reference

- `$el`: Reference the current DOM element.
- `$refs`: Reference marked elements (`x-ref="input"` -> `$refs.input.focus()`).
- `$event`: Access native DOM event payload inside event handlers.
- `$dispatch`: Dispatch custom browser events (`$dispatch('toast-notify', { msg: 'Saved' })`).
- `$nextTick`: Wait until Alpine finishes updating DOM before running logic.
- `$watch`: Observe changes to reactive properties:
  ```html
  <div x-data="{ query: '' }" x-init="$watch('query', value => console.log(value))">
  ```

---

## 6. Official Plugins Ecosystem

- `@alpinejs/focus`: Trap focus inside modal dialogs (`x-trap="open"`).
- `@alpinejs/persist`: Persist state across page reloads in `localStorage` (`$persist(value)`).
- `@alpinejs/mask`: Format inputs dynamically (`x-mask="(999) 999-9999"`).
- `@alpinejs/collapse`: Smooth accordion expand/collapse (`x-collapse`).
- `@alpinejs/anchor`: Anchor floating elements and tooltips directly to trigger targets.
