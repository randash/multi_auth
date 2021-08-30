@extends('user.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Dashboard</div>

                    <div class="card-body">
                       hi
                        {{auth('user')->user()->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
