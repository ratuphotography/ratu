<?php

namespace App\Modules\Absence\Controllers;

use App\Http\Controllers\MainController;
use App\Http\Requests\StoreAbsence;
use Form;
use Models\Absence as Absence;

class AbsenceController extends MainController
{
    public function __construct()
    {
        parent::__construct(new Absence(), 'Absence', "Absensi");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Absence::index');
    }

    public function getListAjax()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $people_id = request()->has('people_id') ? request()->input('people_id') : null;
        return view('Absence::create', ['people_id' => $people_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbsence $request)
    {
        try {
            $this->_model::create($this->_serialize($request));
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Tambah data error => ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Tambah Data Berhasil.', 'redirectTo' => route('absence.index')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Models\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function show($event_id)
    {
        $Absence = $this->_model::find($event_id);
        return view('Absence::show', ['Absence' => $Absence]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Models\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function preview($event_id)
    {
        $Absence = $this->_model::find($event_id);
        return view('Absence::preview', ['Absence' => $Absence]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Models\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function edit($event_id)
    {
        $Absence = $this->_model::find($event_id);
        return view('Absence::edit', ['Absence' => $Absence]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Models\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function update($event_id)
    {
        try {
            $Absence = $this->_model::find($event_id);
            if ($Absence) {
                $Absence->update($this->_serialize(request()));
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Update Data Error ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Update Data Berhasil.', 'redirectTo' => route('absence.index')], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Models\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id)
    {
        try {
            $Absence = $this->_model::find($event_id);
            if ($Absence) {
                $Absence->delete();
            }
        } catch (\Throwable $e) {
            return response()->json(['status' => 'error', 'message' => 'Data Error ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Hapus Data Berhasil.', 'redirectTo' => route('absence.index')], 200);
    }

    public function filterArea()
    {
        $id = request()->input('id');
        $field = request()->input('field');
        $instance = request()->input('model');
        try {
            $model = new $instance;
            if (request()->has('index')) {
                $field = str_replace(request()->input('index'), "", $field);
            }
            $data = $model::where($field, $id)->pluck('name', 'id')->all();

            return Form::select($model->getTable() . "_id", $data, null, ['class' => 'form-control selectpicker', 'id' => $model->getTable() . "_id", 'placeholder' => say('--Pilih--'), 'data-live-search' => 'true']);
        } catch (\Throwable $th) {
            //throw $th;
        }

    }
}
