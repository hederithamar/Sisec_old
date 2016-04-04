<<<<<<< HEAD
## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT

=======
## SISEC

## Se agregaron modelos
	app/Enterprice.php
	app/Role.php

## Se agregaron controladores
	app/Http/Controllers/EmpresaController.php
	app/Http/Controllers/FrontController.php
	app/Http/Controllers/LogController.php
	app/Http/Controllers/RolController.php
	app/Http/Controllers/UsuarioController.php

## Se agrego un middleware, y se crearon funciones perono estan en uso se comentaron
	app/Http/Middleware/Admin.php

## Se agregaron request
	app/Http/Requests/EnterpriceCreateRequest.php
	app/Http/Requests/EnterpriceUpdateRequest.php
	app/Http/Requests/LoginRequest.php
	app/Http/Requests/RoleCreateRequest.php
	app/Http/Requests/RoleUpdateRequest.php
	app/Http/Requests/UserCreateRequest.php
	app/Http/Requests/UserUpdateRequest.php

## Se agregaron las migraciones de los modelos	
	database/migrations/2016_03_31_180248_create_enterprices_table.php
	database/migrations/2016_03_31_180307_create_roles_table.php
	database/migrations/2016_03_31_200000_create_password_resets_table.php
	database/migrations/2016_03_31_280447_create_users_table.php

## Se agregaron estilos en las vistas
	public/css/
	public/fonts/
	public/js/
	public/scss/

## Se agregaron vistas
	resources/views/admin/
	resources/views/alerts/
	resources/views/contacto.blade.php
	resources/views/empresa/
	resources/views/index.blade.php
	resources/views/layouts/
	resources/views/login.blade.php
	resources/views/reviews.blade.php
	resources/views/rol/
	resources/views/usuario/

#
>>>>>>> 420a290b4266d381016ad930798ce971f814a55d
