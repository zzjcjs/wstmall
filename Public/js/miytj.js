(function(){
    var n=navigator;
    var sDomain=document.domain;
    if(sDomain.indexOf("miyabaobei")!=-1){
        var hostMiddle="miyabaobei"
    }else{
        if(sDomain.indexOf("mia")!=-1){
            var hostMiddle="mia"}else{
            var hostMiddle="miyabaobei"}
    }
    var version="1.1";
    navigator.userAgent.toLowerCase();
    var userAgent=n.userAgent.toLowerCase();
    var oBrowser={version:(userAgent.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/)||[0,"0"])[1],safari:/version.+?safari/.test(userAgent),opera:/opera/.test(userAgent),chrome:/chrome/.test(userAgent),msie:/msie/.test(userAgent)&&!/opera/.test(userAgent),mozilla:/mozilla/.test(userAgent)&&!/(compatible|webkit)/.test(userAgent)};
    var oOs={win:/windows/.test(userAgent),mac:/mac/.test(userAgent),unix:/x11/.test(userAgent)};
    var aUrl=location.href.match("http://([^/]+)(/.+)");
    var host=window.location.host;
    host=host.replace("http://","");
    host=host.replace("www","");
    if(!host){
        host=".miyabaobei.com"}
    if(host.indexOf("miyabaobei.com")!=-1){
        host=".miyabaobei.com"}else{
        host=".mia.com"}
    function setcookie(key,value,expire){
        document.cookie=key+"="+value+";path=/;domain="+host+";expires="+expire+";"}
    function getvalue(type,varname){try{if(type=="cookie"){
        var p="/"+varname+"=([^;]+);?/";
        var ret=document.cookie.match(eval(p));
        return ret[1]}if(type=="meta"){
        var metas=document.getElementsByTagName("meta");for(var i=0;i<metas.length;i++){
            if(metas[i].name==varname){
                return metas[i].content}}return""}
        if(type=="jsvar"){
            return eval(varname)}return""}catch(e){return""}}
    var title=function(){try{var t=document.getElementsByTagName("title");
        return encodeURIComponent(t[0].text)}catch(e){return""}};
    var browser=function(){
        if(oBrowser.safari){return"safari"}else{if(oBrowser.opera){return"opera"}else{if(oBrowser.chrome){
            return"chrome"}else{if(oBrowser.mozilla){
            return"firefox"}else{if(oBrowser.msie){
            return"ie"}else{return"other"}}}}}};
    var browser_version=oBrowser.version;
    var operation_system=function(){
        if(oOs.win){
            return"windows"}else{if(oOs.mac){
            return"mac"}else{if(oOs.unix){
            return"unix"}}}};
    var operation_system_version=function(){
        var version;
        if(oOs.win){
            var aMatch=userAgent.match(/windows[^\d]+([^;]+);/);
            switch(aMatch[1]){
                case"5.0":version="win2000";break;
                case"5.1":version="winxp";break;
                case"5.2":version="win2003";break;
                case"6.1":version="win7";break;
                default:version="other";break}}
        else{if(oOs.mac){if(/iphone/.test(userAgent)){version="iphone"}
        else{version="other"}}}return version};
    var flash_version=function(){if(n.plugins&&n.plugins.length){
        var count=n.plugins.length;
        for(var i=0;i<count;i++){
            if(n.plugins[i].name.indexOf("Shockwave Flash")!=-1){
                var aMatch=n.plugins[i].description.match(/Shockwave Flash (\d*)/);
                return aMatch[1]}}}else{if(window.ActiveXObject){
        for(var i=10;i>=2;i--){try{var fl=eval("new ActiveXObject('ShockwaveFlash.ShockwaveFlash."+i+"');");
            if(fl){return i}}catch(e){}}}}return"false"};
    function generateUUID(){var d=new Date().getTime();
        var uuid="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(c){
            var r=(d+Math.random()*16)%16|0;d=Math.floor(d/16);
            return(c=="x"?r:(r&3|8)).toString(16)});
        return uuid}if(getvalue("cookie","miyauuid")==""){
        var date=new Date();date.setTime(date.getTime()+365*2*24*3600*1000);
        var miyauuid=generateUUID();setcookie("miyauuid",miyauuid,date)}
    var java_enabled=n.javaEnabled();
    var language=function(){if(oBrowser.msie){
        return n.browserLanguage}else{return n.language}};
    var screen_colors=screen.colorDepth;
    var screen_resolution=function(){
        return screen.availWidth+"*"+screen.availHeight};
    var referrer=document.referrer;var tourl=location.href;
    var getParams={version:version,browser:browser(),browser_version:browser_version,operation_system:operation_system(),flash_version:flash_version(),java_enabled:java_enabled,language:language(),screen_colors:screen_colors,screen_resolution:screen_resolution(),miyaid:getvalue("cookie","miyaid"),cid:getvalue("cookie","cid"),referrer:encodeURIComponent(referrer),tourl:encodeURIComponent(tourl),rnd:Math.round(2147483647*Math.random())};
    var ac=function(params){var sParams="";
        for(var o in params){sParams+=o+"="+params[o]+"&"}sParams=sParams.replace(/&$/,"");
        return"http://tj."+hostMiddle+".com/_.gif?"+sParams};
    var bc=function(params){var sParams="";
        for(var o in params){sParams+=o+"="+params[o]+"&"}sParams=sParams.replace(/&$/,"");
        return"http://tj."+hostMiddle+".com/b_c.gif?"+sParams};
    var bindClick=function(){bc_params={};bc_params.miyaid=getParams.miyaid;bc_params.cid=getParams.cid;d_a=document.getElementsByTagName("a");d_a_l=d_a.length;
        for(i=0;i<d_a_l;i++){if(d_a[i].addEventListener){d_a[i].addEventListener("click",click_log,true)}else{if(d_a[i].attachEvent){d_a[i].attachEvent("onclick",click_log)}}}
        function _jquery_live(targetObject,type,fn){document.onclick=function(event){
            var ev=event?event:window.event;var target=ev.srcElement||e.target;
            if(ev.type==type&&(target.tagName.toLocaleLowerCase()==targetObject||target.parentNode.tagName.toLocaleLowerCase()==targetObject)){var pageX=ev.pageX;
                var pageY=ev.pageY;
                if(pageX==undefined){pageX=ev.clientX+document.body.scrollLeft||document.documentElement.scrollLeft}
                if(pageY==undefined){pageY=ev.clientY+document.body.scrollTop||document.documentElement.scrollTop}bc_params.source_url=encodeURIComponent(location.href);bc_params.target_url=encodeURIComponent(this.href);
                bc_params.atitle=encodeURIComponent(this.innerHTML);
                bc_params.x=encodeURIComponent(pageX);
                bc_params.y=encodeURIComponent(pageY);
                var oImg=new Image(1,1);oImg.src=bc(bc_params)}}}
        function click_log(ev){ev=ev?ev:window.event;
            var pageX=ev.pageX;var pageY=ev.pageY;
            if(pageX==undefined){pageX=ev.clientX+document.body.scrollLeft||document.documentElement.scrollLeft}
            if(pageY==undefined){pageY=ev.clientY+document.body.scrollTop||document.documentElement.scrollTop}
            bc_params.source_url=encodeURIComponent(location.href);
            bc_params.target_url=encodeURIComponent(this.href);
            bc_params.atitle=encodeURIComponent(this.innerHTML);
            bc_params.x=encodeURIComponent(pageX);
            bc_params.y=encodeURIComponent(pageY);
            var oImg=new Image(1,1);
            oImg.src=bc(bc_params)}};
    var run=function(){var oImg=new Image(1,1);oImg.src=ac(getParams);
        oImg.onload=function(){oImg.onload=null};
        if(tourl.indexOf(hostMiddle+".com/download_h")!=-1||tourl.indexOf(hostMiddle+".com/onsale/")!=-1||typeof(b_c_click)!="undefined"){bindClick()}};run()})();