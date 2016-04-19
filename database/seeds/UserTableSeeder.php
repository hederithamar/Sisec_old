<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sisec\User::class)-> create([
            'name' => 'ADMIN',
            'password' => '1234',
            'role_id' => '1',
            'enterprise_id' => '1',
            'email' => 'admin@gmail.com'
            ]);

        factory(Sisec\User::class, 30)-> create();

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
