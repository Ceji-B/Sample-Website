---
applyTo: '**'
---

# 📜 Project Context
This project is a modern, scalable, and secure full-stack web application.
It is developed with:
- **Frontend:** HTML5, CSS3 (BEM naming), JavaScript ES6+, React or Next.js
- **Backend:** Node.js (Express), REST APIs, secure middleware, PostgreSQL or MongoDB
- **Tooling:** Git, Prettier, ESLint, Webpack/Vite, npm scripts
- **Architecture Goals:** Maintainability, scalability, and performance

# 🎯 Primary Goals
1. **Clean Code:** Follow SOLID, DRY, KISS principles.
2. **Security:** Follow OWASP top 10 guidelines. Sanitize inputs, escape outputs.
3. **Performance:** Optimize for speed, accessibility, and SEO.
4. **Accessibility:** WCAG 2.1 AA compliance, proper semantic HTML & ARIA attributes.

# 🛠 Coding Guidelines

## General
- Always use **meaningful variable/function names**.
- Use **const** and **let**, never `var`.
- Keep functions **pure** where possible.
- Break large components/functions into **small, reusable units**.
- Avoid magic numbers — use constants/enums.
- Prefer **destructuring** for object/array access.
- Write **clear, concise comments** only when logic is not self-explanatory.

## JavaScript / TypeScript
- Use arrow functions for anonymous functions.
- Always handle async code with **async/await** and try/catch.
- Use template literals instead of string concatenation.
- Avoid inline event handlers; use event listeners or framework binding.
- Default parameters instead of `||` for fallbacks.

## HTML
- Use semantic elements (`<header>`, `<main>`, `<section>`, `<footer>`).
- Ensure all images have alt text.
- Form elements must have associated `<label>` tags.
- Organize structure logically for accessibility and SEO.

## CSS
- Follow **BEM** methodology for naming.
- Avoid IDs for styling.
- Use flexbox or grid for layout.
- Keep styles modular; no giant monolithic CSS files.
- Use variables for colors, font sizes, and spacing.

## Backend (Node.js / Express)
- Sanitize all user inputs.
- Avoid synchronous blocking operations.
- Use environment variables for config/secrets.
- Implement proper HTTP status codes in responses.
- Log errors and handle them gracefully.
- Modularize routes, controllers, and services.

## Git & Documentation
- Commit in small, meaningful chunks.
- Follow conventional commit messages (`feat:`, `fix:`, `chore:`, etc.).
- Keep README and documentation updated with major changes.
- Document API endpoints in a separate `API_DOCS.md`.

---

# ✅ Output Expectations
When generating or reviewing code:
- Ensure it matches the above standards **by default**.
- Suggest improvements if a more secure, performant, or maintainable approach exists.
- Provide brief inline explanations for non-obvious choices.
