@extends('layouts.app1')
@section('content')
        <div class="container gallery-container">
            <div class="page-header">
                <a href={{URL::asset('albums')}}>&laquo; Back to Albums</a>
                <a class="pull-right glyphicon-plus" href={{URL::asset('albums/'.$album['id'].'/edit')}} > Edit
                    Album</a>
            </div>
            <h1>{{$album['name']}}</h1>

            <p class="page-description text-center">{{$album['description']}}</p>

            <div class="tz-gallery">

                <div class="row">

                    {{--for each album photos--}}
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{URL::Asset('img/1.jpg')}}">
                            <img src="{{URL::Asset('img/1.jpg')}}" alt="Park">
                        </a>
                    </div>
                </div>

            </div>

        </div>
@stop