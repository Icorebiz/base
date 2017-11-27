<script type="text/javascript">
    var dataTableI18n = {
        'sLengthMenu': "{{trans('datatables.sLengthMenu')}}",
        'sZeroRecords': "{{trans('datatables.sZeroRecords')}}",
        'sEmptyTable': "{{trans('datatables.sEmptyTable')}}",
        'sInfo': "{!! trans('datatables.sInfo', [
            'interval_class'=> "<span class'=txt-color-darken'>",
            'total_class'=> "<span class='text-primary'>", 'end_class'=> "</span>"
        ])!!}",
        'sInfoEmpty': "{!! trans('datatables.sInfoEmpty', [
            'interval_class'=> "<span class='txt-color-darken'>",
            'total_class'=> "<span class='text-primary'>", 'end_class'=> '</span>'
        ]) !!}",
        'sInfoFiltered': "{!!trans('datatables.sInfoFiltered', [
            'max_class'=> "<span class='text-primary'>", 'end_class' => "</span>"
        ])!!}",
        'sInfoPostFix': "{{trans('datatables.sInfoPostFix')}}",
        'sSearch': '<span class="input-group-addon" style="width: 12.2px!important; height: 16.4px!important;"><i class="glyphicon glyphicon-search"></i></span>',
        'sInfoThousands': "{{trans('datatables.sInfoThousands')}}",
        'sLoadingRecords': "{{trans('datatables.sLoadingRecords')}}",
        'oPaginate': {
            'sFirst': "{{trans('datatables.oPaginate')}}",
            'sLast': "{{trans('datatables.sLast')}}",
            'sNext': "{{trans('datatables.sNext')}}",
            'sPrevious': "{{trans('datatables.sPrevious')}}",
        },
        'oAria': {
            'sSortAscending': "{{trans('datatables.sSortAscending')}}",
            'sSortDescending': "{{trans('datatables.sSortDescending')}}",
        },
        "decimal": ",",
        "thousands": "."

    }
</script>