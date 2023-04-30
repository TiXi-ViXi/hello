@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New') }}
                <a href="{{route('class.index')}}" class="btn tbn-sm btn-primary" style="float:right;">Go Back</a>
                </div>

                <div class="card-body">
                    @if(session()->has('success'))
                    <strong class="text-success">{{session()->get('success')}}</strong>
                    @endif
                <form action="{{route('store.class')}}" method= "post">
                    @csrf
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="for-label">Name</label>
                        <input type="text" name ="name" class="form-control"  id="exampleInputEmail1" placeholder="Class Name">
                        <label for="exampleInputEmail1" class="for-label">Amount</label>
                        <input type="text" name ="amount" class="form-control"  id="exampleInputEmail1" placeholder="Amount">
                        <label for="exampleInputEmail1" class="for-label">Amount</label>
                        <input type="text" name ="what" class="form-control"  id="exampleInputEmail1" placeholder="Positive Or Negetive">
</div>
<button type="submit" class="btn btn-primary">Submit</button>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{route('class.index')}}">asdasdsa</a>
@endsection
