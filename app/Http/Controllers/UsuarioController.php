<?php

namespace Sisec\Http\Controllers;
use Illuminate\Http\Request;
use Sisec\Http\Requests;
use Sisec\Http\Requests\UserCreateRequest;
use Sisec\Http\Requests\UserUpdateRequest;
use Sisec\Http\Controllers\Controller;
use Sisec\User;
use Sisec\Role;
use Sisec\Enterprise;
use Sisec\State;
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
        $usersAdmin = User::Emp('1')->with(['enterprise','role' => function($query){
                $query->with('users');
            }])->get();

        $usersSup = User::Emp('2')->with(['enterprise','role' => function($query){
                $query->with('users');
            }])->get();

        $usersReG = User::Emp('6')->with(['enterprise','role' => function($query){
                $query->with('users');
            }])->get();

        $usersResOb = User::Emp('3')->with(['enterprise','role' => function($query){
                $query->with('users');
            }])->get();

        $usersCent = User::Emp('4')->with(['enterprise','role' => function($query){
                $query->with('users');
            }])->get();

        $usersJef = User::Emp('5')->with(['enterprise','role' => function($query){
                $query->with('users');
            }])->get();

        return view('usuario.index',compact('usersAdmin','usersReG','usersSup','usersResOb','usersCent','usersJef'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $roles = Role::lists('desc', 'id');
        $enterprises = Enterprise::lists('nameemp', 'id');
        $namestates = State::lists('namestate', 'id');
        return view('usuario.create',compact('roles','enterprises','namestates'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {   $usuario = new User($request->all());
        if($usuario->role_id==1)
        {
            $usuario->id_curp=substr($usuario->name, 0, 3).$usuario->role_id.substr($usuario->firstlastname, 0, 3)."2016".substr($usuario->secondlastname, 0, 3);
            $usuario->save(); 
        }
        else{
            if($usuario->role_id==2)
            {  $usuario->id_curp=substr($usuario->name, 0, 3).$usuario->role_id.substr($usuario->firstlastname, 0, 3).$usuario->enterprice_id.substr($usuario->secondlastname, 0, 3);
                $usuario->save(); 
            }
            else{
                $usuario->id_curp=substr($usuario->name, 0, 3).$usuario->role_id.substr($usuario->firstlastname, 0, 3).$usuario->state.substr($usuario->secondlastname, 0, 3);
            $usuario->save();

            }         

        }
        
        
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
        $enterprises = Enterprise::lists('nameemp', 'id');
        $namestates = State::lists('namestate', 'id');
        return view('usuario.edit',compact('roles','enterprises','namestates'),['user'=>$this->user]);
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