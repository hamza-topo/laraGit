@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header" style="text-align: center;">
            {{__('Tutorials')}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header" style="text-align: center;">
                            {{__('How to ?')}}
                        </div>
                        <div class="card-body">
                            <div class="bd-example">
                                <summary onclick="setTutorialTile('How to use Laravel socialite ?',0)">
                                    <strong>
                                        How to use Laravel socialite ?
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