<?php

namespace Sisec\Http\Controllers;

use Illuminate\Http\Request;

use Sisec\Http\Requests;
use Sisec\Http\Controllers\Controller;
use Sisec\Enterprice;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
    {
Excel::create('Laravel Excel', function($excel) {
 
            $excel->sheet('Empresas', function($sheet) {
 
                $enterprice = Enterprice::select('nameemp','legalagent','type','status','email','address','phone')->get();

                $sheet->cells('A1:G1', function($cells) {

                 $cells->setBackground('##0080FF');

                    // Set with font color
                $cells->setFontColor('#000000');

                    // Set font family
                $cells->setFontFamily('Arial');

                    // Set font size
                $cells->setFontSize(12);

                // Set font weight to bold
                $cells->setFontWeight('bold');

                $cells->setAlignment('center');

                // Set font
                $cells->setFont(array(
                  'family'     => 'Arial',
                    'size'       => '12',
                    'bold'       =>  true
                                ));
                });
 
                $sheet->fromArray($enterprice);
 
            });
        })->export('xls');
 
 
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
