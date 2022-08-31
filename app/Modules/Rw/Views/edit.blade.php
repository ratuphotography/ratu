{{ Form::model($rw, ['method' => 'PUT', 'route' => ['rw.update', $rw->id], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
<div class="card-body">
    <div class="form-group">
        <label for="name">Nama RW</label>
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
    <div class="form-group">
        <label for="region_id">Kelurahan</label>
        {{ Form::select('subdistrict_id', \Models\Subdistrict::pluck('name', 'id')->all(), null, ['class' => 'form-control selectpicker', 'id' => 'subdistrict_id', 'data-live-search' => 'true', 'data-style' => 'btn-success']) }}
    </div>
  </div>
{{ Form::close() }}
