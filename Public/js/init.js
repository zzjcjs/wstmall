$(document).ready(function(){
    $('#backToMobile').click(function(e){
        setwm('mobile');
        var site = $(this).data('domain');
        if(!site)site = '<?php echo MAIN_DOMAIN;?>';
        window.location.href='http://m.'+site+'?device=m_web';
        e.preventDefault();
    }); 
});


var wom = getcookie('wom');
if( wom == '' ) {
        var p_url = location.pathname;
        if(p_url == '/') {
            p_url = '';
        }
        if (p_url == '/dutyfree.html'){
            p_url = '/app/dutyfree';
        }
        if (p_url == '/formulas.html'){
            p_url = '/formulas';
        }
        platform = identifyUA();
        if(platform !='' && (platform == 'web' || platform == 'mobile')) {
            setwm(platform);
            var url = platform == 'web' ? 'http://www.miyabaobei.com' : 'http://m.miyabaobei.com';
            if(url == 'http://m.miyabaobei.com' || url == 'http://m.mia.com') {
                window.location.href = url + p_url + '?device=a_web';
            } else {
                // window.location.href = url + p_url;   //temp commented 
                window.location.href = nextUrl;
            }
        }
} else {
	var c_url = location.hostname;
    if(wom != 'web' && wom != 'mobile') {
        delcookie('wom');
        window.location.href = c_url;
    }
    platform = identifyUA();
    if(platform != '' && platform == 'mobile'  && wom != 'web') {
        var p_url = location.pathname;
        if(p_url == '/') {
            p_url = '';
        }
        if (p_url == '/dutyfree.html'){
            p_url = '/app/dutyfree';
        }
        if (p_url == '/formulas.html'){
            p_url = '/formulas';
        }
        setwm(platform);
        var url = platform == 'web' ? 'http://'+c_url : 'http://m.'+c_url.substring(4,20);
            if(url == 'http://m.miyabaobei.com' || url == 'http://m.mia.com') {
                window.location.href = url + p_url + '?device=a_web';
            } else {
                window.location.href = url + p_url; 
            }
    }
}

function identifyUA() {
    var userAgent = navigator.userAgent.toLowerCase();
    var platform ='';
    if(userAgent == null || userAgent == ''){
        platform = 'web' ; 
    }else{
        if(userAgent.indexOf("android") != -1 ){ 
            platform = 'mobile';
        }else if(userAgent.indexOf("ios") != -1 || userAgent.indexOf("iphone") != -1){ 
            platform = 'mobile';
        }else if(userAgent.indexOf("ipad") != -1) {
            platform = 'web';
        }else if(userAgent.indexOf("windows phone") != -1 ){ 
            platform = 'web';
        }else{
            platform = 'web' ;
        }
    }
    return platform;
}



function setcookie(key,value,expire){
	var host = window.location.host;
	host = host.replace('http://','');
	host = host.replace('www','');
	if(!host)host = '.miyabaobei.com';
    document.cookie = key+"="+value +";path=/;domain="+host+";expires="+expire+";";
}

function setwm(tag){
	if(tag || tag != ''){
        var expire = new Date()
        var expireDays = 30;    
        expire.setTime(expire.setTime(expire.getTime()+expireDays*24*3600*1000));
        setcookie('wom', tag, expire.toGMTString());
	}
	return tag;
}


function getcookie(name){
	var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
	if(arr != null){
		return unescape(arr[2]);
	}else{
		return '';
	}
}

function delcookie(name) 
{ 
    var exp = new Date();
    var val=getcookie(name);
    if(val!='') {
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;domain=.miyabaobei.com';
    }
} 