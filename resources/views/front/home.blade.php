@extends('front.layout.app')

@section('main_content')






<!-- Slider Portion -->

<div class="slider">
    <div class="slide-carousel owl-carousel">
        <div class="item" style="background-image:url(uploads/slide1.jpg);">
            <div class="bg"></div>
            <div class="text">
                <h2>Best Hotel in the City</h2>
                <p>
                    All staff are incredibly helpful, friendly and professional. Rooms are very clean, comfortable and well equipped. Restaurant does a great breakfast, food is great, gym and club as well.
                </p>
                <div class="button">
                    <a href="{{ route('about') }}">Read More</a>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url(uploads/slide2.jpg);">
            <div class="bg"></div>
            <div class="text">
                <h2>Quality rooms for the guests</h2>
                <p>
                    Two bedrooms one living and one dinning and kitchenet. Two bathrooms with bathtubs and shower enclosure alongside. Came with three TVs and three Refrigerators. Well decorated and tastefully done as well.
                </p>
                <div class="button">
                    <a href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
        
<!--// Slider Portion -->










<!-- User Search Portion -->

<div class="search-section">
    <div class="container">
        <form action="{{ route('cart_submit') }}" method="post">
            @csrf
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <select name="room_id" class="form-select">
                                <option value="">Select Room</option>
                                @foreach($global_rooms as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" name="checkin_checkout" class="form-control daterange1" placeholder="Checkin & Checkout">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="number" name="adult" class="form-control" min="1" max="30" placeholder="Adults">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="number" name="children" class="form-control" min="0" max="30" placeholder="Children">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!--// User Search Portion -->









<!-- Feature Postion -->

<div class="home-feature">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-clock-o"></i></div>
                    <div class="text">
                        <h2>24 hour Room service</h2>
                        <p>
                            If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-wifi"></i></div>
                    <div class="text">
                        <h2>Free Wifi</h2>
                        <p>
                            If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-superpowers"></i></div>
                    <div class="text">
                        <h2>Enjoy Free Nights</h2>
                        <p>
                            If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <div class="text">
                        <h2>Save up to 40%</h2>
                        <p>
                            Members get access to an exclusive discounts on Radissonblu.com. Not a member yet? Hurry Up!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-coffee"></i></div>
                    <div class="text">
                        <h2>Complimentary Breakfast</h2>
                        <p>
                            If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-crosshairs"></i></div>
                    <div class="text">
                        <h2>Swimming Pool</h2>
                        <p>
                            If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-cubes"></i></div>
                    <div class="text">
                        <h2>Gym and Fitness</h2>
                        <p>
                            If you find a lower online rate, we will match it and give you an additional 25% off on your stay.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="fa fa-cutlery"></i></div>
                    <div class="text">
                        <h2>Top Class Restaurant</h2>
                        <p>
                            Members get access to an exclusive discounts on Radissonblu.com. Not a member yet? Hurry Up!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Feature Postion -->










<!-- Rooms and Suites Portion -->

<div class="home-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Rooms and Suites</h2>
            </div>
        </div>
        <div class="row">

            @foreach ($rooms as $room)
                    
                    @if ($loop->iteration > 4)
                        @break                       
                    @endif

                    <div class="col-md-3">
                        <div class="inner">
                            <div class="photo">
                                <img src="{{ asset('uploads/'.$room->featured_photo) }}" alt="No Image">
                            </div>
                            <div class="text">
                                <h2><a href="">{{ $room->name }}</a></h2>
                                <div class="price">
                                    {{ $room->price }}$/night
                                </div>
                                <div class="button">
                                    <a href="{{ route('room_detail',$room->id) }}" class="btn btn-primary">See Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="big-button">
                    <a href="{{ route('rooms') }}" class="btn btn-primary">See All Rooms</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Rooms and Suites Portion -->







<!-- Testimonial Portion -->

<div class="testimonial" style="background-image: url(uploads/slide2.jpg)">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Our Happy Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    <div class="item">
                        <div class="photo">
                            <img src="uploads/t1.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Robert Krol</h4>
                            <p>CEO, ABC Company</p>
                        </div>
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. 
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo">
                            <img src="uploads/t2.jpg" alt="">
                        </div>
                        <div class="text">
                            <h4>Sal Harvey</h4>
                            <p>Director, DEF Company</p>
                        </div>
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Testimonial Portion -->









<!-- Post Portion -->


<div class="blog-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Latest Posts</h2>
            </div>
        </div>
        <div class="row">

            @foreach($post_all as $item)
            
            
                <div class="col-md-4">
                    <div class="inner">
                        <div class="photo">
                            <img src="{{ asset('uploads/'.$item->photo) }}" alt="">
                        </div>
                        <div class="text">
                            <h2><a href="{{ route('post',$item->id) }}">{{ $item->heading }}</a></h2>
                            <div class="short-des">
                                <p>
                                    {!! $item->short_content !!}
                                </p>
                            </div>
                            <div class="button">
                                <a href="{{ route('post',$item->id) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>


            @endforeach
            
        </div>
    </div>
</div>



<!--// Post Portion -->










@endsection 

{{-------------------------------------------- End Section --------------------------------------------}}