@extends('layouts.app')

@section('content')
    <div id="container">
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('management.absence')}}"><i class="fa fa-arrow-left back" style="float: left"></i> </a>
                        </div>
                    </div>
                    <br> 
                    <div class="row">
                        <div class="col-md-12">
                            @if ($absence_regulations->count() < 1)
                            <div class="alert alert-danger">
                                Belum Ada Regulasi Absensi 
                            </div>
                            <a href="#">Tambah Regulasi Absensi</a>
                            @else
                                <ol class="list-group">
                                    @foreach ($absence_regulations as $key => $absence_regulation)
                                    <li class="list-group-item">
                                        {{$key}}
                                        <a href="#">{{$absence_regulation->name}} </a>
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
