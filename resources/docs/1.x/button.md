# Button

Buttons allow users to trigger actions and interact with the interface. Commonly built using the HTML ` button ` tag for actions such as submitting forms, opening modals, or navigation

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Tailwind](https://img.shields.io/badge/TailwindCSS-4-blue)

---

### Import

[[copy-code:button{import}]]

The `Button` component includes two files:

`app/View/Components/Ui/Button.php` — Handles component logic and configuration.

`resources/views/components/ui/button.blade.php` — Defines the component structure, styling, and appearance.

### Usage Simple

[[demo:button{button}]]

### Variants

[[demo:button{button-variant}]]

Supported:

```txt
default
primary
secondary
accent
info
success
warning
error
```

---

### Sizes

[[demo:button{button-size}]]

---

### Icon Only

Show loading indicator.

[[demo:button{button-icon-only}]]

Result:

```txt
[spinner] Loading...
```

---
### With Icon

Show loading indicator.

[[demo:button{button-with-icon}]]


Result:

```txt
[spinner] Loading...
```

---

### Loading

Show loading indicator.

[[demo:button{button-loading}]]

#### Loading State

Result:

```txt
[spinner] Loading...
```

---

### Disabled State

[[demo:button{button-disabled}]]

```blade
<x-ui.button disabled>

    Disabled

</x-ui.button>
```

Disabled state automatically:

- Prevent click
- Prevent submit
- Change opacity
- Show cursor-not-allowed

---

### Full Width

```blade
<x-ui.button fullWidth>

    Login

</x-ui.button>
```

Result:

```txt
width:100%
```

---

### Loading Button

```blade
<x-ui.button
variant="primary"
:isPending="true">

    Save

</x-ui.button>
```
---

### As Link

[[demo:button{button-href}]]

---

# API Reference

| Prop | Type | Default | Description |
|:-----|:----:|:-------:|------------:|
| variant | 'primary', 'secondary', 'tertiary', 'outline', 'ghost', 'info', 'danger', 'dangerSoft', 'warning' | 'primary' | Defines the visual style and color appearance of the button. |
| size | 'sm', 'md', 'lg' | 'sm' | Controls the overall size, including padding and font scale. |
| isPending | boolean | false | Displays a loading state and prevents interaction while an action is processing. |
| fullWidth | boolean | false | Expands the button to occupy the full width of its container. |
| disabled | boolean | false | Disables user interaction and applies an inactive appearance. |
| isIconOnly | boolean | false | Renders the button for icon-only content without additional text. |
| type | 'button' \| 'submit' \| 'reset' | 'button' | Specifies the native HTML button behavior within forms. |

---

### Variants Reference

| Variant | Color |
|---------|--------|
| default | Slate |
| primary | Violet |
| secondary | Gray |
| accent | Blue |
| info | Cyan |
| success | Green |
| warning | Amber |
| error | Red |

---

### Accessibility

Supported:

- Keyboard navigation
- Focus state
- Disabled state
- Loading state
- Native button behavior

---

# Component Example

```blade
<x-ui.button

variant="primary"

size="md"

:isPending="false"

type="submit">

    Simpan Data

</x-ui.button>
```

---

# License

MIT License