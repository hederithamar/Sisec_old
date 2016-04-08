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

        //
        $role_id = Sisec\Role::where('id', '=', '1')->get();

        //manda datos ficticios pero definidos manual 2
        factory(Sisec\Enterprice::class)-> create([
            'rfc'           =>'SCT123',
            'nameemp' => 'SCT'
            ]);
        //10 datos fiticios moelo empresas
        factory(Sisec\Enterprice::class, 10)->create();

        $enterprice_id = Sisec\Enterprice::where('id', '=', '1')->get();

        factory(Sisec\User::class)-> create([
            'role_id' => '1',
            'enterprice_id' => '1',
            'name'           =>'Heder Ithamar',
            'id_curp' => 'HEDERITRORO93'
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
