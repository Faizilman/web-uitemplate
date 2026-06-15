# Button

Buttons allow users to trigger actions and interact with the interface. Commonly built using the native HTML `button` element for actions such as submitting forms, opening modals, navigation, and interactive events.

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Tailwind](https://img.shields.io/badge/TailwindCSS-4-blue)

---

### Import

Import the component before using it inside Blade views.

[[copy-code:button{import}]]

The `Button` component includes two files:

`app/View/Components/Ui/Button.php` — Handles component logic and configuration.

`resources/views/components/ui/button.blade.php` — Defines the component structure, styling, and appearance.

---

### Usage Simple

Use the default button for common actions such as saving data, submitting forms, or triggering events.

[[demo:button{button}]]

The default variant uses the `primary` style with medium sizing.

---

### Variants

Variants control the visual appearance and semantic meaning of the button.

[[demo:button{button-variant}]]

#### Supported Variant Notes

* `primary` → Main action button
* `secondary` → Neutral secondary action
* `tertiary` → Soft minimal appearance
* `outline` → Transparent button with border
* `ghost` → Lightweight transparent action
* `info` → Informational action
* `danger` → Destructive action
* `dangerSoft` → Softer destructive appearance
* `warning` → Warning or caution action

---

### Sizes

Sizes control the height, spacing, and font scale of the button.

[[demo:button{button-size}]]

#### Supported sizes

* `sm` → Compact layouts
* `md` → Default balanced size
* `lg` → Large emphasis actions

---

### Icon Only

Use `isIconOnly` when the button only contains an icon.

[[demo:button{button-icon-only}]]

This mode automatically creates a circular layout optimized for icon-only actions.

Useful for:

* Toolbar actions
* Settings buttons
* Close buttons
* Compact interfaces

---

### With Icon

Buttons support icons alongside text content.

[[demo:button{button-with-icon}]]

Useful for actions such as:

* Create
* Edit
* Download
* Upload
* Navigation

Icons automatically align with the button content.

---

### Loading

Display a loading indicator while an action is processing.

[[demo:button{button-loading}]]

Loading states improve user experience by:

* Preventing repeated clicks
* Providing visual feedback
* Indicating asynchronous processing

---

### Loading State

Reactive loading state powered by Alpine.js.

[[demo:button{button-loading-state}]]

When active:

* Button becomes disabled
* Loading indicator appears
* Original content is hidden
* State updates reactively

Best used for interactive frontend actions.

---

### Disabled

Prevent user interaction using the disabled state.

[[demo:button{button-disabled}]]

Disabled state automatically:

* Prevent click interaction
* Prevent form submission
* Reduce opacity
* Show `cursor-not-allowed`
* Improve accessibility behavior

---

### Full Width

Expand the button to match the width of its parent container.

[[demo:button{button-full-width}]]

Useful for:

* Authentication forms
* Mobile layouts
* Responsive stacked actions    

---

### Loading Button

The component supports both static and reactive loading states.

* `isPending` → Reactive Alpine.js loading state
* `isStaticPending` → Static Blade loading state

Choose the approach that best fits your rendering needs.

---

### As Link

Render the component as an anchor element instead of a native button.

[[demo:button{button-link}]]

Useful for navigation while maintaining consistent button styling.

---

### API Reference

| Prop | Type | Default | Description |
| :--- | :--- | :-----: | ----------: |
| as   | **'button' \| 'a'** |  **'button'** | Defines the rendered HTML element. |
| type | **'button' \| 'submit' \| 'reset'** | **'button'** | Specifies native button behavior within forms. |
| href | **string \| null**                  | **null** | Link destination when using **as="a"**. |
| variant | **'primary'**, **'secondary'**, **'tertiary'**, **'outline'**, **'ghost'**, **'info'**, **'danger'**, **'dangerSoft'**, **'warning'** | **'primary'** |  Defines the visual style and color appearance of the button. |
| size | **'sm'**, **'md'**, **'lg'** | **'md'** | Controls the overall size, spacing, and font scale. |
| isPending | **boolean** | **false** | Enables Alpine.js reactive loading state. |
| fullWidth | **boolean** | **false** | Expands the button to occupy the full width of its container. |
| isDisabled | **boolean** | **false** | Disables interaction and applies inactive styling. |
| isIconOnly | **boolean** | **false** | Optimizes layout for icon-only buttons. |

---

### Accessibility

The component includes built-in accessibility support.

Supported:

* Keyboard navigation
* Focus visibility
* Disabled state
* Loading state
* ARIA attributes
* Native button behavior
