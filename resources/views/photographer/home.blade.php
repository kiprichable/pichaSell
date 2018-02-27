@extends('layouts.app')
@section('content')
<div id="slide-window">

    <ol id="slides" start="1">

        <li class="slide color-0 alive" style="background-image:url({{URL::Asset('img/1.jpg')}})"></li>

        <li class="slide color-1" style="background-image:url(http://stuckincustoms.smugmug.com/Portfolio/i-KMjVHRd/0/X3/Andramada-X3.jpg);"></li>

        <li class="slide color-2" style="background-image:url(http://stuckincustoms.smugmug.com/Burning-Man/i-dd9xmfn/0/X3/The%20Steamy%20Car-X3.jpg);"></li>

        <li class="slide color-3" style="background-image:url(http://stuckincustoms.smugmug.com/Portfolio/i-KscS8CF/0/X3/Burning-Man-Day-1%20%281006%20of%201210%29-X3.jpg);"></li>

        <li class="slide color-4" style="background-image:url(http://stuckincustoms.smugmug.com/Portfolio/i-jQcPqJb/0/X3/Burning-Man-Last-Day-Night%20%28151%20of%201120%29-X3.jpg);"></li>

    </ol>
    <div class="album">
        {{--This name will be the photographers name--}}
        Daniel Photograpy
        {{--This link will be either for photographers Gallery or clients pictures--}}
        <a href="#">Visit Gallery</a>
    </div>
    <span class="nav-slide fa fa-chevron-left fa-3x" id="left"></span>
    <span class="nav-slide fa fa-chevron-right fa-3x" id="right"></span>
</div>
@stop