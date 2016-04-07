<?php

namespace Sisec\Http\Controllers;
use Illuminate\Http\Request;
use Sisec\Http\Requests;
use Sisec\Http\Requests\EnterpriceCreateRequest;
use Sisec\Http\Requests\EnterpriceUpdateRequest;
use Sisec\Http\Controllers\Controller;
use Sisec\Enterprice;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class EmpresaController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        //$this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->enterprice = Enterprice::find($route->getParameter('empresa'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listing(){
        $enterprices = Enterprice::all();
        return response()->json(
                $enterprices->toArray()
            );
    }

    public function index()
    {
        $enterpricesSup = Enterprice::Type("Supervisora")->orderBy('id', 'DESC')->paginate(5);
        $enterpricesCons = Enterprice::Type("Constructora")->orderBy('id', 'DESC')->paginate(5);
        return view('empresa.index',compact('enterpricesSup',"enterpricesCons"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enterprices = Enterprice::lists('rfc', 'id');
        return view('empresa.create',compact('enterprices'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnterpriceCreateRequest $request)
    {
        $message = 'Empresa Creada Correctamente';
        if($request->ajax()){
            Enterprice::create($request->all());
            return response()->json([
                "mensaje" => $message
            ]);
        }else {
                Session::flash('message','No se Guardo');
                return Redirect::to('rol')->withErrors('Error');
            }
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
        return view('empresa.edit',['enterprice'=>$this->enterprice]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EnterpriceUpdateRequest $request, $id)
    {
        $this->enterprice->fill($request->all());
        $this->enterprice->save();
        Session::flash('message','Empresa Actualizada Correctamente');
        return Redirect::to('/empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->enterprice->delete();
        Session::flash('message','Empresa Eliminada Correctamente');
        return Redirect::to('/empresa');
    }

    /**
        *Aqui se crea el filtro de empresas
    */
}
