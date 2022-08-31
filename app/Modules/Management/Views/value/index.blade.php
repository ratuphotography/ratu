@extends('layouts.app')

@section('content')
    <div id="container">
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <i class="fas fa-male text-info mx-2"></i> 
                            <a href="{{route('management.list_value_category')}}">Daftar Kategori Value <i class="fa fa-angle-right"></i></a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-male text-info mx-2"></i>
                            <a href="{{route('management.list_value_transaction')}}">Daftar Transaksi Value <i class="fa fa-angle-right"></i></a>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-male text-info mx-2"></i> 
                            <a href="{{route('management.list_value')}}">Daftar Value <i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.card-body -->
            </div>
        </section> 
    </div>
@stop
