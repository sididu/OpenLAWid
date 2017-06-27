@extends('adminlte::page')

@section('title', 'Legal IT')

@section('css')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</style>

@endsection

@section('content_header')
<div><h3><a href='home' ><img class="push-left" src="dist/img/openlaw-dark.png" height="50"></a>
  Dashboard
  <small>Control panel</small>
</h3>
</div>
@endsection

@section('content')

@include('partials._dataperkara')

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">
    @include('partials._3dpiedonut')
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    @include('partials._3dbubble')
  </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
  @include('partials._pemulihanaset')
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
    @include('partials._kerugiannegara')
  </div>
</div>
@endsection

@section('js')



@endsection