@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        hi
                        {{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection