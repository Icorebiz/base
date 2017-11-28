@push('main_script')    
	function doPost(id) {
        var form = $('#' + id);
        if (form.valid()) {
            ajaxindicatorstart(jQuery('@lang('base::messages.general.ajax.loading')').val());
        }
    }

    {{--var pusher = new Pusher('{{env("PUSHER_KEY")}}');--}}
    {{--var channel = pusher.subscribe('chanel_user_{{Auth::user()->id}}');--}}
    {{--channel.bind('event_report', function (data) {--}}
        {{--$.bigBox({--}}
            {{--title: data.title,--}}
            {{--content: data.text,--}}
            {{--color: data.color,--}}
            {{--icon: data.icon,--}}
        {{--});--}}
        {{--updateMessages();--}}
    {{--});--}}

    function notificationRead(id) {
        if ($('#' + id).hasClass('unread')) {
            $('#' + id).removeClass('unread');
            notificationCount--;
            $('#m_notification').text("@lang('base::messages.general.notification')" + " (" + notificationCount + ")");
        }
    }

    var notificationCount = 0;

	function updateMessages() {
        $.ajax({
            type: 'GET',
            url: "{{LaravelLocalization::getLocalizedURL(null, '/dms_message/status')}}",
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                let values = JSON.parse(data);
                notificationCount = values.countN;
                if (notificationCount > 0) {
                    $('#m_notification').text("@lang('base::messages.general.notification')" + " (" + notificationCount + ")");
                } else {
                    $('#m_notification').text("@lang('base::messages.general.notification')");
                }
                if (values.countT > 0) {
                    $('#m_task').text("@lang('base::messages.general.task')" + " (" + values.countT + ")");
                } else {
                    $('#m_task').text("@lang('base::messages.general.task')");
                }
                if (values.total > 0) {
                    $('#m_badge').addClass('bg-color-red');
                    $('#m_badge').text(values.total);
                }
                moment.locale('en', datetimepickerI18n);
                let $nowMoment = moment().format('D/MM/YYYY, h:mm:ss a');
                $('#last_update').text($nowMoment);
            },
            error: function (data) {
                console.log("error");
                console.log(data);
            }
        });
    }

    {{--updateMessages();--}}
	
    function ajaxindicatorstart(text) {
        if (jQuery('body').find('#resultLoading').attr('id') != 'resultLoading') {
            jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="{{asset('img/ajax-loader3.gif')}}"><div>' + text + '</div></div><div class="bg"></div></div>');
        }

        jQuery('#resultLoading').css({
            'width': '100%',
            'height': '100%',
            'position': 'fixed',
            'z-index': '10000000',
            'top': '0',
            'left': '0',
            'right': '0',
            'bottom': '0',
            'margin': 'auto'
        });

        jQuery('#resultLoading .bg').css({
            'background': '#000000',
            'opacity': '0.7',
            'width': '100%',
            'height': '100%',
            'position': 'absolute',
            'top': '0'
        });

        jQuery('#resultLoading>div:first').css({
            'width': '250px',
            'height': '75px',
            'text-align': 'center',
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'right': '0',
            'bottom': '0',
            'margin': 'auto',
            'font-size': '16px',
            'z-index': '10',
            'color': '#ffffff'

        });

        jQuery('#resultLoading .bg').height('100%');
        jQuery('#resultLoading').fadeIn(300);
        jQuery('body').css('cursor', 'wait');
    }

    function ajaxindicatorstop() {
        jQuery('#resultLoading .bg').height('100%');
        jQuery('#resultLoading').fadeOut(300);
        jQuery('body').css('cursor', 'default');
    }


    jQuery(document).ajaxStart(function () {
        //show ajax indicator
        ajaxindicatorstart(jQuery('@lang('base::messages.general.ajax.loading')').val());
    }).ajaxStop(function () {
        //hide ajax indicator
        ajaxindicatorstop();
    });	
@endpush	