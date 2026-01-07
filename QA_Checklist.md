# Frontend Quality Assurance (QA) Checklist

Use this checklist to self-evaluate your work before submission. This ensures high fidelity to design, performance optimization, and cross-browser compatibility.

## 1. Visual Assurance & Design Fidelity (vs. Figma)
*Goal: The implementation should look exactly like the design.*

- [x] **Pixel Alignment & Spacing**
    - [x] Measure margins and padding between elements (use browser dev tools or extensions like "PixelPerfect").
    - [x] Verify grid alignment (containers, columns, gutters) matches Figma guidelines.
    - [x] Check vertical rhythm (line-heights and spacing between text blocks).
    - [x] ensure `border-radius` on cards, buttons, and inputs matches exactly.
    - [x] Verify drop-shadows (opacity, blur, spread) match design specs.

- [x] **Typography Accuracy**
    - [x] Font Families: Verify correct font files (e.g., Gotham, Inter) are loaded and used.
    - [x] Font Weights: Check specific elements (Common errors: 400 vs 500, or 600 vs 700).
    - [x] Font Sizes: Verify `rem` or `px` values match strictly.
    - [x] Line Height: Ensure readability matches the mockups (especially in paragraphs).
    - [x] Letter Spacing: Check for specific tracking (e.g., uppercase labels often have wider spacing).
    - [x] Text Colors: Verify Hex/RGB values; check contrast for accessibility.

- [x] **Assets & Imagery**
    - [x] Images are exported at correct resolutions (2x for Retina displays).
    - [x] Icons are SVG where possible for crispness.
    - [x] No visual distortion or squashed aspect ratios on images.

## 2. Responsiveness & Layout
*Goal: The site works fluidly across all device sizes, not just specific breakpoints.*

- [x] **Breakpoints Check**
    - [x] **Mobile (375px - 480px):** Check hamburger menus, stacked layouts, readable font sizes.
    - [x] **Tablet (768px - 1024px):** Verify grid transitions (e.g., 3 columns -> 2 columns).
    - [x] **Desktop (1280px - 1440px):** Ensure standard design looks correct.
    - [x] **Large Screens (1920px+):** Ensure content is centered or constrained correctly (doesn't stretch infinitely).

- [x] **Fluidity**
    - [x] Resize browser window slowly from standard to mobile width; catch "awkward" in-between states where content breaks or overlaps.
    - [x] Check elements don't overflow horizontally (causing unwanted horizontal scroll).

## 3. Cross-Browser & Interaction Behavior
*Goal: Consistent experience for all users.*

- [x] **Browser Testing**
    - [x] **Chrome/Edge (Chromium):** Primary development check.
    - [x] **Firefox:** Check flexbox/grid rendering and scrollbar styling differences.
    - [x] **Safari (macOS/iOS):** Critical for font rendering weights and flex/gap support.
    - [x] **Mobile Safari (iPhone):** Check for "notch" issues and bottom browser bar overlap.

- [x] **Interactions & States**
    - [x] **Hover States:** Links, buttons, cards have defined hover effects.
    - [x] **Focus States:** Inputs and buttons have visible focus rings for accessibility (tab navigation).
    - [x] **Active/Pressed States:** Buttons give feedback when clicked.
    - [x] **Transitions:** Animations are smooth and not jarring (e.g., `transition: all 0.3s ease`).

## 4. SEO Validation
*Goal: Search engines can understand and rank the page.*

- [x] **Metadata**
    - [x] Title tag is unique and descriptive (`<title>`).
    - [x] Meta Description is present and effective.
    - [x] Open Graph tags (og:title, og:image, og:description) for social sharing.
    - [x] Favicon is present and loads correctly.

- [x] **Structure**
    - [x] **Headings Hierarchy:** Only one `<h1>` per page. `<h2>` through `<h6>` used logically without skipping levels.
    - [x] **Semantic HTML:** Use `<header>`, `<nav>`, `<main>`, `<section>`, `<footer>` instead of just `<div>`.
    - [x] **Alt Tags:** All meaningful `<img>` tags have descriptive `alt` text. Decorative images have `alt=""`.

## 5. Performance & Vital Checks
*Goal: Fast loading and smooth user experience.*

- [x] **Lighthouse Audit** (Keep console open -> Lighthouse tab -> Run Analysis)
    - [x] **Performance Score:** Aim for 90+ (Green).
    - [x] **Accessibility Score:** Aim for 90+ (Green).
    - [x] **Best Practices:** Aim for 100.
    - [x] **SEO:** Aim for 100.

- [x] **Core Web Vitals**
    - [x] **LCP (Largest Contentful Paint):** Main content loads in < 2.5s.
    - [x] **CLS (Cumulative Layout Shift):** Page doesn't jump around as images/fonts load (Set explicit width/height on images).
    - [x] **INP (Interaction to Next Paint):** Buttons respond instantly.

- [x] **Code Quality**
    - [x] No console errors or warnings.
    - [x] Remove `console.log` and commented-out dead code.
