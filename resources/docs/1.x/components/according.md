# according

accordings allow users to expand and collapse sections of content. They are commonly used to organize large amounts of information into smaller, manageable sections while preserving screen space.

![Laravel](https://img.shields.io/badge/Laravel-12-red)
![Tailwind](https://img.shields.io/badge/TailwindCSS-4-blue)

---

### Import

Import the component before using it inside Blade views.

[[copy-code:according{import}]]

The `according` component includes multiple files:

`app/View/Components/Ui/according.php` — Handles component configuration and shared state.

`resources/views/components/ui/according.blade.php` — Defines the according container.

`resources/views/components/ui/according/item.blade.php` — Defines an according item.

`resources/views/components/ui/according/trigger.blade.php` — Defines the clickable trigger.

`resources/views/components/ui/according/content.blade.php` — Defines the expandable content area.

---

### Usage Simple

Use the according to display expandable sections of related content.

[[demo:according{according}]]

By default, the according uses the `card` variant with medium spacing and slide animation.

---

### Variants

Variants control the visual appearance of the according.

[[demo:according{according-variant}]]

#### Supported Variant Notes

* `card` → Rounded container with border and background styling.
* `line` → Minimal appearance using divider lines between items.

---

### Sizes

Sizes control spacing, padding, and typography throughout the according.

[[demo:according{according-size}]]

#### Supported Sizes

* `sm` → Compact layouts and dense content
* `md` → Default balanced spacing
* `lg` → Larger content areas and improved readability

---

### Multiple Items

Allow multiple according items to remain open simultaneously.

[[demo:according{according-multiple}]]

Useful for:

* FAQs
* Documentation sections
* Knowledge bases
* Content-heavy pages

---

### Single Item

Restrict the according so only one item can remain open at a time.

[[demo:according{according-single}]]

Useful for:

* Navigation menus
* Settings panels
* Category selectors
* Compact interfaces

---

### Animations

Animations control how content enters and exits when expanded or collapsed.

[[demo:according{according-animation}]]

#### Supported Animations

* `none` → No animation
* `slide` → Vertical slide effect
* `fade` → Opacity transition
* `slide-fade` → Combined slide and fade effect
* `scale` → Scale and fade transition

---

### Transitions

Transitions control the speed of according animations.

[[demo:according{according-transition}]]

#### Supported Transitions

* `fast` → 200ms
* `normal` → 300ms
* `slow` → 500ms
* `slower` → 700ms

---

### Custom Indicator

Customize the indicator icon displayed in the trigger.

[[demo:according{according-indicator}]]

Useful for:

* Chevron icons
* Plus / Minus icons
* Arrow indicators
* Custom SVG icons

Indicators can also be positioned before or after the trigger content.

---

### Disabled Items

Prevent specific according items from being opened.

[[demo:according{according-disabled}]]

Disabled items automatically:

* Prevent interaction
* Ignore click events
* Display disabled styling
* Improve accessibility behavior

---

### API Reference

#### Accordion

| Prop              | Type                                                   |    Default   |                                                                    Description |
| :---------------- | :----------------------------------------------------- | :----------: | -----------------------------------------------------------------------------: |
| variant           | **'card' | 'line'**                                    |  **'card'**  |                                Defines the visual appearance of the accordion. |
| size              | **'sm' | 'md' | 'lg'**                                 |   **'sm'**   |            Controls spacing, padding, and typography throughout the accordion. |
| type              | **'single' | 'multiple'**                              | **'single'** | Determines whether one or multiple items can remain expanded at the same time. |
| animation         | **'none' | 'slide' | 'fade' | 'slide-fade' | 'scale'** |  **'slide'** |                  Controls how accordion content enters and exits the viewport. |
| transition        | **'fast' | 'normal' | 'slow' | 'slower'**              | **'normal'** |                                 Controls the duration of accordion animations. |
| indicatorPosition | **'left' | 'right' | 'both'**                          |  **'right'** |                    Controls where indicators are displayed within the trigger. |
| collapsible       | **boolean**                                            |   **true**   |                      Allows an opened item to be collapsed when clicked again. |

---

#### Accordion Item

| Prop     | Type        |  Default  |                                                       Description |
| :------- | :---------- | :-------: | ----------------------------------------------------------------: |
| value    | **string**  |     —     | Unique identifier used to manage the accordion item's open state. |
| disabled | **boolean** | **false** |     Prevents the accordion item from being expanded or collapsed. |

---

#### Accordion Trigger Slots

| Slot           | Description                                                         |
| :------------- | :------------------------------------------------------------------ |
| default        | The trigger label or content displayed inside the accordion header. |
| indicatorLeft  | Custom indicator displayed before the trigger content.              |
| indicatorRight | Custom indicator displayed after the trigger content.               |

---

#### Supported Variants

| Variant | Description                                                      |
| :------ | :--------------------------------------------------------------- |
| `card`  | Displays accordion items inside bordered and rounded containers. |
| `line`  | Uses divider lines for a cleaner and more minimal appearance.    |

---

#### Supported Sizes

| Size | Description                                                |
| :--- | :--------------------------------------------------------- |
| `sm` | Compact spacing and typography for dense layouts.          |
| `md` | Balanced spacing suitable for most interfaces.             |
| `lg` | Increased spacing and typography for enhanced readability. |

---

#### Supported Types

| Type       | Description                                              |
| :--------- | :------------------------------------------------------- |
| `single`   | Only one accordion item can remain open at a time.       |
| `multiple` | Multiple accordion items can remain open simultaneously. |

---

#### Supported Animations

| Animation    | Description                                               |
| :----------- | :-------------------------------------------------------- |
| `none`       | No animation is applied.                                  |
| `slide`      | Content slides vertically when expanding or collapsing.   |
| `fade`       | Content fades in and out using opacity transitions.       |
| `slide-fade` | Combines slide and fade effects for smoother transitions. |
| `scale`      | Content scales and fades into view when expanded.         |

---

#### Supported Transitions

| Transition | Duration |
| :--------- | -------: |
| `fast`     |    200ms |
| `normal`   |    300ms |
| `slow`     |    500ms |
| `slower`   |    700ms |

---

#### Supported Indicator Positions

| Position | Description                                               |
| :------- | :-------------------------------------------------------- |
| `left`   | Displays the indicator before the trigger content.        |
| `right`  | Displays the indicator after the trigger content.         |
| `both`   | Displays indicators on both sides of the trigger content. |


### Accessibility

The component includes built-in accessibility support.

Supported:

* Keyboard navigation
* Focus visibility
* ARIA attributes
* Expand / collapse state
* Disabled state
* Screen reader support
* Semantic button behavior
