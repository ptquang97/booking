function converseUnicodeToSlug(data) {
    data = data.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/gi, "a");
    data = data.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/gi, "e");
    data = data.replace(/(ì|í|ị|ỉ|ĩ)/gi, "i");
    data = data.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/gi, "o");
    data = data.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/gi, "u");
    data = data.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/gi, "y");
    data = data.replace(/(đ)/gi, "d");

    data = data.replace(/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/gi, 'A');
    data = data.replace(/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/gi, 'E');
    data = data.replace(/(Ì|Í|Ị|Ỉ|Ĩ)/gi, 'I');
    data = data.replace(/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/gi, 'O');
    data = data.replace(/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/gi, 'U');
    data = data.replace(/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/gi, 'Y');
    data = data.replace(/(Đ)/gi, 'D');
    return data;
}

function validateEmail(email)
{
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return email.match(re);
}

function dateString2Date(dateString) {
    var dt  = dateString.split(/\-|\s/);
    return new Date(dt.slice(0,3).reverse().join('-') + ' ' + dt[3]);
}