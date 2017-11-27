<script type="text/javascript">
    var select2I18n = {
        errorLoading: function () {
            return "{{trans('select2.error_loading')}}"
        },
        inputTooLong: function (e) {
            var t = e.input.length - e.maximum,
                    n = "{{trans('select2.plz_delete')}}" + t;
            return t == 1 ? n += "{{trans('select2.character')}}" : n += "{{trans('select2.characters')}}", n
        },
        inputTooShort: function (e) {
            var t = e.minimum - e.input.length,
                    n = "{{trans('select2.plz_insert')}}" + t;
            return t == 1 ? n += "{{trans('select2.character')}}" : n += "{{trans('select2.characters')}}", n
        },
        loadingMore: function () {
            return "{{trans('select2.loading_more')}}"
        },
        maximumSelected: function (e) {
            var t = "{{trans('select2.only_can_select')}}" + e.maximum + "{{trans('select2.element')}}";
            return e.maximum != 1 && (t += "s"), t
        },
        noResults: function () {
            return "{{trans('select2.no_results')}}"
        },
        searching: function () {
            return "{{trans('select2.searching')}}"
        }
    }
</script>
