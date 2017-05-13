function setCookie (cookieName, cookieValue, expirySeconds)
{
    var expiry = new Date();
    expiry.setTime(expiry.getTime() + expirySeconds*1000);
    document.cookie = cookieName + "=" + cookieValue + "; expires=" + expiry.toUTCString();
}

function getCookie (cookieName)
{
    var name = cookieName + "=";
    var cookieList = document.cookie.split(";");
    
    for(var i=0; i<cookieList.length; i++) {
        var c = cookieList[i];
        while (c.charAt(0)==" "){
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0){
            return c.substring(name.length, c.length);
        }
        
    }
    return "";
    
}

function checkCookie ()
{
    var username = this.getCookie("username");
    if (this.username==""){
        return 0;
    }
    return 1;
    
};

function startupCheck()
{
    if (this.checkCookie())
    {
        this.setCookie("username","d", 1000);
        window.open("previous_user.html","_self");
    }
}