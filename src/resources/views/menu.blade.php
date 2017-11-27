@push('menus')
    <li class="active">
        <a href="{{LaravelLocalization::getLocalizedURL(null,'/home')}}" title="@lang('base::breadcrumb.dashboard')"><i
                    class="fa fa-lg fa-fw fa-home"></i> <span
                    class="menu-item-parent">@lang('base::breadcrumb.dashboard')</span></a>
    </li>
    {{--@ability(['SA'], 'user.read|role.read|ambit_configuration.read|feature_configuration.read')--}}
    <li>
        <a href="#" title="{{ trans('base::messages.admin.menu_parent') }}"><i
                    class="fa fa-lg fa-fw fa-group"></i> <span
                    class="menu-item-parent">@lang('base::messages.admin.menu_parent')</span></a>
        <ul>
            {{--@ability(['SA'], ['user.read'])--}}
            <li>
                <a href="{{LaravelLocalization::getLocalizedURL(null,'/user')}}" class="menu-item-parent">
                    <i class="fa fa-lg fa-fw fa-user-plus"></i>@lang('base::user.menu_item')</a>
            </li>
            {{--@endability--}}

            {{--@ability(['SA'], ['role.read'])--}}
            <li>
                <a href="{{LaravelLocalization::getLocalizedURL(null,'/role')}}" class="menu-item-parent">
                    <i class="fa fa-lg fa-fw fa-key"></i> @lang('base::role.menu_item')</a>
            </li>
            {{--@endability--}}
            {{--@ability(['SA'], ['ambit_configuration.read'])--}}
            <li>
                <a href="{{LaravelLocalization::getLocalizedURL(null,'/ambit_configuration')}}" class="menu-item-parent">
                    <i class="fa fa-lg fa-fw fa-key"></i>@lang('base::ambit_configuration.menu_item')</a>
            </li>
            {{--@endability--}}
            {{--@ability(['SA'], ['feature_configuration.read'])--}}
            <li>
                <a href="{{LaravelLocalization::getLocalizedURL(null,'/feature_configuration')}}" class="menu-item-parent">
                    <i class="fa fa-lg fa-fw fa-key"></i>@lang('base::feature_configuration.menu_item')</a>
            </li>
            {{--@endability--}}
        </ul>
    </li>
    {{--@endability--}}
@endpush