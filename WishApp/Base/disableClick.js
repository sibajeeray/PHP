
document.onmousedown=disableclick;
var status="Right Click Disabled";
function disableclick(e)
{
    if(event.button==2)
    {
        alert(status);
        return false;  
    }
}

/// OR you may add oncontextmenu="return false" to your <body> tag