@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" style="text-align: center;">
            Tutorials
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" style="text-align: center;">Laravel</div>
                        <img src="{{asset('img/lara.png')}}" class="card-img-top" alt="Laravel tutorials">
                        <div class="card-body">
                            <p class="card-text">{{__('Answers for How to ...')}}</p>
                            <div style="text-align: center;">
                            <a href="{{ url('/tutorials/socialite') }}" class="btn btn-primary" >{{__('More')}}</a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">07-11-2020</small>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection