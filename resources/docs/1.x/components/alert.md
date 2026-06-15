# Alert

Alerts communicate important information, status updates, warnings, or errors to users. They are commonly used to provide feedback after actions or to display contextual messages that require attention.

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Tailwind](https://img.shields.io/badge/TailwindCSS-4-blue)

---

### Import

Import the component before using it inside Blade views.

[[copy-code:alert{import}]]

The `Alert` component includes two files:

`app/View/Components/Ui/Alert.php` — Handles component logic and configuration.

`resources/views/components/ui/alert.blade.php` — Defines the component structure, styling, behavior, and animations.

---

### Usage Simple

Use the default alert to display informational messages.

[[demo:alert{alert}]]

The default configuration uses the `soft` variant with the `info` color.

---


### With Title

Alerts support a dedicated title slot for better hierarchy.

[[demo:alert{alert-title}]]

The title helps users quickly identify the purpose of the message.

---

### With Description

Longer explanations can be placed inside the description slot.

[[demo:alert{alert-description}]]

Useful for displaying additional details without overwhelming the interface.

---

### Variants

Variants control the visual appearance of the alert.

[[demo:alert{alert-variant}]]

#### Supported variants

* `soft` → Soft background with subtle border
* `bordered` → White background with colored left accent border

---

### Colors

Colors define the semantic meaning of the alert.

[[demo:alert{alert-color}]]

#### Supported colors

* `success` → Successful actions
* `info` → Informational messages
* `warning` → Warnings and cautions
* `danger` → Errors and destructive events
* `neutral` → Generic notifications

---


### Custom Icon

Replace the default icon using the `icon` slot.

[[demo:alert]]

Useful for branding or representing custom notification types.

---

### Dismissible

Enable a built-in close button using the `dismissible` property.

[[demo:alert{alert-dismissible}]]

The default close button automatically hides the alert when clicked.

---

### Custom Action

Replace the default close button with custom actions.

[[demo:alert{alert-custom-icon}]]

Useful for:

* Retry actions
* Undo buttons
* View details links
* Custom controls

---

### Auto Close

Automatically dismiss alerts after a specified duration.

[[demo:alert{alert-auto-close}]]

The alert closes itself after the configured number of milliseconds.

Example:

* `1000` → 1 second
* `3000` → 3 seconds
* `5000` → 5 seconds

---

### Progress Bar

Display a visual countdown while auto close is active.

[[demo:alert{alert-progressbar}]]

The progress bar shrinks until the alert is dismissed automatically.

---

### Pause On Hover

Pause the auto close timer while hovering over the alert.

[[demo:alert{alert-pause-on-hover}]]

Useful when users need additional time to read important messages.

---

### Animations

Customize the enter and leave transition.

[[demo:alert]]

#### Supported animations

* `fade` → Smooth opacity transition
* `scale` → Fade with zoom effect
* `slide` → Horizontal slide transition
* `slide-fade` → Combined slide and fade effect

---

### Combination Example

Multiple features can be combined together.

[[demo:alert]]

Example features:

* Bordered variant
* Success color
* Auto close
* Progress bar
* Pause on hover
* Dismissible
* Scale animation

---

### API Reference

| Prop           | Type                                                      |   Default  |                                                  Description |
| :------------- | :-------------------------------------------------------- | :--------: | -----------------------------------------------------------: |
| `variant`      | **`soft` | `bordered` | `solid`**                         | **`soft`** |                      Controls the visual style of the alert. |
| `color`        | **`success` | `info` | `warning` | `danger` | `neutral`** | **`info`** |                       Defines the semantic color appearance. |
| `dismissible`  | **boolean**                                               |  **false** |                           Displays the default close button. |
| `animation`    | **`fade` | `scale` | `slide` | `slide-fade`**             | **`fade`** |                        Controls enter and leave transitions. |
| `autoClose`    | **number | null**                                         |  **null**  | Automatically closes the alert after the specified duration. |
| `showProgress` | **boolean**                                               |  **false** |                   Displays an auto close progress indicator. |
| `pauseOnHover` | **boolean**                                               |  **false** |                  Pauses the auto close timer while hovering. |

---

### Slots

| Slot          |                                            Description |
| :------------ | -----------------------------------------------------: |
| Default       |                                    Main alert content. |
| `title`       |         Alert heading displayed above the description. |
| `description` |                           Additional explanatory text. |
| `icon`        |                       Replaces the default alert icon. |
| `action`      | Replaces the default close button with custom content. |

---

### Accessibility

The component includes built-in accessibility support.

Supported:

* Semantic `role="alert"`
* Keyboard accessible buttons
* Focus visibility
* Screen reader friendly content
* Dismissible controls
* Accessible interactive actions
