---
name: livewire-expert
description: >-
  Specialized Livewire v3 engineer skill. Focuses on fullstack reactivity, Volt single-file
  components, DOM morphing resilience, Alpine/Livewire state synchronization, and component testing.
---

# Livewire v3 Expert Skill

This skill provides comprehensive standards, architectural guidelines, and idiomatic patterns for building modern, high-performance web applications with Laravel Livewire v3.

---

## 1. Core Principles & Philosophy

1. **Minimize Server Round-Trips**: Only trigger network requests for operations requiring server authority, database mutations, or secure validation. Keep micro-interactions and UI toggles client-side.
2. **Deterministic DOM Morphing**: Always assign deterministic, unique `wire:key` attributes to loops, conditional wrappers, and dynamic elements to prevent morphdom state desynchronization.
3. **Encapsulate State with Form Objects**: Offload large form validation, state, and mutations to dedicated `Livewire\Form` classes rather than polluting component root properties.
4. **Resilient Network Handling**: Explicitly define loading indicators (`wire:loading`), target specific actions (`wire:target`), and handle offline transitions (`wire:offline`).

---

## 2. Component Architecture & Conventions

### A. Class-Based vs. Volt Components
- Use **Volt (Single-File Components)** for compact, focused UI units and rapid feature building.
- Use **Class-Based Components** when lifecycle complexity, extensive helper methods, or enterprise domain service injections are needed.

### B. Form Objects (`Livewire\Form`)
For any component handling more than 2-3 fields:
```php
namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|min:5|max:255')]
    public string $title = '';

    #[Validate('required|min:20')]
    public string $content = '';

    public function store(): void
    {
        $this->validate();
        auth()->user()->posts()->create($this->all());
        $this->reset();
    }
}
```

### C. Livewire v3 Attributes Reference
- `#[Locked]`: Protect critical properties (e.g., IDs, tenant keys) from client-side tampering.
- `#[Computed]`: Memoized properties cached during a single request lifecycle. Use `#[Computed(persist: true)]` for multi-request caching.
- `#[Url]`: Bind query string parameters seamlessly (`#[Url(history: true, keep: true)]`).
- `#[On('event-name')]`: Declarative event listeners replacing the legacy `$listeners` array.
- `#[Renderless]`: Execute methods (like logging, background pings) without re-rendering the view.
- `#[Layout('layouts.app')]`: Explicitly declare custom layouts for full-page components.

---

## 3. DOM Morphing & Performance Best Practices

### Keying Guidelines
- Always key looped items: `<div wire:key="user-{{ $user->id }}">`
- Always key conditional branches when swapping tag structures:
  ```blade
  @if($editing)
      <div wire:key="state-editing">...</div>
  @else
      <div wire:key="state-viewing">...</div>
  @endif
  ```

### Network Optimization
- Use deferred binding by default (`wire:model` is deferred in v3).
- Only use `wire:model.live` when instant UI feedback is necessary (e.g., search autocomplete), and always debounce or throttle:
  `wire:model.live.debounce.300ms="search"`
  `wire:model.live.throttle.500ms="position"`

### Lazy Loading Components
For heavy dashboard widgets or expensive database queries:
```blade
<livewire:expensive-chart wire:lazy />
```
Define placeholder views inside the component:
```php
public function placeholder()
{
    return view('livewire.placeholders.skeleton');
}
```

---

## 4. Livewire & JavaScript / Alpine Integration

- Prefer `$wire` directly inside Alpine components:
  ```html
  <div x-data="{ count: $wire.entangle('count') }">
      <button @click="count++">Increment</button>
  </div>
  ```
- Use `wire:ignore` or `wire:ignore.self` when initializing non-Livewire JavaScript widgets (e.g., TinyMCE, Chart.js, Flatpickr, Quill) to prevent DOM wipes during server renders.
- Dispatch browser events from PHP:
  ```php
  $this->dispatch('notification-created', title: 'Post saved successfully!');
  ```
  Listen in Blade/Alpine:
  ```html
  <div x-on:notification-created.window="..."></div>
  ```

---

## 5. Testing Livewire Components

Leverage Pest or PHPUnit with the `Livewire::test()` harness:
```php
use App\Livewire\PostCreator;
use Livewire\Livewire;

it('validates post creation', function () {
    Livewire::test(PostCreator::class)
        ->set('form.title', '')
        ->call('save')
        ->assertHasErrors(['form.title' => 'required']);
});
```
