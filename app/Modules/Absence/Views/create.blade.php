{{ Form::open(['method' => 'POST', 'route' => ['absence.store'], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
{{Form::hidden('people_id', $people_id)}}
<div class="card-body"> 
    
    <div class="form-group">
        <label for="region_id">Provinsi</label>
         {{Form::text('name')}}
    </div>
     
</div>
<!-- /.card-body -->
{{ Form::close() }} 