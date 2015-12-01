window._BFD=window._BFD||{};
_BFD.addEvent=function(e,d,f){
    if(e.addEventListener){e.addEventListener(d,f,false)}
    else{if(e.attachEvent){e.attachEvent("on"+d,function(){f.call(e)})}else{e["on"+d]=f}}};
_BFD.removeEvent=function(e,d,f){
    if(e.removeEventListener){e.removeEventListener(d,f,false)}
    else{if(e.detachEvent){e.detachEvent("on"+d,function(){f.call(e)})}else{e["on"+d]=null}}};
_BFD.createElement=function(g,f){var h=document.createElement(g);
    if(f){for(var e in f){if(f.hasOwnProperty(e)){if(e==="class"||e==="className"){h.className=f[e]}
    else{if(e==="style"){h.style.cssText=f[e]}else{h.setAttribute(e,f[e])}}}}}return h};
_BFD.loadScript=function(d,c){setTimeout(function(){
    var a=_BFD.createElement("script",{src:d,type:"text/javascript"});
    if(a.readyState){_BFD.addEvent(a,"readystatechange",function(){
        if(a.readyState==="loaded"||a.readyState==="complete"){if(c){c()}
            _BFD.removeEvent(a,"readystatechange",arguments.callee)}})}
    else{_BFD.addEvent(a,"load",function(){if(c){c()}_BFD.removeEvent(a,"load",arguments.callee)})}
    document.getElementsByTagName("head")[0].appendChild(a)},0)};
_BFD.getByAttribute=function(l,k,j){
    var i=[],j=(j)?j:document,n=j.getElementsByTagName("*"),o=new RegExp("\\b"+k+"\\b","i");
    for(var p=0;p<n.length;p++){var m=n[p];
        if(l==="className"||l==="class"){if(o.test(m.className)){i.push(m)}}
        else{if(m.getAttribute(l)===k){i.push(m)}}}return i};
_BFD.getByClass=function(c,d){return _BFD.getByAttribute("className",c,d)};
_BFD.getById=function(b){if(typeof b==="string"&&!!b){return document.getElementById(b)}};
_BFD.loadCss=function(d){var c=_BFD.createElement("link",{href:d,rel:"stylesheet",type:"text/css"});
    document.getElementsByTagName("head")[0].appendChild(c)};_BFD.insertAfter=function(g,h){
    var e=h.parentNode;
    if(e.lastChild==h){e.appendChild(g)}
    else{var f=h.nextElementSibling||h.nextSibling;e.insertBefore(g,f)}};
_BFD.Banner=function(b,d,a){
    this.callback=d;
    this.args=a;
    this.positionstr=b.pos_dom;
    this.bid=b.bid;
    if(b.json_args){
        this.json_str=c(b.json_args)}
    else{this.json_str="{}"}
    function c(f){var g=[];for(var e in f){g.push('"'+e+'":"'+f[e]+'"')}
        return"{"+g.join(",")+"}"}};
_BFD.handleResults=function(e,g){
    if(g&&g[2]&&g[2].length>0){
        var f=g[2];
        for(var b=0;b<f.length;b++){
            var h=e[b];
            var c=f[b][3];
            var a=f[b][2];
            var j=h.bid;
            var d=h.args;
            if(c&&c.length>0){h.callback(c,a,j,d)}}}};
_BFD.parseBanners=function(b,f,g){
    var e=[],a=[];
    for(var c=0,d;d=f[c++];){e.push(d.bid);
        if(d.json_str&&d.json_str.length>0&&d.json_str!="{}"){a.push("rec_"+d.bid+"$"+d.json_str)}
        else{a.push("rec_"+d.bid)}}if(f.length){b.bidlst=e.join("|");b.req=a.join("|");
        g.send(b,function(h){_BFD.handleResults(f,h)})}};
