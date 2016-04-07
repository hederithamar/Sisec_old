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

    public function index()
    {
        $enterpricesSup = Enterprice::Type("Supervisora")->paginate(2);
        $enterpricesCons = Enterprice::Type("Constructora")->paginate(2);
        return view('empresa.index',compact('enterpricesSup',"enterpricesCons"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnterpriceCreateRequest $request)
    {
        Enterprice::create($request->all());
        Session::flash('message','Empresa Creada Correctamente');
        return Redirect::to('/empresa');
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
