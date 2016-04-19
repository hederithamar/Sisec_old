<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos para la tabla rol
        //Administrador id:1
        \DB::table('roles')->insert(array(
            'desc'           => 'Administrador'
            ));
        //Superintendente de servicio id:2
        \DB::table('roles')->insert(array(
            'desc'           => 'Superintendente de Servicio'
            ));
        //Residente de Obra id:3
        \DB::table('roles')->insert(array(
            'desc'           => 'Residente de Obra'
            ));
        //Centro SCT id:4
        \DB::table('roles')->insert(array(
            'desc'           => 'Centro SCT'
            ));
        //Jefe de oficina tecnica id:5
        \DB::table('roles')->insert(array(
            'desc'           => 'Jefe de Oficina Técnica'
            ));
        //Residente General id:6
        \DB::table('roles')->insert(array(
            'desc'           => 'Residente General'
            ));

        //$role_id = Sisec\Role::where('id', '=', '1')->get();
    }
}
