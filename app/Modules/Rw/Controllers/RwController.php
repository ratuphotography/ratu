<?php

namespace App\Modules\Rw\Controllers;

use App\Http\Controllers\MainController;
use App\Http\Requests\StoreRw;
use Models\Rw as rw;

class RwController extends MainController
{
    public function __construct()
    {
        parent::__construct(new rw(), 'rw');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Rw::index');
    }

    public function getListAjax()
    {
        if (request()->ajax()) {
            $rws = $this->_model::with(['subdistrict'])->select('*');
            if (request()->has('subdistrict_id')) {
                $rws->where('subdistrict_id', request()->input('subdistrict_id'));
            }
            return datatables()->of($rws)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if ($row) {
                        $btn = '<div class="justify-content-between">';
                        $btn .= edit(['url' => route('rw.edit', $row->id), 'title' => $row->name]);
                        $btn .= show(['url' => route('rw.show', $row->id), 'title' => $row->name]);
                        $btn .= hapus(['url' => route('rw.destroy', $row->id), 'preview' => route('rw.preview', $row->id), 'title' => $row->name]);
                        $btn .= '</div>';
                        return $btn;

                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subdistrict = request()->has('subdistrict_id') ? \Models\Subdistrict::find(request()->input('subdistrict_id')) : null;
        return view('Rw::create', ['subdistrict' => $subdistrict]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRw $request)
    {
        try {
            $this->_model::create($this->_serialize($request));
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Tambah data error => ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Tambah Data Berhasil.', 'redirectTo' => route('rw.index')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($rw_id)
    {
        $rw = $this->_model::find($rw_id);
        return view('Rw::show', ['rw' => $rw]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function preview($rw_id)
    {
        $rw = $this->_model::find($rw_id);
        return view('Rw::preview', ['rw' => $rw]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($rw_id)
    {
        $rw = $this->_model::find($rw_id);
        return view('Rw::edit', ['rw' => $rw]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update($rw_id)
    {
        try {
            $rw = $this->_model::find($rw_id);
            if ($rw) {
                $rw->update($this->_serialize(request()));
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Update Data Error ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Update Data Berhasil.', 'redirectTo' => route('rw.index')], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($rw_id)
    {
        try {
            $rw = $this->_model::find($rw_id);
            if ($rw) {
                $rw->delete();
            }
        } catch (\Throwable $e) {
            return response()->json(['status' => 'error', 'message' => 'Data Error ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Hapus Data Berhasil.', 'redirectTo' => route('rw.index')], 200);
    }
}
