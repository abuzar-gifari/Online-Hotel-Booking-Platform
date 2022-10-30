@extends('front.layout.app')

@section('main_content')
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Video Gallery</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="video-gallery">
            <div class="row">
                
                <div class="col-lg-3 col-md-4">
                    <div class="video-thumb">
                        <img src="http://img.youtube.com/vi/tvsyp08Uylw/0.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="http://www.youtube.com/watch?v=tvsyp08Uylw" class="video-button"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="video-thumb">
                        <img src="http://img.youtube.com/vi/PKATJiyz0iI/0.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="http://www.youtube.com/watch?v=PKATJiyz0iI" class="video-button"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="video-thumb">
                        <img src="http://img.youtube.com/vi/ekgUjyWe1Yc/0.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="http://www.youtube.com/watch?v=ekgUjyWe1Yc" class="video-button"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="video-thumb">
                        <img src="http://img.youtube.com/vi/LEcpS6pX9kY/0.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="http://www.youtube.com/watch?v=LEcpS6pX9kY" class="video-button"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="video-thumb">
                        <img src="http://img.youtube.com/vi/tvsyp08Uylw/0.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="http://www.youtube.com/watch?v=tvsyp08Uylw" class="video-button"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="video-thumb">
                        <img src="http://img.youtube.com/vi/PKATJiyz0iI/0.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="http://www.youtube.com/watch?v=PKATJiyz0iI" class="video-button"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="video-thumb">
                        <img src="http://img.youtube.com/vi/ekgUjyWe1Yc/0.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="http://www.youtube.com/watch?v=ekgUjyWe1Yc" class="video-button"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="video-thumb">
                        <img src="http://img.youtube.com/vi/LEcpS6pX9kY/0.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="http://www.youtube.com/watch?v=LEcpS6pX9kY" class="video-button"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>



                <div class="col-md-12">
                    {{ $video_all->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection