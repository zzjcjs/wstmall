//2==3 && alert("ok");
//3==3 && alert("ok3");
//var zxd = 0;
function dcsCookie() {
    //alert("dcsCookie"+ zxd++)
    //alert("1112222");
    //alert(typeof dcsOther);
    typeof dcsOther == "function" ? dcsOther() : typeof dcsFPC == "function" && dcsFPC(gTimeZone)
}
function dcsGetCookie(e) {
    //alert("dcsGetCookie"+e + zxd++);
    var t = e + "=",
        n = null;
    try {
        var r = document.cookie.indexOf(t);
        //alert(r);
        if (r > -1) if (r == 0) {
            var i = document.cookie.indexOf(";", r);
            i == -1 && (i = document.cookie.length), n = unescape(document.cookie.substring(r + t.length, i))
        } else {
            r = document.cookie.indexOf("; " + t);
            if (r > -1) {
                var i = document.cookie.indexOf("; ", r + 1);
                i == -1 && (i = document.cookie.length), n = unescape(document.cookie.substring(r + t.length + 2, i))
            }
        }
    } catch (s) {}
    return n
}
function dcsGetCrumb(e, t) {
    //alert("dcsGetCrumb" + e + " " + t)
    //alert()
    var n = dcsGetCookie(e).split(":");
    for (var r = 0; r < n.length; r++) {
        var i = n[r].split("=");
        if (t == i[0]) return i[1]
    }
    return null
}
function dcsGetIdCrumb(e, t) {
    //alert("ddd");
    var n = dcsGetCookie(e),
        r = n.substring(0, n.indexOf(":lv=")),
        i = r.split("=");
    for (var s = 0; s < i.length; s++) if (t == i[0]) return i[1];
    return null
}
function dcsFPC(e) {
    //alert(WT.vtid+"         cccd");
    //alert("dcsFPC");
    //alert(typeof e);
    //alert(e);
    //alert(gFpc);
    if (typeof e == "undefined") return;
    if (document.cookie.indexOf("WTLOPTOUT=") != -1) return;
    var t = gFpc,
        n = new Date,
        r = n.getTimezoneOffset() * 6e4 + e * 36e5;
    n.setTime(n.getTime() + r);
    var i = new Date(n.getTime() + 63113851500),
        s = new Date(n.getTime());
    WT.aid = WT.cid2 = WT.cid3 = WT.co_f = WT.vtid = WT.vt_f = WT.vt_f_a = WT.vt_f_s = WT.vt_f_d = WT.vt_f_tlh = WT.vt_f_tlv = "";
    var o = new Date;
    WT.vt_visits = 1, WT.vt_spv = 0, WT.vt_lsv = n.getTime().toString();
    if (document.cookie.indexOf(t + "=") == -1) {
        //alert(WT.vtid+"aaa*****************");
        if (typeof gWtId != "undefined" && gWtId != "") WT.co_f = gWtId;
        else if (typeof gTempWtId != "undefined" && gTempWtId != "") WT.co_f = gTempWtId, WT.vt_f = "1";
        else {
            WT.co_f = "2";
            var u = n.getTime().toString();
            for (var a = 2; a <= 32 - u.length; a++) WT.co_f += Math.floor(Math.random() * 16).toString(16);
            WT.co_f += u, WT.vt_f = "1";
            //alert(WT.co_f+"  44aaa");
        }
        //alert(WT.co_f+"  33aaa");
        typeof gWtAccountRollup == "undefined" && (WT.vt_f_a = "1"), WT.vt_f_s = WT.vt_f_d = "1", WT.vt_f_tlh = WT.vt_f_tlv = "0", WT.dl == 0 && (WT.vt_spv += 1)
        //alert(WT.vtid+"  11ccc");
        //alert(WT.co_f+"  22aaa");
    } else {
        //alert(WT.vtid+"bbb");
        var f = dcsGetIdCrumb(t, "id"),
            l = parseInt(dcsGetCrumb(t, "lv")),
            c = parseInt(dcsGetCrumb(t, "ss")),
            h = dcsGetCrumb(t, "vs");
        h != null && (WT.vt_visits = parseInt(h));
        var p = dcsGetCrumb(t, "spv");
        p != null && (WT.vt_spv = parseInt(p));
        var d = dcsGetCrumb(t, "lsv");
        d != null && (WT.vt_lsv = parseInt(d));
        if (f == null || f == "null" || isNaN(l) || isNaN(c)) return;
        WT.co_f = f;
        var v = new Date(l);
        WT.vt_f_tlh = Math.floor((v.getTime() - r) / 1e3), s.setTime(c), n.getTime() > v.getTime() + 18e5 || n.getTime() > s.getTime() + 288e5 ? (n.getDay() > s.getDay() || n.getMonth() > s.getMonth() || n.getYear() > s.getYear() ? WT.vt_visits = 1 : WT.vt_visits += 1, WT.dl == 0 ? WT.vt_spv = 1 : WT.vt_spv = 0, WT.vt_lsv = s.getTime().toString(), WT.vt_f_tlv = Math.floor((s.getTime() - r) / 1e3), s.setTime(n.getTime()), WT.vt_f_s = "1") : WT.dl == 0 && (WT.vt_spv += 1);
        if (n.getDay() != v.getDay() || n.getMonth() != v.getMonth() || n.getYear() != v.getYear()) WT.vt_f_d = "1";
        o.setTime(l)
        //alert(WT.vtid+"ccc&&&&&&&&&&&&&&&&&");
    }
    WT.co_f = escape(WT.co_f), WT.vtid = WT.co_f;
    //alert(WT.vtid+"         cccd");
    var m = "; expires=" + i.toGMTString();
    document.cookie = t + "=" + "id=" + WT.co_f + ":lv=" + n.getTime().toString() + ":ss=" + s.getTime().toString() + ":lsv=" + WT.vt_lsv + ":vs=" + WT.vt_visits + ":spv=" + WT.vt_spv + m + "; path=/" + "; domain=" + gFpcDom, document.cookie.indexOf(t + "=") == -1 && (WT.co_f = WT.vt_sid = WT.vt_f_s = WT.vt_f_d = WT.vt_f_tlh = WT.vt_f_tlv = "", WT.vt_f = WT.vt_f_a = "2"), WT.lf_user_name = readLoginUserInfo("__LOGIN"), WT.lf_user_id = readLoginUserInfo("__user_id__"), WT.vt_lv = o.getTime().toString(), WT.vt_cv = n.getTime().toString(), WT.vtvs = (s.getTime() - r).toString(), WT.aid = getlogCookie("aid"), WT.aid && (WT.aid = encodeURIComponent(WT.aid)), WT.cid2 = getlogCookie("cid2"), WT.cid2 && (WT.cid2 = encodeURIComponent(WT.cid2)), WT.cid3 = getlogCookie("sitefrom"), WT.cid3 && (WT.cid3 = encodeURIComponent(WT.cid3))
}
function dcsOther() {
    //alert("dcsOther"+ zxd++);
    typeof WT.dcsvid != "undefined" && delete WT.dcsvid;
    var e = "wt_visitor_id";
    if (typeof DCSext[e] != "undefined") {
        var t = DCSext[e].replace(/(^\s*)|(\s*$)/g, "").toLowerCase();
        t != "" && t != "null" && (WT.dcsvid = escape(t))
    }
    if (typeof WT.dcsvid != "undefined") {
        var n = new Date,
            r = new Date(n.getTime() + 63113851500),
            i = "; expires=" + r.toGMTString();
        document.cookie = e + "=" + DCSext[e] + i + "; path=/" + (typeof gFpcDom != "undefined" && gFpcDom != "" ? "; domain=" + gFpcDom : "")
    } else {
        var t = dcsGetCookie(e);
        t != null && (t = t.replace(/(^\s*)|(\s*$)/g, "").toLowerCase(), t != "" && t != "null" && (WT.dcsvid = escape(t)))
    }
    typeof gFpc != "undefined" && dcsFPC(gTimeZone)
}
function getlogCookie(e) {
    var t = e + "=",
        n = null;
    try {
        var r = document.cookie.indexOf(t);
        if (r > -1) if (r == 0) {
            var i = document.cookie.indexOf(";", r);
            i == -1 && (i = document.cookie.length), n = decodeURIComponent(document.cookie.substring(r + t.length, i))
        } else {
            r = document.cookie.indexOf("; " + t);
            if (r > -1) {
                var i = document.cookie.indexOf("; ", r + 1);
                i == -1 && (i = document.cookie.length), n = decodeURIComponent(document.cookie.substring(r + t.length + 2, i))
            }
        }
    } catch (s) {}
    return n
}
function readLoginUserInfo(e) {
    var t = "__TRANSIENT",
        n = getlogCookie("miauid");
    //n = getlogCookie("LongTimeValuesCookies");
    if (n != null && n != "") {
        /*
         var r = n.split("#");
         for (var i = 0; i < r.length; i++) {
         var s = r[i].split("$");
         if (s[0] == e) {
         t = s[1];
         break
         }
         }
         */
        return n;
    }
    return encodeURIComponent(t)
}
function dcsEvt(e, t) {
    var n = e.target || e.srcElement;
    while (n && n.tagName && n.tagName.toLowerCase() != t.toLowerCase()) n = n.parentElement || n.parentNode;
    return n
}
function dcsBind(e, t, n) {
    n == 0 ? typeof window[t] == "function" && document.body && (document.body.addEventListener ? document.body.addEventListener(e, window[t], !0) : document.body.attachEvent && document.body.attachEvent("on" + e, window[t])) : n == 1 && typeof window[t] == "function" && window && (window.addEventListener ? window.addEventListener(e, window[t], !0) : window.attachEvent && window.attachEvent("on" + e, window[t]))
}
function dcsET() {
    var e = "mousedown";
    dcsBind(e, "dcsFormButton", 0), dcsBind(e, "dcsOffsite", 0), dcsBind(e, "dcsAnchor", 0), dcsBind(e, "dcsJavaScript", 0), dcsBind(e, "dcsHotMap", 0), dcsBind(e, "dcsNewMap", 0), dcsBind("load", "pageLoad", 1)
}
function _dcsMultiTrack() {
    //alert("_dcsMultiTrack*****************************************************************************" + zxd++);
    dcsVar();
    var e;
    arguments.length != 0 && arguments[0] instanceof LFLog ? e = arguments[0].dcsMultiTrack.arguments : e = arguments;
    if (e == null) return;
    if (e.length % 2 == 0) {
        for (var t = 0; t < e.length; t += 2) e[t].toUpperCase().indexOf("WT.") == 0 ? WT[e[t].substring(3)] = e[t + 1] : e[t].toUpperCase().indexOf("DCS.") == 0 ? DCS[e[t].substring(4)] = e[t + 1] : e[t].toUpperCase().indexOf("DCSext.") == 0 && (DCSext[e[t].substring(7)] = e[t + 1]);
        var n = new Date;
        DCS.dcsdat = n.getTime(), dcsFunc("dcsCookie"), WT.ti = gI18n ? dcsEscape(dcsEncode(WT.ti), I18NRE) : WT.ti;
        if (WT.dl == 0 || WT.dl == "0") WT.dl = 21;
        dcsTag()
    }
}
function dcsAdv() {
    //alert("dcsAdv" + zxd++);
    dcsFunc("dcsET"), dcsFunc("dcsCookie", !0), dcsFunc("dcsAdSearch"), dcsFunc("dcsTP")
}
function dcsVar() {
    //alert("dcsVar" + zxd++);
    gImages = new Array, gIndex = 0, DCS = new Object, WT = new Object, DCSext = new Object, gQP = new Array;
    var e = new Date;
    WT.tz = e.getTimezoneOffset() / 60 * -1, WT.tz == 0 && (WT.tz = "0"), WT.bh = e.getHours(), WT.ul = navigator.appName == "Netscape" ? navigator.language : navigator.userLanguage, typeof screen == "object" && (WT.cd = navigator.appName == "Netscape" ? screen.pixelDepth : screen.colorDepth, WT.sr = screen.width + "x" + screen.height), typeof navigator.javaEnabled() == "boolean" && (WT.jo = navigator.javaEnabled() ? "Yes" : "No"), document.title && (WT.ti = gI18n ? dcsEscape(dcsEncode(document.title), I18NRE) : document.title), WT.js = "Yes", WT.jv = dcsJV(), document.body && document.body.addBehavior && (document.body.addBehavior("#default#clientCaps"), document.body.addBehavior("#default#homePage"), WT.hp = document.body.isHomePage(location.href) ? "1" : "0"), parseInt(navigator.appVersion) > 3 && (navigator.appName == "Microsoft Internet Explorer" && document.body ? WT.bs = document.body.offsetWidth + "x" + document.body.offsetHeight : navigator.appName == "Netscape" && (WT.bs = window.innerWidth + "x" + window.innerHeight)), WT.fi = "No";
    if (window.ActiveXObject) for (var t = 10; t > 0; t--) try {
        var n = new ActiveXObject("ShockwaveFlash.ShockwaveFlash." + t);
        WT.fi = "Yes", WT.fv = t + ".0";
        break
    } catch (r) {} else if (navigator.plugins && navigator.plugins.length) for (var t = 0; t < navigator.plugins.length; t++) if (navigator.plugins[t].name.indexOf("Shockwave Flash") != -1) {
        WT.fi = "Yes", WT.fv = navigator.plugins[t].description.split(" ")[2];
        break
    }
    gI18n && (WT.em = typeof encodeURIComponent == "function" ? "uri" : "esc", typeof document.defaultCharset == "string" ? WT.le = document.defaultCharset : typeof document.characterSet == "string" && (WT.le = document.characterSet)), WT.tv = "8.0.2", DCS.dcsdat = e.getTime(), DCS.dcssip = window.location.hostname, DCS.dcsuri = window.location.pathname, WT.es = DCS.dcssip + DCS.dcsuri;
    var i = window.location.protocol;
    WT.es.indexOf(i) == -1 && (WT.es = i + "//" + WT.es), WT.dl = "0", WT.ssl = window.location.protocol.indexOf("https:") == 0 ? "1" : "0";
    if (window.location.search) {
        DCS.dcsqry = window.location.search;
        if (gQP.length > 0) for (var t = 0; t < gQP.length; t++) {
            var s = DCS.dcsqry.indexOf(gQP[t]);
            if (s != -1) {
                var o = DCS.dcsqry.substring(0, s),
                    u = DCS.dcsqry.substring(s + gQP[t].length, DCS.dcsqry.length);
                DCS.dcsqry = o + u
            }
        }
    }
    referer(DCS.dcssip + DCS.dcsuri + DCS.dcsqry)
}
function dcsA(e, t) {
    //alert("dcsA " +e +" "+ t+  zxd++);
    if (gI18n && e == "dcsqry") {
        var n = "",
            r = t.substring(1).split("&");
        for (var i = 0; i < r.length; i++) {
            var s = r[i],
                o = s.indexOf("=");
            if (o != -1) {
                var u = s.substring(0, o),
                    a = s.substring(o + 1);
                i != 0 && (n += "&"), n += u + "=" + dcsEncode(a)
            }
        }
        t = t.substring(0, 1) + n
    }
    return "&" + e + "=" + dcsEscape(t, RE)
}
function dcsEscape(e, t) {
    if (typeof t != "undefined") {
        var n = new String(e);
        for (var r in t) n = n.replace(t[r], r);
        return n
    }
    return escape(e)
}
function dcsEncode(e) {
    return typeof encodeURIComponent == "function" ? encodeURIComponent(e) : escape(e)
}
function dcsCreateImage(e) {
    document.images ? (gImages[gIndex] = new Image, gImages[gIndex].src = e, gIndex++) : document.write('<IMG ALT="" BORDER="0" NAME="DCSIMG" WIDTH="1" HEIGHT="1" SRC="' + e + '">')
}
function dcsMeta() {
    //alert("dcsMeta" + zxd++);
    var e;
    document.all ? e = document.all.tags("meta") : document.documentElement && (e = document.getElementsByTagName("meta"));
    if (typeof e != "undefined") {
        var t = e.length;
        for (var n = 0; n < t; n++) {
            var r = e.item(n).name,
                i = e.item(n).content,
                s = e.item(n).httpEquiv;
            if (r.length > 0) if (r.indexOf("WT.") == 0) {
                var o = !1;
                if (gI18n) {
                    var u = ["mc_id", "oss", "ti"];
                    for (var a = 0; a < u.length; a++) if (r.toUpperCase().indexOf("WT." + u[a].toUpperCase()) == 0) {
                        o = !0;
                        break
                    }
                }
                WT[r.substring(3)] = o ? dcsEscape(dcsEncode(i), I18NRE) : i
            } else if (r.indexOf("DCSext.") == 0) {
                var o = !1;
                if (gI18n) {
                    var u = ["wt_visitor_id"];
                    for (var a = 0; a < u.length; a++) if (r.indexOf("DCSext." + u[a]) == 0) {
                        o = !0;
                        break
                    }
                }
                DCSext[r.substring(7)] = o ? dcsEscape(dcsEncode(i), I18NRE) : i
            } else r.indexOf("DCS.") == 0 && (DCS[r.substring(4)] = gI18n && r.indexOf("DCS.dcsref") == 0 ? dcsEscape(i, I18NRE) : i);
            else if (gI18n && s == "Content-Type") {
                var f = i.toLowerCase().indexOf("charset=");
                f != -1 && (WT.mle = i.substring(f + 8))
            }
        }
    }
}

