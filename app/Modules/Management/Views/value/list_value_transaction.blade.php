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
                            @if ($value_transactions->count() < 1)
                            <div class="alert alert-danger">
                                Belum Ada Regulasi Value 
                            </div>
                            <a href="#">Tambah Regulasi Value</a>
                            @else
                                <ol class="list-group">
                                    @foreach ($value_transactions as $value_transaction)
                                    <li class="list-group-item"> 
                                        <a href="#">{{$value_transaction->name}} </a>
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
