@extends('layouts.app')

@section('content')
<style>
.button{
    color: aquamarine;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<button style="background-color: red; height:100px; width:100px;"><a href="{{route('class.index')}}">View</a></button>
<button style="background-color: red; height:100px; width:100px;"><a href="{{route('compute.index')}}">Compute</a></button>
<button style="background-color: red; height:100px; width:100px;"><a href="{{route('compute.find')}}">Status</a></button>
@endsection
