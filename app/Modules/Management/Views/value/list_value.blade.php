@extends('layouts.app')

@section('content')
    <div id="container">
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('management.value')}}"><i class="fa fa-arrow-left back" style="float: left"></i> </a>
                        </div>
                    </div>
                    <br> 
                    <div class="row">
                        <div class="col-md-12">
                            @if ($values->count() < 1)
                            <div class="alert alert-danger">
                                Belum Ada Data Value 
                            </div> 
                            @else
                                <ol class="list-group">
                                    @foreach ($values as $value)
                                    <li class="list-group-item"> 
                                        <a href="#">{{$value->name}} </a>
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
