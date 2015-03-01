var display_alert = "none";

$('#alert_button').click(function(){
    if(display_alert == "none"){
        $('#alertmenu').show();
    }  
});

$(document).mouseup(function (e)
{
    var alert_menu = $("#alertmenu");

    if (!alert_menu.is(e.target)
        && alert_menu.has(e.target).length === 0) 
    {
        display_alert = "none";
        alert_menu.hide();
    }
});