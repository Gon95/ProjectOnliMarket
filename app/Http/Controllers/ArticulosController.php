<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Articulo;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=Articulo::all();    //datos de la tabla
        return view('CRUD/Articulos/index', ['articulos'=>$articulos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD/Articulos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos= new Articulo();
        $articulos->nombre=$request->input('nombre');
        $file=$request->file('imagen');
        $articulos->imagen = $file->getClientOriginalName().date('YmdHis').'-'.rand(0, 1000000);
        \Storage::disk('local')->put($articulos->imagen,  \File::get($file));
        $articulos->precio=$request->input('precio');
        $articulos->unidad=$request->input('unidad');
        $articulos->stock=$request->input('stock');
        $articulos->descripcion=$request->input('descripcion');
        
       

        $articulos->save();
        return redirect()->action('ArticulosController@index')->with('notice', 'Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulos=Articulo::find($id);    
        return view('CRUD/Articulos/show', ['articulos'=>$articulos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulos=Articulo::find($id);    
        return view('CRUD/Articulos/update', ['articulos'=>$articulos]);
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
        $articulos=Articulo::find($id);
        $articulos->nombre=$request->input('nombre');
        $file=$request->file('imagen');
        $articulos->precio=$request->input('precio');
        $articulos->unidad=$request->input('unidad');
        $articulos->stock=$request->input('stock');
        $articulos->descripcion=$request->input('descripcion');

        $articulos->save();
        return redirect()->action('ArticulosController@index')->with('notice', 'Registro modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulos= Articulo::find($id);
        $articulos->delete();        
        return redirect()->action('ArticulosController@index')->with('notice', 'SE HA ELIMINADO EL ARTICULO');
    }
}
