# WordPress Sitemap Plugin

A custom WordPress sitemap plugin developed using PHP as part of my Diploma of Information Technology (Web Development) coursework at TAFE Queensland.

The plugin was developed for the T-Shirt Grind website and allows administrators to manage navigation links through the WordPress dashboard. These links are dynamically displayed in the website footer.

## Features

- **Custom Admin Menu:** Provides a dedicated Sitemap settings page within the WordPress dashboard.
- **Sitemap Management:** Allows administrators to add and update navigation links.
- **Dynamic Footer Display:** Automatically displays saved sitemap links in the website footer.
- **Persistent Settings:** Uses the WordPress Options API to store and retrieve sitemap information.
- **Input Sanitisation:** Sanitises submitted sitemap data using WordPress functions.
- **Output Escaping:** Uses WordPress escaping functions to safely display navigation links.

## Technologies Used

- **PHP** – Used to develop the plugin, process sitemap settings, manage navigation links, and implement custom WordPress functionality.
- **WordPress Hooks API** – Used to integrate the plugin into the WordPress dashboard and display navigation links in the website footer.
- **WordPress Options API** – Used to store and retrieve sitemap configuration settings.
- **WordPress Admin Menu API** – Used to create a custom settings page for managing sitemap links.

## Installation

1. Download the `tshirt-grind-sitemap.php` file.
2. Create a folder named `tshirt-grind-sitemap` inside the WordPress `wp-content/plugins/` directory.
3. Place the PHP file inside the folder.
4. Open the WordPress admin dashboard.
5. Navigate to **Plugins → Installed Plugins**.
6. Find **T-Shirt Grind Sitemap** and click **Activate**.

## How to Use

1. Open the WordPress admin dashboard.
2. Navigate to **Sitemap** in the administration menu.
3. Enter navigation links using the following format:

   `Page Name | URL`

4. Add each link on a separate line.

   Example:

   ```
   Home | /
   About Us | /about/
   Contact Us | /contact/
   ```

5. Click **Save Sitemap** to save the navigation links.
6. The saved links will automatically appear in the website footer.

## Project Purpose

This project was developed as part of my Diploma of Information Technology (Web Development) coursework at TAFE Queensland.

The purpose of the project was to create a custom WordPress plugin using PHP that enables website administrators to manage sitemap navigation links without directly modifying the website's source code.

Through this project, I gained practical experience with:

- PHP programming and WordPress plugin development.
- Creating custom WordPress administration pages.
- Using WordPress actions and hooks.
- Storing and retrieving data using the WordPress Options API.
- Processing and sanitising user input.
- Dynamically generating website navigation links.

## Known Limitations

This is an educational portfolio project and requires additional security measures before production use.

- The settings form requires nonce verification for CSRF protection.
- The plugin generates a navigational sitemap rather than an XML sitemap for search engines.
- The admin instructions reference a `[tgs_sitemap]` shortcode that is not implemented. Sitemap links are currently displayed automatically through the WordPress footer hook.

## Author 

Made by **Shaurya Parmar**
