<?php
namespace Sisec\Http\Controllers;
use Illuminate\Http\Request;
use Sisec\Http\Requests;
use Sisec\Http\Requests\IntegrationCreateRequest;
use Sisec\Http\Requests\IntegrationUpdateRequest;
use Sisec\Http\Controllers\Controller;
use Sisec\Integration;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class IntegracionController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        //$this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->integration = Integration::find($route->getParameter('expediente'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $integrations = Integration::paginate(10);
        
        return view('integra.index',compact('integrations'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */         
    public function create()
    {
        
        return view('integra.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntegrationCreateRequest $request)
    {
        Integration::create($request->all());
        Session::flash('message','E.P. Creada Correctamente');
        return Redirect::to('/expediente'); 
            
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
          return view('integra.edit',['integration'=>$this->integration]);
          
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IntegrationUpdateRequest $request, $id)
    {
        $this->integration->fill($request->all());
        $this->integration->save();
        Session::flash('message','E.P. Actualizada');
        return Redirect::to('/expediente');
    }
   
}