function dcsTag() {
    //alert("dcsTag" + zxd++);
    //alert(WT.vtid);
    if (document.cookie.indexOf("WTLOPTOUT=") != -1) return;
    var e = "http" + (window.location.protocol.indexOf("https:") == 0 ? "s" : "") + "://" + gDomain + (gDcsId == "" ? "" : "/" + gDcsId) + "/dcs.gif?";
    for (var t in DCS) DCS[t] && (e += dcsA(t, DCS[t]));
    var n = ["co_f", "vt_sid", "vt_f_tlv"];
    for (var r = 0; r < n.length; r++) {
        var i = n[r];
        WT[i] && (e += dcsA("WT." + i, WT[i]), delete WT[i])
    }
    var s;
    for (t in WT) if (WT[t]) {
        if (t == "ti") {
            s = WT[t];
            continue
        }
        e += dcsA("WT." + t, WT[t])
    }
    for (t in DCSext) DCSext[t] && (e += dcsA(t, DCSext[t]));
    var o = "";
    try {
        window && window.top && window.top.location && window.top.location.href && (o = window.top.location.href)
    } catch (u) {}
    e += dcsA("WT.top", o);
    var a = e;
    typeof s != undefined && s && (a += dcsA("WT.ti", s)), e.length > 2048 ? e = e.substring(0, 2040) + "&WT.tu=1" : a.length < 2048 && (e = a), dcsCreateImage(e)
}

