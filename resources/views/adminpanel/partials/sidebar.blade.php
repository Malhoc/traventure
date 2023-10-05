<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        @if (true)
                        <img alt="image" class="img-circle" src="{{asset('adminpanel')}}/img/default_profile_image.png" style="width: 70px; height: 70px"/>
                        @else
                        <img alt="image" class="img-circle" src="{{asset('storage')}}/images/{{Auth::user()->profile_image}}" style="width: 70px; height: 70px"/>
                        @endif
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs">
                                <strong class="font-bold">{{Auth::user()->name}}</strong>
                            </span> <span class="text-muted text-xs block"><b
                                    class="caret"></b></span>
                        </span>
                    </a>
                    {{-- <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="">My Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Setingg</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul> --}}
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i>
                    <span class="nav-label">Dashboard</span>
                    {{-- <span class="fa arrow"></span> --}}
                    {{-- <span class="pull-right label label-primary">SPECIAL</span> --}}

                </a>

            </li>

            <li class="@if (request()->is('admin/user*')) {{ 'active' }} @else {{ '' }} @endif">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="nav-label">Users</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.user.index') }}">List</a></li>
                </ul>
            </li>



            <li class="@if (request()->is('admin/blog*'))  {{'active'}} @else {{''}} @endif">
                <a href="{{route('admin.blogs.index')}}">
                    <i class="fa fa-file-text-o"></i>
                    <span class="nav-label">Blogs</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.blogs.create')}}">Create New</a></li>
                    <li><a href="{{route('admin.blogs.index')}}">List </a></li>
                </ul>
            </li>


            <li class="@if (request()->is('admin/tour*'))  {{'active'}} @else {{''}} @endif">
                <a href="{{route('admin.tours.index')}}">
                    <i class="fa fa-road"></i>
                    <span class="nav-label">Tours</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.tours.create')}}">Create New</a></li>
                    <li><a href="{{route('admin.tours.index')}}">List </a></li>
                    <li><a href="{{route('admin.tours.categories.index')}}">Manage Categories</a></li>
                    <li><a href="{{route('admin.tours.destination.index')}}">Manage Destinations</a></li>
                </ul>
            </li>

            <li class="@if (request()->is('admin/booking*'))  {{'active'}} @else {{''}} @endif">
                <a href="{{route('admin.bookings.index')}}">
                    <i class="fa fa-calendar"></i>
                    <span class="nav-label">Bookings</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.bookings.index')}}">List </a></li>
                </ul>
            </li>

        </ul>

    </div>
</nav>
