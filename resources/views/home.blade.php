@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card mb-5 rounded" style="border:none;">
                <div class="card-header" style="background-color:#333333;"><img src="{{asset('img/logo.png')}}" height="70px" weight="70px" alt="No image"/></div>

                <div class="card-body" id="app">
                  
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
