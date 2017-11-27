@push('left-panel')
    <!-- User info -->
    {{--<div class="login-info">--}}
        {{--<span> <!-- User image size is adjusted inside CSS, it should stay as it -->--}}
            {{--<a href="{{LaravelLocalization::getLocalizedURL(null,'/user/'. Auth::user()->id.'/profile')}}">--}}
                {{--<img src=" {{ is_null(Auth::user()->img_path) ? asset('img/avatars/male.png'): asset( Auth::user()->img_path)}}"--}}
                     {{--alt="me" class="online"/>--}}
                {{--<span>--}}
                    {{--{{ Auth::user()->username}}--}}
                {{--</span>--}}
                {{--<i class="fa fa-angle-down"></i>--}}
            {{--</a>--}}
        {{--</span>--}}
    {{--</div>--}}
    <!-- end user info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it -->
            <img src=" {{asset('img/avatar.png')}}"
                 alt="me" class="online"/>
            <span>
                Username
            </span>
            <i class="fa fa-angle-down"></i>
        </span>
    </div>

    <nav class="dms-menu">
        <ul>
            @stack('menus')
        </ul>
    </nav>

    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>
    <nav style="position: absolute !important; bottom: 0!important;">
        <ul>
            <li>
                <a href="#">
                    <span class="menu-item-parent txt-color-white" style="font-size: 12px;">Desarrollado por   <i><img
                                    src="{{ asset('favicon.ico')}}" style="height: 18px; width: 18px"></i>CoreBiz</span>
                </a>
            </li>
        </ul>
    </nav>
@endpush