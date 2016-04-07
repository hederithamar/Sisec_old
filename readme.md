## SISEC

## Se agregaron modelos
	app/Enterprice.php
	app/Role.php
	app/User.php

## Se agregaron controladores
	app/Http/Controllers/EmpresaController.php
	app/Http/Controllers/FrontController.php
	app/Http/Controllers/LogController.php
	app/Http/Controllers/RolController.php
	app/Http/Controllers/UsuarioController.php

## Se agrego un middleware, y se crearon funciones pero no estan en uso se comentaron
	app/Http/Middleware/Admin.php

## Se agregaron request y se activaron en los controladores
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

Miercoles/06/Abril

## Se agregaron ModelFactories
	modified:   database/factories/ModelFactory.php
	modified:   database/seeds/DatabaseSeeder.php


## Se agregaron Seeders
	database/seeds/EnterpriceTableSeeder.php
	database/seeds/UserTableSeeder.php

### Se agrego una funcion en 
	app/Enterprice.php

