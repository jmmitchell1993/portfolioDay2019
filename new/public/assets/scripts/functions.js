function openWindow(url) {
    newWindow = window.open(verifyHttp(url));
}

function verifyHttp(str) {
    const regExp = new RegExp("^(http|https)://", "i");
    let match = regExp.test(str);
    
    if(!match) {
        str = "http://"+str;
    }

    return str;
}