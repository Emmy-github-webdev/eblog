@extends('layouts.base')

@section('body')
<!--Navigation-->
@include('includes.nav')

<!--Site wraper-->
<div class="site_wrapper">

    @yield('content')

</div>

@include('includes.footer') 
@stop