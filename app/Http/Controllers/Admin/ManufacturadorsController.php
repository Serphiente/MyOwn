<?php

namespace App\Http\Controllers\Admin;

use App\Manufacturador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreManufacturadorsRequest;
use App\Http\Requests\Admin\UpdateManufacturadorsRequest;

class ManufacturadorsController extends Controller
{
    /**
     * Display a listing of Manufacturador.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('manufacturador_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('manufacturador_delete')) {
                return abort(401);
            }
            $manufacturadors = Manufacturador::onlyTrashed()->get();
        } else {
            $manufacturadors = Manufacturador::all();
        }

        return view('admin.manufacturadors.index', compact('manufacturadors'));
    }

    /**
     * Show the form for creating new Manufacturador.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('manufacturador_create')) {
            return abort(401);
        }
        return view('admin.manufacturadors.create');
    }

    /**
     * Store a newly created Manufacturador in storage.
     *
     * @param  \App\Http\Requests\StoreManufacturadorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManufacturadorsRequest $request)
    {
        if (! Gate::allows('manufacturador_create')) {
            return abort(401);
        }
        $manufacturador = Manufacturador::create($request->all());



        return redirect()->route('admin.manufacturadors.index');
    }


    /**
     * Show the form for editing Manufacturador.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('manufacturador_edit')) {
            return abort(401);
        }
        $manufacturador = Manufacturador::findOrFail($id);

        return view('admin.manufacturadors.edit', compact('manufacturador'));
    }

    /**
     * Update Manufacturador in storage.
     *
     * @param  \App\Http\Requests\UpdateManufacturadorsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManufacturadorsRequest $request, $id)
    {
        if (! Gate::allows('manufacturador_edit')) {
            return abort(401);
        }
        $manufacturador = Manufacturador::findOrFail($id);
        $manufacturador->update($request->all());



        return redirect()->route('admin.manufacturadors.index');
    }


    /**
     * Display Manufacturador.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('manufacturador_view')) {
            return abort(401);
        }
        $listaexternas = \App\Listaexterna::where('marca_id', $id)->get();

        $manufacturador = Manufacturador::findOrFail($id);

        return view('admin.manufacturadors.show', compact('manufacturador', 'listaexternas'));
    }


    /**
     * Remove Manufacturador from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('manufacturador_delete')) {
            return abort(401);
        }
        $manufacturador = Manufacturador::findOrFail($id);
        $manufacturador->delete();

        return redirect()->route('admin.manufacturadors.index');
    }

    /**
     * Delete all selected Manufacturador at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('manufacturador_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Manufacturador::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Manufacturador from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('manufacturador_delete')) {
            return abort(401);
        }
        $manufacturador = Manufacturador::onlyTrashed()->findOrFail($id);
        $manufacturador->restore();

        return redirect()->route('admin.manufacturadors.index');
    }

    /**
     * Permanently delete Manufacturador from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('manufacturador_delete')) {
            return abort(401);
        }
        $manufacturador = Manufacturador::onlyTrashed()->findOrFail($id);
        $manufacturador->forceDelete();

        return redirect()->route('admin.manufacturadors.index');
    }
}
