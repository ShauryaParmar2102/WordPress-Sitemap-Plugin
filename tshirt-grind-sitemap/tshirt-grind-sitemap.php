<?php
/*
Plugin Name: T-Shirt Grind Sitemap
Description: Simple sitemap plugin for navigation links.
Version: 1.0
Author: Shaurya Parmar
*/

if (!defined('ABSPATH')) {
    exit;
}

/* ADMIN MENU */
add_action('admin_menu', 'tgs_add_admin_menu');

function tgs_add_admin_menu() {
    add_menu_page(
        'Sitemap Settings',
        'Sitemap',
        'manage_options',
        'tshirt-grind-sitemap',
        'tgs_settings_page',
        'dashicons-list-view',
        30
    );
}

/* =========================
   SETTINGS PAGE
========================= */

function tgs_settings_page() {

    if (isset($_POST['tgs_save'])) {

        $links = sanitize_textarea_field($_POST['tgs_links']);

        update_option('tgs_sitemap_links', $links);

        echo '<div class="updated"><p>Sitemap Saved Successfully!</p></div>';
    }

    $saved_links = get_option('tgs_sitemap_links', '');

    ?>

    <div class="wrap">
        <h1>T-Shirt Grind Sitemap</h1>

        <div style="background:#e7f3ff; padding:10px; margin-bottom:15px; border-left:4px solid #007cba;">
            <h3>How to Use This Plugin</h3>
            <p>1. Go to WordPress Admin → Sitemap</p>
            <p>2. Enter links in format: Page Name | URL</p>
            <p>3. Example: Home | /</p>
            <p>4. Click Save Sitemap</p>
            <p>5. Use shortcode <strong>[tgs_sitemap]</strong> to display it</p>
            </div>

        <form method="post">

            <h3>Footer Sitemap Links</h3>
            <p>Enter one link per line in this format:</p>

            <code>Page Name | URL</code>

            <br><br>

            <textarea name="tgs_links" rows="10" cols="70"><?php echo esc_textarea($saved_links); ?></textarea>

            <br><br>

            <input type="submit" name="tgs_save" class="button button-primary" value="Save Sitemap">

        </form>
    </div>

    <?php
}
/* =========================
   DISPLAY FOOTER SITEMAP
========================= */

add_action('wp_footer', 'tgs_display_sitemap');

function tgs_display_sitemap() {

    $links = get_option('tgs_sitemap_links', '');

    if (empty($links)) {
        return;
    }

    $lines = explode("\n", $links);

    ?>

    <div class="tgs-sitemap">

        <strong>SITEMAP</strong>
        <br><br>

        <?php

        foreach ($lines as $line) {

            $line = trim($line);

            if (!empty($line)) {

                $parts = explode('|', $line);

                $name = isset($parts[0]) ? trim($parts[0]) : '';
                $url  = isset($parts[1]) ? trim($parts[1]) : '';

                if (!empty($name) && !empty($url)) {

                    echo '<a href="' . esc_url($url) . '">' . esc_html($name) . '</a>';
                }
            }
        }

        ?>

    </div>

    <?php
}