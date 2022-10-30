<div class="main-sidebar">
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Admin Panel</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html"></a>
    </div>

    <ul class="sidebar-menu">

        <li class="active"><a class="nav-link" href="{{ route('admin_home') }}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

        
        <!-- Setting -->
        <li class="{{ Request::is('admin/setting') ? 'active' : '' }}"><a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Setting"><i class="fa fa-cog"></i> <span>Setting</span></a></li>


        <!-- Customer -->
        <li class="{{ Request::is('admin/customers') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_customer') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Customers"><i class="fa fa-user-plus"></i> <span>Customers</span></a></li>


        <!-- Orders -->
        <li class="{{ Request::is('admin/order/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_orders') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Orders"><i class="fa fa-cart-plus"></i> <span>Orders</span></a></li>


        <!-- Room -->
        <li class="nav-item dropdown
        {{ Request::is('admin/amenity/*')||Request::is('admin/room/*') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"> <i class="fa fa-hotel" aria-hidden="true"></i> <span>Room</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('admin/amenity/show') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_amenity_show') }}"><i class="fas fa-angle-right"></i> Amenities</a></li>
                <li class="{{ Request::is('admin/room/show') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_room_show') }}"><i class="fas fa-angle-right"></i>Rooms</a></li>
            </ul>
        </li>


        <!-- Pages -->
        <li class="nav-item dropdown {{ Request::is('admin/page/about')||Request::is('admin/page/terms')||Request::is('admin/page/privacy')||Request::is('admin/page/contact')||Request::is('admin/page/photo-gallery')||Request::is('admin/page/video-gallery')||Request::is('admin/page/faq')||Request::is('admin/page/blog')||Request::is('admin/page/room')||Request::is('admin/page/cart')||Request::is('admin/page/checkout')||Request::is('admin/page/payment')||Request::is('admin/page/signup')||Request::is('admin/page/signin')||Request::is('admin/page/forget-password')||Request::is('admin/page/reset-password') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"> <i class="far fa-newspaper"></i><span>Pages</span></a>
        <ul class="dropdown-menu">
            <li class="{{ Request::is('admin/page/about') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> About</a></li>

            <li class="{{ Request::is('admin/page/terms') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Terms and Conditions</a></li>

            <li class="{{ Request::is('admin/page/privacy') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Privacy Policy</a></li>

            <li class="{{ Request::is('admin/page/contact') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Contact</a></li>

            <li class="{{ Request::is('admin/page/photo-gallery') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Photo Gallery</a></li>

            <li class="{{ Request::is('admin/page/video-gallery') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Video Gallery</a></li>

            <li class="{{ Request::is('admin/page/faq') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> FAQ</a></li>

            <li class="{{ Request::is('admin/page/blog') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Blog</a></li>

            <li class="{{ Request::is('admin/page/room') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Room</a></li>

            <li class="{{ Request::is('admin/page/cart') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Cart</a></li>

            <li class="{{ Request::is('admin/page/checkout') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Checkout</a></li>

            <li class="{{ Request::is('admin/page/payment') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Payment</a></li>

            <li class="{{ Request::is('admin/page/signup') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Sign Up</a></li>

            <li class="{{ Request::is('admin/page/signin') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Sign In</a></li>

            <li class="{{ Request::is('admin/page/forget-password') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Forget Password</a></li>

            <li class="{{ Request::is('admin/page/reset-password') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fa fa-angle-right"></i> Reset Password</a></li>
        </ul>
        </li>

        <!-- Datewise Rooms -->
        <li class="{{ Request::is('admin/datewise-rooms') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_datewise_rooms') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Datewise Rooms"><i class="fa fa-calendar"></i> <span>Datewise Rooms</span></a></li>


        <!-- Feature -->
        <li class="{{ Request::is('admin/feature/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_feature_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Feature"><i class="fa fa-gavel"></i> <span>Feature</span></a></li>

        <!-- Testimonial -->
        <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_testimonial_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Testimonial"><i class="fa fa-briefcase"></i> <span>Testimonial</span></a></li>

        <!-- Post -->
        <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_post_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Post"><i class="fa fa-clipboard"></i> <span>Post</span></a></li>

        <!-- Photo Gallery -->
        <li class="{{ Request::is('admin/photo/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_photo_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Photo Gallery"><i class="fa fa-camera"></i> <span>Photo Gallery</span></a></li>

        <!-- Video Gallery -->
        <li class="{{ Request::is('admin/video/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_video_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Video Gallery"><i class="fa fa-cog"></i> <span>Video Gallery</span></a></li>

        <!-- Faqs -->
        <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_faq_view') }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="FAQ"><i class="fa fa-bolt"></i> <span>FAQ</span></a></li>

    </ul>
</aside>
</div>