@extends('layouts.app')

@section('content')
    <div id="container">
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    {{ Form::open(['method' => 'POST', 'route' => ['value.store'], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
                   
                   <div class="row">
                       <div class="col-md-12">
                            <label for="name" class="col-md-12">Nama Value</label>
                            {{ Form::text('name', null, ['class'=> 'form-control']) }}
                        </div>
                   </div>
                   {{ Form::close() }}
                </div>
                <!-- /.card-body -->
            </div>
        </section> 
    </div>
@stop
