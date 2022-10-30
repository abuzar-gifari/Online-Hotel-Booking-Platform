@extends('front.layout.app')

@section('main_content')
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Photo Gallery</h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="photo-gallery">
            <div class="row">

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/n1.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/n1.jpg" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/n2.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/n2.jpg" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/n3.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/n3.jpg" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/n4.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/n4.jpg" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/n1.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/n1.jpg" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/n2.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/n2.jpg" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/n3.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/n3.jpg" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="photo-thumb">
                        <img src="uploads/n4.jpg" alt="">
                        <div class="bg"></div>
                        <div class="icon">
                            <a href="uploads/n4.jpg" class="magnific"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-caption">
                        Haaland scores before going off injured in Dortmund win and it is very real
                    </div>
                </div>



                <div class="col-md-12">
                    {{ $photo_all->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection