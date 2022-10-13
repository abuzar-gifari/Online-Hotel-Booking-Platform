<!-- Menu For Mobile Device -->
<div class="mobile-nav">
    <a href="index.html" class="logo">
        <img src="uploads/logo.png" alt="">
    </a>
</div>

<!-- Menu For Desktop Device -->
<div class="main-nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="uploads/logo.png" alt="">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">        
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void;" class="nav-link dropdown-toggle">Room & Suite</a>
                        <ul class="dropdown-menu">
                            @foreach ($global_rooms as $room_name)
                                <li class="nav-item">
                                    <a href="{{ route('room_detail',$room_name->id) }}" class="nav-link">{{ $room_name->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void;" class="nav-link dropdown-toggle">Gallery</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="photo-gallery.html" class="nav-link">Photo Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="video-gallery.html" class="nav-link">Video Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>