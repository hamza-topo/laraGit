@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">{{ __(' WHO AM I ? ') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            ​<picture>
                                <img src="{{asset('img/about-me.jpg')}}" class="img-fluid img-thumbnail" style="border-radius: 50%;" alt="...">
                            </picture>
                            <div style="text-align: center; align-items: center;" >
                            <a>Facebook</a>
                            <a>Twitter</a>
                            <a>Linkedin</a>
                        </div>
                        </div>
                        <div class="col-md-8">
                            <p>Hamza or Topo ,or whatever you like to call me !</p>
                            <p>I'm a web developer ,curious about what the IT can bring to the world,that's why I keep reading,searching,coding all the time.</p>
                            <p>I believe that I can't never achieve the perfection,  however, that's the only way to improve my skills, at least to reach the best version of me.</p>
                            <p>As a beginner ,I rely too much on </strong>PHP/LARAVEL</strong>, But i can change/switch it at any moment, in the end it remains just a weapon for solving problems. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection