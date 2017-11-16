<?php

namespace App\Http\Controllers\Admin;

use App\Presentacionproducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePresentacionproductosRequest;
use App\Http\Requests\Admin\UpdatePresentacionproductosRequest;

class PresentacionproductosController extends Controller
{
    /**
     * Display a listing of Presentacionproducto.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('presentacionproducto_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('presentacionproducto_delete')) {
                return abort(401);
            }
            $presentacionproductos = Presentacionproducto::onlyTrashed()->get();
        } else {
            $presentacionproductos = Presentacionproducto::all();
        }

        return view('admin.presentacionproductos.index', compact('presentacionproductos'));
    }

    /**
     * Show the form for creating new Presentacionproducto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('presentacionproducto_create')) {
            return abort(401);
        }
        return view('admin.presentacionproductos.create');
    }

    /**
     * Store a newly created Presentacionproducto in storage.
     *
     * @param  \App\Http\Requests\StorePresentacionproductosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePresentacionproductosRequest $request)
    {
        if (! Gate::allows('presentacionproducto_create')) {
            return abort(401);
        }
        $presentacionproducto = Presentacionproducto::create($request->all());



        return redirect()->route('admin.presentacionproductos.index');
    }


    /**
     * Show the form for editing Presentacionproducto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('presentacionproducto_edit')) {
            return abort(401);
        }
        $presentacionproducto = Presentacionproducto::findOrFail($id);

        return view('admin.presentacionproductos.edit', compact('presentacionproducto'));
    }

    /**
     * Update Presentacionproducto in storage.
     *
     * @param  \App\Http\Requests\UpdatePresentacionproductosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePresentacionproductosRequest $request, $id)
    {
        if (! Gate::allows('presentacionproducto_edit')) {
            return abort(401);
        }
        $presentacionproducto = Presentacionproducto::findOrFail($id);
        $presentacionproducto->update($request->all());



        return redirect()->route('admin.presentacionproductos.index');
    }


    /**
     * Display Presentacionproducto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('presentacionproducto_view')) {
            return abort(401);
        }
        $productos = \App\Producto::where('presentacion_producto_id', $id)->get();

        $presentacionproducto = Presentacionproducto::findOrFail($id);

        return view('admin.presentacionproductos.show', compact('presentacionproducto', 'productos'));
    }


    /**
     * Remove Presentacionproducto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('presentacionproducto_delete')) {
            return abort(401);
        }
        $presentacionproducto = Presentacionproducto::findOrFail($id);
        $presentacionproducto->delete();

        return redirect()->route('admin.presentacionproductos.index');
    }

    /**
     * Delete all selected Presentacionproducto at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('presentacionproducto_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Presentacionproducto::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Presentacionproducto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('presentacionproducto_delete')) {
            return abort(401);
        }
        $presentacionproducto = Presentacionproducto::onlyTrashed()->findOrFail($id);
        $presentacionproducto->restore();

        return redirect()->route('admin.presentacionproductos.index');
    }

    /**
     * Permanently delete Presentacionproducto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('presentacionproducto_delete')) {
            return abort(401);
        }
        $presentacionproducto = Presentacionproducto::onlyTrashed()->findOrFail($id);
        $presentacionproducto->forceDelete();

        return redirect()->route('admin.presentacionproductos.index');
    }
}
