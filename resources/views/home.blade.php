@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>

        
</div>


{{-- <img src="images/{{ Session::get('image') }}"> --}}
@endif

<div>
    <a href="{{route('cadastrar.produto')}}">ok entao</a>
</div>

@endsection
