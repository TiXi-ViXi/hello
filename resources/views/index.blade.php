
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All class') }}
                <a href="{{route('create.class')}}" class="btn tbn-sm btn-primary" style="float:right;">Add New</a>
                </div>

                <div class="card-body">

                <table class = "table table-responsive table-strioe">
                    <thread>
                        <tr>
                            <td>SL</td>
                            <td>Class Name</td>
                            <td>Amount</td>
                            <td>What</td>
                            <td>Time</td>
                            <td>Action</td>
                        </tr>
                    </thread>
                    <tbody>
                        @foreach($class as $key=>$row)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->amount }}</td>
                            <td>{{ $row->what }}</td>
                            <td>{{ $row->created_at}}</td>
                            <td>
                            <a href="{{route('class.delete' ,$row->id)}}" class = "btn btn-sm btn-danger">delete</a>

                            </td>
                        </tr>
                        @endforeach()
                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
