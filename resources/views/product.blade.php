@extends('master')
@section('content')
<div class="container-fluid custom-product">
    <div class="row no-gutters">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    @foreach ($products as $product)
                    <div class="carousel-item {{$product['id']==1?'active':''}}">
                        <img class="slider-img" src="{{$product['gallery']}}" alt="Los Angeles">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$product['name']}}</h5>
                            <p>{{$product['description']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
