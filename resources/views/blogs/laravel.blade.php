@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" style="text-align: center;">
            Blogs
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" style="text-align: center;">
                            sommaire
                        </div>
                        <div class="card-body">
                            <div class="bd-example">
                                <summary onclick="setBlogTile('Deploy Laravel Project On Heroku',0)">
                                    <strong>
                                    <a href="#">1-Deploy Laravel Project On Heroku</a>
                                    </strong>
                                </summary>
                                <summary onclick="setBlogTile('How to use Laravel Socialite Package ?',1)">
                                    <strong>
                                        <a href="#">2-How to use Laravel Socialite Package ?</a>
                                    </strong>
                                </summary>
                                <summary onclick="setBlogTile('Laravel Events and Observers',2  )">
                                    <strong>
                                        <a href="#">3-Laravel Events and Observers (Observers)</a>
                                    </strong>

                                </summary>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div id="card-header-title" class="card-header" style="text-align: center;">
                            <strong>Title</strong>
                        </div>
                        <div id="card-body" class="card-body">
                            <div id="content">

                            </div>
                          
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection