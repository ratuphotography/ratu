{{ Form::model($Value, ['method' => 'PUT', 'route' => ['value.update', $Value->id], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
<div class="card-body">
    <div class="form-group">
        <label for="region_id">Provinsi</label>
         {{Form::text('name')}}
    </div>
</div>
{{ Form::close() }}
