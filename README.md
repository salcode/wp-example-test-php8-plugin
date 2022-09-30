# Example Test PHP8 Plugin

This WordPress plugin specifically has code that works in PHP 7.4 but throws fatal errors in PHP 8.

This plugin adds an endpoint at `/wp-json/wp-example-test-php8-plugin/v1/site-title`, which returns the currently set Site Title.

The PHP 8 specific code is only loaded when you visit this endpoint, so when testing with PHP 8 the site will function properly unless you visit this endpoint.

## Warnings in PHP 7.4

When you visit the endpoint using PHP 7.4, you may see a number of warnings displayed on the screen.

Typically on a production site, warnings like these are not displayed to the user but on a development site they can be very helpful to identify issues early.

If you scroll to the bottom of the page, you should see the Site Title.

![php-7-4-warnings](https://user-images.githubusercontent.com/5194588/193339635-13bee399-cf27-40c2-8d0c-c455f56df713.png)

## Fatal Error in PHP 8

When you visit the endpoint using PHP 8, you should see a fatal error.

Your goal is to fix these PHP 8 errors.

![php-8-0-fatal-error](https://user-images.githubusercontent.com/5194588/193339674-c117aa27-fb73-49f5-95ee-bd49b27377b7.png)
