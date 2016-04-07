<?php

namespace Sisec\Http\Controllers;

use Illuminate\Http\Request;
use Sisec\Http\Requests;
use Sisec\Http\Requests\RoleCreateRequest;
use Sisec\Http\Requests\RoleUpdateRequest;
use Sisec\Http\Controllers\Controller;
use Sisec\Role;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class RolController extends Controller
{
    
    public function __construct(){
        //$this->middleware('auth');
        //$this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->role = Role::find($route->getParameter('rol'));
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing(){
        $roles = Role::all();
        return response()->json(
                $roles->toArray()
            );
    }

    public function index()
    {
        return view('rol.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleCreateRequest $request)
    {
        $message = 'Rol Creada Correctamente';
        if($request->ajax()){
            Role::create($request->all());
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
        return view('rol.edit',['role'=>$this->role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleUpdateRequest $request, $id)
    {
        $this->role->fill($request->all());
        $this->role->save();
        Session::flash('message','Rol Actualizado Correctamente');
        return Redirect::to('/rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->role->delete();
        Session::flash('message','Rol Eliminado Correctamente');
        return Redirect::to('/rol');
    }
}
