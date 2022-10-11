<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/vendors_css.css')}}">

    <!-- Style-->

    <link rel="stylesheet" href="{{asset('assets/css/skin_color.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/jquery.toast.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="stylesheet" href="{{asset('assets/images/favicon.png')}}"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>
<body>
<div class="container-scroller">
    @include('admin.body.sidebar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.blade.php -->


        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                                                                               alt="logo"/></a>
            </div>
            @include('admin.body.header')
        </nav>
        <!-- partial -->
        <div class="main-panel">

            <div class="content-wrapper">
                @yield('admin')

            </div>

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.blade.php -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/js/misc.js')}}"></script>
<script src="{{asset('assets/js/settings.js')}}"></script>
<script src="{{asset('assets/js/todolist.js')}}"></script>

{{--@include('toastr')--}}
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

{{--<script src="{{asset('assets/js/toastDemo.js')}}"></script>--}}
<script src="{{asset('assets/js/toastDemo.js')}}"></script>
{{--<script src="{{asset('assets/js/desktop-notification.js')}}"></script>--}}
{{--<script>
(function($) {
showSuccessToast = function() {
'use strict';
resetToastPosition();
$.toast({
heading: 'Success',
text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
showHideTransition: 'slide',
icon: 'success',
loaderBg: '#f96868',
position: 'top-right'
})
};
showInfoToast = function() {
'use strict';
resetToastPosition();
$.toast({
heading: 'Info',
text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
showHideTransition: 'slide',
icon: 'info',
loaderBg: '#46c35f',
position: 'top-right'
})
};
showWarningToast = function() {
'use strict';
resetToastPosition();
$.toast({
heading: 'Warning',
text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
showHideTransition: 'slide',
icon: 'warning',
loaderBg: '#57c7d4',
position: 'top-right'
})
};
showDangerToast = function() {
'use strict';
resetToastPosition();
$.toast({
heading: 'Danger',
text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
showHideTransition: 'slide',
icon: 'error',
loaderBg: '#f2a654',
position: 'top-right'
})
};
showToastPosition = function(position) {
'use strict';
resetToastPosition();
$.toast({
heading: 'Positioning',
text: 'Specify the custom position object or use one of the predefined ones',
position: String(position),
icon: 'info',
stack: false,
loaderBg: '#f96868'
})
}
showToastInCustomPosition = function() {
'use strict';
resetToastPosition();
$.toast({
heading: 'Custom positioning',
text: 'Specify the custom position object or use one of the predefined ones',
icon: 'info',
position: {
left: 120,
top: 120
},
stack: false,
loaderBg: '#f96868'
})
}
resetToastPosition = function() {
$('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
$(".jq-toast-wrap").css({
"top": "",
"left": "",
"bottom": "",
"right": ""
}); //to remove previous position style
}
})(jQuery);
</script>--}}
<script>

    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
<!-- End custom js for this page -->
{{--<script>
    "function" != typeof Object.create && (Object.create = function (t) {
        function o() {
        }

        return o.prototype = t, new o
    }), function (t, o, i, s) {
        "use strict";
        var n = {
            _positionClasses: ["bottom-left", "bottom-right", "top-right", "top-left", "bottom-center", "top-center", "mid-center"],
            _defaultIcons: ["success", "error", "info", "warning"],
            init: function (o, i) {
                this.prepareOptions(o, t.toast.options), this.process()
            },
            prepareOptions: function (o, i) {
                var s = {};
                "string" == typeof o || o instanceof Array ? s.text = o : s = o, this.options = t.extend({}, i, s)
            },
            process: function () {
                this.setup(), this.addToDom(), this.position(), this.bindToast(), this.animate()
            },
            setup: function () {
                var o = "";
                if (this._toastEl = this._toastEl || t("<div></div>", {"class": "jq-toast-single"}), o += '<span class="jq-toast-loader"></span>', this.options.allowToastClose && (o += '<span class="close-jq-toast-single">&times;</span>'), this.options.text instanceof Array) {
                    this.options.heading && (o += '<h2 class="jq-toast-heading">' + this.options.heading + "</h2>"), o += '<ul class="jq-toast-ul">';
                    for (var i = 0; i < this.options.text.length; i++) o += '<li class="jq-toast-li" id="jq-toast-item-' + i + '">' + this.options.text[i] + "</li>";
                    o += "</ul>"
                } else this.options.heading && (o += '<h2 class="jq-toast-heading">' + this.options.heading + "</h2>"), o += this.options.text;
                this._toastEl.html(o), this.options.bgColor !== !1 && this._toastEl.css("background-color", this.options.bgColor), this.options.textColor !== !1 && this._toastEl.css("color", this.options.textColor), this.options.textAlign && this._toastEl.css("text-align", this.options.textAlign), this.options.icon !== !1 && (this._toastEl.addClass("jq-has-icon"), -1 !== t.inArray(this.options.icon, this._defaultIcons) && this._toastEl.addClass("jq-icon-" + this.options.icon)), this.options["class"] !== !1 && this._toastEl.addClass(this.options["class"])
            },
            position: function () {
                "string" == typeof this.options.position && -1 !== t.inArray(this.options.position, this._positionClasses) ? "bottom-center" === this.options.position ? this._container.css({
                    left: t(o).outerWidth() / 2 - this._container.outerWidth() / 2,
                    bottom: 20
                }) : "top-center" === this.options.position ? this._container.css({
                    left: t(o).outerWidth() / 2 - this._container.outerWidth() / 2,
                    top: 20
                }) : "mid-center" === this.options.position ? this._container.css({
                    left: t(o).outerWidth() / 2 - this._container.outerWidth() / 2,
                    top: t(o).outerHeight() / 2 - this._container.outerHeight() / 2
                }) : this._container.addClass(this.options.position) : "object" == typeof this.options.position ? this._container.css({
                    top: this.options.position.top ? this.options.position.top : "auto",
                    bottom: this.options.position.bottom ? this.options.position.bottom : "auto",
                    left: this.options.position.left ? this.options.position.left : "auto",
                    right: this.options.position.right ? this.options.position.right : "auto"
                }) : this._container.addClass("bottom-left")
            },
            bindToast: function () {
                var t = this;
                this._toastEl.on("afterShown", function () {
                    t.processLoader()
                }), this._toastEl.find(".close-jq-toast-single").on("click", function (o) {
                    o.preventDefault(), "fade" === t.options.showHideTransition ? (t._toastEl.trigger("beforeHide"), t._toastEl.fadeOut(function () {
                        t._toastEl.trigger("afterHidden")
                    })) : "slide" === t.options.showHideTransition ? (t._toastEl.trigger("beforeHide"), t._toastEl.slideUp(function () {
                        t._toastEl.trigger("afterHidden")
                    })) : (t._toastEl.trigger("beforeHide"), t._toastEl.hide(function () {
                        t._toastEl.trigger("afterHidden")
                    }))
                }), "function" == typeof this.options.beforeShow && this._toastEl.on("beforeShow", function () {
                    t.options.beforeShow()
                }), "function" == typeof this.options.afterShown && this._toastEl.on("afterShown", function () {
                    t.options.afterShown()
                }), "function" == typeof this.options.beforeHide && this._toastEl.on("beforeHide", function () {
                    t.options.beforeHide()
                }), "function" == typeof this.options.afterHidden && this._toastEl.on("afterHidden", function () {
                    t.options.afterHidden()
                })
            },
            addToDom: function () {
                var o = t(".jq-toast-wrap");
                if (0 === o.length ? (o = t("<div></div>", {"class": "jq-toast-wrap"}), t("body").append(o)) : (!this.options.stack || isNaN(parseInt(this.options.stack, 10))) && o.empty(), o.find(".jq-toast-single:hidden").remove(), o.append(this._toastEl), this.options.stack && !isNaN(parseInt(this.options.stack), 10)) {
                    var i = o.find(".jq-toast-single").length, s = i - this.options.stack;
                    s > 0 && t(".jq-toast-wrap").find(".jq-toast-single").slice(0, s).remove()
                }
                this._container = o
            },
            canAutoHide: function () {
                return this.options.hideAfter !== !1 && !isNaN(parseInt(this.options.hideAfter, 10))
            },
            processLoader: function () {
                if (!this.canAutoHide() || this.options.loader === !1) return !1;
                var t = this._toastEl.find(".jq-toast-loader"), o = (this.options.hideAfter - 400) / 1e3 + "s",
                    i = this.options.loaderBg, s = t.attr("style") || "";
                s = s.substring(0, s.indexOf("-webkit-transition")), s += "-webkit-transition: width " + o + " ease-in;                       -o-transition: width " + o + " ease-in;                       transition: width " + o + " ease-in;                       background-color: " + i + ";", t.attr("style", s).addClass("jq-toast-loaded")
            },
            animate: function () {
                var t = this;
                if (this._toastEl.hide(), this._toastEl.trigger("beforeShow"), "fade" === this.options.showHideTransition.toLowerCase() ? this._toastEl.fadeIn(function () {
                    t._toastEl.trigger("afterShown")
                }) : "slide" === this.options.showHideTransition.toLowerCase() ? this._toastEl.slideDown(function () {
                    t._toastEl.trigger("afterShown")
                }) : this._toastEl.show(function () {
                    t._toastEl.trigger("afterShown")
                }), this.canAutoHide()) {
                    var t = this;
                    o.setTimeout(function () {
                        "fade" === t.options.showHideTransition.toLowerCase() ? (t._toastEl.trigger("beforeHide"), t._toastEl.fadeOut(function () {
                            t._toastEl.trigger("afterHidden")
                        })) : "slide" === t.options.showHideTransition.toLowerCase() ? (t._toastEl.trigger("beforeHide"), t._toastEl.slideUp(function () {
                            t._toastEl.trigger("afterHidden")
                        })) : (t._toastEl.trigger("beforeHide"), t._toastEl.hide(function () {
                            t._toastEl.trigger("afterHidden")
                        }))
                    }, this.options.hideAfter)
                }
            },
            reset: function (o) {
                "all" === o ? t(".jq-toast-wrap").remove() : this._toastEl.remove()
            },
            update: function (t) {
                this.prepareOptions(t, this.options), this.setup(), this.bindToast()
            }
        };
        t.toast = function (t) {
            var o = Object.create(n);
            return o.init(t, this), {
                reset: function (t) {
                    o.reset(t)
                }, update: function (t) {
                    o.update(t)
                }
            }
        }, t.toast.options = {
            text: "",
            heading: "",
            showHideTransition: "fade",
            allowToastClose: !0,
            hideAfter: 3e3,
            loader: !0,
            loaderBg: "#9EC600",
            stack: 5,
            position: "bottom-left",
            bgColor: !1,
            textColor: !1,
            textAlign: "left",
            icon: !1,
            beforeShow: function () {
            },
            afterShown: function () {
            },
            beforeHide: function () {
            },
            afterHidden: function () {
            }
        }
    }(jQuery, window, document);
</script>--}}
</body>
</html>
