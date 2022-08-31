@extends('layouts.app')
 
@section('plugins.DateRangePicker', true)
@section('content')
    <div id="container">
        @include('District::list')
    </div> 
@stop
