<?php

namespace Sisec\Http\Controllers;
use Illuminate\Http\Request;
use Sisec\Http\Requests;
use Sisec\Http\Requests\DocCreateRequest;
use Sisec\Http\Requests\DocUpdateRequest;
use Sisec\Http\Controllers\Controller;
use Sisec\Doc;
use Sisec\Enterprice;
use Session;
use Redirect;
use Illuminate\Routing\Route;


class DocumentoController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
        //$this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit', 'update','destroy']]);
    }
    public function find(Route $route){
        $this->doc = Doc::find($route->getParameter('documento'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $docs = Doc::Type("Propuesta Ganadora de la obra")->paginate(5);
        $docg = Doc::Type("Propuesta Ganadora de Supervisión")->paginate(5);
        $docl = Doc::Type("Proceso de Licitación de la Supervisión")->paginate(5);
        
        return view('documento.index',compact('docs',"docg",'docl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('documento.create');
    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocCreateRequest $request)
    {
        /**Docs::create($request->all());
        Session::flash('message','Documentos creados ');
        return Redirect::to('/documento');**/
        Doc::create($request->all());
        Session::flash('message','Documento Creado Correctamente');
        return Redirect::to('/documento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('documento.edit',['doc'=>$this->doc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocUpdateRequest $request, $id)
    {
        $this->doc->fill($request->all());
        $this->doc->save();
        Session::flash('message',' Documento Actualizado');
        return Redirect::to('/documento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->doc->delete();
        Session::flash('message','Docuemento borrado Correctamente');
        return Redirect::to('/documento');
    }
}