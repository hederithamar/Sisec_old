<?php

use Illuminate\Database\Seeder;

class EnterpriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        //Datos para la tabla rol secrean 4 roles manuales
        \DB::table('roles')->insert(array(
            'desc'           => 'Administrador'
            ));

        \DB::table('roles')->insert(array(
            'desc'           => 'SuperIntendente de Servicio'
            ));
        \DB::table('roles')->insert(array(
            'desc'           => 'Residente de Obra'
            ));
        \DB::table('roles')->insert(array(
            'desc'           => 'Centro SCT'
            ));
        \DB::table('roles')->insert(array(
            'desc'           => 'Jefe de Oficina Tecnica'
            ));

        \DB::table('roles')->insert(array(
            'desc'           => 'Residente General'
            ));
        //$role_id = Sisec\Role::where('id', '=', '1')->get();

        //manda datos ficticios pero definidos manual 2
        factory(Sisec\Enterprice::class, 10)-> create([
            'type' => 'Constructora'
            ]);
        //10 datos fiticios de empresas supervisoras
        factory(Sisec\Enterprice::class, 10)->create();

        //$enterprice_id = Sisec\Enterprice::where('id', '=', '1')->get();

        factory(Sisec\User::class, 15)-> create([
            'role_id' => '1',
            'enterprice_id' => '1',
            ]);

        factory(Sisec\User::class, 15)-> create([
            'role_id' => '2',
            'enterprice_id' => '2',
            ]);
        
        factory(Sisec\User::class, 15)-> create([
            'role_id' => '3',
            'enterprice_id' => '3',
            ]);

        factory(Sisec\User::class, 15)-> create([
            'role_id' => '4',
            'enterprice_id' => '4',
            ]);
        factory(Sisec\User::class, 15)-> create([
            'role_id' => '5',
            'enterprice_id' => '5',
            ]);
        factory(Sisec\User::class, 15)-> create([
            'role_id' => '6',
            'enterprice_id' => '6',
            ]);
        /*\DB::table('users')->insert(array(
            'name' => ,
            'firstlastname' => $faker->lastname,
            'secondlastname' => $faker->lastname,
            'email' => $faker->email,
            'state' => $faker->state,
            'zone' => $faker->regexify('Norte|Sur'),
            'celphone' => $faker->phoneNumber,
            'phone' => $faker->phoneNumber,
            'role_id' => $role_id,
            'enterprice_id' => $enterprice_id,
            'id_curp' => $faker->name,
            'password' => bcrypt(str_random(10)),
        ));*/

    }
}
