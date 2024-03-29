<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/SearchResultsPage" lang="en-IN">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta content="/images/branding/googleg/1x/googleg_standard_color_128dp.png" itemprop="image">
    <meta content="origin" name="referrer">
	<!DOCTYPE html>

    <title><?php if(!empty($_GET['search'])){ echo $_GET['search'];}?> - Google Search</title>
    <script src="f_files/cbgapi.loaded_0" nonce="8XnhrYTqYOBvABL6KLUTvA==" async=""></script>
    <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
    (function() {
        window.google = {
            kEI: 'yKLUXqeaC8XC3LUP2rau2A4',
            kEXPI: '31',
            kBL: 'ocLG'
        };
        google.sn = 'web';
        google.kHL = 'en-IN';
    })();
    (function() {
        google.lc = [];
        google.li = 0;
        google.getEI = function(a) {
            for (var c; a && (!a.getAttribute || !(c = a.getAttribute("eid")));) a = a.parentNode;
            return c || google.kEI
        };
        google.getLEI = function(a) {
            for (var c = null; a && (!a.getAttribute || !(c = a.getAttribute("leid")));) a = a.parentNode;
            return c
        };
        google.ml = function() {
            return null
        };
        google.time = function() {
            return Date.now()
        };
        google.log = function(a, c, b, d, g) {
            if (b = google.logUrl(a, c, b, d, g)) {
                a = new Image;
                var e = google.lc,
                    f = google.li;
                e[f] = a;
                a.onerror = a.onload = a.onabort = function() {
                    delete e[f]
                };
                google.vel && google.vel.lu && google.vel.lu(b);
                a.src = b;
                google.li = f + 1
            }
        };
        google.logUrl = function(a, c, b, d, g) {
            var e = "",
                f = google.ls || "";
            b || -1 != c.search("&ei=") || (e = "&ei=" + google.getEI(d), -1 == c.search("&lei=") && (d = google
                .getLEI(d)) && (e += "&lei=" + d));
            d = "";
            !b && google.cshid && -1 == c.search("&cshid=") && "slh" != a && (d = "&cshid=" + google.cshid);
            b = b || "/" + (g || "gen_204") + "?atyp=i&ct=" + a + "&cad=" + c + e + f + "&zx=" + google.time() +
                d;
            /^http:/i.test(b) && "https:" == window.location.protocol && (google.ml(Error("a"), !1, {
                src: b,
                glmm: 1
            }), b = "");
            return b
        };
    }).call(this);
    (function() {
        google.y = {};
        google.x = function(a, b) {
            if (a) var c = a.id;
            else {
                do c = Math.random(); while (google.y[c])
            }
            google.y[c] = [a, b];
            return !1
        };
        google.lm = [];
        google.plm = function(a) {
            google.lm.push.apply(google.lm, a)
        };
        google.lq = [];
        google.load = function(a, b, c) {
            google.lq.push([
                [a], b, c
            ])
        };
        google.loadAll = function(a, b) {
            google.lq.push([a, b])
        };
    }).call(this);
    google.f = {};
    (function() {
        document.documentElement.addEventListener("submit", function(b) {
            var a;
            if (a = b.target) {
                var c = a.getAttribute("data-submitfalse");
                a = "1" == c || "q" == c && !a.elements.q.value ? !0 : !1
            } else a = !1;
            a && (b.preventDefault(), b.stopPropagation())
        }, !0);
        document.documentElement.addEventListener("click", function(b) {
            var a;
            a: {
                for (a = b.target; a && a != document.documentElement; a = a.parentElement)
                    if ("A" == a.tagName) {
                        a = "1" == a.getAttribute("data-noref");
                        break a
                    } a = !1
            }
            a && b.preventDefault()
        }, !0);
    }).call(this);
    (function() {
        google.hs = {
            h: true,
            sie: false
        };
    })();
    var h = "function" == typeof Object.defineProperties ? Object.defineProperty : function(a, b, c) {
            if (a == Array.prototype || a == Object.prototype) return a;
            a[b] = c.value;
            return a
        },
        k = function(a) {
            a = ["object" == typeof globalThis && globalThis, a, "object" == typeof window && window, "object" ==
                typeof self && self, "object" == typeof global && global
            ];
            for (var b = 0; b < a.length; ++b) {
                var c = a[b];
                if (c && c.Math == Math) return c
            }
            throw Error("a");
        },
        l = k(this),
        m = function(a, b) {
            if (b) {
                var c = l;
                a = a.split(".");
                for (var d = 0; d < a.length - 1; d++) {
                    var e = a[d];
                    e in c ||
                        (c[e] = {});
                    c = c[e]
                }
                a = a[a.length - 1];
                d = c[a];
                b = b(d);
                b != d && null != b && h(c, a, {
                    configurable: !0,
                    writable: !0,
                    value: b
                })
            }
        };
    m("String.prototype.startsWith", function(a) {
        return a ? a : function(b, c) {
            if (null == this) throw new TypeError(
                "The 'this' value for String.prototype.startsWith must not be null or undefined");
            if (b instanceof RegExp) throw new TypeError(
                "First argument to String.prototype.startsWith must not be a regular expression");
            var d = this + "";
            b += "";
            var e = d.length,
                g = b.length;
            c = Math.max(0, Math.min(c | 0, d.length));
            for (var f = 0; f < g && c < e;)
                if (d[c++] != b[f++]) return !1;
            return f >= g
        }
    });
    google.arwt = function(a) {
        a.ref = document.getElementById(a.id.substring(a.id.startsWith("vcs") ? 3 : 1)).ref;
        return !0
    };
    (function() {
        var f = this || self,
            h = Date.now || function() {
                return +new Date
            };

        var x = {};
        var aa = function(a, c) {
            if (null === c) return !1;
            if ("contains" in a && 1 == c.nodeType) return a.contains(c);
            if ("compareDocumentPosition" in a) return a == c || !!(a.compareDocumentPosition(c) & 16);
            for (; c && a != c;) c = c.parentNode;
            return c == a
        };
        var ba = function(a, c) {
                return function(d) {
                    d || (d = window.event);
                    return c.call(a, d)
                }
            },
            z = function(a) {
                a = a.target || a.srcElement;
                !a.getAttribute && a.parentNode && (a = a.parentNode);
                return a
            },
            A = "undefined" != typeof navigator && /Macintosh/.test(navigator.userAgent),
            ca = "undefined" != typeof navigator && !/Opera/.test(navigator.userAgent) && /WebKit/.test(navigator
                .userAgent),
            da = {
                A: 1,
                INPUT: 1,
                TEXTAREA: 1,
                SELECT: 1,
                BUTTON: 1
            },
            ea = function() {
                this._mouseEventsPrevented = !0
            },
            F = {
                A: 13,
                BUTTON: 0,
                CHECKBOX: 32,
                COMBOBOX: 13,
                FILE: 0,
                GRIDCELL: 13,
                LINK: 13,
                LISTBOX: 13,
                MENU: 0,
                MENUBAR: 0,
                MENUITEM: 0,
                MENUITEMCHECKBOX: 0,
                MENUITEMRADIO: 0,
                OPTION: 0,
                RADIO: 32,
                RADIOGROUP: 32,
                RESET: 0,
                SUBMIT: 0,
                SWITCH: 32,
                TAB: 0,
                TREE: 13,
                TREEITEM: 13
            },
            G = {
                CHECKBOX: !0,
                FILE: !0,
                OPTION: !0,
                RADIO: !0
            },
            H = {
                COLOR: !0,
                DATE: !0,
                DATETIME: !0,
                "DATETIME-LOCAL": !0,
                EMAIL: !0,
                MONTH: !0,
                NUMBER: !0,
                PASSWORD: !0,
                RANGE: !0,
                SEARCH: !0,
                TEL: !0,
                TEXT: !0,
                TEXTAREA: !0,
                TIME: !0,
                URL: !0,
                WEEK: !0
            },
            fa = {
                A: !0,
                AREA: !0,
                BUTTON: !0,
                DIALOG: !0,
                IMG: !0,
                INPUT: !0,
                LINK: !0,
                MENU: !0,
                OPTGROUP: !0,
                OPTION: !0,
                PROGRESS: !0,
                SELECT: !0,
                TEXTAREA: !0
            };
        var I = function() {
                this.h = this.a = null
            },
            K = function(a, c) {
                var d = J;
                d.a = a;
                d.h = c;
                return d
            };
        I.prototype.g = function() {
            var a = this.a;
            this.a && this.a != this.h ? this.a = this.a.__owner || this.a.parentNode : this.a = null;
            return a
        };
        var L = function() {
            this.i = [];
            this.a = 0;
            this.h = null;
            this.j = !1
        };
        L.prototype.g = function() {
            if (this.j) return J.g();
            if (this.a != this.i.length) {
                var a = this.i[this.a];
                this.a++;
                a != this.h && a && a.__owner && (this.j = !0, K(a.__owner, this.h));
                return a
            }
            return null
        };
        var J = new I,
            M = new L;
        var O = function() {
                this.o = [];
                this.a = [];
                this.g = [];
                this.j = {};
                this.h = null;
                this.i = [];
                N(this, "_custom")
            },
            ha = "undefined" != typeof navigator && /iPhone|iPad|iPod/.test(navigator.userAgent),
            P = String.prototype.trim ? function(a) {
                return a.trim()
            } : function(a) {
                return a.replace(/^\s+/, "").replace(/\s+$/, "")
            },
            ia = /\s*;\s*/,
            ma = function(a, c) {
                return function p(b, g) {
                    g = void 0 === g ? !0 : g;
                    var m = c;
                    if ("_custom" == m) {
                        m = b.detail;
                        if (!m || !m._type) return;
                        m = m._type
                    }
                    if ("click" == m && (A && b.metaKey || !A && b.ctrlKey || 2 == b.which || null == b.which &&
                            4 == b.button || b.shiftKey)) m = "clickmod";
                    else {
                        var l = b.which || b.keyCode;
                        ca && 3 == l && (l = 13);
                        if (13 != l && 32 != l) l = !1;
                        else {
                            var e = z(b),
                                n;
                            (n = "keydown" != b.type || !!(!("getAttribute" in e) || (e.getAttribute("type") ||
                                        e.tagName).toUpperCase() in H || "BUTTON" == e.tagName.toUpperCase() ||
                                    e.type && "FILE" == e.type.toUpperCase() || e.isContentEditable) || b
                                .ctrlKey || b.shiftKey || b.altKey || b.metaKey || (e.getAttribute("type") || e
                                    .tagName).toUpperCase() in G && 32 == l) || ((n = e.tagName in da) || (n = e
                                .getAttributeNode("tabindex"), n = null != n && n.specified), n = !(n && !e
                                .disabled));
                            if (n) l = !1;
                            else {
                                n = (e.getAttribute("role") || e.type || e.tagName).toUpperCase();
                                var q = !(n in F) && 13 == l;
                                e = "INPUT" != e.tagName.toUpperCase() || !!e.type;
                                l = (0 == F[n] % l || q) && e
                            }
                        }
                        l && (m = "clickkey")
                    }
                    e = b.srcElement || b.target;
                    l = Q(m, b, e, "", null);
                    b.path ? (M.i = b.path, M.a = 0, M.h = this, M.j = !1, n = M) : n = K(e, this);
                    for (; q = n.g();) {
                        var k = q;
                        var r = void 0;
                        var u = k;
                        q = m;
                        var t = u.__jsaction;
                        if (!t) {
                            var y;
                            t = null;
                            "getAttribute" in u && (t = u.getAttribute("jsaction"));
                            if (y = t) {
                                t = x[y];
                                if (!t) {
                                    t = {};
                                    for (var B = y.split(ia), ja = B ? B.length : 0, C = 0; C < ja; C++) {
                                        var w = B[C];
                                        if (w) {
                                            var D = w.indexOf(":"),
                                                R = -1 != D,
                                                ka = R ? P(w.substr(0, D)) : "click";
                                            w = R ? P(w.substr(D + 1)) : w;
                                            t[ka] = w
                                        }
                                    }
                                    x[y] = t
                                }
                                u.__jsaction = t
                            } else t = la, u.__jsaction = t
                        }
                        u = t;
                        "maybe_click" == q && u.click ? (r = q, q = "click") : "clickkey" == q ? q = "click" :
                            "click" != q || u.click || (q = "clickonly");
                        r = {
                            m: r ? r : q,
                            action: u[q] || "",
                            event: null,
                            s: !1
                        };
                        l = Q(r.m, r.event || b, e, r.action || "", k, l.timeStamp);
                        if (r.s || r.action) break
                    }
                    l && "touchend" == l.eventType && (l.event._preventMouseEvents = ea);
                    if (r && r.action) {
                        if (e = "clickkey" == m) e = z(b), e = (e.type ||
                                e.tagName).toUpperCase(), (e = 32 == (b.which || b.keyCode) && "CHECKBOX" !=
                            e) || (e = z(b), n = e.tagName.toUpperCase(), r = (e.getAttribute("role") || "")
                                .toUpperCase(), e = "BUTTON" === n || "BUTTON" === r ? !0 : !(e.tagName
                                    .toUpperCase() in fa) || "A" === n || "SELECT" === n || (e.getAttribute(
                                    "type") || e.tagName).toUpperCase() in G || (e.getAttribute("type") || e
                                    .tagName).toUpperCase() in H ? !1 : !0);
                        e && (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                        if ("mouseenter" == m || "mouseleave" == m)
                            if (e = b.relatedTarget, !("mouseover" == b.type && "mouseenter" ==
                                    m || "mouseout" == b.type && "mouseleave" == m) || e && (e === k || aa(k,
                                    e))) l.action = "", l.actionElement = null;
                            else {
                                m = {};
                                for (var v in b) "function" !== typeof b[v] && "srcElement" !== v &&
                                    "target" !== v && (m[v] = b[v]);
                                m.type = "mouseover" == b.type ? "mouseenter" : "mouseleave";
                                m.target = m.srcElement = k;
                                m.bubbles = !1;
                                l.event = m;
                                l.targetElement = k
                            }
                    } else l.action = "", l.actionElement = null;
                    k = l;
                    a.h && !k.event.a11ysgd && (v = Q(k.eventType, k.event, k.targetElement, k.action, k
                        .actionElement, k.timeStamp), "clickonly" == v.eventType && (v.eventType =
                        "click"), a.h(v, !0));
                    if (k.actionElement) {
                        if (a.h) {
                            if (!k.actionElement || "A" != k.actionElement.tagName || "click" != k.eventType &&
                                "clickmod" != k.eventType || (b.preventDefault ? b.preventDefault() : b
                                    .returnValue = !1), (b = a.h(k)) && g) {
                                p.call(this, b, !1);
                                return
                            }
                        } else {
                            if ((g = f.document) && !g.createEvent && g.createEventObject) try {
                                var E = g.createEventObject(b)
                            } catch (pa) {
                                E = b
                            } else E = b;
                            k.event = E;
                            a.i.push(k)
                        }
                        if ("touchend" == k.event.type && k.event._mouseEventsPrevented) {
                            b = k.event;
                            for (var qa in b);
                            h()
                        }
                    }
                }
            },
            Q = function(a, c, d, b, g, p) {
                return {
                    eventType: a,
                    event: c,
                    targetElement: d,
                    action: b,
                    actionElement: g,
                    timeStamp: p || h()
                }
            },
            la = {},
            na = function(a, c) {
                return function(d) {
                    var b = a,
                        g = c,
                        p = !1;
                    "mouseenter" == b ? b = "mouseover" : "mouseleave" == b && (b = "mouseout");
                    if (d.addEventListener) {
                        if ("focus" == b || "blur" == b || "error" == b || "load" == b) p = !0;
                        d.addEventListener(b, g, p)
                    } else d.attachEvent && ("focus" == b ? b = "focusin" : "blur" == b && (b = "focusout"), g =
                        ba(d, g), d.attachEvent("on" + b, g));
                    return {
                        m: b,
                        l: g,
                        capture: p
                    }
                }
            },
            N = function(a, c) {
                if (!a.j.hasOwnProperty(c)) {
                    var d = ma(a, c),
                        b = na(c, d);
                    a.j[c] = d;
                    a.o.push(b);
                    for (d = 0; d < a.a.length; ++d) {
                        var g = a.a[d];
                        g.g.push(b.call(null, g.a))
                    }
                    "click" == c && N(a, "keydown")
                }
            };
        O.prototype.l = function(a) {
            return this.j[a]
        };
        var V = function(a, c) {
                var d = new oa(c);
                a: {
                    for (var b = 0; b < a.a.length; b++)
                        if (S(a.a[b], c)) {
                            c = !0;
                            break a
                        } c = !1
                }
                if (c) return a.g.push(d), d;
                T(a, d);
                a.a.push(d);
                U(a);
                return d
            },
            U = function(a) {
                for (var c = a.g.concat(a.a), d = [], b = [], g = 0; g < a.a.length; ++g) {
                    var p = a.a[g];
                    W(p, c) ? (d.push(p), X(p)) : b.push(p)
                }
                for (g = 0; g < a.g.length; ++g) p = a.g[g], W(p, c) ? d.push(p) : (b.push(p), T(a, p));
                a.a = b;
                a.g = d
            },
            T = function(a, c) {
                var d = c.a;
                ha && (d.style.cursor = "pointer");
                for (d = 0; d < a.o.length; ++d) c.g.push(a.o[d].call(null, c.a))
            },
            Y = function(a, c) {
                a.h = c;
                a.i && (0 < a.i.length && c(a.i), a.i = null)
            },
            oa = function(a) {
                this.a = a;
                this.g = []
            },
            S = function(a, c) {
                for (a = a.a; a != c && c.parentNode;) c = c.parentNode;
                return a == c
            },
            W = function(a, c) {
                for (var d = 0; d < c.length; ++d)
                    if (c[d].a != a.a && S(c[d], a.a)) return !0;
                return !1
            },
            X = function(a) {
                for (var c = 0; c < a.g.length; ++c) {
                    var d = a.a,
                        b = a.g[c];
                    d.removeEventListener ? d.removeEventListener(b.m, b.l, b.capture) : d.detachEvent && d
                        .detachEvent("on" + b.m, b.l)
                }
                a.g = []
            };
        var Z = new O;
        V(Z, window.document.documentElement);
        N(Z, "click");
        N(Z, "focus");
        N(Z, "focusin");
        N(Z, "blur");
        N(Z, "focusout");
        N(Z, "error");
        N(Z, "load");
        N(Z, "change");
        N(Z, "dblclick");
        N(Z, "input");
        N(Z, "keyup");
        N(Z, "keydown");
        N(Z, "keypress");
        N(Z, "mousedown");
        N(Z, "mouseenter");
        N(Z, "mouseleave");
        N(Z, "mouseout");
        N(Z, "mouseover");
        N(Z, "mouseup");
        N(Z, "paste");
        N(Z, "touchstart");
        N(Z, "touchend");
        N(Z, "touchcancel");
        N(Z, "speech");
        (function(a) {
            google.jsad = function(c) {
                Y(a, c)
            };
            google.jsaac = function(c) {
                return V(a, c)
            };
            google.jsarc = function(c) {
                X(c);
                for (var d = !1, b = 0; b < a.a.length; ++b)
                    if (a.a[b] === c) {
                        a.a.splice(b, 1);
                        d = !0;
                        break
                    } if (!d)
                    for (d = 0; d < a.g.length; ++d)
                        if (a.g[d] === c) {
                            a.g.splice(d, 1);
                            break
                        } U(a)
            }
        })(Z);
        window.gws_wizbind = function(a) {
            return {
                trigger: function(c) {
                    var d = a.l(c.type);
                    d || (N(a, c.type), d = a.l(c.type));
                    var b = c.target || c.srcElement;
                    d && d.call(b.ownerDocument.documentElement, c)
                },
                bind: function(c) {
                    Y(a, c)
                }
            }
        }(Z);
    }).call(this);
    (function() {
        var b = [];
        google.jsc = {
            xx: b,
            x: function(a) {
                b.push(a)
            },
            mm: [],
            m: function(a) {
                google.jsc.mm.length || (google.jsc.mm = a)
            }
        };
    }).call(this);
    (function() {
        google.c = {
            gl: false,
            inp: false,
            lhc: false,
            slp: false,
            uio: false,
            ust: false
        };
        (function() {
            var e = window.performance;
            var g = function(a, b, c, d) {
                    a.addEventListener ? a.removeEventListener(b, c, d || !1) : a.attachEvent && a.detachEvent(
                        "on" + b, c)
                },
                h = function(a, b, c, d) {
                    a.addEventListener ? a.addEventListener(b, c, d || !1) : a.attachEvent && a.attachEvent(
                        "on" + b, c)
                };
            google.timers = {};
            google.startTick = function(a) {
                google.timers[a] = {
                    t: {
                        start: google.time()
                    },
                    e: {},
                    m: {}
                }
            };
            google.tick = function(a, b, c) {
                google.timers[a] || google.startTick(a);
                c = void 0 !== c ? c : google.time();
                b instanceof Array || (b = [b]);
                for (var d = 0, f; f = b[d++];) google.timers[a].t[f] = c
            };
            google.c.e = function(a, b, c) {
                google.timers[a].e[b] = c
            };
            google.c.b = function(a) {
                var b = google.timers.load.m;
                b[a] && google.ml(Error("a"), !1, {
                    m: a
                });
                b[a] = !0
            };
            google.c.u = function(a) {
                var b = google.timers.load.m;
                if (b[a]) {
                    b[a] = !1;
                    for (a in b)
                        if (b[a]) return;
                    google.csiReport()
                } else google.ml(Error("b"), !1, {
                    m: a
                })
            };
            google.rll = function(a, b, c) {
                var d = function(f) {
                    c(f);
                    g(a, "load", d);
                    g(a, "error", d)
                };
                h(a, "load", d);
                b && h(a, "error", d)
            };
            google.aft = function(a) {
                a.setAttribute("data-iml", google.time())
            };
            google.startTick("load");
            var k = google.timers.load;
            a: {
                var l = k.t;
                if (e) {
                    var m = e.timing;
                    if (m) {
                        var n = m.navigationStart,
                            p = m.responseStart;
                        if (p > n && p <= l.start) {
                            l.start = p;
                            k.wsrt = p - n;
                            break a
                        }
                    }
                    e.now && (k.wsrt = Math.floor(e.now()))
                }
            }
            google.c.b("pr");
            google.c.b("xe");
            if (google.c.gl) {
                var q = function(a) {
                    a && google.aft(a.target)
                };
                h(document.documentElement, "load", q, !0);
                google.c.glu = function() {
                    g(document.documentElement, "load", q, !0)
                }
            };
        }).call(this);
    })();
    </script>
    <style>
		a{
			color:#1a0dab;
		}
    [dir='ltr'],
    [dir='rtl'] {
        unicode-bidi: isolate;
        unicode-bidi: isolate
    }

    bdo[dir='ltr'],
    bdo[dir='rtl'] {
        unicode-bidi: bidi-override;
        unicode-bidi: isolate-override;
        unicode-bidi: isolate-override
    }

    #logocont {
        z-index: 1;
        padding-left: 16px;
        padding-right: 10px;
        margin-top: -2px;
        padding-top: 7px
    }

    #logocont.ddl {
        padding-top: 3px
    }

    .big #logocont {
        padding-left: 16px;
        padding-right: 12px
    }

    #searchform #logocont {
        padding-top: 11px;
        padding-right: 28px;
        padding-left: 30px
    }

    .sbibod {
        background-color: #fff;
        height: 44px;
        vertical-align: top;
        border: 1px solid #dfe1e5;
        border-radius: 8px;
        box-shadow: none;
        transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
    }

    .lst {
        border: 0;
        margin-top: 5px;
        margin-bottom: 0
    }

    .lst:focus {
        outline: none
    }

    #lst-ib {
        color: #000
    }

    .gsfi,
    .lst {
        font: 16px arial, sans-serif;
        line-height: 34px;
        height: 34px !important
    }

    .lst-c {
        overflow: hidden
    }

    #gs_st0 {
        line-height: 44px;
        padding: 0 8px;
        margin-top: -1px;
        position: static
    }

    .srp #gs_st0 {
        padding: 0 2px 0 8px
    }

    .gsfs {
        font: 17px arial, sans-serif
    }

    .lsb {
        background: transparent;
        border: 0;
        font-size: 0;
        height: 30px;
        outline: 0;
        text-align: left;
        width: 100%
    }

    .sbico {
        display: inline-block;
        height: 0px;
        width: 0px;
        cursor: pointer;
        vertical-align: middle;
        color: #4285f4
    }

    .sbico-c {
        background: transparent;
        border: 0;
        float: right;
        height: 44px;
        line-height: 44px;
        margin-top: -1px;
        outline: 0;
        padding-right: 16px;
        position: relative;
        top: -1px
    }

    .hp .sbico-c {
        display: none
    }

    #sblsbb {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        height: 44px;
        margin: 0;
        padding: 0;
    }

    #sbds {
        border: 0;
        margin-left: -1px
    }

    .hp .nojsb,
    .srp .jsb {
        display: none
    }

    #sfopt {
        display: inline-block;
        line-height: normal
    }

    .lsd {
        font-size: 11px;
        position: absolute;
        top: 3px;
        left: 16px
    }

    .tsf {
        background: none
    }

    #sform {
        height: 65px
    }

    #searchform {
        width: 100%
    }

    .minidiv #gb {
        top: 2px
    }

    .minidiv .sfbg {
        background: #fff;
        box-shadow: 0 1px 6px 0 rgba(32, 33, 36, .28);
        height: 72px;
    }

    .minidiv .sbibod {
        height: 32px;
        margin: 10px 0;
        border-radius: 16px
    }

    .minidiv .visible-suggestions {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .minidiv .sbico-c {
        height: 32px;
        line-height: 32px
    }

    .minidiv .sbib_b {
        padding-top: 0
    }

    .minidiv .gsfi {
        font-size: 14px;
        line-height: 32px
    }

    .minidiv .gsfs {
        font-size: 14px
    }

    .minidiv #logo img {
        height: 28px;
        width: 86px
    }

    #searchform.minidiv #logocont {
        padding: 17px 34px 0
    }

    .minidiv li.sbsb_c .sbse {
        padding: 0px 0
    }

    .minidiv .sbdd_a .sbdd_b,
    .minidiv .sbsb_a {
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px
    }

    .minidiv #gs_st0 {
        line-height: 32px !important
    }

    .minidiv .sbdd_a {
        top: 32px !important
    }

    .minidiv .gsri_a {
        background-size: 20px 20px;
        height: 20px;
        width: 16px
    }

    .minidiv .sbico-c .sbico {
        height: 20px;
        width: 20px
    }

    .hp #searchform {
        position: absolute;
        top: 311px
    }

    @media only screen and (max-height:768px) {
        .hp #searchform {
            top: 269px
        }
    }

    .srp #searchform {
        position: absolute;
        top: 20px;
    }

    .sfbg {
        height: 69px;
        left: 0;
        position: absolute;
        width: 100%
    }

    .sfbgg {
        height: 65px
    }

    #cnt {
        padding-top: 20px;
    }
    </style>
    <style id="gstyle">
    body {
        background: #fff;
        color: #000;
        margin: 0
    }

    .link {
        color: #1a0dab !important
    }

    .ts {
        border-collapse: collapse
    }

    .ts td {
        padding: 0
    }

    .g {
        line-height: 1.2;
        text-align: left;
        width: 600px
    }

    .ti {
        display: inline;
        display: inline-table
    }

    #rhs {
        padding-bottom: 15px
    }

    a:link,
    .q:active,
    .q:visited {
        color: #1a0dab
    }

    a:visited {
        color: #609
    }

    .b {
        font-weight: bold
    }

    .s {
        max-width: 48em
    }

    .sl {
        font-size: 82%
    }

    .f,
    .f a:link,
    .m {
        color: #70757a;
        line-height: 1.58
    }

    .c h2 {
        color: #666
    }

    .mslg cite {
        display: none
    }

    .ng {
        color: #dd4b39
    }

    h1,
    ol,
    ul,
    li {
        margin: 0;
        padding: 0
    }

    .g,
    body,
    html,
    input,
    .std,
    h1 {
        font-family: arial, sans-serif
    }

    .g,
    body,
    input,
    .std,
    h1 {
        font-size: 14px
    }

    .c h2,
    h1 {
        font-weight: normal
    }

    h3,
    .med {
        font-size: medium;
        font-weight: normal;
        margin: 0;
        padding: 0
    }

    #res h3,
    #extrares h3 {
        font-size: 20px;
        line-height: 1.3;
    }

    #cnt {
        clear: both
    }

    #res {
        margin: 0 16px
    }

    ol li {
        list-style: none
    }

    .sm li {
        margin: 0
    }

    .gl,
    #foot a,
    .nobr {
        white-space: nowrap
    }

    .sl,
    .r {
        font-weight: normal;
        margin: 0
    }

    .r {
        font-size: medium
    }

    h4.r {
        font-size: small
    }

    .gic {
        position: relative;
        overflow: hidden;
        z-index: 0
    }

    #rhs {
        display: block;
        margin-left: 712px;
        padding-bottom: 10px;
        min-width: 268px
    }

    .mdm #rhs {
        margin-left: 732px
    }

    .big #rhs {
        margin-left: 792px
    }

    #rhs .scrt.rhsvw,
    #rhs table.rhsvw {
        border: 0
    }

    #rhs .rhsvw {
        border: 1px solid #ebebeb;
        padding-left: 17px;
        padding-right: 16px;
        position: relative;
        width: 457px;
        box-sizing: border-box
    }

    #center_col .rhsl4,
    #center_col .rhsl5 {
        display: none
    }

    #rhs.rhstc4 .rhsvw {
        width: 369px
    }

    #rhs.rhstc3 .rhsvw {
        width: 281px
    }

    .rhstc4 .rhsg4,
    .rhstc3 .rhsg4,
    .rhstc3 .rhsg3 {
        background: none !important;
        display: none !important
    }

    .rhstc5 .rhsl5,
    .rhstc5 .rhsl4,
    .rhstc4 .rhsl4 {
        background: none !important;
        display: none !important
    }

    .nrgt {
        margin-left: 22px;
    }

    .mslg .vsc {
        transition: opacity .2s ease;
        margin-top: 2px;
        transition: opacity .2s ease;
        width: 294px;
        border: 1px solid transparent;
        border-radius: 2px;
        border-radius: 2px;
        padding: 3px 0 3px 5px
    }

    .mslg>td {
        padding-right: 6px;
        padding-top: 4px
    }

    .vsc {
        display: inline-block;
        position: relative;
        width: 100%
    }

    #res h3.r {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    em {
        font-weight: bold;
        font-style: normal
    }

    ol,
    ul,
    li {
        border: 0;
        margin: 0;
        padding: 0
    }

    .g {
        margin-top: 0;
        margin-bottom: 28px
    }

    .tsw {
        width: 595px
    }

    #cnt {
        min-width: 833px;
        margin-left: 0
    }

    .mw {
        max-width: 1197px
    }

    .big .mw {
        max-width: 1280px
    }

    .tsf-p {
        padding-left: 180px;
        margin-right: 46px;
        max-width: 739px
    }

    .big .tsf-p {
        margin-right: 322px;
        padding-left: 180px
    }

    .col {
        float: left
    }

    #leftnavc,
    #center_col,
    #rhs {
        position: relative
    }

    #center_col {
        margin-left: 138px;
        margin-right: 264px;
    }

    .big #center_col {
        margin-left: 138px;
    }

    #res {
        border: 0;
        margin: 0;
    }

    a:link,
    .q:active,
    .q:visited {
        cursor: pointer
    }

    .gl a,
    #tsf a,
    a.gl,
    a.fl,
    .bc a,
    .flt,
    a.flt u,
    .blg a,
    #appbar a {
        text-decoration: none
    }

    .gl a:hover,
    #tsf a:hover,
    a.gl:hover,
    a.fl:hover,
    .bc a:hover,
    .flt:hover,
    a.flt:hover u,
    .blg a:hover {
        text-decoration: underline
    }

    #tads a,
    #tadsb a,
    #res a,
    #rhs a,
    #taw a {
        text-decoration: none
    }

    #brs a,
    .nsa,
    .fl,
    #botstuff a,
    .flt:hover u,
    #rhs .gl a {
        text-decoration: none
    }

    #foot .ftl {
        margin-right: 12px
    }

    #foot {
        visibility: hidden
    }

    #fll a,
    #bfl a {
        color: #1a0dab;
        margin: 0 12px;
        text-decoration: none
    }

    body {
        color: #222
    }

    .s {
        color: #4d5156
    }

    .s .st em,
    .st.s.std em {
        color: #5f6368
    }

    .s a:visited em {
        color: #609
    }

    .s a:active em {
        color: #dd4b39
    }

    #tsf {
        width: 833px;
    }

    .big #tsf {
        width: 1109px
    }

    .st {
        line-height: 1.58;
        word-wrap: break-word
    }

    .sbc {
        padding: 0 2px;
        min-width: 30px
    }

    #rcnt {
        margin-top: 0px;
    }

    #appbar,
    .rhscol {
        min-width: 1173px
    }

    #appbar {
        -webkit-box-sizing: border-box;
        width: 100%
    }

    #main {
        width: 100%
    }

    #cnt #center_col,
    #cnt #foot {
        width: 652px
    }

    #center_col {
        clear: both
    }

    #cnt #center_col,
    .mw #center_col {
        margin-left: 180px
    }

    #rso {
        margin-top: 6px
    }

    .mw #rhs {
        margin-left: 892px
    }

    .th {
        border: 1px solid #ebebeb
    }

    .ellip {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }
    </style>
    <style>
    @-webkit-keyframes qs-timer {
        0% {}
    }

    .fp-f {
        bottom: 0;
        height: auto;
        left: 0;
        position: fixed !important;
        right: 0;
        top: 0;
        width: auto;
        z-index: 127
    }

    .fp-h:not(.fp-nh):not(.goog-modalpopup-bg):not(.goog-modalpopup) {
        display: none !important
    }

    .fp-zh.fp-h:not(.fp-nh):not(.goog-modalpopup-bg):not(.goog-modalpopup) {
        display: block !important;
        height: 0;
        overflow: hidden;
        transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .fp-i .fp-c {
        display: block;
        min-height: 100vh
    }

    li.fp-c {
        list-style: none
    }

    .fp-w {
        box-sizing: border-box;
        left: 0;
        margin-left: auto;
        margin-right: auto;
        max-width: 1217px;
        right: 0
    }
    </style>
    <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
    (function() {
        var b = [function() {
            google.tick && google.tick("load", "dcl")
        }];
        google.dclc = function(a) {
            b.length ? b.push(a) : a()
        };

        function c() {
            for (var a; a = b.shift();) a()
        }
        window.addEventListener ? (document.addEventListener("DOMContentLoaded", c, !1), window.addEventListener(
            "load", c, !1)) : window.attachEvent && window.attachEvent("onload", c);
    }).call(this);
    (function() {
        window.rwt = function() {
            return !0
        };
    }).call(this);
    (function() {
        window.jsarwt = function() {
            return !1
        };
    }).call(this);
    </script>
    <style>
    div#searchform {
        min-width: 1173px;
        z-index: 127
    }

    #gb {
        height: 0;
        padding-left: 16px;
        padding-right: 16px
    }
    </style>
    <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
    ;
    this.gbar_ = {
        CONFIG: [
            [
                [0, "www.gstatic.com", "og.qtm.en_US.Kr4TVma1eiQ.O", "co.in", "en", "1", 1, [4, 2,
                        ".40.40.40.40.40.40.", "", "1300102,3700293,3700697,3700775", "313117145", "0"
                    ], null, "yKLUXt6ZDeKZmgfBsbKgDA", null, 0, "og.qtm.1bvxx528hqvsc.L.F4.O",
                    "AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw", "AA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w", "", 2, 1, 200,
                    "IND", null, null, "1", "1", 1
                ], null, [1, 0.1000000014901161, 2, 1],
                [1, 0.001000000047497451, 1],
                [0, 0, 0, null, "", "", "", ""],
                [0, 0, "", 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, null, 0, 0, null, null, 0, 0, 0, "", "", "", "", "",
                    "", null, 0, 0, 0, 0, 0, null, null, null, "rgba(32,33,36,1)", "rgba(255,255,255,1)", 0, 0,
                    1, 1, 0
                ], null, null, ["1", "gci_91f30755d6a6b787dcc2a4062e6e9824.js",
                    "googleapis.client:plusone:gapi.iframes", "", "en"
                ], null, null, null, null, [
                    "m;/_/scs/abc-static/_/js/k=gapi.gapi.en.uvz63P-Csxw.O/d=1/ct=zgms/rs=AHpOoo-7ni_72Jo-lNC1pTImnv6TrVfwUQ/m=__features__",
                    "https://apis.google.com", "", "", "", "", null, 1, "es_plusone_gc_20200428.0_p1", "en",
                    null, 0, 0
                ],
                [0.009999999776482582, "co.in", "1", [null, "", "0", null, 1, 5184000, null, null, "", 0, 1, "",
                    0, 0, 0, 0, 0, 0, 1, 0, 0, 0
                ], null, [
                    ["", "", "0", 0, 0, -1]
                ], null, 0, null, null, ["5061451", "google\\.(com|ru|ca|by|kz|com\\.mx|com\\.tr)$", 1]],
                [1, 1, null, 40400, 1, "IND", "en", "313117145.0", 8, 0.009999999776482582, 0, 0, null, null, 1,
                    0, "", null, null, null, "yKLUXt6ZDeKZmgfBsbKgDA", 0
                ],
                [
                    [null, null, null,
                        "https://www.gstatic.com/og/_/js/k=og.qtm.en_US.Kr4TVma1eiQ.O/rt=j/m=qabr,q_d,qcwid,qmutsd,qapid/exm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/rs=AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"
                    ],
                    [null, null, null,
                        "https://www.gstatic.com/og/_/ss/k=og.qtm.1bvxx528hqvsc.L.F4.O/m=qcwid/excm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/ct=zgms/rs=AA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w"
                    ]
                ], null, null, [""],
                [
                    [
                        [null, null, [null, null, null, "https://ogs.google.com/widget/app/so"], 0, 468, 340,
                            57, 4, 1, 0, 0, 63, 64, 8000,
                            "https://www.google.co.in/intl/en/about/products?tab=wh", 67, 1, 69, null, 1, 70,
                            "Can't seem to load the app launcher right now. Try again or go to the %1$sGoogle Products%2$s page.",
                            3, 1, 0, 74, 0, null, null, null, null, null, null, 1
                        ]
                    ], 0, [null, null, null,
                        "https://www.gstatic.com/og/_/js/k=og.qtm.en_US.Kr4TVma1eiQ.O/rt=j/m=qdsh/d=1/ed=1/rs=AA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"
                    ], "1", "1", 1, 0, null, "en", 0
                ]
            ]
        ],
    };
    this.gbar_ = this.gbar_ || {};
    (function(_) {
        var window = this;
        try {
            /*

             Copyright The Closure Library Authors.
             SPDX-License-Identifier: Apache-2.0
            */
            var aa, ba, ca, da, fa, ha, ja, ka, oa, pa, Aa, Ba, Da, Ea, Ga;
            aa = function(a) {
                var b = 0;
                return function() {
                    return b < a.length ? {
                        done: !1,
                        value: a[b++]
                    } : {
                        done: !0
                    }
                }
            };
            ba = "function" == typeof Object.defineProperties ? Object.defineProperty : function(a, b, c) {
                if (a == Array.prototype || a == Object.prototype) return a;
                a[b] = c.value;
                return a
            };
            ca = function(a) {
                a = ["object" == typeof globalThis && globalThis, a, "object" == typeof window && window,
                    "object" == typeof self && self, "object" == typeof global && global
                ];
                for (var b = 0; b < a.length; ++b) {
                    var c = a[b];
                    if (c && c.Math == Math) return c
                }
                throw Error("a");
            };
            da = ca(this);
            fa = function(a, b) {
                if (b) {
                    var c = da;
                    a = a.split(".");
                    for (var d = 0; d < a.length - 1; d++) {
                        var e = a[d];
                        e in c || (c[e] = {});
                        c = c[e]
                    }
                    a = a[a.length - 1];
                    d = c[a];
                    b = b(d);
                    b != d && null != b && ba(c, a, {
                        configurable: !0,
                        writable: !0,
                        value: b
                    })
                }
            };
            fa("Symbol", function(a) {
                if (a) return a;
                var b = function(e, f) {
                    this.j = e;
                    ba(this, "description", {
                        configurable: !0,
                        writable: !0,
                        value: f
                    })
                };
                b.prototype.toString = function() {
                    return this.j
                };
                var c = 0,
                    d = function(e) {
                        if (this instanceof d) throw new TypeError("b");
                        return new b("jscomp_symbol_" + (e || "") + "_" + c++, e)
                    };
                return d
            });
            fa("Symbol.iterator", function(a) {
                if (a) return a;
                a = Symbol("c");
                for (var b =
                        "Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array"
                        .split(" "), c = 0; c < b.length; c++) {
                    var d = da[b[c]];
                    "function" === typeof d && "function" != typeof d.prototype[a] && ba(d.prototype, a, {
                        configurable: !0,
                        writable: !0,
                        value: function() {
                            return ha(aa(this))
                        }
                    })
                }
                return a
            });
            ha = function(a) {
                a = {
                    next: a
                };
                a[Symbol.iterator] = function() {
                    return this
                };
                return a
            };
            _.ia = function(a) {
                var b = "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator];
                return b ? b.call(a) : {
                    next: aa(a)
                }
            };
            ja = "function" == typeof Object.create ? Object.create : function(a) {
                var b = function() {};
                b.prototype = a;
                return new b
            };
            if ("function" == typeof Object.setPrototypeOf) ka = Object.setPrototypeOf;
            else {
                var la;
                a: {
                    var ma = {
                            Ug: !0
                        },
                        na = {};
                    try {
                        na.__proto__ = ma;
                        la = na.Ug;
                        break a
                    } catch (a) {}
                    la = !1
                }
                ka = la ? function(a, b) {
                    a.__proto__ = b;
                    if (a.__proto__ !== b) throw new TypeError("d`" + a);
                    return a
                } : null
            }
            oa = ka;
            _.n = function(a, b) {
                a.prototype = ja(b.prototype);
                a.prototype.constructor = a;
                if (oa) oa(a, b);
                else
                    for (var c in b)
                        if ("prototype" != c)
                            if (Object.defineProperties) {
                                var d = Object.getOwnPropertyDescriptor(b, c);
                                d && Object.defineProperty(a, c, d)
                            } else a[c] = b[c];
                a.M = b.prototype
            };
            pa = function(a, b, c) {
                if (null == a) throw new TypeError("e`" + c);
                if (b instanceof RegExp) throw new TypeError("f`" + c);
                return a + ""
            };
            fa("String.prototype.startsWith", function(a) {
                return a ? a : function(b, c) {
                    var d = pa(this, b, "startsWith"),
                        e = d.length,
                        f = b.length;
                    c = Math.max(0, Math.min(c | 0, d.length));
                    for (var g = 0; g < f && c < e;)
                        if (d[c++] != b[g++]) return !1;
                    return g >= f
                }
            });
            fa("Number.MAX_SAFE_INTEGER", function() {
                return 9007199254740991
            });
            var qa = function(a, b) {
                a instanceof String && (a += "");
                var c = 0,
                    d = {
                        next: function() {
                            if (c < a.length) {
                                var e = c++;
                                return {
                                    value: b(e, a[e]),
                                    done: !1
                                }
                            }
                            d.next = function() {
                                return {
                                    done: !0,
                                    value: void 0
                                }
                            };
                            return d.next()
                        }
                    };
                d[Symbol.iterator] = function() {
                    return d
                };
                return d
            };
            fa("Array.prototype.keys", function(a) {
                return a ? a : function() {
                    return qa(this, function(b) {
                        return b
                    })
                }
            });
            fa("Array.prototype.values", function(a) {
                return a ? a : function() {
                    return qa(this, function(b, c) {
                        return c
                    })
                }
            });
            var ra = function(a, b) {
                return Object.prototype.hasOwnProperty.call(a, b)
            };
            fa("WeakMap", function(a) {
                function b() {}

                function c(l) {
                    var m = typeof l;
                    return "object" === m && null !== l || "function" === m
                }

                function d(l) {
                    if (!ra(l, f)) {
                        var m = new b;
                        ba(l, f, {
                            value: m
                        })
                    }
                }

                function e(l) {
                    var m = Object[l];
                    m && (Object[l] = function(r) {
                        if (r instanceof b) return r;
                        d(r);
                        return m(r)
                    })
                }
                if (function() {
                        if (!a || !Object.seal) return !1;
                        try {
                            var l = Object.seal({}),
                                m = Object.seal({}),
                                r = new a([
                                    [l, 2],
                                    [m, 3]
                                ]);
                            if (2 != r.get(l) || 3 != r.get(m)) return !1;
                            r.delete(l);
                            r.set(m, 4);
                            return !r.has(l) && 4 == r.get(m)
                        } catch (t) {
                            return !1
                        }
                    }()) return a;
                var f = "$jscomp_hidden_" + Math.random();
                e("freeze");
                e("preventExtensions");
                e("seal");
                var g = 0,
                    k = function(l) {
                        this.j = (g += Math.random() + 1).toString();
                        if (l) {
                            l = _.ia(l);
                            for (var m; !(m = l.next()).done;) m = m.value, this.set(m[0], m[1])
                        }
                    };
                k.prototype.set = function(l, m) {
                    if (!c(l)) throw Error("g");
                    d(l);
                    if (!ra(l, f)) throw Error("h`" + l);
                    l[f][this.j] = m;
                    return this
                };
                k.prototype.get = function(l) {
                    return c(l) && ra(l, f) ? l[f][this.j] : void 0
                };
                k.prototype.has = function(l) {
                    return c(l) && ra(l, f) && ra(l[f], this.j)
                };
                k.prototype.delete = function(l) {
                    return c(l) &&
                        ra(l, f) && ra(l[f], this.j) ? delete l[f][this.j] : !1
                };
                return k
            });
            var sa = "function" == typeof Object.assign ? Object.assign : function(a, b) {
                for (var c = 1; c < arguments.length; c++) {
                    var d = arguments[c];
                    if (d)
                        for (var e in d) ra(d, e) && (a[e] = d[e])
                }
                return a
            };
            fa("Object.assign", function(a) {
                return a || sa
            });
            fa("Array.from", function(a) {
                return a ? a : function(b, c, d) {
                    c = null != c ? c : function(k) {
                        return k
                    };
                    var e = [],
                        f = "undefined" != typeof Symbol && Symbol.iterator && b[Symbol.iterator];
                    if ("function" == typeof f) {
                        b = f.call(b);
                        for (var g = 0; !(f = b.next()).done;) e.push(c.call(d, f.value, g++))
                    } else
                        for (f = b.length, g = 0; g < f; g++) e.push(c.call(d, b[g], g));
                    return e
                }
            });
            fa("Map", function(a) {
                if (function() {
                        if (!a || "function" != typeof a || !a.prototype.entries || "function" !=
                            typeof Object.seal) return !1;
                        try {
                            var k = Object.seal({
                                    x: 4
                                }),
                                l = new a(_.ia([
                                    [k, "s"]
                                ]));
                            if ("s" != l.get(k) || 1 != l.size || l.get({
                                    x: 4
                                }) || l.set({
                                    x: 4
                                }, "t") != l || 2 != l.size) return !1;
                            var m = l.entries(),
                                r = m.next();
                            if (r.done || r.value[0] != k || "s" != r.value[1]) return !1;
                            r = m.next();
                            return r.done || 4 != r.value[0].x || "t" != r.value[1] || !m.next().done ? !1 :
                                !0
                        } catch (t) {
                            return !1
                        }
                    }()) return a;
                var b = new WeakMap,
                    c = function(k) {
                        this.o = {};
                        this.j =
                            f();
                        this.size = 0;
                        if (k) {
                            k = _.ia(k);
                            for (var l; !(l = k.next()).done;) l = l.value, this.set(l[0], l[1])
                        }
                    };
                c.prototype.set = function(k, l) {
                    k = 0 === k ? 0 : k;
                    var m = d(this, k);
                    m.list || (m.list = this.o[m.id] = []);
                    m.Xa ? m.Xa.value = l : (m.Xa = {
                        next: this.j,
                        Zb: this.j.Zb,
                        head: this.j,
                        key: k,
                        value: l
                    }, m.list.push(m.Xa), this.j.Zb.next = m.Xa, this.j.Zb = m.Xa, this.size++);
                    return this
                };
                c.prototype.delete = function(k) {
                    k = d(this, k);
                    return k.Xa && k.list ? (k.list.splice(k.index, 1), k.list.length || delete this.o[k
                            .id], k.Xa.Zb.next = k.Xa.next, k.Xa.next.Zb =
                        k.Xa.Zb, k.Xa.head = null, this.size--, !0) : !1
                };
                c.prototype.clear = function() {
                    this.o = {};
                    this.j = this.j.Zb = f();
                    this.size = 0
                };
                c.prototype.has = function(k) {
                    return !!d(this, k).Xa
                };
                c.prototype.get = function(k) {
                    return (k = d(this, k).Xa) && k.value
                };
                c.prototype.entries = function() {
                    return e(this, function(k) {
                        return [k.key, k.value]
                    })
                };
                c.prototype.keys = function() {
                    return e(this, function(k) {
                        return k.key
                    })
                };
                c.prototype.values = function() {
                    return e(this, function(k) {
                        return k.value
                    })
                };
                c.prototype.forEach = function(k, l) {
                    for (var m = this.entries(),
                            r; !(r = m.next()).done;) r = r.value, k.call(l, r[1], r[0], this)
                };
                c.prototype[Symbol.iterator] = c.prototype.entries;
                var d = function(k, l) {
                        var m = l && typeof l;
                        "object" == m || "function" == m ? b.has(l) ? m = b.get(l) : (m = "" + ++g, b.set(l,
                            m)) : m = "p_" + l;
                        var r = k.o[m];
                        if (r && ra(k.o, m))
                            for (k = 0; k < r.length; k++) {
                                var t = r[k];
                                if (l !== l && t.key !== t.key || l === t.key) return {
                                    id: m,
                                    list: r,
                                    index: k,
                                    Xa: t
                                }
                            }
                        return {
                            id: m,
                            list: r,
                            index: -1,
                            Xa: void 0
                        }
                    },
                    e = function(k, l) {
                        var m = k.j;
                        return ha(function() {
                            if (m) {
                                for (; m.head != k.j;) m = m.Zb;
                                for (; m.next != m.head;) return m =
                                    m.next, {
                                        done: !1,
                                        value: l(m)
                                    };
                                m = null
                            }
                            return {
                                done: !0,
                                value: void 0
                            }
                        })
                    },
                    f = function() {
                        var k = {};
                        return k.Zb = k.next = k.head = k
                    },
                    g = 0;
                return c
            });
            fa("Set", function(a) {
                if (function() {
                        if (!a || "function" != typeof a || !a.prototype.entries || "function" !=
                            typeof Object.seal) return !1;
                        try {
                            var c = Object.seal({
                                    x: 4
                                }),
                                d = new a(_.ia([c]));
                            if (!d.has(c) || 1 != d.size || d.add(c) != d || 1 != d.size || d.add({
                                    x: 4
                                }) != d || 2 != d.size) return !1;
                            var e = d.entries(),
                                f = e.next();
                            if (f.done || f.value[0] != c || f.value[1] != c) return !1;
                            f = e.next();
                            return f.done || f.value[0] == c || 4 != f.value[0].x || f.value[1] != f.value[
                                0] ? !1 : e.next().done
                        } catch (g) {
                            return !1
                        }
                    }()) return a;
                var b = function(c) {
                    this.j = new Map;
                    if (c) {
                        c =
                            _.ia(c);
                        for (var d; !(d = c.next()).done;) this.add(d.value)
                    }
                    this.size = this.j.size
                };
                b.prototype.add = function(c) {
                    c = 0 === c ? 0 : c;
                    this.j.set(c, c);
                    this.size = this.j.size;
                    return this
                };
                b.prototype.delete = function(c) {
                    c = this.j.delete(c);
                    this.size = this.j.size;
                    return c
                };
                b.prototype.clear = function() {
                    this.j.clear();
                    this.size = 0
                };
                b.prototype.has = function(c) {
                    return this.j.has(c)
                };
                b.prototype.entries = function() {
                    return this.j.entries()
                };
                b.prototype.values = function() {
                    return this.j.values()
                };
                b.prototype.keys = b.prototype.values;
                b.prototype[Symbol.iterator] = b.prototype.values;
                b.prototype.forEach = function(c, d) {
                    var e = this;
                    this.j.forEach(function(f) {
                        return c.call(d, f, f, e)
                    })
                };
                return b
            });
            fa("Object.entries", function(a) {
                return a ? a : function(b) {
                    var c = [],
                        d;
                    for (d in b) ra(b, d) && c.push([d, b[d]]);
                    return c
                }
            });
            fa("Object.is", function(a) {
                return a ? a : function(b, c) {
                    return b === c ? 0 !== b || 1 / b === 1 / c : b !== b && c !== c
                }
            });
            fa("Array.prototype.includes", function(a) {
                return a ? a : function(b, c) {
                    var d = this;
                    d instanceof String && (d = String(d));
                    var e = d.length;
                    c = c || 0;
                    for (0 > c && (c = Math.max(c + e, 0)); c < e; c++) {
                        var f = d[c];
                        if (f === b || Object.is(f, b)) return !0
                    }
                    return !1
                }
            });
            fa("String.prototype.includes", function(a) {
                return a ? a : function(b, c) {
                    return -1 !== pa(this, b, "includes").indexOf(b, c || 0)
                }
            });
            _.ta = _.ta || {};
            _.p = this || self;
            _.ua = function() {};
            _.va = function(a) {
                a.Xe = void 0;
                a.ua = function() {
                    return a.Xe ? a.Xe : a.Xe = new a
                }
            };
            _.xa = function(a) {
                var b = typeof a;
                if ("object" == b)
                    if (a) {
                        if (a instanceof Array) return "array";
                        if (a instanceof Object) return b;
                        var c = Object.prototype.toString.call(a);
                        if ("[object Window]" == c) return "object";
                        if ("[object Array]" == c || "number" == typeof a.length && "undefined" != typeof a
                            .splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable(
                                "splice")) return "array";
                        if ("[object Function]" == c || "undefined" != typeof a.call && "undefined" != typeof a
                            .propertyIsEnumerable && !a.propertyIsEnumerable("call")) return "function"
                    } else return "null";
                else if ("function" == b && "undefined" == typeof a.call) return "object";
                return b
            };
            _.ya = function(a) {
                return "function" == _.xa(a)
            };
            _.za = function(a) {
                var b = typeof a;
                return "object" == b && null != a || "function" == b
            };
            _.Ca = function(a) {
                return Object.prototype.hasOwnProperty.call(a, Aa) && a[Aa] || (a[Aa] = ++Ba)
            };
            Aa = "closure_uid_" + (1E9 * Math.random() >>> 0);
            Ba = 0;
            Da = function(a, b, c) {
                return a.call.apply(a.bind, arguments)
            };
            Ea = function(a, b, c) {
                if (!a) throw Error();
                if (2 < arguments.length) {
                    var d = Array.prototype.slice.call(arguments, 2);
                    return function() {
                        var e = Array.prototype.slice.call(arguments);
                        Array.prototype.unshift.apply(e, d);
                        return a.apply(b, e)
                    }
                }
                return function() {
                    return a.apply(b, arguments)
                }
            };
            _.q = function(a, b, c) {
                Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? _
                    .q = Da : _.q = Ea;
                return _.q.apply(null, arguments)
            };
            _.Fa = Date.now || function() {
                return +new Date
            };
            _.u = function(a, b) {
                a = a.split(".");
                var c = _.p;
                a[0] in c || "undefined" == typeof c.execScript || c.execScript("var " + a[0]);
                for (var d; a.length && (d = a.shift());) a.length || void 0 === b ? c[d] && c[d] !== Object
                    .prototype[d] ? c = c[d] : c = c[d] = {} : c[d] = b
            };
            _.v = function(a, b) {
                function c() {}
                c.prototype = b.prototype;
                a.M = b.prototype;
                a.prototype = new c;
                a.prototype.constructor = a
            };
            Ga = function(a) {
                return a
            };
            _.Ha = function(a) {
                var b = null,
                    c = _.p.trustedTypes;
                if (!c || !c.createPolicy) return b;
                try {
                    b = c.createPolicy(a, {
                        createHTML: Ga,
                        createScript: Ga,
                        createScriptURL: Ga
                    })
                } catch (d) {
                    _.p.console && _.p.console.error(d.message)
                }
                return b
            };
            _.Ia = function(a) {
                if (Error.captureStackTrace) Error.captureStackTrace(this, _.Ia);
                else {
                    var b = Error().stack;
                    b && (this.stack = b)
                }
                a && (this.message = String(a))
            };
            _.v(_.Ia, Error);
            _.Ia.prototype.name = "CustomError";
            _.Ja = Array.prototype.indexOf ? function(a, b) {
                return Array.prototype.indexOf.call(a, b, void 0)
            } : function(a, b) {
                if ("string" === typeof a) return "string" !== typeof b || 1 != b.length ? -1 : a.indexOf(b, 0);
                for (var c = 0; c < a.length; c++)
                    if (c in a && a[c] === b) return c;
                return -1
            };
            _.Ka = Array.prototype.forEach ? function(a, b, c) {
                Array.prototype.forEach.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = "string" === typeof a ? a.split("") : a, f = 0; f < d; f++) f in e &&
                    b.call(c, e[f], f, a)
            };
            _.La = Array.prototype.filter ? function(a, b, c) {
                return Array.prototype.filter.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = [], f = 0, g = "string" === typeof a ? a.split("") : a, k = 0; k <
                    d; k++)
                    if (k in g) {
                        var l = g[k];
                        b.call(c, l, k, a) && (e[f++] = l)
                    } return e
            };
            _.Ma = Array.prototype.map ? function(a, b, c) {
                return Array.prototype.map.call(a, b, c)
            } : function(a, b, c) {
                for (var d = a.length, e = Array(d), f = "string" === typeof a ? a.split("") : a, g = 0; g <
                    d; g++) g in f && (e[g] = b.call(c, f[g], g, a));
                return e
            };
            _.Na = Array.prototype.some ? function(a, b) {
                return Array.prototype.some.call(a, b, void 0)
            } : function(a, b) {
                for (var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0; e < c; e++)
                    if (e in d && b.call(void 0, d[e], e, a)) return !0;
                return !1
            };
            _.Oa = function(a, b) {
                return 0 <= (0, _.Ja)(a, b)
            };
            var Qa;
            _.Pa = function(a, b, c) {
                for (var d in a) b.call(c, a[d], d, a)
            };
            Qa = "constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf"
                .split(" ");
            _.Ra = function(a, b) {
                for (var c, d, e = 1; e < arguments.length; e++) {
                    d = arguments[e];
                    for (c in d) a[c] = d[c];
                    for (var f = 0; f < Qa.length; f++) c = Qa[f], Object.prototype.hasOwnProperty.call(d, c) &&
                        (a[c] = d[c])
                }
            };
            var Ta = function() {
                    var a = Sa;
                    return function() {
                        var b = this || _.p;
                        b = b.closure_memoize_cache_ || (b.closure_memoize_cache_ = {});
                        var c = a(_.Ca(_.Ha), arguments);
                        return b.hasOwnProperty(c) ? b[c] : b[c] = _.Ha.apply(this, arguments)
                    }
                },
                Sa = function(a, b) {
                    a = [a];
                    for (var c = b.length - 1; 0 <= c; --c) a.push(typeof b[c], b[c]);
                    return a.join("\x0B")
                };
            _.Ua = function() {
                return Ta()("ogb-qtm#html")
            };
            var Wa;
            _.Xa = function(a, b) {
                this.j = a === _.Va && b || "";
                this.o = Wa
            };
            _.Xa.prototype.Pb = !0;
            _.Xa.prototype.Fb = function() {
                return this.j
            };
            _.Ya = function(a) {
                return a instanceof _.Xa && a.constructor === _.Xa && a.o === Wa ? a.j : "type_error:Const"
            };
            Wa = {};
            _.Va = {};
            var $a, Za;
            _.ab = function(a, b) {
                this.o = a === Za && b || "";
                this.w = $a
            };
            _.ab.prototype.Pb = !0;
            _.ab.prototype.Fb = function() {
                return this.o.toString()
            };
            _.ab.prototype.Ve = !0;
            _.ab.prototype.j = function() {
                return 1
            };
            _.cb = function(a) {
                return _.bb(a).toString()
            };
            _.bb = function(a) {
                if (a instanceof _.ab && a.constructor === _.ab && a.w === $a) return a.o;
                _.xa(a);
                return "type_error:TrustedResourceUrl"
            };
            $a = {};
            _.db = function(a) {
                var b = _.Ua();
                a = b ? b.createScriptURL(a) : a;
                return new _.ab(Za, a)
            };
            Za = {};
            var fb;
            _.eb = String.prototype.trim ? function(a) {
                return a.trim()
            } : function(a) {
                return /^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]
            };
            _.gb = function(a, b) {
                var c = 0;
                a = (0, _.eb)(String(a)).split(".");
                b = (0, _.eb)(String(b)).split(".");
                for (var d = Math.max(a.length, b.length), e = 0; 0 == c && e < d; e++) {
                    var f = a[e] || "",
                        g = b[e] || "";
                    do {
                        f = /(\d*)(\D*)(.*)/.exec(f) || ["", "", "", ""];
                        g = /(\d*)(\D*)(.*)/.exec(g) || ["", "", "", ""];
                        if (0 == f[0].length && 0 == g[0].length) break;
                        c = fb(0 == f[1].length ? 0 : parseInt(f[1], 10), 0 == g[1].length ? 0 : parseInt(g[1],
                            10)) || fb(0 == f[2].length, 0 == g[2].length) || fb(f[2], g[2]);
                        f = f[3];
                        g = g[3]
                    } while (0 == c)
                }
                return c
            };
            fb = function(a, b) {
                return a < b ? -1 : a > b ? 1 : 0
            };
            var lb, ib;
            _.jb = function(a, b) {
                this.o = a === _.hb && b || "";
                this.w = ib
            };
            _.jb.prototype.Pb = !0;
            _.jb.prototype.Fb = function() {
                return this.o.toString()
            };
            _.jb.prototype.Ve = !0;
            _.jb.prototype.j = function() {
                return 1
            };
            _.kb = function(a) {
                if (a instanceof _.jb && a.constructor === _.jb && a.w === ib) return a.o;
                _.xa(a);
                return "type_error:SafeUrl"
            };
            lb = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;
            _.mb = function(a) {
                if (a instanceof _.jb) return a;
                a = "object" == typeof a && a.Pb ? a.Fb() : String(a);
                lb.test(a) || (a = "about:invalid#zClosurez");
                return new _.jb(_.hb, a)
            };
            _.nb = function(a) {
                if (a instanceof _.jb) return a;
                a = "object" == typeof a && a.Pb ? a.Fb() : String(a);
                lb.test(a) || (a = "about:invalid#zClosurez");
                return new _.jb(_.hb, a)
            };
            ib = {};
            _.hb = {};
            _.pb = function() {
                this.j = "";
                this.o = _.ob
            };
            _.pb.prototype.Pb = !0;
            _.ob = {};
            _.pb.prototype.Fb = function() {
                return this.j
            };
            _.qb = function(a) {
                var b = new _.pb;
                b.j = a;
                return b
            };
            _.rb = _.qb("");
            a: {
                var tb = _.p.navigator;
                if (tb) {
                    var ub = tb.userAgent;
                    if (ub) {
                        _.sb = ub;
                        break a
                    }
                }
                _.sb = ""
            }
            _.w = function(a) {
                return -1 != _.sb.indexOf(a)
            };
            var xb;
            _.vb = function() {
                return _.w("Trident") || _.w("MSIE")
            };
            _.wb = function() {
                return _.w("Firefox") || _.w("FxiOS")
            };
            _.yb = function() {
                return _.w("Safari") && !(xb() || _.w("Coast") || _.w("Opera") || _.w("Edge") || _.w("Edg/") ||
                    _.w("OPR") || _.wb() || _.w("Silk") || _.w("Android"))
            };
            xb = function() {
                return (_.w("Chrome") || _.w("CriOS")) && !_.w("Edge")
            };
            _.zb = function() {
                return _.w("Android") && !(xb() || _.wb() || _.w("Opera") || _.w("Silk"))
            };
            var Ab;
            _.Bb = function() {
                this.o = "";
                this.A = Ab;
                this.w = null
            };
            _.Bb.prototype.Ve = !0;
            _.Bb.prototype.j = function() {
                return this.w
            };
            _.Bb.prototype.Pb = !0;
            _.Bb.prototype.Fb = function() {
                return this.o.toString()
            };
            _.Cb = function(a) {
                if (a instanceof _.Bb && a.constructor === _.Bb && a.A === Ab) return a.o;
                _.xa(a);
                return "type_error:SafeHtml"
            };
            Ab = {};
            _.Db = function(a, b) {
                var c = new _.Bb,
                    d = _.Ua();
                c.o = d ? d.createHTML(a) : a;
                c.w = b;
                return c
            };
            _.Eb = new _.Bb;
            _.Eb.o = _.p.trustedTypes && _.p.trustedTypes.emptyHTML ? _.p.trustedTypes.emptyHTML : "";
            _.Eb.w = 0;
            _.Fb = _.Db("<br>", 0);
            _.Gb = function(a) {
                var b = !1,
                    c;
                return function() {
                    b || (c = a(), b = !0);
                    return c
                }
            }(function() {
                var a = document.createElement("div"),
                    b = document.createElement("div");
                b.appendChild(document.createElement("div"));
                a.appendChild(b);
                b = a.firstChild.firstChild;
                a.innerHTML = _.Cb(_.Eb);
                return !b.parentElement
            });
            var Hb;
            Hb = function() {
                return _.w("iPhone") && !_.w("iPod") && !_.w("iPad")
            };
            _.Ib = function() {
                return Hb() || _.w("iPad") || _.w("iPod")
            };
            _.Jb = function(a) {
                _.Jb[" "](a);
                return a
            };
            _.Jb[" "] = _.ua;
            var Lb = function(a, b) {
                var c = Kb;
                return Object.prototype.hasOwnProperty.call(c, a) ? c[a] : c[a] = b(a)
            };
            var Zb, $b, Kb, hc;
            _.Mb = _.w("Opera");
            _.x = _.vb();
            _.Nb = _.w("Edge");
            _.Ob = _.Nb || _.x;
            _.Pb = _.w("Gecko") && !(-1 != _.sb.toLowerCase().indexOf("webkit") && !_.w("Edge")) && !(_.w(
                "Trident") || _.w("MSIE")) && !_.w("Edge");
            _.Qb = -1 != _.sb.toLowerCase().indexOf("webkit") && !_.w("Edge");
            _.Rb = _.w("Macintosh");
            _.Sb = _.w("Windows");
            _.Tb = _.w("Linux") || _.w("CrOS");
            _.Ub = _.w("Android");
            _.Vb = Hb();
            _.Wb = _.w("iPad");
            _.Xb = _.w("iPod");
            _.Yb = _.Ib();
            Zb = function() {
                var a = _.p.document;
                return a ? a.documentMode : void 0
            };
            a: {
                var ac = "",
                    bc = function() {
                        var a = _.sb;
                        if (_.Pb) return /rv:([^\);]+)(\)|;)/.exec(a);
                        if (_.Nb) return /Edge\/([\d\.]+)/.exec(a);
                        if (_.x) return /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);
                        if (_.Qb) return /WebKit\/(\S+)/.exec(a);
                        if (_.Mb) return /(?:Version)[ \/]?(\S+)/.exec(a)
                    }();bc && (ac = bc ? bc[1] : "");
                if (_.x) {
                    var cc = Zb();
                    if (null != cc && cc > parseFloat(ac)) {
                        $b = String(cc);
                        break a
                    }
                }
                $b = ac
            }
            _.dc = $b;
            Kb = {};
            _.ec = function(a) {
                return Lb(a, function() {
                    return 0 <= _.gb(_.dc, a)
                })
            };
            _.gc = function(a) {
                return Number(fc) >= a
            };
            if (_.p.document && _.x) {
                var ic = Zb();
                hc = ic ? ic : parseInt(_.dc, 10) || void 0
            } else hc = void 0;
            var fc = hc;
            _.jc = _.wb();
            _.kc = Hb() || _.w("iPod");
            _.lc = _.w("iPad");
            _.mc = _.zb();
            _.nc = xb();
            _.oc = _.yb() && !_.Ib();
            var pc = {},
                qc = null;
            _.rc = function(a) {
                this.j = 0;
                this.o = a
            };
            _.rc.prototype.next = function() {
                return this.j < this.o.length ? {
                    done: !1,
                    value: this.o[this.j++]
                } : {
                    done: !0,
                    value: void 0
                }
            };
            "undefined" != typeof Symbol && "undefined" != typeof Symbol.iterator && (_.rc.prototype[Symbol
                .iterator] = function() {
                return this
            });
            var yc;
            _.y = function() {};
            _.sc = "function" == typeof Uint8Array;
            _.z = function(a, b, c, d, e, f) {
                a.j = null;
                b || (b = c ? [c] : []);
                a.H = c ? String(c) : void 0;
                a.B = 0 === c ? -1 : 0;
                a.w = b;
                a: {
                    c = a.w.length;b = -1;
                    if (c && (b = c - 1, c = a.w[b], !(null === c || "object" != typeof c || Array.isArray(
                            c) || _.sc && c instanceof Uint8Array))) {
                        a.C = b - a.B;
                        a.A = c;
                        break a
                    } - 1 < d ? (a.C = Math.max(d, b + 1 - a.B), a.A = null) : a.C = Number.MAX_VALUE
                }
                a.J = {};
                if (e)
                    for (d = 0; d < e.length; d++) b = e[d], b < a.C ? (b += a.B, a.w[b] = a.w[b] || _.tc) : (_
                        .uc(a), a.A[b] = a.A[b] || _.tc);
                if (f && f.length)
                    for (d = 0; d < f.length; d++) _.vc(a, f[d])
            };
            _.tc = [];
            _.uc = function(a) {
                var b = a.C + a.B;
                a.w[b] || (a.A = a.w[b] = {})
            };
            _.A = function(a, b) {
                if (b < a.C) {
                    b += a.B;
                    var c = a.w[b];
                    return c === _.tc ? a.w[b] = [] : c
                }
                if (a.A) return c = a.A[b], c === _.tc ? a.A[b] = [] : c
            };
            _.B = function(a, b) {
                a = _.A(a, b);
                return null == a ? a : !!a
            };
            _.C = function(a, b, c) {
                a = _.A(a, b);
                return null == a ? c : a
            };
            _.wc = function(a, b, c) {
                a = _.B(a, b);
                return null == a ? c : a
            };
            _.xc = function(a, b, c) {
                a = _.A(a, b);
                a = null == a ? a : +a;
                return null == a ? c : a
            };
            _.E = function(a, b, c) {
                b < a.C ? a.w[b + a.B] = c : (_.uc(a), a.A[b] = c);
                return a
            };
            _.vc = function(a, b) {
                for (var c, d, e = 0; e < b.length; e++) {
                    var f = b[e],
                        g = _.A(a, f);
                    null != g && (c = f, d = g, _.E(a, f, void 0))
                }
                return c ? (_.E(a, c, d), c) : 0
            };
            _.G = function(a, b, c) {
                a.j || (a.j = {});
                if (!a.j[c]) {
                    var d = _.A(a, c);
                    d && (a.j[c] = new b(d))
                }
                return a.j[c]
            };
            _.H = function(a, b, c) {
                a.j || (a.j = {});
                var d = c ? c.tb() : c;
                a.j[b] = c;
                return _.E(a, b, d)
            };
            yc = function(a) {
                if (a.j)
                    for (var b in a.j) {
                        var c = a.j[b];
                        if (Array.isArray(c))
                            for (var d = 0; d < c.length; d++) c[d] && c[d].tb();
                        else c && c.tb()
                    }
            };
            _.y.prototype.tb = function() {
                yc(this);
                return this.w
            };
            _.y.prototype.o = _.sc ? function() {
                var a = Uint8Array.prototype.toJSON;
                Uint8Array.prototype.toJSON = function() {
                    var b;
                    void 0 === b && (b = 0);
                    if (!qc) {
                        qc = {};
                        for (var c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(
                                ""), d = ["+/=", "+/", "-_=", "-_.", "-_"], e = 0; 5 > e; e++) {
                            var f = c.concat(d[e].split(""));
                            pc[e] = f;
                            for (var g = 0; g < f.length; g++) {
                                var k = f[g];
                                void 0 === qc[k] && (qc[k] = g)
                            }
                        }
                    }
                    b = pc[b];
                    c = [];
                    for (d = 0; d < this.length; d += 3) {
                        var l = this[d],
                            m = (e = d + 1 < this.length) ? this[d + 1] : 0;
                        k = (f = d + 2 < this.length) ? this[d + 2] : 0;
                        g = l >> 2;
                        l = (l & 3) << 4 | m >> 4;
                        m = (m & 15) << 2 | k >> 6;
                        k &= 63;
                        f || (k = 64, e || (m = 64));
                        c.push(b[g], b[l], b[m] || "", b[k] || "")
                    }
                    return c.join("")
                };
                try {
                    return JSON.stringify(this.w && this.tb(), zc)
                } finally {
                    Uint8Array.prototype.toJSON = a
                }
            } : function() {
                return JSON.stringify(this.w && this.tb(), zc)
            };
            var zc = function(a, b) {
                return "number" !== typeof b || !isNaN(b) && Infinity !== b && -Infinity !== b ? b : String(b)
            };
            _.y.prototype.toString = function() {
                yc(this);
                return this.w.toString()
            };
            _.I = function() {
                this.Wa = this.Wa;
                this.Db = this.Db
            };
            _.I.prototype.Wa = !1;
            _.I.prototype.ta = function() {
                this.Wa || (this.Wa = !0, this.R())
            };
            _.I.prototype.R = function() {
                if (this.Db)
                    for (; this.Db.length;) this.Db.shift()()
            };
            var Ac = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(Ac, _.y);
            _.Bc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Bc, _.y);
            var Cc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(Cc, _.y);
            _.Dc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Dc, _.y);
            _.Ec = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Ec, _.y);
            var Fc = function(a) {
                _.I.call(this);
                this.w = a;
                this.j = [];
                this.o = {}
            };
            _.v(Fc, _.I);
            Fc.prototype.ud = function() {
                for (var a = this.j.length, b = this.j, c = [], d = 0; d < a; ++d) {
                    var e = b[d].j();
                    a: {
                        var f = this.w;
                        for (var g = e.split("."), k = g.length, l = 0; l < k; ++l)
                            if (f[g[l]]) f = f[g[l]];
                            else {
                                f = null;
                                break a
                            } f = f instanceof Function ? f : null
                    }
                    if (f && f != this.o[e]) try {
                        b[d].ud(f)
                    } catch (m) {} else c.push(b[d])
                }
                this.j = c.concat(b.slice(a))
            };
            var Mc;
            _.Gc = function() {
                this.j = {};
                this.o = {}
            };
            _.va(_.Gc);
            _.Ic = function(a) {
                return _.Hc(_.Gc.ua(), a)
            };
            _.Kc = function(a, b) {
                var c = _.Gc.ua();
                if (a in c.j) {
                    if (c.j[a] != b) throw new Jc(a);
                } else {
                    c.j[a] = b;
                    if (b = c.o[a])
                        for (var d = 0, e = b.length; d < e; d++) b[d].j(c.j, a);
                    delete c.o[a]
                }
            };
            _.Hc = function(a, b) {
                if (b in a.j) return a.j[b];
                throw new Lc(b);
            };
            Mc = function() {
                _.Ia.call(this)
            };
            _.v(Mc, _.Ia);
            var Jc = function() {
                _.Ia.call(this)
            };
            _.v(Jc, Mc);
            var Lc = function() {
                _.Ia.call(this)
            };
            _.v(Lc, Mc);
            var Pc = function(a) {
                _.I.call(this);
                this.B = a;
                this.w = this.j = null;
                this.C = 0;
                this.A = {};
                this.o = !1;
                a = window.navigator.userAgent;
                0 <= a.indexOf("MSIE") && 0 <= a.indexOf("Trident") && (a = /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/
                    .exec(a)) && a[1] && 9 > parseFloat(a[1]) && (this.o = !0)
            };
            _.n(Pc, _.I);
            Pc.prototype.D = function(a, b) {
                this.j = b;
                this.w = a;
                b.preventDefault ? b.preventDefault() : b.returnValue = !1
            };
            _.Qc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Qc, _.y);
            _.Rc = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.Rc, _.y);
            _.J = function(a, b) {
                return null != a ? !!a : !!b
            };
            _.L = function(a, b) {
                void 0 == b && (b = "");
                return null != a ? a : b
            };
            _.Sc = function(a, b) {
                void 0 == b && (b = 0);
                return null != a ? a : b
            };
            _.Tc = function() {
                this.data = {}
            };
            _.Tc.prototype.j = function() {
                window.console && window.console.log && window.console.log("Log data: ", this.data)
            };
            _.Tc.prototype.o = function(a) {
                var b = [],
                    c;
                for (c in this.data) b.push(encodeURIComponent(c) + "=" + encodeURIComponent(String(this.data[
                    c])));
                return ("atyp=i&zx=" + (new Date).getTime() + "&" + b.join("&")).substr(0, a)
            };
            var Uc = function(a, b) {
                this.data = {};
                var c = _.G(a, Cc, 8) || new Cc;
                window.google && window.google.kEI && (this.data.ei = window.google.kEI);
                this.data.sei = _.L(_.A(a, 10));
                this.data.ogf = _.L(_.A(c, 3));
                var d = window.google && window.google.sn ? /.*hp$/.test(window.google.sn) ? !1 : !0 : _.J(_.B(
                    a, 7));
                this.data.ogrp = d ? "1" : "";
                this.data.ogv = _.L(_.A(c, 6)) + "." + _.L(_.A(c, 7));
                this.data.ogd = _.L(_.A(a, 21));
                this.data.ogc = _.L(_.A(a, 20));
                this.data.ogl = _.L(_.A(a, 5));
                b && (this.data.oggv = b)
            };
            _.v(Uc, _.Tc);
            var Vc = [1, 2, 3, 4, 5, 6, 9, 10, 11, 13, 14, 28, 29, 30, 34, 35, 37, 38, 39, 40, 42, 43, 48, 49, 50,
                    51, 52, 53, 62, 500
                ],
                Yc = function(a, b, c, d, e, f) {
                    Uc.call(this, a, b);
                    _.Ra(this.data, {
                        oge: d,
                        ogex: _.L(_.A(a, 9)),
                        ogp: _.L(_.A(a, 6)),
                        ogsr: Math.round(1 / (Wc(d) ? _.Sc(_.xc(c, 3, 1)) : _.Sc(_.xc(c, 2, 1E-4)))),
                        ogus: e
                    });
                    if (f) {
                        "ogw" in f && (this.data.ogw = f.ogw, delete f.ogw);
                        "ved" in f && (this.data.ved = f.ved, delete f.ved);
                        a = [];
                        for (var g in f) 0 != a.length && a.push(","), a.push(Xc(g)), a.push("."), a.push(Xc(f[g]));
                        f = a.join("");
                        "" != f && (this.data.ogad = f)
                    }
                };
            _.v(Yc, Uc);
            var Xc = function(a) {
                    a = String(a);
                    return a.replace(".", "%2E").replace(",", "%2C")
                },
                Zc = null,
                Wc = function(a) {
                    if (!Zc) {
                        Zc = {};
                        for (var b = 0; b < Vc.length; b++) Zc[Vc[b]] = !0
                    }
                    return !!Zc[a]
                };
            var $c, cd, bd;
            _.ad = function(a) {
                var b = window.google && window.google.logUrl ? "" : "https://www.google.com";
                b += "/gen_204?";
                b += a.o(2040 - b.length);
                $c(_.mb(b))
            };
            $c = function(a) {
                var b = new Image;
                b.onerror = b.onload = b.onabort = function() {
                    bd in cd && delete cd[bd]
                };
                cd[bd++] = b;
                b.src = _.kb(a)
            };
            cd = [];
            bd = 0;
            var gd = function() {
                var a = dd,
                    b = ed,
                    c = fd;
                this.C = a;
                this.B = b;
                this.A = _.Sc(_.xc(a, 2, 1E-4), 1E-4);
                this.o = _.Sc(_.xc(a, 3, 1), 1);
                b = Math.random();
                this.w = _.J(_.B(a, 1)) && b < this.A;
                this.j = _.J(_.B(a, 1)) && b < this.o;
                a = 0;
                _.J(_.B(c, 1)) && (a |= 1);
                _.J(_.B(c, 2)) && (a |= 2);
                _.J(_.B(c, 3)) && (a |= 4);
                this.D = a
            };
            gd.prototype.log = function(a, b) {
                try {
                    if (Wc(a) ? this.j : this.w) {
                        var c = new Yc(this.B, "quantum:gapiBuildLabel", this.C, a, this.D, b);
                        _.ad(c)
                    }
                } catch (d) {}
            };
            _.hd = function(a, b, c, d, e) {
                Uc.call(this, a, b);
                _.Ra(this.data, {
                    jexpid: _.L(_.A(a, 9)),
                    srcpg: "prop=" + _.L(_.A(a, 6)),
                    jsr: Math.round(1 / d),
                    emsg: c.name + ":" + c.message
                });
                if (e) {
                    e._sn && (e._sn = "og." + e._sn);
                    for (var f in e) this.data[encodeURIComponent(f)] = e[f]
                }
            };
            _.v(_.hd, Uc);
            _.id = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.id, _.y);
            var ld = function() {
                var a = jd;
                this.D = kd;
                this.A = _.Sc(_.xc(a, 2, .001), .001);
                this.C = _.J(_.B(a, 1)) && Math.random() < this.A;
                this.B = _.Sc(_.C(a, 3, 1), 1);
                this.w = 0;
                this.j = this.o = null;
                _.wc(a, 4, !0)
            };
            ld.prototype.log = function(a, b) {
                if (this.j) {
                    var c = new Ac;
                    _.E(c, 1, a.message);
                    _.E(c, 2, a.stack);
                    _.E(c, 3, a.lineNumber);
                    _.E(c, 5, 1);
                    var d = new _.Bc;
                    _.H(d, 40, c);
                    this.j.log(98, d)
                }
                try {
                    if (this.C && this.w < this.B) {
                        try {
                            var e = (this.o || _.Hc(_.Gc.ua(), "lm")).j(a, b)
                        } catch (f) {
                            e = new _.hd(this.D, "quantum:gapiBuildLabel", a, this.A, b)
                        }
                        _.ad(e);
                        this.w++
                    }
                } catch (f) {}
            };
            var md = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(md, _.y);
            var nd = function(a) {
                this.j = a;
                this.o = void 0;
                this.w = []
            };
            nd.prototype.then = function(a, b, c) {
                this.w.push(new od(a, b, c));
                _.pd(this)
            };
            _.qd = function(a, b) {
                if (void 0 !== a.j || void 0 !== a.o) throw Error("o");
                a.j = b;
                _.pd(a)
            };
            _.pd = function(a) {
                if (0 < a.w.length) {
                    var b = void 0 !== a.j,
                        c = void 0 !== a.o;
                    if (b || c) {
                        b = b ? a.A : a.B;
                        c = a.w;
                        a.w = [];
                        try {
                            (0, _.Ka)(c, b, a)
                        } catch (d) {
                            console.error(d)
                        }
                    }
                }
            };
            nd.prototype.A = function(a) {
                a.o && a.o.call(a.j, this.j)
            };
            nd.prototype.B = function(a) {
                a.w && a.w.call(a.j, this.o)
            };
            var od = function(a, b, c) {
                this.o = a;
                this.w = b;
                this.j = c
            };
            _.M = function() {
                this.A = new nd;
                this.o = new nd;
                this.D = new nd;
                this.B = new nd;
                this.C = new nd;
                this.G = new nd;
                this.J = new nd;
                this.j = new nd;
                this.w = new nd
            };
            _.va(_.M);
            _.h = _.M.prototype;
            _.h.Dh = function() {
                return this.A
            };
            _.h.Lh = function() {
                return this.o
            };
            _.h.Rh = function() {
                return this.D
            };
            _.h.Kh = function() {
                return this.B
            };
            _.h.Ph = function() {
                return this.C
            };
            _.h.Sh = function() {
                return this.G
            };
            _.h.Hh = function() {
                return this.J
            };
            _.h.Ih = function() {
                return this.j
            };
            _.h.wh = function() {
                return this.w
            };
            var rd = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(rd, _.y);
            _.td = function() {
                return _.G(_.sd, _.Dc, 1)
            };
            _.ud = function() {
                return _.G(_.sd, _.Ec, 5)
            };
            var vd;
            window.gbar_ && window.gbar_.CONFIG ? vd = window.gbar_.CONFIG[0] || {} : vd = [];
            _.sd = new rd(vd);
            var jd, kd, ed, fd, dd;
            jd = _.G(_.sd, _.id, 3) || new _.id;
            kd = _.td() || new _.Dc;
            _.wd = new ld;
            ed = _.td() || new _.Dc;
            fd = _.ud() || new _.Ec;
            dd = _.G(_.sd, md, 4) || new md;
            _.xd = new gd;
            _.u("gbar_._DumpException", function(a) {
                _.wd ? _.wd.log(a) : console.error(a)
            });
            _.yd = new Pc(_.wd);
            _.xd.log(8, {
                m: "BackCompat" == document.compatMode ? "q" : "s"
            });
            _.u("gbar.A", nd);
            nd.prototype.aa = nd.prototype.then;
            _.u("gbar.B", _.M);
            _.M.prototype.ba = _.M.prototype.Lh;
            _.M.prototype.bb = _.M.prototype.Rh;
            _.M.prototype.bd = _.M.prototype.Ph;
            _.M.prototype.be = _.M.prototype.Sh;
            _.M.prototype.bf = _.M.prototype.Dh;
            _.M.prototype.bg = _.M.prototype.Kh;
            _.M.prototype.bh = _.M.prototype.Hh;
            _.M.prototype.bi = _.M.prototype.Ih;
            _.M.prototype.bj = _.M.prototype.wh;
            _.u("gbar.a", _.M.ua());
            var zd = new Fc(window);
            _.Kc("api", zd);
            var Ad = _.ud() || new _.Ec,
                Bd = _.L(_.A(Ad, 8));
            window.__PVT = Bd;
            _.Kc("eq", _.yd);

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var Cd = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(Cd, _.y);
            var Dd = function() {
                _.I.call(this);
                this.o = [];
                this.j = []
            };
            _.n(Dd, _.I);
            Dd.prototype.w = function(a, b) {
                this.o.push({
                    Ud: a,
                    options: b
                })
            };
            Dd.prototype.init = function(a, b, c) {
                window.gapi = {};
                var d = window.___jsl = {};
                d.h = _.L(_.A(a, 1));
                null != _.A(a, 12) && (d.dpo = _.J(_.B(a, 12)));
                d.ms = _.L(_.A(a, 2));
                d.m = _.L(_.A(a, 3));
                d.l = [];
                _.A(b, 1) && (a = _.A(b, 3)) && this.j.push(a);
                _.A(c, 1) && (c = _.A(c, 2)) && this.j.push(c);
                _.u("gapi.load", (0, _.q)(this.w, this));
                return this
            };
            var Ed = _.G(_.sd, _.Qc, 14) || new _.Qc,
                Fd = _.G(_.sd, _.Rc, 9) || new _.Rc,
                Gd = new Cd,
                Hd = new Dd;
            Hd.init(Ed, Fd, Gd);
            _.Kc("gs", Hd);

        } catch (e) {
            _._DumpException(e)
        }
    })(this.gbar_);
    // Google Inc.
    </script> <noscript></noscript>
    <style>
    .gb_2a:not(.gb_Wd) {
        font: 13px/27px Roboto, RobotoDraft, Arial, sans-serif;
        z-index: 986
    }

    @-moz-keyframes gb__a {
        0% {
            opacity: 0
        }

        50% {
            opacity: 1
        }
    }

    @keyframes gb__a {
        0% {
            opacity: 0
        }

        50% {
            opacity: 1
        }
    }

    a.gb_0 {
        border: none;
        color: #4285f4;
        cursor: default;
        font-weight: bold;
        outline: none;
        position: relative;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        white-space: nowrap;
        -moz-user-select: none
    }

    a.gb_0:hover:after,
    a.gb_0:focus:after {
        background-color: rgba(0, 0, 0, .12);
        content: '';
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    a.gb_0:hover,
    a.gb_0:focus {
        text-decoration: none
    }

    a.gb_0:active {
        background-color: rgba(153, 153, 153, .4);
        text-decoration: none
    }

    a.gb_1 {
        background-color: #4285f4;
        color: #fff
    }

    a.gb_1:active {
        background-color: #0043b2
    }

    .gb_2 {
        -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .16);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .16)
    }

    .gb_0,
    .gb_1,
    .gb_3,
    .gb_4 {
        display: inline-block;
        line-height: 28px;
        padding: 0 12px;
        -moz-border-radius: 2px;
        border-radius: 2px
    }

    .gb_3 {
        background: #f8f8f8;
        border: 1px solid #c6c6c6
    }

    .gb_4 {
        background: #f8f8f8
    }

    .gb_3,
    #gb a.gb_3.gb_3,
    .gb_4 {
        color: #666;
        cursor: default;
        text-decoration: none
    }

    #gb a.gb_4.gb_4 {
        cursor: default;
        text-decoration: none
    }

    .gb_4 {
        border: 1px solid #4285f4;
        font-weight: bold;
        outline: none;
        background: #4285f4;
        background: -moz-linear-gradient(top, #4387fd, #4683ea);
        background: linear-gradient(top, #4387fd, #4683ea);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd, endColorstr=#4683ea, GradientType=0)
    }

    #gb a.gb_4.gb_4 {
        color: #fff
    }

    .gb_4:hover {
        -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
        box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
    }

    .gb_4:active {
        -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
        background: #3c78dc;
        background: -moz-linear-gradient(top, #3c7ae4, #3f76d3);
        background: linear-gradient(top, #3c7ae4, #3f76d3);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4, endColorstr=#3f76d3, GradientType=0)
    }

    .gb_Fa {
        display: none !important
    }

    .gb_Ha {
        visibility: hidden
    }

    .gb_md {
        display: inline-block;
        vertical-align: middle
    }

    .gb_Vf {
        position: relative
    }

    .gb_D {
        display: inline-block;
        outline: none;
        vertical-align: middle;
        -moz-border-radius: 2px;
        border-radius: 2px;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        height: 40px;
        width: 40px;
        color: #000;
        cursor: pointer;
        text-decoration: none
    }

    #gb#gb a.gb_D {
        color: #000;
        cursor: pointer;
        text-decoration: none
    }

    .gb_4a {
        border-color: transparent;
        border-bottom-color: #fff;
        border-style: dashed dashed solid;
        border-width: 0 8.5px 8.5px;
        display: none;
        position: absolute;
        left: 11.5px;
        top: 43px;
        z-index: 1;
        height: 0;
        width: 0;
        -moz-animation: gb__a .2s;
        animation: gb__a .2s
    }

    .gb_5a {
        border-color: transparent;
        border-style: dashed dashed solid;
        border-width: 0 8.5px 8.5px;
        display: none;
        position: absolute;
        left: 11.5px;
        z-index: 1;
        height: 0;
        width: 0;
        -moz-animation: gb__a .2s;
        animation: gb__a .2s;
        border-bottom-color: #ccc;
        border-bottom-color: rgba(0, 0, 0, .2);
        top: 42px
    }

    x:-o-prefocus,
    div.gb_5a {
        border-bottom-color: #ccc
    }

    .gb_F {
        background: #fff;
        border: 1px solid #ccc;
        border-color: rgba(0, 0, 0, .2);
        color: #000;
        -moz-box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
        display: none;
        outline: none;
        overflow: hidden;
        position: absolute;
        right: 8px;
        top: 62px;
        -moz-animation: gb__a .2s;
        animation: gb__a .2s;
        -moz-border-radius: 2px;
        border-radius: 2px;
        -moz-user-select: text
    }

    .gb_md.gb_na .gb_4a,
    .gb_md.gb_na .gb_5a,
    .gb_md.gb_na .gb_F,
    .gb_na.gb_F {
        display: block
    }

    .gb_md.gb_na.gb_Wf .gb_4a,
    .gb_md.gb_na.gb_Wf .gb_5a {
        display: none
    }

    .gb_Xf {
        position: absolute;
        right: 8px;
        top: 62px;
        z-index: -1
    }

    .gb_Oa .gb_4a,
    .gb_Oa .gb_5a,
    .gb_Oa .gb_F {
        margin-top: -10px
    }

    .gb_md:first-child,
    #gbsfw:first-child+.gb_md {
        padding-left: 4px
    }

    .gb_sa.gb_5e .gb_md:first-child {
        padding-left: 0
    }

    .gb_3c {
        position: relative
    }

    .gb_Rc .gb_3c,
    .gb_ee .gb_3c {
        float: right
    }

    .gb_D {
        padding: 8px;
        cursor: pointer
    }

    .gb_sa .gb_5c:not(.gb_0):focus img {
        background-color: rgba(0, 0, 0, 0.20);
        outline: none;
        -moz-border-radius: 50%;
        border-radius: 50%
    }

    .gb_6e button:focus svg,
    .gb_6e button:hover svg,
    .gb_6e button:active svg,
    .gb_D:focus,
    .gb_D:hover,
    .gb_D:active,
    .gb_D[aria-expanded=true] {
        outline: none;
        -moz-border-radius: 50%;
        border-radius: 50%
    }

    .gb_Ac .gb_6e.gb_7e button:focus svg,
    .gb_Ac .gb_6e.gb_7e button:focus:hover svg,
    .gb_6e button:focus svg,
    .gb_6e button:focus:hover svg,
    .gb_D:focus,
    .gb_D:focus:hover {
        background-color: rgba(60, 64, 67, 0.1)
    }

    .gb_Ac .gb_6e.gb_7e button:active svg,
    .gb_6e button:active svg,
    .gb_D:active {
        background-color: rgba(60, 64, 67, 0.12)
    }

    .gb_Ac .gb_6e.gb_7e button:hover svg,
    .gb_6e button:hover svg,
    .gb_D:hover {
        background-color: rgba(60, 64, 67, 0.08)
    }

    .gb_ia .gb_D.gb_Ra:hover {
        background-color: transparent
    }

    .gb_D[aria-expanded=true],
    .gb_D:hover[aria-expanded=true] {
        background-color: rgba(95, 99, 104, 0.24)
    }

    .gb_D[aria-expanded=true] .gb_8e,
    .gb_D[aria-expanded=true] .gb_9e {
        fill: #5f6368;
        opacity: 1
    }

    .gb_Ac .gb_6e button:hover svg,
    .gb_Ac .gb_D:hover {
        background-color: rgba(232, 234, 237, 0.08)
    }

    .gb_Ac .gb_6e button:focus svg,
    .gb_Ac .gb_6e button:focus:hover svg,
    .gb_Ac .gb_D:focus,
    .gb_Ac .gb_D:focus:hover {
        background-color: rgba(232, 234, 237, 0.10)
    }

    .gb_Ac .gb_6e button:active svg,
    .gb_Ac .gb_D:active {
        background-color: rgba(232, 234, 237, 0.12)
    }

    .gb_Ac .gb_D[aria-expanded=true],
    .gb_Ac .gb_D:hover[aria-expanded=true] {
        background-color: rgba(255, 255, 255, 0.12)
    }

    .gb_Ac .gb_D[aria-expanded=true] .gb_8e,
    .gb_Ac .gb_D[aria-expanded=true] .gb_9e {
        fill: #ffffff;
        opacity: 1
    }

    .gb_md {
        padding: 4px
    }

    .gb_sa.gb_5e .gb_md {
        padding: 4px 2px
    }

    .gb_sa.gb_5e .gb_Sa.gb_md {
        padding-left: 6px
    }

    .gb_F {
        z-index: 991;
        line-height: normal
    }

    .gb_F.gb_af {
        left: 8px;
        right: auto
    }

    @media (max-width:350px) {
        .gb_F.gb_af {
            left: 0
        }
    }

    .gb_bf .gb_F {
        top: 56px
    }

    .gb_C .gb_D,
    .gb_E .gb_C .gb_D {
        background-position: -64px -29px
    }

    .gb_j .gb_C .gb_D {
        background-position: -29px -29px;
        opacity: 1
    }

    .gb_C .gb_D,
    .gb_C .gb_D:hover,
    .gb_C .gb_D:focus {
        opacity: 1
    }

    .gb_Xd {
        display: none
    }

    .gb_6c {
        font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        font-size: 20px;
        font-weight: 400;
        letter-spacing: .25px;
        line-height: 48px;
        margin-bottom: 2px;
        opacity: 1;
        overflow: hidden;
        padding-left: 16px;
        position: relative;
        text-overflow: ellipsis;
        vertical-align: middle;
        top: 2px;
        white-space: nowrap;
        flex: 1 1 auto
    }

    .gb_6c.gb_7c {
        color: #3c4043
    }

    .gb_sa.gb_ta .gb_6c {
        margin-bottom: 0
    }

    .gb_8c.gb_9c .gb_6c {
        padding-left: 4px
    }

    .gb_sa.gb_ta .gb_ad {
        position: relative;
        top: -2px
    }

    .gb_sa {
        color: black;
        min-width: 320px;
        position: relative;
        -moz-transition: box-shadow 250ms;
        transition: box-shadow 250ms
    }

    .gb_sa.gb_Jc {
        min-width: 240px
    }

    .gb_sa.gb_Zd .gb_1c {
        display: none
    }

    .gb_sa.gb_Zd .gb_0d {
        height: 56px
    }

    header.gb_sa {
        display: block
    }

    .gb_sa svg {
        fill: currentColor
    }

    .gb_1d {
        position: fixed;
        top: 0;
        width: 100%
    }

    .gb_2d {
        -moz-box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2)
    }

    .gb_3d {
        height: 64px
    }

    .gb_sa:not(.gb_Mc) .gb_cd.gb_dd:not(.gb_4d):not(.gb_5d),
    .gb_sa:not(.gb_Mc) .gb_Td:not(.gb_4d):not(.gb_5d),
    .gb_sa.gb_6d .gb_cd.gb_dd.gb_4d,
    .gb_sa.gb_6d .gb_Td.gb_4d,
    .gb_sa.gb_6d .gb_cd.gb_dd.gb_5d,
    .gb_sa.gb_6d .gb_Td.gb_5d {
        display: none !important
    }

    .gb_0d {
        box-sizing: border-box;
        position: relative;
        width: 100%;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        justify-content: space-between;
        min-width: -webkit-min-content;
        min-width: -moz-min-content;
        min-width: -ms-min-content;
        min-width: min-content
    }

    .gb_sa:not(.gb_ta) .gb_0d {
        padding: 8px
    }

    .gb_sa.gb_7d .gb_0d {
        flex: 1 0 auto
    }

    .gb_sa .gb_0d.gb_8d.gb_9d {
        min-width: 0
    }

    .gb_sa.gb_ta .gb_0d {
        padding: 4px;
        padding-left: 8px;
        min-width: 0
    }

    .gb_1c {
        height: 48px;
        vertical-align: middle;
        white-space: nowrap;
        -moz-box-align: center;
        align-items: center;
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -moz-user-select: -moz-none
    }

    .gb_be>.gb_1c {
        display: table-cell;
        width: 100%
    }

    .gb_8c {
        padding-right: 30px;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        flex: 1 0 auto
    }

    .gb_sa.gb_ta .gb_8c {
        padding-right: 14px
    }

    .gb_ce {
        flex: 1 1 100%
    }

    .gb_ce>:only-child {
        display: inline-block
    }

    .gb_2c.gb_Sc {
        padding-left: 4px
    }

    .gb_2c.gb_de,
    .gb_sa.gb_7d .gb_2c,
    .gb_sa.gb_ta:not(.gb_ee) .gb_2c {
        padding-left: 0
    }

    .gb_sa.gb_ta .gb_2c.gb_de {
        padding-right: 0
    }

    .gb_sa.gb_ta .gb_2c.gb_de .gb_ia {
        margin-left: 10px
    }

    .gb_Sc {
        display: inline
    }

    .gb_sa.gb_Mc .gb_2c.gb_fe {
        padding-left: 2px
    }

    .gb_6c {
        display: inline-block
    }

    .gb_2c {
        box-sizing: border-box;
        height: 48px;
        line-height: normal;
        padding: 0 4px;
        padding-left: 30px;
        flex: 0 0 auto;
        justify-content: flex-end
    }

    .gb_ee {
        height: 48px
    }

    .gb_sa.gb_ee {
        min-width: initial;
        min-width: auto
    }

    .gb_ee .gb_2c {
        float: right;
        padding-left: 32px
    }

    .gb_ee .gb_2c.gb_ge {
        padding-left: 0
    }

    .gb_he {
        font-size: 14px;
        max-width: 200px;
        overflow: hidden;
        padding: 0 12px;
        text-overflow: ellipsis;
        white-space: nowrap;
        -moz-user-select: text
    }

    .gb_ie {
        transition: background-color .4s
    }

    .gb_je {
        color: black
    }

    .gb_Ac {
        color: white
    }

    .gb_sa a,
    .gb_Fc a {
        color: inherit
    }

    .gb_t {
        color: rgba(0, 0, 0, 0.87)
    }

    .gb_sa svg,
    .gb_Fc svg,
    .gb_8c .gb_ke,
    .gb_Rc .gb_ke {
        color: #5f6368;
        opacity: 1
    }

    .gb_Ac svg,
    .gb_Fc.gb_Kc svg,
    .gb_Ac .gb_8c .gb_ke,
    .gb_Ac .gb_8c .gb_zc,
    .gb_Ac .gb_8c .gb_ad,
    .gb_Fc.gb_Kc .gb_ke {
        color: rgba(255, 255, 255, .87)
    }

    .gb_Ac .gb_8c .gb_ua:not(.gb_le) {
        opacity: .87
    }

    .gb_7c {
        color: inherit;
        opacity: 1;
        text-rendering: optimizeLegibility;
        -moz-osx-font-smoothing: grayscale
    }

    .gb_Ac .gb_7c,
    .gb_je .gb_7c {
        opacity: 1
    }

    .gb_me {
        position: relative
    }

    .gb_ne {
        font-family: arial, sans-serif;
        line-height: normal;
        padding-right: 15px
    }

    a.gb_g,
    span.gb_g {
        color: rgba(0, 0, 0, 0.87);
        text-decoration: none
    }

    .gb_Ac a.gb_g,
    .gb_Ac span.gb_g {
        color: white
    }

    a.gb_g:hover,
    a.gb_g:focus {
        opacity: .85;
        text-decoration: underline
    }

    .gb_h {
        display: inline-block;
        padding-left: 15px
    }

    .gb_h .gb_g {
        display: inline-block;
        line-height: 24px;
        outline: none;
        vertical-align: middle
    }

    .gb_oe {
        font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: .25px;
        line-height: 16px;
        margin-left: 10px;
        margin-right: 8px;
        min-width: 96px;
        padding: 9px 23px;
        text-align: center;
        vertical-align: middle;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .gb_sa.gb_ee .gb_oe {
        margin-left: 8px
    }

    #gb a.gb_4.gb_4.gb_oe,
    #gb a.gb_3.gb_3.gb_oe {
        cursor: pointer
    }

    .gb_4.gb_oe:hover {
        background: #2b7de9;
        -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
        box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
    }

    .gb_4.gb_oe:focus,
    .gb_4.gb_oe:hover:focus {
        background: #5094ed;
        -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
        box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
    }

    .gb_4.gb_oe:active {
        background: #63a0ef;
        -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
        box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
    }

    .gb_oe:not(.gb_3) {
        background: #1a73e8;
        border: 1px solid transparent
    }

    .gb_sa.gb_ta .gb_oe {
        padding: 9px 15px;
        min-width: 80px
    }

    #gb a.gb_4.gb_ja.gb_oe,
    #gb a.gb_oe.gb_3 {
        background: #ffffff;
        border-color: #dadce0;
        -moz-box-shadow: none;
        box-shadow: none;
        color: #1a73e8
    }

    #gb a.gb_4.gb_ja.gb_oe:hover,
    #gb a.gb_oe.gb_3:hover {
        background: #f8fbff;
        border-color: #cce0fc
    }

    #gb a.gb_4.gb_ja.gb_oe:focus,
    #gb a.gb_4.gb_ja.gb_oe:focus:hover,
    #gb a.gb_oe.gb_3:focus,
    #gb a.gb_oe.gb_3:focus:hover {
        background: #f4f8ff;
        border-color: #c9ddfc
    }

    #gb a.gb_4.gb_ja.gb_oe:active,
    #gb a.gb_oe.gb_3:active {
        background: #ecf3fe
    }

    #gb a.gb_4.gb_ja.gb_oe:active {
        -moz-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 2px 6px 2px rgba(0, 0, 0, 0.15);
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 2px 6px 2px rgba(0, 0, 0, 0.15)
    }

    #gb a.gb_oe.gb_3:not(.gb_ja):active {
        -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15)
    }

    .gb_ia {
        background-color: rgba(255, 255, 255, 0.88);
        border: 1px solid #dadce0;
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block;
        max-height: 48px;
        overflow: hidden;
        outline: none;
        padding: 0;
        vertical-align: middle;
        width: 134px;
        -moz-border-radius: 8px;
        border-radius: 8px
    }

    .gb_ia.gb_ja {
        background-color: transparent;
        border: 1px solid #5f6368
    }

    .gb_ka {
        width: 115px
    }

    .gb_la {
        display: inherit
    }

    .gb_la.gb_ja {
        background: #ffffff;
        -moz-border-radius: 4px;
        border-radius: 4px;
        display: inline-block;
        left: 8px;
        margin-right: 5px;
        position: relative;
        padding: 3px;
        top: -1px
    }

    .gb_la.gb_ma.gb_ja {
        left: 6px;
        margin-right: 2px
    }

    .gb_ia:hover {
        border: 1px solid #d2e3fc;
        background-color: rgba(248, 250, 255, 0.88)
    }

    .gb_ia.gb_ja:hover {
        border: 1px solid #5f6368;
        background-color: rgba(232, 234, 237, 0.08)
    }

    .gb_ia:focus {
        border: 1px solid #fff;
        background-color: rgba(255, 255, 255);
        -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15);
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
    }

    .gb_ia.gb_ja:focus {
        border: 1px solid #e8eaed;
        background-color: #38383b
    }

    .gb_ia.gb_ja:active,
    .gb_ia.gb_na.gb_ja:focus {
        border: 1px solid #5f6368;
        background-color: #333438
    }

    .gb_oa {
        display: inline-block;
        padding-left: 7px;
        padding-bottom: 2px;
        text-align: center;
        vertical-align: middle;
        line-height: 32px;
        width: 78px
    }

    .gb_oa.gb_ja {
        line-height: 26px;
        width: 72px
    }

    .gb_oa.gb_pa.gb_ja {
        line-height: 30px;
        width: 57px
    }

    .gb_oa.gb_pa {
        line-height: 40px;
        width: 59px
    }

    .gb_oa.gb_ja {
        padding-left: 0;
        padding-bottom: 0
    }

    .gb_oa.gb_qa {
        background-color: #f1f3f4;
        -moz-border-radius: 4px;
        border-radius: 4px;
        margin-left: 8px;
        padding-left: 0
    }

    .gb_oa.gb_qa .gb_ra {
        vertical-align: middle
    }

    .gb_sa:not(.gb_ta) .gb_ia {
        margin-left: 10px;
        margin-right: 4px
    }

    .gb_ia .gb_ra.gb_ua {
        min-width: 0
    }

    .gb_va {
        max-height: 32px;
        width: 78px
    }

    .gb_pa>.gb_va {
        max-height: 40px;
        width: 96px
    }

    .gb_va.gb_ja {
        max-height: 26px;
        width: 72px
    }

    .gb_pa>.gb_va.gb_ja {
        max-height: 30px;
        width: 88px
    }

    .gb_Ia {
        background-size: 32px 32px;
        -moz-border-radius: 50%;
        border-radius: 50%;
        display: block;
        margin: 0;
        overflow: hidden;
        position: relative;
        height: 32px;
        width: 32px;
        z-index: 0
    }

    .gb_Ja {
        background-color: #e8f0fe;
        border: 1px solid rgba(32, 33, 36, .08);
        position: relative
    }

    .gb_Ja.gb_Ia {
        height: 30px;
        width: 30px
    }

    .gb_Ja.gb_Ia:hover,
    .gb_Ja.gb_Ia:active {
        -moz-box-shadow: none;
        box-shadow: none
    }

    .gb_Ka {
        background: #fff;
        border: none;
        -moz-border-radius: 50%;
        border-radius: 50%;
        bottom: 2px;
        -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
        height: 14px;
        margin: 2px;
        position: absolute;
        right: 0;
        width: 14px
    }

    .gb_La {
        color: #1f71e7;
        font: 400 22px/32px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        text-align: center;
        text-transform: uppercase
    }

    @media (min-resolution:1.25dppx),
    (-o-min-device-pixel-ratio:5/4),
    (-webkit-min-device-pixel-ratio:1.25),
    (min-device-pixel-ratio:1.25) {
        .gb_Ia::before {
            display: inline-block;
            -moz-transform: scale(.5);
            transform: scale(.5);
            -moz-transform-origin: left 0;
            transform-origin: left 0
        }

        .gb_Ma::before {
            display: inline-block;
            -moz-transform: scale(.5);
            transform: scale(.5);
            -moz-transform-origin: left 0;
            transform-origin: left 0
        }

        .gb_l .gb_Ma::before {
            -moz-transform: scale(0.416666667);
            transform: scale(0.416666667)
        }
    }

    .gb_Ia:hover,
    .gb_Ia:focus {
        -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
        box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
    }

    .gb_Ia:active {
        -moz-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15)
    }

    .gb_Ia:active::after {
        background: rgba(0, 0, 0, .1);
        -moz-border-radius: 50%;
        border-radius: 50%;
        content: '';
        display: block;
        height: 100%
    }

    .gb_Na {
        cursor: pointer;
        line-height: 40px;
        min-width: 30px;
        opacity: .75;
        overflow: hidden;
        vertical-align: middle;
        text-overflow: ellipsis
    }

    .gb_D.gb_Na {
        width: auto
    }

    .gb_Na:hover,
    .gb_Na:focus {
        opacity: .85
    }

    .gb_Oa .gb_Na,
    .gb_Oa .gb_Pa {
        line-height: 26px
    }

    #gb#gb.gb_Oa a.gb_Na,
    .gb_Oa .gb_Pa {
        font-size: 11px;
        height: auto
    }

    .gb_Qa {
        border-top: 4px solid #000;
        border-left: 4px dashed transparent;
        border-right: 4px dashed transparent;
        display: inline-block;
        margin-left: 6px;
        opacity: .75;
        vertical-align: middle
    }

    .gb_Ra:hover .gb_Qa {
        opacity: .85
    }

    .gb_ia>.gb_Sa {
        padding: 3px 3px 3px 4px
    }

    .gb_Ta.gb_Ha {
        color: #fff
    }

    .gb_j .gb_Na,
    .gb_j .gb_Qa {
        opacity: 1
    }

    #gb#gb.gb_j.gb_j a.gb_Na,
    #gb#gb .gb_j.gb_j a.gb_Na {
        color: #fff
    }

    .gb_j.gb_j .gb_Qa {
        border-top-color: #fff;
        opacity: 1
    }

    .gb_E .gb_Ia:hover,
    .gb_j .gb_Ia:hover,
    .gb_E .gb_Ia:focus,
    .gb_j .gb_Ia:focus {
        -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2);
        box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2)
    }

    .gb_Ua .gb_Sa,
    .gb_Va .gb_Sa {
        position: absolute;
        right: 1px
    }

    .gb_Sa.gb_i,
    .gb_Wa.gb_i,
    .gb_Ra.gb_i {
        flex: 0 1 auto;
        flex: 0 1 main-size
    }

    .gb_Xa.gb_Za .gb_Na {
        width: 30px !important
    }

    .gb_0a.gb_Ha {
        display: none
    }

    .gb_1a {
        height: 40px;
        position: absolute;
        right: -5px;
        top: -5px;
        width: 40px
    }

    .gb_2a .gb_1a,
    .gb_3a .gb_1a {
        right: 0;
        top: 0
    }

    .gb_Sa .gb_D {
        padding: 4px
    }

    .gb_qe {
        display: none
    }

    .gb_bd {
        display: none
    }

    .gb_bd.gb_na {
        display: block
    }

    .gb_cd {
        background-color: #fff;
        -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.08);
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.08);
        color: #000;
        position: relative;
        z-index: 986
    }

    .gb_dd {
        height: 40px;
        padding: 16px 24px;
        white-space: nowrap
    }

    .gb_ed {
        position: fixed;
        bottom: 16px;
        padding: 16px;
        right: 16px;
        white-space: normal;
        width: 328px;
        transition: width .2s, bottom .2s, right .2s;
        -moz-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
        box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12)
    }

    @media (max-width:400px) {
        .gb_cd.gb_ed {
            max-width: 368px;
            width: auto;
            bottom: 0;
            right: 0
        }
    }

    .gb_cd .gb_5c {
        border: 0;
        font-weight: 500;
        font-size: 14px;
        line-height: 36px;
        min-width: 32px;
        padding: 0 16px;
        vertical-align: middle
    }

    .gb_cd .gb_5c:before {
        content: '';
        height: 6px;
        left: 0;
        position: absolute;
        top: -6px;
        width: 100%
    }

    .gb_cd .gb_5c:after {
        bottom: -6px;
        content: '';
        height: 6px;
        left: 0;
        position: absolute;
        width: 100%
    }

    .gb_cd .gb_5c+.gb_5c {
        margin-left: 8px
    }

    .gb_fd {
        height: 48px;
        padding: 4px;
        margin: -8px 0 0 -8px
    }

    .gb_ed .gb_fd {
        float: left;
        margin: -4px
    }

    .gb_gd {
        font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        overflow: hidden;
        vertical-align: top
    }

    .gb_dd .gb_gd {
        display: inline-block;
        padding-left: 8px;
        width: 640px
    }

    .gb_ed .gb_gd {
        display: block;
        margin-left: 56px;
        padding-bottom: 16px
    }

    .gb_hd {
        background-color: inherit
    }

    .gb_dd .gb_hd {
        display: inline-block;
        position: absolute;
        top: 18px;
        right: 24px
    }

    .gb_ed .gb_hd {
        text-align: right;
        padding-right: 24px;
        padding-top: 6px
    }

    .gb_hd .gb_id {
        height: 1.5em;
        margin: -.25em 10px -.25em 0;
        vertical-align: text-top;
        width: 1.5em
    }

    .gb_jd {
        line-height: 20px;
        font-size: 16px;
        font-weight: 700;
        color: rgba(0, 0, 0, .87)
    }

    .gb_ed .gb_jd {
        color: rgba(0, 0, 0, .87);
        font-size: 16px;
        line-height: 20px;
        padding-top: 8px
    }

    .gb_dd .gb_jd,
    .gb_dd .gb_kd {
        width: 640px
    }

    .gb_kd .gb_ld,
    .gb_kd {
        line-height: 20px;
        font-size: 13px;
        font-weight: 400;
        color: rgba(0, 0, 0, .54)
    }

    .gb_ed .gb_kd .gb_ld {
        font-size: 14px
    }

    .gb_ed .gb_kd {
        padding-top: 12px
    }

    .gb_ed .gb_kd a {
        color: rgba(66, 133, 244, 1)
    }

    .gb_md.gb_nd {
        padding: 0
    }

    .gb_nd .gb_F {
        background: #ffffff;
        border: solid 1px transparent;
        -moz-border-radius: 8px;
        border-radius: 8px;
        box-sizing: border-box;
        padding: 16px;
        right: 16px;
        top: 72px;
        -moz-box-shadow: 0 1px 2px 0 rgba(65, 69, 73, 0.3), 0 3px 6px 2px rgba(65, 69, 73, 0.15);
        box-shadow: 0 1px 2px 0 rgba(65, 69, 73, 0.3), 0 3px 6px 2px rgba(65, 69, 73, 0.15)
    }

    a.gb_od {
        color: #5f6368 !important;
        font-size: 22px;
        height: 24px;
        opacity: 1;
        padding: 8px;
        position: absolute;
        right: 8px;
        top: 8px;
        text-decoration: none !important;
        width: 24px
    }

    a.gb_od:focus,
    a.gb_od:active,
    a.gb_od:focus:hover {
        background-color: #e8eaed;
        -moz-border-radius: 50%;
        border-radius: 50%;
        outline: none
    }

    a.gb_od:hover {
        background-color: #f1f3f4;
        -moz-border-radius: 50%;
        border-radius: 50%;
        outline: none
    }

    svg.gb_pd {
        fill: #5f6368;
        opacity: 1
    }

    .gb_qd {
        padding: 0;
        white-space: normal;
        display: table
    }

    .gb_rd {
        line-height: normal;
        font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif
    }

    .gb_nd .gb_4:active {
        outline: none;
        -moz-box-shadow: 0 4px 5px rgba(0, 0, 0, .16);
        box-shadow: 0 4px 5px rgba(0, 0, 0, .16)
    }

    .gb_0.gb_sd.gb_td {
        -moz-border-radius: 4px;
        border-radius: 4px;
        box-sizing: border-box;
        cursor: pointer;
        height: 34px;
        font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: .25px;
        line-height: 16px;
        min-width: 70px;
        outline: none;
        padding: 8px 6px;
        text-transform: none;
        -moz-osx-font-smoothing: grayscale
    }

    .gb_0.gb_ud.gb_td {
        -moz-border-radius: 4px;
        border-radius: 4px;
        box-sizing: border-box;
        cursor: pointer;
        height: 34px;
        color: #5f6368;
        font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: .25px;
        line-height: 16px;
        min-width: 70px;
        outline: none;
        padding: 8px 6px;
        text-transform: none;
        -moz-osx-font-smoothing: grayscale
    }

    .gb_0.gb_sd.gb_td {
        background: white;
        border: 1px solid #dadce0;
        color: #1a73e8;
        margin-top: 21px
    }

    .gb_0.gb_sd.gb_td:hover {
        background-color: rgba(26, 115, 232, 0.04)
    }

    .gb_0.gb_sd.gb_td:focus,
    .gb_0.gb_sd.gb_td:focus:hover {
        background-color: rgba(26, 115, 232, 0.12);
        border: solid 1px #1a73e8
    }

    .gb_0.gb_sd.gb_td:active {
        background-color: rgba(26, 115, 232, 0.1);
        border-color: transparent
    }

    .gb_0.gb_ud:hover {
        background-color: #f8f9fa
    }

    .gb_0.gb_ud:focus,
    .gb_0.gb_ud:hover:focus {
        background-color: #f1f3f4;
        border-color: transparent
    }

    .gb_0.gb_ud:active {
        background-color: #f1f3f4;
        -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15);
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
    }

    .gb_ld {
        color: #5f6368;
        font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        font-size: 14px;
        letter-spacing: .25px;
        line-height: 20px;
        margin: 0;
        margin-bottom: 5px
    }

    .gb_vd {
        text-align: right;
        font-size: 14px;
        padding-bottom: 0;
        white-space: nowrap
    }

    .gb_vd .gb_wd,
    .gb_vd .gb_xd {
        margin-left: 12px;
        text-transform: none
    }

    a.gb_4.gb_wd:hover {
        background-color: #2b7de9;
        border-color: transparent;
        -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
        box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
    }

    a.gb_4.gb_wd:focus,
    a.gb_4.gb_wd:hover:focus {
        background-color: #5094ed;
        border-color: transparent;
        -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
        box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
    }

    a.gb_4.gb_wd:active {
        background-color: #63a0ef;
        -moz-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
        box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
    }

    .gb_vd .gb_wd.gb_yd {
        padding-left: 6px;
        padding-right: 14px
    }

    .gb_vd .gb_td.gb_wd img {
        background-color: inherit;
        -moz-border-radius: initial;
        border-radius: initial;
        height: 18px;
        margin: 0 8px 0 4px;
        vertical-align: text-top;
        width: 18px
    }

    .gb_zd .gb_qd .gb_Ad .gb_td {
        border: 2px solid transparent
    }

    .gb_qd .gb_Ad .gb_td:focus:after,
    .gb_qd .gb_Ad .gb_td:hover:after {
        background-color: transparent
    }

    .gb_rd {
        background-color: #404040;
        color: #fff;
        padding: 16px;
        position: absolute;
        top: 62px;
        min-width: 328px;
        max-width: 650px;
        right: 8px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4);
        box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4)
    }

    .gb_rd a,
    .gb_rd a:visited {
        color: #5e97f6;
        text-decoration: none
    }

    .gb_Bd {
        text-transform: uppercase
    }

    .gb_Cd {
        padding-left: 50px
    }

    .gb_Dd {
        color: #3c4043;
        font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: .1px;
        line-height: 20px;
        margin: 0;
        margin-bottom: 12px
    }

    .gb_ld a.gb_Fd {
        text-decoration: none;
        color: #5e97f6
    }

    .gb_ld a.gb_Fd:visited {
        color: #5e97f6
    }

    .gb_ld a.gb_Fd:hover,
    .gb_ld a.gb_Fd:active {
        text-decoration: underline
    }

    .gb_Hd {
        position: absolute;
        background: transparent;
        top: -999px;
        z-index: -1;
        visibility: hidden;
        margin-top: 1px;
        margin-left: 1px
    }

    #gb .gb_nd {
        margin: 0
    }

    .gb_nd .gb_5c {
        background: #4d90fe;
        border: 2px solid transparent;
        box-sizing: border-box;
        font-weight: 500;
        margin-top: 21px;
        min-width: 70px;
        text-align: center;
        -moz-osx-font-smoothing: grayscale
    }

    .gb_nd a.gb_4 {
        background: #1a73e8;
        -moz-border-radius: 4px;
        border-radius: 4px;
        color: #ffffff;
        font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: .25px;
        line-height: 16px;
        padding: 8px 22px;
        -moz-osx-font-smoothing: grayscale
    }

    .gb_nd a.gb_4.gb_Id {
        background: #d93025
    }

    .gb_nd a.gb_4.gb_Id:hover {
        background-color: #cc3127
    }

    .gb_nd a.gb_4.gb_Id:focus,
    .gb_nd a.gb_4.gb_Id:focus:hover {
        background-color: #b3332c
    }

    .gb_nd a.gb_4.gb_Id:active,
    .gb_nd a.gb_4.gb_Id:focus:active {
        background-color: #a6342e
    }

    .gb_nd.gb_Jd a.gb_4 {
        float: right
    }

    #gb .gb_nd a.gb_5c.gb_5c {
        color: #ffffff;
        cursor: pointer
    }

    .gb_nd .gb_5c:hover {
        background: #357ae8;
        border-color: #2f5bb7
    }

    .gb_Kd,
    .gb_Ad {
        display: table-cell
    }

    .gb_Kd {
        vertical-align: middle
    }

    .gb_Kd img {
        height: 48px;
        padding-left: 4px;
        padding-right: 20px;
        width: 48px
    }

    .gb_Ad {
        padding-left: 13px;
        width: 100%
    }

    .gb_nd .gb_Ad {
        padding-top: 4px;
        min-width: 326px;
        padding-left: 0;
        width: 326px
    }

    .gb_nd.gb_Ld .gb_Ad {
        min-width: 254px;
        width: 254px
    }

    .gb_nd.gb_Jd .gb_Ad {
        padding-top: 32px
    }

    .gb_Md {
        display: block;
        display: inline-block;
        padding: 1em 0 0 0;
        position: relative;
        width: 100%
    }

    .gb_Nd {
        color: #ff0000;
        font-style: italic;
        margin: 0;
        padding-left: 46px
    }

    .gb_Md .gb_Od {
        float: right;
        margin: -20px 0;
        width: -moz-calc(100% - 46px);
        width: calc(100% - 46px)
    }

    .gb_Pd svg {
        fill: grey
    }

    .gb_Pd.gb_Qd svg {
        fill: #4285f4
    }

    .gb_Md .gb_Od label:after {
        background-color: #4285f4
    }

    .gb_Pd {
        display: inline;
        float: right;
        margin-right: 22px;
        position: relative;
        top: 2px
    }

    .gb_Td {
        color: #ffffff;
        font-size: 13px;
        font-weight: bold;
        height: 25px;
        line-height: 19px;
        padding-top: 5px;
        padding-left: 12px;
        position: relative;
        background-color: #4d90fe
    }

    .gb_Td .gb_Ud {
        color: #ffffff;
        cursor: default;
        font-size: 22px;
        font-weight: normal;
        position: absolute;
        right: 12px;
        top: 5px
    }

    .gb_Td .gb_wd,
    .gb_Td .gb_ud {
        color: #ffffff;
        display: inline-block;
        font-size: 11px;
        margin-left: 16px;
        padding: 0 8px;
        white-space: nowrap
    }

    .gb_Vd {
        background: none;
        background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
        background-image: linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
        background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
        -moz-border-radius: 2px;
        border-radius: 2px;
        border: 1px solid #dcdcdc;
        border: 1px solid rgba(0, 0, 0, 0.1);
        cursor: default !important;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#160000ff, endColorstr=#220000ff);
        text-decoration: none !important
    }

    .gb_Vd:hover {
        background: none;
        background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
        background-image: linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
        background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#14000000, endColorstr=#22000000)
    }

    .gb_Vd:active {
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3)
    }

    .gb_sa .gb_0 {
        color: #4285f4
    }

    .gb_sa .gb_1 {
        color: #fff
    }

    .gb_sa .gb_5c:not(.gb_3e):focus {
        outline: none
    }

    sentinel {}

    .gbii::before {
        content: url(https://lh3.googleusercontent.com/ogw/default-user=s32)
    }

    .gbip::before {
        content: url(https://lh3.googleusercontent.com/ogw/default-user=s83)
    }

    @media (min-resolution:1.25dppx),
    (-o-min-device-pixel-ratio:5/4),
    (-webkit-min-device-pixel-ratio:1.25),
    (min-device-pixel-ratio:1.25) {
        .gbii::before {
            content: url(https://lh3.googleusercontent.com/ogw/default-user=s64)
        }

        .gbip::before {
            content: url(https://lh3.googleusercontent.com/ogw/default-user=s192)
        }
    }
    </style>
    <script async="" type="text/javascript" charset="UTF-8" src="f_files/rsAA2YrTtIx4AGwpQDxM6vn71h3JMTrEy9Vw"
        nonce="8XnhrYTqYOBvABL6KLUTvA=="></script>
    <link type="text/css" rel="stylesheet" ref="f_files/rsAA2YrTvo3vJwXv_zaZfCc1aKUBBrgkA8_w.css">
    <link crossorigin="use-credentials" rel="prefetch"
        ref="https://ogs.google.com/widget/app/so?origin=https%3A%2F%2Fwww.google.com&amp;pid=1&amp;spid=1&amp;hl=en&amp;gm=">
</head>

<body jsmodel="jivSc TvHxbe" class="srp tbo vasq" jscontroller="aCZVp" jsaction="rcuQ6b:npT2md;tbSCpf:.CLIENT" id="gsr"
    topmargin="3" marginheight="3">
    <div id="cst">
        <style>
        .z1asCe {
            display: inline-block;
            fill: currentColor;
            height: 24px;
            line-height: 24px;
            position: relative;
            width: 24px
        }

        .z1asCe svg {
            display: block;
            height: 100%;
            width: 100%
        }

        .iUh30 {
            font-size: 14px;
            padding-top: 1px;
            line-height: 1.3
        }

        #rhs .bc {
            font-size: 14px;
            line-height: 1.58
        }

        .hJND5c,
        .dhIWPd {
            display: block;
        }

        .f,
        .f a:link {
            color: #70757a
        }

        .a,
        cite,
        cite a:link,
        cite a:visited,
        .cite,
        .cite:link,
        #nygTcd>i,
        .bc a:link {
            color: #202124;
            font-style: normal
        }

        a.fl:link,
        .fl a,
        .flt,
        a.flt,
        .gl a:link {
            color: #1a0dab
        }

        .r a.fl {
            font-size: 14px
        }

        #rso .hJND5c {
            height: 18px;
            line-height: 16px
        }

        #rcnt a:hover,
        #brs a:hover {
            text-decoration: underline
        }

        #rcnt [role=button]:hover,
        #rcnt .kno-fb-ctx>a:hover,
        #rcnt a.kpbb:hover,
        #rcnt a.a-no-hover-decoration:hover,
        #brs a.a-no-hover-decoration:hover {
            text-decoration: none
        }

        .dPAwzb,
        .dPAwzb a {
            font-size: 18px;
            line-height: 1.3;
        }

        .rc {
            position: relative
        }

        .Jb0Zif .oQWFCf {
            margin: 16px 16px -11px
        }

        a:hover h3 {
            text-decoration: underline
        }

        .r {
            font-size: small
        }

        .r {
            line-height: 1.58
        }

        .gl:visited {
            color: #666
        }

        .rc .s {
            line-height: 1.58
        }

        .tVOupd {
            display: inline
        }

        .jD79hf {
            margin-right: 12px;
            vertical-align: middle
        }

        .osl {
            margin-top: 0px;
            color: #70757a;
        }

        .osl a {
            text-decoration: none;
            line-height: 1.58;
        }

        .osl a:hover {
            text-decoration: none
        }

        .khgTR {
            border-bottom: 1px solid #ebebeb;
            display: block;
            line-height: 22px;
            margin: 0px -16px 9px -16px;
            padding: 0 16px 11px 16px
        }

        .khgTR .f.hJND5c {
            margin-top: 0px;
            overflow: hidden;
            white-space: nowrap
        }

        .khgTR.QEhTP {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0
        }

        .khgTR.lWEpfd {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0
        }

        .uZfOAb {
            clear: both;
            padding-top: 6px
        }

        .jtDWfd {
            margin-left: -10px;
            margin-right: -10px
        }

        .gpeho {
            margin-left: -10px;
            margin-right: -10px;
            padding: 12px 0 5px
        }

        .tTfzVd {
            padding-top: 9px
        }

        .pb0Ufd {
            border-radius: 4px;
            border: 1px solid rgba(0, 0, 0, .12);
            font-size: 14px;
            line-height: 16px;
            margin-left: 10px;
            padding: 7px 8px;
            display: inline-block;
            text-align: center
        }

        .pb0Ufd:last-child {
            margin-right: 24px
        }

        .tcPEUc .jD79hf {
            display: none
        }

        .P1usbc {
            display: table;
            white-space: nowrap;
            margin: 5px 0;
            line-height: 1.58;
            color: #70757a
        }

        .G1Rrjc {
            display: table-cell;
            padding-left: 15px;
            vertical-align: baseline
        }

        .i4vd5e {
            display: table-cell
        }

        .VNLkW {
            display: table-row;
            vertical-align: top
        }

        .h7mcFf {
            color: #999
        }

        .TXwUJf {
            color: #70757a
        }

        .PcHvNb {
            position: absolute
        }

        .N3nEGc {
            background-color: #fff;
            float: left;
            margin-top: 4px
        }

        .wEQKyf.N3nEGc {
            float: right;
            margin: 7px 0 5px 12px
        }

        .Ixi80c {
            margin-top: 0px
        }

        .i0PvJb {
            background-color: #000
        }

        .mWTy7c {
            border-top-left-radius: 2px;
            bottom: 0;
            font-size: 11px;
            font-weight: bold;
            padding: 1px 3px;
            position: absolute;
            right: 0;
            text-align: right;
            text-decoration: none;
            background-color: rgba(0, 0, 0, .7);
            color: #fff
        }

        .rGhul {
            display: block;
            position: relative;
            overflow: hidden
        }

        .rGhul:focus {
            outline-style: solid;
            outline-width: 2px
        }

        .TbwUpd a.fl {
            font-size: 14px
        }

        .TbwUpd.rLwn0d {
            overflow: hidden;
            text-overflow: ellipsis
        }

        .TbwUpd {
            display: inline-block
        }

        .TbwUpd {
            line-height: 1.58
        }

        .H89pHb {
            margin-right: 6px
        }

        .NRRPPb {
            color: #ffa500
        }

        .st sup {
            line-height: 0.9
        }

        .mOd06 em {
            font-weight: bold !important
        }

        #hdtb {
            color: #666;
            font-size: 13px;
            border-bottom: 1px solid #ebebeb;
            margin-top: -21px;
            outline-width: 0;
            outline: none;
            position: relative;
            z-index: 126
        }

        #hdtb.hdtba {
            border-bottom: none
        }

        .hdtb-mitem a,
        #hdtb-more-mn a {
            padding: 0 12px;
            color: #5f6368;
            text-decoration: none;
            display: block
        }

        .hdtb-mitem {
            height: 16px;
            line-height: 16px;
            margin: 11px 1px 0
        }

        .hdtb-mitem.hdtb-msel,
        .hdtb-mitem a {
            padding: 16px 12px 12px 10px
        }

        .HF9Klc {
            margin-right: 5px;
            vertical-align: text-bottom
        }

        .hdtb-mitem a.sqXXR {
            padding-left: 6px
        }

        .hdtbItm label:hover,
        .hdtbItm a:hover,
        #hdtb-more-mn a:hover,
        .hdtb-mn-hd:hover,
        #hdtb-more:hover,
        #hdtb-tls:hover {
            color: #1A73E8
        }

        #hdtb.notl a,
        #hdtb.notl div,
        #hdtb.notl li {
            outline-width: 0;
            outline: none
        }

        #hdtb .hdtb-mitem a:active,
        #hdtb-more:active,
        .hdtb-mn-hd:active {
            color: #1A73E8
        }

        .hdtb-dd-mn a,
        .hdtb-dd-mn a:visited,
        .hdtb-dd-mn a:active {
            color: inherit;
            display: block;
            text-decoration: none
        }

        .more-vert {
            vertical-align: text-bottom
        }

        #hdtb-more-mn a:hover,
        .hdtbItm.hdtbSel:hover,
        .hdtbItm a:hover,
        #cdrlnk:hover {
            background-color: #f1f1f1
        }

        .hdtbItm.hdtbSel,
        #hdtb .hdtbItm a,
        #hdtb-more-mn a,
        #cdrlnk {
            color: #5f6368;
            text-decoration: none;
            padding: 6px 44px 6px 30px;
            line-height: 17px;
            display: block
        }

        .hdtb-mitem a {
            display: inline-block
        }

        #hdtb-more-mn a {
            display: block;
            padding: 6px 16px;
            margin: 0
        }

        #hdtb-more-mn {
            min-width: 120px
        }

        #hdtbMenus {
            background-color: transparent;
            top: 0;
            width: 100%;
            height: 22px;
            position: absolute;
            transition: top 220ms ease-in-out;
            transition: top 220ms ease-in-out;
        }

        .hdtb-td-h {
            display: none
        }

        #hdtbMenus.hdtb-td-o {
            top: 58px;
            padding-top: 3px;
            padding-bottom: 7px;
            top: 0
        }

        body.vasq #hdtbMenus.hdtb-td-o {
            top: 68px
        }

        #hdtb.hdtba #hdtbMenus {
            top: 21px
        }

        body.vasq #hdtb.hdtba #hdtbMenus.hdtb-td-o {
            top: 58px
        }

        #hdtb.hdtba #hdtbMenus {
            background-color: #fafafa;
            border-bottom: 1px solid #ebebeb;
            padding: 7px 0px
        }

        #botabar {
            transition: margin-top 220ms ease-in-out;
            transition: margin-top 220ms ease-in-out
        }

        #hdtbMenus.hdtb-td-c {}

        #hdtbSum {
            background: #fff;
            height: 58px;
            padding: 0;
            position: relative;
            z-index: 126
        }

        .hdtb-mn-o,
        .hdtb-mn-c {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2);
            color: #333;
            position: absolute;
            line-height: 17px;
            padding-top: 5px;
            padding-bottom: 5px;
            top: 36px;
            z-index: 126
        }

        .hdtb-mn-c {
            display: none
        }

        #hdtb-msb {
            float: left;
            position: relative;
            white-space: nowrap;
            align-items: baseline;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            min-width: 832px
        }

        #hdtb-msb-vis {
            display: inline;
            margin-left: 169px
        }

        #hdtb-msb .hdtb-mitem {
            display: inline-block
        }

        #hdtb-more-mn .hdtb-mitem {
            display: block
        }

        #hdtb-msb .hdtb-mitem.hdtb-msel {
            border-bottom: 3px solid #1A73E8;
            color: #1A73E8;
        }

        #hdtb.hdtba #hdtb-msb .hdtb-mitem.hdtb-msel {
            border-bottom: none
        }

        #hdtb-msb .hdtb-mitem.hdtb-msel:hover {
            cursor: pointer
        }

        #hdtb-msb .hdtb-mitem.hdtb-msel:active {
            background: none
        }

        #hdtb .hdtb-mitem a {
            color: #5f6368
        }

        #hdtb-msb #hdtb-more,
        #hdtb-msb #hdtb-tls {
            color: #5f6368
        }

        #hdtb-tls {
            text-decoration: none
        }

        #hdtb-more {
            display: inline-block;
            padding: 0 12px;
            position: relative;
            tap-highlight-color: rgba(255, 255, 255, 0)
        }

        #hdtb-more:hover {
            cursor: pointer
        }

        .hdtb-mitem .mcolor {
            display: inline-block;
            width: 40px;
            height: 10px;
            margin-left: -13px;
            margin-right: -13px
        }

        #hdtb-msb .hdtb-mitem.hdtb-imb.mlinesep {
            width: 0px;
            margin-left: 8px;
            margin-right: 8px;
            padding: 0px;
            border-left: 1px solid rgba(0, 0, 0, .12)
        }

        .mn-hd-txt {
            display: inline-block;
            padding-right: 6px;
            white-space: nowrap
        }

        .mn-dwn-arw {
            border-color: #70757a transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            width: 0;
            height: 0;
            margin-left: -2px;
            top: 50%;
            margin-top: -2px;
            position: absolute
        }

        .hdtb-mn-hd:hover .mn-dwn-arw,
        #hdtb-more:hover .mn-dwn-arw {
            border-color: #222 transparent
        }

        .hdtb-mn-hd:active .mn-dwn-arw,
        #hdtb-more:active .mn-dwn-arw {
            border-color: #1A73E8 transparent
        }

        .hdtb-tl {
            border: 1px solid transparent;
            display: inline-block;
            text-align: center;
            border-radius: 2px;
            line-height: 19px;
            cursor: pointer;
            margin-left: -1px;
            padding: 4px 11px
        }

        #hdtb-msb .hdtb-tl-sel,
        #hdtb-msb .hdtb-tl-sel:hover {
            background: -moz-linear-gradient(top, #eee, #e0e0e0);
            -moz-box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .1);
            border: 1px solid #d7d7d7;
            box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .1);
        }

        #hdtb #hdtb-tls:active {
            color: #000
        }

        .mn-hd-txt>.simg_thmb {
            display: none
        }

        .mn-hd-txt .mn-col {
            width: 14px;
            height: 14px;
            border: 1px solid #ccc;
            display: inline-block;
            margin-top: 7px
        }

        #hdtb-tls:hover {
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
            -moz-transition: all 0.0s;
            transition: all 0.0s
        }

        #hdtb-tls:hover {
            background-color: #f8f8f8;
            background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
            background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
            border: 1px solid #c6c6c6;
            color: #222;
        }

        #hdtb-tls:active {
            background-color: #f6f6f6;
            background-image: -moz-linear-gradient(top, #f6f6f6, #f1f1f1);
            background-image: linear-gradient(top, #f6f6f6, #f1f1f1);
            -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
        }

        #hdtb-msb>.hdtb-mitem:first-child {
            margin-left: 180px
        }

        body.vasq #hdtbSum {
            height: 58px
        }

        body.vasq #hdtb-msb .hdtb-mitem.hdtb-msel {}

        body.vasq .hdtb-mn-o,
        body.vasq .hdtb-mn-c {
            top: 38px
        }

        #top_nav {
            -moz-user-select: none;
            min-width: 1173px
        }

        .GHDvEf,
        .GHDvEf:hover,
        .GHDvEf.selected,
        .GHDvEf.selected:hover {
            display: inline-block;
            background-color: #fff;
            height: 12px;
            margin-top: 1px;
            user-select: none;
            width: 13px
        }

        .action-menu .mn-dwn-arw {
            border-color: #202124 transparent;
            margin-top: -3px;
            margin-left: 3px;
            left: 0;
            border-color: #70757a transparent
        }

        .action-menu {
            display: inline;
            margin: 0 3px;
            position: relative;
            user-select: none;
            margin-top: 1px;
            vertical-align: middle
        }

        .action-menu-panel {
            padding: 6px 0;
            position: absolute;
            left: 0;
            padding: 0;
            top: 12px;
            visibility: hidden;
            background: #fff;
            border: 1px solid #dcdcdc;
            border: 1px solid rgba(0, 0, 0, .2);
            font-size: 13px;
            white-space: nowrap;
            z-index: 3;
            transition: opacity 0.218s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .2)
        }

        .action-menu-item {
            cursor: pointer;
            user-select: none
        }

        .action-menu-item:hover {
            background-color: #eee
        }

        #rcnt .action-menu-item a.fl,
        .action-menu-item a.fl {
            color: #333;
            display: block;
            padding: 7px 18px;
            text-decoration: none;
            outline: 0
        }

        .action-menu-panel:focus,
        .action-menu-item:focus,
        .action-menu-item a:focus {
            outline: none
        }

        .action-menu-item {
            margin: 0;
            padding: 0;
            -moz-user-select: none;
        }

        .action-menu-item.selected {
            background-color: #eee
        }

        .GXZmWe {
            background-color: rgba(0, 0, 0, .07);
            border-width: 0;
            color: rgba(0, 0, 0, .07);
            height: 1px
        }

        .GXZmWe {
            margin: 28px -8px 28px -8px
        }

        .tqS43.GXZmWe {
            margin-top: 34px
        }

        .vk_c a {
            text-decoration: none
        }

        .vk_gn {
            color: #3d9400 !important
        }

        .vk_rd {
            color: #dd4b39 !important
        }

        .bTuXH {
            color: #545454 !important
        }

        .vk_gy {
            color: #878787 !important
        }

        .vk_lgy {
            color: #bababa !important
        }

        .vk_bk {
            color: #212121 !important
        }

        .dDoNo {
            font-weight: lighter !important;
            margin-bottom: 5px
        }

        .dDoNo {
            font-size: xx-large !important
        }

        .vk_h {
            font-weight: lighter !important
        }

        .vk_h {
            font-size: x-large !important
        }

        .vk_sh {
            font-weight: lighter !important
        }

        .vk_sh {
            font-size: medium !important
        }

        .Uekwlc {
            font-weight: lighter !important
        }

        .Uekwlc {
            font-size: 14px
        }

        .p13zmc {
            font-weight: lighter !important
        }

        .vk_cdns {
            font-size: 13px !important
        }

        .cYvRhe {
            font-weight: bold !important
        }

        .vk_c,
        .vk_cxp,
        #rhs .fIcnad {
            border-radius: 8px;
            border: 1px solid #dfe1e5;
            box-shadow: none
        }

        #rhs .fIcnad {
            border: none;
            margin-left: 0
        }

        .vk_c,
        .vk_cxp {
            background-color: #fff;
            position: relative
        }

        .vkc_np {
            margin-left: -16px;
            margin-right: -16px
        }

        .WIDPrb,
        .ts .WIDPrb {
            padding-left: 16px
        }

        .iiFzhd,
        .ts .iiFzhd {
            padding-right: 16px
        }

        .vk_pt,
        .ts .vk_pt {
            padding-top: 20px
        }

        .QiLuMc {
            padding-bottom: 20px
        }

        .vk_c {
            width: 618px
        }

        .vk_c,
        .vk_cxp {
            padding: 20px 16px 24px 16px
        }

        .vk_c .vk_c,
        .vk_c .vk_cxp {
            border-radius: 0;
            box-shadow: none;
            background-color: transparent;
            border: 0;
            box-shadow: none;
            margin: 0;
            padding: 0;
            position: static
        }

        .vk_cxp {
            padding-top: 30px;
            padding-bottom: 34px
        }

        .vk_c_cxp {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .vk_gbb {
            border-bottom: 1px solid #eee
        }

        .vk_gbr {
            border-right: 1px solid #eee
        }

        .vk_gbt {
            border-top: 1px solid #eee
        }

        .vk_slic {
            display: inline-block;
            margin-top: -3px;
            margin-right: 16px;
            position: relative;
            height: 24px;
            width: 24px;
            vertical-align: middle
        }

        .vk_sli,
        .vk_slih {
            border: none;
            position: absolute;
            top: 0;
            left: 0;
            height: 24px;
            width: 24px
        }

        a:hover .vk_sli,
        .vk_slih {
            display: none
        }

        a:hover .vk_slih,
        .vk_sli {
            display: inline-block
        }

        .vk_spc {
            height: 16px;
            width: 100%
        }

        .vk_arc {
            border-top: 1px solid #ebebeb;
            cursor: pointer;
            height: 0px;
            margin-bottom: -19px;
            overflow: hidden;
            padding: 20px 0;
            text-align: center
        }

        .vk_ard {
            top: -11px
        }

        .vk_aru {
            bottom: -6px
        }

        .vk_ard,
        .vk_aru {
            background-color: #e5e5e5;
            margin-left: auto;
            margin-right: auto;
            position: relative
        }

        .vk_ard,
        .vk_aru {
            height: 6px;
            width: 64px
        }

        .vk_ard:after,
        .vk_ard:before,
        .vk_aru:after,
        .vk_aru:before {
            content: ' ';
            height: 0;
            left: 0;
            position: absolute;
            width: 0
        }

        .vk_ard:after,
        .vk_ard:before,
        .vk_aru:after,
        .vk_aru:before {
            border-left: 32px solid rgba(229, 229, 229, 0);
            border-right: 32px solid rgba(229, 229, 229, 0)
        }

        .vk_ard:before {
            border-top: 16px solid #e5e5e5;
            top: 6px
        }

        .vk_aru:before {
            border-bottom: 16px solid #e5e5e5;
            bottom: 6px
        }

        .vk_ard:after {
            top: 0
        }

        .vk_ard:after {
            border-top: 16px solid #fff
        }

        .vk_aru:after {
            bottom: 0
        }

        .vk_aru:after {
            border-bottom: 16px solid #fff
        }

        .vk_bk.vk_ard,
        .vk_bk.vk_aru {
            background-color: #212121
        }

        .vk_bk.vk_ard:before {
            border-top-color: #212121
        }

        .vk_bk.vk_aru:before {
            border-bottom-color: #212121
        }

        .di8g3 {
            font-size: 11px !important;
            padding: 6px 8px
        }

        #center_col .di8g3 {
            margin: 0 -35px 0 -8px;
            padding: 6px 20px 0
        }

        #rhs .di8g3 {
            margin-left: 2px;
            padding-bottom: 5px;
            padding-top: 5px
        }

        .di8g3,
        .di8g3 a {
            color: #878787 !important;
            text-decoration: none
        }

        .di8g3 a:hover {
            text-decoration: underline
        }

        .hntNk.vk_c {
            padding-top: 24px;
            padding-bottom: 20px
        }

        .hntNk .dDoNo {
            margin-bottom: 0;
            word-wrap: break-word
        }

        .hntNk .vk_gy {
            margin-bottom: 5px
        }

        .pVFdhc {
            background-color: #ebebeb;
            height: 1px
        }

        .vk_tbl {
            border-collapse: collapse
        }

        .vk_tbl td {
            padding: 0
        }

        .xpdclps,
        .xpdxpnd {
            overflow: hidden
        }

        .xpdclps,
        .xpdxpnd {
            transition: max-height 0.3s
        }

        .xpdxpnd,
        .xpdopen .xpdclps,
        .xpdopen .xpdxpnd.xpdnoxpnd {
            max-height: 0
        }

        .xpdopen .xpdxpnd {
            max-height: none
        }

        .xpdopen .xpdbox .xpdxpnd,
        .xpdopen .xpdbox.xpdopen .xpdclps {
            max-height: 0
        }

        .xpdopen .xpdbox.xpdopen .xpdxpnd,
        .xpdopen .xpdbox .xpdclps {
            max-height: none
        }

        .xpdclose .k5nfEc {
            display: none
        }

        .bNg8Rb {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            margin: 0;
            overflow: hidden;
            padding: 0;
            position: absolute;
            white-space: nowrap;
            width: 1px;
            z-index: -1000
        }
        </style>
    </div><noscript>
        <style>
        .nojsv {
            visibility: visible
        }
        </style>
    </noscript>
    <div>
        <h1 class="bNg8Rb">Accessibility links</h1>
        <div jscontroller="r36a9c" class="wYq63b">
            <style>
            .wYq63b {
                display: flex;
                left: 0;
                position: absolute;
                top: 0;
                z-index: 1001
            }

            .S6VXfe {
                align-items: center;
                background-color: #fff;
                border-radius: 0 2px 2px 0;
                box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .16), 0 0 0 1px rgba(0, 0, 0, .08);
                display: flex;
                margin: 80px auto 8px 0;
                overflow: hidden
            }

            .gyPpGe,
            .gyPpGe:visited,
            .qlVNAd {
                border: 2px solid rgba(0, 0, 0, .16);
                border-radius: 2px;
                color: #2228af;
                cursor: pointer;
                display: inline-block;
                font-size: 14px;
                line-height: 20px;
                margin: 6px 11px;
                min-height: 32px;
                text-decoration: underline;
                text-align: center;
                width: 106px
            }

            .gyPpGe:not(:focus) {
                clip: rect(1px, 1px, 1px, 1px);
                overflow: hidden;
                position: absolute;
                padding: 0
            }
            </style>
            <div class="S6VXfe"><a jsname="BKxS1e" class="gyPpGe" role="link" tabindex="0" jsaction="i3viod"
                    data-ved="0ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ67oDCAQ">Skip to main content</a><a jsname="KI37ad"
                    class="gyPpGe" ref="https://support.google.com/websearch/answer/181196?hl=en-IN"
                    onmousedown="return rwt(this,'','','','','AOvVaw26r2_fCGW-RHG6syjlap5r','','0ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQwcMDCAU','','',event)">Accessibility
                    help</a>
                <div
                    data-async-context="async_id:duf3-78;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:78">
                    <style>
                    a.duf3 {
                        color: #70757a;
                        float: right;
                        font-style: italic;
                        tap-highlight-color: rgba(0, 0, 0, 0);
                        tap-highlight-color: rgba(0, 0, 0, 0)
                    }

                    a.aciXEb {
                        padding: 0 5px;
                    }

                    .RTZ84b {
                        color: #9e9e9e;
                        cursor: pointer;
                        padding-right: 8px
                    }

                    .XEKxtf {
                        color: #9e9e9e;
                        float: right;
                        font-size: 12px;
                        line-height: 1.34;
                        padding-bottom: 4px
                    }
                    </style>
                    <div jscontroller="xz7cCd" style="display:none" jsaction="rcuQ6b:npT2md"></div>
                    <div id="duf3-78" data-jiis="up" data-async-type="duffy3"
                        data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                        class="y yp" data-ved="0ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ-0EIBg"></div><a jsname="JUypV"
                        class="gyPpGe" data-async-trigger="duf3-78" role="link" tabindex="0"
                        jsaction="async.u">Accessibility feedback</a>
                </div>
            </div>
        </div>
    </div><noscript>
        <meta
            content="0;url=/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;gbv=1&amp;sei=yKLUXqeaC8XC3LUP2rau2A4"
            http-equiv="refresh">
        <style>
        table,
        div,
        span,
        p {
            display: none
        }
        </style>
        <div style="display:block">Please click <a
                ref="/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;gbv=1&amp;sei=yKLUXqeaC8XC3LUP2rau2A4">here</a>
            if you are not redirected within a few seconds.</div>
    </noscript>
    <style>
    .A8SBwf {
        position: relative;
        margin: 0 auto;
        margin-left: 133px;
        width: 692px;
        padding-left: 27px;
    }

    .RNNXgb {
        background: #fff;
        display: flex;
        border: 1px solid #dfe1e5;
        box-shadow: none;
        height: 39px;
        width: 690px;
        border-radius: 24px;
        z-index: 3;
        height: 44px;
        margin: 0 auto;
    }

    .emcav .RNNXgb {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        border-color: rgba(223, 225, 229, 0);
        box-shadow: 0 1px 6px 0 rgba(32, 33, 36, 0.28)
    }

    .RNNXgb:hover,
    .sbfc .RNNXgb {
        box-shadow: 0 1px 6px 0 rgba(32, 33, 36, 0.28);
        border-color: rgba(223, 225, 229, 0)
    }

    .SDkEP {
        flex: 1;
        display: flex;
        padding: 5px 4px 0 16px;
        padding-left: 14px;
    }

    .logo {
        position: absolute;
        left: -139px;
        padding: 4px 28px 0 30px;
        top: 4px
    }

    .sbfc .iblpc,
    .emcav .iblpc {
        padding-right: 14px;
        margin-left: -1px
    }

    .iblpc span {
        display: none
    }

    .sbfc .iblpc span,
    .emcav .iblpc span {
        display: block
    }

    .sbfc.A8SBwf,
    .emcav.A8SBwf {
        padding-left: 0;
        width: 719px
    }

    .sbfc .RNNXgb,
    .emcav .RNNXgb {
        width: 717px
    }

    .iblpc {
        display: flex;
        align-items: center;
        padding-right: 6px;
        margin-top: -7px
    }

    #logo {
        display: block;
        overflow: hidden;
        position: relative
    }

    #logo img {
        border: 0;
    }

    .hsuHs {
        margin: auto
    }

    .wFncld {
        color: #9AA0A6;
        height: 20px;
        width: 20px
    }

    .gLFyf {
        background-color: transparent;
        border: none;
        margin: 0;
        padding: 0;
        color: rgba(0, 0, 0, .87);
        word-wrap: break-word;
        outline: none;
        display: flex;
        flex: 100%;
        tap-highlight-color: transparent;
        margin-top: -37px;
        height: 34px;
        font-size: 16px
    }

    .a4bIc {
        display: flex;
        flex: 1;
        flex-wrap: wrap
    }

    .pR49Ae {
        color: transparent;
        flex: 100%;
        white-space: pre;
        height: 34px
    }

    .pR49Ae span {
        background: url("/images/experiments/wavy-underline.png") repeat-x scroll 0 100% transparent;
        padding: 0 0 10px 0;
    }

    .dRYYxd {
        display: flex;
        flex: 0 0 auto;
        margin-top: -5px;
        align-items: stretch;
        flex-direction: row
    }

    .clear-button {
        flex: 1 0 auto;
        display: none;
        cursor: pointer;
        align-items: center;
        border: 0;
        background: transparent;
        outline: none;
        padding: 0 8px;
        line-height: 44px
    }

    .XoaYSb {
        display: flex
    }

    .lBbtTb {
        height: 100%;
        color: #80868b;
        vertical-align: middle;
        outline: none
    }

    .Tg7LZd {
        height: 44px;
        width: 44px;
        background: transparent;
        border: none;
        cursor: pointer;
        flex: 0 0 auto;
        padding: 0
    }

    .Tg7LZd {
        flex: 0 0 auto;
        padding-right: 13px
    }

    html:not(.zAoYTe) .Tg7LZd:focus {
        outline: none
    }

    .FAuhyb {
        background: none;
        color: #4285f4;
        height: 24px;
        width: 24px;
        margin: auto
    }

    .UUbT9 {
        position: absolute;
        width: 100%;
        text-align: left;
        margin-top: -1px;
        z-index: 989;
        cursor: default;
        user-select: none
    }

    .aajZCb {
        background: #fff;
        display: flex;
        flex-direction: column;
        list-style-type: none;
        margin: 0;
        padding: 0;
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(0, 0, 0, 0.08);
        border: 0;
        border-radius: 0 0 24px 24px;
        box-shadow: 0 4px 6px 0 rgba(32, 33, 36, 0.28);
        padding-bottom: 4px;
        overflow: hidden
    }

    .erkvQe {
        flex: auto;
        padding-bottom: 16px
    }

    .RjPuVb {
        height: 1px;
        margin: 0 26px 0 0
    }

    .S3nFnd .RjPuVb,
    .S3nFnd .aajZCb {
        flex: 0 0 auto
    }

    .xtSCL {
        border-top: 1px solid #e8eaed;
        margin: 0 14px;
        padding-bottom: 4px
    }

    #ynRric {
        display: none
    }

    .ynRric {
        list-style-type: none;
        flex-direction: column;
        color: #80868b;
        font-family: arial, sans-serif;
        font-size: 14px;
        letter-spacing: 0.75px;
        margin: 0 20px 0 16px;
        padding: 8px 0 8px 0;
        line-height: 16px
    }

    #sbt {
        display: none
    }

    .sbct {
        display: flex;
        align-items: center;
        min-width: 0;
        max-height: none;
        padding: 0
    }

    .jKWzZXdEJWi__suggestions-inner-container {
        flex: auto;
        display: flex;
        margin: 0 20px;
        align-items: center;
        margin: 0 20px 0 14px
    }

    .sbtc {
        display: flex;
        flex: auto;
        flex-direction: column;
        min-width: 0;
        max-height: none;
        padding: 6px 0
    }

    .sbic {
        display: flex;
        flex: 0 1 auto;
        align-items: center;
        margin-right: 14px
    }

    .sbl1 {
        display: flex;
        font-size: 16px;
        color: #212121;
        flex: auto;
        align-items: center;
        word-break: break-all;
        padding-right: 8px
    }

    .sbl1>span {
        flex: auto
    }

    .sbab {
        display: flex;
        flex: 0 1 auto;
        align-self: stretch
    }

    .JUypV {
        font-size: 8pt;
        margin-top: -16px;
        position: absolute;
        right: 16px
    }
    </style>
   
<div id="cl" style="margin-top:2%"></div>

<div class=" big big" id="">
  <div class="gb_sa gb_ee gb_2a gb_Mc" id="gb">
      <div class="gb_2c gb_Xa gb_1c" data-ogsr-up="">
          <div class="gb_3c">
              <div class="gb_Sc">
                  <div class="gb_C gb_md gb_i gb_Wf" data-ogsr-fb="true" data-ogsr-alt="" id="gbwa">
                      <div class="gb_Vf">
                          <a class="gb_D" aria-label="Google apps"
                              ref="https://www.google.co.in/intl/en/about/products?tab=wh" aria-expanded="false"
                              role="button" tabindex="0">
                              <svg class="gb_8e" focusable="false" viewBox="0 0 24 24">
                                  <path
                                      d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                                  </path>
                              </svg>
                          </a>
                      </div>
                  </div>
              </div><a class="gb_4 gb_5 gb_oe gb_5c"
                  ref="https://accounts.google.com/ServiceLogin?hl=en&amp;passive=true&amp;continue=https://www.google.com/search%3Fclient%3Dfirefox-b-d%26q%3Ddoes%2Bnorton%2Bstop%2Bhacker"
                  target="_top">Sign in</a>
          </div>
          <div
              style="overflow: hidden; position: absolute; top: 0px; visibility: hidden; width: 340px; z-index: 991; height: 468px; margin-top: 57px; right: 0px; margin-right: 4px; transition: height 0.3s ease-in-out 0s;">
          </div>
          <div
              style="overflow: hidden; position: absolute; top: 0px; visibility: hidden; width: 340px; z-index: 991; height: 468px; margin-top: 57px; right: 0px; margin-right: 4px; transition: height 0.3s ease-in-out 0s;">
              <iframe role="presentation" frameborder="0" scrolling="no"
                  src="https://ogs.google.com/widget/app/so?origin=http%3A%2F%2Flocalhost&amp;pid=1&amp;spid=1&amp;hl=en&amp;gm="
                  style="height: 100%; width: 100%; visibility: hidden;"></iframe></div>
      </div>
  </div>
  <div class="sfbg nojsv" style="margin-top:-20px">
      <div class="sfbgg"></div>
  </div>
  <form class="tsf nj" action="index.php" id="sf" method="GET">

      <div>
          <div class="A8SBwf" jsdata="LVplcb;_;"
              jsaction="lX6RWd:w3Wsmc;DkpM0b:d3sQLd;IQOavd:dFyQEf;XzZZPe:jI3wzf;Aghsf:AVsnlb;iHd9U:Q7Cnrc;f5hEHe:G0jgYd;vmxUb:j3bJnb;R2c5O:LuRugf;R3Yrj:DURTdb;qiCkJd:ANdidc;NOg9L:HLgh3;uGoIkd:epUokb;zLdLw:eaGBS;rcuQ6b:npT2md">
              <div class="logo">
                  <a ref="https://www.google.com/webhp?hl=en&amp;sa=X&amp;ved=0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8QPAgH"
                      title="Go to Google Home" id="logo" data-hveid="7">
                      <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"
                          alt="Google" data-atf="1" width="92" height="30">
                  </a>
              </div>
              <div class="RNNXgb" jsname="RNNXgb">
                  <div class="SDkEP">
                      <div class="iblpc" jsname="uFMOof">
                          <div class="hsuHs"><span class="wFncld z1asCe MZy1Rb"><svg focusable="false"
                                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path
                                          d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                      </path>
                                  </svg></span>
                          </div>
                      </div>
                      <div  class="a4bIc" 
                          >
                          <div class="pR49Ae gsfi" ></div>
                          <input class="gLFyf gsfi" maxlength="2048" name="search" type="text" aria-haspopup="false" autocapitalize="off"
                              autocomplete="off" autocorrect="off" role="combobox" spellcheck="false"
                              title="Search" value="<?php if(!empty($_GET['search'])){echo $_GET['search'];}?>"
                              aria-label="Search" >
                      </div>
                      <div class="dRYYxd">
                          <div aria-label="Clear" role="button">
                              <span onclick="res()" class="lBbtTb z1asCe rzyADb" jsname="itVqKe" tabindex="0"
                                  aria-label="Clear">
                                  <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                      <path
                                          d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                      </path>
                                  </svg></span>
                          </div>
                      </div>
                  </div>
                  <button class="Tg7LZd" jsname="Tg7LZd" aria-label="Google Search" name="submit" type="submit"
                      data-ved="0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q4dUDCAs">
                      <div class="FAuhyb"> <span class="z1asCe MZy1Rb"><svg focusable="false"
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                  <path
                                      d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                  </path>
                              </svg></span>
                      </div>
                  </button>
              </div>
              <div class="UUbT9" style="display:none">
                  <div class="RjPuVb" jsname="RjPuVb"></div>
                  <div class="aajZCb" jsname="aajZCb">
                      <div class="xtSCL"></div>
                      <ul class="erkvQe" jsname="erkvQe" role="listbox"></ul>
                      <li class="ynRric" id="ynRric" role="presentation"></li>
                      <li data-view-type="1" class="sbct" id="sbt" role="presentation">
                          <div class="jKWzZXdEJWi__suggestions-inner-container">
                              <div class="sbic"></div>
                              <div class="sbtc" role="option">
                                  <div class="sbl1"><span></span>
                                  </div>
                              </div>
                              <div class="sbab">
                                  <div class="sbai">Remove</div>
                              </div>
                          </div>
                      </li>
                  </div>
                  <div jsname="JUypV" jscontroller="IvlUe" class="JUypV"
                      data-async-context="async_id:duf3-46;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:46">
                      <div jscontroller="xz7cCd" style="display:none" jsaction="rcuQ6b:npT2md"></div>
                      <div id="duf3-46" data-jiis="up" data-async-type="duffy3"
                          data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                          class="y yp" data-ved="0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Q-0EIDA"></div><a
                          class="duf3 aciXEb" ref="#" id="sbfblt" data-async-trigger="duf3-46" jsaction="async.u"
                          data-ved="0ahUKEwjcnJqVktzpAhUtyTgGHd61BF8Qtw8IDQ">Report inappropriate predictions</a>
                  </div>
              </div>
          </div>
          <div style="background:url(/images/searchbox/desktop_searchbox_sprites302_hr.webp)"></div>
      </div>
  </form>
</div>
    <div class="sfbgx"></div>
    <div id="gac_scont"></div>
    <div id="main">
        <div id="easter-egg"></div><span class="kpshf line gsr bilit" style="display:none"></span>
        <div id="cnt" class=" big">
            <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
            (function() {
                var j = 1280;
                try {
                    var a = document.getElementById("cnt"),
                        b = document.getElementById("searchform"),
                        c = "";
                    if (window.gbar && gbar.elr) {
                        var d = gbar.elr().mo;
                        c = "md" == d ? " mdm" : "lg" == d ? " big" : ""
                    } else {
                        var e = document.body && document.body.offsetWidth;
                        e && e >= j && (c = " big")
                    }
                    a && (a.className += c);
                    b && (b.className += c)
                } catch (f) {
                    google.ml(f, !1, {
                        elr: !0
                    })
                };
            })();
            </script>
           
            <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
            (function() {
                google.tick("load", "sct");
            }).call(this);
            </script>
            <div id="dc"></div>
            <style>
            #hdtb form {
                display: inline
            }

            .hdtbSel,
            .hdtbSel span.q {
                color: #000;
                cursor: default;
                padding-right: 15px;
                text-decoration: none
            }

            .iJddsb {
                display: inline-block;
                fill: currentColor
            }

            .iJddsb img,
            .iJddsb svg {
                display: block;
                height: 100%;
                width: 100%
            }

            .rwUYcf {
                display: inline-block
            }

            .Cq34nf {
                cursor: pointer
            }

            .cF4V5c {
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2);
                margin-top: -4px;
                outline: none;
                padding: 5px 0;
                position: absolute
            }

            a.f9UGee,
            a.f9UGee:visited {
                color: inherit;
                cursor: pointer;
                display: block;
                font-size: 14px;
                line-height: 23px;
                outline: 0;
                padding: 3px 16px;
                text-decoration: inherit;
                white-space: nowrap
            }

            a.f9UGee:hover {
                text-decoration: none
            }

            .il8Sef {
                margin-left: -15px
            }

            .il8Sef a.f9UGee {
                color: #5f6368;
                line-height: 16px;
                padding: 8px 16px
            }

            .f9UGee.AchQod {
                background: rgba(0, 0, 0, .1)
            }

            .pdswFd {
                float: right;
                position: relative;
                z-index: 3;
                right: 17px
            }

            .pdswFd .hdtb-mitem {
                display: inline-block
            }

            .gTMtLb {
                z-index: 1001;
                position: absolute;
                top: -1000px
            }

            .WE0UJf {
                height: 33px;
                margin-left: 180px;
            }

            body.vasq .WE0UJf {
                height: 43px
            }

            #result-stats {
                position: absolute;
                top: 0;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                transition: all 220ms ease-in-out;
                color: #70757a;
                line-height: 33px;
                padding-top: 0;
                padding-bottom: 0;
                padding-right: 8px;
            }

            body.vasq #result-stats {
                line-height: 43px
            }
            </style>
            <div id="top_nav">
                <div jscontroller="qik19b" jsdata="Z1JpA;;By1WBA" jsaction="rcuQ6b:npT2md">
                    <h1 class="bNg8Rb">Search modes</h1>
                    <div class="hdtbna notl" id="hdtb" role="navigation">
                        <div id="hdtbSum">
                            <div id="hdtb-s" style="white-space:nowrap">
                                <div id="hdtb-msb">
                                    <div>
                                        <div id="hdtb-msb-vis">
                                            <div class="hdtb-mitem hdtb-msel hdtb-imb" aria-hidden="true"><span
                                                    class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                        focusable="false" viewBox="0 0 24 24">
                                                        <path d="M10 2v2a6 6 0 0 1 6 6h2a8 8 0 0 0-8-8" fill="#34A853">
                                                        </path>
                                                        <path d="M10 4V2a8 8 0 0 0-8 8h2c0-3.3 2.7-6 6-6"
                                                            fill="#EA4335"></path>
                                                        <path d="M4 10H2a8 8 0 0 0 8 8v-2c-3.3 0-6-2.69-6-6"
                                                            fill="#FBBC04"></path>
                                                        <path
                                                            d="M22 20.59l-5.69-5.69A7.96 7.96 0 0 0 18 10h-2a6 6 0 0 1-6 6v2c1.85 0 3.52-.64 4.88-1.68l5.69 5.69L22 20.59"
                                                            fill="#4285F4"></path>
                                                    </svg></span>All</div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=nws&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ_AUoAXoECBMQAw"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 11h6v2h-6v-2zm-6 6h12v-2H6v2zm0-4h4V7H6v6zm16-7.22v12.44c0 1.54-1.34 2.78-3 2.78H5c-1.64 0-3-1.25-3-2.78V5.78C2 4.26 3.36 3 5 3h14c1.64 0 3 1.25 3 2.78zM19.99 12V5.78c0-.42-.46-.78-1-.78H5c-.54 0-1 .36-1 .78v12.44c0 .42.46.78 1 .78h14c.54 0 1-.36 1-.78V12zM12 9h6V7h-6v2">
                                                            </path>
                                                        </svg></span>News</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=isch&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ_AUoAnoECBMQBA"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M14 13l4 5H6l4-4 1.79 1.78L14 13zm-6.01-2.99A2 2 0 0 0 8 6a2 2 0 0 0-.01 4.01zM22 5v14a3 3 0 0 1-3 2.99H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h14c1.65 0 3 1.36 3 3zm-2.01 0a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-.01h7a1 1 0 0 0 1-1V5">
                                                            </path>
                                                        </svg></span>Images</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=vid&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ_AUoA3oECBMQBQ"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M10 16.5l6-4.5-6-4.5v9zM5 20h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1zm14.5 2H5a3 3 0 0 1-3-3V4.4A2.4 2.4 0 0 1 4.4 2h15.2A2.4 2.4 0 0 1 22 4.4v15.1a2.5 2.5 0 0 1-2.5 2.5">
                                                            </path>
                                                        </svg></span>Videos</a></div>
                                            <div class="hdtb-mitem hdtb-imb"><a class="q qs"
                                                    ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=shop&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ_AUoBHoECBMQBg"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M21.11 2.89A3.02 3.02 0 0 0 18.95 2h-5.8c-.81 0-1.58.31-2.16.89L7.25 6.63 2.9 10.98a3.06 3.06 0 0 0 0 4.32l5.79 5.8a3.05 3.05 0 0 0 4.32.01l8.09-8.1c.58-.58.9-1.34.9-2.16v-5.8c0-.81-.32-1.59-.89-2.16zM20 10.85c0 .28-.12.54-.32.74l-3.73 3.74-4.36 4.36c-.41.41-1.08.41-1.49 0l-2.89-2.9-2.9-2.9a1.06 1.06 0 0 1 0-1.49l8.1-8.1c.2-.2.46-.3.74-.3l5.8-.01A1.05 1.05 0 0 1 20 5.05v5.8zM16 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2">
                                                            </path>
                                                        </svg></span>Shopping</a></div>
                                        </div>
                                        <g-header-menu class="hdtb-mitem rwUYcf" jscontroller="aam1T"
                                            jsaction="rcuQ6b:npT2md" id="ow13" __is_owner="true"><a jsname="LgbsSe"
                                                class="Cq34nf hdtb-dd-b sqXXR" aria-haspopup="true" role="button"
                                                tabindex="0" jsaction="BVg1Q"><span class="more-vert z1asCe SaPW2b"
                                                    style="height:16px;line-height:16px;width:16px"><svg
                                                        focusable="false" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                                        </path>
                                                    </svg></span>More</a>
                                            <div jsname="xl07Ob" class="cF4V5c il8Sef" style="display:none" role="menu"
                                                tabindex="-1" jsaction="keydown:uYT2Vb"
                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ2h8oBXoECBMQBw"
                                                jsowner="ow13"><a class="f9UGee q qs" jsaction="mouseover:sbHm2b"
                                                    role="menuitem" tabindex="-1"
                                                    ref="https://maps.google.com/maps?client=firefox-b-d&amp;q=does+antivirus+stop+hackers&amp;gs_lcp=CgZwc3ktYWIQAzICCAAyBggAEBYQHjIGCAAQFhAeMggIABAWEAoQHjIGCAAQFhAeMgYIABAWEB46BAgAEEdQ7W1Y7W1g9XNoAHABeACAAcIBiAHCAZIBAzAuMZgBAKABAqABAaoBB2d3cy13aXo&amp;uact=5&amp;um=1&amp;ie=UTF-8&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ_AUoAHoECBMQCA"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 16 16">
                                                            <path
                                                                d="M7.503 0c3.09 0 5.502 2.487 5.502 5.427 0 2.337-1.13 3.694-2.26 5.05-.454.528-.906 1.13-1.358 1.734-.452.603-.754 1.508-.98 1.96-.226.452-.377.829-.904.829-.528 0-.678-.377-.905-.83-.226-.451-.527-1.356-.98-1.959-.452-.603-.904-1.206-1.356-1.734C3.132 9.121 2 7.764 2 5.427 2 2.487 4.412 0 7.503 0zm0 1.364c-2.283 0-4.14 1.822-4.14 4.063 0 1.843.86 2.873 1.946 4.177.468.547.942 1.178 1.4 1.79.34.452.596.99.794 1.444.198-.455.453-.992.793-1.445.459-.61.931-1.242 1.413-1.803 1.074-1.29 1.933-2.32 1.933-4.163 0-2.24-1.858-4.063-4.139-4.063zm0 2.734a1.33 1.33 0 11-.001 2.658 1.33 1.33 0 010-2.658">
                                                            </path>
                                                        </svg></span>Maps</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=bks&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ_AUoAXoECBMQCQ"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M18 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm0 18H6V4h2v8l2.5-1.5L13 12V4h5v16">
                                                            </path>
                                                        </svg></span>Books</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    ref="https://www.google.com/flights?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=flm&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ_AUoAnoECBMQCg"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12.98 12.89l-4.03 4.03.42 2.95L8.24 21l-1.87-3.37L3 15.76l1.12-1.12 2.95.42 4.03-4.03L3 6.77l1.5-1.5 10.04 2.32 4.2-4.2a1.32 1.32 0 0 1 1.87 0c.52.52.52 1.36 0 1.87l-4.2 4.2 2.32 10.04-1.5 1.5-4.25-8.11">
                                                            </path>
                                                        </svg></span>Flights</a><a class="f9UGee q qs"
                                                    jsaction="mouseover:sbHm2b" role="menuitem" tabindex="-1"
                                                    ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnms&amp;tbm=fin&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ_AUoA3oECBMQCw"><span
                                                        class="HF9Klc iJddsb" style="height:16px;width:16px"><svg
                                                            focusable="false" viewBox="0 0 24 24">
                                                            <path
                                                                d="M6 15.5l-3 2.94V10h3v5.5zm5-1.84l-1.57-1.34L8 13.64V6h3v7.66zM16 12l-3 3V2h3v10zm2.81-.19L17 10h5v5l-1.79-1.79L13 20.36l-3.47-3.02L5.75 21H3l6.47-6.34L13 17.64l5.81-5.83">
                                                            </path>
                                                        </svg></span>Finance</a></div>
                                        </g-header-menu>
                                    </div>
                                    <div>
                                        <g-header-menu class="hdtb-mitem rwUYcf" jscontroller="aam1T"
                                            jsaction="rcuQ6b:npT2md" id="ow14" __is_owner="true"><a jsname="LgbsSe"
                                                class="Cq34nf hdtb-dd-b" aria-haspopup="true" role="button" tabindex="0"
                                                jsaction="BVg1Q" ref="https://www.google.com/preferences"
                                                id="abar_button_opt">Settings</a>
                                            <div jsname="xl07Ob" class="cF4V5c" style="display:none" role="menu"
                                                tabindex="-1" jsaction="keydown:uYT2Vb"
                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQn_YBKAB6BAgTEAw"
                                                jsowner="ow14"><a
                                                    ref="https://www.google.com/preferences?hl=en&amp;prev=https://www.google.com/search?client%3Dfirefox-b-d%26ei%3Dt6LUXtjsO__Ez7sPida1kAQ%26q%3Ddoes%2Bantivirus%2Bstop%2Bhackers%26oq%3Ddoes%2Bantivirus%2Bstop%2Bhackers%26gs_lcp%3DCgZwc3ktYWIQAzICCAAyBggAEBYQHjIGCAAQFhAeMggIABAWEAoQHjIGCAAQFhAeMgYIABAWEB46BAgAEEdQ7W1Y7W1g9XNoAHABeACAAcIBiAHCAZIBAzAuMZgBAKABAqABAaoBB2d3cy13aXo%26sclient%3Dpsy-ab%26ved%3D0ahUKEwiYpI__gODpAhV_4nMBHQlrDUIQ4dUDCAs%26uact%3D5"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQo_oBegQIExAN">Search
                                                    settings</a><a
                                                    ref="https://www.google.com/preferences?hl=en&amp;prev=https://www.google.com/search?client%3Dfirefox-b-d%26ei%3Dt6LUXtjsO__Ez7sPida1kAQ%26q%3Ddoes%2Bantivirus%2Bstop%2Bhackers%26oq%3Ddoes%2Bantivirus%2Bstop%2Bhackers%26gs_lcp%3DCgZwc3ktYWIQAzICCAAyBggAEBYQHjIGCAAQFhAeMggIABAWEAoQHjIGCAAQFhAeMgYIABAWEB46BAgAEEdQ7W1Y7W1g9XNoAHABeACAAcIBiAHCAZIBAzAuMZgBAKABAqABAaoBB2d3cy13aXo%26sclient%3Dpsy-ab%26ved%3D0ahUKEwiYpI__gODpAhV_4nMBHQlrDUIQ4dUDCAs%26uact%3D5#languages"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQo_oBegQIExAO"><span>Languages</span></a><a
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    ref="https://www.google.com/setprefs?safeui=on&amp;sig=0_HCMgZ-voG4Npwkzo06ZCLwVrdW4%3D&amp;prev=https://www.google.com/search?client%3Dfirefox-b-d%26ei%3Dt6LUXtjsO__Ez7sPida1kAQ%26q%3Ddoes%2Bantivirus%2Bstop%2Bhackers%26oq%3Ddoes%2Bantivirus%2Bstop%2Bhackers%26gs_lcp%3DCgZwc3ktYWIQAzICCAAyBggAEBYQHjIGCAAQFhAeMggIABAWEAoQHjIGCAAQFhAeMgYIABAWEB46BAgAEEdQ7W1Y7W1g9XNoAHABeACAAcIBiAHCAZIBAzAuMZgBAKABAqABAaoBB2d3cy13aXo%26sclient%3Dpsy-ab%26ved%3D0ahUKEwiYpI__gODpAhV_4nMBHQlrDUIQ4dUDCAs%26uact%3D5"
                                                    id="safesearch"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQo_oBegQIExAP">
                                                    <div>Turn on SafeSearch</div>
                                                </a><a
                                                    ref="https://www.google.com/advanced_search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;hl=en"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQo_oBegQIExAQ">Advanced
                                                    search</a><a ref="https://www.google.com/history/optout?hl=en"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQo_oBegQIExAR">Search
                                                    activity</a><a
                                                    ref="https://www.google.com/history/privacyadvisor/search/unauth?utm_source=googlemenu"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQo_oBegQIExAS">Your data
                                                    in Search</a><a
                                                    ref="https://support.google.com/websearch/?source=g&amp;hl=en-IN"
                                                    class="f9UGee" jsaction="mouseover:sbHm2b" role="menuitem"
                                                    tabindex="-1"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQo_oBegQIExAT">Search
                                                    help</a></div>
                                        </g-header-menu><a style="display:" class="hdtb-tl" aria-controls="hdtbMenus"
                                            aria-expanded="false" id="hdtb-tls" role="button" tabindex="0"
                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ2x96BAgTEBQ">Tools</a>
                                    </div>
                                </div>
                                <ol class="pdswFd"></ol>
                            </div>
                        </div>
                        <div class="hdtb-td-c hdtb-td-h" id="hdtbMenus"
                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ3B96BAgTEBU">
                            <div class="hdtb-mn-cont">
                                <div id="XJDHvf"></div>
                                <div class="hdtb-mn-hd" aria-haspopup="true" role="button" tabindex="0"
                                    aria-label="Any time">
                                    <div class="mn-hd-txt">Any time</div><span class="mn-dwn-arw"></span>
                                </div>
                                <ul class="hdtbU hdtb-mn-c">
                                    <li class="hdtbItm hdtbSel" id="qdr_" tabindex="0">Any time</li>
                                    <li class="hdtbItm" id="qdr_h"><a class="q qs"
                                            ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:h&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEBk">Past
                                            hour</a></li>
                                    <li class="hdtbItm" id="qdr_d"><a class="q qs"
                                            ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:d&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEBo">Past
                                            24 hours</a></li>
                                    <li class="hdtbItm" id="qdr_w"><a class="q qs"
                                            ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:w&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEBs">Past
                                            week</a></li>
                                    <li class="hdtbItm" id="qdr_m"><a class="q qs"
                                            ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:m&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEBw">Past
                                            month</a></li>
                                    <li class="hdtbItm" id="qdr_y"><a class="q qs"
                                            ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=qdr:y&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEB0">Past
                                            year</a></li>
                                    <li class="hdtbItm" id="cdr_opt">
                                        <div jscontroller="Uuupec" data-m="true"><span class="q" id="cdrlnk"
                                                tabindex="0" jsaction="EEGHee"
                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEB4">Custom
                                                range...</span>
                                            <div class="n5Ug4b" style="display:none">
                                                <div class="vOvh1b" jsaction="xp3IKd"></div>
                                                <div class="J6UZg">
                                                    <div class="Jy9Ore">Customised date range</div><label
                                                        class="Qtsmnf tmDYm" for="OouJcb">From</label><label
                                                        class="Qtsmnf iWBKNe" for="rzG2be">To</label>
                                                    <div class="Gwgzqd" role="button" tabindex="0" jsaction="xp3IKd">
                                                    </div>
                                                    <div class="NwEGxd">
                                                        <div class="qomYCd"></div>
                                                        <form action="/search" class="T3kYXe" method="get"><input
                                                                name="q" value="does antivirus stop hackers"
                                                                type="hidden"><input name="client" value="firefox-b-d"
                                                                type="hidden"><input name="source" type="hidden"
                                                                value="lnt"><input value="cdr:1,cd_min:x,cd_max:x"
                                                                id="HjtPBb" name="tbs" type="hidden"><input value=""
                                                                name="tbm" type="hidden"><input class="OouJcb ktf mini"
                                                                type="text" autocomplete="off" id="OouJcb" tabindex="0"
                                                                jsaction="focus:daRB0b"><input class="rzG2be ktf mini"
                                                                type="text" autocomplete="off" id="rzG2be" tabindex="0"
                                                                jsaction="focus:daRB0b"><input class="Ru1Ao ksb mini"
                                                                value="Go" tabindex="0" type="submit"
                                                                jsaction="tnv.scf"></form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul><span class="hQKUmb"></span>
                                <div class="hdtb-mn-hd" aria-haspopup="true" role="button" tabindex="0"
                                    aria-label="All results">
                                    <div class="mn-hd-txt">All results</div><span class="mn-dwn-arw"></span>
                                </div>
                                <ul class="hdtbU hdtb-mn-c">
                                    <li class="hdtbItm hdtbSel" id="li_" tabindex="0">All results</li>
                                    <li class="hdtbItm" id="li_1"><a class="q qs"
                                            ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;source=lnt&amp;tbs=li:1&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTECE">Verbatim</a>
                                    </li>
                                </ul><span class="hQKUmb"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="before-appbar"></div>
            <div class="gTMtLb" id="lb"></div>
            <div class="appbar" id="appbar">
                <div id="extabar">
                    <div style="position:relative">
                        <div class="WE0UJf" id="slim_appbar">
                            <div>
                                <div id="result-stats">About 69,60,000 results<nobr> (0.55 seconds)&nbsp;</nobr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mw" id="ucs"></div>
            <div id="atvcap"></div>
            <div class="mw">
                <div id="rcnt" style="clear:both;position:relative;zoom:1">
                    <div id="bcenter">
                        <div class="col" style="width:0"></div>
                    </div>
                    <div class="col" style="width:0">
                        <div id="center_col">
                            <style>
                            .g-blk {
                                position: relative
                            }

                            .kp-blk a {
                                text-decoration: none
                            }

                            .kp-blk .mod:first-child {
                                padding-top: 16px;
                                border-radius: 8px
                            }

                            .kp-blk .match-mod-horizontal-padding,
                            .kp-blk .mod:not(.NFQFxe) {
                                padding-left: 16px;
                                padding-right: 16px;
                            }

                            .kp-blk {
                                box-shadow: none;
                                border: 1px solid #dfe1e5;
                                border-radius: 8px
                            }

                            #center_col .kp-blk {
                                position: relative;
                                width: 652px
                            }

                            .rfli .kp-blk {
                                background: #fff;
                                box-shadow: 0 3px 6px rgba(0, 0, 0, .16), 0 3px 6px rgba(0, 0, 0, .23)
                            }

                            .kp-blk .g:not(.g-blk) {
                                margin: 0
                            }

                            .kp-blk>.vk_arc,
                            .kp-blk>div>.vk_arc {
                                margin: 0
                            }

                            .kp-blk .g {
                                margin-bottom: 0
                            }

                            .knowledge-panel.kp-blk .mod,
                            .c14z5c .mod {
                                line-height: 1.58
                            }

                            .c2xzTb .g,
                            .c2xzTb .rc,
                            .ruTcId .rc {
                                clear: both;
                                padding-bottom: 0
                            }

                            .c2xzTb .mod,
                            .ruTcId .mod {
                                clear: none
                            }

                            .c2xzTb .g,
                            .ruTcId .g,
                            .fm06If .g,
                            .cUnQKe .g,
                            .HanQmf .g {
                                padding-left: 16px;
                                padding-right: 16px
                            }

                            .c2xzTb .g:last-child,
                            .fm06If .g:last-child,
                            .cUnQKe .g:last-child {
                                padding-bottom: 16px
                            }

                            .mod {
                                clear: both
                            }

                            html .kp-blk .xpdclose .LKPcQc,
                            html .kp-blk .xpdopen .viOShc {
                                padding-top: 0
                            }

                            .xpdclose .a84NUc:not(:empty),
                            .xpdopen .CQKTwc:not(:empty) {
                                border-top: solid 1px #ebebeb;
                                border-radius: 0
                            }

                            .xpdclose .oHglmf,
                            .xpdopen .xzPb7d {
                                padding-bottom: 16px
                            }

                            .xpdclose .kp-header .oHglmf,
                            .xpdopen .kp-header .xzPb7d {
                                padding-bottom: 0
                            }

                            .Wnoohf .xpdopen .yp1CPe,
                            .OJXvsb .xpdclose .siXlze {
                                padding-bottom: 16px
                            }

                            .Wnoohf .xpdclose .mod.xsZWvb,
                            .Wnoohf .xpdopen .mod.EfDVh {
                                padding-bottom: 0
                            }

                            .c2xzTb .iq-content-first .oHglmf,
                            .c2xzTb .iq-content-first .xzPb7d {
                                padding-top: 0;
                                padding-bottom: 16px
                            }

                            #rhs .kp-blk .xpdclose .LKPcQc,
                            #rhs .kp-blk .xpdopen .viOShc {
                                padding-top: 0
                            }

                            #rhs .Wnoohf .xpdopen .yp1CPe,
                            #rhs .OJXvsb .xpdclose .siXlze {
                                padding-bottom: 15px
                            }

                            #rhs .Wnoohf .xpdclose .mod.xsZWvb,
                            #rhs .Wnoohf .xpdopen .mod.EfDVh {
                                padding-bottom: 0
                            }

                            #rhs .Wnoohf .xpdclose .mod.xsZWvb.ecRggb,
                            #rhs .Wnoohf .xpdopen .mod.EfDVh.ecRggb,
                            #rhs .kp-blk .ecRggb {
                                padding-bottom: 15px
                            }

                            .ILfuVd {
                                font-size: 16px;
                                line-height: 1.375;
                            }

                            .fm06If .NA6bn,
                            .HSryR .NA6bn,
                            .c2xzTb .ILfuVd.duSGDe,
                            .c2xzTb .NA6bn.c3biWd {
                                font-size: 14px;
                                line-height: 1.58
                            }

                            .c2xzTb {
                                overflow: hidden
                            }

                            .e24Kjd {
                                padding: 0 8px 0 0
                            }

                            .LGOjhe {
                                overflow: hidden;
                                padding-bottom: 20px
                            }

                            .SALvLe .LGOjhe,
                            .Jb0Zif .LGOjhe,
                            .HSryR .LGOjhe,
                            .rhs-osrp .LGOjhe {
                                padding: 0 0 10px;
                                margin: 10px 0 0 0
                            }

                            #res .Jb0Zif .qDOt0b h3,
                            .rhs-osrp .qDOt0b h3 {
                                font-size: 16px;
                                line-height: 1.375
                            }

                            .Jb0Zif .qDOt0b .iUh30,
                            .rhs-osrp .qDOt0b .iUh30 {
                                font-size: 14px;
                                line-height: 1.58
                            }

                            #rhs .desktop-wa-xp-block .kp-blk .mod,
                            #rhs .desktop-wa-xp-block .kp-blk .mod:not(.NFQFxe) {
                                padding: 0
                            }

                            .knowledge-panel .LjTgvd .LGOjhe,
                            .kp-blk .LjTgvd .LGOjhe {
                                margin-left: -16px;
                                margin-right: -16px
                            }

                            a:hover h3.LC20lb {
                                text-decoration: underline
                            }

                            .LC20lb {
                                display: inline-block;
                                line-height: 1.3;
                                margin-bottom: 3px
                            }

                            .DKV0Md {
                                padding-top: 4px;
                            }

                            .TbwUpd {
                                padding-bottom: 1px;
                                padding-top: 1px;
                                -webkit-text-size-adjust: none
                            }

                            .NJjxre {
                                position: absolute;
                                left: 0;
                                top: 0
                            }

                            .eipWBe {
                                color: #5f6368
                            }

                            .rhsvw .TieM1d .tjvcx,
                            .rhs-osrp .tjvcx,
                            .kno-kp .tjvcx,
                            #rhs .ss6qqb .tjvcx {
                                display: inline-block;
                                height: 17px;
                                overflow-y: hidden
                            }

                            .B6fmyf {
                                position: absolute;
                                top: 0;
                                height: 0;
                                visibility: hidden;
                                white-space: nowrap
                            }

                            .eFM0qc {
                                display: inline-block;
                                padding-bottom: 1px;
                                padding-left: 2px;
                                visibility: visible
                            }

                            div.iOWvff {
                                float: right
                            }

                            .b3Ke9b {
                                color: #9e9e9e;
                                cursor: pointer;
                                padding-right: 8px
                            }

                            .hELpae {
                                color: #9e9e9e;
                                float: right;
                                font-size: 12px;
                                line-height: 1.34
                            }

                            .kno-ftr {
                                clear: both;
                                color: #70757a;
                                font-size: 12px;
                                line-height: 1.34;
                                overflow: hidden
                            }

                            .kno-ftr a {
                                color: #70757a;
                                text-decoration: none
                            }

                            .OwRFvb {
                                float: right;
                                margin-left: 2em
                            }

                            .kno-ftr a:hover {
                                text-decoration: underline
                            }

                            div.VTZT1b {
                                padding: 4px 16px 0 8px;
                                margin-bottom: -4px
                            }

                            .kno-ftr {
                                margin-left: 0px;
                                margin-right: -52px;
                                padding: 4px 16px 0;
                            }

                            .JolIg {
                                color: #222;
                                font-size: 20px;
                                padding: 9px 16px;
                                line-height: 1.3;
                                font-weight: normal;
                                margin: 0
                            }

                            .cbphWd {
                                border-top: 1px solid #e5e5e5;
                                cursor: pointer;
                                display: block;
                                font-size: 16px;
                                padding-bottom: 9px;
                                padding-top: 9px;
                                position: relative;
                                line-height: 1.58;
                            }

                            a.cbphWd {
                                color: #222;
                                text-decoration: none !important
                            }

                            .related-question-pair .kno-ftr {
                                margin: 0;
                                padding-top: 0
                            }

                            html:not(.zAoYTe) .hide-focus-ring {
                                outline: 0
                            }

                            .cxrEAd,
                            .uKh9yc {
                                display: block;
                                opacity: 0;
                                transform: scale(0);
                                transition-property: border-width, opacity, transform
                            }

                            .uKh9yc {
                                border: 10px solid transparent;
                                margin: 0 auto
                            }

                            .gy6Qzb {
                                transition: max-height 0.3s;
                                overflow: hidden
                            }

                            .S8PBwe {
                                max-height: 0;
                                visibility: hidden
                            }

                            .vp45yf {
                                pointer-events: none;
                                position: absolute !important;
                                right: 0;
                                color: #70757A;
                                top: 50%;
                                margin-top: -12px
                            }

                            .mWyH1d {
                                position: relative
                            }

                            html:not(.zAoYTe) .mWyH1d:focus {
                                outline: 0
                            }
                            </style>
                            <div id="taw">
                                <div></div>
                                <div>
                                    <div class="med"></div>
                                </div>
                                <div id="tvcap"></div>
                            </div>
                            <div class="med" id="res" role="main">
                                <div id="topstuff"></div>
                                <div id="search">
                                    <div data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQGnoECBMQJg">
                                        <!--a-->
                                        <h1 class="bNg8Rb">Search Results</h1>
                                        <div eid="yKLUXqeaC8XC3LUP2rau2A4"
                                            data-async-context="query:does%20antivirus%20stop%20hackers" id="rso">
                                            <div class="g mnr-c g-blk" data-hveid="CA0QAA"
                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQjDYoAHoECA0QAA" lang="en-IN">
                                                <div class="kp-blk c2xzTb Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <h2 class="bNg8Rb">Featured snippet from the web</h2>
                                                            <div>
                                                                <div class="mod" data-md="61" style="clear:none"
                                                                    lang="en-IN">
                                                                    <!--m-->
                                                                    <div aria-level="3" class="LGOjhe" role="heading"
                                                                        data-attrid="wa:/description"
                                                                        data-hveid="CA0QAQ"><span class="ILfuVd"><span
                                                                                class="e24Kjd"> <b>Antivirus stops hackers </b>in some ways, but it doesn't provide complete protection from <b>hackers</b>.  <b>Antivirus</b> is able to protect your computer from many of the tools <b>hackers</b> use to infiltrate your computer, but the program that keeps hackers from directly getting in to your computer is called a firewall.</span></span></div>
                                                                    <!--n-->
                                                                </div>
                                                                <div class="g">
                                                                    <!--m-->
                                                                    <div class="rc" data-hveid="CA0QAg"
                                                                        data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAF6BAgNEAI">
                                                                        <div class="r"><a
                                                                                ref="https://smallbusiness.chron.com/norton-antivirus-stop-hackers-62465.html"
                                                                                onmousedown="return rwt(this,'','','','','AOvVaw3mAm9eTpsWRSEYnpZlftqt','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjABegQIDRAD','','',event)"><br>
                                                                                <h3 class="LC20lb DKV0Md">Does Norton
                                                                                    Antivirus Stop Hackers? | Small
                                                                                    Business ...</h3>
                                                                                <div class="TbwUpd NJjxre"><cite
                                                                                        class="iUh30 bc tjvcx">smallbusiness.chron.com<span
                                                                                            class="eipWBe"> › ... ›
                                                                                            Social Security
                                                                                            Numbers</span></cite></div>
                                                                            </a>
                                                                            <div class="B6fmyf">
                                                                                <div class="TbwUpd"><cite
                                                                                        class="iUh30 bc tjvcx">smallbusiness.chron.com<span
                                                                                            class="eipWBe"> › ... ›
                                                                                            Social Security
                                                                                            Numbers</span></cite></div>
                                                                                <div class="eFM0qc"><span>
                                                                                        <div class="action-menu"><a
                                                                                                class="GHDvEf" ref="#"
                                                                                                id="am-b1"
                                                                                                aria-label="Result options"
                                                                                                aria-expanded="false"
                                                                                                aria-haspopup="true"
                                                                                                role="button"
                                                                                                jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wAXoECA0QCA"><span
                                                                                                    class="mn-dwn-arw"></span></a>
                                                                                            <ol class="action-menu-panel"
                                                                                                role="menu"
                                                                                                tabindex="-1"
                                                                                                jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wAXoECA0QCQ">
                                                                                                <li class="action-menu-item"
                                                                                                    role="menuitem"><a
                                                                                                        class="fl"
                                                                                                        ref="https://webcache.googleusercontent.com/search?q=cache:HOtbnJt5YoAJ:https://smallbusiness.chron.com/norton-antivirus-stop-hackers-62465.html+&amp;cd=2&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw1jjmNJB4mb1Xa7kqnKRx1J','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDABegQIDRAK','','',event)">Cached</a>
                                                                                                </li>
                                                                                            </ol>
                                                                                        </div>
                                                                                    </span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="s">
                                                                            <div><span class="st"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                                <div class="AuP6le VTZT1b kno-ftr">
                                                    <div class="OwRFvb kno-fb">
                                                        <div
                                                            data-async-context="async_id:duf3-1-0;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:1">
                                                            <div jscontroller="xz7cCd" style="display:none"
                                                                jsaction="rcuQ6b:npT2md"></div>
                                                            <div id="duf3-1-0" data-jiis="up" data-async-type="duffy3"
                                                                data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                                                                class="y yp"
                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ-0F6BAgNEAs">
                                                            </div><span><span class="RTZ84b z1asCe Msi2Rc"
                                                                    data-async-trigger="duf3-1-0" role="link"
                                                                    tabindex="-1" jsaction="async.u"
                                                                    style="height:14px;line-height:14px;width:14px"
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQtw96BAgNEAw"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 9h-2V5h2v6zm0 4h-2v-2h2v2z">
                                                                        </path>
                                                                    </svg></span><a class="XEKxtf" ref="#"
                                                                    data-async-trigger="duf3-1-0" jsaction="async.u"
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQtw96BAgNEA0">Feedback</a></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="iOWvff"><a
                                                                ref="https://www.google.com/url?url=https://support.google.com/websearch?p%3Dfeatured_snippets%26hl%3Den-IN&amp;rct=j&amp;q=&amp;esrc=s&amp;usg=AOvVaw1vZKUsZLL2lq4flgrOD_cS&amp;hl=en-IN&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQrpwBegQIDRAO"
                                                                tabindex="-1"><span class="b3Ke9b z1asCe JrWGoc"
                                                                    style="height:16px;line-height:16px;width:16px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z">
                                                                        </path>
                                                                    </svg></span></a><span class="hELpae"><a
                                                                    ref="https://www.google.com/url?url=https://support.google.com/websearch?p%3Dfeatured_snippets%26hl%3Den-IN&amp;rct=j&amp;q=&amp;esrc=s&amp;usg=AOvVaw1vZKUsZLL2lq4flgrOD_cS&amp;hl=en-IN&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQrpwBegQIDRAP">About
                                                                    Featured Snippets</a></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g kno-kp mnr-c g-blk" data-hveid="CA4QAA"
                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQuU4oAHoECA4QAA">
                                                <div class="kp-blk cUnQKe Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <h2 class="JolIg i8lZMc">People also ask</h2>
                                                            <div jscontroller="xj7LNb" class="feCgPc q1kEvb vsXRLb y yf"
                                                                jsaction="ac_bc:NlNJyb;ac_be:o7YQ2"
                                                                data-cs="OeOSTslPLVZIzCvJLMssKi1WKC7JL1DISEzOTi0qFpJ1TsxDkktJLUlNLoHJ2gvJhWckliDL58PkFEqLU-2FVF3yFdIyi1LLE3NyihUKivLB2hPTEzPzipGM0Qcbg6pZoSQfrqEkIzWzSCE5P7egtASkQYnjROjBpDbHvXwGLB4MAQyJDFBQCMQJi5butq9gAAA"
                                                                data-mqac="0" id="_yKLUXqeaC8XC3LUP2rau2A444"
                                                                data-jiis="up" data-async-type="rq"
                                                                data-async-context-required="q,state"
                                                                data-async-rclass="search"
                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqrkBKAB6BAgOEAE">
                                                                <div decode-data-ved="1" eid="yKLUXqeaC8XC3LUP2rau2A4"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQq7kBKAB6BAgOEAI">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_yKLUXqeaC8XC3LUP2rau2A445"
                                                                            aria-expanded="false"
                                                                            id="_yKLUXqeaC8XC3LUP2rau2A446" jsslot=""
                                                                            role="button" tabindex="0"
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"><span
                                                                                class="vp45yf z1asCe bjaP2b"
                                                                                style="right:16px"><svg
                                                                                    focusable="false"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z">
                                                                                    </path>
                                                                                </svg></span>
                                                                            <div style="padding-right:40px"
                                                                                jsname="xXq91c"
                                                                                class="match-mod-horizontal-padding hide-focus-ring cbphWd"
                                                                                data-kt="KjGT6dvywNzb0oUB7fPS5uzQyq8zzd7f4dzbhsahAZzW7-K5s56xgAH9-_vXiPLy0L8B"
                                                                                data-hveid="CA4QAw"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQuk4oAHoECA4QAw">
                                                                                Can antivirus detect hackers?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_yKLUXqeaC8XC3LUP2rau2A446"
                                                                            id="_yKLUXqeaC8XC3LUP2rau2A445" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_yKLUXqeaC8XC3LUP2rau2A447"
                                                                                    data-hveid="CA4QBA"
                                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQu04oAXoECA4QBA">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CA4QBQ"><span
                                                                                                class="ILfuVd NA6bn"><span
                                                                                                    class="e24Kjd">The
                                                                                                    app <b>can
                                                                                                        detect</b> and
                                                                                                    block viruses,
                                                                                                    worms, and
                                                                                                    <b>hackers</b> from
                                                                                                    harmful activity.
                                                                                                    ... <b>Hackers</b>
                                                                                                    rely on malware like
                                                                                                    viruses, trojans and
                                                                                                    worms to stole the
                                                                                                    informational data
                                                                                                    from the device. By
                                                                                                    using an
                                                                                                    <b>antivirus</b>
                                                                                                    software, you
                                                                                                    <b>can</b> protect
                                                                                                    your device and data
                                                                                                    from being
                                                                                                    stolen.</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CA4QBg"
                                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAN6BAgOEAY">
                                                                                            <div class="r"><a
                                                                                                    ref="https://www.quora.com/Do-antivirus-programs-or-firewalls-protect-against-hackers"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3BbHpkJMGB6nCRcOMlwfKo','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjADegQIDhAH','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        Do antivirus
                                                                                                        programs or
                                                                                                        firewalls
                                                                                                        protect against
                                                                                                        hackers? - Quora
                                                                                                    </h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.quora.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                Do-antivirus-programs-or-firewalls-pr...</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.quora.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                Do-antivirus-programs-or-firewalls-pr...</span></cite>
                                                                                                    </div>
                                                                                                    <div class="eFM0qc">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="s">
                                                                                                <div><span
                                                                                                        class="st"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div
                                                                                        class="iOBnre match-mod-horizontal-padding">
                                                                                        Search for: <a
                                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=Can+antivirus+detect+hackers%3F&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzmd6BAgOEAs">Can
                                                                                            antivirus detect
                                                                                            hackers?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <div decode-data-ved="1" eid="yKLUXqeaC8XC3LUP2rau2A4"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQq7kBKAF6BAgOEAw">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_yKLUXqeaC8XC3LUP2rau2A451"
                                                                            aria-expanded="false"
                                                                            id="_yKLUXqeaC8XC3LUP2rau2A452" jsslot=""
                                                                            role="button" tabindex="0"
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"><span
                                                                                class="vp45yf z1asCe bjaP2b"
                                                                                style="right:16px"><svg
                                                                                    focusable="false"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z">
                                                                                    </path>
                                                                                </svg></span>
                                                                            <div style="padding-right:40px"
                                                                                jsname="xXq91c"
                                                                                class="match-mod-horizontal-padding hide-focus-ring cbphWd"
                                                                                data-kt="KjG786f0uN__yNABi-Kk3ay0m6TUAbLt6sTm3vGQgwHN3t_h3NuGxqEBvuLTvferw6NM"
                                                                                data-hveid="CA4QDQ"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQuk4oAHoECA4QDQ">
                                                                                What antivirus do hackers use?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_yKLUXqeaC8XC3LUP2rau2A452"
                                                                            id="_yKLUXqeaC8XC3LUP2rau2A451" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_yKLUXqeaC8XC3LUP2rau2A453"
                                                                                    data-hveid="CA4QDg"
                                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQu04oAXoECA4QDg">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CA4QDw"><span
                                                                                                class="ILfuVd NA6bn"><span
                                                                                                    class="e24Kjd">They
                                                                                                    are most likely to
                                                                                                    <b>use</b> Kaspersky
                                                                                                    Internet Security,
                                                                                                    and if not they
                                                                                                    probably
                                                                                                    <b>using</b>
                                                                                                    Emsisoft. Other
                                                                                                    tools they may
                                                                                                    <b>use</b> can be
                                                                                                    Comodo firewall,
                                                                                                    Hitmanpro Alert,
                                                                                                    Heimdall, reHIPS,
                                                                                                    VoodooShield,
                                                                                                    AppGuard, and much
                                                                                                    more. <b>Which
                                                                                                        antivirus</b> is
                                                                                                    the best for
                                                                                                    all-around purposes
                                                                                                    on a
                                                                                                    laptop?</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CA4QEA"
                                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAV6BAgOEBA">
                                                                                            <div class="r"><a
                                                                                                    ref="https://www.quora.com/Which-antiviruses-do-hackers-use"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1E4igiUhnmGRRitWvRD7tU','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAFegQIDhAR','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        Which
                                                                                                        antiviruses do
                                                                                                        hackers use? -
                                                                                                        Quora</h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.quora.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                Which-antiviruses-do-hackers-use</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.quora.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                Which-antiviruses-do-hackers-use</span></cite>
                                                                                                    </div>
                                                                                                    <div class="eFM0qc">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="s">
                                                                                                <div><span
                                                                                                        class="st"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div
                                                                                        class="iOBnre match-mod-horizontal-padding">
                                                                                        Search for: <a
                                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=What+antivirus+do+hackers+use%3F&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzmd6BAgOEBU">What
                                                                                            antivirus do hackers
                                                                                            use?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <div decode-data-ved="1" eid="yKLUXqeaC8XC3LUP2rau2A4"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQq7kBKAJ6BAgOEBY">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_yKLUXqeaC8XC3LUP2rau2A456"
                                                                            aria-expanded="false"
                                                                            id="_yKLUXqeaC8XC3LUP2rau2A457" jsslot=""
                                                                            role="button" tabindex="0"
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"><span
                                                                                class="vp45yf z1asCe bjaP2b"
                                                                                style="right:16px"><svg
                                                                                    focusable="false"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z">
                                                                                    </path>
                                                                                </svg></span>
                                                                            <div style="padding-right:40px"
                                                                                jsname="xXq91c"
                                                                                class="match-mod-horizontal-padding hide-focus-ring cbphWd"
                                                                                data-kt="KjCnkt6K5Zj3yBn9mZqKo9a73PkBtuTv2PfqstDOAe3z0ubs0MqvM_37-9eI8vLQvwE"
                                                                                data-hveid="CA4QFw"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQuk4oAHoECA4QFw">
                                                                                Do firewalls protect against hackers?
                                                                            </div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_yKLUXqeaC8XC3LUP2rau2A457"
                                                                            id="_yKLUXqeaC8XC3LUP2rau2A456" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_yKLUXqeaC8XC3LUP2rau2A458"
                                                                                    data-hveid="CA4QGA"
                                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQu04oAXoECA4QGA">
                                                                                    <div class="mod" data-md="61"
                                                                                        style="clear:none">
                                                                                        <!--m-->
                                                                                        <div aria-level="3"
                                                                                            class="LGOjhe"
                                                                                            role="heading"
                                                                                            data-attrid="wa:/description"
                                                                                            data-hveid="CA4QGQ"><span
                                                                                                class="ILfuVd NA6bn"><span
                                                                                                    class="e24Kjd">A
                                                                                                    <b>firewall</b>
                                                                                                    is an essential
                                                                                                    piece of security
                                                                                                    software that
                                                                                                    monitors all
                                                                                                    incoming
                                                                                                    and outgoing traffic
                                                                                                    going through your
                                                                                                    network, checking
                                                                                                    for <b>hackers</b>,
                                                                                                    malware,
                                                                                                    unauthorized
                                                                                                    outgoing
                                                                                                    information, or
                                                                                                    anything that might
                                                                                                    put you or your PC
                                                                                                    at risk.
                                                                                                    <b>Firewalls</b> are
                                                                                                    often the first line
                                                                                                    of defense when
                                                                                                    <b>protecting</b>
                                                                                                    your
                                                                                                    data.</span></span>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CA4QGg"
                                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAd6BAgOEBo">
                                                                                            <div class="r"><a
                                                                                                    ref="https://www.avast.com/f-firewall"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3MzjyETuSSsakVXpDVAmsX','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAHegQIDhAb','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        Firewall | Stop
                                                                                                        hacker's access
                                                                                                        to your PC |
                                                                                                        Avast</h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.avast.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                f-firewall</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.avast.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                f-firewall</span></cite>
                                                                                                    </div>
                                                                                                    <div class="eFM0qc">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="s">
                                                                                                <div><span
                                                                                                        class="st"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div
                                                                                        class="iOBnre match-mod-horizontal-padding">
                                                                                        Search for: <a
                                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=Do+firewalls+protect+against+hackers%3F&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzmd6BAgOEB8">Do
                                                                                            firewalls protect against
                                                                                            hackers?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <div decode-data-ved="1" eid="yKLUXqeaC8XC3LUP2rau2A4"
                                                                    class="related-question-pair"
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQq7kBKAN6BAgOECA">
                                                                    <g-accordion-expander jscontroller="XMgU6d"
                                                                        jsshadow=""
                                                                        jsaction="ac_ar:y3EGVb;b_cs:XyzvNd;rcuQ6b:npT2md">
                                                                        <div jsname="ARU61" class="mWyH1d UgLoB"
                                                                            aria-controls="_yKLUXqeaC8XC3LUP2rau2A461"
                                                                            aria-expanded="false"
                                                                            id="_yKLUXqeaC8XC3LUP2rau2A462" jsslot=""
                                                                            role="button" tabindex="0"
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"><span
                                                                                class="vp45yf z1asCe bjaP2b"
                                                                                style="right:16px"><svg
                                                                                    focusable="false"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z">
                                                                                    </path>
                                                                                </svg></span>
                                                                            <div style="padding-right:40px"
                                                                                jsname="xXq91c"
                                                                                class="match-mod-horizontal-padding hide-focus-ring cbphWd"
                                                                                data-kt="Ki_9-_vXiPLy0L8BzYeVrdre3dzAAajzh9DY2MDKfYnBs7yDja3DRd6fjLqh3dqPKg"
                                                                                data-hveid="CA4QIQ"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQuk4oAHoECA4QIQ">
                                                                                What do hackers use to protect their
                                                                                computers?</div>
                                                                        </div>
                                                                        <div jsname="dcydfb" class="gy6Qzb S8PBwe"
                                                                            aria-labelledby="_yKLUXqeaC8XC3LUP2rau2A462"
                                                                            id="_yKLUXqeaC8XC3LUP2rau2A461" jsslot=""
                                                                            jsaction="CQwlrf;fastbutton:CQwlrf"
                                                                            style="max-height: 0px;">
                                                                            <div>
                                                                                <div jsname="oQYOj"
                                                                                    id="_yKLUXqeaC8XC3LUP2rau2A463"
                                                                                    data-hveid="CA4QIg"
                                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQu04oAXoECA4QIg">
                                                                                    <div class="mod" data-md="83">
                                                                                        <!--m-->
                                                                                        <div class="di3YZe">
                                                                                            <div class="co8aDb gsrt"
                                                                                                aria-level="3"
                                                                                                role="heading"><b>12
                                                                                                    Ways to Secure Your
                                                                                                    Computer From
                                                                                                    Hackers</b></div>
                                                                                            <div class="RqBzHd">
                                                                                                <ul class="i8Z77e">
                                                                                                    <li class="TrT0Xe">
                                                                                                        Use a firewall.
                                                                                                        ... </li>
                                                                                                    <li class="TrT0Xe">
                                                                                                        Install
                                                                                                        antivirus
                                                                                                        software. ...
                                                                                                    </li>
                                                                                                    <li class="TrT0Xe">
                                                                                                        Install an
                                                                                                        anti-spyware
                                                                                                        package. ...
                                                                                                    </li>
                                                                                                    <li class="TrT0Xe">
                                                                                                        Use complex
                                                                                                        passwords. ...
                                                                                                    </li>
                                                                                                    <li class="TrT0Xe">
                                                                                                        Keep your OS,
                                                                                                        apps and browser
                                                                                                        up to date. ...
                                                                                                    </li>
                                                                                                    <li class="TrT0Xe">
                                                                                                        Ignore spam. ...
                                                                                                    </li>
                                                                                                    <li class="TrT0Xe">
                                                                                                        Back up your
                                                                                                        computer. ...
                                                                                                    </li>
                                                                                                    <li class="TrT0Xe">
                                                                                                        Shut it down.
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div class="ZGh7Vc"><a
                                                                                                        class="truncation-information"
                                                                                                        ref="https://www.businessnewsdaily.com/11213-secure-computer-from-hackers.html"
                                                                                                        data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQnLoEMAh6BAgOECQ"
                                                                                                        onmousedown="return rwt(this,'','','','','AOvVaw3u0T-qrGOAVMn-CZo9D2ZL','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQnLoEMAh6BAgOECQ','','',event)">More
                                                                                                        items...</a>
                                                                                                </div>
                                                                                                <div class="rvIhN">•
                                                                                                </div>
                                                                                                <div class="Od5Jsd">Jan
                                                                                                    10, 2019</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div class="g">
                                                                                        <!--m-->
                                                                                        <div class="rc"
                                                                                            data-hveid="CA4QJg"
                                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAl6BAgOECY">
                                                                                            <div class="r"><a
                                                                                                    ref="https://www.businessnewsdaily.com/11213-secure-computer-from-hackers.html"
                                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3u0T-qrGOAVMn-CZo9D2ZL','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAJegQIDhAn','','',event)"><br>
                                                                                                    <h3
                                                                                                        class="LC20lb DKV0Md">
                                                                                                        How to Secure
                                                                                                        Your Computer
                                                                                                        From Hackers -
                                                                                                        Business News
                                                                                                        Daily</h3>
                                                                                                    <div
                                                                                                        class="TbwUpd NJjxre">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.businessnewsdaily.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                11213-secure-computer-fr...</span></cite>
                                                                                                    </div>
                                                                                                </a>
                                                                                                <div class="B6fmyf">
                                                                                                    <div class="TbwUpd">
                                                                                                        <cite
                                                                                                            class="iUh30 bc tjvcx">www.businessnewsdaily.com<span
                                                                                                                class="eipWBe">
                                                                                                                ›
                                                                                                                11213-secure-computer-fr...</span></cite>
                                                                                                    </div>
                                                                                                    <div class="eFM0qc">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="s">
                                                                                                <div><span
                                                                                                        class="st"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--n-->
                                                                                    </div>
                                                                                    <div
                                                                                        class="iOBnre match-mod-horizontal-padding">
                                                                                        Search for: <a
                                                                                            ref="https://www.google.com/search?client=firefox-b-d&amp;q=What+do+hackers+use+to+protect+their+computers%3F&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzmd6BAgOECs">What
                                                                                            do hackers use to protect
                                                                                            their computers?</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </g-accordion-expander>
                                                                </div>
                                                                <g-loading-icon jsname="aZ2wEe" class="uKh9yc"
                                                                    style="display:none;height:24px;width:24px"><img
                                                                        src="f_files/loading_24.gif" alt="Loading..."
                                                                        role="progressbar" data-atf="0" width="24"
                                                                        height="24"></g-loading-icon>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                                <div class="kno-ftr">
                                                    <div class="OwRFvb kno-fb">
                                                        <div
                                                            data-async-context="async_id:duf3-44-2;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:44">
                                                            <div jscontroller="xz7cCd" style="display:none"
                                                                jsaction="rcuQ6b:npT2md"></div>
                                                            <div id="duf3-44-2" data-jiis="up" data-async-type="duffy3"
                                                                data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                                                                class="y yp"
                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ-0F6BAgOECw">
                                                            </div><a class="duf3" ref="#"
                                                                data-async-trigger="duf3-44-2" jsaction="async.u"
                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQtw96BAgOEC0">Feedback</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g">
                                                <h2 class="bNg8Rb">Web results</h2>
                                                <!--m-->
                                                <div class="rc" data-hveid="CAIQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMAp6BAgCEAA">
                                                    <div class="r"><a
                                                            ref="https://www.safetydetectives.com/blog/can-antivirus-stop-hackers/"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw39mcOlduk7XTj6pUKOd-mY','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAKegQIAhAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Can Antivirus Stop Hackers? -
                                                                Safety Detectives</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.safetydetectives.com<span
                                                                        class="eipWBe"> › Blog</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.safetydetectives.com<span
                                                                        class="eipWBe"> › Blog</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b10" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wCnoECAIQBg"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wCnoECAIQBw">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:k_RWDuRupYUJ:https://www.safetydetectives.com/blog/can-antivirus-stop-hackers/+&amp;cd=11&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw1g45IPkP1bC2usfiKONI9l','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDAKegQIAhAI','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Aug 30, 2018 -
                                                                </span>Protection Against <em>Hacking</em> and Zero-Day
                                                                Attacks<wbr><wbr> <em>Antivirus</em> has long been the
                                                                go-to software to keep our computers and devices safe.
                                                                Your <em>antivirus</em> ensures that no malicious
                                                                program <em>can</em> infect by checking all programs and
                                                                files against a database of known threats.</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_4" jsdata="fxg5tf;;By1WAo"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ2Z0BMAp6BAgCEAo">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIFBAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgUEAE">
                                                                    advance ip protector</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgUEAI">
                                                                    trojan virus wiki</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgUEAM">
                                                                    hacker protection</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgUEAQ">
                                                                    benefits of firewall</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgUEAU">
                                                                    network firewall</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgUEAY">
                                                                    does antivirus protect against ransomware</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAEQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMAt6BAgBEAA">
                                                    <div class="r"><a
                                                            ref="https://www.quora.com/Do-antivirus-programs-or-firewalls-protect-against-hackers"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw3BbHpkJMGB6nCRcOMlwfKo','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjALegQIARAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Do antivirus programs or firewalls
                                                                protect against hackers ...</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.quora.com<span
                                                                        class="eipWBe"> ›
                                                                        Do-antivirus-programs-or-firewalls-...</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.quora.com<span
                                                                        class="eipWBe"> ›
                                                                        Do-antivirus-programs-or-firewalls-...</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b11" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wC3oECAEQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wC3oECAEQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=related:https://www.quora.com/Do-antivirus-programs-or-firewalls-protect-against-hackers+does+antivirus+stop+hackers&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQHzALegQIARAG">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Jul 17, 2015 -
                                                                </span>"<em>Hacker</em>" implies a lot. If you're
                                                                concerned about someone intentionally <em>hacking</em>
                                                                you, <em>antivirus</em> software <em>can prevent</em>
                                                                them from attempting to use known viruses
                                                                on<wbr>&nbsp;...</span>
                                                            <div class="P1usbc"
                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqwIwC3oECAEQCA">
                                                                <div class="VNLkW">
                                                                    <div class="i4vd5e"><a class="fl"
                                                                            ref="https://www.quora.com/If-you-were-a-hacker-which-antivirus-would-you-use-for-your-own-protection"
                                                                            onmousedown="return rwt(this,'','','','','AOvVaw2NyKWFYmluxuqDwboUCYq5','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQrAIoADALegQIARAJ','','',event)">If
                                                                            you were a <b>hacker</b>, which
                                                                            <b>antivirus</b> would you use ...</a></div>
                                                                    <div class="G1Rrjc">7 answers</div>
                                                                    <div class="G1Rrjc">8 Jun 2017</div>
                                                                </div>
                                                                <div class="VNLkW">
                                                                    <div class="i4vd5e"><a class="fl"
                                                                            ref="https://www.quora.com/How-can-you-protect-your-smartphone-from-being-hacked"
                                                                            onmousedown="return rwt(this,'','','','','AOvVaw308I5wFx1-8RIC1Jm0QJal','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQrAIoATALegQIARAK','','',event)">How
                                                                            <b>can</b> you protect your smartphone from
                                                                            being ...</a></div>
                                                                    <div class="G1Rrjc">71 answers</div>
                                                                    <div class="G1Rrjc">4 May 2017</div>
                                                                </div>
                                                                <div class="VNLkW">
                                                                    <div class="i4vd5e"><a class="fl"
                                                                            ref="https://www.quora.com/How-do-you-secure-a-computer"
                                                                            onmousedown="return rwt(this,'','','','','AOvVaw3KEwluxeJPYZ4N3_DbPEoP','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQrAIoAjALegQIARAL','','',event)">How
                                                                            to secure a computer - Quora</a></div>
                                                                    <div class="G1Rrjc">62 answers</div>
                                                                    <div class="G1Rrjc">9 Apr 2015</div>
                                                                </div>
                                                                <div class="VNLkW">
                                                                    <div class="i4vd5e"><a class="fl"
                                                                            ref="https://www.quora.com/How-do-I-protect-a-system-from-hacking-and-viruses"
                                                                            onmousedown="return rwt(this,'','','','','AOvVaw3sj268uf5_padLr0TqydvC','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQrAIoAzALegQIARAM','','',event)">How
                                                                            to protect a system from <b>hacking</b> and
                                                                            viruses - Quora</a></div>
                                                                    <div class="G1Rrjc">16 answers</div>
                                                                    <div class="G1Rrjc">1 Jul 2017</div>
                                                                </div>
                                                                <div class="k6DEPe">
                                                                    <div class="i4vd5e"><a class="fl"
                                                                            ref="https://www.google.com/search?q=does+antivirus+stop+hackers+site:www.quora.com&amp;client=firefox-b-d&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQrQIoBDALegQIARAN">More
                                                                            results from www.quora.com</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="dhIWPd f">17 answers</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAMQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMAx6BAgDEAA">
                                                    <div class="r"><a
                                                            ref="https://www.businessnewsdaily.com/11213-secure-computer-from-hackers.html"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw3u0T-qrGOAVMn-CZo9D2ZL','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAMegQIAxAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">How to Secure Your Computer From
                                                                Hackers</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.businessnewsdaily.com<span
                                                                        class="eipWBe"> › ... › Security</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.businessnewsdaily.com<span
                                                                        class="eipWBe"> › ... › Security</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b12" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wDHoECAMQBg"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wDHoECAMQBw">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:_f3-ipDLob8J:https://www.businessnewsdaily.com/11213-secure-computer-from-hackers.html+&amp;cd=13&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3FD5R-etBpOCkwbfTxA0yf','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDAMegQIAxAI','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Jan 10, 2019 - </span>Here
                                                                are some steps you <em>can</em> take to protect your
                                                                company's computer network. ... <em>Antivirus</em>
                                                                software plays a major role in protecting your system by
                                                                detecting ... Most updates include security fixes that
                                                                <em>prevent hackers</em> from&nbsp;...</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_5" jsdata="fxg5tf;;By1WAs"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ2Z0BMAx6BAgDEAo">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIFRAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgVEAE">
                                                                    hacker protection software</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgVEAI">
                                                                    how to secure your home computer</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgVEAM">
                                                                    anti-spyware package</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgVEAQ">
                                                                    how to protect yourself from hackers 2019</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgVEAU">
                                                                    what are the steps to avoid getting hacked</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgVEAY">
                                                                    how to prevent unauthorized computer access</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAQQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMA16BAgEEAA">
                                                    <div class="r"><a
                                                            ref="https://www.esecurityplanet.com/network-security/anti-virus-isnt-enough-7-steps-to-discourage-hackers.html"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw0KS_0l6hY4jSo65mMjnkeU','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjANegQIBBAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Anti-Virus Isn't Enough: 7 Steps
                                                                to Discourage Hackers</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.esecurityplanet.com<span
                                                                        class="eipWBe"> › network-security ›
                                                                        anti-vir...</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.esecurityplanet.com<span
                                                                        class="eipWBe"> › network-security ›
                                                                        anti-vir...</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b13" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wDXoECAQQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wDXoECAQQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:Te83zN0ajKEJ:https://www.esecurityplanet.com/network-security/anti-virus-isnt-enough-7-steps-to-discourage-hackers.html+&amp;cd=14&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3m2gPINAr2tOyBZryOalvZ','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDANegQIBBAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Mar 6, 2013 - </span>If it
                                                                is, then the <em>hacker can</em> modify the code until
                                                                the <em>anti-virus</em> software no longer detects it.
                                                                So what should a company do to protect its
                                                                endpoints?</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_11" jsdata="fxg5tf;;By1WAw"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ2Z0BMA16BAgEEAg">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIGRAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgZEAE">
                                                                    advance ip protector</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgZEAI">
                                                                    sonic firewall 3600</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgZEAM">
                                                                    trojan virus wiki</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgZEAQ">
                                                                    benefits of firewall</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgZEAU">
                                                                    network firewall</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgZEAY">
                                                                    does antivirus protect against ransomware</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div><span id="fld"></span>
                                            <style>
                                            .zVvuGd.MRfBrb {
                                                overflow: hidden
                                            }

                                            .zVvuGd {
                                                padding-top: 8px;
                                                white-space: nowrap
                                            }

                                            .Aks71e {
                                                padding: 4px 8px;
                                                float: right;
                                                margin: auto 0
                                            }

                                            .xpdclose .lfNb6b,
                                            .xpdopen .hyaVx {
                                                margin-bottom: 24px
                                            }

                                            .xpdclose .ecRggb .lfNb6b,
                                            .xpdopen .ecRggb .hyaVx {
                                                margin-bottom: 0
                                            }

                                            .Ss2Faf a {
                                                text-decoration: none
                                            }

                                            .Ss2Faf a:hover {
                                                text-decoration: underline
                                            }

                                            .Ss2Faf {
                                                color: #222;
                                                line-height: 1.3;
                                                font-size: 20px
                                            }

                                            .Ss2Faf a {
                                                color: #222
                                            }

                                            .oaSpFd {
                                                color: #70757a;
                                                margin: 0 0 3px 16px
                                            }

                                            .sV2QOc {
                                                margin: 0 16px
                                            }

                                            .kno-vrt-t.MRfBrb {
                                                padding-left: 13px
                                            }

                                            .k0bPBc:first-child,
                                            .kno-vrt-t.MRfBrb:first-child {
                                                padding-left: 17px
                                            }

                                            .kno-vrt-t {
                                                display: inline-block;
                                                overflow: hidden;
                                                position: relative;
                                                text-align: left;
                                                vertical-align: top;
                                            }

                                            .xlBGCb,
                                            .oBrLN,
                                            .C9iYEe,
                                            .mytS8,
                                            .AAhd0c {}

                                            .oBrLN {
                                                display: block;
                                                white-space: normal;
                                                margin: 3px 0 -1px;
                                                padding-bottom: 1px;
                                                width: 100%;
                                            }

                                            .kno-vrt-t {
                                                line-height: 1.29;
                                                white-space: normal
                                            }

                                            .rhs-osrp .oBrLN,
                                            .rhs-osrp .xlBGCb {
                                                font-size: 14px;
                                                line-height: 18px
                                            }

                                            .rhs-osrp .oBrLN {
                                                color: rgba(0, 0, 0, .87);
                                                margin: 0;
                                                padding-top: 8px
                                            }

                                            .kno-vrt-t a {
                                                display: block;
                                                min-height: 100%;
                                            }

                                            .XQ6p1d {
                                                overflow: hidden
                                            }

                                            g-img {
                                                display: block
                                            }

                                            .M4dUYb {
                                                position: relative
                                            }

                                            .rISBZc {
                                                display: block;
                                                border: 0
                                            }

                                            .F2eIEb {
                                                bottom: -25px;
                                                position: absolute;
                                                right: 0
                                            }

                                            .F2eIEb a {
                                                font-size: 12px
                                            }

                                            .zVvuGd.ulRSHd {
                                                padding-bottom: 4px;
                                                padding-top: 14px
                                            }

                                            .PfS8Ld {
                                                align-items: flex-end;
                                                display: flex
                                            }

                                            .VLkRKc {
                                                flex: 1
                                            }

                                            .hKuTtf {
                                                font-size: 14px
                                            }

                                            a.EbH0bb {
                                                color: #70757a;
                                                text-decoration: none
                                            }

                                            a.EbH0bb:hover {
                                                text-decoration: underline
                                            }

                                            #brs {}

                                            #brs {
                                                margin-bottom: 28px
                                            }

                                            #brs .med {
                                                color: #222;
                                                height: auto;
                                                padding-bottom: 8px
                                            }

                                            .brs_col {
                                                font-size: 16px;
                                                margin-top: -1px;
                                                padding-bottom: 1px;
                                                display: inline-block;
                                                line-height: 24px;
                                                vertical-align: top;
                                                max-width: 100%;
                                                box-sizing: border-box;
                                            }

                                            #brs .nVcaUb {
                                                margin: 0;
                                                clear: both
                                            }

                                            .brs_col .search-icon {
                                                color: #1a0dab;
                                                vertical-align: middle;
                                                margin-right: 12px
                                            }

                                            #brs a {
                                                padding: 3px 32px 3px 0;
                                                display: inline-block;
                                                float: left
                                            }

                                            #brs a {
                                                text-decoration: none
                                            }

                                            g-section-with-header {
                                                display: block;
                                                margin: 0 0 40px 0
                                            }

                                            .e2BEnf {
                                                font-size: 20px;
                                                line-height: 1.3;
                                            }

                                            .U7izfe {
                                                padding: 0 0px 12px 0px
                                            }

                                            .AaVjTc a {
                                                display: block
                                            }

                                            .AaVjTc td {
                                                padding: 0;
                                                text-align: center
                                            }

                                            .AaVjTc a.G0iuSb {
                                                text-decoration: none
                                            }

                                            .d6cvqb span {
                                                text-decoration: none
                                            }

                                            .AaVjTc a.G0iuSb:hover {
                                                text-decoration: underline
                                            }

                                            .YyVfkd {
                                                font-weight: bold
                                            }

                                            #foot .AaVjTc .YyVfkd {
                                                color: rgba(0, 0, 0, .87);
                                                font-weight: normal
                                            }

                                            #foot .AaVjTc a {
                                                color: #4285f4;
                                                font-weight: normal
                                            }

                                            #cnt.rfli .AaVjTc .YyVfkd {
                                                color: rgba(0, 0, 0, .87);
                                                font-weight: normal
                                            }

                                            .SJajHc {
                                                background: url(/images/nav_logo299.webp) no-repeat;
                                                overflow: hidden;
                                                background-position: 0 0;
                                                height: 40px;
                                                display: block
                                            }

                                            .NVbCr {
                                                cursor: pointer
                                            }

                                            #foot {
                                                visibility: inherit
                                            }
                                            </style>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAoQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMA56BAgKEAA">
                                                    <div class="r"><a ref="https://www.avast.com/c-hacker"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw07llDDiBNO-T6JqOWxScMp','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAOegQIChAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">What is Hacking? | Hacking
                                                                Definition | Avast</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.avast.com<span
                                                                        class="eipWBe"> › ... › Security › Other
                                                                        Threats</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.avast.com<span
                                                                        class="eipWBe"> › ... › Security › Other
                                                                        Threats</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b14" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wDnoECAoQBg"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wDnoECAoQBw">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:Czawp645RggJ:https://www.avast.com/c-hacker+&amp;cd=15&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw2KExYQEeqRNFimPZZ05L87','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDAOegQIChAI','','',event)">Cached</a>
                                                                            </li>
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=related:https://www.avast.com/c-hacker+does+antivirus+stop+hackers&amp;tbo=1&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQHzAOegQIChAJ">Similar</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st"><span class="f">Aug 11, 2016 -
                                                                </span>While a <em>hacker</em> is just a programmer who
                                                                <em>can</em> manipulate a computer system or ... a hack;
                                                                How to <em>prevent hacking</em>; Protect yourself
                                                                against <em>hacking</em> ... from <em>hackers</em> is to
                                                                use strong anti-<em>hacking</em> software such a Avast
                                                                <em>Antivirus</em>&nbsp;...</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_15" jsdata="fxg5tf;;By1WA8"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ2Z0BMA56BAgKEAs">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIFhAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgWEAE">
                                                                    hacker protection software</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgWEAI">
                                                                    how to prevent loss of data</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgWEAM">
                                                                    reason core security</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgWEAQ">
                                                                    anti hacker alliance</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgWEAU">
                                                                    ghostpress</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgWEAY">
                                                                    how to protect yourself from hackers</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAUQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMA96BAgFEAA">
                                                    <div class="r"><a
                                                            ref="https://www.reveantivirus.com/in/computer-security-threats/computer-hacking"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw1-aSgfLwY4qLchlSHoCdnM','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAPegQIBRAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Hacking - REVE Antivirus</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.reveantivirus.com<span
                                                                        class="eipWBe"> › computer-hacking</span></cite>
                                                            </div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.reveantivirus.com<span
                                                                        class="eipWBe"> › computer-hacking</span></cite>
                                                            </div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b15" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wD3oECAUQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wD3oECAUQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:us3sNceSrJcJ:https://www.reveantivirus.com/in/computer-security-threats/computer-hacking+&amp;cd=16&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw0poO2LQ4VawV3l52za7v-c','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDAPegQIBRAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">If you receive any of these warning signs,
                                                                you <em>can</em> be sure that your computer has been
                                                                targeted by a <em>hacker</em>. How to <em>Prevent
                                                                    Hacking</em>? In order to <em>prevent</em>
                                                                this&nbsp;...</span></div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAYQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMBB6BAgGEAA">
                                                    <div class="r"><a
                                                            ref="https://www.kaspersky.com/resource-center/threats/combating-antivirus"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw3flYqVc5QBv8dKknYWbOzu','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAQegQIBhAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">How Hackers Combat and Bypass
                                                                Antivirus Systems ...</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">www.kaspersky.com<span
                                                                        class="eipWBe"> › resource-center › threats ›
                                                                        comb...</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">www.kaspersky.com<span
                                                                        class="eipWBe"> › resource-center › threats ›
                                                                        comb...</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b16" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wEHoECAYQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wEHoECAYQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:cO_ywIXEt2YJ:https://www.kaspersky.com/resource-center/threats/combating-antivirus+&amp;cd=17&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw3W-fH_9bHbh_rYv5nDEA37','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDAQegQIBhAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">Rootkit technologies – that are generally
                                                                employed by Trojan viruses – <em>can</em> intercept ...
                                                                <em>Block</em> the <em>antivirus</em> software; Damage
                                                                the <em>antivirus</em> databases; <em>Prevent</em>
                                                                the&nbsp;...</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_13" jsdata="fxg5tf;;By1WA0"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ2Z0BMBB6BAgGEAc">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIFxAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgXEAE">
                                                                    how to bypass antivirus detection</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgXEAI">
                                                                    av evasion github</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgXEAM">
                                                                    virustotal</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAcQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMBF6BAgHEAA">
                                                    <div class="r"><a
                                                            ref="https://antivirus.comodo.com/does-antivirus-stop-hackers.php"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw2T50aC21sfEEWi05WQgJ2u','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjARegQIBxAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Does Antivirus Stop Hackers? |
                                                                Prevent Hacking on Android ...</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">antivirus.comodo.com<span
                                                                        class="eipWBe"> ›
                                                                        does-antivirus-stop-hackers</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">antivirus.comodo.com<span
                                                                        class="eipWBe"> ›
                                                                        does-antivirus-stop-hackers</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b17" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wEXoECAcQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wEXoECAcQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:CplUnBakwxIJ:https://antivirus.comodo.com/does-antivirus-stop-hackers.php+&amp;cd=18&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw2fTj3AjzQDcsSWS2n3i-yh','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDARegQIBxAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">There is a common miss belief that an
                                                                antivirus is used only for virus protection. But do you
                                                                know How <em>does antivirus stop hackers</em>? Read more
                                                                about it.</span></div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                            <div class="g">
                                                <!--m-->
                                                <div class="rc" data-hveid="CAgQAA"
                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgAMBJ6BAgIEAA">
                                                    <div class="r"><a
                                                            ref="https://support.norton.com/sp/en/us/home/current/solutions/v109569350"
                                                            onmousedown="return rwt(this,'','','','','AOvVaw0baIgJF_2u7QmvVg1s03pY','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjASegQICBAB','','',event)"><br>
                                                            <h3 class="LC20lb DKV0Md">Signs that your computer has been
                                                                hacked - Norton Support</h3>
                                                            <div class="TbwUpd NJjxre"><cite
                                                                    class="iUh30 bc tjvcx">support.norton.com<span
                                                                        class="eipWBe"> › home › current ›
                                                                        solutions</span></cite></div>
                                                        </a>
                                                        <div class="B6fmyf">
                                                            <div class="TbwUpd"><cite
                                                                    class="iUh30 bc tjvcx">support.norton.com<span
                                                                        class="eipWBe"> › home › current ›
                                                                        solutions</span></cite></div>
                                                            <div class="eFM0qc"><span>
                                                                    <div class="action-menu"><a class="GHDvEf" ref="#"
                                                                            id="am-b18" aria-label="Result options"
                                                                            aria-expanded="false" aria-haspopup="true"
                                                                            role="button"
                                                                            jsaction="m.tdd;keydown:m.hbke;keypress:m.mskpe"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ7B0wEnoECAgQBA"><span
                                                                                class="mn-dwn-arw"></span></a>
                                                                        <ol class="action-menu-panel" role="menu"
                                                                            tabindex="-1"
                                                                            jsaction="keydown:m.hdke;mouseover:m.hdhne;mouseout:m.hdhue"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQqR8wEnoECAgQBQ">
                                                                            <li class="action-menu-item"
                                                                                role="menuitem"><a class="fl"
                                                                                    ref="https://webcache.googleusercontent.com/search?q=cache:QRLtXnyBU68J:https://support.norton.com/sp/en/us/home/current/solutions/v109569350+&amp;cd=19&amp;hl=en&amp;ct=clnk&amp;gl=in&amp;client=firefox-b-d"
                                                                                    onmousedown="return rwt(this,'','','','','AOvVaw306NzLN7zSaOzc_V270R10','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQIDASegQICBAG','','',event)">Cached</a>
                                                                            </li>
                                                                        </ol>
                                                                    </div>
                                                                </span></div>
                                                        </div>
                                                    </div>
                                                    <div class="s">
                                                        <div><span class="st">There are a few steps that you
                                                                <em>can</em> take to check whether your computer has
                                                                been ... <em>Virus Protection</em> Promise, which
                                                                includes access to Norton experts who <em>can</em> ...
                                                                Once you have a virus on your computer, it may attack
                                                                Norton and <em>prevent</em> it&nbsp;...</span></div>
                                                    </div>
                                                    <div jscontroller="m6a0l" id="eob_14" jsdata="fxg5tf;;By1WA4"
                                                        jsaction="rcuQ6b:npT2md"
                                                        data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ2Z0BMBJ6BAgIEAc">
                                                        <div jsname="UTgHCf" class="AUiS2"
                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIGBAA">
                                                            <div jsname="d3PE6e" style="display:none">
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgYEAE">
                                                                    my computer has been hacked and locked</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgYEAI">
                                                                    your computer has been hacked email</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgYEAM">
                                                                    does norton protect from malware</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgYEAQ">
                                                                    pinterest hacked 2019</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgYEAU">
                                                                    what are signs that a website has been hacked</div>
                                                                <div
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgYEAY">
                                                                    your computer has been compromised message</div>
                                                            </div><span jsname="ZnuYW" class="XCKyNd" jsaction="ornU0b"
                                                                aria-label="Dismiss suggested follow ups" role="button"
                                                                tabindex="0"></span>
                                                            <div>
                                                                <div jsname="l1CLDf" class="d8lLoc">
                                                                    <h4 jsname="IaVMje" class="eJ7tvc">People also
                                                                        search for</h4>
                                                                    <div jsname="CeevUc" class="hYkSRb"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--n-->
                                            </div>
                                        </div>
                                        <!--z-->
                                    </div>
                                </div>
                            </div>
                            <div id="bottomads"></div>
                            <div id="extrares">
                                <div id="botstuff">
                                    <div data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQCHoECBMQJw">
                                        <div jsdata="GXYZuf;;By1WBE" jscontroller="G3eKy" jsaction="rcuQ6b:npT2md"
                                            jsl="$t t-w-XilABeKRA;$x 0;"></div>
                                        <div id="bres">
                                            <div class="g mnr-c g-blk" data-hveid="CAwQAA"
                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ3mIoAHoECAwQAA">
                                                <div class="kp-blk Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <div>
                                                                <div class="NFQFxe yp1CPe mod" data-md="133"
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQkCkwE3oECAkQAA">
                                                                    <!--m-->
                                                                    <div class="oaSpFd">Related search</div>
                                                                    <div class="sV2QOc Ss2Faf zbA8Me i8lZMc"
                                                                        aria-level="3" role="heading">Top 10 antivirus
                                                                        in India</div>
                                                                    <div class="zVvuGd MRfBrb ulRSHd"
                                                                        data-hveid="CAkQAQ">
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Norton+AntiVirus&amp;stick=H4sIAAAAAAAAAOOQUeLUz9U3MDE2LMgxkinJL1BIzCvJLMssKi1WSMsvUijPzEvJLy9WMDSIkk7JTy1Gki4Gqc5ITM5OLSo-xcgFMsao0KIgzRzKMckzMkhOO8UIsaAixSAdpqqgKD6jCqbK0Ni0IAOmyii7sgrKTjIvzDKDso1KDLMqoBqMkw3yTLJ_McqEYDg2HO7YRawCfvlFJfl5Co5AFWEgFQDjZpJn6wAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQAw"
                                                                                title="Norton AntiVirus"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQAw">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_16"
                                                                                            src="f_files/images_008.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Norton AntiVirus"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Norton AntiVirus">
                                                                                    Norton AntiVirus</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=BitDefender&amp;stick=H4sIAAAAAAAAAOOQUeLSz9U3MCq0KEgzN5IpyS9QSMwrySzLLCotVkjLL1Ioz8xLyS8vVjA0iJJOyU8tRpIuBqnOSEzOTi0qPsWIZA6UY5JnZJCcdoqRE8ypSDFIh6kqKIrPqIKpMjQ2LciAqTLKrqyCspPMC7PMoGyjEsOsCqgG42SDPJPsX4wyIRiODYc7dhErt1NmiUtqWmpeSmoRAHBKvInnAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQBQ"
                                                                                title="BitDefender"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQBQ">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_18"
                                                                                            src="f_files/images_005.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="BitDefender"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="BitDefender">
                                                                                    BitDefender</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Avast+Antivirus&amp;stick=H4sIAAAAAAAAAOOQUeLVT9c3NEw2LrdMKykqNJIpyS9QSMwrySzLLCotVkjLL1Ioz8xLyS8vVjA0iJJOyU8tRpIuBqnOSEzOTi0qPsXIpZ-rb2BUaFGQZg7lmOQZGSSnnWLkBHMqUgzSYaoKiuIzqmCqDI1NCzJgqoyyK6ug7CTzwiwzKNuoxDCrAqrBONkgzyT7F6NMCIZjw-GOXcTK71iWWFyi4AhTAAC-c3SH7gAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQBw"
                                                                                title="Avast Antivirus"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQBw">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_22"
                                                                                            src="f_files/images_004.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Avast Antivirus"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Avast Antivirus">
                                                                                    Avast Antivirus</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg3 MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Kaspersky+Anti-Virus&amp;stick=H4sIAAAAAAAAAOOQUeLSz9U3ME6qKMowMpIpyS9QSMwrySzLLCotVkjLL1Ioz8xLyS8vVjA0iJJOyU8tRpIuBqnOSEzOTi0qPsUINseo0KIgzRzKMckzMkhOO8XICeZUpBikw1QVFMVnVMFUGRqbFmTAVBllV1ZB2UnmhVlmULZRiWFWBVSDcbJBnkn2L0aZEAzHhsMdu4hVxDuxuADosuxKBUegIt0wkCoALTWONvAAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQCQ"
                                                                                title="Kaspersky Anti-Virus"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQCQ">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_26"
                                                                                            src="f_files/images_002.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Kaspersky Anti-Virus"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Kaspersky Anti‑Virus">
                                                                                    Kaspersky Anti‑Virus</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Kaspersky&amp;stick=H4sIAAAAAAAAAOOQUeLUz9U3MCrOKig3kinJL1BIzCvJLMssKi1WSMsvUijPzEvJLy9WMDSIkk7JTy1Gki4Gqc5ITM5OLSo-xcgFNqbQoiDNHMoxyTMySE47xQi2wKQixSAdpqqgKD6jCqbK0Ni0IAOmyii7sgrKTjIvzDKDso1KDLMqoBqMkw3yTLJ_McqEYDg2HO7YRayc3onFBUCXZVcCAFKwrUrkAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQCw"
                                                                                title="Kaspersky"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wE3oECAkQCw">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_30"
                                                                                            src="f_files/images_007.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Kaspersky" data-atf="4"
                                                                                            width="77" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Kaspersky">
                                                                                    Kaspersky</div>
                                                                            </a></div>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g mnr-c g-blk" data-hveid="CA8QAA"
                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ3mIoAHoECA8QAA">
                                                <div class="kp-blk Wnoohf OJXvsb">
                                                    <div class="xpdopen">
                                                        <div class="ifM9O">
                                                            <div>
                                                                <div class="NFQFxe yp1CPe mod" data-md="133"
                                                                    data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQkCkwFHoECAsQAA">
                                                                    <!--m-->
                                                                    <div class="oaSpFd">Related search</div>
                                                                    <div class="sV2QOc Ss2Faf zbA8Me i8lZMc"
                                                                        aria-level="3" role="heading">
                                                                        <div class="PfS8Ld">
                                                                            <div class="VLkRKc">Top antivirus for
                                                                                Windows 10</div>
                                                                            <div class="hKuTtf"><a class="EbH0bb"
                                                                                    ref="https://www.google.com/search?client=firefox-b-d&amp;q=does+antivirus+stop+hackers&amp;stick=H4sIAAAAAAAAAOOQMZIpyS9QSMwrySzLLCotVkjLL1Ioz8xLyS8vVjA0iJJOyU8tRpIuBqnOSEzOTi0qPsXIpZ-rb2BUaFGQZg7lmOQZGSSnnWLkBHMqUgzSYaoKiuIzqmCqDI1NCzJgqoyyK6ug7CTzwiwzKNuoxDCrAqrBONkgzyT7F6NMCIZjw-GOXcSKz7UAubHZZ-sAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzTooADAUegQICxAB"><span
                                                                                        class="rhsg3">View 2+
                                                                                        more</span><span
                                                                                        class="rhsl4">View 2+</span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="zVvuGd MRfBrb ulRSHd"
                                                                        data-hveid="CAsQAg">
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Malwarebytes&amp;stick=H4sIAAAAAAAAAOOQUeLSz9U3MMkzMkhOM5IpyS9QSMwrySzLLCotVkjLL1Ioz8xLyS8vVjA0iJJOyU8tRpIuBqnOSEzOTi0qPsUINseo0KIgzRzKgRh6ipETzKlIMUiHqSoois-ogqkyNDYtyICpMsqurIKyk8wLs8ygbKMSw6wKqAbjZIM8k-xfjDIhGI4Nhzt2ESuPb2JOeWJRalJlSWoxAAEZxAXoAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQBA"
                                                                                title="Malwarebytes"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQBA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_20"
                                                                                            src="f_files/images_002.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Malwarebytes"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Malwarebytes">
                                                                                    Malwarebytes</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Windows+Defender&amp;stick=H4sIAAAAAAAAAOOQUeLUz9U3MKlIMUg3kinJL1BIzCvJLMssKi1WSMsvUijPzEvJLy9WMDSIkk7JTy1Gki4Gqc5ITM5OLSo-xcgFMsao0KIgzRzKMckzMkhOO8WIsACmqqAoPqMKpsrQ2LQgA6bKKLuyCspOMi_MMoOyjUoMsyqgGoyTDfJMsn8xyoRgODYc7thFrAIwjktqWmpeSmoRAPxpQvvrAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQBg"
                                                                                title="Windows Defender"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQBg">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_24"
                                                                                            src="f_files/images_009.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Windows Defender"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Windows Defender">
                                                                                    Windows Defender</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Trend+Micro+Internet+Security&amp;stick=H4sIAAAAAAAAAOOQUeLSz9U3MCoois-oMpIpyS9QSMwrySzLLCotVkjLL1Ioz8xLyS8vVjA0iJJOyU8tRpIuBqnOSEzOTi0qPsUIMafQoiDNHMoxyTMySE47xcgJ5lSkGKTDVIFtg6kyNDYtyICpMsqurIKyk8wLs8ygbKMSw6wKqAbjZIM8k-xfjDIhGI4Nhzt2EatsSFFqXoqCb2ZyUb6CZ15JalFeaolCcGpyaVFmSSUAiwdOGfkAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQCA"
                                                                                title="Trend Micro Internet Security"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQCA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_28"
                                                                                            src="f_files/images_003.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Trend Micro Internet Security"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Trend Micro Internet...">
                                                                                    Trend Micro Internet...</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg3 MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Avira+Antivirus&amp;stick=H4sIAAAAAAAAAOOQUeLSz9U3MDE0Ni3IMJIpyS9QSMwrySzLLCotVkjLL1Ioz8xLyS8vVjA0iJJOyU8tRpIuBqnOSEzOTi0qPsUINseo0KIgzRzKMckzMkhOO8XICeZUpBikw1QVFMVnVMFUga2GqTLKrqyCspPMC7PMoGyjEsOsCqgG42SDPJPsX4wyIRiODYc7dhErvyNQPFHBEaYAAPpIioXrAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQCg"
                                                                                title="Avira Antivirus"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQCg">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_32"
                                                                                            src="f_files/images.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Avira Antivirus"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Avira Antivirus">
                                                                                    Avira Antivirus</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=AVG+AntiVirus&amp;stick=H4sIAAAAAAAAAOOQUeLUz9U3MDHKrqwykinJL1BIzCvJLMssKi1WSMsvUijPzEvJLy9WMDSIkk7JTy1Gki4Gqc5ITM5OLSo-xcgFMsao0KIgzRzKMckzMkhOO8UIsaAixSAdpqqgKD6jCqbK0Ni0IAOmCuQMKDvJvDDLDMo2KjHMqoBqME42yDPJ_sUoE4Lh2HC4Yxex8jqGuSs4AqXDQNIAc_W0C-gAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQDA"
                                                                                title="AVG Technologies"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQDA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_34"
                                                                                            src="f_files/images.jpg"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="AVG Technologies"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="AVG Technologies">
                                                                                    AVG Technologies</div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Avira&amp;stick=H4sIAAAAAAAAAOOQUeLUz9U3SDIvzDIzkinJL1BIzCvJLMssKi1WSMsvUijPzEvJLy9WMDSIkk7JTy1Gki4Gqc5ITM5OLSo-xcgFMsao0KIgzRzKMckzMkhOO8UItsCkIsUgHaaqoCg-owqmytDYtCADpsoou7IKygY7Cco2KjHMqoBqME42yDPJ_sUoE4Lh2HC4YxexsjoCxRMBVkBsIeAAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQDg"
                                                                                title="Avira"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQDg">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_36"
                                                                                            src="f_files/images.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Avira" data-atf="4"
                                                                                            width="77" height="77">
                                                                                    </g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Avira">Avira
                                                                                </div>
                                                                            </a></div>
                                                                        <div class="PZPZlf rhsg4 MRfBrb kno-vrt-t"
                                                                            data-reltype="sideways" data-rentity=""
                                                                            style="width:77px"><a
                                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=Trend+Micro&amp;stick=H4sIAAAAAAAAAOOQUeLUz9U3MCoxzKowkinJL1BIzCvJLMssKi1WSMsvUijPzEvJLy9WMDSIkk7JTy1Gki4Gqc5ITM5OLSo-xcgFNqbQoiDNHMoxyTMySE47xQi2wKQixSAdpqqgKD6jCqbK0Ni0IAOmyii7sgrKTjIvzDKDssHOg2owTjbIM8n-xSgTguHYcLhjF7FyhxSl5qUo-GYmF-UDAMcCUyHmAAAA&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQEA"
                                                                                title="Trend Micro"
                                                                                data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQxA0wFHoECAsQEA">
                                                                                <div class="XQ6p1d">
                                                                                    <g-img><img id="dimg_38"
                                                                                            src="f_files/images_006.png"
                                                                                            class="rISBZc M4dUYb"
                                                                                            alt="Trend Micro"
                                                                                            data-atf="4" width="77"
                                                                                            height="77"></g-img>
                                                                                </div>
                                                                                <div class="fl ellip oBrLN"
                                                                                    data-original-name="Trend Micro">
                                                                                    Trend Micro</div>
                                                                            </a></div>
                                                                    </div>
                                                                    <div class="kno-ftr Aks71e F2eIEb"
                                                                        data-async-context="async_id:duf3-34-1;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:34">
                                                                        <div jscontroller="xz7cCd" style="display:none"
                                                                            jsaction="rcuQ6b:npT2md"></div>
                                                                        <div id="duf3-34-1" data-jiis="up"
                                                                            data-async-type="duffy3"
                                                                            data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                                                                            class="y yp"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ-0EwFHoECAsQEQ">
                                                                        </div><a class="duf3" ref="#"
                                                                            data-async-trigger="duf3-34-1"
                                                                            jsaction="async.u"
                                                                            data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQtw8wFHoECAsQEg">Feedback</a>
                                                                    </div>
                                                                    <!--n-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="clear:both"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="brs" data-hveid="CBAQAA">
                                            <g-section-with-header style="margin-bottom:0">
                                                <div class="e2BEnf U7izfe">
                                                    <h3 class="med dPAwzb" style="text-align:left" aria-level="2"
                                                        role="heading">Searches related to does antivirus stop hackers
                                                    </h3>
                                                </div>
                                                <div class="card-section">
                                                    <div class="brs_col">
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=how+to+prevent+hackers+from+stealing+information&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ1QIoAHoECBAQAQ"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>how to prevent</b> hackers <b>from
                                                                    stealing information</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=norton+antivirus&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ1QIoAXoECBAQAg"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>norton</b> antivirus</a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=does+antivirus+protect+against+ransomware&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ1QIoAnoECBAQAw"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span>does antivirus <b>protect against
                                                                    ransomware</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=difference+between+antivirus+and+network+firewall&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ1QIoA3oECBAQBA"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>difference between</b> antivirus
                                                                <b>and network firewall</b></a></p>
                                                    </div>
                                                    <div class="brs_col">
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=best+antivirus&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ1QIoBHoECBAQBQ"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>best</b> antivirus</a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=difference+between+antivirus+and+firewall&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ1QIoBXoECBAQBg"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>difference between</b> antivirus
                                                                <b>and firewall</b></a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=how+to+protect+your+computer+from+hackers&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ1QIoBnoECBAQBw"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>how to protect your computer
                                                                    from</b> hackers</a></p>
                                                        <p class="nVcaUb"><a
                                                                ref="https://www.google.com/search?client=firefox-b-d&amp;q=avast+antivirus&amp;sa=X&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ1QIoB3oECBAQCA"><span
                                                                    class="search-icon z1asCe MZy1Rb"
                                                                    style="height:20px;line-height:20px;width:20px"><svg
                                                                        focusable="false"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                                        </path>
                                                                    </svg></span><b>avast</b> antivirus</a></p>
                                                    </div>
                                                </div>
                                            </g-section-with-header>
                                        </div>
                                        <div jscontroller="WgDvvc" jsdata="hE2vdf;;By1WBI" jsaction="rcuQ6b:npT2md">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div jscontroller="iD8Yk" style="display:none" jsaction="rcuQ6b:npT2md"></div>
                                <div id="foot" role="navigation"><span id="xjs">
                                        <div>
                                            <h1 class="bNg8Rb">Page navigation</h1>
                                            <table class="AaVjTc"
                                                style="border-collapse:collapse;text-align:left;margin:30px auto 30px"
                                                role="presentation">
                                                <tbody>
                                                    <tr valign="top">
                                                        <td class="b d6cvqb"><span class="SJajHc"
                                                                style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-24px 0;width:28px"></span>
                                                        </td>
                                                        <td class="YyVfkd"><span class="SJajHc"
                                                                style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-53px 0;width:20px"></span>1
                                                        </td>
                                                        <td><a aria-label="Page 2" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=10&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExAs"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>2</a>
                                                        </td>
                                                        <td><a aria-label="Page 3" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=20&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExAu"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>3</a>
                                                        </td>
                                                        <td><a aria-label="Page 4" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=30&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExAw"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>4</a>
                                                        </td>
                                                        <td><a aria-label="Page 5" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=40&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExAy"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>5</a>
                                                        </td>
                                                        <td><a aria-label="Page 6" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=50&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExA0"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>6</a>
                                                        </td>
                                                        <td><a aria-label="Page 7" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=60&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExA2"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>7</a>
                                                        </td>
                                                        <td><a aria-label="Page 8" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=70&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExA4"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>8</a>
                                                        </td>
                                                        <td><a aria-label="Page 9" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=80&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExA6"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>9</a>
                                                        </td>
                                                        <td><a aria-label="Page 10" class="fl"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=90&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8tMDegQIExA8"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-74px 0;width:20px"></span>10</a>
                                                        </td>
                                                        <td aria-level="3" class="b d6cvqb" role="heading"><a
                                                                class="G0iuSb"
                                                                ref="https://www.google.com/search?q=does+antivirus+stop+hackers&amp;client=firefox-b-d&amp;ei=yKLUXqeaC8XC3LUP2rau2A4&amp;start=10&amp;sa=N&amp;ved=2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8NMDegQIExA-"
                                                                id="pnnext" style="text-align:left"><span
                                                                    class="SJajHc NVbCr"
                                                                    style="background:url(/images/nav_logo299.webp) no-repeat;background-position:-96px 0;width:71px"></span><span
                                                                    style="display:block;margin-left:53px">Next</span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </span>
                                    <div id="gfn"></div><span id="fvf"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div jscontroller="TxZWcc" class="rhscol col rhstc5" jsaction="rcuQ6b:npT2md"
                        jsdata="MdeVKb;;By1WBM" id="rhs">
                        <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
                        (function() {
                            var c4 = 1261;
                            var c5 = 1349;
                            var no5 = false;
                            var no3 = false;
                            (function() {
                                var a = document.body.offsetWidth,
                                    b = no3 ? "rhstc4" : "rhstc3";
                                a >= c4 && (b = no5 || a < c5 ? "rhstc4" : "rhstc5");
                                document.getElementById("rhs").className += " " + b;
                            }).call(this);
                        })();
                        </script><span class="rhstc3 rhstc4 rhstc5" style="display:none"></span>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div id="bfoot"><span style="display:none"><span jscontroller="NBZ7u" style="display:none" data-du="1"
                            data-lhe="1" data-lve="1" jsaction="rcuQ6b:npT2md"
                            data-ei="yKLUXqeaC8XC3LUP2rau2A4"></span></span></div>
            </div>
            <style>
            .fbar a,
            #fsettl {
                text-decoration: none;
                white-space: nowrap
            }

            .fbar {
                margin-left: -27px
            }

            .Fx4vi {
                padding-left: 27px;
                margin: 0 !important
            }

            #fbarcnt {
                display: block;
            }

            #fsl {
                white-space: nowrap
            }

            #fbar {
                background: #f2f2f2;
                line-height: 40px;
                min-width: 1173px;
                border-top: 1px solid #e4e4e4;
            }

            .B4GxFc {
                margin-left: 180px
            }

            .fbar p,
            .fbar a,
            #fsettl,
            #fsett a {
                color: #5f6368
            }

            .fbar a:hover,
            #fsett a:hover {
                color: #333
            }

            .fbar {
                font-size: 14px
            }

            .b0KoTc {
                color: rgba(0, 0, 0, .54);
                padding-left: 27px
            }

            .b2hzT {
                border-bottom: 1px solid #e4e4e4
            }

            .Q8LRLc {
                font-size: 15px
            }

            #Wprf1b {
                color: #333;
                font-weight: bold
            }

            .smiUbb img {
                margin-right: 4px
            }

            .smiUbb a,
            .M6hT6 #swml a {
                text-decoration: none
            }

            .smiUbb {
                margin-left: 180px;
                line-height: 15px;
                color: #5f6368;
            }

            .smiUbb a,
            #swml a {
                color: #5f6368
            }

            .smiUbb a:hover,
            #swml a:hover {
                color: #333
            }

            #swml a {
                display: inline-block
            }

            #swml {
                display: inline-block;
                margin-left: 13px;
                padding-left: 16px;
                border-left: 1px solid #e4e4e4
            }
            </style>
            <div id="footcnt" data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpyp6BAgTEEA">
                <h1 class="bNg8Rb">Footer links</h1>
                <div>
                    <div id="fbarcnt" style="position: relative; visibility: visible; height: auto;">
                        <div id="fbar" class="mSAqxd" style="left:0;right:0">
                            <div class="fbar b2hzT">
                                
                            </div>
                            <div class="fbar"><span class="B4GxFc"><span id="fsl"><a class="Fx4vi"
                                            ref="https://support.google.com/websearch/?p=ws_results_help&amp;hl=en-IN&amp;fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw1pMqL4P-c2v-w7aJ4SNns7','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8KwCegQIExBD','','',event)">Help</a><a
                                            ref="#" class="Fx4vi" data-bucket="websearch" id="dk2qOd" target="_blank"
                                            jsaction="gf.sf" data-ved="2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQLnoECBMQRA">Send
                                            feedback</a><a class="Fx4vi" ref="https://policies.google.com/privacy?fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw12z8DS9cd-g0Aokit_wxri','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8awCegQIExBF','','',event)">Privacy</a><a
                                            class="Fx4vi" ref="https://policies.google.com/terms?fg=1"
                                            onmousedown="return rwt(this,'','','','','AOvVaw3sEM_N0elgYQx8WbCXpj3n','','2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQ8qwCegQIExBG','','',event)">Terms</a></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- cctlcm 5 cctlcm -->
            <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
            (function() {
                function k() {
                    return window.performance && window.performance.navigation && window.performance.navigation.type
                };

                function m(a, b, c) {
                    return !a || !b && p(a) ? 0 : a.getBoundingClientRect ? q(a, b, c, function(e) {
                        return e.getBoundingClientRect()
                    }) : 1
                }

                function p(a) {
                    return "none" == a.style.display ? !0 : document.defaultView && document.defaultView
                        .getComputedStyle ? (a = document.defaultView.getComputedStyle(a), !!a && ("hidden" == a
                            .visibility || "0px" == a.height && "0px" == a.width)) : !1
                }

                function q(a, b, c, e) {
                    var d = e(a),
                        f = d.left + window.pageXOffset,
                        n = d.top + window.pageYOffset,
                        h = d.width,
                        l = d.height,
                        g = 0;
                    if (!b && 0 >= l && 0 >= h) return g;
                    0 > n + l ? g = 2 : n >= (window.innerHeight || document.documentElement.clientHeight) && (g =
                        4);
                    if (0 > f + h || f >= (window.innerWidth || document.documentElement.clientWidth)) g |= 8;
                    else if (c) {
                        for (b = d.left; a && a != c; a = a.parentElement) b += a.scrollLeft;
                        c = e(c);
                        if (b + h < c.left || b >= c.right) g |= 8
                    }
                    return g || 1
                };
                var r, t = ["aft", "hct", "prt", "pprt", "sct"];

                function u(a) {
                    return google.c.slp ? a in google.c.p ? google.c.p[a] : -1 : (a = v.search.match(new RegExp(
                        "[?&]" + a + "=(\\d+)"))) ? Number(a[1]) : -1
                }

                function w(a) {
                    r.removeEventListener("click", w);
                    a.stopPropagation && a.stopPropagation()
                }
                var v = location;
                var x = 0,
                    y = 0,
                    z = 0,
                    A = 0,
                    B = 0,
                    C, D;

                function E(a, b, c, e) {
                    var d = google.timers.load.t[a];
                    d && (c || e && b && b < d) || google.tick("load", a, b)
                }

                function F(a, b) {
                    b = b || google.time();
                    E("aft", b, !1, !0);
                    ++B;
                    G();
                    H(a, b)
                }

                function H(a, b) {
                    a = b || google.time();
                    E("iml", a, !1, !0);
                    ++y;
                    I()
                }

                function I() {
                    D || y != x || google.c.u("il")
                }

                function G() {
                    if (!C && B == z) {
                        var a = "&ima=" + z + "&imad=" + A;
                        google.timers.load.e.imn && (a += "&imn=" + google.timers.load.e.imn);
                        var b = google.timers.load.m;
                        if (!b || !b.prs) {
                            var c = google.timers.load,
                                e = google.c.inp && k() ? 0 : u("qsubts");
                            0 < e && (b = u("fbts"), 0 < b && (c.t.start = Math.max(e, b)));
                            var d = c.t,
                                f = d.start;
                            b = {
                                wsrt: c.wsrt
                            };
                            for (var n = 0, h; h = t[n++];) {
                                var l = d[h];
                                l && f && (b[h] = l - f)
                            }
                            0 < e && (b.gsasrt = c.t.start - e);
                            c = "/gen_204?s=" + google.sn + "&t=aft&atyp=csi&ei=" + google.kEI + "&rt=";
                            e = "";
                            for (var g in b) c += e + g + "." + b[g], e = ",";
                            google.cshid &&
                                (c += "&cshid=" + google.cshid);
                            2 == k() && (c += "&bb=1");
                            1 == k() && (c += "&r=1");
                            "gsasrt" in b && (g = u("qsd"), 0 < g && (c += "&qsd=" + g));
                            google.kBL && (c += "&bl=" + google.kBL);
                            a = c + (a || "");
                            (r = document.getElementById("csi-ping")) ? (r.addEventListener("click", w), r
                                .setAttribute("ping", a), r.click()) : navigator.sendBeacon ? navigator.sendBeacon(
                                a, "") : google.log("", "", a)
                        }
                    }
                }
                var J = "src bsrc url ll image img-url".split(" ");

                function K(a) {
                    var b = "string" != typeof a.src || !a.src,
                        c = !!a.getAttribute("data-bsrc"),
                        e = a.getAttribute("data-deferred"),
                        d;
                    if (d = !e) a: {
                        d = 0;
                        for (var f; f = J[d++];)
                            if (a.getAttribute("data-" + f)) {
                                d = !0;
                                break a
                            } d = !1
                    }
                    d && a.setAttribute("data-lzy_", 1);
                    b = (d = (b || a.complete) && !e && !c) && !google.c.lhc && Number(a.getAttribute(
                        "data-iml")) || 0;
                    for (f = a; f && "center_col" != f.id && "rhscol" != f.id;) f = f.parentElement;
                    c = m(a, c, f);
                    a.setAttribute("data-atf", c);
                    ++x;
                    d && !b || a.hasAttribute("data-noaft") ? ++y : (d = (c = 1 == c) ? F : H, c && (++z, e && ++A),
                        b ? d(void 0, b) : google.rll(a, !0, d))
                };
                (function() {
                    var a = google.time();
                    if (google.timers && google.timers.load.t) {
                        var b = !google.c.setup;
                        b && (D = C = !0, google.c.b("il"));
                        for (var c = document.getElementsByTagName("img"), e = 0, d = void 0; d = c[e++];) b ?
                            K(d) : d.hasAttribute("data-atf") || google.c.setup(d);
                        E("prt", a);
                        E("aft", a, !0);
                        E("iml", a, !0);
                        google.c.e("load", "imn", String(b ? x : c.length));
                        b ? (C && (C = !1, G()), D = !1, I()) : google.c.ub();
                        google.c.glu && google.c.glu();
                        google.rll(window, !1, function() {
                            E("ol", void 0);
                            google.c.u("pr")
                        })
                    }
                })();
            }).call(this);
            </script>
            <div></div>
            <style id="dstyle">
            .minidiv .RNNXgb {
                height: 32px;
                border-radius: 16px;
                margin: 10px 0 0
            }

            .minidiv .emcav .RNNXgb {
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0
            }

            .emcav.emcat .RNNXgb {
                border-bottom-left-radius: 24px;
                border-bottom-right-radius: 24px
            }

            .minidiv .emcav.emcat .RNNXgb {
                border-bottom-left-radius: 16px;
                border-bottom-right-radius: 16px
            }

            .minidiv .SDkEP {
                padding-top: 0
            }

            .minidiv .logo {
                padding: 0 32px
            }

            .minidiv .iblpc {
                margin-top: 0
            }

            .minidiv .gLFyf {
                margin-top: -35px;
            }

            .minidiv .dRYYxd {
                margin-top: 0
            }

            .minidiv .clear-button {
                line-height: 32px
            }

            .minidiv .lBbtTb {
                width: 20px
            }

            .minidiv .Tg7LZd {
                height: 32px;
                line-height: 32px
            }

            .minidiv .Tg7LZd .FAuhyb {
                height: 20px;
                width: 20px
            }

            .minidiv .Tg7LZd svg {
                height: 20px;
                width: 20px
            }

            .minidiv .aajZCb {
                border-bottom-left-radius: 16px;
                border-bottom-right-radius: 16px
            }

            .S3nFnd {
                display: flex
            }

            .lh87ke:link,
            .lh87ke:visited {
                color: #36c;
                cursor: pointer;
                font: 11px arial, sans-serif;
                padding: 0 5px;
                text-decoration: none;
                flex: auto;
                align-self: flex-end;
                margin: 0 16px 5px 0
            }

            .lh87ke:hover {
                text-decoration: underline
            }

            .sb7 {
                background: url() no-repeat;
                min-height: 0px;
                min-width: 0px;
                height: 0px;
                width: 0px
            }

            .sb27 {
                background: url(/images/searchbox/desktop_searchbox_sprites302_hr.webp) no-repeat 0 -21px;
                background-size: 20px;
                min-height: 20px;
                min-width: 20px;
                height: 20px;
                width: 20px
            }

            .sb43 {
                background: url(/images/searchbox/desktop_searchbox_sprites302_hr.webp) no-repeat 0 0;
                background-size: 20px;
                min-height: 20px;
                min-width: 20px;
                height: 20px;
                width: 20px
            }

            .sb53.sb53 {
                padding: 0 4px;
                margin: 0
            }

            .minidiv .sbl1 {
                font-size: 14px
            }

            .sbl1p {
                color: #52188c
            }

            .sbdb:hover {
                color: #1a73e8;
                text-decoration: underline
            }

            .sbdb {
                color: #80868b;
                cursor: pointer;
                font: 13px arial, sans-serif;
                align-self: center
            }

            .sbhl {
                background: #eee
            }

            .mus_pc {
                display: block;
                margin: 6px 0
            }

            .mus_il {
                font-family: Arial, HelveticaNeue-Light, HelveticaNeue, Helvetica;
                padding-top: 7px;
                position: relative
            }

            .mus_il:first-child {
                padding-top: 0
            }

            .mus_il_at {
                margin-left: 10px
            }

            .mus_il_st {
                right: 52px;
                position: absolute
            }

            .mus_il_i {
                align: left;
                margin-right: 10px
            }

            .mus_it3 {
                margin-bottom: 3px;
                max-height: 24px;
                vertical-align: bottom
            }

            .mus_it5 {
                height: 24px;
                width: 24px;
                vertical-align: bottom;
                margin-left: 10px;
                margin-right: 10px;
                transform: rotate(90deg)
            }

            .mus_tt3 {
                color: #767676;
                font-size: 12px;
                vertical-align: top
            }

            .mus_tt5 {
                color: #dd4b39;
                font-size: 14px
            }

            .mus_tt6 {
                color: #3d9400;
                font-size: 14px
            }

            .mus_tt8 {
                font-size: 16px;
                font-family: Arial, sans-serif
            }

            .mus_tt17 {
                color: #212121;
                font-size: 20px
            }

            .mus_tt18 {
                color: #212121;
                font-size: 24px
            }

            .mus_tt19 {
                color: #767676;
                font-size: 12px
            }

            .mus_tt20 {
                color: #767676;
                font-size: 14px
            }

            .mus_tt23 {
                color: #767676;
                font-size: 18px
            }

            .hdtbU {
                top: -500px;
                white-space: nowrap
            }

            .hdtbU .hdtbItm,
            .hdtbU li {
                list-style: none outside none
            }

            .hdtbItm {
                background: #fff
            }

            .hdtbSel,
            .hdtbSel #cdrlnk {
                background-image: url(//ssl.gstatic.com/ui/v1/menu/checkmark2.png);
                background-position: left center;
                background-repeat: no-repeat
            }

            .wIV7Db {
                visibility: hidden
            }

            .KUYZFd {
                border-top: 1px solid #ddd;
                cursor: default;
                height: 0;
                margin: 5px 0;
                overflow: hidden;
                padding: 0
            }

            .Qj0a9e {
                border-top: 1px solid #ebebeb;
                margin: 5px 0
            }

            .CXrxm {
                background-image: url(//ssl.gstatic.com/ui/v1/menu/checkmark.png);
                background-position: left center;
                background-repeat: no-repeat
            }

            .hdtb-mn-cont {
                height: 22px;
                white-space: nowrap
            }

            .hdtb-mn-hd {
                color: #70757a;
                display: inline-block;
                position: relative;
                padding-top: 0;
                padding-bottom: 0;
                padding-right: 18px;
                padding-left: 12px;
                line-height: 22px;
                cursor: pointer
            }

            #XJDHvf {
                display: inline-block;
                width: 180px;
            }

            .kpbb,
            .kpgrb,
            .ksb {
                -moz-border-radius: 2px;
                border-radius: 2px;
                cursor: default;
                font-family: arial, sans-serif;
                font-size: 11px;
                font-weight: bold;
                height: 27px;
                line-height: 27px;
                margin: 2px 0;
                min-width: 54px;
                padding: 0 8px;
                text-align: center;
                transition: all 0.218s, visibility 0s;
                -moz-user-select: none;
            }

            .ksb {
                background-color: #f5f5f5;
                background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
                border: 1px solid #dcdcdc;
                border: 1px solid rgba(0, 0, 0, .1);
                color: #444;
                background-image: -moz-linear-gradient(top, #f5f5f5, #f1f1f1);
            }

            a.ksb,
            .div.ksb {
                color: #444;
                text-decoration: none;
                cursor: default
            }

            .kpbb:hover,
            .kpgrb:hover,
            .ksb:hover {
                box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
                transition: all 0.0s
            }

            .ksb:hover {
                background-color: #f8f8f8;
                background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
                background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
                border: 1px solid #c6c6c6;
                color: #222;
            }

            .ksb:active {
                background-color: #f6f6f6;
                background-image: -moz-linear-gradient(top, #f6f6f6, #f1f1f1);
                background-image: linear-gradient(top, #f6f6f6, #f1f1f1);
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
            }

            .kpbb,
            .kpgrb {
                border-radius: 2px;
                color: #fff
            }

            .kpbb:hover,
            .kpgrb:hover {
                box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
                color: #fff
            }

            .kpbb:active,
            .kpgrb:active {
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3)
            }

            .kpbb {
                background-color: #4d90fe;
                background-image: linear-gradient(top, #4d90fe, #4787ed);
                border: 1px solid #3079ed
            }

            .kpbb:hover {
                background-color: #357ae8;
                background-image: linear-gradient(top, #4d90fe, #357ae8);
                background-image: linear-gradient(top, #4d90fe, #357ae8);
                border: 1px solid #2f5bb7
            }

            a.kpbb:link,
            a.kpbb:visited {
                color: #fff
            }

            .kpgrb {
                background-color: #f5f5f5;
                background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
                background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
                border: 1px solid #dcdcdc;
                color: #555
            }

            .kpgrb:hover {
                background-color: #f8f8f8;
                background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
                background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
                border: 1px solid #dcdcdc;
                color: #333
            }

            a.kpgrb:link,
            a.kpgrb:visited {
                color: #555
            }

            .ktf {
                -moz-border-radius: 1px;
                -moz-box-sizing: content-box;
                background-color: #fff;
                border: 1px solid #d9d9d9;
                border-top: 1px solid #c0c0c0;
                box-sizing: content-box;
                color: #333;
                display: inline-block;
                height: 29px;
                line-height: 27px;
                padding-left: 8px;
                vertical-align: top
            }

            .ktf:hover {
                -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
                border: 1px solid #b9b9b9;
                border-top: 1px solid #a0a0a0;
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
            }

            .ktf:focus {
                -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3);
                border: 1px solid #4d90fe;
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, .3);
                outline: none
            }

            .ktf.mini {
                font-size: 11px;
                height: 17px;
                line-height: 17px;
                padding: 0 2px
            }

            .ksb.mini {
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                height: 17px;
                line-height: 17px;
                min-width: 0
            }

            #vjyzWd {
                border-top: 1px solid #ebebeb;
                margin-top: 5px;
                padding-top: 5px
            }

            .hdtbSel#vjyzWd,
            .hdtbSel#vjyzWd:hover {
                background: none;
                padding: 5px 0 0
            }

            #cdrlnk {
                cursor: pointer
            }

            .T3kYXe,
            .OouJcb,
            .rzG2be {
                color: #666
            }

            .OouJcb,
            .rzG2be {
                font-family: arial, sans-serif;
                width: 100%;
                display: inline;
                margin: 0 4px
            }

            .J6UZg .goog-date-picker {
                left: 154px;
                background-color: #f1f1f1;
                border-radius: 2px;
                border: none;
                font-size: 12px;
                outline: none;
                padding: 5px 1px 10px;
                position: absolute;
                top: 61px;
                user-select: none
            }

            .J6UZg .goog-date-picker table {
                padding: 0 10px;
                width: 175px
            }

            .J6UZg .goog-date-picker table thead td {
                border-bottom: 1px solid #e5e5e5
            }

            .J6UZg .goog-date-picker tbody th {
                width: 0
            }

            .J6UZg tr.goog-date-picker-head {
                height: 27px
            }

            .J6UZg tr.goog-date-picker-head td {
                white-space: nowrap
            }

            .J6UZg .goog-date-picker-monthyear {
                font-size: 13px
            }

            .J6UZg .goog-date-picker tbody {
                outline: none;
                font-size: 13px
            }

            .J6UZg .goog-date-picker td,
            .J6UZg .goog-date-picker th {
                text-align: center
            }

            .J6UZg .goog-date-picker-btn {
                background: none;
                border: none;
                cursor: pointer;
                font-size: 12px;
                outline: none;
                padding: 0;
                position: relative;
                top: -1px
            }

            .J6UZg button.goog-date-picker-btn {
                font-size: 12px;
                vertical-align: middle
            }

            .J6UZg .goog-date-picker-wday,
            .J6UZg .goog-date-picker-date {
                font-weight: normal;
                padding: 0 1px
            }

            .J6UZg .goog-date-picker-wday {
                padding-top: 3px;
                line-height: 15px
            }

            .J6UZg td.goog-date-picker-selected {
                background-color: #3369e8;
                border-radius: 2px;
                color: #fff
            }

            .J6UZg .goog-date-picker-other-month {
                color: #d9d9d9
            }

            .J6UZg .goog-date-picker-date {
                cursor: pointer;
                width: 20px;
                line-height: 15px
            }

            .J6UZg .goog-date-picker-foot {
                display: none
            }

            .J6UZg td.goog-date-picker-date:hover {
                background-color: #c8c8c8;
                border-radius: 2px
            }

            .J6UZg td.goog-date-picker-year,
            .J6UZg td.goog-date-picker-month {
                padding: 3px 0
            }

            .J6UZg button.goog-date-picker-year,
            .J6UZg button.goog-date-picker-month {
                color: #000
            }

            .J6UZg button.goog-date-picker-month {
                width: 77px
            }

            .J6UZg button.goog-date-picker-year {
                width: 50px
            }

            .J6UZg .goog-date-picker-menu {
                background: #fff;
                border: solid 1px #6b90da;
                cursor: pointer;
                outline: none;
                position: absolute
            }

            .UfY8P tr:nth-child(2) .goog-date-picker-other-month {
                color: #777
            }

            .T3kYXe {
                padding: 0 15px
            }

            .suap3e {
                color: #d9d9d9;
                pointer-events: none
            }

            .vOvh1b {
                left: 0;
                background: #fff;
                height: 100%;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=75)";
                opacity: .75;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000
            }

            .J6UZg {
                left: 50%;
                background: #fff;
                border: 1px solid #c5c5c5;
                box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
                height: 241px;
                margin-left: -202px;
                position: fixed;
                top: 250px;
                width: 373px;
                z-index: 1001
            }

            .QIQ7Cc.J6UZg {
                left: 0;
                margin-left: 0
            }

            .QIQ7Cc .Jy9Ore,
            .QIQ7Cc .Qtsmnf {
                left: 5px
            }

            .QIQ7Cc .NwEGxd {
                left: -8px
            }

            .Gwgzqd {
                right: 11px;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAElBMVEX////39/e9vb2zs7PCwsLv7++5ffrDAAAAL0lEQVQI12MIEWBgdGVwVmQQMmEQMhJUVmRgVFYyEmBgEDJWZICSEBGILEQlWBcAq64Ft1WDk9gAAAAASUVORK5CYII=) center no-repeat;
                cursor: pointer;
                height: 20px;
                position: absolute;
                top: 10px;
                user-select: none;
                width: 20px
            }

            .Jy9Ore {
                left: 42px;
                color: #222;
                font-size: 16px;
                position: absolute;
                top: 34px
            }

            .Qtsmnf {
                left: 42px;
                color: #222;
                position: absolute
            }

            .tmDYm {
                top: 72px
            }

            .iWBKNe {
                top: 111px
            }

            .OouJcb.mini,
            .rzG2be.mini {
                left: 50px;
                font-size: 13px;
                padding: 5px;
                position: absolute;
                width: 84px
            }

            .OouJcb {
                top: 65px
            }

            .rzG2be {
                top: 104px
            }

            .NwEGxd {
                position: relative
            }

            .qomYCd {
                left: 50px;
                background-color: #f1f1f1;
                border-bottom-left-radius: 2px;
                border-top-left-radius: 2px;
                height: 37px;
                position: absolute;
                top: 61px;
                transition: top .13s linear;
                width: 110px
            }

            .KbfSHd {
                top: 100px
            }

            .lRiKjb {
                transition: none
            }

            .Ru1Ao {
                left: 54px;
                color: #222;
                padding: 3px 15px;
                position: absolute;
                top: 143px
            }

            .hdtb-ab-o #result-stats {
                opacity: 0;
                top: 13px
            }

            .vryjee {
                display: none
            }

            .kp-blk .c94Vsf .mod:first-child {
                padding-top: 0;
                border-top: 0
            }

            .qs-ic .kp-blk .mod:not(.NFQFxe) {
                padding-left: 26px;
                padding-right: 26px
            }

            #center_col .Jb0Zif .kp-blk {
                margin-left: 0;
                margin-right: 0
            }

            #rhs .kp-blk {
                line-height: 1.58;
                margin: 6px 0 0 2px;
                margin: 6px 0 0 1px;
            }

            #rhs .kp-blk .mod:not(.NFQFxe) {
                padding-left: 15px;
                padding-right: 15px
            }

            #rhs .g-blk.rhsvw {
                border: 0;
                padding: 0
            }

            hr.ga9aRe {
                background-color: rgba(0, 0, 0, .1);
                border: 0;
                height: 1px;
                margin: 0
            }

            .kp-blk.T1bmQ .vk_arc {
                margin-top: 0
            }

            .nGydZ {
                padding-bottom: 7px
            }

            .JuDqlc {
                width: 620px
            }

            .xXEKkb {
                color: #1a0dab !important
            }

            .knowledge-panel {
                font-size: 14px
            }

            .knowledge-panel.kp-blk {
                padding-bottom: 1px
            }

            .zifkQc {
                border: none;
                box-shadow: none
            }

            .ruTcId .g {
                clear: both;
                padding-bottom: 10px
            }

            .HanQmf .g {
                padding-bottom: 11px
            }

            .BHxvde .mod:not(.NFQFxe) {
                border-top: 1px solid #e5e5e5;
                margin-top: 16px;
                padding-left: 0;
                padding-right: 0;
                padding-top: 15px
            }

            .BHxvde .mod:first-child:not(.mnr-c) {
                border-top: 0;
            }

            .garHBe {
                color: #222;
                font-size: 20px;
                line-height: 1.3;
                position: relative
            }

            .garHBe a {
                color: #222
            }

            .xpdopen .Hhmu2e {
                overflow: inherit
            }

            .rKR6H {
                padding-top: 0.1px
            }

            .OJXvsb .xpdclose .mod.siXlze {
                padding-bottom: 16px
            }

            .A4O3hd {
                box-shadow: none !important
            }

            .ecRggb {
                background-color: #fff;
                box-shadow: none;
                border: 1px solid #dfe1e5;
                border-radius: 8px;
                margin: 0 0 16px 0
            }

            .c2xzTb .zloOqf {
                font-size: 16px;
                margin-bottom: 16px;
                margin-top: -8px;
            }

            .FLWspc {
                margin: 16px
            }

            .LFYdN {
                font-size: 16px;
                margin: 16px
            }

            .d9FyLd {
                padding: 0 0 10px
            }

            .kX21rb {
                display: inline-block;
                color: #70757a;
                font-size: 12px;
                line-height: 1.34;
                white-space: nowrap
            }

            .iCLTMe {
                font-size: 12px;
                margin-bottom: 0;
                margin-top: 4px
            }

            .bqn9Jd {
                font-size: 12px;
                font-color: #808080;
                padding-left: 4px
            }

            .XLbmod {
                margin-left: 4px;
                margin-right: 4px;
                font-size: 10px
            }

            .BUhrrf {
                padding-right: 5px
            }

            .Jb0Zif .qDOt0b,
            .rhs-osrp .qDOt0b {
                border-bottom: 1px solid #dfe1e5;
                padding-bottom: 6px
            }

            .rjOVwe.ILfuVd {
                font-size: 16px;
                line-height: 20px
            }

            .iq-xp-block .ILfuVd {
                line-height: 20px;
                font-size: 14px
            }

            .iq-xp-block .answered-question.ILfuVd {
                padding-left: 15px;
                padding-right: 15px
            }

            .iq-xp-block .LGOjhe {
                padding-left: 16px;
                padding-right: 16px
            }

            .kp-blk .rjOVwe {
                padding-top: 22px;
                padding-bottom: 0;
                margin-bottom: 1px
            }

            .LGOjhe.FQIRLb {
                padding: 14px 16px 10px
            }

            .UiGGAb.ILfuVd {
                font-size: 14px;
                line-height: 20px
            }

            .iq-xp-block .answered-question .LGOjhe {
                border-bottom: 1px solid #eeeeee
            }

            .R1FwAe .LGOjhe {
                margin-top: 8px;
                height: 90px;
                overflow-y: hidden
            }

            .xWd7I {
                padding-top: 12px;
                font-size: 14px;
            }

            .wa-xp-block .LGOjhe {
                padding: 22px 0 1px
            }

            .wa-xp-block .Z1hOCe {
                margin-top: 11px
            }

            #rhs .desktop-wa-xp-block .kp-blk {
                border: 0;
                margin: 0
            }

            #rhs .desktop-wa-xp-block .g {
                overflow: hidden;
                padding: 0;
                width: auto
            }

            .desktop-wa-xp-block .g-blk {
                margin-bottom: 5px
            }

            .desktop-wa-xp-block .rjOVwe.ILfuVd {
                font-size: 13px;
                line-height: 15px
            }

            .desktop-wa-xp-block .LGOjhe {
                padding-bottom: 8px
            }

            .desktop-wa-xp-block .zloOqf {
                font-size: 13px;
                font-weight: lighter;
                margin-bottom: 14px
            }

            .desktop-wa-xp-block .zloOqf :first-child {
                margin-top: 6px
            }

            .desktop-wa-xp-block .LrzXr {
                color: #70757a
            }

            .xpd-wa .g-blk {
                margin: initial
            }

            .xpd-wa .kp-blk {
                border: initial;
                box-shadow: none
            }

            .PZY7Gb p:first-child,
            .PZY7Gb ul:first-child,
            .PZY7Gb ol:first-child {
                margin-block-start: 0
            }

            .PZY7Gb p:last-child,
            .PZY7Gb ul:last-child,
            .PZY7Gb ol:last-child {
                margin-block-end: 0
            }

            .PZY7Gb li {
                margin-left: 32px
            }

            .PZY7Gb li p {
                margin: 0
            }

            .PZY7Gb ul li {
                list-style: disc
            }

            .PZY7Gb ol li {
                list-style: decimal
            }

            .MMgsKf {
                padding-top: 2px
            }

            .TdRuOd:hover {
                cursor: pointer;
                text-decoration: underline
            }

            .QPML4e {
                font-style: italic;
                margin-right: -2em
            }

            .kno-ftr.rhsvw {
                margin-left: 0;
                padding-top: 4px
            }

            #rhs .kno-ftr.rhsvw {
                border: none
            }

            .HpcQd {
                outline: 0;
                font-style: italic
            }

            .HpcQd:hover {
                cursor: pointer;
                text-decoration: underline
            }

            .iqp41c {
                color: #70757a;
                font-size: 14px;
                margin-top: -2px
            }

            .QXVc5c {
                display: flex;
                justify-content: space-between
            }

            .iOBnre {
                font-size: 16px;
                padding-bottom: 10px;
                padding-top: 20px;
                line-height: 1.58
            }

            .iePmf {
                border: 1px solid #DFE1E5;
                border-radius: 18px;
                padding: 4px 8px 6px 8px
            }

            .iePmf span {
                color: #222
            }

            .V1sL5c {
                overflow: visible
            }

            .FXMOpb .vp45yf {
                margin-top: -14px;
                transform: rotate(180deg);
                transform: rotate(180deg)
            }

            .ZGh7Vc {
                display: inline-block;
                margin-top: 6px
            }

            .di3YZe {
                font-size: 16px;
                line-height: 1.375;
                margin-bottom: 20px
            }

            .RqBzHd {
                padding: 0 20px
            }

            .TrT0Xe {
                margin-bottom: 4px
            }

            .co8aDb {
                margin-bottom: 15px
            }

            .i8Z77e .TrT0Xe {
                list-style-type: disc
            }

            .X5LH0c .TrT0Xe {
                list-style: inherit
            }

            .truncation-information:link,
            .truncation-information:visited {
                color: #1a0dab;
                font-size: 14px;
                line-height: 1.58
            }

            .iJvafd .co8aDb {
                font-size: 18px
            }

            .iJvafd .RqBzHd b {
                font-weight: normal
            }

            .LjTgvd .di3YZe {
                font-size: 16px
            }

            .iJvafd .di3YZe {
                font-size: 16px;
                line-height: 24px
            }

            .R1FwAe .di3YZe {
                padding-top: 18px;
                height: 100px;
                overflow-y: hidden
            }

            .iq-content .di3YZe {
                padding-top: 4px;
            }

            .iq-content-first .di3YZe {
                padding-top: 0px;
            }

            .iq-xp-block .iq-content .di3YZe {
                padding: 12px 15px 4px;
                margin-bottom: 0;
                border-bottom: solid 1px #eeeeee
            }

            .XZAt2e {
                font-size: 14px;
                display: inline-block;
                padding-top: 10px;
                margin-left: -20px;
            }

            .Od5Jsd {
                display: inline-block;
                font-size: 12px;
                line-height: 1.34;
                color: #70757a;
                margin-top: 6px
            }

            .rvIhN {
                display: inline-block;
                font-size: 14px;
                color: #70757a;
                margin-left: 5px;
                margin-right: 5px
            }

            .FV85tb {
                font-size: 12px;
                margin-bottom: 0px;
                margin-top: 4px
            }

            .TK6JBe {
                font-size: 12px;
                font-color: #808080;
                padding-left: 4px
            }

            .BqZivd {
                margin-left: 4px;
                margin-right: 4px;
                font-size: 10px
            }

            .Q29QOb {
                padding-right: 5px
            }

            .FObuKc {
                border: 1px solid #dfe1e5;
                border-radius: 8px;
                margin: 0 -20px
            }

            .zVvuGd.H7YPIb {
                white-space: normal
            }

            .Jb0Zif .zVvuGd {
                padding-bottom: 16px
            }

            .Jb0Zif:not(.rhs-osrp) .OTFaAf .zVvuGd {
                padding-top: 32px
            }

            .rhs-osrp .zVvuGd {
                background-color: transparent;
                padding-left: 8px;
                padding-top: 16px
            }

            .qLYAZd {
                margin-top: 24px
            }

            .xpdclose .xpdxpnd.qLYAZd {
                margin: 0
            }

            .mod.NFQFxe .qLYAZd {
                margin-left: 16px;
                margin-right: 16px
            }

            #rhs .mod.NFQFxe .qLYAZd {
                margin-left: 15px;
                margin-right: 15px
            }

            .ecRggb .qLYAZd {
                margin-top: 15px
            }

            .k0bPBc {
                display: inline-block;
                padding-left: 8px
            }

            .kno-vrt-t .H0W2dc {
                position: absolute;
                top: 5px;
                left: 20px;
            }

            .rhs-osrp .kno-vrt-t .H0W2dc {
                left: 13px
            }

            .h9QdYc {
                border-bottom-width: 4px;
                border-bottom-style: solid;
                border-bottom-color: #4285f4
            }

            #rhs:not(.rhs-osrp) .kno-vrt-t {
                padding-left: 16px
            }

            #rhs:not(.rhs-osrp) .kno-vrt-t.MRfBrb.qCptjf {
                padding-left: 12px
            }

            .rhs-osrp .kno-vrt-t.MRfBrb {
                padding-left: 8px
            }

            .xlBGCb,
            .C9iYEe {
                white-space: normal
            }

            .l0Dlze {
                padding-bottom: 5px
            }

            .xlBGCb {
                color: #70757a;
            }

            .mytS8 {
                font-size: 14px
            }

            .xlBGCb {
                font-size: 12px;
                padding-top: 2px;
                line-height: normal
            }

            .rhs-osrp .XQ6p1d {
                border-radius: 8px
            }

            .O0H6L {
                background-color: #4285f4;
                border-radius: 50%;
                box-sizing: border-box;
                color: #fff;
                line-height: 0;
                margin-left: 5px;
                padding: 2px;
                position: absolute;
                top: 5px;
                height: 15px;
                width: 15px;
            }

            .QrcTEc {
                margin-left: 22px;
            }

            .kn8nwf {
                align-items: center;
                background: linear-gradient(top, rgba(0, 0, 0, .0) 0%, rgba(0, 0, 0, .7) 100%);
                box-sizing: border-box;
                color: #fff;
                position: absolute;
                font-size: 11px;
                padding: 2px 4px;
            }

            .oagL0d {
                height: 11px;
                width: 11px;
            }

            .z3dsh {
                background: #000;
                background: rgba(0, 0, 0, .6);
                bottom: 0;
                color: #fff;
                font-size: 14px;
                line-height: 1.58;
                padding: 5px 10px;
                position: absolute;
                right: 0
            }

            .brs_col .IWTYQ {
                display: block;
                border-top: 1px solid #dadce0;
                width: 290px
            }

            .Jb0Zif g-section-with-header {
                margin: 0 0 28px
            }

            .ss6qqb g-section-with-header {
                margin: 0 0 16px
            }

            .AaVjTc a.G0iuSb.a-no-hover-decoration:hover {
                text-decoration: none
            }

            #cnt.rfli .AaVjTc a {
                color: #4285f4;
                font-weight: normal
            }

            .fmulti {
                text-align: center
            }

            .known_loc {
                background: #4285f4
            }

            .unknown_loc {
                background: #9e9e9e
            }

            .known_loc,
            .unknown_loc {
                border-radius: 100%;
                display: inline-block;
                height: 10px;
                margin: 6px 4px 9px 0;
                vertical-align: middle;
                width: 10px
            }

            .eJ7tvc {
                color: rgba(0, 0, 0, .57);
                margin: 12px 20px;
                font-size: 14px
            }

            .AUiS2 {
                border: 1px solid rgba(0, 0, 0, .13);
                border-radius: 8px;
                box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
                outline: none;
                display: none;
                left: calc(100% + 64px);
                margin-top: 10px;
                top: 2px;
                opacity: 0;
                transition: all 150ms ease-in-out;
                transform-origin: top left;
                white-space: nowrap
            }

            .N90jdc {
                background-image: url(data:image/svg+xml,%0A%3Csvg%20focusable%3D%22false%22%20width%3D%2216px%22%20height%3D%2216px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M7.41%207.84L12%2012.42l4.59-4.58L18%209.25l-6%206-6-6z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E%0A);
                background-repeat: no-repeat;
                background-position: center;
                height: 16px;
                position: absolute;
                top: calc(100% + 15px);
                right: 4px;
                margin-right: -12px;
                margin-top: -34px;
                outline-width: 0;
                opacity: 0;
                padding: 3px;
                transition: transform 200ms ease-in-out, opacity 200ms ease-in-out;
                transform: rotate(-90deg);
                width: 16px
            }

            .d8lLoc {
                background-color: transparent;
                transform-origin: top
            }

            .hYkSRb {
                display: inline-block;
                overflow-x: hidden;
                overflow-y: hidden;
                margin-left: -16px;
                padding-right: 24px;
                width: 100%;
                padding-left: 20px
            }

            .hYkSRb::-webkit-scrollbar {
                display: none
            }

            .XCKyNd {
                background-image: url(data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2216px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2048%2048%22%20fill%3D%22%23000000%22%3E%0D%0A%20%20%20%20%3Cpath%20d%3D%22M38%2012.83L35.17%2010%2024%2021.17%2012.83%2010%2010%2012.83%2021.17%2024%2010%2035.17%2012.83%2038%2024%2026.83%2035.17%2038%2038%2035.17%2026.83%2024z%22%2F%3E%0D%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h48v48H0z%22%20fill%3D%22none%22%2F%3E%0D%0A%3C%2Fsvg%3E%0D%0A);
                background-repeat: no-repeat;
                background-position: center;
                position: absolute;
                right: 0;
                width: 16px;
                height: 16px;
                padding: 12px;
                z-index: 10;
                opacity: 0.54
            }

            .XCKyNd:focus {
                outline: none
            }

            .exp-outline {
                position: absolute;
                transition: opacity 150ms ease-in-out, height 150ms ease-in-out;
                pointer-events: none;
                opacity: 0;
                width: calc(100% - 2px);
                left: 0px;
                transform: translateY(-11px)
            }

            .d8lLoc {
                padding-left: 15px
            }

            .AUiS2 {
                box-shadow: none;
                margin-top: 8px;
            }

            .hYkSRb {
                line-height: 24px;
                max-height: 72px;
                margin-left: 0;
                overflow-x: hidden;
                padding-left: 0px;
                padding-right: 0;
                white-space: normal;
                width: calc(100% - 24px)
            }

            .eJ7tvc {
                margin-bottom: 4px;
                margin-left: 0px;
                margin-top: 14px
            }

            .exp-r {
                display: inline-block;
                margin-right: 16px;
                margin-bottom: 0
            }

            .N90jdc {
                transform: none
            }

            .exp-c {
                display: inline-block;
                vertical-align: top
            }

            .exp-r {
                display: block
            }

            .hYkSRb {
                white-space: nowrap
            }
            </style>
            <div id="xfootw">
                <div id="xfoot">
                    <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
                    (function() {
                        google.ldidly = -1;
                        google.ldi = {
                            "dimg_16": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcRBDrvbzKwVjQ-kzaSbFZkTcvh-mEDS0vSBVea2pYONKAnR6kQpHCMRNdB4_RhtGbeU-sw\u0026s\u003d0",
                            "dimg_18": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcQMog0RwV3Ly6poavNIIz7dXd3kBu2KRPUI0mVWRARkkKZG-6tGa8B767jChgqPg4n0rIY\u0026s\u003d0",
                            "dimg_22": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcSjvF63NHWl4WrQbotT7EGb748nFGKkQoA_2drEQ3Hq3ZyjhZGSGpg\u0026s\u003d0",
                            "dimg_26": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcTuH0LzbwjFJoYUEPJBH6O-87L5vtcC6qusuC58y1OU91k4NGQe7CbAI0E_iSA3aefvylM\u0026s\u003d0",
                            "dimg_30": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcQ7_YhBny8Fj4jC9CvpFuMCCTzwitopS-VsO6NQPLD2yVUUeohi82mnxiGDbLtjOSVMiZo\u0026s\u003d0",
                            "dimg_20": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcRs4NwbKL9ql7RW_LsSopdAjboEPzHYnF1HfLwuE62aSYdOCQ-Z902ooBX1PLfh5xMNb88n\u0026s\u003d0",
                            "dimg_24": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcS2EnCRqA8nyljUgT9SrmxG0QUThI4YU-rt-zpyzZ1UAAhHv8ZbsN6srJAawxTx7bdtH40\u0026s\u003d0",
                            "dimg_28": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcRkRsAFzGbGBU_HPO2c0g8u5-Gc--xQ6Gxr7P6E04dkwE5gfjurVCQpfeU_r0E5Cisgr4I\u0026s\u003d0",
                            "dimg_32": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcROrzY1U-C6vgvkSX2NOaUpmJRRgJfuyTfTbzZ4-Hfq0Zonu6AoMExHq7iyIqPLB78pjWg\u0026s\u003d0",
                            "dimg_34": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcQtxXpgFB3i7V9b5Ab6bV03vZ1VChrxRdkbVxbo6k_p2Y9EhQzydp1CFWQq6eNnNSDwqg0\u0026s\u003d0",
                            "dimg_36": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcROrzY1U-C6vgvkSX2NOaUpmJRRgJfuyTfTbzZ4-Hfq0Zonu6AoMExHq7iyIqPLB78pjWg\u0026s\u003d0",
                            "dimg_38": "https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcSDnAGgQRCV62UCTiSzlsVsBKr5bKzQvB9IXFKtF2P3mjeRI0bqDbbrZfZpvicN8Vv5DxE\u0026s\u003d0"
                        };
                        google.pim = {};
                    })();
                    (function() {
                        var u =
                            '/xjs/_/js/k\x3dxjs.s.en_GB.Drd4gOi7tUg.O/ck\x3dxjs.s.7BVcbcwxD6Y.L.F4.O/m\x3dFkg7bd,HcFEGb,IvlUe,MC8mtf,OF7gzc,RMhBfe,T4BAC,TJw5qb,Y33vzc,ZyRBae,cdos,cr,hsm,iDPoPb,jsa,mvYTse,tg8oTe,uz938c,vWNDde,ws9Tlc,yQ43ff,d,csi/am\x3dAkAAAABgCcCsGwDOfxAAgAtKHAAAQICWINhYIIVISAhAAACzsAAAQA/d\x3d1/dg\x3d2/ct\x3dzgms/rs\x3dACT90oHCTGKbWMo_H79h71Ut4aKgSR686A';
                        setTimeout(function() {
                            var b = document;
                            var a = "SCRIPT";
                            "application/xhtml+xml" === b.contentType && (a = a.toLowerCase());
                            a = b.createElement(a);
                            a.src = u;
                            google.timers && google.timers.load && google.tick && google.tick("load",
                                "xjsls");
                            document.body.appendChild(a)
                        }, 0);
                    })();
                    (function() {
                        window.google.xjsu =
                            '/xjs/_/js/k\x3dxjs.s.en_GB.Drd4gOi7tUg.O/ck\x3dxjs.s.7BVcbcwxD6Y.L.F4.O/m\x3dFkg7bd,HcFEGb,IvlUe,MC8mtf,OF7gzc,RMhBfe,T4BAC,TJw5qb,Y33vzc,ZyRBae,cdos,cr,hsm,iDPoPb,jsa,mvYTse,tg8oTe,uz938c,vWNDde,ws9Tlc,yQ43ff,d,csi/am\x3dAkAAAABgCcCsGwDOfxAAgAtKHAAAQICWINhYIIVISAhAAACzsAAAQA/d\x3d1/dg\x3d2/ct\x3dzgms/rs\x3dACT90oHCTGKbWMo_H79h71Ut4aKgSR686A';
                    })();

                    function _DumpException(e) {
                        throw e;
                    }

                    function _F_installCss(c) {}
                    (function() {
                        google.jl = {
                            em: [],
                            emw: false,
                            lls: 'default',
                            pdt: 0,
                            snet: true,
                            uwp: true
                        };
                    })();
                    (function() {
                        var pmc =
                            '{\x22Fkg7bd\x22:{},\x22HcFEGb\x22:{},\x22IvlUe\x22:{},\x22MC8mtf\x22:{},\x22OF7gzc\x22:{},\x22RMhBfe\x22:{},\x22T4BAC\x22:{},\x22TJw5qb\x22:{},\x22Y33vzc\x22:{},\x22ZyRBae\x22:{},\x22aa\x22:{},\x22abd\x22:{\x22abd\x22:false,\x22deb\x22:false,\x22det\x22:false},\x22async\x22:{},\x22bgd\x22:{\x22ac\x22:true,\x22as\x22:true,\x22at\x22:0,\x22ea\x22:true,\x22ed\x22:0,\x22ei\x22:true,\x22el\x22:true,\x22ep\x22:true,\x22er\x22:true,\x22et\x22:0,\x22eu\x22:false,\x22wl\x22:false},\x22cdos\x22:{\x22bih\x22:654,\x22biw\x22:1366,\x22cdobsel\x22:false,\x22dpr\x22:\x221\x22},\x22cr\x22:{\x22qir\x22:false,\x22rctj\x22:true,\x22ref\x22:false,\x22uff\x22:false},\x22csi\x22:{},\x22d\x22:{},\x22ddls\x22:{},\x22dvl\x22:{\x22cookie_secure\x22:true,\x22cookie_timeout\x22:21600,\x22driver_ui_type\x22:2,\x22jsc\x22:\x22[null,null,null,30000,null,null,null,2,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,[\\\x2286400000\\\x22,\\\x22604800000\\\x22,2.0]\\n,null,1,21600000]\\n\x22,\x22mnr_crd\x22:\x221\x22,\x22msg_dsc\x22:\x22From your Internet address\x22,\x22msg_dsc_url\x22:\x22\x22,\x22msg_dvl\x22:\x22From your device\x22,\x22msg_err\x22:\x22Location unavailable\x22,\x22msg_gps\x22:\x22Using GPS\x22,\x22msg_unk\x22:\x22Unknown\x22,\x22msg_upd\x22:\x22Update location\x22,\x22msg_use\x22:\x22Use precise location\x22,\x22uul_text\x22:\x22700091, Kolkata, West Bengal\x22},\x22foot\x22:{\x22dv\x22:\x22czP_aL-0-XwmcNh6fbLcG-gmBb7pJtc_b0uhmj4i1gIAAAA\x22,\x22pf\x22:true,\x22po\x22:true,\x22qe\x22:false},\x22gf\x22:{\x22pid\x22:196},\x22hsm\x22:{},\x22iDPoPb\x22:{},\x22jsa\x22:{\x22csi\x22:true,\x22csir\x22:100},\x22kyn\x22:{},\x22llc\x22:{},\x22lli\x22:{},\x22lu\x22:{},\x22m\x22:{},\x22mUpTid\x22:{},\x22mpck\x22:{\x22me\x22:false},\x22mu\x22:{\x22murl\x22:\x22https://adservice.google.com/adsid/google/ui\x22},\x22mvYTse\x22:{},\x22sb_wiz\x22:{\x22rfs\x22:[\x22\\u003Cb\\u003Ehow to prevent \\u003C/b\\u003Ehackers \\u003Cb\\u003Efrom stealing information\\u003C/b\\u003E\x22,\x22\\u003Cb\\u003Enorton \\u003C/b\\u003Eantivirus\x22,\x22does antivirus \\u003Cb\\u003Eprotect against ransomware\\u003C/b\\u003E\x22,\x22\\u003Cb\\u003Edifference between \\u003C/b\\u003Eantivirus \\u003Cb\\u003Eand network firewall\\u003C/b\\u003E\x22,\x22\\u003Cb\\u003Ebest \\u003C/b\\u003Eantivirus\x22,\x22\\u003Cb\\u003Edifference between \\u003C/b\\u003Eantivirus \\u003Cb\\u003Eand firewall\\u003C/b\\u003E\x22,\x22\\u003Cb\\u003Ehow to protect your computer from \\u003C/b\\u003Ehackers\x22,\x22\\u003Cb\\u003Eavast \\u003C/b\\u003Eantivirus\x22],\x22stok\x22:\x22yl4kv7lMxjbpyKI1JEo_k-IIOo4\x22},\x22sf\x22:{},\x22tg8oTe\x22:{},\x22tl\x22:{\x22rvkey\x22:\x22AIzaSyC_9Rt88UMjzgg5pIVArnfuIVkJx4zCdTY\x22},\x22uz938c\x22:{},\x22vWNDde\x22:{},\x22vs\x22:{},\x22ws9Tlc\x22:{},\x22yQ43ff\x22:{}}';
                        google.pmc = JSON.parse(pmc);
                    })();
                    (function() {
                        var r = ['sb_wiz', 'aa', 'abd', 'async', 'bgd', 'dvl', 'foot', 'kyn', 'lli', 'lu', 'm',
                            'mUpTid', 'mpck', 'mu', 'sf', 'tl', 'vs', 'exdc'
                        ];
                        google.plm(r);
                    })();
                    (function() {
                        var m = [
                            [
                                ["root", [
                                    ["t-w-XilABeKRA", "isglJWMv82Os", "r-isglJWMv82Os", null, null, "exdc",
                                        null, "G3eKy"
                                    ]
                                ]]
                            ]
                        ];
                        google.jsc && google.jsc.m(m);
                        google.log('rfl', '');
                    })();
                    (function() {
                        var m = ['By1WAk',
                            '[\x22psy-ab\x22,\x22gws-wiz\x22,\x22does antivirus stop hackers\x22,\x22\x22,null,1,0,0,11,\x22en\x22,\x22yl4kv7lMxjbpyKI1JEo_k-IIOo4\x22,\x22\x22,\x22yKLUXqeaC8XC3LUP2rau2A4\x22,0,\x22en-IN\x22,null,null,null,0,null,null,3,5,null,null,0,-1,0,0,0,\x22\x22,0,0,\x22\x22,null,0,null,null,null,\x22/suggest\x22,0,0,0,0,0,0,0,0,1,0,0,8,-1]\n',
                            'By1WBA',
                            '[0,0,0,[null,null,[[[3,null,null,[null,[[\x22qdr_\x22,1,6]\n,[\x22qdr_h\x22,0,6]\n,[\x22qdr_d\x22,0,6]\n,[\x22qdr_w\x22,0,6]\n,[\x22qdr_m\x22,0,6]\n,[\x22qdr_y\x22,0,6]\n,[\x22cdr_opt\x22,0,1,[1,\x22Custom range...\x22,null,\x22cdr:1,cd_min:x,cd_max:x\x22,\x22\x22,\x22text\x22,\x22\x22,\x22\x22,6,1,[[[\x22q\x22,\x22does antivirus stop hackers\x22]\n,[\x22client\x22,\x22firefox-b-d\x22]\n]\n]\n,\x22cdr_opt\x22,\x225/23/2004\x22,0]\n]\n]\n,0]\n]\n,[3,null,null,[null,[[\x22li_\x22,1,6]\n,[\x22li_1\x22,0,6]\n]\n,1]\n]\n]\n,null,[\x22tbs\x22]\n]\n]\n,null,null,[null,[[\x22/search?q\\u003ddoes+antivirus+stop+hackers\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\x22,null,null,\x22All\x22,1,null,1,null,null,\x22WEB\x22,[0,2]\n,null,null,0]\n,[\x22/search?q\\u003ddoes+antivirus+stop+hackers\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dnws\x22,null,null,\x22News\x22,0,null,1,null,null,\x22NEWS\x22,[10,2]\n,null,null,10]\n,[\x22/search?q\\u003ddoes+antivirus+stop+hackers\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003disch\x22,null,null,\x22Images\x22,0,null,1,null,null,\x22IMAGES\x22,[6,2]\n,null,null,6]\n,[\x22/search?q\\u003ddoes+antivirus+stop+hackers\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dvid\x22,null,null,\x22Videos\x22,0,null,1,null,null,\x22VIDEOS\x22,[13,2]\n,null,null,13]\n,[\x22/search?q\\u003ddoes+antivirus+stop+hackers\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dshop\x22,null,null,\x22Shopping\x22,0,null,1,null,null,\x22SHOPPING\x22,[12,2]\n,null,null,12]\n]\n,[[\x22https://maps.google.com/maps?client\\u003dfirefox-b-d\\u0026q\\u003ddoes+antivirus+stop+hackers\\u0026gs_lcp\\u003dCgZwc3ktYWIQAzICCAAyBggAEBYQHjIGCAAQFhAeMggIABAWEAoQHjIGCAAQFhAeMgYIABAWEB46BAgAEEdQ7W1Y7W1g9XNoAHABeACAAcIBiAHCAZIBAzAuMZgBAKABAqABAaoBB2d3cy13aXo\\u0026uact\\u003d5\\u0026um\\u003d1\\u0026ie\\u003dUTF-8\x22,null,null,\x22Maps\x22,0,null,1,null,null,\x22MAPS\x22,[8,2]\n,null,null,8]\n,[\x22/search?q\\u003ddoes+antivirus+stop+hackers\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dbks\x22,null,null,\x22Books\x22,0,null,1,null,null,\x22BOOKS\x22,[2,2]\n,null,null,2]\n,[\x22https://www.google.com/flights?q\\u003ddoes+antivirus+stop+hackers\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dflm\x22,null,null,\x22Flights\x22,0,null,1,null,null,\x22FLIGHTS\x22,[20,2]\n,null,null,20]\n,[\x22/search?q\\u003ddoes+antivirus+stop+hackers\\u0026client\\u003dfirefox-b-d\\u0026source\\u003dlnms\\u0026tbm\\u003dfin\x22,null,null,\x22Finance\x22,0,null,1,null,null,\x22FINANCE\x22,[22,2]\n,null,null,22]\n]\n]\n,null,1]\n',
                            'By1WAo',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2210\x22,\x22inline\x22,2,0,0]\n',
                            'By1WAs',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2212\x22,\x22inline\x22,2,0,0]\n',
                            'By1WAw',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2213\x22,\x22inline\x22,2,0,0]\n',
                            'By1WA8',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2214\x22,\x22inline\x22,2,0,0]\n',
                            'By1WA0',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2216\x22,\x22inline\x22,2,0,0]\n',
                            'By1WA4',
                            '[0,2500,\x22/search?client\\u003dfirefox-b-d\x22,\x2218\x22,\x22inline\x22,2,0,0]\n',
                            'By1WBE', '[0,\x22inline\x22,2,2500,0,0]\n', 'By1WBI',
                            '[\x22https://www.google.co.in/domainless/read?igu\\u003d1\x22,\x22AFz9ztsG13KcqzYRavJdVy-bH-9YMJ23aA:1590993608737\x22,3]\n',
                            'By1WBM', '[1,null,null,1261,1349,0,null,null,null,null,0]\n', 'tq7Pxb',
                            '[[[\x22uRoR4d\x22,0]\n,[\x22Nk1Bhf\x22,null,\x22#4285f4\x22]\n,[\x22gqXETb\x22,null,\x22#db4437\x22]\n,[\x22T1V3fc\x22,null,\x22#f4b400\x22]\n,[\x22pxDH4c\x22,null,\x22#0f9d58\x22]\n,[\x22lzJv9d\x22,null,\x22#fff\x22]\n,[\x22LACYrf\x22,0]\n,[\x22ptnYGd\x22,null,\x22[[[\\\x22box-sizing\\\x22,\\\x22box-sizing\\\x22]\\n,[\\\x22keyframes\\\x22,\\\x22keyframes\\\x22]\\n,[\\\x22animation\\\x22,\\\x22animation\\\x22]\\n,[\\\x22border-radius\\\x22,\\\x22border-radius\\\x22]\\n,[\\\x22transform\\\x22,\\\x22transform\\\x22]\\n]\\n]\\n\x22]\n]\n]\n'
                        ];
                        var a = m;
                        window.W_jd = window.W_jd || {};
                        for (var b = 0; b < a.length; b += 2) window.W_jd[a[b]] = JSON.parse(a[b + 1]);
                    })();
                    (function() {
                        window.WIZ_global_data = {
                            "Yllh3e": "%.@.1590993608183591,12001605,3943406426]\n",
                            "eptZe": "/wizrpcui/_/WizRpcUi/",
                            "GWsdKe": "en-IN",
                            "zChJod": "%.@.]\n",
                            "w2btAe": "%.@.\"\",\"\",\"0\",null,null,null,1]\n"
                        };
                        window.IJ_values = ["rgba(0,102,33,1)", "rgba(0,0,0,.87)", "rgba(0,0,0,.54)",
                            "rgba(255,255,255,1)", "rgba(255,255,255,.7)", false, "#fff", "0",
                            "%.@.null,1,null,null,[null,654,1366]\n]\n", "8XnhrYTqYOBvABL6KLUTvA\u003d\u003d",
                            "en-IN", false, "", "", false, "105250506097979753968"
                        ];
                    })();
                    google.x(null, function() {
                        (function() {
                            (function() {
                                google.csct = {};
                                google.csct.ps =
                                    'AOvVaw38sZwXMOuKycmwh_IIeyct\x26ust\x3d1591080008238993';
                            })();
                        })();
                        (function() {
                            (function() {
                                google.csct.rw = true;
                            })();
                        })();
                        (function() {
                            window.jsl = window.jsl || {};
                            window.jsl.dh = window.jsl.dh || function(i, c, d) {
                                try {
                                    var e = document.getElementById(i);
                                    if (e) {
                                        e.innerHTML = c;
                                        if (d) {
                                            d();
                                        }
                                    } else {
                                        if (window.jsl.el) {
                                            window.jsl.el(new Error('Missing ID.'), {
                                                'id': i
                                            });
                                        }
                                    }
                                } catch (e) {
                                    if (window.jsl.el) {
                                        window.jsl.el(new Error('jsl.dh'));
                                    }
                                }
                            };
                        })();
                        (function() {
                            window.jsl.dh('hdtbMenus',
                                '\x3cdiv class\x3d\x22hdtb-mn-cont\x22\x3e\x3cdiv id\x3d\x22XJDHvf\x22\x3e\x3c/div\x3e\x3cdiv class\x3d\x22hdtb-mn-hd\x22 aria-haspopup\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3cdiv class\x3d\x22mn-hd-txt\x22\x3eAny time\x3c/div\x3e\x3cspan class\x3d\x22mn-dwn-arw\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3cul class\x3d\x22hdtbU hdtb-mn-c\x22\x3e\x3cli class\x3d\x22hdtbItm hdtbSel\x22 id\x3d\x22qdr_\x22 tabindex\x3d\x220\x22\x3eAny time\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_h\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3ddoes+antivirus+stop+hackers\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:h\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEBk\x22\x3ePast hour\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_d\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3ddoes+antivirus+stop+hackers\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:d\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEBo\x22\x3ePast 24 hours\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_w\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3ddoes+antivirus+stop+hackers\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:w\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEBs\x22\x3ePast week\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_m\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3ddoes+antivirus+stop+hackers\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:m\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEBw\x22\x3ePast month\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22qdr_y\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3ddoes+antivirus+stop+hackers\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dqdr:y\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEB0\x22\x3ePast year\x3c/a\x3e\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22cdr_opt\x22\x3e\x3cdiv jscontroller\x3d\x22Uuupec\x22 data-m\x3d\x22true\x22\x3e\x3cspan class\x3d\x22q\x22 id\x3d\x22cdrlnk\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22EEGHee\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTEB4\x22\x3eCustom range...\x3c/span\x3e\x3cdiv class\x3d\x22n5Ug4b\x22 style\x3d\x22display:none\x22\x3e\x3cdiv class\x3d\x22vOvh1b\x22 jsaction\x3d\x22xp3IKd\x22\x3e\x3c/div\x3e\x3cdiv class\x3d\x22J6UZg\x22\x3e\x3cdiv class\x3d\x22Jy9Ore\x22\x3eCustomised date range\x3c/div\x3e\x3clabel class\x3d\x22Qtsmnf tmDYm\x22 for\x3d\x22OouJcb\x22\x3eFrom\x3c/label\x3e\x3clabel class\x3d\x22Qtsmnf iWBKNe\x22 for\x3d\x22rzG2be\x22\x3eTo\x3c/label\x3e\x3cdiv class\x3d\x22Gwgzqd\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22xp3IKd\x22\x3e\x3c/div\x3e\x3cdiv class\x3d\x22NwEGxd\x22\x3e\x3cdiv class\x3d\x22qomYCd\x22\x3e\x3c/div\x3e\x3cform action\x3d\x22/search\x22 class\x3d\x22T3kYXe\x22 method\x3d\x22get\x22\x3e\x3cinput name\x3d\x22q\x22 value\x3d\x22does antivirus stop hackers\x22 type\x3d\x22hidden\x22\x3e\x3cinput name\x3d\x22client\x22 value\x3d\x22firefox-b-d\x22 type\x3d\x22hidden\x22\x3e\x3cinput name\x3d\x22source\x22 type\x3d\x22hidden\x22 value\x3d\x22lnt\x22\x3e\x3cinput value\x3d\x22cdr:1,cd_min:x,cd_max:x\x22 id\x3d\x22HjtPBb\x22 name\x3d\x22tbs\x22 type\x3d\x22hidden\x22\x3e\x3cinput value\x3d\x22\x22 name\x3d\x22tbm\x22 type\x3d\x22hidden\x22\x3e\x3cinput class\x3d\x22OouJcb ktf mini\x22 type\x3d\x22text\x22 value\x3d\x22\x22 autocomplete\x3d\x22off\x22 id\x3d\x22OouJcb\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:daRB0b\x22\x3e\x3cinput class\x3d\x22rzG2be ktf mini\x22 type\x3d\x22text\x22 value\x3d\x22\x22 autocomplete\x3d\x22off\x22 id\x3d\x22rzG2be\x22 tabindex\x3d\x220\x22 jsaction\x3d\x22focus:daRB0b\x22\x3e\x3cinput class\x3d\x22Ru1Ao ksb mini\x22 value\x3d\x22Go\x22 tabindex\x3d\x220\x22 type\x3d\x22submit\x22 jsaction\x3d\x22tnv.scf\x22\x3e\x3c/form\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/li\x3e\x3c/ul\x3e\x3cspan class\x3d\x22hQKUmb\x22\x3e\x3c/span\x3e\x3cdiv class\x3d\x22hdtb-mn-hd\x22 aria-haspopup\x3d\x22true\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3cdiv class\x3d\x22mn-hd-txt\x22\x3eAll results\x3c/div\x3e\x3cspan class\x3d\x22mn-dwn-arw\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3cul class\x3d\x22hdtbU hdtb-mn-c\x22\x3e\x3cli class\x3d\x22hdtbItm hdtbSel\x22 id\x3d\x22li_\x22 tabindex\x3d\x220\x22\x3eAll results\x3c/li\x3e\x3cli class\x3d\x22hdtbItm\x22 id\x3d\x22li_1\x22\x3e\x3ca class\x3d\x22q qs\x22 ref\x3d\x22/search?q\x3ddoes+antivirus+stop+hackers\x26amp;client\x3dfirefox-b-d\x26amp;source\x3dlnt\x26amp;tbs\x3dli:1\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQpwV6BAgTECE\x22\x3eVerbatim\x3c/a\x3e\x3c/li\x3e\x3c/ul\x3e\x3cspan class\x3d\x22hQKUmb\x22\x3e\x3c/span\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_yKLUXqeaC8XC3LUP2rau2A447',
                                '\x3cdiv class\x3d\x22mod\x22 data-md\x3d\x2261\x22 style\x3d\x22clear:none\x22\x3e\x3c!--m--\x3e\x3cdiv aria-level\x3d\x223\x22 class\x3d\x22LGOjhe\x22 role\x3d\x22heading\x22 data-attrid\x3d\x22wa:/description\x22 data-hveid\x3d\x22CA4QBQ\x22\x3e\x3cspan class\x3d\x22ILfuVd NA6bn\x22\x3e\x3cspan class\x3d\x22e24Kjd\x22\x3eThe app \x3cb\x3ecan detect\x3c/b\x3e and block viruses, worms, and \x3cb\x3ehackers\x3c/b\x3e from harmful activity. ... \x3cb\x3eHackers\x3c/b\x3e rely on malware like viruses, trojans and worms to stole the informational data from the device. By using an \x3cb\x3eantivirus\x3c/b\x3e software, you \x3cb\x3ecan\x3c/b\x3e protect your device and data from being stolen.\x3c/span\x3e\x3c/span\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22g\x22\x3e\x3c!--m--\x3e\x3cdiv class\x3d\x22rc\x22 data-hveid\x3d\x22CA4QBg\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAN6BAgOEAY\x22\x3e\x3cdiv class\x3d\x22r\x22\x3e\x3ca ref\x3d\x22https://www.quora.com/Do-antivirus-programs-or-firewalls-protect-against-hackers\x22 onmousedown\x3d\x22return rwt(this,\x27\x27,\x27\x27,\x27\x27,\x27\x27,\x27AOvVaw3BbHpkJMGB6nCRcOMlwfKo\x27,\x27\x27,\x272ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjADegQIDhAH\x27,\x27\x27,\x27\x27,event)\x22\x3e\x3cbr\x3e\x3ch3 class\x3d\x22LC20lb DKV0Md\x22\x3eDo antivirus programs or firewalls protect against hackers? - Quora\x3c/h3\x3e\x3cdiv class\x3d\x22TbwUpd NJjxre\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.quora.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; Do-antivirus-programs-or-firewalls-pr...\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3c/a\x3e\x3cdiv class\x3d\x22B6fmyf\x22\x3e\x3cdiv class\x3d\x22TbwUpd\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.quora.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; Do-antivirus-programs-or-firewalls-pr...\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3cdiv class\x3d\x22eFM0qc\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d\x22s\x22\x3e\x3cdiv\x3e\x3cspan class\x3d\x22st\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22iOBnre match-mod-horizontal-padding\x22\x3eSearch for: \x3ca ref\x3d\x22/search?client\x3dfirefox-b-d\x26amp;q\x3dCan+antivirus+detect+hackers%3F\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzmd6BAgOEAs\x22\x3eCan antivirus detect hackers?\x3c/a\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_yKLUXqeaC8XC3LUP2rau2A453',
                                '\x3cdiv class\x3d\x22mod\x22 data-md\x3d\x2261\x22 style\x3d\x22clear:none\x22\x3e\x3c!--m--\x3e\x3cdiv aria-level\x3d\x223\x22 class\x3d\x22LGOjhe\x22 role\x3d\x22heading\x22 data-attrid\x3d\x22wa:/description\x22 data-hveid\x3d\x22CA4QDw\x22\x3e\x3cspan class\x3d\x22ILfuVd NA6bn\x22\x3e\x3cspan class\x3d\x22e24Kjd\x22\x3eThey are most likely to \x3cb\x3euse\x3c/b\x3e Kaspersky Internet Security, and if not they probably \x3cb\x3eusing\x3c/b\x3e Emsisoft. Other tools they may \x3cb\x3euse\x3c/b\x3e can be Comodo firewall, Hitmanpro Alert, Heimdall, reHIPS, VoodooShield, AppGuard, and much more. \x3cb\x3eWhich antivirus\x3c/b\x3e is the best for all-around purposes on a laptop?\x3c/span\x3e\x3c/span\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22g\x22\x3e\x3c!--m--\x3e\x3cdiv class\x3d\x22rc\x22 data-hveid\x3d\x22CA4QEA\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAV6BAgOEBA\x22\x3e\x3cdiv class\x3d\x22r\x22\x3e\x3ca ref\x3d\x22https://www.quora.com/Which-antiviruses-do-hackers-use\x22 onmousedown\x3d\x22return rwt(this,\x27\x27,\x27\x27,\x27\x27,\x27\x27,\x27AOvVaw1E4igiUhnmGRRitWvRD7tU\x27,\x27\x27,\x272ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAFegQIDhAR\x27,\x27\x27,\x27\x27,event)\x22\x3e\x3cbr\x3e\x3ch3 class\x3d\x22LC20lb DKV0Md\x22\x3eWhich antiviruses do hackers use? - Quora\x3c/h3\x3e\x3cdiv class\x3d\x22TbwUpd NJjxre\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.quora.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; Which-antiviruses-do-hackers-use\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3c/a\x3e\x3cdiv class\x3d\x22B6fmyf\x22\x3e\x3cdiv class\x3d\x22TbwUpd\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.quora.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; Which-antiviruses-do-hackers-use\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3cdiv class\x3d\x22eFM0qc\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d\x22s\x22\x3e\x3cdiv\x3e\x3cspan class\x3d\x22st\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22iOBnre match-mod-horizontal-padding\x22\x3eSearch for: \x3ca ref\x3d\x22/search?client\x3dfirefox-b-d\x26amp;q\x3dWhat+antivirus+do+hackers+use%3F\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzmd6BAgOEBU\x22\x3eWhat antivirus do hackers use?\x3c/a\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_yKLUXqeaC8XC3LUP2rau2A458',
                                '\x3cdiv class\x3d\x22mod\x22 data-md\x3d\x2261\x22 style\x3d\x22clear:none\x22\x3e\x3c!--m--\x3e\x3cdiv aria-level\x3d\x223\x22 class\x3d\x22LGOjhe\x22 role\x3d\x22heading\x22 data-attrid\x3d\x22wa:/description\x22 data-hveid\x3d\x22CA4QGQ\x22\x3e\x3cspan class\x3d\x22ILfuVd NA6bn\x22\x3e\x3cspan class\x3d\x22e24Kjd\x22\x3eA \x3cb\x3efirewall\x3c/b\x3e is an essential piece of security software that monitors all incoming and outgoing traffic going through your network, checking for \x3cb\x3ehackers\x3c/b\x3e, malware, unauthorized outgoing information, or anything that might put you or your PC at risk. \x3cb\x3eFirewalls\x3c/b\x3e are often the first line of defense when \x3cb\x3eprotecting\x3c/b\x3e your data.\x3c/span\x3e\x3c/span\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22g\x22\x3e\x3c!--m--\x3e\x3cdiv class\x3d\x22rc\x22 data-hveid\x3d\x22CA4QGg\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAd6BAgOEBo\x22\x3e\x3cdiv class\x3d\x22r\x22\x3e\x3ca ref\x3d\x22https://www.avast.com/f-firewall\x22 onmousedown\x3d\x22return rwt(this,\x27\x27,\x27\x27,\x27\x27,\x27\x27,\x27AOvVaw3MzjyETuSSsakVXpDVAmsX\x27,\x27\x27,\x272ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAHegQIDhAb\x27,\x27\x27,\x27\x27,event)\x22\x3e\x3cbr\x3e\x3ch3 class\x3d\x22LC20lb DKV0Md\x22\x3eFirewall | Stop hacker\x26#39;s access to your PC | Avast\x3c/h3\x3e\x3cdiv class\x3d\x22TbwUpd NJjxre\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.avast.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; f-firewall\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3c/a\x3e\x3cdiv class\x3d\x22B6fmyf\x22\x3e\x3cdiv class\x3d\x22TbwUpd\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.avast.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; f-firewall\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3cdiv class\x3d\x22eFM0qc\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d\x22s\x22\x3e\x3cdiv\x3e\x3cspan class\x3d\x22st\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22iOBnre match-mod-horizontal-padding\x22\x3eSearch for: \x3ca ref\x3d\x22/search?client\x3dfirefox-b-d\x26amp;q\x3dDo+firewalls+protect+against+hackers%3F\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzmd6BAgOEB8\x22\x3eDo firewalls protect against hackers?\x3c/a\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('_yKLUXqeaC8XC3LUP2rau2A463',
                                '\x3cdiv class\x3d\x22mod\x22 data-md\x3d\x2283\x22\x3e\x3c!--m--\x3e\x3cdiv class\x3d\x22di3YZe\x22\x3e\x3cdiv class\x3d\x22co8aDb gsrt\x22 aria-level\x3d\x223\x22 role\x3d\x22heading\x22\x3e\x3cb\x3e12 Ways to Secure Your Computer From Hackers\x3c/b\x3e\x3c/div\x3e\x3cdiv class\x3d\x22RqBzHd\x22\x3e\x3cul class\x3d\x22i8Z77e\x22\x3e\x3cli class\x3d\x22TrT0Xe\x22\x3eUse a firewall. ... \x3c/li\x3e\x3cli class\x3d\x22TrT0Xe\x22\x3eInstall antivirus software. ... \x3c/li\x3e\x3cli class\x3d\x22TrT0Xe\x22\x3eInstall an anti-spyware package. ... \x3c/li\x3e\x3cli class\x3d\x22TrT0Xe\x22\x3eUse complex passwords. ... \x3c/li\x3e\x3cli class\x3d\x22TrT0Xe\x22\x3eKeep your OS, apps and browser up to date. ... \x3c/li\x3e\x3cli class\x3d\x22TrT0Xe\x22\x3eIgnore spam. ... \x3c/li\x3e\x3cli class\x3d\x22TrT0Xe\x22\x3eBack up your computer. ... \x3c/li\x3e\x3cli class\x3d\x22TrT0Xe\x22\x3eShut it down.\x3c/li\x3e\x3c/ul\x3e\x3cdiv class\x3d\x22ZGh7Vc\x22\x3e\x3ca class\x3d\x22truncation-information\x22 ref\x3d\x22https://www.businessnewsdaily.com/11213-secure-computer-from-hackers.html\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQnLoEMAh6BAgOECQ\x22 onmousedown\x3d\x22return rwt(this,\x27\x27,\x27\x27,\x27\x27,\x27\x27,\x27AOvVaw3u0T-qrGOAVMn-CZo9D2ZL\x27,\x27\x27,\x272ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQnLoEMAh6BAgOECQ\x27,\x27\x27,\x27\x27,event)\x22\x3eMore items...\x3c/a\x3e\x3c/div\x3e\x3cdiv class\x3d\x22rvIhN\x22\x3e\x26bull;\x3c/div\x3e\x3cdiv class\x3d\x22Od5Jsd\x22\x3eJan 10, 2019\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22g\x22\x3e\x3c!--m--\x3e\x3cdiv class\x3d\x22rc\x22 data-hveid\x3d\x22CA4QJg\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFSgBMAl6BAgOECY\x22\x3e\x3cdiv class\x3d\x22r\x22\x3e\x3ca ref\x3d\x22https://www.businessnewsdaily.com/11213-secure-computer-from-hackers.html\x22 onmousedown\x3d\x22return rwt(this,\x27\x27,\x27\x27,\x27\x27,\x27\x27,\x27AOvVaw3u0T-qrGOAVMn-CZo9D2ZL\x27,\x27\x27,\x272ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQFjAJegQIDhAn\x27,\x27\x27,\x27\x27,event)\x22\x3e\x3cbr\x3e\x3ch3 class\x3d\x22LC20lb DKV0Md\x22\x3eHow to Secure Your Computer From Hackers - Business News Daily\x3c/h3\x3e\x3cdiv class\x3d\x22TbwUpd NJjxre\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.businessnewsdaily.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; 11213-secure-computer-fr...\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3c/a\x3e\x3cdiv class\x3d\x22B6fmyf\x22\x3e\x3cdiv class\x3d\x22TbwUpd\x22\x3e\x3ccite class\x3d\x22iUh30 bc tjvcx\x22\x3ewww.businessnewsdaily.com\x3cspan class\x3d\x22eipWBe\x22\x3e \x26rsaquo; 11213-secure-computer-fr...\x3c/span\x3e\x3c/cite\x3e\x3c/div\x3e\x3cdiv class\x3d\x22eFM0qc\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d\x22s\x22\x3e\x3cdiv\x3e\x3cspan class\x3d\x22st\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c!--n--\x3e\x3c/div\x3e\x3cdiv class\x3d\x22iOBnre match-mod-horizontal-padding\x22\x3eSearch for: \x3ca ref\x3d\x22/search?client\x3dfirefox-b-d\x26amp;q\x3dWhat+do+hackers+use+to+protect+their+computers%3F\x26amp;sa\x3dX\x26amp;ved\x3d2ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQzmd6BAgOECs\x22\x3eWhat do hackers use to protect their computers?\x3c/a\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_4',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIFBAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgUEAE\x22\x3eadvance ip protector\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgUEAI\x22\x3etrojan virus wiki\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgUEAM\x22\x3ehacker protection\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgUEAQ\x22\x3ebenefits of firewall\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgUEAU\x22\x3enetwork firewall\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgUEAY\x22\x3edoes antivirus protect against ransomware\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_5',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIFRAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgVEAE\x22\x3ehacker protection software\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgVEAI\x22\x3ehow to secure your home computer\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgVEAM\x22\x3eanti-spyware package\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgVEAQ\x22\x3ehow to protect yourself from hackers 2019\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgVEAU\x22\x3ewhat are the steps to avoid getting hacked\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgVEAY\x22\x3ehow to prevent unauthorized computer access\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_11',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIGRAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgZEAE\x22\x3eadvance ip protector\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgZEAI\x22\x3esonic firewall 3600\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgZEAM\x22\x3etrojan virus wiki\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgZEAQ\x22\x3ebenefits of firewall\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgZEAU\x22\x3enetwork firewall\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgZEAY\x22\x3edoes antivirus protect against ransomware\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_15',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIFhAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgWEAE\x22\x3ehacker protection software\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgWEAI\x22\x3ehow to prevent loss of data\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgWEAM\x22\x3ereason core security\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgWEAQ\x22\x3eanti hacker alliance\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgWEAU\x22\x3eghostpress\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgWEAY\x22\x3ehow to protect yourself from hackers\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_13',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIFxAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgXEAE\x22\x3ehow to bypass antivirus detection\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgXEAI\x22\x3eav evasion github\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgXEAM\x22\x3evirustotal\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            window.jsl.dh('eob_14',
                                '\x3cdiv jsname\x3d\x22UTgHCf\x22 class\x3d\x22AUiS2\x22 data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQx40DegQIGBAA\x22\x3e\x3cdiv jsname\x3d\x22d3PE6e\x22 style\x3d\x22display:none\x22\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAB6BAgYEAE\x22\x3emy computer has been hacked and locked\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAF6BAgYEAI\x22\x3eyour computer has been hacked email\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAJ6BAgYEAM\x22\x3edoes norton protect from malware\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAN6BAgYEAQ\x22\x3epinterest hacked 2019\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAR6BAgYEAU\x22\x3ewhat are signs that a website has been hacked\x3c/div\x3e\x3cdiv data-ved\x3d\x222ahUKEwinnuyGgeDpAhVFIbcAHVqbC-sQsKwBKAV6BAgYEAY\x22\x3eyour computer has been compromised message\x3c/div\x3e\x3c/div\x3e\x3cspan jsname\x3d\x22ZnuYW\x22 class\x3d\x22XCKyNd\x22 jsaction\x3d\x22ornU0b\x22 aria-label\x3d\x22Dismiss suggested follow ups\x22 role\x3d\x22button\x22 tabindex\x3d\x220\x22\x3e\x3c/span\x3e\x3cdiv\x3e\x3cdiv jsname\x3d\x22l1CLDf\x22 class\x3d\x22d8lLoc\x22\x3e\x3ch4 jsname\x3d\x22IaVMje\x22 class\x3d\x22eJ7tvc\x22\x3ePeople also search for\x3c/h4\x3e\x3cdiv jsname\x3d\x22CeevUc\x22 class\x3d\x22hYkSRb\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e'
                                );
                        })();
                        (function() {
                            google.drty && google.drty();
                        })();
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
    (function() {
        for (var i in google.iir || {}) {
            _setImagesSrc([i], google.iir[i]);
        }
        google.iir = {};
    })();
    </script>
    <div id="reviewDialog" data-async-context="async_id_prefix:" data-jiis="up" data-async-type="reviewDialog"
        data-async-context-required="async_id_prefix" class="y yp"></div>
    <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
    window.gbar && gbar.up && gbar.up.tp && gbar.up.tp();
    </script>
    <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
    this.gbar_ = this.gbar_ || {};
    (function(_) {
        var window = this;
        try {
            /*

             Copyright The Closure Library Authors.
             SPDX-License-Identifier: Apache-2.0
            */
            _.Id = !_.x || _.gc(9);
            _.Jd = !_.x || _.gc(9);
            _.Kd = _.x && !_.ec("9");
            _.Ld = function() {
                if (!_.p.addEventListener || !Object.defineProperty) return !1;
                var a = !1,
                    b = Object.defineProperty({}, "passive", {
                        get: function() {
                            a = !0
                        }
                    });
                try {
                    _.p.addEventListener("test", _.ua, b), _.p.removeEventListener("test", _.ua, b)
                } catch (c) {}
                return a
            }();
            _.Md = _.Qb ? "webkitTransitionEnd" : _.Mb ? "otransitionend" : "transitionend";

        } catch (e) {
            _._DumpException(e)
        }
        try {
            _.Nd = function(a, b, c) {
                if (!a.o)
                    if (c instanceof Array) {
                        c = _.ia(c);
                        for (var d = c.next(); !d.done; d = c.next()) _.Nd(a, b, d.value)
                    } else {
                        d = (0, _.q)(a.D, a, b);
                        var e = a.C + c;
                        a.C++;
                        b.setAttribute("data-eqid", e);
                        a.A[e] = d;
                        b && b.addEventListener ? b.addEventListener(c, d, !1) : b && b.attachEvent ? b
                            .attachEvent("on" + c, d) : a.B.log(Error("m`" + b))
                    }
            };

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var Od = document.querySelector(".gb_C .gb_D"),
                Pd = document.querySelector("#gb.gb_Jc");
            Od && !Pd && _.Nd(_.yd, Od, "click");

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var wh = function(a) {
                _.I.call(this);
                this.C = a;
                this.w = null;
                this.o = {};
                this.D = {};
                this.j = {}
            };
            _.v(wh, _.I);
            _.xh = function(a) {
                if (a.w) return a.w;
                for (var b in a.j)
                    if (a.j[b].Ye() && a.j[b].Sb()) return a.j[b];
                return null
            };
            wh.prototype.B = function(a) {
                this.j[a] && (_.xh(this) && _.xh(this).Vc() == a || this.j[a].ve(!0))
            };
            wh.prototype.$a = function(a) {
                for (var b in this.j) this.j[b].Ye() && this.j[b].$a(a)
            };
            wh.prototype.A = function(a) {
                this.j[a.Vc()] = a
            };
            var yh = new wh(_.wd);
            _.Kc("dd", yh);

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var kj = document.querySelector(".gb_Sa .gb_D"),
                lj = document.querySelector("#gb.gb_Jc");
            kj && !lj && _.Nd(_.yd, kj, "click");

        } catch (e) {
            _._DumpException(e)
        }
    })(this.gbar_);
    // Google Inc.
    </script>
    <div>
        <div></div>
    </div>
    <script nonce="8XnhrYTqYOBvABL6KLUTvA==">
    this.gbar_ = this.gbar_ || {};
    (function(_) {
        var window = this;
        try {
            /*

             Copyright The Closure Library Authors.
             SPDX-License-Identifier: Apache-2.0
            */
            var Rd, Sd, Td, Xd, Yd, Zd, $d, ae, be, ce, he;
            _.Qd = function(a, b) {
                var c = Array.prototype.slice.call(arguments, 1);
                return function() {
                    var d = c.slice();
                    d.push.apply(d, arguments);
                    return a.apply(this, d)
                }
            };
            Rd = null;
            Sd = /^[\w+/_-]+[=]{0,2}$/;
            Td = function(a) {
                return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a
                    .getAttribute("nonce")) && Sd.test(a) ? a : ""
            };
            _.Ud = function(a) {
                var b = _.xa(a);
                return "array" == b || "object" == b && "number" == typeof a.length
            };
            _.Vd = function(a) {
                var b = a.length;
                if (0 < b) {
                    for (var c = Array(b), d = 0; d < b; d++) c[d] = a[d];
                    return c
                }
                return []
            };
            _.Wd = function(a, b) {
                return 0 == a.lastIndexOf(b, 0)
            };
            Xd = /&/g;
            Yd = /</g;
            Zd = />/g;
            $d = /"/g;
            ae = /'/g;
            be = /\x00/g;
            ce = /[\x00&<>"']/;
            _.de = function(a, b) {
                if (b) a = a.replace(Xd, "&amp;").replace(Yd, "&lt;").replace(Zd, "&gt;").replace($d, "&quot;")
                    .replace(ae, "&#39;").replace(be, "&#0;");
                else {
                    if (!ce.test(a)) return a; - 1 != a.indexOf("&") && (a = a.replace(Xd, "&amp;")); - 1 != a
                        .indexOf("<") && (a = a.replace(Yd, "&lt;")); - 1 != a.indexOf(">") && (a = a.replace(
                        Zd, "&gt;")); - 1 != a.indexOf('"') && (a = a.replace($d, "&quot;")); - 1 != a.indexOf(
                        "'") && (a = a.replace(ae, "&#39;")); - 1 != a.indexOf("\x00") && (a = a.replace(be,
                        "&#0;"))
                }
                return a
            };
            _.ee = function(a) {
                var b;
                (b = a.ownerDocument && a.ownerDocument.defaultView) && b != _.p ? b = Td(b.document) : (
                    null === Rd && (Rd = Td(_.p.document)), b = Rd);
                b && a.setAttribute("nonce", b)
            };
            _.fe = function(a, b) {
                a.src = _.bb(b);
                _.ee(a)
            };
            _.ge = function(a) {
                return a = _.de(a, void 0)
            };
            he = !_.x || _.gc(9);
            _.ie = !_.Pb && !_.x || _.x && _.gc(9) || _.Pb && _.ec("1.9.1");
            _.je = _.x && !_.ec("9");
            _.ke = _.x || _.Mb || _.Qb;
            _.le = function(a, b) {
                this.width = a;
                this.height = b
            };
            _.h = _.le.prototype;
            _.h.aspectRatio = function() {
                return this.width / this.height
            };
            _.h.zc = function() {
                return !(this.width * this.height)
            };
            _.h.ceil = function() {
                this.width = Math.ceil(this.width);
                this.height = Math.ceil(this.height);
                return this
            };
            _.h.floor = function() {
                this.width = Math.floor(this.width);
                this.height = Math.floor(this.height);
                return this
            };
            _.h.round = function() {
                this.width = Math.round(this.width);
                this.height = Math.round(this.height);
                return this
            };
            var oe, te;
            _.me = function(a, b) {
                return (b || document).getElementsByTagName(String(a))
            };
            _.N = function(a, b) {
                var c = b || document;
                if (c.getElementsByClassName) a = c.getElementsByClassName(a)[0];
                else {
                    c = document;
                    var d = b || c;
                    a = d.querySelectorAll && d.querySelector && a ? d.querySelector(a ? "." + a : "") : _.ne(c,
                        "*", a, b)[0] || null
                }
                return a || null
            };
            _.ne = function(a, b, c, d) {
                a = d || a;
                b = b && "*" != b ? String(b).toUpperCase() : "";
                if (a.querySelectorAll && a.querySelector && (b || c)) return a.querySelectorAll(b + (c ? "." +
                    c : ""));
                if (c && a.getElementsByClassName) {
                    a = a.getElementsByClassName(c);
                    if (b) {
                        d = {};
                        for (var e = 0, f = 0, g; g = a[f]; f++) b == g.nodeName && (d[e++] = g);
                        d.length = e;
                        return d
                    }
                    return a
                }
                a = a.getElementsByTagName(b || "*");
                if (c) {
                    d = {};
                    for (f = e = 0; g = a[f]; f++) b = g.className, "function" == typeof b.split && _.Oa(b
                        .split(/\s+/), c) && (d[e++] = g);
                    d.length = e;
                    return d
                }
                return a
            };
            _.pe = function(a, b) {
                _.Pa(b, function(c, d) {
                    c && "object" == typeof c && c.Pb && (c = c.Fb());
                    "style" == d ? a.style.cssText = c : "class" == d ? a.className = c : "for" == d ? a
                        .htmlFor = c : oe.hasOwnProperty(d) ? a.setAttribute(oe[d], c) : _.Wd(d,
                            "aria-") || _.Wd(d, "data-") ? a.setAttribute(d, c) : a[d] = c
                })
            };
            oe = {
                cellpadding: "cellPadding",
                cellspacing: "cellSpacing",
                colspan: "colSpan",
                frameborder: "frameBorder",
                height: "height",
                maxlength: "maxLength",
                nonce: "nonce",
                role: "role",
                rowspan: "rowSpan",
                type: "type",
                usemap: "useMap",
                valign: "vAlign",
                width: "width"
            };
            _.se = function(a, b) {
                var c = String(b[0]),
                    d = b[1];
                if (!he && d && (d.name || d.type)) {
                    c = ["<", c];
                    d.name && c.push(' name="', _.ge(d.name), '"');
                    if (d.type) {
                        c.push(' type="', _.ge(d.type), '"');
                        var e = {};
                        _.Ra(e, d);
                        delete e.type;
                        d = e
                    }
                    c.push(">");
                    c = c.join("")
                }
                c = _.qe(a, c);
                d && ("string" === typeof d ? c.className = d : Array.isArray(d) ? c.className = d.join(" ") : _
                    .pe(c, d));
                2 < b.length && _.re(a, c, b, 2);
                return c
            };
            _.re = function(a, b, c, d) {
                function e(g) {
                    g && b.appendChild("string" === typeof g ? a.createTextNode(g) : g)
                }
                for (; d < c.length; d++) {
                    var f = c[d];
                    !_.Ud(f) || _.za(f) && 0 < f.nodeType ? e(f) : (0, _.Ka)(te(f) ? _.Vd(f) : f, e)
                }
            };
            _.ue = function(a) {
                return _.qe(document, a)
            };
            _.qe = function(a, b) {
                b = String(b);
                "application/xhtml+xml" === a.contentType && (b = b.toLowerCase());
                return a.createElement(b)
            };
            _.ve = function(a) {
                for (var b; b = a.firstChild;) a.removeChild(b)
            };
            _.we = function(a) {
                return a && a.parentNode ? a.parentNode.removeChild(a) : null
            };
            _.xe = function(a) {
                return _.za(a) && 1 == a.nodeType
            };
            _.ye = function(a) {
                return 9 == a.nodeType ? a : a.ownerDocument || a.document
            };
            te = function(a) {
                if (a && "number" == typeof a.length) {
                    if (_.za(a)) return "function" == typeof a.item || "string" == typeof a.item;
                    if (_.ya(a)) return "function" == typeof a.item
                }
                return !1
            };
            _.ze = function(a, b, c) {
                for (var d = 0; a && (null == c || d <= c);) {
                    if (b(a)) return a;
                    a = a.parentNode;
                    d++
                }
                return null
            };

        } catch (e) {
            _._DumpException(e)
        }
        try {
            _.pj = function(a) {
                _.z(this, a, 0, -1, null, null)
            };
            _.v(_.pj, _.y);
            _.qj = function(a, b, c) {
                a.rel = c;
                a.ref = -1 != c.toLowerCase().indexOf("stylesheet") ? _.cb(b) : b instanceof _.ab ? _.cb(b) :
                    b instanceof _.jb ? _.kb(b) : _.kb(_.nb(b))
            };
            _.rj = function(a) {
                return _.db(_.A(a, 4) || "")
            };

        } catch (e) {
            _._DumpException(e)
        }
        try {
            var sj = function(a, b, c) {
                    _.xd.log(46, {
                        att: a,
                        max: b,
                        url: c
                    })
                },
                uj = function(a, b, c) {
                    _.xd.log(47, {
                        att: a,
                        max: b,
                        url: c
                    });
                    a < b ? tj(a + 1, b) : _.wd.log(Error("Q`" + a + "`" + b), {
                        url: c
                    })
                },
                tj = function(a, b) {
                    if (vj) {
                        var c = _.ue("SCRIPT");
                        c.async = !0;
                        c.type = "text/javascript";
                        c.charset = "UTF-8";
                        _.fe(c, vj);
                        c.onload = _.Qd(sj, a, b, c.src);
                        c.onerror = _.Qd(uj, a, b, c.src);
                        _.xd.log(45, {
                            att: a,
                            max: b,
                            url: c.src
                        });
                        _.me("HEAD")[0].appendChild(c)
                    }
                },
                wj = function(a) {
                    _.z(this, a, 0, -1, null, null)
                };
            _.v(wj, _.y);
            var xj = _.G(_.sd, wj, 17) || new wj,
                yj, vj = (yj = _.G(xj, _.pj, 1)) ? _.rj(yj) : null,
                zj, Aj = (zj = _.G(xj, _.pj, 2)) ? _.rj(zj) : null,
                Bj = function() {
                    tj(1, 2);
                    if (Aj) {
                        var a = _.ue("LINK");
                        a.setAttribute("type", "text/css");
                        _.qj(a, Aj, "stylesheet");
                        _.me("HEAD")[0].appendChild(a)
                    }
                };
            (function() {
                var a = _.td();
                if (_.B(a, 18)) Bj();
                else {
                    var b = _.A(a, 19) || 0;
                    window.addEventListener("load", function() {
                        window.setTimeout(Bj, b)
                    })
                }
            })();

        } catch (e) {
            _._DumpException(e)
        }
    })(this.gbar_);
    // Google Inc.
    </script>
    <div class="gb_Xd">Google apps</div>
    <script src="f_files/rsACT90oHCTGKbWMo_H79h71Ut4aKgSR686A" gapi_processed="true"></script>
    <script src="f_files/mMB3mMbMkHyGdNBZ7uNpD4ecOG6ZHdRqxLvfT6sTsfT7XTSTxZWccURQPYcWgDvv" async=""></script>
    <script src="f_files/mUuupecr36a9cxj7LNb" async=""></script>
    <script src="f_files/mwkrYee" async=""></script>
</body>

</html>