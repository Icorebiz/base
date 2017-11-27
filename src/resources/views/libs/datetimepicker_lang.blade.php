<script type="text/javascript">
    var datetimepickerI18n = {
        months : "{{trans('datetimepicker.months')}}".split('_'),
        monthsShort : "{{trans('datetimepicker.monthsShort')}}".split('_'),
        weekdays : "{{trans('datetimepicker.weekdays')}}".split('_'),
        weekdaysShort : "{{trans('datetimepicker.weekdaysShort')}}".split('_'),
        weekdaysMin : "{{trans('datetimepicker.weekdaysMin')}}".split('_'),
        longDateFormat : {
            LT : "{{trans('datetimepicker.longDateFormat.LT')}}",
            LTS : "{{trans('datetimepicker.longDateFormat.LTS')}}",
            L : "{{trans('datetimepicker.longDateFormat.L')}}",
            LL : "{{trans('datetimepicker.longDateFormat.LL')}}",
            LLL : "{{trans('datetimepicker.longDateFormat.LLL')}}",
            LLLL : "{{trans('datetimepicker.longDateFormat.LLLL')}}"
        },
        calendar : {
            sameDay : function () {
                return "{{trans('datetimepicker.calendar.sameDay')}}";
            },
            nextDay : function () {
                return "{{trans('datetimepicker.calendar.nextDay')}}";
            },
            nextWeek : function () {
                return "{{trans('datetimepicker.calendar.nextWeek')}}";
            },
            lastDay : function () {
                return "{{trans('datetimepicker.calendar.lastDay')}}";
            },
            lastWeek : function () {
                return "{{trans('datetimepicker.calendar.lastWeek')}}";
            },
            sameElse : "{{trans('datetimepicker.calendar.sameElse')}}"
        },
        relativeTime : {
            future : "{{trans('datetimepicker.relativeTime.future')}}",
            past : "{{trans('datetimepicker.relativeTime.past')}}",
            s : "{{trans('datetimepicker.relativeTime.s')}}",
            m : "{{trans('datetimepicker.relativeTime.m')}}",
            mm : "{{trans('datetimepicker.relativeTime.mm')}}",
            h : "{{trans('datetimepicker.relativeTime.h')}}",
            hh : "{{trans('datetimepicker.relativeTime.hh')}}",
            d : "{{trans('datetimepicker.relativeTime.d')}}",
            dd : "{{trans('datetimepicker.relativeTime.dd')}}",
            M : "{{trans('datetimepicker.relativeTime.M')}}",
            MM : "{{trans('datetimepicker.relativeTime.MM')}}",
            y : "{{trans('datetimepicker.relativeTime.y')}}",
            yy : "{{trans('datetimepicker.relativeTime.yy')}}"
        },
        ordinalParse : {{trans('datetimepicker.ordinalParse')}},
        ordinal : "{{trans('datetimepicker.ordinal')}}",
        week : {
            dow : {{trans('datetimepicker.week.dow')}}, // Monday is the first day of the week.
            doy : {{trans('datetimepicker.week.doy')}}  // The week that contains Jan 4th is the first week of the year.
        },
    };

    var datetimepickerI18nTooltips = {
        today: "{{trans('datetimepicker.tooltips.today')}}",
        clear: "{{trans('datetimepicker.tooltips.clear')}}",
        close: "{{trans('datetimepicker.tooltips.close')}}",
        selectMonth: "{{trans('datetimepicker.tooltips.selectMonth')}}",
        prevMonth: "{{trans('datetimepicker.tooltips.prevMonth')}}",
        nextMonth: "{{trans('datetimepicker.tooltips.nextMonth')}}",
        selectYear: "{{trans('datetimepicker.tooltips.selectYear')}}",
        prevYear: "{{trans('datetimepicker.tooltips.prevYear')}}",
        nextYear: "{{trans('datetimepicker.tooltips.nextYear')}}",
        selectDecade: "{{trans('datetimepicker.tooltips.selectDecade')}}",
        prevDecade: "{{trans('datetimepicker.tooltips.prevDecade')}}",
        nextDecade: "{{trans('datetimepicker.tooltips.nextDecade')}}",
        prevCentury: "{{trans('datetimepicker.tooltips.prevCentury')}}",
        nextCentury: "{{trans('datetimepicker.tooltips.nextCentury')}}",
        pickHour: "{{trans('datetimepicker.tooltips.pickHour')}}",
        incrementHour: "{{trans('datetimepicker.tooltips.incrementHour')}}",
        decrementHour: "{{trans('datetimepicker.tooltips.decrementHour')}}",
        pickMinute: "{{trans('datetimepicker.tooltips.pickMinute')}}",
        incrementMinute: "{{trans('datetimepicker.tooltips.incrementMinute')}}",
        decrementMinute: "{{trans('datetimepicker.tooltips.decrementMinute')}}",
        pickSecond: "{{trans('datetimepicker.tooltips.pickSecond')}}",
        incrementSecond: "{{trans('datetimepicker.tooltips.incrementSecond')}}",
        decrementSecond: "{{trans('datetimepicker.tooltips.decrementSecond')}}",
        togglePeriod: "{{trans('datetimepicker.tooltips.togglePeriod')}}",
        selectTime: "{{trans('datetimepicker.tooltips.selectTime')}}",
    }
</script>
