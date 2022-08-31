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
                            @if ($absences->count() < 1)
                            <div class="alert alert-danger">
                                Belum Ada Data Absensi 
                            </div> 
                            @else
                                <ol class="list-group">
                                    @foreach ($absences as $key => $absence)
                                    <li class="list-group-item">
                                        {{$key}}
                                        <a href="#">{{$absence->name}} </a>
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
