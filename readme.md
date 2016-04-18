## SISEC

## Se agregaron modelos
	app/Enterprise.php
	app/Role.php
	app/User.php
	app/Doc.php
	app/Integration.php
	app/State.php

## Se agregaron controladores
	app/Http/Controllers/EmpresaController.php
	app/Http/Controllers/FrontController.php
	app/Http/Controllers/LogController.php
	app/Http/Controllers/RolController.php
	app/Http/Controllers/UsuarioController.php
	app/Http/Controllers/ExcelController.php
	app/Http/Controllers/DocumentoController.php
	app/Http/Controllers/IntegracionController.php

## Se agrego un middleware, y se crearon funciones pero no estan en uso se comentaron
	app/Http/Middleware/Admin.php

## Se agregaron request y se activaron en los controladores
	app/Http/Requests/EnterpriseCreateRequest.php
	app/Http/Requests/EnterpriseUpdateRequest.php
	app/Http/Requests/LoginRequest.php
	app/Http/Requests/RoleCreateRequest.php
	app/Http/Requests/RoleUpdateRequest.php
	app/Http/Requests/UserCreateRequest.php
	app/Http/Requests/UserUpdateRequest.php
	app/Http/Requests/DocCreateRequest.php
	app/Http/Requests/DocUpdateRequest.php
	app/Http/Requests/IntegrationCreateRequest.php
	app/Http/Requests/IntegrationUpdateRequest.php

## Se agregaron las migraciones de los modelos
	database/migrations/2016_03_31_180248_create_enterprises_table.php
	database/migrations/2016_03_31_180307_create_roles_table.php
	database/migrations/2016_03_31_200000_create_password_resets_table.php
	database/migrations/2016_03_31_280447_create_users_table.php

## Se agregaron seeder de los modelos
	database/seeds/EnterpriseSeeder.php

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
	resources/views/integra/

#El primer modulo de catalogos esta en su 90% y se comenzo a trabajar en el segundo modulo Contrato