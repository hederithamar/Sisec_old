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
<<<<<<< HEAD
        //
        
    	//Datos para la tabla rol secrean 4 roles manuales
=======
        //Datos para la tabla rol secrean 4 roles manuales
>>>>>>> ded5e4663b0bb99bccc162b565b036a5b2a4c178
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
<<<<<<< HEAD
        factory(Sisec\Enterprice::class)-> create([
            'rfc'           =>'SCT123',
            'nameemp' => 'SCT'
=======
        factory(Sisec\Enterprice::class, 10)-> create([
            'type' => 'Constructora'
>>>>>>> 37d102b3656b15ba4675eb73b42410d36b2e818f
            ]);
        //10 datos fiticios de empresas supervisoras
        factory(Sisec\Enterprice::class, 10)->create();

        //$enterprice_id = Sisec\Enterprice::where('id', '=', '1')->get();

        factory(Sisec\User::class, 5)-> create([
            'role_id' => '1',
            'enterprice_id' => '1',
            'name'           =>'Heder Ithamar',
            ]);

        factory(Sisec\User::class, 5)-> create([
            'role_id' => '2',
            'enterprice_id' => '2',
            'name'           =>'Heder Ithamar',
            ]);
        
        factory(Sisec\User::class, 5)-> create([
            'role_id' => '3',
            'enterprice_id' => '3',
            'name'           =>'Heder Ithamar',
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
