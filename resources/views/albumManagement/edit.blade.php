@extends('layouts.app1')
@section('content')
    <div class="container" style="margin-top:10%">
        <div class="page-header">
            <a href={{URL::asset('albums/'.$album['id'])}}>&laquo; Back to Album</a>
        </div>
        <div class="centered-form">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    {{Form::open(['url' => 'albums/'.$album['id'], 'method' => 'DELETE', 'files' =>  'true'])}}
                    <button class="btn-danger pull-right">Delete Album</button>
                    {{Form::close()}}
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$album['name']}} <small>Edit/Delete and/or upload more
                                photos!</small></h3>
                    </div>
                    <div class="panel-body">
                        {{Form::open(['url' => 'albums/'.$album['id'], 'method' => 'PATCH', 'files' =>  'true'])}}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" value="{{$album['name']}}" class="form-control  input-sm" placeholder="Album Name">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="description" value="{{$album['description']}}" id="description" class="form-control  input-sm" placeholder="Album description">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="file" name="photos[]" id="photos" class="form-control input-sm"
                                   placeholder="Upload photos" multiple>
                        </div>

                        <input type="submit" value="Create Album" class="btn btn-info btn-block">

                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop