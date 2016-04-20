# wordpress-bootswatch
Bootswatch themer for Wordpress controllable from wordpress admin enhancing Twentyfifteen theme

Please Unzip and put the files in the theme folder of Twentyfifteen theme that is in
wordpress/wp-content/themes/twentyfifteen/

The 'admin-menu.php' file within 'functions' folder actually registers the theme string in wordpress admin which is called like this from header.php.
```php
$options = get_option('plugin_options');
$options['banner_heading'];//here it is banner_heading but its the theme string. Please change name as required
```
The 'admin-menu.php' can be assembled using this tutorial at:
http://www.sitepoint.com/wordpress-options-panel/

The scss.inc.php file actually compiles the sass files within the stylesheet folder. Please note that i have used get to insert the theme string in the style.php within stylesheets folder, please comment if a better method can be used.

Please also see the bootswatch.php at
```php
wordpress/wp-content/themes/twentyfifteen/stylesheets/bootswatch.php
```
All these Bootswatch and Bootstrap styles are available in wordpress-bootswatch

Thanks and Regards,
Sugata