function dcsJV() {
    //alert("dcsJV" + zxd++);
    var e = navigator.userAgent.toLowerCase(),
        t = parseInt(navigator.appVersion),
        n = e.indexOf("mac") != -1,
        r = e.indexOf("firefox") != -1,
        i = e.indexOf("firefox/0.") != -1,
        s = e.indexOf("firefox/1.0") != -1,
        o = e.indexOf("firefox/1.5") != -1,
        u = r && !i && !s & !o,
        a = !r && e.indexOf("mozilla") != -1 && e.indexOf("compatible") == -1,
        f = a && t == 4,
        l = a && t >= 5,
        c = e.indexOf("msie") != -1 && e.indexOf("opera") == -1,
        h = c && t == 4 && e.indexOf("msie 4") != -1,
        p = c && !h,
        d = e.indexOf("opera") != -1,
        v = e.indexOf("opera 5") != -1 || e.indexOf("opera/5") != -1,
        m = e.indexOf("opera 6") != -1 || e.indexOf("opera/6") != -1,
        g = d && !v && !m,
        y = "1.1";
    return u ? y = "1.7" : o ? y = "1.6" : i || s || l || g ? y = "1.5" : n && p || m ? y = "1.4" : p || f || v ? y = "1.3" : h && (y = "1.2"), y
}
function dcsFunc(e) {
    typeof window[e] == "function" && window[e]()
}
function LFLog() {
    //alert("LFLog" + zxd++);
    this.dcsMultiTrack = function() {
        _dcsMultiTrack(this)
    }
}
var gDomain = "plog.mia.com",
    gDcsId = "a",
    gFpc = "WT_FPC",
    navigationtag = "dl,div,table",
    onsitedoms = /^(\w+\.)?mia\.com$/,
    gTimeZone = 8,
    gFpcDom = ".mia.com";
