@push('left-panel')
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it -->
        <a href="#">
        <img src=" {{asset('img/avatar.png')}}"
             alt="me" class="online"/>
        <span>
        User name
        </span>
        <i class="fa fa-angle-down"></i>
        </a>
        </span>
    </div>

    <nav class="dms-menu">
        <ul>
            @stack('menus')
            <li>
                <a> </a>
            </li>
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