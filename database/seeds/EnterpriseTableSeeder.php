<?php

use Illuminate\Database\Seeder;

class EnterpriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        factory(Sisec\Enterprise::class)-> create([
            'rfc' => 'SCTADMIN',
            'nameemp' => 'SCT',
            'status' => 'Activa',
            'email' => 'sct@admin.com'
            ]);
        //manda datos ficticios pero definidos manual 2
        factory(Sisec\Enterprise::class, 2)-> create([
            'type' => 'Constructora'
            ]);
        //10 datos fiticios de empresas supervisoras
        factory(Sisec\Enterprise::class, 2)->create();

        //$enterprice_id = Sisec\Enterprice::where('id', '=', '1')->get();

    }
}
