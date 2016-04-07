<?php

namespace Sisec\Http\Controllers;
use Illuminate\Http\Request;
use Sisec\Http\Requests;
use Sisec\Http\Requests\UserCreateRequest;
use Sisec\Http\Requests\UserUpdateRequest;
use Sisec\Http\Controllers\Controller;
use Sisec\User;
use Sisec\Role;
use Sisec\Enterprice;
use Session;
use Redirect;
use Illuminate\Routing\Route;
class UsuarioController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        //$this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuario'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersAdmin = User::Rol('Administrador')->with('enterprice','role')->get();
        $usersRGen = User::Rol('Residente General')->with('enterprice','role')->get();
        $usersServ = User::Rol('SuperIntendente de Servicio')->with('enterprice','role')->get();
        $usersRObr = User::Rol('Residente de obra')->with('enterprice','role')->get();
        $usersCen = User::Rol('Centro SCT')->with('enterprice','role')->get();
        $usersJef = User::Rol('Jefes de Oficina Técnica')->with('enterprice','role')->get();
        
        return view('usuario.index',compact('usersAdmin','usersRGen','usersServ','usersRObr','usersCen','usersJef'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $roles = Role::lists('desc', 'id');
        $enterprices = Enterprice::lists('name', 'id');
        return view('usuario.create',compact('roles','enterprices'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create($request->all());
        Session::flash('message','Usuario Creado Correctamente');
        return Redirect::to('/usuario');
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
        $roles = Role::lists('desc', 'id');
        $enterprices = Enterprice::lists('name', 'id');
        return view('usuario.edit',compact('roles','enterprices'),['user'=>$this->user]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->user->fill($request->all());
        $this->user->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/usuario');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->user->delete();
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }
    
}