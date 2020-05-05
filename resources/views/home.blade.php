@extends('layouts.app')
@section('content')
<div class='panel panel-default'>
   <div class='panel-heading text-center'>Dashboard</div>
   <div class='panel-body text-center'>
      You are logged in! as <strong>{{ strtoupper(Auth::user()->type) }}</strong>

   </div>
</div>
@endsection
