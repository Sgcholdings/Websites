<?php
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

  $mailTo = "simba@complyatease.co.za";
	$headers = "From: " . $mailFrom;
	$txt = "You have received an email from " . $name . ".\n\n" . $message;

	mail($mailTo, $subject, $txt, $headers);

	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
  <!-- Mirrored from complyatease.co.za/contact-us/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 11:03:08 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <title>Contact Us &#8211; Comply At Ease</title>
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link rel="dns-prefetch" href="http://s.w.org/" />
    <link href="https://fonts.gstatic.com/" crossorigin rel="preconnect" />
    <link
      rel="alternate"
      type="application/rss+xml"
      title="Comply At Ease &raquo; Feed"
      href="../feed/index.html"
    />
    <script>
      window._wpemojiSettings = {
        baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
        ext: ".png",
        svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
        svgExt: ".svg",
        source: {
          concatemoji:
            "https:\/\/complyatease.co.za\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.4.4",
        },
      };
      /*! This file is auto-generated */
      !(function (e, a, t) {
        var r,
          n,
          o,
          i,
          p = a.createElement("canvas"),
          s = p.getContext && p.getContext("2d");
        function c(e, t) {
          var a = String.fromCharCode;
          s.clearRect(0, 0, p.width, p.height),
            s.fillText(a.apply(this, e), 0, 0);
          var r = p.toDataURL();
          return (
            s.clearRect(0, 0, p.width, p.height),
            s.fillText(a.apply(this, t), 0, 0),
            r === p.toDataURL()
          );
        }
        function l(e) {
          if (!s || !s.fillText) return !1;
          switch (((s.textBaseline = "top"), (s.font = "600 32px Arial"), e)) {
            case "flag":
              return (
                !c(
                  [127987, 65039, 8205, 9895, 65039],
                  [127987, 65039, 8203, 9895, 65039]
                ) &&
                !c(
                  [55356, 56826, 55356, 56819],
                  [55356, 56826, 8203, 55356, 56819]
                ) &&
                !c(
                  [
                    55356,
                    57332,
                    56128,
                    56423,
                    56128,
                    56418,
                    56128,
                    56421,
                    56128,
                    56430,
                    56128,
                    56423,
                    56128,
                    56447,
                  ],
                  [
                    55356,
                    57332,
                    8203,
                    56128,
                    56423,
                    8203,
                    56128,
                    56418,
                    8203,
                    56128,
                    56421,
                    8203,
                    56128,
                    56430,
                    8203,
                    56128,
                    56423,
                    8203,
                    56128,
                    56447,
                  ]
                )
              );
            case "emoji":
              return !c(
                [
                  55357,
                  56424,
                  55356,
                  57342,
                  8205,
                  55358,
                  56605,
                  8205,
                  55357,
                  56424,
                  55356,
                  57340,
                ],
                [
                  55357,
                  56424,
                  55356,
                  57342,
                  8203,
                  55358,
                  56605,
                  8203,
                  55357,
                  56424,
                  55356,
                  57340,
                ]
              );
          }
          return !1;
        }
        function d(e) {
          var t = a.createElement("script");
          (t.src = e),
            (t.defer = t.type = "text/javascript"),
            a.getElementsByTagName("head")[0].appendChild(t);
        }
        for (
          i = Array("flag", "emoji"),
            t.supports = { everything: !0, everythingExceptFlag: !0 },
            o = 0;
          o < i.length;
          o++
        )
          (t.supports[i[o]] = l(i[o])),
            (t.supports.everything = t.supports.everything && t.supports[i[o]]),
            "flag" !== i[o] &&
              (t.supports.everythingExceptFlag =
                t.supports.everythingExceptFlag && t.supports[i[o]]);
        (t.supports.everythingExceptFlag =
          t.supports.everythingExceptFlag && !t.supports.flag),
          (t.DOMReady = !1),
          (t.readyCallback = function () {
            t.DOMReady = !0;
          }),
          t.supports.everything ||
            ((n = function () {
              t.readyCallback();
            }),
            a.addEventListener
              ? (a.addEventListener("DOMContentLoaded", n, !1),
                e.addEventListener("load", n, !1))
              : (e.attachEvent("onload", n),
                a.attachEvent("onreadystatechange", function () {
                  "complete" === a.readyState && t.readyCallback();
                })),
            (r = t.source || {}).concatemoji
              ? d(r.concatemoji)
              : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)));
      })(window, document, window._wpemojiSettings);
    </script>
    <style>
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>
    <link
      rel="stylesheet"
      id="wp-block-library-css"
      href="../wp-includes/css/dist/block-library/style.min7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="cpsh-shortcodes-css"
      href="../wp-content/plugins/column-shortcodes/assets/css/shortcodes5152.css?ver=1.0"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="contact-form-7-css"
      href="../wp-content/plugins/contact-form-7/includes/css/styles38c6.css?ver=5.1.9"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="rs-plugin-settings-css"
      href="../wp-content/plugins/revslider/public/assets/css/rs6b5e1.css?ver=6.1.5"
      type="text/css"
      media="all"
    />
    <style id="rs-plugin-settings-inline-css">
      #rs-demo-id {
      }
    </style>
    <link
      rel="stylesheet"
      id="cspt-all-gfonts-css"
      href="https://fonts.googleapis.com/css?family=Rajdhani%3A300%2C500%2C600%2C700%2Cregular%2Cregular%2C700%2C500%7CRoboto%3A700%2Cregular&amp;ver=5.4.4"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="js_composer_front-css"
      href="../wp-content/plugins/js_composer/assets/css/js_composer.min9b2d.css?ver=6.1"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="bootstrap-css"
      href="../wp-content/themes/enginir/libraries/bootstrap/css/bootstrap.min7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="cspt-core-style-css"
      href="../wp-content/themes/enginir/css/core.min7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="cspt-theme-style-css"
      href="../wp-content/themes/enginir/css/theme.min7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="magnific-popup-css"
      href="../wp-content/themes/enginir/libraries/magnific-popup/magnific-popup7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="cspt-base-icons-css"
      href="../wp-content/themes/enginir/libraries/creativesplanet-base-icons/css/creativesplanet-base-icons7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="balloon-css"
      href="../wp-content/themes/enginir/libraries/balloon/balloon.min7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      id="cspt-dynamic-style-css"
      href="../wp-content/cspt-css/theme-style.min93f4.css?ver=774226"
      type="text/css"
      media="all"
    />
    <style id="cspt-dynamic-style-inline-css">
      .cspt-title-bar-wrapper {
        background-image: url(../wp-content/uploads/2020/06/header-bg\ -\ 1.jpg) !important;
      }
      .cspt-title-bar-wrapper:before {
        opacity: 0.5 !important;
      }
    </style>
    <link
      rel="stylesheet"
      id="cspt-responsive-style-css"
      href="../wp-content/themes/enginir/css/responsive.min7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <script src="../wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp"></script>
    <script src="../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"></script>
    <script src="../wp-content/plugins/enginir-addons/js/addon-scripts7263.js?ver=5.4.4"></script>
    <script src="../wp-content/plugins/revslider/public/assets/js/revolution.tools.minf049.js?ver=6.0"></script>
    <script src="../wp-content/plugins/revslider/public/assets/js/rs6.minb5e1.js?ver=6.1.5"></script>
    <script src="../wp-content/themes/enginir/libraries/magnific-popup/jquery.magnific-popup.min7263.js?ver=5.4.4"></script>
    <script src="../wp-content/themes/enginir/libraries/sticky-toolkit/jquery.sticky-kit.min7263.js?ver=5.4.4"></script>
    <script>
      /* <![CDATA[ */
      var cspt_js_variables = { responsive: "1200" };
      /* ]]> */
    </script>
    <script src="../wp-content/themes/enginir/js/core.min7263.js?ver=5.4.4"></script>
    <link rel="https://api.w.org/" href="../wp-json/index.html" />
    <link
      rel="EditURI"
      type="application/rsd+xml"
      title="RSD"
      href="../xmlrpc0db0.php?rsd"
    />
    <link
      rel="wlwmanifest"
      type="application/wlwmanifest+xml"
      href="../wp-includes/wlwmanifest.xml"
    />
    <meta name="generator" content="WordPress 5.4.4" />
    <link rel="canonical" href="index.html" />
    <link rel="shortlink" href="../index3d67.html?p=8593" />
    <link
      rel="alternate"
      type="application/json+oembed"
      href="../wp-json/oembed/1.0/embedae08.json?url=https%3A%2F%2Fcomplyatease.co.za%2Fcontact-us%2F"
    />
    <link
      rel="alternate"
      type="text/xml+oembed"
      href="../wp-json/oembed/1.0/embedf31d?url=https%3A%2F%2Fcomplyatease.co.za%2Fcontact-us%2F&amp;format=xml"
    />
    <style>
      .cspt-header-style-7 .site-branding:before {
        background-color: #0000;
      }

      .cspt-header-style-7 .site-branding:after {
        border-bottom: none;
      }
      .site-title img.cspt-main-logo {
        max-height: 65px;
      }
      .cspt-ihbox-style-4 .cspt-ihbox-icon {
        padding-right: 10px;
        margin-left: 41%;
      }
      img.alignnone.size-medium.wp-image-11332 {
        width: 52%;
        margin-bottom: -10px;
      }
    </style>
    <meta
      name="generator"
      content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."
    />
    <meta
      name="generator"
      content="Powered by Slider Revolution 6.1.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."
    />
    <script>
      function setREVStartSize(t) {
        try {
          var h,
            e = document.getElementById(t.c).parentNode.offsetWidth;
          if (
            ((e = 0 === e || isNaN(e) ? window.innerWidth : e),
            (t.tabw = void 0 === t.tabw ? 0 : parseInt(t.tabw)),
            (t.thumbw = void 0 === t.thumbw ? 0 : parseInt(t.thumbw)),
            (t.tabh = void 0 === t.tabh ? 0 : parseInt(t.tabh)),
            (t.thumbh = void 0 === t.thumbh ? 0 : parseInt(t.thumbh)),
            (t.tabhide = void 0 === t.tabhide ? 0 : parseInt(t.tabhide)),
            (t.thumbhide = void 0 === t.thumbhide ? 0 : parseInt(t.thumbhide)),
            (t.mh =
              void 0 === t.mh || "" == t.mh || "auto" === t.mh
                ? 0
                : parseInt(t.mh, 0)),
            "fullscreen" === t.layout || "fullscreen" === t.l)
          )
            h = Math.max(t.mh, window.innerHeight);
          else {
            for (var i in ((t.gw = Array.isArray(t.gw) ? t.gw : [t.gw]), t.rl))
              (void 0 !== t.gw[i] && 0 !== t.gw[i]) || (t.gw[i] = t.gw[i - 1]);
            for (var i in ((t.gh =
              void 0 === t.el ||
              "" === t.el ||
              (Array.isArray(t.el) && 0 == t.el.length)
                ? t.gh
                : t.el),
            (t.gh = Array.isArray(t.gh) ? t.gh : [t.gh]),
            t.rl))
              (void 0 !== t.gh[i] && 0 !== t.gh[i]) || (t.gh[i] = t.gh[i - 1]);
            var r,
              a = new Array(t.rl.length),
              n = 0;
            for (var i in ((t.tabw = t.tabhide >= e ? 0 : t.tabw),
            (t.thumbw = t.thumbhide >= e ? 0 : t.thumbw),
            (t.tabh = t.tabhide >= e ? 0 : t.tabh),
            (t.thumbh = t.thumbhide >= e ? 0 : t.thumbh),
            t.rl))
              a[i] = t.rl[i] < window.innerWidth ? 0 : t.rl[i];
            for (var i in ((r = a[0]), a))
              r > a[i] && 0 < a[i] && ((r = a[i]), (n = i));
            var d =
              e > t.gw[n] + t.tabw + t.thumbw
                ? 1
                : (e - (t.tabw + t.thumbw)) / t.gw[n];
            h = t.gh[n] * d + (t.tabh + t.thumbh);
          }
          void 0 === window.rs_init_css &&
            (window.rs_init_css = document.head.appendChild(
              document.createElement("style")
            )),
            (document.getElementById(t.c).height = h),
            (window.rs_init_css.innerHTML +=
              "#" + t.c + "_wrapper { height: " + h + "px }");
        } catch (t) {
          console.log("Failure at Presize of Slider:" + t);
        }
      }
    </script>
    <style id="wp-custom-css">
      #rev_slider_1_1 rs-layer input[type="text"],
      #rev_slider_1_1 rs-layer input[type="email"],
      #rev_slider_1_1 rs-layer input[type="tel"] {
        height: 30px !important;
      }
      .wpcf7 label {
        font-size: 14px !important;
      }
      #rev_slider_1_1 .wpcf7 {
        background-color: #002e5bb3;
        padding: 23px 27px 3px 27px !important;
      }
    </style>
    <style id="kirki-inline-styles">
      /* devanagari */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDIxapCSOBg7S-QT7p4GM-CGW-rOq7s.woff)
          format("woff");
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D,
          U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
      }
      /* latin-ext */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDIxapCSOBg7S-QT7p4JM-CGW-rOq7s.woff)
          format("woff");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }
      /* latin */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDIxapCSOBg7S-QT7p4HM-CGW-rO.woff)
          format("woff");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
      }
      /* devanagari */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDI2apCSOBg7S-QT7pb0EPOqeeHkkbIxyyg.woff)
          format("woff");
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D,
          U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
      }
      /* latin-ext */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDI2apCSOBg7S-QT7pb0EPOleeHkkbIxyyg.woff)
          format("woff");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }
      /* latin */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDI2apCSOBg7S-QT7pb0EPOreeHkkbIx.woff)
          format("woff");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
      }
      /* devanagari */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDI2apCSOBg7S-QT7pa8FvOqeeHkkbIxyyg.woff)
          format("woff");
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D,
          U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
      }
      /* latin-ext */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDI2apCSOBg7S-QT7pa8FvOleeHkkbIxyyg.woff)
          format("woff");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }
      /* latin */
      @font-face {
        font-family: "Rajdhani";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/rajdhani/LDI2apCSOBg7S-QT7pa8FvOreeHkkbIx.woff)
          format("woff");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
      } /* cyrillic-ext */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu72xMKTU1Kvnz.woff)
          format("woff");
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
          U+A640-A69F, U+FE2E-FE2F;
      }
      /* cyrillic */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu5mxMKTU1Kvnz.woff)
          format("woff");
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      /* greek-ext */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu7mxMKTU1Kvnz.woff)
          format("woff");
        unicode-range: U+1F00-1FFF;
      }
      /* greek */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu4WxMKTU1Kvnz.woff)
          format("woff");
        unicode-range: U+0370-03FF;
      }
      /* vietnamese */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu7WxMKTU1Kvnz.woff)
          format("woff");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
          U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
      }
      /* latin-ext */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu7GxMKTU1Kvnz.woff)
          format("woff");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }
      /* latin */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOmCnqEu92Fr1Mu4mxMKTU1Kg.woff)
          format("woff");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
      }
      /* cyrillic-ext */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfCRc-AMP6lbBP.woff)
          format("woff");
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
          U+A640-A69F, U+FE2E-FE2F;
      }
      /* cyrillic */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfABc-AMP6lbBP.woff)
          format("woff");
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      /* greek-ext */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfCBc-AMP6lbBP.woff)
          format("woff");
        unicode-range: U+1F00-1FFF;
      }
      /* greek */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfBxc-AMP6lbBP.woff)
          format("woff");
        unicode-range: U+0370-03FF;
      }
      /* vietnamese */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfCxc-AMP6lbBP.woff)
          format("woff");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
          U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
      }
      /* latin-ext */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfChc-AMP6lbBP.woff)
          format("woff");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
          U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }
      /* latin */
      @font-face {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(../wp-content/fonts/roboto/KFOlCnqEu92Fr1MmWUlfBBc-AMP6lQ.woff)
          format("woff");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
          U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
          U+2212, U+2215, U+FEFF, U+FFFD;
      }
    </style>
    <style data-type="vc_shortcodes-custom-css">
      .vc_custom_1556620604270 {
        margin-top: -20px !important;
      }
      .vc_custom_1542271340398 {
        margin-bottom: 0px !important;
      }
    </style>
    <noscript
      ><style>
        .wpb_animate_when_almost_visible {
          opacity: 1;
        }
      </style></noscript
    >
  </head>

  <body
    class="page-template-default page page-id-8593 cspt-sidebar-no wpb-js-composer js-comp-ver-6.1 vc_responsive"
  >
    <div id="page" class="site cspt-parent-header-style-7">
      <a class="skip-link screen-reader-text" href="#content"
        >Skip to content</a
      >
      <header id="masthead" class="site-header cspt-header-style-7">
      <?php 
            include('../includes/navbar.php');
          ?>
          <div class="container">
            <div class="cspt-title-bar-content">
              <div class="cspt-title-bar-content-inner">
                <div class="cspt-tbar">
                  <div class="cspt-tbar-inner container">
                    <h1 class="cspt-tbar-title">Contact</h1>
                  </div>
                </div>
                <div class="cspt-breadcrumb">
                  <div class="cspt-breadcrumb-inner">
                    <span
                      ><a
                        title="Go to Comply At Ease."
                        href="../index.html"
                        class="home"
                        ><span>Home</span></a
                      ></span
                    >
                    &gt;
                    <span class="post post-page current-item">Contact Us</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- .cspt-title-bar-content -->
          </div>
          <!-- .container -->
        </div>
        <!-- .cspt-title-bar-wrapper -->
      </header>
      <!-- #masthead -->
      <div class="site-content-contain">
        <div id="content" class="site-content container">
          <div id="primary" class="content-area">
            <main id="main" class="site-main cspt-page-content-wrapper">
              <article
                id="post-8593"
                class="post-8593 page type-page status-publish hentry"
              >
                <div class="entry-content">
                  <div
                    data-vc-full-width="true"
                    data-vc-full-width-init="false"
                    class="vc_row wpb_row vc_row-fluid cspt-overflow-visible cspt-row cspt-bg-color-yes cspt-bg-color-white cspt-zindex-2"
                  >
                    <div
                      class="wpb_column vc_column_container vc_col-sm-4 cspt-column cspt-bg-color-yes cspt-bg-color-transparent cspt-zindex-zero"
                    >
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div
                            class="cspt-ihbox cspt-ihbox-style-hsbox cspt-reverse-heading-yes"
                          >
                            <div class="cspt-ihbox-contents">
                              <div class="cspt-ihbox-heading">
                                <h2 class="vc_custom_heading">
                                  <strong>Get in touch</strong>
                                </h2>
                              </div>
                            </div>
                            <!-- .cspt-ihbox-contents -->
                          </div>

                          <div
                            class="wpb_text_column wpb_content_element vc_custom_1556620604270"
                          >
                            <div class="wpb_wrapper">
                              <p>
								Please complete the below form and we’ll make sure the 
								right team member gets back to you.
                              </p>
                            </div>
                          </div>
                          <div class="cspt-ihbox cspt-ihbox-style-7">
                            <div class="cspt-ihbox-contents">
                              <div
                                class="cspt-ihbox-headingicon d-flex align-items-center"
                              >
                                <div class="cspt-ihbox-icon">
                                  <div class="cspt-ihbox-icon-wrapper">
                                    <i
                                      class="cspt-enginir-icon cspt-enginir-icon-mail"
                                    ></i>
                                  </div>
                                </div>
                                <div class="cspt-ihbox-contents">
                                  <div class="cspt-ihbox-heading">
                                    <h2 class="vc_custom_heading">
										simba@complyatease.co.za
                                    </h2>
                                  </div>
                                  <div class="cspt-ihbox-content">
                                    Email address
                                  </div>
                                </div>
                                <!-- .cspt-ihbox-contents -->
                              </div>
                            </div>
                          </div>

                          <div class="cspt-ihbox cspt-ihbox-style-7">
                            <div class="cspt-ihbox-contents">
                              <div
                                class="cspt-ihbox-headingicon d-flex align-items-center"
                              >
                                <div class="cspt-ihbox-icon">
                                  <div class="cspt-ihbox-icon-wrapper">
                                    <i
                                      class="cspt-enginir-icon cspt-enginir-icon-call"
                                    ></i>
                                  </div>
                                </div>
                                <div class="cspt-ihbox-contents">
                                  <div class="cspt-ihbox-heading">
                                    <h2 class="vc_custom_heading"> +27 83 294 7804</h2>
                                  </div>
                                  <div class="cspt-ihbox-content">
                                    Phone
                                  </div>
                                </div>
                                <!-- .cspt-ihbox-contents -->
                              </div>
                            </div>
                          </div>

                          <div class="cspt-ihbox cspt-ihbox-style-7">
                            <div class="cspt-ihbox-contents">
                              <div
                                class="cspt-ihbox-headingicon d-flex align-items-center"
                              >
                                <div class="cspt-ihbox-icon">
                                  <div class="cspt-ihbox-icon-wrapper">
                                    <i
                                      class="cspt-enginir-icon cspt-enginir-icon-skyline"
                                    ></i>
                                  </div>
                                </div>
                                <div class="cspt-ihbox-contents">
                                  <div class="cspt-ihbox-heading">
                                    <h2 class="vc_custom_heading">				
										Midrand, 1685
										
										Gauteng, South Africa
                                    </h2>
                                  </div>
                                  <div class="cspt-ihbox-content">
                                    Address
                                  </div>
                                </div>
                                <!-- .cspt-ihbox-contents -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="wpb_column vc_column_container vc_col-sm-8 cspt-column cspt-bg-color-yes cspt-bg-color-transparent cspt-zindex-2"
                    >
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                          <div
                            role="form"
                            class="wpcf7"
                            id="wpcf7-f11330-p8593-o2"
                            lang="en-US"
                            dir="ltr"
                          >
                            <div
                              class="screen-reader-response"
                              aria-live="polite"
                            ></div>
                            <form
                              method="POST"
                              class="wpcf7-form"
                              novalidate="novalidate"
                              id="contactForm" 
                              name="contactForm"
                            >
                              <div style="display: none">
                                <input
                                  type="hidden"
                                  name="_wpcf7"
                                  value="11330"
                                />
                                <input
                                  type="hidden"
                                  name="_wpcf7_version"
                                  value="5.1.9"
                                />
                                <input
                                  type="hidden"
                                  name="_wpcf7_locale"
                                  value="en_US"
                                />
                                <input
                                  type="hidden"
                                  name="_wpcf7_unit_tag"
                                  value="wpcf7-f11330-p8593-o2"
                                />
                                <input
                                  type="hidden"
                                  name="_wpcf7_container_post"
                                  value="8593"
                                />
                              </div>
                              <p>
                                <label>
                                  Your Name (required)<br />
                                  <span
                                    class="wpcf7-form-control-wrap your-name"
                                    ><input
                                      type="text"
                                      name="name"
                                      size="40"
                                      class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                      aria-required="true"
                                      aria-invalid="false"
                                  /></span>
                                </label>
                              </p>
                              <p>
                                <label>
                                  Your Email (required)<br />
                                  <span
                                    class="wpcf7-form-control-wrap your-email"
                                    ><input
                                      type="email"
                                      name="email"
                                      size="40"
                                      class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                      aria-required="true"
                                      aria-invalid="false"
                                  /></span>
                                </label>
                              </p>
                              <p>
                                <label>
                                  Subject<br />
                                  <span
                                    class="wpcf7-form-control-wrap your-subject"
                                    ><input
                                      type="text"
                                      name="subject"
                                      size="40"
                                      class="wpcf7-form-control wpcf7-text"
                                      aria-invalid="false"
                                  /></span>
                                </label>
                              </p>
                              <p>
                                <label>
                                  Your Message<br />
                                  <span
                                    class="wpcf7-form-control-wrap your-message"
                                  >
                                    <textarea
                                      name="message"
                                      cols="40"
                                      rows="10"
                                      class="wpcf7-form-control wpcf7-textarea"
                                      aria-invalid="false"
                                    ></textarea>
                                  </span>
                                </label>
                              </p>
                              <p>
                                <input
                                  type="submit"
                                  value="Send Message"
                                  class="wpcf7-form-control wpcf7-submit"
                                />
                              </p>
                              <div
                                class="wpcf7-response-output wpcf7-display-none"
                                aria-hidden="true"
                              ></div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <div class="vc_row-full-width vc_clearfix"></div>
                  <h3 class="cspt-hide">Contact Us</h3>
                </div>
                <!-- .entry-content -->
              </article>
              <!-- #post-## -->
            </main>
            <!-- #main -->
          </div>
          <!-- #primary -->
        </div>
        <!-- #content -->

        <?php
          include('../includes/footer.php')
        ?>
        <!-- #colophon -->
      </div>
      <!-- .site-content-contain -->
    </div>
    <!-- #page -->
    <a href="#" class="scroll-to-top"
      ><i class="cspt-base-icon-up-open-big"></i
    ></a>
    <script type="text/html" id="wpb-modifications"></script>
    <link
      rel="stylesheet"
      id="cspt_enginir_icon-css"
      href="../wp-content/plugins/enginir-addons/libraries/cspt-enginir-icon/flaticon7263.css?ver=5.4.4"
      type="text/css"
      media="all"
    />
    <script src="../wp-content/plugins/contact-form-7/includes/js/scripts38c6.js?ver=5.1.9"></script>
    <script src="../wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min9b2d.js?ver=6.1"></script>
    <script src="../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min9b2d.js?ver=6.1"></script>
    <script src="../wp-includes/js/wp-embed.min7263.js?ver=5.4.4"></script>
  </body>
</html>
