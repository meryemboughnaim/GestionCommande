@extends('home')
@section('content')
<div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-8">
        <div class="alert alert-secondary" role="alert">
  Welcome to your app <strong>{{Auth()->user()->name}}</strong> .
</div>
          </div>
          <div class="col-sm-2">
          </div>
      </div>
@endsection