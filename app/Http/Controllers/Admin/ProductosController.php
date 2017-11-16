<?php

namespace App\Http\Controllers\Admin;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductosRequest;
use App\Http\Requests\Admin\UpdateProductosRequest;

class ProductosController extends Controller
{
    /**
     * Display a listing of Producto.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('producto_access')) {
            return abort(401);
        }


                $productos = Producto::all();

        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating new Producto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('producto_create')) {
            return abort(401);
        }
        
        $tipo_productos = \App\Tipoproducto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $presentacion_productos = \App\Presentacionproducto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $principio_activos = \App\Principioactivo::get()->pluck('nombre', 'id');


        return view('admin.productos.create', compact('tipo_productos', 'presentacion_productos', 'principio_activos'));
    }

    /**
     * Store a newly created Producto in storage.
     *
     * @param  \App\Http\Requests\StoreProductosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductosRequest $request)
    {
        if (! Gate::allows('producto_create')) {
            return abort(401);
        }
        $producto = Producto::create($request->all());
        $producto->principio_activo()->sync(array_filter((array)$request->input('principio_activo')));



        return redirect()->route('admin.productos.index');
    }


    /**
     * Show the form for editing Producto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('producto_edit')) {
            return abort(401);
        }
        
        $tipo_productos = \App\Tipoproducto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $presentacion_productos = \App\Presentacionproducto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $principio_activos = \App\Principioactivo::get()->pluck('nombre', 'id');


        $producto = Producto::findOrFail($id);

        return view('admin.productos.edit', compact('producto', 'tipo_productos', 'presentacion_productos', 'principio_activos'));
    }

    /**
     * Update Producto in storage.
     *
     * @param  \App\Http\Requests\UpdateProductosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductosRequest $request, $id)
    {
        if (! Gate::allows('producto_edit')) {
            return abort(401);
        }
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        $producto->principio_activo()->sync(array_filter((array)$request->input('principio_activo')));



        return redirect()->route('admin.productos.index');
    }


    /**
     * Display Producto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('producto_view')) {
            return abort(401);
        }
        
        $tipo_productos = \App\Tipoproducto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $presentacion_productos = \App\Presentacionproducto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $principio_activos = \App\Principioactivo::get()->pluck('nombre', 'id');
$listaexternas = \App\Listaexterna::where('producto_id', $id)->get();

        $producto = Producto::findOrFail($id);

        return view('admin.productos.show', compact('producto', 'listaexternas'));
    }


    /**
     * Remove Producto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('producto_delete')) {
            return abort(401);
        }
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('admin.productos.index');
    }

    /**
     * Delete all selected Producto at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('producto_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Producto::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
