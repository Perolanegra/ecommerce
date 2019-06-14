@extends('index.classic')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>

        
</div>


{{-- <img src="images/{{ Session::get('image') }}"> --}}
@endif

<ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        
    </ul>

<div>
    {{-- <a href="{{route('cadastrar.produto')}}">ok entao</a> --}}
</div>

@endsection
