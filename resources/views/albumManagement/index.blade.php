@extends('layouts.app1')
@section('content')
    @if(Session::has('Success'))
        <div class="alert alert-success" role="alert">
            <strong>{{Session::get('Success')}} </strong>
        </div>
    @endif
    @if(Session::has('Error'))
        <div class="alert alert-danger" role="alert">
            <strong> {{Session::get('Error')}} </strong>
        </div>
    @endif
    <div class="container">
        <div class="well well-sm">
            <strong>Albums</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                            class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
            <div class="pull-right btn-group">
               <a href="{{URL::Asset('/albums/create')}}" class="btn btn-default btn-sm">Add New Album</a>
            </div>
        </div>
        <div id="products" class="row list-group">
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="{{URL::Asset('img/watermarked.png')}}" alt=""/>
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">Album Name</h4>
                        <p>Total Photos : 10</p>
                        <p class="group inner list-group-item-text">
                            Picture description... </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="{{URL::Asset('albums/1')}}">Open Album</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item')});
            $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
        });
    </script>

@stop
