<?php

namespace App\Modules\Rt\Controllers;

use App\Http\Controllers\MainController;
use App\Http\Requests\StoreRt;
use Models\Rt as rt;

class RtController extends MainController
{
    public function __construct()
    {
        parent::__construct(new rt(), 'rt');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Rt::index');
    }

    public function getListAjax()
    {
        if (request()->ajax()) {
            $rts = $this->_model::with(['rw'])->select('*');
            if (request()->has('rw_id')) {
                $rts->where('rw_id', request()->input('rw_id'));
            }
            return datatables()->of($rts)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if ($row) {
                        $btn = '<div class="justify-content-between">';
                        $btn .= edit(['url' => route('rt.edit', $row->id), 'title' => $row->name]);
                        $btn .= show(['url' => route('rt.show', $row->id), 'title' => $row->name]);
                        $btn .= hapus(['url' => route('rt.destroy', $row->id), 'preview' => route('rt.preview', $row->id), 'title' => $row->name]);
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
        $rw = request()->has('rw_id') ? \Models\Rw::find(request()->input('rw_id')) : null;
        return view('Rt::create', ['rw' => $rw]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRt $request)
    {
        try {
            $this->_model::create($this->_serialize($request));
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Tambah data error => ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Tambah Data Berhasil.', 'redirectTo' => route('rt.index')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function show($rt_id)
    {
        $rt = $this->_model::find($rt_id);
        return view('Rt::show', ['rt' => $rt]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function preview($rt_id)
    {
        $rt = $this->_model::find($rt_id);
        return view('Rt::preview', ['rt' => $rt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function edit($rt_id)
    {
        $rt = $this->_model::find($rt_id);
        return view('Rt::edit', ['rt' => $rt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function update($rt_id)
    {
        try {
            $rt = $this->_model::find($rt_id);
            if ($rt) {
                $rt->update($this->_serialize(request()));
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Update Data Error ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Update Data Berhasil.', 'redirectTo' => route('rt.index')], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Models\Rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function destroy($rt_id)
    {
        try {
            $rt = $this->_model::find($rt_id);
            if ($rt) {
                $rt->delete();
            }
        } catch (\Throwable $e) {
            return response()->json(['status' => 'error', 'message' => 'Data Error ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Hapus Data Berhasil.', 'redirectTo' => route('rt.index')], 200);
    }
}
