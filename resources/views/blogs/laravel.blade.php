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
                                        Deploy Laravel Project On Heroku
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