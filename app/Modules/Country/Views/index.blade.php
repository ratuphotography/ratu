@extends('layouts.app')
 
@section('plugins.DateRangePicker', true)
@section('content')
    <div id="container">
        @include('Country::list')
    </div> 
@stop