dcsSplit = function(e) {
    var t = e.toLowerCase().split(","),
        n = t.length;
    for (var r = 0; r < n; r++) t[r] = t[r].replace(/^\s*/, "").replace(/\s*$/, "");
    return t
}, dcsIsOnsite = function(e) {
    if (e.length > 0) {
        e = e.toLowerCase();
        if (e == window.location.hostname.toLowerCase()) return !0;
        if (typeof onsitedoms.test == "function") return onsitedoms.test(e);
        if (onsitedoms.length > 0) {
            var t = dcsSplit(onsitedoms),
                n = t.length;
            for (var r = 0; r < n; r++) if (e == t[r]) return !0
        }
    }
    return !1
}, dcsNavigation = function(e) {
    var t = "",
        n = "",
        r = dcsSplit(navigationtag),
        i = r.length,
        s, o, u;
    for (s = 0; s < i; s++) {
        u = r[s];
        if (u.length) {
            o = dcsEvt(e, u), t = o && o.getAttribute && o.getAttribute("id") ? o.getAttribute("id") : "", n = o.className || "";
            if (t.length || n.length) break
        }
    }
    return t.length ? t : n
}, dcsAnchor = function(e) {
    e = e || window.event || "";
    if (e && (typeof e.which != "number" || e.which == 1 || e.which == 2)) {
        var t = dcsEvt(e, "A");
        if (t && t.href) {
            var n = t.hostname ? t.hostname.split(":")[0] : "";
            if (dcsIsOnsite(n)) {
                var r = t.search ? t.search.substring(t.search.indexOf("?") + 1, t.search.length) : "",
                    i = t.pathname ? t.pathname.indexOf("/") != 0 ? "/" + t.pathname : t.pathname : "/",
                    s = t.id;
                if (t.hash && t.hash != "" && t.hash != "#"){
//                    alert("22221111zzzzzzz**********");
                    _dcsMultiTrack("DCS.dcssip", DCS.dcssip, "DCS.dcsuri", DCS.dcsuri, "DCS.dcsqry", DCS.dcsqry, "WT.ti", "Anchor:" + t.hash, "WT.dl", "21", "WT.nv", dcsNavigation(e), "WT.na", typeof s != undefined && s ? s : "", "WT.hf", t.href);
                }
                else {
//                    alert("333333zzzzzzz**********");
                    var o = t.innerText ? t.innerText : t.textContent;
//                    alert(o);
                    //o = o + ":" + t.id, _dcsMultiTrack("DCS.dcssip", DCS.dcssip, "DCS.dcsuri", DCS.dcsuri, "DCS.dcsqry", DCS.dcsqry, "DCS.dcsref", DCS.dcsref, "WT.ti", "Link:" + o, "WT.dl", "21", "WT.nv", dcsNavigation(e), "WT.na", typeof s != undefined && s ? s : "", "WT.hf", t.href)
                    o = o + ":" + t.id;
//                    alert(o);
                    _dcsMultiTrack("DCS.dcssip", DCS.dcssip, "DCS.dcsuri", DCS.dcsuri, "DCS.dcsqry", DCS.dcsqry, "DCS.dcsref", DCS.dcsref, "WT.ti", "Link:" + o, "WT.dl", "21", "WT.nv", dcsNavigation(e), "WT.na", typeof s != undefined && s ? s : "", "WT.hf", t.href)
                    //alert("888877766554441zzzzzzz**********" + o);
                    //alert("5554441zzzzzzz**********" + o);
                }

            }
        }
    }
}, dcsJavaScript = function(e) {
    e = e || window.event || "";
    if (e && (typeof e.which != "number" || e.which == 1)) {

        var t = dcsEvt(e, "A");
        if (t && t.href && t.protocol) {
            var n = t.search ? t.search.substring(t.search.indexOf("?") + 1, t.search.length) : "";
            t.protocol.toLowerCase() == "javascript:" && _dcsMultiTrack("DCS.dcssip", DCS.dcssip, "DCS.dcsuri", DCS.dcsuri, "DCS.dcsqry", DCS.dcsqry, "WT.ti", "JavaScript:" + t.innerHTML, "WT.dl", "22", "WT.nv", dcsNavigation(e), "WT.hf", t.href)

//            alert("222ifdcsjava888877766554441zzzzzzz**********" + (t.protocol.toLowerCase() == "javascript:"));
        }
        //alert("ifdcsjava888877766554441zzzzzzz**********" );
    }
    //alert("dcsjava888877766554441zzzzzzz**********" );

}, dcsOffsite = function(e) {
    e = e || window.event || "";
    if (e && (typeof e.which != "number" || e.which == 1)) {
        var t = dcsEvt(e, "A");
        if (t && t.href) {
            var n = t.hostname ? t.hostname.split(":")[0] : "",
                r = t.protocol || "";
            if (n.length > 0 && r.indexOf("http") == 0 && !dcsIsOnsite(n)) {
                var i = t.search ? t.search.substring(t.search.indexOf("?") + 1, t.search.length) : "",
                    s = t.pathname ? t.pathname.indexOf("/") != 0 ? "/" + t.pathname : t.pathname : "/";
                _dcsMultiTrack("DCS.dcssip", DCS.dcssip, "DCS.dcsuri", DCS.dcsuri, "DCS.dcsqry", DCS.dcsqry, "DCS.dcsref", DCS.dcsref, "WT.ti", "Offsite:" + n + s + (i.length ? "?" + i : ""), "WT.dl", "24", "WT.nv", dcsNavigation(e), "WT.hf", t.href)
            }
        }
    }
}, dcsFormButton = function(e) {
    //alert("dcsFormButton" +e+ zxd++);
    e = e || window.event || "";
    if (e && (typeof e.which != "number" || e.which == 1)) {
        var t = ["INPUT", "BUTTON"];
        for (var n = 0; n < t.length; n++) {
            var r = dcsEvt(e, t[n]),
                i;
            r && (i = r.type || "");
            if (i && (i == "submit" || i == "image" || i == "button" || i == "reset") || i == "text" && (e.which || e.keyCode) == 13) {
                var s = "",
                    o = "",
                    u = 0;
                r.form ? (s = r.form.action || window.location.pathname, o = r.form.id || r.form.name || r.form.className || "Unknown", u = r.form.method && r.form.method.toLowerCase() == "post" ? "27" : "26") : (s = window.location.pathname, o = r.name || r.id || "Unknown", u = t[n].toLowerCase() == "input" ? "28" : "29"), s && o && e.keyCode != 9 && _dcsMultiTrack("DCS.dcsuri", s, "WT.ti", "FormButton:" + o, "WT.dl", u, "WT.nv", dcsNavigation(e));
                break
            }
        }
    }
};
var gImages = new Array,
    gIndex = 0,
    DCS = new Object,
    WT = new Object,
    DCSext = new Object,
    gQP = new Array,
    gI18n = !0;
