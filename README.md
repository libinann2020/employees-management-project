https://www.youtube.com/watch?v=Gten6t_Ac_U&t=6s


https://splade.dev/
composer require protonemedia/laravel-splade-breeze
php artisan breeze:install


php artisan make:table Users

https://spatie.be/docs/laravel-query-builder/v5/introduction
composer require spatie/laravel-query-builder
php artisan vendor:publish --provider="Spatie\QueryBuilder\QueryBuilderServiceProvider" --tag="query-builder-config"

https://spatie.be/docs/laravel-permission/v5/installation-laravel
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan optimize:clear

