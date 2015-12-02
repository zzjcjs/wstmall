$(function(){
    $('[data-toggle="popover"]').popover();
})

//$(document).ready(function(){
//    //    logininfo();//大数据 不调用ajax 用下面的注释程序,这个函数是解密用的
//    //    var usernames = decodeURIComponent(getcookie('loginName'));
//    var usernames = getcookie('loginName');
//    alert(usernames);
//    if (usernames.length>8) {
//        usernames = usernames.substr(0,15)+"..";
//    }
//    if (usernames != '') {
//        $('#logined_username').text(usernames);
//        $("#loginedBox").show();
//        $('#unloginBox').hide();
//    } else {
//        $("#loginedBox").hide();
//        $('#unloginBox').show();
//    }
//})


function addToFavorite(){
    var a=domainURL, b="???"+bbdMallName;
    document.all?window.external.AddFavorite(a,b):window.sidebar&&window.sidebar.addPanel?window.sidebar.addPanel(b,a,""):alert("\u5bf9\u4e0d\u8d77\uff0c\u60a8\u7684\u6d4f\u89c8\u5668\u4e0d\u652f\u6301\u6b64\u64cd\u4f5c!\n\u8bf7\u60a8\u4f7f\u7528\u83dc\u5355\u680f\u6216Ctrl+D\u6536\u85cf\u672c\u7ad9\u3002"),createCookie("_fv","1",30,"/;domain="+domainURL)
}
