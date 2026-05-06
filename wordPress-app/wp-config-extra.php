<?php
/**
 * Extra WordPress configuration injected via environment variables.
 * This file is included by the official wordpress image automatically
 * when placed at /var/www/html/wp-config-extra.php.
 *
 * DB credentials are already handled by the official image's entrypoint
 * via WORDPRESS_DB_* env vars. Add extra constants here as needed.
 */

define( 'WP_DEBUG',         filter_var( getenv('WP_DEBUG')         ?: 'false', FILTER_VALIDATE_BOOLEAN ) );
define( 'WP_DEBUG_LOG',     filter_var( getenv('WP_DEBUG_LOG')     ?: 'false', FILTER_VALIDATE_BOOLEAN ) );
define( 'WP_DEBUG_DISPLAY', filter_var( getenv('WP_DEBUG_DISPLAY') ?: 'false', FILTER_VALIDATE_BOOLEAN ) );

define( 'WP_MEMORY_LIMIT', '256M' );
define( 'DISALLOW_FILE_EDIT', true );
