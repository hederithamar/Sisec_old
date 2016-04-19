<?php
namespace Sisec\Http\Controllers;
use Illuminate\Http\Request;
use Sisec\Http\Requests;
use Sisec\Http\Requests\EnterpriseCreateRequest;
use Sisec\Http\Requests\EnterpriseUpdateRequest;
use Sisec\Http\Controllers\Controller;
use Sisec\Enterprise;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use Yajra\Datatables\Facades\Datatables;

class EmpresaController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        //$this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->enterprise = Enterprise::find($route->getParameter('empresa'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function listing(){
        $enterprices = Enterprice::all();
        return response()->json(
                $enterprices->toArray()
            );
    }*/
    public function index()
    {
        $enterprisesSup = Enterprise::Type("Supervisora")->get();
        $enterprisesCons = Enterprise::Type("Constructora")->get();
        return view('empresa.index', compact('enterprisesSup','enterprisesCons'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enterprises = Enterprise::lists('rfc', 'id');
        return view('empresa.create',compact('enterprises'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnterpriseCreateRequest $request)
    {
        Enterprise::create($request->all());
        Session::flash('message','Empresa Creada Correctamente');
        return Redirect::to('/empresa'); 
        /*$message = 'Empresa Creada Correctamente';
        if($request->ajax()){
            Enterprise::create($request->all());
            return response()->json([
                "mensaje" => $message
            ]);
        }else {
                Session::flash('message','No se Guardo');
                return Redirect::to('rol')->withErrors('Error');
            }*/
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
        $enterprises = Enterprise::lists('nameemp', 'id');
        return view('empresa.edit',compact('enterprises'),['enterprise'=>$this->enterprise]);
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EnterpriseUpdateRequest $request, $id)
    {
        $this->enterprise->fill($request->all());
        $this->enterprise->save();
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
        $this->enterprise->delete();
        Session::flash('message','Empresa Eliminada Correctamente');
        return Redirect::to('/empresa');
    }
    
}
