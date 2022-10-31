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
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="uploads/logo.png" alt="">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">        
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">About</a>
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
                    {{-- <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle">Gallery</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">Photo Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link">Video Gallery</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('faq') }}" class="nav-link">Faq</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>