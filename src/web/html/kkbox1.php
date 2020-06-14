<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"
    lang="zh">
<?php
  $dbhost = '127.0.0.1';
  $dbuser = 'sususu';
  $dbpass = 'd03181214';
  $dbname = 'sususu';
  $conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die('Error with MySQL connection');
  $_SESSION['conn'] = $conn;
  mysqli_query($conn, "SET NAMES 'utf8'");
  mysqli_select_db($conn, $dbname);
  // $sql = "SELECT C_name, C_id FROM customer where account = '{$_SESSION[ "username" ]}' and password = '{$_SESSION[ "password" ]}';";
  // $result = mysqli_query($conn, $sql) or die('MySQL query error');
  // $row = mysqli_fetch_array($result);
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
    <title>Spotiflix</title>
    <!-- nav bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <link rel=stylesheet media="screen" href="../css/kkbox1.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox2.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox3.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox4.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox5.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox6.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox7.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox8.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox9.css">
    <link rel=stylesheet type="text/css" href="../css/kkbox10.css">
    <link rel=stylesheet media="screen" href="../css/kkbox11css">




    <!-- Rollbar.js -->
    <script>
    var _rollbarConfig = {
        accessToken: "1c23b49ade264a38b02412665968ca32",
        captureUncaught: true,
        captureUnhandledRejections: true,
        payload: {
            environment: "production"
        }
    };
    // Rollbar Snippet
    ! function(r) {
        function e(n) {
            if (o[n]) return o[n].exports;
            var t = o[n] = {
                exports: {},
                id: n,
                loaded: !1
            };
            return r[n].call(t.exports, t, t.exports, e), t.loaded = !0, t.exports
        }
        var o = {};
        return e.m = r, e.c = o, e.p = "", e(0)
    }([function(r, e, o) {
        "use strict";
        var n = o(1),
            t = o(4);
        _rollbarConfig = _rollbarConfig || {}, _rollbarConfig.rollbarJsUrl = _rollbarConfig.rollbarJsUrl ||
            "https://cdnjs.cloudflare.com/ajax/libs/rollbar.js/2.3.8/rollbar.min.js", _rollbarConfig.async =
            void 0 === _rollbarConfig.async || _rollbarConfig.async;
        var a = n.setupShim(window, _rollbarConfig),
            l = t(_rollbarConfig);
        window.rollbar = n.Rollbar, a.loadFull(window, document, !_rollbarConfig.async, _rollbarConfig, l)
    }, function(r, e, o) {
        "use strict";

        function n(r) {
            return function() {
                try {
                    return r.apply(this, arguments)
                } catch (r) {
                    try {
                        console.error("[Rollbar]: Internal error", r)
                    } catch (r) {}
                }
            }
        }

        function t(r, e) {
            this.options = r, this._rollbarOldOnError = null;
            var o = s++;
            this.shimId = function() {
                return o
            }, "undefined" != typeof window && window._rollbarShims && (window._rollbarShims[o] = {
                handler: e,
                messages: []
            })
        }

        function a(r, e) {
            if (r) {
                var o = e.globalAlias || "Rollbar";
                if ("object" == typeof r[o]) return r[o];
                r._rollbarShims = {}, r._rollbarWrappedError = null;
                var t = new p(e);
                return n(function() {
                    e.captureUncaught && (t._rollbarOldOnError = r.onerror, i.captureUncaughtExceptions(
                            r, t, !0), i.wrapGlobals(r, t, !0)), e.captureUnhandledRejections && i
                        .captureUnhandledRejections(r, t, !0);
                    var n = e.autoInstrument;
                    return e.enabled !== !1 && (void 0 === n || n === !0 || "object" == typeof n && n
                        .network) && r.addEventListener && (r.addEventListener("load", t.captureLoad
                        .bind(t)), r.addEventListener("DOMContentLoaded", t
                        .captureDomContentLoaded.bind(t))), r[o] = t, t
                })()
            }
        }

        function l(r) {
            return n(function() {
                var e = this,
                    o = Array.prototype.slice.call(arguments, 0),
                    n = {
                        shim: e,
                        method: r,
                        args: o,
                        ts: new Date
                    };
                window._rollbarShims[this.shimId()].messages.push(n)
            })
        }
        var i = o(2),
            s = 0,
            d = o(3),
            c = function(r, e) {
                return new t(r, e)
            },
            p = d.bind(null, c);
        t.prototype.loadFull = function(r, e, o, t, a) {
            var l = function() {
                    var e;
                    if (void 0 === r._rollbarDidLoad) {
                        e = new Error("rollbar.js did not load");
                        for (var o, n, t, l, i = 0; o = r._rollbarShims[i++];)
                            for (o = o.messages || []; n = o.shift();)
                                for (t = n.args || [], i = 0; i < t.length; ++i)
                                    if (l = t[i], "function" == typeof l) {
                                        l(e);
                                        break
                                    }
                    }
                    "function" == typeof a && a(e)
                },
                i = !1,
                s = e.createElement("script"),
                d = e.getElementsByTagName("script")[0],
                c = d.parentNode;
            s.crossOrigin = "", s.src = t.rollbarJsUrl, o || (s.async = !0), s.onload = s
                .onreadystatechange = n(function() {
                    if (!(i || this.readyState && "loaded" !== this.readyState && "complete" !== this
                            .readyState)) {
                        s.onload = s.onreadystatechange = null;
                        try {
                            c.removeChild(s)
                        } catch (r) {}
                        i = !0, l()
                    }
                }), c.insertBefore(s, d)
        }, t.prototype.wrap = function(r, e, o) {
            try {
                var n;
                if (n = "function" == typeof e ? e : function() {
                        return e || {}
                    }, "function" != typeof r) return r;
                if (r._isWrap) return r;
                if (!r._rollbar_wrapped && (r._rollbar_wrapped = function() {
                        o && "function" == typeof o && o.apply(this, arguments);
                        try {
                            return r.apply(this, arguments)
                        } catch (o) {
                            var e = o;
                            throw "string" == typeof e && (e = new String(e)), e._rollbarContext =
                            n() || {}, e._rollbarContext._wrappedSource = r.toString(), window
                                ._rollbarWrappedError = e, e
                        }
                    }, r._rollbar_wrapped._isWrap = !0, r.hasOwnProperty))
                    for (var t in r) r.hasOwnProperty(t) && (r._rollbar_wrapped[t] = r[t]);
                return r._rollbar_wrapped
            } catch (e) {
                return r
            }
        };
        for (var u =
                "log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleUnhandledRejection,captureEvent,captureDomContentLoaded,captureLoad"
                .split(","), f = 0; f < u.length; ++f) t.prototype[u[f]] = l(u[f]);
        r.exports = {
            setupShim: a,
            Rollbar: p
        }
    }, function(r, e) {
        "use strict";

        function o(r, e, o) {
            if (r) {
                var t;
                "function" == typeof e._rollbarOldOnError ? t = e._rollbarOldOnError : r.onerror && !r.onerror
                    .belongsToShim && (t = r.onerror, e._rollbarOldOnError = t);
                var a = function() {
                    var o = Array.prototype.slice.call(arguments, 0);
                    n(r, e, t, o)
                };
                a.belongsToShim = o, r.onerror = a
            }
        }

        function n(r, e, o, n) {
            r._rollbarWrappedError && (n[4] || (n[4] = r._rollbarWrappedError), n[5] || (n[5] = r
                    ._rollbarWrappedError._rollbarContext), r._rollbarWrappedError = null), e
                .handleUncaughtException.apply(e, n), o && o.apply(r, n)
        }

        function t(r, e, o) {
            if (r) {
                "function" == typeof r._rollbarURH && r._rollbarURH.belongsToShim && r.removeEventListener(
                    "unhandledrejection", r._rollbarURH);
                var n = function(r) {
                    var o, n, t;
                    try {
                        o = r.reason
                    } catch (r) {
                        o = void 0
                    }
                    try {
                        n = r.promise
                    } catch (r) {
                        n = "[unhandledrejection] error getting `promise` from event"
                    }
                    try {
                        t = r.detail, !o && t && (o = t.reason, n = t.promise)
                    } catch (r) {
                        t = "[unhandledrejection] error getting `detail` from event"
                    }
                    o || (o = "[unhandledrejection] error getting `reason` from event"), e && e
                        .handleUnhandledRejection && e.handleUnhandledRejection(o, n)
                };
                n.belongsToShim = o, r._rollbarURH = n, r.addEventListener("unhandledrejection", n)
            }
        }

        function a(r, e, o) {
            if (r) {
                var n, t, a =
                    "EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload"
                    .split(",");
                for (n = 0; n < a.length; ++n) t = a[n], r[t] && r[t].prototype && l(e, r[t].prototype, o)
            }
        }

        function l(r, e, o) {
            if (e.hasOwnProperty && e.hasOwnProperty("addEventListener")) {
                for (var n = e.addEventListener; n._rollbarOldAdd && n.belongsToShim;) n = n._rollbarOldAdd;
                var t = function(e, o, t) {
                    n.call(this, e, r.wrap(o), t)
                };
                t._rollbarOldAdd = n, t.belongsToShim = o, e.addEventListener = t;
                for (var a = e.removeEventListener; a._rollbarOldRemove && a.belongsToShim;) a = a
                    ._rollbarOldRemove;
                var l = function(r, e, o) {
                    a.call(this, r, e && e._rollbar_wrapped || e, o)
                };
                l._rollbarOldRemove = a, l.belongsToShim = o, e.removeEventListener = l
            }
        }
        r.exports = {
            captureUncaughtExceptions: o,
            captureUnhandledRejections: t,
            wrapGlobals: a
        }
    }, function(r, e) {
        "use strict";

        function o(r, e) {
            this.impl = r(e, this), this.options = e, n(o.prototype)
        }

        function n(r) {
            for (var e = function(r) {
                        return function() {
                            var e = Array.prototype.slice.call(arguments, 0);
                            if (this.impl[r]) return this.impl[r].apply(this.impl, e)
                        }
                    }, o =
                    "log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureEvent,captureDomContentLoaded,captureLoad"
                    .split(","), n = 0; n < o.length; n++) r[o[n]] = e(o[n])
        }
        o.prototype._swapAndProcessMessages = function(r, e) {
            this.impl = r(this.options);
            for (var o, n, t; o = e.shift();) n = o.method, t = o.args, this[n] && "function" ==
                typeof this[n] && ("captureDomContentLoaded" === n || "captureLoad" === n ? this[n].apply(
                    this, [t[0], o.ts]) : this[n].apply(this, t));
            return this
        }, r.exports = o
    }, function(r, e) {
        "use strict";
        r.exports = function(r) {
            return function(e) {
                if (!e && !window._rollbarInitialized) {
                    r = r || {};
                    for (var o, n, t = r.globalAlias || "Rollbar", a = window.rollbar, l = function(r) {
                            return new a(r)
                        }, i = 0; o = window._rollbarShims[i++];) n || (n = o.handler), o.handler
                        ._swapAndProcessMessages(l, o.messages);
                    window[t] = n, window._rollbarInitialized = !0
                }
            }
        }
    }]);
    // End Rollbar Snippet
    </script>
    <!-- Rollbar.js -->

    <!-- Google Tag Manager -->
    <script>
    var dataLayer = window.dataLayer || [];
    dataLayer.push({
        'environment': 'web'
    });
    </script>
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T6H4WHM');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">

        
       

        var count = 0;
        $(function(){
            
            $(".daily-chart .section-nav li").click(function(){
                count++;
                $(".daily-chart .section-nav li").eq($(this).index()).addClass("active").siblings().removeClass("active");
               
                for(i=0 ; i<9 ; i++){
                    
                    window.setTimeout(function() { 
                        
                        $(".daily-chart>li").eq(i).addClass("temp2").removeClass("layer2");
                        $(".daily-chart>li").eq(i).addClass("temp1").removeClass("layer1");
                        $(".daily-chart>li").eq(i).addClass("layer2").removeClass("temp1");   
                        $(".daily-chart>li").eq(i).addClass("layer1").removeClass("temp2");  
                            
                        
                        i++;
                    }, 500 * i);
                    
                
                }
                
            })
        })
    </script>


    <style>
    .button {
        background-color: #242424;
        /* Green */
        border-radius: 50%;
        border: solid #784ae4;
        color: white;
        padding: 18px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.1s;
        cursor: pointer;
    }

    .button1 {
        background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAFHElEQVRoge2ZXWyTVRjHf+ecty2UsbgOE2GDG8GRcEF0E5AQ46Y3kpgIZoEwTSQxRNwWvfAjYpBilERITESYgmIwgQjOEPnSeMGCXzdkuxKiLBIQkJnIBhndWNe95/FiH8yu7fv27dgu3D9p+rRpzvn9z/O856swpSn9v6XGpZVaMfNjLHGEagWVjrDQWGYbocgRMJaEEa5p4bwjtCmhZcUCzsTjyhbadUEG5rwkc6cp6rXlWWMpMwJmEBgj4IyKTXrsctUoDpgUu48cUVcn1MB9jXJv2PKugeeNJZwJMif8f+N+A5+rfjZ/eVxdv+sGyhtknRY+MkIsG1ge8COxY+l0hIZ9x9Shu2KgcoOEOiI0OZYXcsEEhB/9/R77N41721Rq3AzM2SBRFeFrY3nyLsMPx9/2OdTuPa56vdi0n5GfYHiMsLI4ydF4rYQLNtARoWmC4Yc/P9F/gw+9+HKWUHmj1GnLgUmAH4kdy9otp9XhvA2U1Uupgd+NMGuy4Ifeu6YrKl49nXmKzVpCBrblDy9oN4V2B8YHfrCfmFi25pWBskYpD1su5LtISSrBssVJBpLCubNhwqoIBx0c/k7c78CCl39Wl9NZnUwGIpYGHWCFdVO32fz6LEIhRUtLD/s/7WLg9kwcIoXAYyxhLWwE3vQuobho7VIXpOa1CKHQYFJramaws6mEBx9KYFPdaGuDwg/Hz31VK8bTwPwOlhqhPOgDO1r3lBhee7uU+jccIuFOcJPBH3JLWfdFKj0NOEJ1IbNNJi19NMq2z2IsejiBm+pGuzZf+OG4xtOAUVQFhU/PwGgVlxga3ill/SaH0LShbOQHj4OPDGjLA0HhdQ4Dw6qsjrJpf4yKZQkGhp4NP/DGgrZUeGdg8CQVeJHyo5kxw/r3SlkTdzDRLrApv33M9jZw5xiYN3yuEsqkxTVRGr4owYl2o6346W9mehtj1oFC4G2eBkYGzWd/Tob2M5VQIgh8rlkom86d6mVf3Q10ohhHlCe8EW6ltzEmA0boMEIsCLzrEzzR5XLi/Zv8+UOIqI4Nbje84TFCh7cBS7sRFuUL73cWOnuql+929KC7i5mhI77KZtQsdN7bALQaYVW+8MOvXKN+bPtNLv0YIqpKRzZ5fuGNgFa0ehpQQktQ+GzPwK+nejm5owedKGaGyrKx84A3AsrS4mlgxQLOtP7GFSPMzRc+PQO3ulyObr/JpZ9CTNelOKIDwxvhcnU7bem8Y2aheFxZAweDwBsUA6lBF23f97Bz3Q2u/FJEVBfj2ALgLWiXg4qxV5EZDzSrV0u5UVwwQtg3vIBN9bBgSR9uP1xrDTFdFw2Oeh7zfJbfJEOK+5e3q798GQBY+4x8bCwv5nOS0iIoO4BjIUzIE9gnPEbYteIP1ZiJM+uZ2NW85Viu+4U3Ao4oIhIab/jOaTr7mTirgeZm1eUIjX7hc5ZacHi0y8aq9uyXvjkvtvYdU4eMZc+kwVt2L7+omnMxet7MdUap18I3kwB/MjmPV7z4fF3ubnhKosVJmo2wciLgjeVEqI81VdfG4XIXYO9x1dvdydNG+GQiyqZvHqv8wEOAPzi2PiZrNOxy7NCt3fjB/6Nd6r1qPl2+MjBaW06rw8aw0IEmIyTHY5Eywi7dx8J84aHAP/k+eETKQtBghDpjh/ZO/uGvaMuBsGZ3phV2QgwMK47o8iqqjFDjQKW2VBihzNih87WQMC5XtdBuFK3apeXxdtoy7W2mNKUp5ad/Afn0aUTSl+oJAAAAAElFTkSuQmCC);
        background-position: center; 
    }

    .button1:hover {
        background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAFHElEQVRoge2ZXWyTVRjHf+ecty2UsbgOE2GDG8GRcEF0E5AQ46Y3kpgIZoEwTSQxRNwWvfAjYpBilERITESYgmIwgQjOEPnSeMGCXzdkuxKiLBIQkJnIBhndWNe95/FiH8yu7fv27dgu3D9p+rRpzvn9z/O856swpSn9v6XGpZVaMfNjLHGEagWVjrDQWGYbocgRMJaEEa5p4bwjtCmhZcUCzsTjyhbadUEG5rwkc6cp6rXlWWMpMwJmEBgj4IyKTXrsctUoDpgUu48cUVcn1MB9jXJv2PKugeeNJZwJMif8f+N+A5+rfjZ/eVxdv+sGyhtknRY+MkIsG1ge8COxY+l0hIZ9x9Shu2KgcoOEOiI0OZYXcsEEhB/9/R77N41721Rq3AzM2SBRFeFrY3nyLsMPx9/2OdTuPa56vdi0n5GfYHiMsLI4ydF4rYQLNtARoWmC4Yc/P9F/gw+9+HKWUHmj1GnLgUmAH4kdy9otp9XhvA2U1Uupgd+NMGuy4Ifeu6YrKl49nXmKzVpCBrblDy9oN4V2B8YHfrCfmFi25pWBskYpD1su5LtISSrBssVJBpLCubNhwqoIBx0c/k7c78CCl39Wl9NZnUwGIpYGHWCFdVO32fz6LEIhRUtLD/s/7WLg9kwcIoXAYyxhLWwE3vQuobho7VIXpOa1CKHQYFJramaws6mEBx9KYFPdaGuDwg/Hz31VK8bTwPwOlhqhPOgDO1r3lBhee7uU+jccIuFOcJPBH3JLWfdFKj0NOEJ1IbNNJi19NMq2z2IsejiBm+pGuzZf+OG4xtOAUVQFhU/PwGgVlxga3ill/SaH0LShbOQHj4OPDGjLA0HhdQ4Dw6qsjrJpf4yKZQkGhp4NP/DGgrZUeGdg8CQVeJHyo5kxw/r3SlkTdzDRLrApv33M9jZw5xiYN3yuEsqkxTVRGr4owYl2o6346W9mehtj1oFC4G2eBkYGzWd/Tob2M5VQIgh8rlkom86d6mVf3Q10ohhHlCe8EW6ltzEmA0boMEIsCLzrEzzR5XLi/Zv8+UOIqI4Nbje84TFCh7cBS7sRFuUL73cWOnuql+929KC7i5mhI77KZtQsdN7bALQaYVW+8MOvXKN+bPtNLv0YIqpKRzZ5fuGNgFa0ehpQQktQ+GzPwK+nejm5owedKGaGyrKx84A3AsrS4mlgxQLOtP7GFSPMzRc+PQO3ulyObr/JpZ9CTNelOKIDwxvhcnU7bem8Y2aheFxZAweDwBsUA6lBF23f97Bz3Q2u/FJEVBfj2ALgLWiXg4qxV5EZDzSrV0u5UVwwQtg3vIBN9bBgSR9uP1xrDTFdFw2Oeh7zfJbfJEOK+5e3q798GQBY+4x8bCwv5nOS0iIoO4BjIUzIE9gnPEbYteIP1ZiJM+uZ2NW85Viu+4U3Ao4oIhIab/jOaTr7mTirgeZm1eUIjX7hc5ZacHi0y8aq9uyXvjkvtvYdU4eMZc+kwVt2L7+omnMxet7MdUap18I3kwB/MjmPV7z4fF3ubnhKosVJmo2wciLgjeVEqI81VdfG4XIXYO9x1dvdydNG+GQiyqZvHqv8wEOAPzi2PiZrNOxy7NCt3fjB/6Nd6r1qPl2+MjBaW06rw8aw0IEmIyTHY5Eywi7dx8J84aHAP/k+eETKQtBghDpjh/ZO/uGvaMuBsGZ3phV2QgwMK47o8iqqjFDjQKW2VBihzNih87WQMC5XtdBuFK3apeXxdtoy7W2mNKUp5ad/Afn0aUTSl+oJAAAAAElFTkSuQmCC);
        background-position: center; 
        color: #242424;
    }
    .button1:active {
        background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAE3klEQVRoge2Zb2hVdRjHv885d1N0umGWzW0RaW0o2YuNfBmTXlQo1ItZNMOCwEyF3kVEcIMQeqER+ScXJIGSzgql8kXB6k1Q464UUdxIbG66IBV19zq3c57v04vdrXV3737n3M27oD1vHjgHfufzPc9znuf5/Q4wZ3P2/zaZiUWsvd3vxcrHA7VmIxuVXoMpqkmpoAKkpKm4oirdMOnSAB1rB9d0SlI4qwIuH++sG1HZRpVNRtRkYVHQE1Ad9VT0k3KIYnub33ysv6QCBk7+em84rO+p4mVSyrNAceAn3huh4tMEyt9pTtZfvesC+o7/8qKZ9xEVS8bApgGfvSYgcU3pbV+/c9WRuyIgdSBVVl3Nfary6r8fPiPw497UOzBwK7NjS1tTMGMCrnydWkDyC1Kevpvw/3jvZPlQumVDW9NtF5sX5c2XFl5A2jOZxMIT7S1ny6ctoLqa+0oLDygBUp4cqfI/dPFNmUJ9JzpbjXKo5PATrhnxwuaD9UdjC+j/6pd7KN55KpbOFnzWXw8Cq9/yef4SWzCFTLyd/wF4kFgi8N6NFYH+L3+uDc2/ELVJBaFiMJNBoAQVEPiYn6iAIAESCAIiPZSGhgYSgPmYl6iAWMIFP+ZHhN7DW46tuJTLmsgnIIC/3WJ02MFMBo2bHsWSB6oAAFf/uIGfPjmLhfMqQRWkh9J44vXVuO+hSgDAn7/fwHe7urGgrDIKPEgp15BbAbzlTCFLmmcqrXHSZiTUcXgAWPpgFYJQxwHCkOPwAHD/yioEgUaFBxUAvJfaW8x3Cuhd9dtaErVxc37Si8jJ/VxTiw5PCjRETf/QxUangECtOS68cfKnlAvkEjgV/KgHwtDW5a4z6Rsws6bY1SbPG84Fcgl0wetoT3BHwIhHiimVsSMQEz57r94ZAQ296kK1fKo6PyMRmBoeVKl2RoBERVx41zeg5hbohgdILHILKLLDFgLUCAKjwY+VU2cEJF3MeJAPUCMIjANPymCUCAwUM9vk2sQ6b/kEWmx4UDEQJQI9xQxmueZqZEXAQ83rdgowSqqYqXIyoCPFYsKTAgZM5a4zuYwG6OCkBzi6ZqE67xcWaHHhFYBJhzMCawfXdFLRF3eeLy4C0eFJXJp/qq7LKUCSQlIOx4IXHwM9N8fXuHz+JpCd9akCgY++c7fG7/eeuQWYHwceShxOYvJRZN4NzQ/vn67liHeBRHmUnVQQEJnhNMJAQQKCMszzKwCOigiVuH0njVA1mwoJlHmLAPMjwZMyHApWfHC67nIkAQDwffLMflJec8HHGYmLSBuQAlXs2X22bkc+zoJ7YoX3Nomrsw1PxTUJ/IJ74oICnkquvq70dswyPMxk666e5QUPfac82Fq/c9URU+/ArMETe3efqz02FaPzZO5Ob8M2qne81PCkfLt4We0bLj6ngI3HRMuH0q1KOVlC+G8yC7yNyR8lnLYAANjQ1nT7ZpB+loqPS5E2lctqnmvrWu48mQaK+MHx2Svdz6vKHhJLZxLeFH/RZJsr53MtUgQm2uaD9Ud9aANV9pEYngH4YVXsUaAhLjwwzZ98+1u6a8LQ227mtVJRFwdeDX1UHFKRvfk6bEkEjFkyad7i1MWmMLR1RmkkpZ6KGk74zapq/TS/hwFTMOmYf6quK99sM2dzNmfx7G9vQsF1jBzApwAAAABJRU5ErkJggg==);
        background-position: center; 
        
    }
    .isyou {
        background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAE3klEQVRoge2Zb2hVdRjHv885d1N0umGWzW0RaW0o2YuNfBmTXlQo1ItZNMOCwEyF3kVEcIMQeqER+ScXJIGSzgql8kXB6k1Q464UUdxIbG66IBV19zq3c57v04vdrXV3737n3M27oD1vHjgHfufzPc9znuf5/Q4wZ3P2/zaZiUWsvd3vxcrHA7VmIxuVXoMpqkmpoAKkpKm4oirdMOnSAB1rB9d0SlI4qwIuH++sG1HZRpVNRtRkYVHQE1Ad9VT0k3KIYnub33ysv6QCBk7+em84rO+p4mVSyrNAceAn3huh4tMEyt9pTtZfvesC+o7/8qKZ9xEVS8bApgGfvSYgcU3pbV+/c9WRuyIgdSBVVl3Nfary6r8fPiPw497UOzBwK7NjS1tTMGMCrnydWkDyC1Kevpvw/3jvZPlQumVDW9NtF5sX5c2XFl5A2jOZxMIT7S1ny6ctoLqa+0oLDygBUp4cqfI/dPFNmUJ9JzpbjXKo5PATrhnxwuaD9UdjC+j/6pd7KN55KpbOFnzWXw8Cq9/yef4SWzCFTLyd/wF4kFgi8N6NFYH+L3+uDc2/ELVJBaFiMJNBoAQVEPiYn6iAIAESCAIiPZSGhgYSgPmYl6iAWMIFP+ZHhN7DW46tuJTLmsgnIIC/3WJ02MFMBo2bHsWSB6oAAFf/uIGfPjmLhfMqQRWkh9J44vXVuO+hSgDAn7/fwHe7urGgrDIKPEgp15BbAbzlTCFLmmcqrXHSZiTUcXgAWPpgFYJQxwHCkOPwAHD/yioEgUaFBxUAvJfaW8x3Cuhd9dtaErVxc37Si8jJ/VxTiw5PCjRETf/QxUangECtOS68cfKnlAvkEjgV/KgHwtDW5a4z6Rsws6bY1SbPG84Fcgl0wetoT3BHwIhHiimVsSMQEz57r94ZAQ296kK1fKo6PyMRmBoeVKl2RoBERVx41zeg5hbohgdILHILKLLDFgLUCAKjwY+VU2cEJF3MeJAPUCMIjANPymCUCAwUM9vk2sQ6b/kEWmx4UDEQJQI9xQxmueZqZEXAQ83rdgowSqqYqXIyoCPFYsKTAgZM5a4zuYwG6OCkBzi6ZqE67xcWaHHhFYBJhzMCawfXdFLRF3eeLy4C0eFJXJp/qq7LKUCSQlIOx4IXHwM9N8fXuHz+JpCd9akCgY++c7fG7/eeuQWYHwceShxOYvJRZN4NzQ/vn67liHeBRHmUnVQQEJnhNMJAQQKCMszzKwCOigiVuH0njVA1mwoJlHmLAPMjwZMyHApWfHC67nIkAQDwffLMflJec8HHGYmLSBuQAlXs2X22bkc+zoJ7YoX3Nomrsw1PxTUJ/IJ74oICnkquvq70dswyPMxk666e5QUPfac82Fq/c9URU+/ArMETe3efqz02FaPzZO5Ob8M2qne81PCkfLt4We0bLj6ngI3HRMuH0q1KOVlC+G8yC7yNyR8lnLYAANjQ1nT7ZpB+loqPS5E2lctqnmvrWu48mQaK+MHx2Svdz6vKHhJLZxLeFH/RZJsr53MtUgQm2uaD9Ud9aANV9pEYngH4YVXsUaAhLjwwzZ98+1u6a8LQ227mtVJRFwdeDX1UHFKRvfk6bEkEjFkyad7i1MWmMLR1RmkkpZ6KGk74zapq/TS/hwFTMOmYf6quK99sM2dzNmfx7G9vQsF1jBzApwAAAABJRU5ErkJggg==);
        background-position: center; 
    }
    </style>

