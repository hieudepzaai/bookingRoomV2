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
        $('#price_type').select2({
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
                text: item.name,
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


// Jquery Dependency

    $("input[data-type='currency']").on({
        keyup: function() {
            formatCurrency($(this));
        },
        blur: function() {
            formatCurrency($(this), "blur");
        }
    });


    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }


    function formatCurrency(input, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.

        // get input value
        var input_val = input.val();

        // don't validate empty input
        if (input_val === "") { return; }

        // original length
        var original_len = input_val.length;

        // initial caret position
        var caret_pos = input.prop("selectionStart");

        // check for decimal
        if (input_val.indexOf(".") >= 0) {

            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");

            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);

            // add commas to left side of number
            left_side = formatNumber(left_side);

            // validate right side
            right_side = formatNumber(right_side);

            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
                right_side += "00";
            }

            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);

            // join number by .
            input_val =  left_side + "." + right_side;

        } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            // input_val = "$" + input_val;

            // final formatting
            // if (blur === "blur") {
            //     input_val += ".00";
            // }
        }

        // send updated string to input
        input.val(input_val);

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }

})





