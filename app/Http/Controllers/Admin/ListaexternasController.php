<?php

namespace App\Http\Controllers\Admin;

use App\Listaexterna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreListaexternasRequest;
use App\Http\Requests\Admin\UpdateListaexternasRequest;

class ListaexternasController extends Controller
{
    /**
     * Display a listing of Listaexterna.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('listaexterna_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('listaexterna_delete')) {
                return abort(401);
            }
            $listaexternas = Listaexterna::onlyTrashed()->get();
        } else {
            $listaexternas = Listaexterna::all();
        }

        return view('admin.listaexternas.index', compact('listaexternas'));
    }

    /**
     * Show the form for creating new Listaexterna.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('listaexterna_create')) {
            return abort(401);
        }
        
        $productos = \App\Producto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $proveedors = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $marcas = \App\Manufacturador::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.listaexternas.create', compact('productos', 'proveedors', 'marcas'));
    }

    /**
     * Store a newly created Listaexterna in storage.
     *
     * @param  \App\Http\Requests\StoreListaexternasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListaexternasRequest $request)
    {
        if (! Gate::allows('listaexterna_create')) {
            return abort(401);
        }
        $listaexterna = Listaexterna::create($request->all());

        foreach ($request->input('itemocs', []) as $data) {
            $listaexterna->itemoc()->create($data);
        }


        return redirect()->route('admin.listaexternas.index');
    }


    /**
     * Show the form for editing Listaexterna.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('listaexterna_edit')) {
            return abort(401);
        }
        
        $productos = \App\Producto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $proveedors = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $marcas = \App\Manufacturador::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $listaexterna = Listaexterna::findOrFail($id);

        return view('admin.listaexternas.edit', compact('listaexterna', 'productos', 'proveedors', 'marcas'));
    }

    /**
     * Update Listaexterna in storage.
     *
     * @param  \App\Http\Requests\UpdateListaexternasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListaexternasRequest $request, $id)
    {
        if (! Gate::allows('listaexterna_edit')) {
            return abort(401);
        }
        $listaexterna = Listaexterna::findOrFail($id);
        $listaexterna->update($request->all());

        $itemocs           = $listaexterna->itemoc;
        $currentItemocData = [];
        foreach ($request->input('itemocs', []) as $index => $data) {
            if (is_integer($index)) {
                $listaexterna->itemoc()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentItemocData[$id] = $data;
            }
        }
        foreach ($itemocs as $item) {
            if (isset($currentItemocData[$item->id])) {
                $item->update($currentItemocData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.listaexternas.index');
    }


    /**
     * Display Listaexterna.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('listaexterna_view')) {
            return abort(401);
        }
        
        $productos = \App\Producto::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $proveedors = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $marcas = \App\Manufacturador::get()->pluck('nombre', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$itemocs = \App\Itemoc::where('item_id', $id)->get();

        $listaexterna = Listaexterna::findOrFail($id);

        return view('admin.listaexternas.show', compact('listaexterna', 'itemocs'));
    }


    /**
     * Remove Listaexterna from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('listaexterna_delete')) {
            return abort(401);
        }
        $listaexterna = Listaexterna::findOrFail($id);
        $listaexterna->delete();

        return redirect()->route('admin.listaexternas.index');
    }

    /**
     * Delete all selected Listaexterna at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('listaexterna_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Listaexterna::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Listaexterna from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('listaexterna_delete')) {
            return abort(401);
        }
        $listaexterna = Listaexterna::onlyTrashed()->findOrFail($id);
        $listaexterna->restore();

        return redirect()->route('admin.listaexternas.index');
    }

    /**
     * Permanently delete Listaexterna from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('listaexterna_delete')) {
            return abort(401);
        }
        $listaexterna = Listaexterna::onlyTrashed()->findOrFail($id);
        $listaexterna->forceDelete();

        return redirect()->route('admin.listaexternas.index');
    }
}
