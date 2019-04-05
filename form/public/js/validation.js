$(function() {

function isEmpty(array) {
    let errors;
    $.each(array, function(k,v) {
        if(v == "") {
            obj[k] = v;
            errors.push(obj);
        }
    });
    return errors;
}

});