_BFD.invoketime=0;
_BFD.loadCss(("https:"==document.location.protocol?"https://ssl-static1":"http://static1")+".baifendian.com/service/miyabaobei/miyabaobei.css");
_BFD.loadScript(("https:"==document.location.protocol?"https://ssl-static":"http://static")+".baifendian.com/api/2.0/bcore.min.js",function(){var a=(function(){function d(){var h=new $Core(function(){});
    _BFD.bfd_show=function(m,k,j,l){var i=_BFD.show_recommended(l,j);
        _BFD.show_template(m,i,k,j,l)};
    _BFD.show_recommended=function(k,i){var j=null;
        switch(k){case"dt":
            if(_BFD.getByClass("poppro",document)[0]){
                _BFD.getByClass("poppro",document)[0].innerHTML=" ";
                j=_BFD.getByClass("poppro",document)[0];
                oDiv_u=document.createElement("div");
                oDiv_u.className="bfd_div";
                var l='<div class="bfd_message"><ul></ul></div><div class="bfd_logo"><a href="http://www.baifendian.com" target="_blank" title="百分点推荐引擎" class="bfd_img_logo"></a></div>';
                oDiv_u.innerHTML=l;j.appendChild(oDiv_u);
                return oDiv_u.getElementsByTagName("ul")[0]}break}};
    _BFD.show_content=function(m,i,j){switch(j){case"dt":var l=document.createElement("li");
        l.className="bfd_li_dt";var k='<a href="'+i.url+'" target="_blank" title="'+i.name+'"><div class="div_mess_dt"><img alt="'+i.name+'" src="'+i.img+'" class="bfd_img"> <div class="bfd_name">'+i.name+'</div><div class="bfd_prc">￥'+i.price.toFixed(2)+"</div></a>";
        l.innerHTML=k;m.appendChild(l);return l}};
    _BFD.show_template=function(k,r,m,l,o){
        if(r){BCore.exts.BannerShow.prototype.push(r,l)}
        for(var q=0;q<k.length;q++){var p=_BFD.show_content(r,k[q],o).getElementsByTagName("a");
            for(var n=0;n<p.length;n++){
                _BFD.addEvent(p[n],"click",(function(i,j){
                    return function(){
                        var s=new $Core.inputs.FeedBack(m);
                        s.p_on=i+1;
                        s.p_bid=l;
                        s.iid=j;
                        if(_BFD.BFD_INFO.id){s.s_iid=_BFD.BFD_INFO.id}h.send(s)}})(q,k[q].iid))}}};
    _BFD.banners={dt:[new _BFD.Banner({pos_dom:"",bid:"4EFE0D90_2CD2_5677_2540_5E176CBACCD5",json_args:{}},_BFD.bfd_show,"dt")]};
    if(!_BFD.BFD_INFO){
        _BFD.BFD_INFO={user_id:"",page_type:"dft"}}
    this.Tools=$Core.tools.Tools;
    var e=_BFD.BFD_INFO.user_id;
    var g=_BFD.client_id;
    h.options.cid=g;
    h.options.uid=e;
    if(typeof(h.options.uid)=="undefined"||h.options.uid==""||h.options.uid=="0"||h.options.uid==null){h.options.uid=h.options.sid}this.info=_BFD.BFD_INFO;var f=this[this.info.page_type];
    if(f&&typeof f==="function"){f.call(this,h)}}if(window.location.href.indexOf("http://m.miyabaobei.com/")!=-1){
    _BFD.BFD_INFO={user_id:"",page_type:"dft"}}
    if(_BFD.getByClass("newTN clearfix",document)[0]){
        if(_BFD.getByClass("newTN clearfix",document)[0].getElementsByTagName("li")[0]){
            var b=_BFD.getByClass("newTN clearfix",document)[0].getElementsByTagName("li");
            for(var c=0;c<b.length;c++){
                if(b[c].className=="cur"){
                    _BFD.BFD_INFO={user_id:"",page_type:"homepage"}}}}}
    d.prototype={detail:function(r){r.options.p_t="dt";var t=_BFD.BFD_INFO.id;
        var x=_BFD.BFD_INFO.name;
        var n=_BFD.BFD_INFO.link;
        var h=_BFD.BFD_INFO.image_link;
        var s=_BFD.BFD_INFO.simage_link;
        var v=_BFD.BFD_INFO.price;
        var l=_BFD.BFD_INFO.market_price;
        var f=_BFD.BFD_INFO.category;
        var q=_BFD.BFD_INFO.brand;
        var u=_BFD.BFD_INFO.onsale;
        var g=_BFD.BFD_INFO.stock;
        var p=_BFD.BFD_INFO.group;
        r.send(new BCore.inputs.Visit(t));
        var m=[];if(f&&f instanceof Array){
            for(var w=0;w<f.length;w++){
                m.push(f[w][0])}}
        if(u=="false"||!u||g==0||x==""||n==""||h==""){if(window.location.href.indexOf("http://m.mi")==-1){
            r.send(new $Core.inputs.RmItem(t))}}
        else{var o=new $Core.inputs.AddItem(t);
            o.name=x;o.url=n;o.img=h;o.simg=s;o.prc=v;o.mktp=l;o.cat_id=m;o.stk=g;o.grp=p;o.brd=q;
            if(window.location.href.indexOf("http://m.mi")==-1){r.send(o)}}
        var j=new $Core.inputs.PageView();
        j.p_s=x;
        if(_BFD.getByClass("poppro",document)[0]){
            if(_BFD.banners["dt"]&&_BFD.banners["dt"].length>0){
                j.p_p="rec";
                var e=new BCore.recommends.Recommend("P");
                e.unq=1;e.iid=t;e.name=x;e.prc=v;e.brd=q;e.cat_id=m.join("$");
                _BFD.parseBanners(e,_BFD.banners["dt"],r)}}r.send(j);
        var k=new $Core.inputs.AddUser();
        k.user_id=_BFD.BFD_USER.user_cookie;
        r.send(k)},list:function(g){g.options.p_t="ls";var e=new $Core.inputs.PageView();
        g.send(e);var f=new $Core.inputs.AddUser();
        f.user_id=_BFD.BFD_USER.user_cookie;
        g.send(f)},shopcart:function(o){o.options.p_t="sc";
        var g=new $Core.inputs.PageView();o.send(g);
        var f=new $Core.inputs.AddUser();f.user_id=_BFD.BFD_USER.user_cookie;o.send(f);
        var e=[];
        var l=this.Tools.mergeRepeat(_BFD.BFD_INFO.cart_items);
        if(l.length>0){
            var m=new $Core.inputs.AddCart();
            for(var h=0;h<l.length;h++){
                var n=l[h][0]+"";e.push(n);
                var k=this.Tools.toNumber(l[h][1]);
                var j=this.Tools.toNumber(l[h][2]);
                m.push({i:n,p:k,n:j})}o.send(m)}},order:function(q){q.options.p_t="odr";
        var o=_BFD.BFD_INFO.order_id;
        var n=_BFD.BFD_INFO.total;
        var l=_BFD.BFD_INFO.payment;
        var m=_BFD.BFD_INFO.express;
        var e=new $Core.inputs.Order(o);e.total=this.Tools.toNumber(n);
        var g=this.Tools.mergeRepeat(_BFD.BFD_INFO.order_items);
        for(var h=0;h<g.length;h++){if(Number(g[h][2])>0){
            var p=g[h][0]+"";
            var k=this.Tools.toNumber(g[h][1]);
            var j=this.Tools.toNumber(g[h][2]);e.push({i:p,p:k,n:j})}}q.send(e);
        var f=new $Core.inputs.PageView();q.send(f)},search:function(j){j.options.p_t="sr";
        var i=_BFD.BFD_INFO.search_word;
        var h=_BFD.BFD_INFO.search_result;
        var e=new $Core.inputs.PageView();e.p_p="";
        var g=new $Core.inputs.Search(i);
        if(h=="0"){g.emp=1;
            if(_BFD.banners["sr_n"]&&_BFD.banners["sr_n"].length>0){e.p_p="rec";
                var f=new BCore.recommends.Recommend("P");
                f.unq=1;f.keywords=i;_BFD.parseBanners(f,_BFD.banners["sr_n"],j)}}
        else{g.emp=0}j.send(g);j.send(e)},homepage:function(g){g.options.p_t="hp";
        var e=new $Core.inputs.PageView();
        g.send(e);
        var f=new $Core.inputs.AddUser();
        f.user_id=_BFD.BFD_USER.user_cookie;
        g.send(f)},account:function(g){g.options.p_t="ap";var e=new $Core.inputs.PageView();
        g.send(e);var f=new $Core.inputs.AddUser();f.user_id=_BFD.BFD_USER.user_cookie;
        g.send(f)},channel:function(h){h.options.p_t="chl";
        var g=_BFD.BFD_INFO.channel_name;
        var e=new $Core.inputs.PageView();h.send(e);
        var f=new $Core.inputs.AddUser();
        f.user_id=_BFD.BFD_USER.user_cookie;
        h.send(f)},payment:function(q){q.options.p_t="pm";
        var o=_BFD.BFD_INFO.order_id;
        var n=_BFD.BFD_INFO.total;
        var l=_BFD.BFD_INFO.payment;
        var m=_BFD.BFD_INFO.express;
        var e=new $Core.inputs.Pay(o);e.total=this.Tools.toNumber(n);
        var g=this.Tools.mergeRepeat(_BFD.BFD_INFO.order_items);
        for(var h=0;h<g.length;h++){if(Number(g[h][2])>0){var p=g[h][0]+"";
            var k=this.Tools.toNumber(g[h][1]);
            var j=this.Tools.toNumber(g[h][2]);e.push({i:p,p:k,n:j})}}q.send(e);
        var f=new $Core.inputs.PageView();q.send(f)},dft:function(g){g.options.p_t="dft";
        var e=new $Core.inputs.PageView();e.p_p="";g.send(e);
        var f=new $Core.inputs.AddUser();f.user_id=_BFD.BFD_USER.user_cookie;g.send(f)}};
    return d})();new a()});