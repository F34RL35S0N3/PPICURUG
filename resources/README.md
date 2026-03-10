# Resources Folder Structure

This folder contains all front-end resources for the application.

## Organization

```
resources/
├── assets/              # Static assets
│   ├── css/             # CSS files
│   ├── js/              # JavaScript files
│   │   └── dashboards-analytics.js
│   └── vendor/          # Vendor libraries
├── css/                 # Main stylesheet directory
│   ├── app.css
│   └── dashboard.css    # Dashboard styles
├── js/                  # JavaScript directory
│   ├── app.js
│   ├── bootstrap.js
│   └── ...
├── views/               # Blade templates
│   ├── auth/            # Authentication views
│   ├── components/      # Reusable components
│   ├── content/         # Page content
│   │   └── dashboard/   # Dashboard views
│   ├── layouts/         # Layout templates
│   │   └── sections/    # Layout sections
│   ├── profile/         # Profile views
│   ├── _partials/       # Partial components
│   ├── dashboard.blade.php
│   ├── welcome.blade.php
│   └── ...
├── menu/                # Menu configurations
│   └── verticalMenu.json
```

## Key Files

### CSS Files
- **app.css** - Main application styles
- **dashboard.css** - Dashboard-specific styles

### JavaScript Files
- **app.js** - Main application script
- **bootstrap.js** - Bootstrap initialization
- **dashboards-analytics.js** - Dashboard functionality

### Blade Views
- **layouts/** - Page layouts and structure
- **views/** - Individual page templates
- **_partials/** - Reusable template parts
- **components/** - Reusable Vue/Blade components

## Dashboard Files

### Views
- `views/content/dashboard/index.blade.php` - Main dashboard
- `views/_partials/dashboard-stats.blade.php` - Statistics cards
- `views/_partials/dashboard-chart.blade.php` - Chart section
- `views/_partials/dashboard-table.blade.php` - Recent calls table

### Styles
- `css/dashboard.css` - Dashboard CSS

### Scripts
- `assets/js/dashboards-analytics.js` - Dashboard JavaScript

## Build & Compilation

The project uses **Vite** for asset bundling:

```bash
# Development
npm run dev

# Production build
npm run build

# Preview production build
npm run preview
```

## Vite Configuration

Configured in `vite.config.js` at project root.

## Best Practices

1. **Keep files organized** - Place related files in same folder
2. **Use partials** - Break down large views into reusable partials
3. **Separate concerns** - Keep CSS, JS, and HTML separate
4. **Responsive design** - Always test on mobile/tablet
5. **Performance** - Lazy load images and scripts
6. **Accessibility** - Use semantic HTML and ARIA attributes

## Adding New Resources

### New CSS File
1. Create file in `css/` folder
2. Import in `resources/views/layouts/sections/styles.blade.php`
3. Use `@vite()` directive

### New JavaScript File
1. Create file in `js/` or `assets/js/` folder
2. Import in Blade template
3. Use `@vite()` directive

### New Blade Template
1. Create in appropriate subfolder under `views/`
2. Use `@extends()` or `<x-component>`
3. Follow naming conventions

## Resources

- [Vite Documentation](https://vitejs.dev/)
- [Laravel Vite Integration](https://laravel.com/docs/vite)
- [Blade Template Syntax](https://laravel.com/docs/blade)
- [CSS Best Practices](https://developer.mozilla.org/en-US/docs/Web/CSS)

---

Last Updated: January 27, 2026
