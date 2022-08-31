{{ Form::open(['method' => 'POST', 'route' => ['role.store'], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
<div class="card-body">
    <div class="form-group">
        <label for="name">Nama </label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nama" required>
    </div>
    <div class="form-group">
        <label for="is_active">Status</label>
        {{Form::select('is_active', [0=> 'Tidak Aktif', 1=> 'Aktif'],null, ["class" => "form-control", "id"=> "status", "placeholder"=> "Pilih Status"])}}    
    </div>
</div>
{{ Form::close() }}
