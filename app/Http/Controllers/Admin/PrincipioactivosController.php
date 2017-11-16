<?php

namespace App\Http\Controllers\Admin;

use App\Principioactivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePrincipioactivosRequest;
use App\Http\Requests\Admin\UpdatePrincipioactivosRequest;

class PrincipioactivosController extends Controller
{
    /**
     * Display a listing of Principioactivo.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('principioactivo_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('principioactivo_delete')) {
                return abort(401);
            }
            $principioactivos = Principioactivo::onlyTrashed()->get();
        } else {
            $principioactivos = Principioactivo::all();
        }

        return view('admin.principioactivos.index', compact('principioactivos'));
    }

    /**
     * Show the form for creating new Principioactivo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('principioactivo_create')) {
            return abort(401);
        }
        return view('admin.principioactivos.create');
    }

    /**
     * Store a newly created Principioactivo in storage.
     *
     * @param  \App\Http\Requests\StorePrincipioactivosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrincipioactivosRequest $request)
    {
        if (! Gate::allows('principioactivo_create')) {
            return abort(401);
        }
        $principioactivo = Principioactivo::create($request->all());



        return redirect()->route('admin.principioactivos.index');
    }


    /**
     * Show the form for editing Principioactivo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('principioactivo_edit')) {
            return abort(401);
        }
        $principioactivo = Principioactivo::findOrFail($id);

        return view('admin.principioactivos.edit', compact('principioactivo'));
    }

    /**
     * Update Principioactivo in storage.
     *
     * @param  \App\Http\Requests\UpdatePrincipioactivosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrincipioactivosRequest $request, $id)
    {
        if (! Gate::allows('principioactivo_edit')) {
            return abort(401);
        }
        $principioactivo = Principioactivo::findOrFail($id);
        $principioactivo->update($request->all());



        return redirect()->route('admin.principioactivos.index');
    }


    /**
     * Display Principioactivo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('principioactivo_view')) {
            return abort(401);
        }
        $productos = \App\Producto::whereHas('principio_activo',
                    function ($query) use ($id) {
                        $query->where('id', $id);
                    })->get();

        $principioactivo = Principioactivo::findOrFail($id);

        return view('admin.principioactivos.show', compact('principioactivo', 'productos'));
    }


    /**
     * Remove Principioactivo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('principioactivo_delete')) {
            return abort(401);
        }
        $principioactivo = Principioactivo::findOrFail($id);
        $principioactivo->delete();

        return redirect()->route('admin.principioactivos.index');
    }

    /**
     * Delete all selected Principioactivo at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('principioactivo_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Principioactivo::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Principioactivo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('principioactivo_delete')) {
            return abort(401);
        }
        $principioactivo = Principioactivo::onlyTrashed()->findOrFail($id);
        $principioactivo->restore();

        return redirect()->route('admin.principioactivos.index');
    }

    /**
     * Permanently delete Principioactivo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('principioactivo_delete')) {
            return abort(401);
        }
        $principioactivo = Principioactivo::onlyTrashed()->findOrFail($id);
        $principioactivo->forceDelete();

        return redirect()->route('admin.principioactivos.index');
    }
}
