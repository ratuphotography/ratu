@extends('layouts.app')

@section('content')
    <div id="container">
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <i class="fas fa-male text-info mx-2"></i> 
                            <a href="{{route('management.list_absence_category')}}">Kategori Absensi <i class="fa fa-angle-right"></i></a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-male text-info mx-2"></i>
                            <a href="{{route('management.list_absence_regulation')}}">Daftar Regulasi Absensi <i class="fa fa-angle-right"></i></a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-male text-info mx-2"></i> 
                            <a href="{{route('management.list_absence_team')}}">Absensi Tim <i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@stop
