@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Compute') }}
                <a href="{{route('class.index')}}" class="btn tbn-sm btn-primary" style="float:right;">Go Back</a>
                </div>

                <div class="card-body">
                <table class = "table table-responsive table-strioe">
                    <thread>
                        <tr>
                            <td>SL</td>
                            <td>Name</td>
                            <td>Process</td>
                        </tr>
                    </thread>
                    <tbody>

                    <tr>
                            <td>1</td>
                            <td>Calculate Spendings</td>
                            <td>
                            <a href="{{route('class.spend')}}" class = "btn btn-sm btn-danger">Calculate</a>

                            </td>

                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Calculate Earnings</td>
                        <td>
                            <a href="{{route('class.save')}}" class = "btn btn-sm btn-danger">Calculate</a>

                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Calculate Savings</td>
                            <td>
                            <a href="{{route('class.savings')}}" class = "btn btn-sm btn-danger">Save</a>

                            </td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Whatt should I save</td>
                        <td>
                            <a href="{{route('class.what')}}" class = "btn btn-sm btn-danger">Save</a>

                            </td>
                        </tr>

                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
