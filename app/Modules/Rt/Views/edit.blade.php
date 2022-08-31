{{ Form::model($rt, ['method' => 'PUT', 'route' => ['rt.update', $rt->id], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
<div class="card-body">
    <div class="form-group">
        <label for="name">RT</label>
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
    <div class="form-group">
        <label for="rw_id">RW</label>
        {{ Form::select('rw_id', \Models\Rw::pluck('name', 'id')->all(), null, ['class' => 'form-control selectpicker', 'id' => 'rw_id', 'data-live-search' => 'true', 'data-style' => 'btn-success']) }}
    </div>
  </div>
{{ Form::close() }}
