<?php

namespace App\Http\Controllers\Admin;

use App\Ordendecompra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOrdendecomprasRequest;
use App\Http\Requests\Admin\UpdateOrdendecomprasRequest;

class OrdendecomprasController extends Controller
{
    /**
     * Display a listing of Ordendecompra.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('ordendecompra_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('ordendecompra_delete')) {
                return abort(401);
            }
            $ordendecompras = Ordendecompra::onlyTrashed()->get();
        } else {
            $ordendecompras = Ordendecompra::all();
        }

        return view('admin.ordendecompras.index', compact('ordendecompras'));
    }

    /**
     * Show the form for creating new Ordendecompra.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('ordendecompra_create')) {
            return abort(401);
        }
        
        $proveedors = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $contactos = \App\Contact::get()->pluck('first_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.ordendecompras.create', compact('proveedors', 'contactos'));
    }

    /**
     * Store a newly created Ordendecompra in storage.
     *
     * @param  \App\Http\Requests\StoreOrdendecomprasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdendecomprasRequest $request)
    {
        if (! Gate::allows('ordendecompra_create')) {
            return abort(401);
        }
        $ordendecompra = Ordendecompra::create($request->all());



        return redirect()->route('admin.ordendecompras.index');
    }


    /**
     * Show the form for editing Ordendecompra.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('ordendecompra_edit')) {
            return abort(401);
        }
        
        $proveedors = \App\ContactCompany::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $contactos = \App\Contact::get()->pluck('first_name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $ordendecompra = Ordendecompra::findOrFail($id);

        return view('admin.ordendecompras.edit', compact('ordendecompra', 'proveedors', 'contactos'));
    }

    /**
     * Update Ordendecompra in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdendecomprasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdendecomprasRequest $request, $id)
    {
        if (! Gate::allows('ordendecompra_edit')) {
            return abort(401);
        }
        $ordendecompra = Ordendecompra::findOrFail($id);
        $ordendecompra->update($request->all());



        return redirect()->route('admin.ordendecompras.index');
    }


    /**
     * Display Ordendecompra.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('ordendecompra_view')) {
            return abort(401);
        }
        $ordendecompra = Ordendecompra::findOrFail($id);

        return view('admin.ordendecompras.show', compact('ordendecompra'));
    }


    /**
     * Remove Ordendecompra from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('ordendecompra_delete')) {
            return abort(401);
        }
        $ordendecompra = Ordendecompra::findOrFail($id);
        $ordendecompra->delete();

        return redirect()->route('admin.ordendecompras.index');
    }

    /**
     * Delete all selected Ordendecompra at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('ordendecompra_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Ordendecompra::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Ordendecompra from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('ordendecompra_delete')) {
            return abort(401);
        }
        $ordendecompra = Ordendecompra::onlyTrashed()->findOrFail($id);
        $ordendecompra->restore();

        return redirect()->route('admin.ordendecompras.index');
    }

    /**
     * Permanently delete Ordendecompra from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('ordendecompra_delete')) {
            return abort(401);
        }
        $ordendecompra = Ordendecompra::onlyTrashed()->findOrFail($id);
        $ordendecompra->forceDelete();

        return redirect()->route('admin.ordendecompras.index');
    }
}