</head>

<body class="web-view">
     <!--nav-->
     <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top " style="background-color: black; padding-top:0px" >
            <h3><a href="#" style="color:blanchedalmond;"><img src="../image/Spotiflix1.png" width="140"></a></h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li >
                  <!-- <a class="nav-link" href="../html/kkbox.html" style="color:gainsboro"><strong>&emsp;音樂</strong> <span class="sr-only">(current)</span></a> -->
                  <?php
                    $newaddress = $_GET["add"];
                    echo"<a class=nav-link href=http://127.0.0.1/php_example/kkbox1.php?add=$newaddress style=color:gainsboro>";
                    echo"<strong>";
                    echo"&emsp; 音樂";
                    echo"</strong>";
                    echo"<span class=sr-only>";
                    echo"(current)";
                    echo"</span>";
                    echo"</a>";
                  ?>
                </li>
                <li >
                <?php
                    $newaddress = $_GET["add"];
                    echo"<a class=nav-link href=http://127.0.0.1/php_example/movie.php?add=$newaddress style=color:gainsboro>";
                    echo"<strong>";
                    echo"&emsp; 影片";
                    echo"</strong>";
                    echo"<span class=sr-only>";
                    echo"(current)";
                    echo"</span>";
                    echo"</a>";
                  ?>
                   <!-- <a class="nav-link" href="http://127.0.0.1/php_example/movie.php?add=$newaddress" style="color:gainsboro"><strong>&emsp;影片</strong> <span class="sr-only">(current)</span></a> -->
                </li>
              </ul>
              <!--navbar 片單按鈕-->
              <form class="form-inline mt-2 mt-md-0">
                  <?php
                    $newaddress = $_GET["add"];
                    echo"<a href=http://127.0.0.1/php_example/myList.php?add=$newaddress role=button style=color:gainsboro>";
                    echo"<strong>";
                    echo"我的片單";
                    echo"</strong>";
                    echo"</a>";
                  ?>
                <!-- <a href="http://127.0.0.1/php_example/myList.php" role="button" style="color:gainsboro">
                  <strong>我的片單</strong>
                </a> -->
              </form>
              &emsp;
              <form class="form-inline mt-2 mt-md-0">
              <?php
                // $newaddress = $_GET["add"];
                echo"<a href=http://127.0.0.1/php_example/personInfo.php?add=$newaddress role=button style=color:gainsboro>";
                echo"<strong>";
                echo"個人資料";
                echo"</strong>";
                echo"</a>";
              ?>
                 
              </form>
              &emsp;
              <form class="form-inline mt-2 mt-md-0">
                <a href="http://127.0.0.1/php_example/assert/login.php" role="button" style="color:gainsboro">
                  <strong>登出</strong></a>
              </form>
            </div>
          </nav>




    <div id="runway" class="owl-carousel owl-theme">
        <div class="runway-item">
            <a href="https://www.kkbox.com/click.php?type=runway&amp;terr=tw&amp;id=24284&amp;ch_id=212&amp;topic_id=19&amp;to=https%3A%2F%2Fwww.kkbox.com%2Ftw%2Ftc%2Fcolumn%2Fshowbiz-0-9341-1.html"
                target="_blank">
                <img src="https://i.kfs.io/article5/global/19,24284,1v1/original.jpg" alt="【點首歌】學會給世界添一點麻煩：許含光">
            </a>
        </div>
        <div class="runway-item">
            <a href="https://www.kkbox.com/click.php?type=runway&amp;terr=tw&amp;id=24268&amp;ch_id=212&amp;topic_id=19&amp;to=https%3A%2F%2Fwww.kkbox.com%2Ftw%2Ftc%2Fcolumn%2Fshowbiz-0-9328-1.html"
                target="_blank">
                <img src="https://i.kfs.io/article5/global/19,24268,1v1/original.jpg"
                    alt="【專訪】韋禮安：為了我愛的人，我一定要把專輯做出來（5/22-5/28）">
            </a>
        </div>
        <div class="runway-item">
            <a href="https://www.kkbox.com/click.php?type=runway&amp;terr=tw&amp;id=24263&amp;ch_id=212&amp;topic_id=19&amp;to=https%3A%2F%2Fwww.kkbox.com%2Ftw%2Ftc%2Fcolumn%2Fshowbiz-0-9340-1.html"
                target="_blank">
                <img src="https://i.kfs.io/article5/global/19,24263,1v1/original.jpg"
                    alt="【專訪】《Super Band》冠軍樂團Hoppipolla自稱台灣美食愛好者！許願和周杰倫合作">
            </a>
        </div>
        <div class="runway-item">
            <a href="https://www.kkbox.com/click.php?type=runway&amp;terr=tw&amp;id=24233&amp;ch_id=212&amp;topic_id=19&amp;to=https%3A%2F%2Fwww.kkbox.com%2Ftw%2Ftc%2Fcolumn%2Fshowbiz-0-9331-1.html"
                target="_blank">
                <img src="https://i.kfs.io/article5/global/19,24233,1v1/original.jpg" alt="日本國民歌王上架了！8首歌重溫平井堅生涯經典！">
            </a>
        </div>
        <div class="runway-item">
            <a href="https://www.kkbox.com/click.php?type=runway&amp;terr=tw&amp;id=24145&amp;ch_id=212&amp;topic_id=19&amp;to=https%3A%2F%2Fwww.kkbox.com%2Ftw%2Ftc%2Fcolumn%2Fshowbiz-0-9277-1.html"
                target="_blank">
                <img src="https://i.kfs.io/article5/global/19,24145,1v1/original.jpg" alt="婁峻碩專訪">
            </a>
        </div>
        <div class="runway-item">
            <a href="https://www.kkbox.com/click.php?type=runway&amp;terr=tw&amp;id=24144&amp;ch_id=212&amp;topic_id=19&amp;to=https%3A%2F%2Fwww.kkbox.com%2Ftw%2Ftc%2Fcolumn%2Fshowbiz-0-9272-1.html"
                target="_blank">
                <img src="https://i.kfs.io/article5/global/19,24144,1v1/original.jpg"
                    alt="【對談】荒井十一Ｘ陳建騏：其實偉大的專輯，背後都有一位製作人（上）">
            </a>
        </div>
    </div>

    <div class="container" id="section-trend">
        <div class="u-align-center">
            <h2 class="section-title">音樂趨勢</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card-article card--xl">
                    <div class="card-cover">
                        <a href="https://www.kkbox.com/tw/tc/column/features-0-3025-1.html" target="_blank">
                            <img src="https://i.kfs.io/article5_cover/global/8448963v1/original.jpg"
                                alt="第二屆KKBOX香港風雲歌手揭曉，「the Special」乘載著特別的2019年">
                        </a>
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">
                            <a href="https://www.kkbox.com/tw/tc/column/features-0-3025-1.html"
                                target="_blank">第二屆KKBOX香港風雲歌手揭曉，「the Special」乘載著特別的2019年</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card-article ">
                            <div class="card-cover">
                                <a href="https://www.kkbox.com/tw/tc/column/features-0-2925-1.html" target="_blank">
                                    <img src="https://i.kfs.io/article5_cover/global/6993919v1/original.jpg"
                                        alt="蘇打綠16週年！精選5首唱不膩經典歌">
                                </a>
                            </div>
                            <div class="card-text">
                                <h3 class="card-title">
                                    <a href="https://www.kkbox.com/tw/tc/column/features-0-2925-1.html"
                                        target="_blank">蘇打綠16週年！精選5首唱不膩經典歌</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-article ">
                            <div class="card-cover">
                                <a href="https://www.kkbox.com/tw/tc/column/showbiz-0-9347-1.html" target="_blank">
                                    <img src="https://i.kfs.io/article5_cover/global/8234921v26/original.jpg"
                                        alt="〈那女孩對我說〉2020持續發燒！盤點蕭敬騰、Uu等人神級改編">
                                </a>
                            </div>
                            <div class="card-text">
                                <h3 class="card-title">
                                    <a href="https://www.kkbox.com/tw/tc/column/showbiz-0-9347-1.html"
                                        target="_blank">〈那女孩對我說〉2020持續發燒！盤點蕭敬騰、Uu等人神級改編</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card-article ">
                            <div class="card-cover">
                                <a href="https://www.kkbox.com/tw/tc/column/showbiz-0-9332-1.html" target="_blank">
                                    <img src="https://i.kfs.io/article5_cover/global/8231054v4/original.jpg"
                                        alt="東西文化交織 坂本龍一與大衛拜恩為《末代皇帝》打造的經典音色">
                                </a>
                            </div>
                            <div class="card-text">
                                <h3 class="card-title">
                                    <a href="https://www.kkbox.com/tw/tc/column/showbiz-0-9332-1.html"
                                        target="_blank">東西文化交織 坂本龍一與大衛拜恩為《末代皇帝》打造的經典音色</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card-article ">
                            <div class="card-cover">
                                <a href="https://www.kkbox.com/tw/tc/column/showbiz-0-9326-1.html" target="_blank">
                                    <img src="https://i.kfs.io/article5_cover/global/8229987v3/original.jpg"
                                        alt="發片延後、歌手線上開唱！回顧疫情爆發5個月，台灣音樂圈做了這些事">
                                </a>
                            </div>
                            <div class="card-text">
                                <h3 class="card-title">
                                    <a href="https://www.kkbox.com/tw/tc/column/showbiz-0-9326-1.html"
                                        target="_blank">發片延後、歌手線上開唱！回顧疫情爆發5個月，台灣音樂圈做了這些事</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="card-article card--xl">
                    <div class="card-cover">
                        <a href="https://www.kkbox.com/tw/tc/column/showbiz-0-9329-1.html" target="_blank">
                            <img src="https://i.kfs.io/article5_cover/global/8230010v7/original.jpg"
                                alt="【藝人瘋動森2】拿筆啵北島～酷帥樂團、偶像歌手接力翻唱〈K.K HOUSE〉，你最愛哪一版？">
                        </a>
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">
                            <a href="https://www.kkbox.com/tw/tc/column/showbiz-0-9329-1.html"
                                target="_blank">【藝人瘋動森2】拿筆啵北島～酷帥樂團、偶像歌手接力翻唱〈K.K HOUSE〉，你最愛哪一版？</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="u-align-center">
            <a class="btn btn-action" href="/charts/music-trend?terr=tw&lang=tc">
                更多
            </a>
        </div>
    </div>

    <section class="daily-chart home-fullwidth"
        style="background-image:url(../music/img/background.jpg)">
        <div class="container" id="day">
            <div class="clearfix">
                <div class="section-sidebar">
                    <h2 class="section-title">日榜</h2>
                    <ul class="section-nav" data-group="daily-chart">
                        <li class="active" style="background:green;">
                            <a href="#!" data-chart-key="newrelease_297" onclick="flipping(1)"
                                data-entry-url="/charts/daily/newrelease?terr=tw&lang=tc&category=297">
                                華語新歌
                            </a>
                        </li>
                        <li class="">
                            <a href="#!"  data-chart-key="song_297" onclick="flipping(2)"
                                data-entry-url="/charts/daily/song?terr=tw&lang=tc&category=297">
                                華語單曲
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="section-scroller">
                    <div class="section-slider">
                        <div class="daily-chart">
                            <div class="u-layout-2-col">
                                <ul class="charts-list charts-list--section">
                                    <li class="charts-list-row">
                                        <span class="charts-list-rank">1</span>
                                        <a>
                                            <div class="flipper">
                                                <div class="flipper-item layer1">
                                                    <img class="charts-list-cover" src="" alt="">
                                                    <span class="charts-list-desc">
                                                        <span class="charts-list-song"></span>
                                                        <span class="charts-list-artist"></span>
                                                    </span>
                                                    <button class="button button1 btplay" onclick="changeSongMethod(1)">
                                                        <audio controls id="mymp3" hidden="true">
                                                            <source src="../music/spotiflix/1.mp3" type="audio/mpeg"
                                                                hidden="true">
                                                        </audio>
                                                    </button>
                                                    <span class="charts-list-unauth">未授權</span>
                                                    <div class="tooltip tooltip-top">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">
                                                            <h6 class="tooltip-title"></h6>
                                                            <ol>
                                                                <li class="tooltip-line1"></li>
                                                                <li class="tooltip-line2"></li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flipper-item layer2">
                                                    <img class="charts-list-cover" src="" alt="">
                                                    <span class="charts-list-desc">
                                                        <span class="charts-list-song"></span>
                                                        <span class="charts-list-artist"></span>
                                                    </span>
                                                    <span class="charts-list-unauth">未授權</span>
                                                    <div class="tooltip tooltip-top">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">
                                                            <h6 class="tooltip-title"></h6>
                                                            <ol>
                                                                <li class="tooltip-line1"></li>
                                                                <li class="tooltip-line2"></li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--song 1~10-->
                                    <?php
                                        $sql = "SELECT Son_Name, sin_Name, Son_Pic, Son_Address FROM songs,singer  WHERE sing_id = sin_id LIMIT 1,9" ;
                                        $result = $conn->query($sql);
                                        $i = 2;
                                        $sql1 = "SELECT Son_Name, sin_Name, Son_Pic, Son_Address FROM songs,singer  WHERE sing_id = sin_id LIMIT 11,19  " ;
                                        $result1 = $conn->query($sql1);
                                       
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $row1 = $result1->fetch_assoc();
                                            if($i == 6){
                                                echo '<div class="u-layout-2-col">
                                                        <ul class="charts-list charts-list--section">';
                                            }
                                            echo '<li class="charts-list-row">
                                            <span class="charts-list-rank">'.$i.'</span>
                                            <a>
                                                <div class="flipper">
                                                    <div class="flipper-item layer1">
                                                        <img class="charts-list-cover" src="'.$row1["Son_Pic"].'" alt="">
                                                        <span class="charts-list-desc">
                                                        <span class="charts-list-song">'.$row1["Son_Name"].'</span>
                                                        <span class="charts-list-artist">'.$row1["sin_Name"].'</span>
                                                        </span>
                                                        <button class="button button1 btplay" onclick="changeSongMethod('.$i++.')">
                                                        </button>
                                                        <span class="charts-list-unauth">未授權</span>
                                                        <div class="tooltip tooltip-top">
                                                            <div class="arrow"></div>
                                                            <div class="tooltip-inner">
                                                                <h6 class="tooltip-title"></h6>
                                                                <ol>
                                                                    <li class="tooltip-line1"></li>
                                                                    <li class="tooltip-line2"></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                    echo '<div class="flipper-item layer2">
                                                                <img class="charts-list-cover" src="'.$row1["Son_Pic"].'" alt="">
                                                                <span class="charts-list-desc">
                                                                <span class="charts-list-song">'.$row1["Son_Name"].'</span>
                                                                <span class="charts-list-artist">'.$row1["sin_Name"].'</span>
                                                                </span>
                                                                <span class="charts-list-unauth">未授權</span>
                                                                <div class="tooltip tooltip-top">
                                                                    <div class="arrow"></div>
                                                                    <div class="tooltip-inner">
                                                                        <h6 class="tooltip-title"></h6>
                                                                        <ol>
                                                                            <li class="tooltip-line1"></li>
                                                                            <li class="tooltip-line2"></li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>';
                                                if($i == 6){
                                                    echo '</div>
                                                        </ul>';
                                                }
                            
                                        }
                                    }
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-panel">
                <div class="section-date">
                    更新時間：<br>
                    <time></time>
                </div>
                <div class="section-slider-nav">
                
                    <a class="section-slider-prev" href="#!" onclick="move(1)"></a>
                    <a class="section-slider-next" href="#!"onclick="move(1)"></a>
                
                    
                </div>
                <?php
                    $newaddress = $_GET["add"];
                    echo"<a href=http://127.0.0.1/php_example/Billboard.php?add=$newaddress role=button style=color:gainsboro>";
                    echo"查看完整榜單";
                    echo "</a>";
                ?>
                
                    
                
            </div>
            <div class="slider-nav"></div>
        </div>
    </section>

    <div class="container" id="section-video">
        <div class="u-align-center">
            <h2 class="section-title">獨家影音</h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="card-video card--xl" data-mfp-src="https://www.youtube.com/watch?v=16-X1I4VYpE">
                    <div class="card-cover">
                        <img src="https://i.ytimg.com/vi/16-X1I4VYpE/maxresdefault.jpg"
                            alt="#金曲30 ｜KKBOX小編翹班聊金曲：最佳女歌手篇（記得點開說明👇）｜KKBOX速爆娛樂星球">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">
                            <a href="#">#金曲30 ｜KKBOX小編翹班聊金曲：最佳女歌手篇（記得點開說明👇）｜KKBOX速爆娛樂星球</a>
                        </h3>
                    </div>
                    <i class="btn-playmv"></i>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="row ">
                    <div class="col-6">
                        <div class="card-video " data-mfp-src="https://www.youtube.com/watch?v=VvTFi3ReiQo">
                            <div class="card-cover">
                                <img src="https://i.ytimg.com/vi/VvTFi3ReiQo/maxresdefault.jpg"
                                    alt="#金曲30 ｜KKBOX小編翹班聊金曲：最佳男歌手篇（內有金曲獎贈票活動👇）｜KKBOX速爆娛樂星球">
                            </div>
                            <div class="card-text">
                                <h3 class="card-title">
                                    <a href="#">#金曲30 ｜KKBOX小編翹班聊金曲：最佳男歌手篇（內有金曲獎贈票活動👇）｜KKBOX速爆娛樂星球</a>
                                </h3>
                            </div>
                            <i class="btn-playmv"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-video " data-mfp-src="https://www.youtube.com/watch?v=t8t_sq78MTw">
                            <div class="card-cover">
                                <img src="https://i.ytimg.com/vi/t8t_sq78MTw/maxresdefault.jpg"
                                    alt="#金曲30 ｜KKBOX小編翹班聊金曲：年度歌曲篇（記得點開說明👇）｜KKBOX速爆娛樂星球">
                            </div>
                            <div class="card-text">
                                <h3 class="card-title">
                                    <a href="#">#金曲30 ｜KKBOX小編翹班聊金曲：年度歌曲篇（記得點開說明👇）｜KKBOX速爆娛樂星球</a>
                                </h3>
                            </div>
                            <i class="btn-playmv"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-video " data-mfp-src="https://www.youtube.com/watch?v=zo2PPyjU8eo">
                            <div class="card-cover">
                                <img src="https://i.ytimg.com/vi/zo2PPyjU8eo/maxresdefault.jpg"
                                    alt="#金曲30 ｜KKBOX小編聊金曲：最佳新人獎入圍篇（內有金曲獎贈票活動👇）｜KKBOX速爆娛樂星球">
                            </div>
                            <div class="card-text">
                                <h3 class="card-title">
                                    <a href="#">#金曲30 ｜KKBOX小編聊金曲：最佳新人獎入圍篇（內有金曲獎贈票活動👇）｜KKBOX速爆娛樂星球</a>
                                </h3>
                            </div>
                            <i class="btn-playmv"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-video " data-mfp-src="https://www.youtube.com/watch?v=vzaFIz9XOp4">
                            <div class="card-cover">
                                <img src="https://i.ytimg.com/vi/vzaFIz9XOp4/maxresdefault.jpg"
                                    alt="【速爆老司機開掛】尬電小王子 OSN 高爾宣＋鄉民老婆 Julia 吳卓源首度合體！邀高中生大聊青春秘史嗨炸西門町｜KKBOX速爆突擊隊（內有彩蛋連結👇）">
                            </div>
                            <div class="card-text">
                                <h3 class="card-title">
                                    <a href="#">【速爆老司機開掛】尬電小王子 OSN 高爾宣＋鄉民老婆 Julia
                                        吳卓源首度合體！邀高中生大聊青春秘史嗨炸西門町｜KKBOX速爆突擊隊（內有彩蛋連結👇）</a>
                                </h3>
                            </div>
                            <i class="btn-playmv"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="weekly-chart home-fullwidth"
        style="background-image:url(../music/img/background.jpg)">
        <div class="container" id="week">
            <div class="clearfix">
                <div class="section-sidebar" >
                    <h2 class="section-title">週榜</h2>
                    <ul class="section-nav" data-group="weekly-chart">
                        <li class="active">
                            <a href="#!" data-chart-key="newrelease_297"
                                data-entry-url="/charts/weekly/newrelease?terr=tw&lang=tc&category=297">
                                華語新歌
                            </a>
                        </li>
                        <li class="">
                            <a href="#!" data-chart-key="song_297"
                                data-entry-url="/charts/weekly/song?terr=tw&lang=tc&category=297">
                                華語單曲
                            </a>
                        </li>
                        <li class="">
                            <a href="#!" data-chart-key="album_297"
                                data-entry-url="/charts/weekly/album?terr=tw&lang=tc&category=297">
                                華語專輯
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="section-scroller">
                    <div class="section-slider">
                        <div class="weekly-chart">
                            <div class="u-layout-2-col">
                                <ul class="charts-list charts-list--section">
                                    <li class="charts-list-row">
                                        <span class="charts-list-rank">1</span>
                                        <a href="#">
                                            <div class="flipper">
                                                <div class="flipper-item layer1">
                                                    <img class="charts-list-cover" src="" alt="">
                                                    <span class="charts-list-desc">
                                                        <span class="charts-list-song"></span>
                                                        <span class="charts-list-artist"></span>
                                                    </span>
                                                    <span class="charts-list-unauth">未授權</span>
                                                    <div class="tooltip tooltip-top">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">
                                                            <h6 class="tooltip-title"></h6>
                                                            <ol>
                                                                <li class="tooltip-line1"></li>
                                                                <li class="tooltip-line2"></li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flipper-item layer2">
                                                    <img class="charts-list-cover" src="" alt="">
                                                    <span class="charts-list-desc">
                                                        <span class="charts-list-song"></span>
                                                        <span class="charts-list-artist"></span>
                                                    </span>
                                                    <span class="charts-list-unauth">未授權</span>
                                                    <div class="tooltip tooltip-top">
                                                        <div class="arrow"></div>
                                                        <div class="tooltip-inner">
                                                            <h6 class="tooltip-title"></h6>
                                                            <ol>
                                                                <li class="tooltip-line1"></li>
                                                                <li class="tooltip-line2"></li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!--song 1~10 week-->
                                    <?php
                                        $sql = "SELECT Son_Name, sin_Name, Son_Pic FROM songs,singer  WHERE sing_id = sin_id LIMIT 11,13" ;
                                        $result = $conn->query($sql);
                                        $i = 11;
                                        if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            if($i == 15){
                                                echo '<div class="u-layout-2-col">
                                                        <ul class="charts-list charts-list--section">';
                                            }
                                            echo '<li class="charts-list-row">
                                            <span class="charts-list-rank">'.($i-9).'</span>
                                            <a>
                                                <div class="flipper">
                                                    <div class="flipper-item layer1">
                                                        <img class="charts-list-cover" src="'.$row["Son_Pic"].'" alt="">
                                                        <span class="charts-list-desc">
                                                        <span class="charts-list-song">'.$row["Son_Name"].'</span>
                                                        <span class="charts-list-artist">'.$row["sin_Name"].'</span>
                                                        </span>
                                                        <button class="button button1 btplay" onclick="changeSongMethod('.(($i++)+1).')">
                                                        </button>
                                                        <span class="charts-list-unauth">未授權</span>
                                                        <div class="tooltip tooltip-top">
                                                            <div class="arrow"></div>
                                                            <div class="tooltip-inner">
                                                                <h6 class="tooltip-title"></h6>
                                                                <ol>
                                                                    <li class="tooltip-line1"></li>
                                                                    <li class="tooltip-line2"></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                    echo '<div class="flipper-item layer2">
                                                                <img class="charts-list-cover" src="'.$row["Son_Pic"].'" alt="">
                                                                <span class="charts-list-desc">
                                                                <span class="charts-list-song">'.$row["Son_Name"].'</span>
                                                                <span class="charts-list-artist">'.$row["sin_Name"].'</span>
                                                                </span>
                                                                <span class="charts-list-unauth">未授權</span>
                                                                <div class="tooltip tooltip-top">
                                                                    <div class="arrow"></div>
                                                                    <div class="tooltip-inner">
                                                                        <h6 class="tooltip-title"></h6>
                                                                        <ol>
                                                                            <li class="tooltip-line1"></li>
                                                                            <li class="tooltip-line2"></li>
                                                                        </ol>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>';
                                            if($i == 15){
                                                echo '</ul>
                                                </div> ';
                                                       
                                            }
                                            if($i == 21){
                                            break;
                                                       
                                            }
                            
                                        }
                                    }
                                    ?>
                                    <script>
                                    //song play control setting
                                    var play = 0;
                                    var song = -1;
                                    var songslist = [<?php
                                                        $sql = "SELECT Son_Address FROM songs LIMIT 1,19";
                                                        $result = $conn -> query($sql);

                                                        if ($result -> num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result -> fetch_assoc()) {
                                                                echo '"'.$row["Son_Address"].'",';
                                                            }
                                                        }
                                                    ?> ""];

                                    function changeSongMethod(nowsong) {
                                        var ebtplay = document.querySelector(".btplay");
                                        var emymp3 = document.querySelector("#mymp3");
                                        emymp3.src = songslist[nowsong - 2];
                                        

                                        if (play && nowsong == song) {
                                            emymp3.pause();
                                            play = 0;
                                        } else {
                                            emymp3.play();
                                            play = 1;
                                        }
                                        song = nowsong;
                                        return;
                                    }
                                    //container daily-chart weekly-chart left-right move
                                    var day = 0;
                                    var week = 0;
                                    function move(object){
                                        if(object==1){
                                            if(day==0){
                                                document.querySelector("#day").classList.add('revealed');
                                                day=1;
                                            }
                                            else{
                                                document.querySelector("#day").classList.remove('revealed');
                                                day=0;
                                            }
                                            
                                            
                                        }
                                        else if(object==2){
                                            if(week==0){
                                                document.querySelector("#week").classList.add('revealed');
                                                week=1;
                                            }
                                            else{
                                                document.querySelector("#week").classList.remove('revealed');
                                                week=0;
                                            }
                                        }
                                        return;
                                    }


                                    var first = 0;
                                    var second = 1;
                                    function flipping(num){
                                        for(var j = 0 ; j<10 ; j++){
                                            if(num==1){
                                                document.querySelector(".layer1").classList.add('layer2').classList.remove('layer1');
                                                document.querySelector(".layer2").classList.add('layer1').classList.remove('layer1');
                                            

                                        }
                                        else if(num==2){
                                            if(week==0){
                                                document.querySelector("#week").classList.add('revealed');
                                                week=1;
                                            }
                                            else{
                                                document.querySelector("#week").classList.remove('revealed');
                                                week=0;
                                            }
                                        }
                                        }
                                        
                                        return;
                                    }
                                    </script>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-panel">
                <div class="section-date">
                    更新時間：<br>
                    <time class="begin"></time> ~ <time class="end"></time>
                </div>
                <div class="section-slider-nav">
                    <a class="section-slider-prev" href="#!" onclick="move(2)"></a>
                    <a class="section-slider-next" href="#!" onclick="move(2)"></a>
                </div>
                <?php
                    $newaddress = $_GET["add"];
                    echo"<a href=http://127.0.0.1/php_example/Billboard.php?add=$newaddress role=button style=color:gainsboro>";
                    echo"查看完整榜單";
                    echo "</a>";
                ?>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="u-align-center">
            <h2 class="section-title">速爆新歌</h2>
        </div>
        <div class="row no-gutters">
            <div class="col-6 col-md-3">
                <div class="newhit">
                    <a class="newhit-cover" href="https://www.kkbox.com/tw/tc/playlist/DZrC8m29ciOFY2JAm3"
                        target="_blank">
                        <img src="https://i.kfs.io/playlist/global/26541395v366/cropresize/300x300.jpg">
                        <span class="newhit-label">華語</span>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="newhit">
                    <a class="newhit-cover" href="https://www.kkbox.com/tw/tc/playlist/DZni8m29ciOFbRxTJq"
                        target="_blank">
                        <img src="https://i.kfs.io/playlist/global/26541409v192/cropresize/300x300.jpg">
                        <span class="newhit-label">西洋</span>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="newhit">
                    <a class="newhit-cover" href="https://www.kkbox.com/tw/tc/playlist/1_pCwOnj-qZsGU3rTJ"
                        target="_blank">
                        <img src="https://i.kfs.io/playlist/global/26541410v171/cropresize/300x300.jpg">
                        <span class="newhit-label">日語</span>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="newhit">
                    <a class="newhit-cover" href="https://www.kkbox.com/tw/tc/playlist/0kM_Sp_Ezou3BMGK-n"
                        target="_blank">
                        <img src="https://i.kfs.io/playlist/global/26541412v174/cropresize/300x300.jpg">
                        <span class="newhit-label">韓語</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="inner">
            <ul class="footer-nav">
                <li>
                    <a href="https://www.kkbox.com/tw/tc/" target="_blank">KKBOX</a>
                </li>
                <li>
                    <a href="https://www.kkbox.com/tw/tc/listen-with" target="_blank">一起聽</a>
                </li>
                <li>
                    <a href="https://www.kkbox.com/live/?terr=tw" target="_blank">KKBOX LIVE</a>
                </li>
            </ul>
            <div class="copyright">Copyright &copy; 2020 KKBOX All Rights Reserved.</div>
        </div>
    </footer>
    <div class="wpb-popup mfp-hide" id="open-kkbox-setting">
        <div class="wpb-container">
            <h2 class="wpb-header">聆聽歌曲前需要先安裝 KKBOX 應用程式喔！</h2>
            <div class="wpb-content">
                <button id="playwith_kkbox" class="wpb-btn-primary">已安裝，立即開啟 KKBOX</button>
                <button id="playwith_wp" class="wpb-btn">免安裝，開啟網頁播放器</button>
                <input type="checkbox" id="wpb-remember">
                <label for="wpb-remember">
                    <span class="checkbox-icon"><i class="fa fa-check"></i></span>
                    <span>下次不用再問我</span>
                </label>
                <div class="wpb-footer">
                    <a href="https://www.kkbox.com/get-app" target="_blank">還沒安裝？點此立即下載</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/jquery@3.2.1/dist/jquery.js"></script>
    <script src="https://unpkg.com/lodash@4.17.4/lodash.min.js"></script>
    <script src="https://unpkg.com/axios@0.16.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/mobile-detect@1.3.7/mobile-detect.min.js"></script>
    <script src="/charts/assets/vendors/kkbox-playbar/js/kkbox-playbar.js?id=70f0b60c7932a8c01205"></script>
    <script src="/charts/assets/vendors/magnific-popup/jquery.magnific-popup.min.js?id=ba6cf724c8bb1cf5b084"></script>
    <script src="/charts/assets/vendors/nprogress/nprogress.js?id=5fc208df77427b19a155"></script>
    <script src="https://pkg.kfs.io/kk-web/sharebox.js/1.8.0/sharebox.js"></script>

    <script>
    var device = {
        "isMobile": false,
        "isTablet": false,
        "isInApp": false
    };
    var terr = "tw";
    var lang = "tc";
    </script>
    <script src="https://unpkg.com/lodash@4.17.4/lodash.min.js"></script>
    <script src="https://unpkg.com/chartist@0.11.0/dist/chartist.js"></script>
    <script src="/charts/assets/vendors/moment/moment-with-locales.min.js?id=1b1c80b617bfcaf8c076"></script>
    <script src="/charts/assets/vendors/owl-carousel/owl.carousel.min.js?id=f416f9031fef25ae25ba"></script>
    <script>
    var dateFormat = "YYYY-MM-DD";
    var hourlyChartRankings = {
        "updated_at": 1591409081,
        "charts": {
            "newrelease": [{
                "type": "song",
                "rankings": [{
                    "at": 1591322400,
                    "rank": 1
                }, {
                    "at": 1591326000,
                    "rank": 1
                }, {
                    "at": 1591329600,
                    "rank": 1
                }, {
                    "at": 1591333200,
                    "rank": 1
                }, {
                    "at": 1591336800,
                    "rank": 1
                }, {
                    "at": 1591340400,
                    "rank": 1
                }, {
                    "at": 1591344000,
                    "rank": 1
                }, {
                    "at": 1591347600,
                    "rank": 1
                }, {
                    "at": 1591351200,
                    "rank": 1
                }, {
                    "at": 1591354800,
                    "rank": 1
                }, {
                    "at": 1591358400,
                    "rank": 1
                }, {
                    "at": 1591362000,
                    "rank": 1
                }, {
                    "at": 1591365600,
                    "rank": 1
                }, {
                    "at": 1591369200,
                    "rank": 1
                }, {
                    "at": 1591372800,
                    "rank": 1
                }, {
                    "at": 1591376400,
                    "rank": 1
                }, {
                    "at": 1591380000,
                    "rank": 1
                }, {
                    "at": 1591383600,
                    "rank": 1
                }, {
                    "at": 1591387200,
                    "rank": 1
                }, {
                    "at": 1591390800,
                    "rank": 1
                }, {
                    "at": 1591394400,
                    "rank": 1
                }, {
                    "at": 1591398000,
                    "rank": 1
                }, {
                    "at": 1591401600,
                    "rank": 1
                }, {
                    "at": 1591405200,
                    "rank": 1
                }],
                "is_auth": true,
                "song_name": "\u592a\u967d (When The Cloudless Day Comes)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u592a\u967d",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/160x160.jpg"
                },
                "status": 0
            }, {
                "type": "song",
                "rankings": [{
                    "at": 1591322400,
                    "rank": 2
                }, {
                    "at": 1591326000,
                    "rank": 2
                }, {
                    "at": 1591329600,
                    "rank": 2
                }, {
                    "at": 1591333200,
                    "rank": 2
                }, {
                    "at": 1591336800,
                    "rank": 2
                }, {
                    "at": 1591340400,
                    "rank": 2
                }, {
                    "at": 1591344000,
                    "rank": 2
                }, {
                    "at": 1591347600,
                    "rank": 2
                }, {
                    "at": 1591351200,
                    "rank": 2
                }, {
                    "at": 1591354800,
                    "rank": 2
                }, {
                    "at": 1591358400,
                    "rank": 2
                }, {
                    "at": 1591362000,
                    "rank": 2
                }, {
                    "at": 1591365600,
                    "rank": 2
                }, {
                    "at": 1591369200,
                    "rank": 2
                }, {
                    "at": 1591372800,
                    "rank": 2
                }, {
                    "at": 1591376400,
                    "rank": 2
                }, {
                    "at": 1591380000,
                    "rank": 2
                }, {
                    "at": 1591383600,
                    "rank": 2
                }, {
                    "at": 1591387200,
                    "rank": 2
                }, {
                    "at": 1591390800,
                    "rank": 2
                }, {
                    "at": 1591394400,
                    "rank": 2
                }, {
                    "at": 1591398000,
                    "rank": 2
                }, {
                    "at": 1591401600,
                    "rank": 2
                }, {
                    "at": 1591405200,
                    "rank": 2
                }],
                "is_auth": true,
                "song_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/160x160.jpg"
                },
                "status": 0
            }, {
                "type": "song",
                "rankings": [{
                    "at": 1591322400,
                    "rank": 4
                }, {
                    "at": 1591326000,
                    "rank": 7
                }, {
                    "at": 1591329600,
                    "rank": 4
                }, {
                    "at": 1591333200,
                    "rank": 4
                }, {
                    "at": 1591336800,
                    "rank": 5
                }, {
                    "at": 1591340400,
                    "rank": 5
                }, {
                    "at": 1591344000,
                    "rank": 4
                }, {
                    "at": 1591347600,
                    "rank": 5
                }, {
                    "at": 1591351200,
                    "rank": 5
                }, {
                    "at": 1591354800,
                    "rank": 9
                }, {
                    "at": 1591358400,
                    "rank": 3
                }, {
                    "at": 1591362000,
                    "rank": 3
                }, {
                    "at": 1591365600,
                    "rank": 3
                }, {
                    "at": 1591369200,
                    "rank": 3
                }, {
                    "at": 1591372800,
                    "rank": 4
                }, {
                    "at": 1591376400,
                    "rank": 4
                }, {
                    "at": 1591380000,
                    "rank": 4
                }, {
                    "at": 1591383600,
                    "rank": 4
                }, {
                    "at": 1591387200,
                    "rank": 3
                }, {
                    "at": 1591390800,
                    "rank": 3
                }, {
                    "at": 1591394400,
                    "rank": 3
                }, {
                    "at": 1591398000,
                    "rank": 3
                }, {
                    "at": 1591401600,
                    "rank": 3
                }, {
                    "at": 1591405200,
                    "rank": 3
                }],
                "is_auth": true,
                "song_name": "\u4e0d\u5728\u4e4e",
                "artist_name": "\u5f35\u8a9e\u5665 (Sammy)",
                "album_name": "Sammy 1.0",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/75683255,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/75683255,0v1\/fit\/160x160.jpg"
                },
                "status": 0
            }, {
                "type": "song",
                "rankings": [{
                    "at": 1591322400,
                    "rank": 6
                }, {
                    "at": 1591326000,
                    "rank": 3
                }, {
                    "at": 1591329600,
                    "rank": 5
                }, {
                    "at": 1591333200,
                    "rank": 6
                }, {
                    "at": 1591336800,
                    "rank": 11
                }, {
                    "at": 1591340400,
                    "rank": 3
                }, {
                    "at": 1591344000,
                    "rank": 7
                }, {
                    "at": 1591347600,
                    "rank": 9
                }, {
                    "at": 1591351200,
                    "rank": 7
                }, {
                    "at": 1591354800,
                    "rank": 11
                }, {
                    "at": 1591358400,
                    "rank": 4
                }, {
                    "at": 1591362000,
                    "rank": 5
                }, {
                    "at": 1591365600,
                    "rank": 6
                }, {
                    "at": 1591369200,
                    "rank": 6
                }, {
                    "at": 1591372800,
                    "rank": 6
                }, {
                    "at": 1591376400,
                    "rank": 7
                }, {
                    "at": 1591380000,
                    "rank": 6
                }, {
                    "at": 1591383600,
                    "rank": 6
                }, {
                    "at": 1591387200,
                    "rank": 9
                }, {
                    "at": 1591390800,
                    "rank": 7
                }, {
                    "at": 1591394400,
                    "rank": 6
                }, {
                    "at": 1591398000,
                    "rank": 5
                }, {
                    "at": 1591401600,
                    "rank": 4
                }, {
                    "at": 1591405200,
                    "rank": 4
                }],
                "is_auth": true,
                "song_name": "\u73a9\u5bb6 (TVBS\u300a\u98df\u5c1a\u73a9\u5bb6\u71b1\u884048\u5c0f\u6642\u300b\u7247\u5c3e\u66f2)",
                "artist_name": "\u5433\u5353\u6e90 (Julia Wu), \u5510\u4ef2\u5f63 (ChrisFlow)",
                "album_name": "\u73a9\u5bb6 (TVBS\u300a\u98df\u5c1a\u73a9\u5bb6\u71b1\u884048\u5c0f\u6642\u300b\u7247\u5c3e\u66f2)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/76299085,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/76299085,0v1\/fit\/160x160.jpg"
                },
                "status": 0
            }, {
                "type": "song",
                "rankings": [{
                    "at": 1591322400,
                    "rank": 8
                }, {
                    "at": 1591326000,
                    "rank": 9
                }, {
                    "at": 1591329600,
                    "rank": 8
                }, {
                    "at": 1591333200,
                    "rank": 7
                }, {
                    "at": 1591336800,
                    "rank": 7
                }, {
                    "at": 1591340400,
                    "rank": 8
                }, {
                    "at": 1591344000,
                    "rank": 8
                }, {
                    "at": 1591347600,
                    "rank": 8
                }, {
                    "at": 1591351200,
                    "rank": 6
                }, {
                    "at": 1591354800,
                    "rank": 14
                }, {
                    "at": 1591358400,
                    "rank": 7
                }, {
                    "at": 1591362000,
                    "rank": 8
                }, {
                    "at": 1591365600,
                    "rank": 8
                }, {
                    "at": 1591369200,
                    "rank": 7
                }, {
                    "at": 1591372800,
                    "rank": 7
                }, {
                    "at": 1591376400,
                    "rank": 6
                }, {
                    "at": 1591380000,
                    "rank": 5
                }, {
                    "at": 1591383600,
                    "rank": 5
                }, {
                    "at": 1591387200,
                    "rank": 5
                }, {
                    "at": 1591390800,
                    "rank": 5
                }, {
                    "at": 1591394400,
                    "rank": 4
                }, {
                    "at": 1591398000,
                    "rank": 4
                }, {
                    "at": 1591401600,
                    "rank": 5
                }, {
                    "at": 1591405200,
                    "rank": 5
                }],
                "is_auth": true,
                "song_name": "\u9006\u5149",
                "artist_name": "\u9673\u82b3\u8a9e",
                "album_name": "\u9006\u5149",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/76109899,1v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/76109899,1v1\/fit\/160x160.jpg"
                },
                "status": 0
            }]
        }
    };
    var dailyChartRankings = null;
    var dailyChart = {
        "newrelease_297": {
            "category": {
                "id": 297,
                "name": "\u83ef\u8a9e"
            },
            "type": "newrelease",
            "data": [{
                "rankings": {
                    "this_period": 1,
                    "last_period": 1
                },
                "type": "song",
                "song_id": "KlogqvKoBZNAA5P2Y2",
                "is_auth": true,
                "song_name": "\u592a\u967d (When The Cloudless Day Comes)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u592a\u967d",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/vUO00Dl.1DLMApzfMApzf0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/on7j8Yf-Vsd6D0F4Xy2s009H-index.html",
                "is_artist_va": false,
                "release_date": 1590595200,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#1"
            }, {
                "rankings": {
                    "this_period": 2,
                    "last_period": 2
                },
                "type": "song",
                "song_id": "OmUwA3W9TsIBdvMC2y",
                "is_auth": true,
                "song_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/LOB0069SlH5BJl9pBJl9p0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/4KOaMXS6Gp-uA0F4OTbB009H-index.html",
                "is_artist_va": false,
                "release_date": 1589385600,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#2"
            }, {
                "rankings": {
                    "this_period": 3,
                    "last_period": 3
                },
                "type": "song",
                "song_id": "5aa4ZSCjyKyO5FMvCi",
                "is_auth": true,
                "song_name": "\u4e0d\u5728\u4e4e",
                "artist_name": "\u5f35\u8a9e\u5665 (Sammy)",
                "album_name": "Sammy 1.0",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/75683255,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/75683255,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/RD800A2a65LGrWQfGrWQf0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/b9BvoN.WifNv3R0F0Me1X08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/x7rgd8d.hqim70F4WhMr009H-index.html",
                "is_artist_va": false,
                "release_date": 1590076800,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#3"
            }, {
                "rankings": {
                    "this_period": 4,
                    "last_period": 5
                },
                "type": "song",
                "song_id": "DZ6TMP5qM7EspS_DBO",
                "is_auth": true,
                "song_name": "\u73a9\u5bb6 (TVBS\u300a\u98df\u5c1a\u73a9\u5bb6\u71b1\u884048\u5c0f\u6642\u300b\u7247\u5c3e\u66f2)",
                "artist_name": "\u5433\u5353\u6e90 (Julia Wu), \u5510\u4ef2\u5f63 (ChrisFlow)",
                "album_name": "\u73a9\u5bb6 (TVBS\u300a\u98df\u5c1a\u73a9\u5bb6\u71b1\u884048\u5c0f\u6642\u300b\u7247\u5c3e\u66f2)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/76299085,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/76299085,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/5cu00QK06HLdNRArdNRAr0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/KFTwfNb8TCvto80F0BFyq08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/NthwYwgfNh7QU0F4Z3hD009H-index.html",
                "is_artist_va": false,
                "release_date": 1590681600,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#4"
            }, {
                "rankings": {
                    "this_period": 5,
                    "last_period": 7
                },
                "type": "song",
                "song_id": "4n90DF8Y3TYuryo5vK",
                "is_auth": true,
                "song_name": "\u524d\u4efb",
                "artist_name": "\u91c7\u5b50 & \u9ec3\u5049\u6649",
                "album_name": "\u524d\u4efb",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/77040924,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/77040924,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/UN8009m..XLGHI3VGHI3V0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/q9Cc-tl7wg.jn0F014frW08L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/H4qeratABY1DJ0F4.soS009H-index.html",
                "is_artist_va": false,
                "release_date": 1591027200,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#5"
            }, {
                "rankings": {
                    "this_period": 6,
                    "last_period": 6
                },
                "type": "song",
                "song_id": "KlchioKoBZNACbi_yE",
                "is_auth": true,
                "song_name": "\u9006\u5149",
                "artist_name": "\u9673\u82b3\u8a9e",
                "album_name": "\u9006\u5149",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/76109899,1v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/76109899,1v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/AMY00434MDL69Mt369Mt30XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/abiJ3Ywhnw-2J-P0F0mKD08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/.7ibVlm0YE4WF0F4YLXB009H-index.html",
                "is_artist_va": false,
                "release_date": 1590076800,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#6"
            }, {
                "rankings": {
                    "this_period": 7,
                    "last_period": 4
                },
                "type": "song",
                "song_id": "GrPS8JfCk9ZkybH-gx",
                "is_auth": true,
                "song_name": "\u4e0d\u6562\u807d\u7684\u6b4c",
                "artist_name": "\u674e\u5343\u90a3",
                "album_name": "\u4e0d\u6562\u807d\u7684\u6b4c",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73398282,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73398282,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/LVt00E2-bD5Mok7lMok7l0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/-pdl6CTxHNvLGUr0F0FDv08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/d43vLgPW92JCA0F4NzWA009H-index.html",
                "is_artist_va": false,
                "release_date": 1588694400,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#7"
            }, {
                "rankings": {
                    "this_period": 8,
                    "last_period": 8
                },
                "type": "song",
                "song_id": "SsU0SVS_DXYxbLBwEa",
                "is_auth": true,
                "song_name": "Hello",
                "artist_name": "\u856d\u656c\u9a30 x \u6797\u4fca\u5091",
                "album_name": "Hello",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/76198037,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/76198037,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/1D5008sKGHLEDq5rEDq5r0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/UbmwgKH7IJ3190F01GVO108L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/5NRD.W7faVy5N0F4Yf2L009H-index.html",
                "is_artist_va": false,
                "release_date": 1590422400,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#8"
            }, {
                "rankings": {
                    "this_period": 9,
                    "last_period": 11
                },
                "type": "song",
                "song_id": "4p8korPBiO7N4EMMag",
                "is_auth": true,
                "song_name": "\u665a\u5b89\u6b4c",
                "artist_name": "\u9673\u5609\u6a3a (Ella Chen)",
                "album_name": "\u665a\u5b89\u6b4c",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/75679140,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/75679140,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/l5m00DG.a5LKup6BKup6B0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/H.lmWNZBqiM0rQE0F0laq08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/.cXODCT6Su-pr0F4WgM-009H-index.html",
                "is_artist_va": false,
                "release_date": 1589731200,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#9"
            }, {
                "rankings": {
                    "this_period": 10,
                    "last_period": 9
                },
                "type": "song",
                "song_id": "8pP61tTb2c2ek8iHmj",
                "is_auth": true,
                "song_name": "\u5929\u4f7f (Angel)",
                "artist_name": "\u4e01\u5679 (Della)",
                "album_name": "\u5929\u4f7f (Angel)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/75803572,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/75803572,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/ZQG009WWm9LFYzjzFYzjz0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/PPtaSPRyPj9atzv0F06Ga08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/p-pQ1UPBCdRhR0F4XAio009H-index.html",
                "is_artist_va": false,
                "release_date": 1589990400,
                "status": 0,
                "path": "\/charts\/daily\/newrelease?terr=tw&lang=tc&cate=297#10"
            }],
            "chart_date": 1591286400
        },
        "song_297": {
            "category": {
                "id": 297,
                "name": "\u83ef\u8a9e"
            },
            "type": "song",
            "data": [{
                "rankings": {
                    "this_period": 1,
                    "last_period": 1
                },
                "type": "song",
                "song_id": "KlogqvKoBZNAA5P2Y2",
                "is_auth": true,
                "song_name": "\u592a\u967d (When The Cloudless Day Comes)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u592a\u967d",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/vUO00Dl.1DLMApzfMApzf0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/on7j8Yf-Vsd6D0F4Xy2s009H-index.html",
                "is_artist_va": false,
                "release_date": 1590595200,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#1"
            }, {
                "rankings": {
                    "this_period": 2,
                    "last_period": 3
                },
                "type": "song",
                "song_id": "WkcykZCZPowcnEvZwF",
                "is_auth": true,
                "song_name": "\u8207\u6211\u7121\u95dc",
                "artist_name": "\u963f\u5197",
                "album_name": "\u8207\u6211\u7121\u95dc",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/71433223,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/71433223,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/kmr005o1KCpANxizANxiz0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Z-CW3FTlLSdJA0F016wkV08L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/HWkNWQ5lbRQoE0F4GVk7009H-index.html",
                "is_artist_va": false,
                "release_date": 1580486400,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#2"
            }, {
                "rankings": {
                    "this_period": 3,
                    "last_period": 2
                },
                "type": "song",
                "song_id": "OmUwA3W9TsIBdvMC2y",
                "is_auth": true,
                "song_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/LOB0069SlH5BJl9pBJl9p0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/4KOaMXS6Gp-uA0F4OTbB009H-index.html",
                "is_artist_va": false,
                "release_date": 1589385600,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#3"
            }, {
                "rankings": {
                    "this_period": 4,
                    "last_period": 4
                },
                "type": "song",
                "song_id": "OmlBDxZtTsIBeCK2Qj",
                "is_auth": true,
                "song_name": "\u60f3\u898b\u4f60\u60f3\u898b\u4f60\u60f3\u898b\u4f60 (Miss You 3000) - \u96fb\u8996\u5287<\u60f3\u898b\u4f60>\u7247\u5c3e\u66f2",
                "artist_name": "\u516b\u4e09\u592d (831)",
                "album_name": "\u60f3\u898b\u4f60\u60f3\u898b\u4f60\u60f3\u898b\u4f60 (Miss You 3000) - \u96fb\u8996\u5287<\u60f3\u898b\u4f60>\u7247\u5c3e\u66f2",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/65394915,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/65394915,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/qYv008Z4MUKDJ7ruDJ7ru0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/VGnW4JaQ5R7gOqe0F06GK08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/CpBjo9qr8SaT70F3tTZZ009H-index.html",
                "is_artist_va": false,
                "release_date": 1573401600,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#4"
            }, {
                "rankings": {
                    "this_period": 5,
                    "last_period": 5
                },
                "type": "song",
                "song_id": "GrhBBkfCk9Zky2GpcJ",
                "is_auth": true,
                "song_name": "CHANGE",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "CHANGE",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/72113697,0v2\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/72113697,0v2\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/by.00WOSmSpknDuzknDuz0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/5SVGhNfrMJdEJ0F4J5sX009H-index.html",
                "is_artist_va": false,
                "release_date": 1588176000,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#5"
            }, {
                "rankings": {
                    "this_period": 6,
                    "last_period": 6
                },
                "type": "song",
                "song_id": "-o1BBayue7WVJ3Xw7-",
                "is_auth": true,
                "song_name": "\u5c11\u5e74",
                "artist_name": "\u5922\u7136",
                "album_name": "\u5c11\u5e74",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/71256101,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/71256101,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/0Wh009q4m8pGTN6BGTN6B0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/eFvtivwr8piv.O0F08Bd408K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/8qLnEs0iIB2rp0F4FoW.009H-index.html",
                "is_artist_va": false,
                "release_date": 1584633600,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#6"
            }, {
                "rankings": {
                    "this_period": 7,
                    "last_period": 8
                },
                "type": "song",
                "song_id": "KmdyYhGoR1boOopIhE",
                "is_auth": true,
                "song_name": "\u4f60\u7684\u7b54\u6848",
                "artist_name": "\u963f\u5197",
                "album_name": "\u4f60\u7684\u7b54\u6848",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/65424501,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/65424501,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/8lW00D41rUKKWZNYKWZNY0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Z-CW3FTlLSdJA0F016wkV08L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/epleJKmhrz2330F3t-lp009H-index.html",
                "is_artist_va": false,
                "release_date": 1572969600,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#7"
            }, {
                "rankings": {
                    "this_period": 8,
                    "last_period": 11
                },
                "type": "song",
                "song_id": "9ZO4ilnOs_ZpEXUk26",
                "is_auth": true,
                "song_name": "\u56c2\u5f35",
                "artist_name": "en",
                "album_name": "\u56c2\u5f35",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/60491085,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/60491085,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/-bE00KN-WDoUrhPqUrhPq0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/HYbxcIipQLrT70F012sHy08L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/3050GdDPuI0lC0F3akLD009H-index.html",
                "is_artist_va": false,
                "release_date": 1565798400,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#8"
            }, {
                "rankings": {
                    "this_period": 9,
                    "last_period": 9
                },
                "type": "song",
                "song_id": "4pOIwuERiO7N6Cfi3r",
                "is_auth": true,
                "song_name": "\u592a\u967d",
                "artist_name": "\u90b1\u632f\u54f2 (Pika)",
                "album_name": "\u592a\u967d",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/22757130,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/22757130,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/A8E00.k.0Cmtrpygtrpyg0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/4JWGSusd1Sd32R0F0TPjM08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/FkqYx-BDuOYfZ0F1MnwA009H-index.html",
                "is_artist_va": false,
                "release_date": 1489593600,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#9"
            }, {
                "rankings": {
                    "this_period": 10,
                    "last_period": 12
                },
                "type": "song",
                "song_id": "4lExlZh69Z5EbNOzx7",
                "is_auth": true,
                "song_name": "Without You",
                "artist_name": "\u9ad8\u723e\u5ba3 OSN",
                "album_name": "Without You",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/51496821,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/51496821,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/WZW00W-.W0olAyGYlAyGY0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Xg25WCFVmBlN4.0F0kXGe08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/tT2LAZtmkW4H10F34STp009H-index.html",
                "is_artist_va": false,
                "release_date": 1554048000,
                "status": 0,
                "path": "\/charts\/daily\/song?terr=tw&lang=tc&cate=297#10"
            }],
            "chart_date": 1591286400
        }
    };
    var weeklyChart = {
        "newrelease_297": {
            "category": {
                "id": 297,
                "name": "\u83ef\u8a9e"
            },
            "type": "newrelease",
            "data": [{
                "rankings": {
                    "this_period": 1,
                    "last_period": 19
                },
                "type": "song",
                "song_id": "KlogqvKoBZNAA5P2Y2",
                "is_auth": true,
                "song_name": "\u592a\u967d (When The Cloudless Day Comes)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u592a\u967d",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/vUO00Dl.1DLMApzfMApzf0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/on7j8Yf-Vsd6D0F4Xy2s009H-index.html",
                "is_artist_va": false,
                "release_date": 1590595200,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#1"
            }, {
                "rankings": {
                    "this_period": 2,
                    "last_period": 1
                },
                "type": "song",
                "song_id": "OmUwA3W9TsIBdvMC2y",
                "is_auth": true,
                "song_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/LOB0069SlH5BJl9pBJl9p0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/4KOaMXS6Gp-uA0F4OTbB009H-index.html",
                "is_artist_va": false,
                "release_date": 1589385600,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#2"
            }, {
                "rankings": {
                    "this_period": 3,
                    "last_period": 4
                },
                "type": "song",
                "song_id": "GrPS8JfCk9ZkybH-gx",
                "is_auth": true,
                "song_name": "\u4e0d\u6562\u807d\u7684\u6b4c",
                "artist_name": "\u674e\u5343\u90a3",
                "album_name": "\u4e0d\u6562\u807d\u7684\u6b4c",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73398282,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73398282,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/LVt00E2-bD5Mok7lMok7l0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/-pdl6CTxHNvLGUr0F0FDv08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/d43vLgPW92JCA0F4NzWA009H-index.html",
                "is_artist_va": false,
                "release_date": 1588694400,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#3"
            }, {
                "rankings": {
                    "this_period": 4,
                    "last_period": 9
                },
                "type": "song",
                "song_id": "5aa4ZSCjyKyO5FMvCi",
                "is_auth": true,
                "song_name": "\u4e0d\u5728\u4e4e",
                "artist_name": "\u5f35\u8a9e\u5665 (Sammy)",
                "album_name": "Sammy 1.0",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/75683255,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/75683255,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/RD800A2a65LGrWQfGrWQf0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/b9BvoN.WifNv3R0F0Me1X08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/x7rgd8d.hqim70F4WhMr009H-index.html",
                "is_artist_va": false,
                "release_date": 1590076800,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#4"
            }, {
                "rankings": {
                    "this_period": 5,
                    "last_period": 5
                },
                "type": "song",
                "song_id": "KlchioKoBZNACbi_yE",
                "is_auth": true,
                "song_name": "\u9006\u5149",
                "artist_name": "\u9673\u82b3\u8a9e",
                "album_name": "\u9006\u5149",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/76109899,1v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/76109899,1v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/AMY00434MDL69Mt369Mt30XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/abiJ3Ywhnw-2J-P0F0mKD08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/.7ibVlm0YE4WF0F4YLXB009H-index.html",
                "is_artist_va": false,
                "release_date": 1590076800,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#5"
            }, {
                "rankings": {
                    "this_period": 6,
                    "last_period": null
                },
                "type": "song",
                "song_id": "DZ6TMP5qM7EspS_DBO",
                "is_auth": true,
                "song_name": "\u73a9\u5bb6 (TVBS\u300a\u98df\u5c1a\u73a9\u5bb6\u71b1\u884048\u5c0f\u6642\u300b\u7247\u5c3e\u66f2)",
                "artist_name": "\u5433\u5353\u6e90 (Julia Wu), \u5510\u4ef2\u5f63 (ChrisFlow)",
                "album_name": "\u73a9\u5bb6 (TVBS\u300a\u98df\u5c1a\u73a9\u5bb6\u71b1\u884048\u5c0f\u6642\u300b\u7247\u5c3e\u66f2)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/76299085,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/76299085,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/5cu00QK06HLdNRArdNRAr0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/KFTwfNb8TCvto80F0BFyq08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/NthwYwgfNh7QU0F4Z3hD009H-index.html",
                "is_artist_va": false,
                "release_date": 1590681600,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#6"
            }, {
                "rankings": {
                    "this_period": 7,
                    "last_period": 29
                },
                "type": "song",
                "song_id": "SsU0SVS_DXYxbLBwEa",
                "is_auth": true,
                "song_name": "Hello",
                "artist_name": "\u856d\u656c\u9a30 x \u6797\u4fca\u5091",
                "album_name": "Hello",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/76198037,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/76198037,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/1D5008sKGHLEDq5rEDq5r0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/UbmwgKH7IJ3190F01GVO108L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/5NRD.W7faVy5N0F4Yf2L009H-index.html",
                "is_artist_va": false,
                "release_date": 1590422400,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#7"
            }, {
                "rankings": {
                    "this_period": 8,
                    "last_period": 6
                },
                "type": "song",
                "song_id": "4p8korPBiO7N4EMMag",
                "is_auth": true,
                "song_name": "\u665a\u5b89\u6b4c",
                "artist_name": "\u9673\u5609\u6a3a (Ella Chen)",
                "album_name": "\u665a\u5b89\u6b4c",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/75679140,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/75679140,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/l5m00DG.a5LKup6BKup6B0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/H.lmWNZBqiM0rQE0F0laq08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/.cXODCT6Su-pr0F4WgM-009H-index.html",
                "is_artist_va": false,
                "release_date": 1589731200,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#8"
            }, {
                "rankings": {
                    "this_period": 9,
                    "last_period": 11
                },
                "type": "song",
                "song_id": "1XOywqR19YZDwy18dQ",
                "is_auth": true,
                "song_name": "\u611a\u8005 (The Fool)",
                "artist_name": "\u7406\u60f3\u6df7\u86cb (Bestards)",
                "album_name": "\u611a\u8005 (The Fool)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/75791160,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/75791160,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/c1R00TrDX9LiLPTbiLPTb0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/6DVtg4eff6.q6B0F0hNeh08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/zLumS8nMo9H8s0F4X7gs009H-index.html",
                "is_artist_va": false,
                "release_date": 1589904000,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#9"
            }, {
                "rankings": {
                    "this_period": 10,
                    "last_period": 15
                },
                "type": "song",
                "song_id": "8pP61tTb2c2ek8iHmj",
                "is_auth": true,
                "song_name": "\u5929\u4f7f (Angel)",
                "artist_name": "\u4e01\u5679 (Della)",
                "album_name": "\u5929\u4f7f (Angel)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/75803572,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/75803572,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/ZQG009WWm9LFYzjzFYzjz0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/PPtaSPRyPj9atzv0F06Ga08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/p-pQ1UPBCdRhR0F4XAio009H-index.html",
                "is_artist_va": false,
                "release_date": 1589990400,
                "status": 0,
                "path": "\/charts\/weekly\/newrelease?terr=tw&lang=tc&cate=297#10"
            }],
            "chart_date": 1591200000
        },
        "song_297": {
            "category": {
                "id": 297,
                "name": "\u83ef\u8a9e"
            },
            "type": "song",
            "data": [{
                "rankings": {
                    "this_period": 1,
                    "last_period": null
                },
                "type": "song",
                "song_id": "KlogqvKoBZNAA5P2Y2",
                "is_auth": true,
                "song_name": "\u592a\u967d (When The Cloudless Day Comes)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u592a\u967d",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/vUO00Dl.1DLMApzfMApzf0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/on7j8Yf-Vsd6D0F4Xy2s009H-index.html",
                "is_artist_va": false,
                "release_date": 1590595200,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#1"
            }, {
                "rankings": {
                    "this_period": 2,
                    "last_period": 1
                },
                "type": "song",
                "song_id": "OmUwA3W9TsIBdvMC2y",
                "is_auth": true,
                "song_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/LOB0069SlH5BJl9pBJl9p0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/4KOaMXS6Gp-uA0F4OTbB009H-index.html",
                "is_artist_va": false,
                "release_date": 1589385600,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#2"
            }, {
                "rankings": {
                    "this_period": 3,
                    "last_period": 4
                },
                "type": "song",
                "song_id": "OmlBDxZtTsIBeCK2Qj",
                "is_auth": true,
                "song_name": "\u60f3\u898b\u4f60\u60f3\u898b\u4f60\u60f3\u898b\u4f60 (Miss You 3000) - \u96fb\u8996\u5287<\u60f3\u898b\u4f60>\u7247\u5c3e\u66f2",
                "artist_name": "\u516b\u4e09\u592d (831)",
                "album_name": "\u60f3\u898b\u4f60\u60f3\u898b\u4f60\u60f3\u898b\u4f60 (Miss You 3000) - \u96fb\u8996\u5287<\u60f3\u898b\u4f60>\u7247\u5c3e\u66f2",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/65394915,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/65394915,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/qYv008Z4MUKDJ7ruDJ7ru0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/VGnW4JaQ5R7gOqe0F06GK08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/CpBjo9qr8SaT70F3tTZZ009H-index.html",
                "is_artist_va": false,
                "release_date": 1573401600,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#3"
            }, {
                "rankings": {
                    "this_period": 4,
                    "last_period": 3
                },
                "type": "song",
                "song_id": "WkcykZCZPowcnEvZwF",
                "is_auth": true,
                "song_name": "\u8207\u6211\u7121\u95dc",
                "artist_name": "\u963f\u5197",
                "album_name": "\u8207\u6211\u7121\u95dc",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/71433223,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/71433223,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/kmr005o1KCpANxizANxiz0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Z-CW3FTlLSdJA0F016wkV08L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/HWkNWQ5lbRQoE0F4GVk7009H-index.html",
                "is_artist_va": false,
                "release_date": 1580486400,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#4"
            }, {
                "rankings": {
                    "this_period": 5,
                    "last_period": 2
                },
                "type": "song",
                "song_id": "GrhBBkfCk9Zky2GpcJ",
                "is_auth": true,
                "song_name": "CHANGE",
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "CHANGE",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/72113697,0v2\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/72113697,0v2\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/by.00WOSmSpknDuzknDuz0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/5SVGhNfrMJdEJ0F4J5sX009H-index.html",
                "is_artist_va": false,
                "release_date": 1588176000,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#5"
            }, {
                "rankings": {
                    "this_period": 6,
                    "last_period": 6
                },
                "type": "song",
                "song_id": "-o1BBayue7WVJ3Xw7-",
                "is_auth": true,
                "song_name": "\u5c11\u5e74",
                "artist_name": "\u5922\u7136",
                "album_name": "\u5c11\u5e74",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/71256101,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/71256101,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/0Wh009q4m8pGTN6BGTN6B0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/eFvtivwr8piv.O0F08Bd408K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/8qLnEs0iIB2rp0F4FoW.009H-index.html",
                "is_artist_va": false,
                "release_date": 1584633600,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#6"
            }, {
                "rankings": {
                    "this_period": 7,
                    "last_period": 5
                },
                "type": "song",
                "song_id": "KmdyYhGoR1boOopIhE",
                "is_auth": true,
                "song_name": "\u4f60\u7684\u7b54\u6848",
                "artist_name": "\u963f\u5197",
                "album_name": "\u4f60\u7684\u7b54\u6848",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/65424501,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/65424501,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/8lW00D41rUKKWZNYKWZNY0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Z-CW3FTlLSdJA0F016wkV08L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/epleJKmhrz2330F3t-lp009H-index.html",
                "is_artist_va": false,
                "release_date": 1572969600,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#7"
            }, {
                "rankings": {
                    "this_period": 8,
                    "last_period": 11
                },
                "type": "song",
                "song_id": "GrPS8JfCk9ZkybH-gx",
                "is_auth": true,
                "song_name": "\u4e0d\u6562\u807d\u7684\u6b4c",
                "artist_name": "\u674e\u5343\u90a3",
                "album_name": "\u4e0d\u6562\u807d\u7684\u6b4c",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73398282,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73398282,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/LVt00E2-bD5Mok7lMok7l0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/-pdl6CTxHNvLGUr0F0FDv08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/d43vLgPW92JCA0F4NzWA009H-index.html",
                "is_artist_va": false,
                "release_date": 1588694400,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#8"
            }, {
                "rankings": {
                    "this_period": 9,
                    "last_period": 44
                },
                "type": "song",
                "song_id": "5aa4ZSCjyKyO5FMvCi",
                "is_auth": true,
                "song_name": "\u4e0d\u5728\u4e4e",
                "artist_name": "\u5f35\u8a9e\u5665 (Sammy)",
                "album_name": "Sammy 1.0",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/tw\/75683255,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/tw\/75683255,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/RD800A2a65LGrWQfGrWQf0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/b9BvoN.WifNv3R0F0Me1X08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/x7rgd8d.hqim70F4WhMr009H-index.html",
                "is_artist_va": false,
                "release_date": 1590076800,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#9"
            }, {
                "rankings": {
                    "this_period": 10,
                    "last_period": 8
                },
                "type": "song",
                "song_id": "4pOIwuERiO7N6Cfi3r",
                "is_auth": true,
                "song_name": "\u592a\u967d",
                "artist_name": "\u90b1\u632f\u54f2 (Pika)",
                "album_name": "\u592a\u967d",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/22757130,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/22757130,0v1\/fit\/160x160.jpg"
                },
                "song_url": "https:\/\/www.kkbox.com\/tw\/tc\/song\/A8E00.k.0Cmtrpygtrpyg0XL-index.html",
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/4JWGSusd1Sd32R0F0TPjM08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/FkqYx-BDuOYfZ0F1MnwA009H-index.html",
                "is_artist_va": false,
                "release_date": 1489593600,
                "status": 0,
                "path": "\/charts\/weekly\/song?terr=tw&lang=tc&cate=297#10"
            }],
            "chart_date": 1591200000
        },
        "album_297": {
            "category": {
                "id": 297,
                "name": "\u83ef\u8a9e"
            },
            "type": "album",
            "data": [{
                "rankings": {
                    "this_period": 1,
                    "last_period": 1
                },
                "type": "album",
                "album_id": "TXF63J8oOtk90xeoIj",
                "is_auth": true,
                "artist_name": "G.E.M.\u9127\u7d2b\u68cb",
                "album_name": "\u6469\u5929\u52d5\u7269\u5712 (City Zoo)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/67268438,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/67268438,0v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/b-xdozjViQx7sEW0F0BA608J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/QmIPyWTtbDWJR0F40axM009H-index.html",
                "is_artist_va": false,
                "release_date": 1577289600,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#1"
            }, {
                "rankings": {
                    "this_period": 2,
                    "last_period": null
                },
                "type": "album",
                "album_id": "8slApN7TI8uipgk52f",
                "is_auth": true,
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u592a\u967d",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/76013752,0v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/on7j8Yf-Vsd6D0F4Xy2s009H-index.html",
                "is_artist_va": false,
                "release_date": 1590595200,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#2"
            }, {
                "rankings": {
                    "this_period": 3,
                    "last_period": 2
                },
                "type": "album",
                "album_id": "8mom5E01iKnskz8mNM",
                "is_auth": true,
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "\u5979\u6c92\u5728\u770b\u6211 (She Ain\u2019t Watchin\u2019)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/73521611,0v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/4KOaMXS6Gp-uA0F4OTbB009H-index.html",
                "is_artist_va": false,
                "release_date": 1589385600,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#3"
            }, {
                "rankings": {
                    "this_period": 4,
                    "last_period": 5
                },
                "type": "album",
                "album_id": "5_8ndF1qO3eqK0_bia",
                "is_auth": true,
                "artist_name": "\u516b\u4e09\u592d (831)",
                "album_name": "\u60f3\u898b\u4f60\u60f3\u898b\u4f60\u60f3\u898b\u4f60 (Miss You 3000) - \u96fb\u8996\u5287<\u60f3\u898b\u4f60>\u7247\u5c3e\u66f2",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/65394915,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/65394915,0v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/VGnW4JaQ5R7gOqe0F06GK08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/CpBjo9qr8SaT70F3tTZZ009H-index.html",
                "is_artist_va": false,
                "release_date": 1573401600,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#4"
            }, {
                "rankings": {
                    "this_period": 5,
                    "last_period": 4
                },
                "type": "album",
                "album_id": "KnEeif0ZbvUVIyun4_",
                "is_auth": true,
                "artist_name": "\u963f\u5197",
                "album_name": "\u8207\u6211\u7121\u95dc",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/71433223,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/71433223,0v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Z-CW3FTlLSdJA0F016wkV08L-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/HWkNWQ5lbRQoE0F4GVk7009H-index.html",
                "is_artist_va": false,
                "release_date": 1580486400,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#5"
            }, {
                "rankings": {
                    "this_period": 6,
                    "last_period": 6
                },
                "type": "album",
                "album_id": "GorGHisNzZWl-b5pPY",
                "is_auth": true,
                "artist_name": "Eric \u5468\u8208\u54f2",
                "album_name": "\u5c0f\u6642\u5019\u7684\u6211\u5011 (When We Were Young)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/67722838,0v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/67722838,0v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Ya.Ji8Z1iar7mn0F09FvJ08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/m-om-2OzFK7P.0F42LtM009H-index.html",
                "is_artist_va": false,
                "release_date": 1578326400,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#6"
            }, {
                "rankings": {
                    "this_period": 7,
                    "last_period": 3
                },
                "type": "album",
                "album_id": "KlsWd25JBqJm9a4ie2",
                "is_auth": true,
                "artist_name": "\u7626\u5b50E.SO",
                "album_name": "CHANGE",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/72113697,0v2\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/72113697,0v2\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/j.VbPIM2xHj0.00F0JI6N08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/5SVGhNfrMJdEJ0F4J5sX009H-index.html",
                "is_artist_va": false,
                "release_date": 1588176000,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#7"
            }, {
                "rankings": {
                    "this_period": 8,
                    "last_period": 8
                },
                "type": "album",
                "album_id": "XXTXiV5qEjhjBnio6j",
                "is_auth": true,
                "artist_name": "G.E.M.\u9127\u7d2b\u68cb",
                "album_name": "\u65b0\u7684\u5fc3\u8df3",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/5844559,11v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/5844559,11v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/b-xdozjViQx7sEW0F0BA608J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/AP9YkOG1447uZ20FMItF0091-index.html",
                "is_artist_va": false,
                "release_date": 1446739200,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#8"
            }, {
                "rankings": {
                    "this_period": 9,
                    "last_period": 7
                },
                "type": "album",
                "album_id": "OknfDhkqH9M2simtrp",
                "is_auth": true,
                "artist_name": "Eric \u5468\u8208\u54f2",
                "album_name": "\u7d42\u65bc\u4e86\u89e3\u81ea\u7531 (Freedom)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/45771662,1v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/45771662,1v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Ya.Ji8Z1iar7mn0F09FvJ08K-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/pfnb5.q.qKBdo0F2iaiE009H-index.html",
                "is_artist_va": false,
                "release_date": 1547049600,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#9"
            }, {
                "rankings": {
                    "this_period": 10,
                    "last_period": 20
                },
                "type": "album",
                "album_id": "XXgRQh5qEjhjB70Jha",
                "is_auth": true,
                "artist_name": "\u4e94\u6708\u5929 (Mayday)",
                "album_name": "\u81ea\u50b3 (history of Tomorrow)",
                "cover_image": {
                    "normal": "https:\/\/i.kfs.io\/album\/global\/15549059,6v1\/fit\/500x500.jpg",
                    "small": "https:\/\/i.kfs.io\/album\/global\/15549059,6v1\/fit\/160x160.jpg"
                },
                "artist_url": "https:\/\/www.kkbox.com\/tw\/tc\/artist\/Tqyk2VnYD3.Md.I0F01bv08J-index-1.html",
                "album_url": "https:\/\/www.kkbox.com\/tw\/tc\/album\/LkYUjLWHR0ueKJ0FvKA30091-index.html",
                "is_artist_va": false,
                "release_date": 1471622400,
                "status": 0,
                "path": "\/charts\/weekly\/album?terr=tw&lang=tc&cate=297#10"
            }],
            "chart_date": 1591200000
        }
    };
    var youtubePlaylistVideos = [{
        "title": "#\u91d1\u66f230 \uff5cKKBOX\u5c0f\u7de8\u7ff9\u73ed\u804a\u91d1\u66f2\uff1a\u6700\u4f73\u5973\u6b4c\u624b\u7bc7\uff08\u8a18\u5f97\u9ede\u958b\u8aaa\u660e\ud83d\udc47\uff09\uff5cKKBOX\u901f\u7206\u5a1b\u6a02\u661f\u7403",
        "cover_image": "https:\/\/i.ytimg.com\/vi\/16-X1I4VYpE\/maxresdefault.jpg",
        "video_src": "https:\/\/www.youtube.com\/watch?v=16-X1I4VYpE"
    }, {
        "title": "#\u91d1\u66f230 \uff5cKKBOX\u5c0f\u7de8\u7ff9\u73ed\u804a\u91d1\u66f2\uff1a\u6700\u4f73\u7537\u6b4c\u624b\u7bc7\uff08\u5167\u6709\u91d1\u66f2\u734e\u8d08\u7968\u6d3b\u52d5\ud83d\udc47\uff09\uff5cKKBOX\u901f\u7206\u5a1b\u6a02\u661f\u7403",
        "cover_image": "https:\/\/i.ytimg.com\/vi\/VvTFi3ReiQo\/maxresdefault.jpg",
        "video_src": "https:\/\/www.youtube.com\/watch?v=VvTFi3ReiQo"
    }, {
        "title": "#\u91d1\u66f230 \uff5cKKBOX\u5c0f\u7de8\u7ff9\u73ed\u804a\u91d1\u66f2\uff1a\u5e74\u5ea6\u6b4c\u66f2\u7bc7\uff08\u8a18\u5f97\u9ede\u958b\u8aaa\u660e\ud83d\udc47\uff09\uff5cKKBOX\u901f\u7206\u5a1b\u6a02\u661f\u7403",
        "cover_image": "https:\/\/i.ytimg.com\/vi\/t8t_sq78MTw\/maxresdefault.jpg",
        "video_src": "https:\/\/www.youtube.com\/watch?v=t8t_sq78MTw"
    }, {
        "title": "#\u91d1\u66f230 \uff5cKKBOX\u5c0f\u7de8\u804a\u91d1\u66f2\uff1a\u6700\u4f73\u65b0\u4eba\u734e\u5165\u570d\u7bc7\uff08\u5167\u6709\u91d1\u66f2\u734e\u8d08\u7968\u6d3b\u52d5\ud83d\udc47\uff09\uff5cKKBOX\u901f\u7206\u5a1b\u6a02\u661f\u7403",
        "cover_image": "https:\/\/i.ytimg.com\/vi\/zo2PPyjU8eo\/maxresdefault.jpg",
        "video_src": "https:\/\/www.youtube.com\/watch?v=zo2PPyjU8eo"
    }, {
        "title": "\u3010\u901f\u7206\u8001\u53f8\u6a5f\u958b\u639b\u3011\u5c2c\u96fb\u5c0f\u738b\u5b50 OSN \u9ad8\u723e\u5ba3\uff0b\u9109\u6c11\u8001\u5a46 Julia \u5433\u5353\u6e90\u9996\u5ea6\u5408\u9ad4\uff01\u9080\u9ad8\u4e2d\u751f\u5927\u804a\u9752\u6625\u79d8\u53f2\u55e8\u70b8\u897f\u9580\u753a\uff5cKKBOX\u901f\u7206\u7a81\u64ca\u968a\uff08\u5167\u6709\u5f69\u86cb\u9023\u7d50\ud83d\udc47\uff09",
        "cover_image": "https:\/\/i.ytimg.com\/vi\/vzaFIz9XOp4\/maxresdefault.jpg",
        "video_src": "https:\/\/www.youtube.com\/watch?v=vzaFIz9XOp4"
    }];
    var news = [];
    var msg = {
        "hourly_chart": "\u65b0\u6b4c\u5373\u6642\u699c",
        "daily_mix_chart": "\u7d9c\u5408\u65b0\u6b4c\u65e5\u699c",
        "label_time_hourly": "\u6642\u523b",
        "label_time_daily": "\u65e5\u671f",
        "label_ranking": "\u6392\u540d",
        "ranking_graph_updated_at": "\u66f4\u65b0\u6642\u9593\uff1a",
        "view_full_chart": "\u67e5\u770b\u5b8c\u6574\u699c\u55ae",
        "kma_news": "\u98a8\u96f2\u699c\u6700\u65b0\u52d5\u614b",
        "view_more_news": "\u66f4\u591a",
        "music_buzz": "\u97f3\u6a02\u8da8\u52e2",
        "view_more_music_buzz": "\u66f4\u591a",
        "kma": "\u98a8\u96f2\u699c\u5178\u79ae",
        "daily_chart": "\u65e5\u699c",
        "daily_chart_type_newrelease": ":category\u65b0\u6b4c",
        "daily_chart_type_song": ":category\u55ae\u66f2",
        "view_more_daily_chart": "\u67e5\u770b\u5b8c\u6574\u699c\u55ae",
        "daily_chart_updated_at": "\u66f4\u65b0\u6642\u9593\uff1a",
        "videos": "\u7368\u5bb6\u5f71\u97f3",
        "view_more_videos": "\u66f4\u591a",
        "weekly_chart": "\u9031\u699c",
        "weekly_chart_type_newrelease": ":category\u65b0\u6b4c",
        "weekly_chart_type_song": ":category\u55ae\u66f2",
        "weekly_chart_type_album": ":category\u5c08\u8f2f",
        "view_more_weekly_chart": "\u67e5\u770b\u5b8c\u6574\u699c\u55ae",
        "weekly_chart_updated_at": "\u66f4\u65b0\u6642\u9593\uff1a",
        "new_hits": "\u901f\u7206\u65b0\u6b4c",
        "new_hits_chinese": "\u4e2d\u6587",
        "new_hits_mandarin": "\u83ef\u8a9e",
        "new_hits_western": "\u897f\u6d0b",
        "new_hits_korean": "\u97d3\u8a9e",
        "new_hits_japanese": "\u65e5\u8a9e",
        "new_hits_cantonese": "\u7cb5\u8a9e",
        "new_hits_international": "\u897f\u6d0b",
        "new_hits_malay": "\u99ac\u4f86",
        "chart_type_newrelease": "\u65b0\u6b4c",
        "chart_type_song": "\u55ae\u66f2",
        "chart_type_album": "\u5c08\u8f2f",
        "open_in_app": "\u5728 KKBOX \u4e2d\u958b\u555f"
    };
    </script>
    <script src="/charts/assets/pages/home.js?id=114488d0f43ecc8797e7"></script>
</body>

</html>