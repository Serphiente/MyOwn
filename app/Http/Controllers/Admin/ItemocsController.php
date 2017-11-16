<?php

namespace App\Http\Controllers\Admin;

use App\Itemoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreItemocsRequest;
use App\Http\Requests\Admin\UpdateItemocsRequest;

class ItemocsController extends Controller
{
    /**
     * Display a listing of Itemoc.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('itemoc_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('itemoc_delete')) {
                return abort(401);
            }
            $itemocs = Itemoc::onlyTrashed()->get();
        } else {
            $itemocs = Itemoc::all();
        }

        return view('admin.itemocs.index', compact('itemocs'));
    }

    /**
     * Show the form for creating new Itemoc.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('itemoc_create')) {
            return abort(401);
        }
        
        $items = \App\Listaexterna::get()->pluck('regisp', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.itemocs.create', compact('items'));
    }

    /**
     * Store a newly created Itemoc in storage.
     *
     * @param  \App\Http\Requests\StoreItemocsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemocsRequest $request)
    {
        if (! Gate::allows('itemoc_create')) {
            return abort(401);
        }
        $itemoc = Itemoc::create($request->all());



        return redirect()->route('admin.itemocs.index');
    }


    /**
     * Show the form for editing Itemoc.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('itemoc_edit')) {
            return abort(401);
        }
        
        $items = \App\Listaexterna::get()->pluck('regisp', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $itemoc = Itemoc::findOrFail($id);

        return view('admin.itemocs.edit', compact('itemoc', 'items'));
    }

    /**
     * Update Itemoc in storage.
     *
     * @param  \App\Http\Requests\UpdateItemocsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemocsRequest $request, $id)
    {
        if (! Gate::allows('itemoc_edit')) {
            return abort(401);
        }
        $itemoc = Itemoc::findOrFail($id);
        $itemoc->update($request->all());



        return redirect()->route('admin.itemocs.index');
    }


    /**
     * Display Itemoc.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('itemoc_view')) {
            return abort(401);
        }
        $itemoc = Itemoc::findOrFail($id);

        return view('admin.itemocs.show', compact('itemoc'));
    }


    /**
     * Remove Itemoc from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('itemoc_delete')) {
            return abort(401);
        }
        $itemoc = Itemoc::findOrFail($id);
        $itemoc->delete();

        return redirect()->route('admin.itemocs.index');
    }

    /**
     * Delete all selected Itemoc at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('itemoc_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Itemoc::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Itemoc from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('itemoc_delete')) {
            return abort(401);
        }
        $itemoc = Itemoc::onlyTrashed()->findOrFail($id);
        $itemoc->restore();

        return redirect()->route('admin.itemocs.index');
    }

    /**
     * Permanently delete Itemoc from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('itemoc_delete')) {
            return abort(401);
        }
        $itemoc = Itemoc::onlyTrashed()->findOrFail($id);
        $itemoc->forceDelete();

        return redirect()->route('admin.itemocs.index');
    }
}
