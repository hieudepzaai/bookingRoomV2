var config = "";

function getConfigByKey(searchKey) {
    let key =  {};
    $.ajax({
        url: '/admin/config/getByKey',
        type: 'get',
        dataType: 'json',
        async: false,
        data : {
            key: searchKey
        },
        success: function (data) {
            key = data
        }

    });
    return key;
}
