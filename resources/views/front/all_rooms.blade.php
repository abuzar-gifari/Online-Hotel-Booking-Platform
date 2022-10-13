@extends('front.layout.app')
@section('main_content')
    
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>All Rooms</h2>
            </div>
        </div>
    </div>
</div>



<div class="home-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
        <div class="row">

            @foreach ($rooms as $room)
                   

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


    </div>
</div>




@endsection