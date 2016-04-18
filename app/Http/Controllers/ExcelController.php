<?php

namespace Sisec\Http\Controllers;

use Illuminate\Http\Request;

use Sisec\Http\Requests;
use Sisec\Http\Controllers\Controller;
use Sisec\Enterprise;
use Sisec\User;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Controlador que devuelve el listado
    public function index()
    {
        
    }
    //generador de archivs excel para usuarios con sus respectivoss perfiles.
    //Usuarios administradores.
    public function importusradmi()
    {
        Excel::create('Usuarios Administradores', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state','celphone','phone','zone')->where('role_id', '=', '1')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }
    //Usuarios residentes generales.
    public function importusrresi()
    {
        Excel::create('Usuarios Residentes', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state','celphone','phone','zone')->where('role_id', '=', '2')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }
    //Usuarios Superintendente de sevicio.
    public function importusrsupint()
    {
        Excel::create('Usuarios Superintendente', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state','celphone','phone','zone')->where('role_id', '=', '3')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }
    //Usuarios Residente de Obra.
    public function importusrresiobr()
    {
        Excel::create('Usuarios Residente de Obra', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state','celphone','phone','zone')->where('role_id', '=', '4')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }
    
    //Usuarios Centro SCT.
    public function importusrcent()
    {
        Excel::create('Usuarios Centro SCT', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state','celphone','phone','zone')->where('role_id', '=', '5')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }

    //Usuarios Jefe de oficina tecnica.
    public function importusrjefe()
    {
        Excel::create('Usuarios Jefe de Oficina', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state','celphone','phone','zone')->where('role_id', '=', '6')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }

    //Empresas Constructoras.
    public function importempcons()
    {
        Excel::create('Empresas Constructoras', function($excel) 
        {
            $excel->sheet('Empresas', function($sheet) 
            {
                $enterprise = Enterprise::select('nameemp','legalagent','type','status','email','address','phone')->where('type', '=', 'Constructora')->get();

                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($enterprise);
            });
        })->export('xls');
    }

    public function importempsup()
    {
        Excel::create('Empresas Supervisoras', function($excel) 
        {
            $excel->sheet('Empresas', function($sheet) 
            {
                $enterprise = Enterprise::select('nameemp','legalagent','type','status','email','address','phone')->where('type', '=', 'Supervisora')->get();

                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($enterprise);
            });
        })->export('xls');
    }

    public function import()
    {
        Excel::load('enterprises.csv', function($reader) {
            foreach ($reader->get() as $enterprise) {
                Enterprise::create([
                    'rfc' => $enterprise->rfc,
                    'nameemp' =>$enterprise->nameemp,
                    'legalagent' =>$enterprise->legalagent,
                    'type' =>$enterprise->type,
                    'status' =>$enterprise->status,
                    'email' =>$enterprise->email,
                    'address' =>$enterprise->address,
                    'phone' =>$enterprise->phone
                ]);
            }
        });
        return Enterprise::all();
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
