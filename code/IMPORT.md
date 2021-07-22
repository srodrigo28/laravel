# Apache https://laravel.com/docs/7.x
# comando criar projeto composer 
    ## create-project --prefer-dist laravel/laravel:7.0 ProjetoNovo
# composer global require laravel/installer
# php artisan serve
# php -S localhost:8000

Laravel includes a public/.htaccesscd  file that is used to provide URLs without the index.php front controller in the path. Before serving Laravel with Apache, be sure to enable the mod_rewrite module so the .htaccess file will be honored by the server.

If the .htaccess file that ships with Laravel does not work with your Apache installation, try this alternative:

Options +FollowSymLinks -Indexes
RewriteEngine On

RewriteCond %{HTTP:Authorization} .
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]