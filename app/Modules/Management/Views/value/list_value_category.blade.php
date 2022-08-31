@extends('layouts.app')

@section('content')
    <div id="container">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('management.value')}}"><i class="fa fa-arrow-left back" style="float: left"></i> </a>
                    </div>
                </div>
                <br> 
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            @if ($value_categories->count() < 1)
                            <div class="alert alert-danger">
                                Belum Ada Kategori Value 
                            </div>
                            <a href="#">Tambah Kategori Value</a>
                            @else
                                <ol class="list-group">
                                    @foreach ($value_categories as $key => $value_category)
                                    <li class="list-group-item">
                                        {{$key}}
                                        <a href="#">{{$value_category->name}} </a>
                                    </li>
                                    @endforeach
                                </ol>
                            @endif
                        </div>
                    </div>
                    
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@stop
