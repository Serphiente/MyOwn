<?php

namespace App\Http\Controllers\Admin;

use App\Tipoproducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTipoproductosRequest;
use App\Http\Requests\Admin\UpdateTipoproductosRequest;

class TipoproductosController extends Controller
{
    /**
     * Display a listing of Tipoproducto.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('tipoproducto_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('tipoproducto_delete')) {
                return abort(401);
            }
            $tipoproductos = Tipoproducto::onlyTrashed()->get();
        } else {
            $tipoproductos = Tipoproducto::all();
        }

        return view('admin.tipoproductos.index', compact('tipoproductos'));
    }

    /**
     * Show the form for creating new Tipoproducto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('tipoproducto_create')) {
            return abort(401);
        }
        return view('admin.tipoproductos.create');
    }

    /**
     * Store a newly created Tipoproducto in storage.
     *
     * @param  \App\Http\Requests\StoreTipoproductosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoproductosRequest $request)
    {
        if (! Gate::allows('tipoproducto_create')) {
            return abort(401);
        }
        $tipoproducto = Tipoproducto::create($request->all());



        return redirect()->route('admin.tipoproductos.index');
    }


    /**
     * Show the form for editing Tipoproducto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('tipoproducto_edit')) {
            return abort(401);
        }
        $tipoproducto = Tipoproducto::findOrFail($id);

        return view('admin.tipoproductos.edit', compact('tipoproducto'));
    }

    /**
     * Update Tipoproducto in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoproductosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoproductosRequest $request, $id)
    {
        if (! Gate::allows('tipoproducto_edit')) {
            return abort(401);
        }
        $tipoproducto = Tipoproducto::findOrFail($id);
        $tipoproducto->update($request->all());



        return redirect()->route('admin.tipoproductos.index');
    }


    /**
     * Display Tipoproducto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('tipoproducto_view')) {
            return abort(401);
        }
        $productos = \App\Producto::where('tipo_producto_id', $id)->get();

        $tipoproducto = Tipoproducto::findOrFail($id);

        return view('admin.tipoproductos.show', compact('tipoproducto', 'productos'));
    }


    /**
     * Remove Tipoproducto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('tipoproducto_delete')) {
            return abort(401);
        }
        $tipoproducto = Tipoproducto::findOrFail($id);
        $tipoproducto->delete();

        return redirect()->route('admin.tipoproductos.index');
    }

    /**
     * Delete all selected Tipoproducto at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('tipoproducto_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Tipoproducto::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Tipoproducto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('tipoproducto_delete')) {
            return abort(401);
        }
        $tipoproducto = Tipoproducto::onlyTrashed()->findOrFail($id);
        $tipoproducto->restore();

        return redirect()->route('admin.tipoproductos.index');
    }

    /**
     * Permanently delete Tipoproducto from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('tipoproducto_delete')) {
            return abort(401);
        }
        $tipoproducto = Tipoproducto::onlyTrashed()->findOrFail($id);
        $tipoproducto->forceDelete();

        return redirect()->route('admin.tipoproductos.index');
    }
}
