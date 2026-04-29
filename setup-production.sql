-- iCube WordPress — production DB setup
-- Run this once via phpMyAdmin or WP-CLI after deploying to wugweb.design
-- DB: u544169507_icube

-- 1. Set correct site URLs
UPDATE wp_options SET option_value = 'http://wugweb.design/icube'           WHERE option_name = 'siteurl';
UPDATE wp_options SET option_value = 'http://wugweb.design/icube'           WHERE option_name = 'home';

-- 2. Activate the theme (if not already active)
UPDATE wp_options SET option_value = 'icube-cms-theme'                      WHERE option_name = 'template';
UPDATE wp_options SET option_value = 'icube-cms-theme'                      WHERE option_name = 'stylesheet';

-- 3. Set front page to show a static page (create a page titled "Home" first)
--    Then run:
-- UPDATE wp_options SET option_value = 'page'   WHERE option_name = 'show_on_front';
-- UPDATE wp_options SET option_value = '<id>'   WHERE option_name = 'page_on_front';

-- 4. Flush rewrite rules (do this via WP admin → Settings → Permalinks → Save,
--    or via WP-CLI: wp rewrite flush --allow-root)

-- 5. Register CPTs in DB — handled automatically by functions.php on first load.

-- Verify
SELECT option_name, option_value
FROM wp_options
WHERE option_name IN ('siteurl','home','template','stylesheet','show_on_front');
