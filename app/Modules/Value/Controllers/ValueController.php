<?php

namespace App\Modules\Value\Controllers;

use App\Http\Controllers\MainController;
use App\Http\Requests\StoreValue;
use Form;
use Models\Value as Value;

class ValueController extends MainController
{
    public function __construct()
    { 
        parent::__construct(new Value(), 'value', "List Value");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Value::index');
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
        return view('Value::create', ['people_id' => $people_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValue $request)
    {
        try {
            $this->_model::create($this->_serialize($request));
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Tambah data error => ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Tambah Data Berhasil.', 'redirectTo' => route('value.index')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Models\Value  $Value
     * @return \Illuminate\Http\Response
     */
    public function show($event_id)
    {
        $Value = $this->_model::find($event_id);
        return view('Value::show', ['value' => $Value]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Models\Value  $Value
     * @return \Illuminate\Http\Response
     */
    public function preview($event_id)
    {
        $Value = $this->_model::find($event_id);
        return view('Value::preview', ['value' => $Value]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Models\Value  $Value
     * @return \Illuminate\Http\Response
     */
    public function edit($event_id)
    {
        $Value = $this->_model::find($event_id);
        return view('Value::edit', ['value' => $Value]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Models\Value  $Value
     * @return \Illuminate\Http\Response
     */
    public function update($event_id)
    {
        try {
            $Value = $this->_model::find($event_id);
            if ($Value) {
                $Value->update($this->_serialize(request()));
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Update Data Error ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Update Data Berhasil.', 'redirectTo' => route('value.index')], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Models\Value  $Value
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id)
    {
        try {
            $Value = $this->_model::find($event_id);
            if ($Value) {
                $Value->delete();
            }
        } catch (\Throwable $e) {
            return response()->json(['status' => 'error', 'message' => 'Data Error ' . $e->getMessage()], 400);
        }
        return response()->json(['status' => 'success', 'message' => 'Hapus Data Berhasil.', 'redirectTo' => route('value.index')], 200);
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
