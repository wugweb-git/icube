# icube

WordPress setup for iCube with a custom CMS theme and an optional front-end redirect to the published Figma site (`https://icube-website.figma.site/`).

## Quick start

1. Start the stack:

   ```bash
   docker compose up -d
   ```

2. Open WordPress:

   - Front-end: http://localhost:8000
   - Admin: http://localhost:8000/wp-admin

3. In WordPress Admin, activate **iCube CMS Theme** (`Appearance → Themes`).

## iCube CMS Theme

The repository includes a custom theme at `wordpress/wp-content/themes/icube-cms-theme` with:

- A modern homepage inspired by the iCube design direction.
- CMS-editable hero content via the Customizer (`Appearance → Customize → Homepage Content`).
- Dynamic latest-post rendering for the insights/news section.

## Optional Figma redirect gateway

The MU plugin remains available, but redirect is **off by default**.

- Set `ICUBE_ENABLE_FIGMA_REDIRECT=true` to enable redirecting public front-end traffic to `ICUBE_FIGMA_SITE_URL`.
- Admin/login/API/cron routes remain in WordPress so CMS management still works.
