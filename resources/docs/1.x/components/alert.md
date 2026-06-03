# Alert

Alerts are used to display important messages, status updates, warnings, or information that requires the user's attention.

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Tailwind](https://img.shields.io/badge/TailwindCSS-4-blue)

---

## Import

[[copy-code:alert{import}]]

---

## Basic Usage

Use the `Alert` component to communicate important information to users.

<x-alert variant="info">
    <x-alert-title>
        Information
    </x-alert-title>

    <x-alert-description>
        This is an informational message.
    </x-alert-description>
</x-alert>

### Preview

[[preview:alert/basic]]

### Code

[[copy-code:alert/basic]]

---

## Variants

The Alert component supports multiple variants.

### Info

<x-alert variant="info">
    <x-alert-title>
        Information
    </x-alert-title>

    <x-alert-description>
        New features are available in the latest release.
    </x-alert-description>
</x-alert>

[[preview:alert/info]]

[[copy-code:alert/info]]

---

### Success

<x-alert variant="success">
    <x-alert-title>
        Success
    </x-alert-title>

    <x-alert-description>
        Your settings have been saved successfully.
    </x-alert-description>
</x-alert>

[[preview:alert/success]]

[[copy-code:alert/success]]

---

### Warning

<x-alert variant="warning">
    <x-alert-title>
        Warning
    </x-alert-title>

    <x-alert-description>
        This action cannot be undone.
    </x-alert-description>
</x-alert>

[[preview:alert/warning]]

[[copy-code:alert/warning]]

---

### Danger

<x-alert variant="danger">
    <x-alert-title>
        Error
    </x-alert-title>

    <x-alert-description>
        Something went wrong while processing your request.
    </x-alert-description>
</x-alert>

[[preview:alert/danger]]

[[copy-code:alert/danger]]

---

## Without Description

The description section is optional.

<x-alert variant="warning">
    <x-alert-title>
        Warning
    </x-alert-title>
</x-alert>

### Preview

[[preview:alert/without-description]]

### Code

[[copy-code:alert/without-description]]

---

## Long Content

Alerts can contain longer descriptions.

<x-alert variant="info">
    <x-alert-title>
        Documentation Update
    </x-alert-title>

    <x-alert-description>
        The documentation has been updated to include new examples,
        improved accessibility guidelines, and additional component APIs.
    </x-alert-description>
</x-alert>

### Preview

[[preview:alert/long-content]]

### Code

[[copy-code:alert/long-content]]

---

## Anatomy

```html
<Alert>
    <AlertTitle />
    <AlertDescription />
</Alert>
```

---

## Components

### Alert

The root container component.

| Prop | Type | Default |
|--------|--------|--------|
| variant | string | info |

---

### AlertTitle

Displays the alert title.

| Prop | Type | Default |
|--------|--------|--------|
| class | string | null |

---

### AlertDescription

Displays additional information.

| Prop | Type | Default |
|--------|--------|--------|
| class | string | null |

---

## Available Variants

| Variant | Description |
|----------|-------------|
| info | General information |
| success | Successful actions |
| warning | Warning messages |
| danger | Error messages |

---

## Accessibility

- Uses semantic content structure.
- Provides visual distinction between variants.
- Supports keyboard navigation.
- Maintains sufficient color contrast in light and dark mode.

---

## Examples

### Account Created

<x-alert variant="success">
    <x-alert-title>
        Account Created
    </x-alert-title>

    <x-alert-description>
        Your account has been created successfully.
    </x-alert-description>
</x-alert>

---

### Maintenance Notice

<x-alert variant="warning">
    <x-alert-title>
        Scheduled Maintenance
    </x-alert-title>

    <x-alert-description>
        The service will be unavailable on Sunday from 01:00 to 03:00 UTC.
    </x-alert-description>
</x-alert>

---

### Connection Error

<x-alert variant="danger">
    <x-alert-title>
        Connection Failed
    </x-alert-title>

    <x-alert-description>
        Unable to connect to the server. Please try again later.
    </x-alert-description>
</x-alert>