if (window.RegExp) var RE = {
        "%09": /\t/g,
        "%20": / /g,
        "%23": /\#/g,
        "%26": /\&/g,
        "%2B": /\+/g,
        "%3F": /\?/g,
        "%5C": /\\/g,
        "%22": /\"/g,
        "%7F": /\x7F/g,
        "%A0": /\xA0/g
    },
    I18NRE = {
        "%25": /\%/g
    };
var referer = function(e) {
    //alert("referer*******************" + zxd++);
    try {
        var t = "";
        try {
            if (e) {
                var n = e.indexOf("&referer=");
                if (n > 0) {
                    t = e.substring(e.indexOf("&referer=") + "&referer=".length);
                    if (t != "" && t != "-") {
                        DCS.dcsref = gI18n ? dcsEscape(dcsEncode(t), I18NRE) : dcsEncode(t);
                        if (DCS.dcsref.startWith("http%253A%252F%252F") || DCS.dcsref.startWith("https%253A%252F%252F") || DCS.dcsref.startWith("http%3A%2F%2F") || DCS.dcsref.startWith("https%3A%2F%2F") || DCS.dcsref.startWith("http%3A//") || DCS.dcsref.startWith("https%3A//") || DCS.dcsref.startWith("http%253A//") || DCS.dcsref.startWith("https%253A//") || DCS.dcsref.startWith("http%253A%2F%2F") || DCS.dcsref.startWith("https%253A%2F%2F") || DCS.dcsref.startWith("http://") || DCS.dcsref.startWith("https://")) return;
                        DCS.dcsref = ""
                    }
                } else {
                    n = e.indexOf("?referer=");
                    if (n > 0) {
                        t = e.substring(e.indexOf("?referer=") + "?referer=".length);
                        if (t != "" && t != "-") {
                            DCS.dcsref = gI18n ? dcsEscape(dcsEncode(t), I18NRE) : dcsEncode(t);
                            if (DCS.dcsref.startWith("http%253A%252F%252F") || DCS.dcsref.startWith("https%253A%252F%252F") || DCS.dcsref.startWith("http%3A%2F%2F") || DCS.dcsref.startWith("https%3A%2F%2F") || DCS.dcsref.startWith("http%3A//") || DCS.dcsref.startWith("https%3A//") || DCS.dcsref.startWith("http%253A//") || DCS.dcsref.startWith("https%253A//") || DCS.dcsref.startWith("http%253A%2F%2F") || DCS.dcsref.startWith("https%253A%2F%2F") || DCS.dcsref.startWith("http://") || DCS.dcsref.startWith("https://")) return;
                            DCS.dcsref = ""
                        }
                    }
                }
            }
        } catch (r) {
            DCS.dcsref = ""
        }
        window.document.referrer != "" && window.document.referrer != "-" && (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion) < 4 || (DCS.dcsref = gI18n ? dcsEscape(window.document.referrer, I18NRE) : window.document.referrer))
    } catch (r) {
        DCS.dcsref = ""
    }
};
String.prototype.startWith = function(e) {
    //alert("555555");
    try {
        return e == null || e == "" || this.length == 0 || e.length > this.length ? !1 : this.substr(0, e.length) == e ? !0 : !1
    } catch (t) {}
    return !1
},  getBloodlineID = function(e) {
    var t = e,
        n = "",
        r;
    while ( !! t.parent() && t[0].tagName != "BODY") {
        r = String(t.index());
        for (var i = r.length, s = 3; i < s; i++) r = "0" + r;
        n = r + n, t = t.parent()
    }
    return n == "" ? "-1" : n
},  dcsVar(), dcsMeta(), dcsFunc("dcsAdv"), dcsTag();
var _tag = new LFLog;

//_dcsMultiTrack("WT.order_id","123456789")



try {
    $("[bilogattr=addcartbilogclass]").click(function() {
        var e = $(this).attr("skuid");
        typeof e != undefined && e && _dcsMultiTrack("WT.ct", "button", "WT.pid", e, "WT.nu", "1")
    })
} catch (e) {alert(e)}