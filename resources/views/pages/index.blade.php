@extends('layouts/app')

<!-- Style for index only -->
<link href="{{ asset('sass/index.scss') }}" rel="stylesheet">

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/storage/img/memewallpaper.jpg" alt="memewallpaper" class="wallpaper">
            <div class="carousel-caption">
            <h1 id="text"><strong>{{$title}}</strong></h1>
            <p id="text-small">A shopping center for memes</p>
            </div>
        </div>
        <div class="item">
            <img src="/storage/img/memewallpaper2.png" alt="memewallpaper2" class="wallpaper">
            <div class="carousel-caption">
                <h1 id="text-second"><strong>Be Amazed</strong></h1>
            </div>
        </div>
        <div class="item">
            <img src="/storage/img/memewallpaper3.jpg" alt="memewallpaper3" class="wallpaper">
            <div class="carousel-caption">
                <h1 id="text-third"><strong>Dankest Memes</strong></h1>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Info container -->
<div class="container" style="padding-top:10rem; padding-bottom:10rem">
    <div class="text-center">
        <h1>The Meme Movement is Evolving!</h1>
        <p>{{$desc}}</p>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p><strong>2009</strong></p>
                <img src="/storage/img/rage.jpg" class="img-circle meme" alt="image">
            </div>
            <div class="col-sm-4">
                <p><strong>2015</strong></p>
                <img src="/storage/img/pepe.jpg" class="img-circle meme" alt="image">
            </div>
            <div class="col-sm-4">
                <p><strong>2019</strong></p>
                <img src="/storage/img/boy.jpg" class="img-circle meme" alt="image">
            </div>
        </div>
    </div>
</div>
<!-- Lastest product container -->
<div class="background" style="padding-top:15rem; padding-bottom:15rem;">
    <div class="container" style="opacity:1">
        <div class="text-center">
            <h1 id="text-small2">Buy the Latest Memes</h1>
            <br>
            @foreach($products as $product)
                <div class="col-md-4">
                    <a href="/products/{{$product->id}}"><img id="img-animate" class="img-rounded thumbnail" style="width:100%" src="/storage/photos/{{$product->photo}}"></a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Footer -->
<div class="container" style="padding-top:3rem; padding-bottom:2rem; text-align:center">
    <h5>@ 2019 MemeCart, Inc.</h5>
</div>

@endsection

<style>
.meme {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 30%;
}
    
.meme:hover {
    border-color: #f1f1f1;
}

.wallpaper {
    opacity: 0.5;
    width: 100%;
}

.carousel-caption {
    top: 25rem;
    bottom: auto;
}

#text {
    font-size: 14rem;
    -webkit-text-stroke: 3px black;
    color: #a6a6a6;
    text-shadow:
        4px 4px 0 #000,
        -2px -2px 0 #000,  
        2px -2px 0 #000,
        -2px 2px 0 #000,
        2px 2px 0 #000;
}

#text-small {
    font-size: 5rem;
    -webkit-text-stroke: 1px black;
    color: #a6a6a6;
    text-shadow:
        3px 3px 0 #000,
        -1px -1px 0 #000,  
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000;
}

#text-small2 {
    font-size: 5rem;
    -webkit-text-stroke: 1px black;
    color: #009933;
    text-shadow:
        3px 3px 0 #000,
        -1px -1px 0 #000,  
        1px -1px 0 #000,
        -1px 1px 0 #000,
        1px 1px 0 #000;
}

#text-second {
    font-size: 14rem;
    -webkit-text-stroke: 3px black;
    color: #cccc00;
    text-shadow:
        4px 4px 0 #000,
        -2px -2px 0 #000,  
        2px -2px 0 #000,
        -2px 2px 0 #000,
        2px 2px 0 #000;
}

#text-third {
    font-size: 14rem;
    -webkit-text-stroke: 3px black;
    color: #0077b3;
    text-shadow:
        4px 4px 0 #000,
        -2px -2px 0 #000,  
        2px -2px 0 #000,
        -2px 2px 0 #000,
        2px 2px 0 #000;
}

#img-animate {
    transition: .2s;
    margin: 3rem auto;
}

.background {
    background-image: url('/storage/img/dankwallpaper.png');
    width: 100%;
    background-attachment: fixed;
}

#img-animate:hover {
    transform: scale(1.2);
}
</style>