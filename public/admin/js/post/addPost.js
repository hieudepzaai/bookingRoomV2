$(document).ready(function () {
    function initSelect2() {
        let commonOption = {
            theme: 'bootstrap-5',
            placeholder: "please select"
        }
        $('select[class^=select_]').select2({
            theme: 'bootstrap-5',
            placeholder: "please select"
        });

    }
    initSelect2();
    var currencyUnit = getConfigByKey("currency_unit")

    $.ajax({
        url: '/admin/premiumTypes',
        type: 'get',
        dataType: 'json',
        async: true,

    }).done(function (data) {
        let results = $.map(data, (item) => {

            return {
                text: item.premium_type + " " +item.price_per_unit+ " " + currencyUnit.value + "/" + item.unit,
                id: item.id,
                data: item
            };
        });
        $('#price_type_id').select2({
            data: results,
            theme: 'bootstrap-5',
            allowClear: true,
            placeholder: "please select"
        });
    });



    $.ajax({
        url: '/admin/categories',
        type: 'get',
        dataType: 'json',
        async: true,

    }).done(function (data) {
        let results = $.map(data, (item) => {

            return {
                text: item.description,
                id: item.id,
                data: item
            };
        });
        $('.select_category_id').select2({
            data: results,
            theme: 'bootstrap-5',
            allowClear: true,
            placeholder: "please select"
        });
    });

    $.ajax({
        url: '/admin/provinces',
        type: 'get',
        dataType: 'json',
        async: true,

    }).done(function (data) {
        let initOption = [
            {
                name: " ",
                id: "0",
                data: ""
            }
        ]
        let results = $.map(data, (item) => {

            return {
                text: item.name,
                id: item.id,
                data: item
            };
        });
        $('#province_id').select2({
            theme: 'bootstrap-5',
            data: results,
            allowClear: true,
            placeholder: "please select"
        });
    });


    $('#province_id').on('change', function (e) {
        // Do something
        console.log("change")
        // $('#district_id').select2("destroy");

        $('#district_id').empty();
        $('#ward_id').val(null).trigger("change");
        $('#street_id').val(null).trigger("change");

        let province = $('#province_id').select2('data')[0];
        $.ajax({
            url: '/admin/district/provinces/' + province.id,
            type: 'get',
            dataType: 'json',


        }).done(function (data) {
            console.log(data)
            let results = $.map(data, function (item) {
                return {
                    text: item.name,
                    id: item.id,
                    data: item
                };
            });
            let initOption = [
                {
                    text: "",
                    id: "",
                    data: ""
                }
            ];
            let displayOptions = $.merge(initOption, results)
            $('#district_id').select2({
                theme: 'bootstrap-5',
                data: displayOptions,
                allowClear: true,
                placeholder: "please select"
            });
        });

    });


    $('#district_id').on('change', function (e) {
        $('#ward_id').val(null).trigger("change");
        $('#street_id').val(null).trigger("change");
        // Do something
        console.log("change")
        // $('#district_id').select2("destroy");

        $('#ward_id').empty();
        $('#street_id').val(null).trigger("change");

        let district = $('#district_id').select2('data')[0];
        $.ajax({
            url: '/admin/ward/getWardByDistrictId/' + district.id,
            type: 'get',
            dataType: 'json',


        }).done(function (data) {
            console.log(data)
            let results = $.map(data, function (item) {

                return {
                    text: item.name,
                    id: item.id,
                    data: item
                };
            });
            $('#ward_id').select2({
                theme: 'bootstrap-5',
                data: results,
                allowClear: true,
                placeholder: "please select"
            });
        });
    });


    $('#ward_id').on('change', function (e) {
        // $('#district_id').val(null).trigger("change");
        console.log("change ward")
        $('#street_id').val(null).trigger("change");
    });


    $('#street_id').select2({
        minimumInputLength: 2,
        theme: 'bootstrap-5',
        ajax: {
            url: '/admin/street/getByName',
            delay: 300,
            quietMillis: 0,
            method: "get",
            dataType: 'json',
            cache: true,
            data: function (params) {

                return {
                    name: params.term,
                };
            },
            processResults: function (data, params) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                return {
                    results: $.map(data, function (item) {
                        console.log(item)
                        return {
                            text: item.name,
                            id: item.id,
                            data: item
                        };
                    }),


                };
            }
        },
        placeholder: 'Please select',

    });




})





