@extends('layouts.admin.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">

            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_signin_method">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Denda</h3>
                    </div>
                </div>
                <div id="kt_account_settings_signin_method" class="collapse show">
                    <div class="card-body border-top p-9">
                        <div class="d-flex flex-wrap align-items-center">
                            <div id="kt_denda_harian" class="">
                                <div class="fs-6 fw-bolder mb-1">Harian <span class="text-gray-500">( Denda ini akan
                                        berlaku apa bila peminjam melewati batas yang telah di tentukan )</span></div>
                                <div class="fw-bold text-gray-600">Rp. 5000</div>
                            </div>
                            <div id="kt_denda_harian_edit" class="flex-row-fluid d-none">
                                <form id="kt_denda_harian_change" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                    novalidate="novalidate">
                                    <div class="row mb-6">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                                <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New
                                                    Email Address</label>
                                                <input type="email" class="form-control form-control-lg form-control-solid"
                                                    id="emailaddress" placeholder="Email Address" name="emailaddress"
                                                    value="support@keenthemes.com">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button id="kt_denda_harian_submit" type="button"
                                            class="btn btn-primary me-2 px-6">Update
                                            Email</button>
                                        <button id="kt_denda_harian_cancel" type="button"
                                            class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                    </div>
                                    <div></div>
                                </form>
                            </div>
                            <div id="kt_denda_harian_button" class="ms-auto">
                                <button class="btn btn-light btn-active-light-primary">Change Denda Harian</button>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-6"></div>
                        <div class="d-flex flex-wrap align-items-center">
                            <div id="kt_signin_email" class="">
                                <div class="fs-6 fw-bolder mb-1">Kerusakan <span class="text-gray-500"> (Denda Ini Termasuk
                                        dengan Kehilangan apa bila terjadi kehilangan saat meminjam buku ) </span></div>
                                <div class="fw-bold text-gray-600">Rp. 50.000</div>
                            </div>
                            <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                    novalidate="novalidate">
                                    <div class="row mb-6">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                                <label for="emailaddress" class="form-label fs-6 fw-bolder mb-3">Enter New
                                                    Email Address</label>
                                                <input type="email" class="form-control form-control-lg form-control-solid"
                                                    id="emailaddress" placeholder="Email Address" name="emailaddress"
                                                    value="support@keenthemes.com">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update
                                            Email</button>
                                        <button id="kt_signin_cancel" type="button"
                                            class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                    </div>
                                    <div></div>
                                </form>
                            </div>
                            <div id="kt_signin_email_button" class="ms-auto">
                                <button class="btn btn-light btn-active-light-primary">Change Denda Kerusakan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        "use strict";
        var KTAccountSettingsSigninMethods = {
            init: function() {
                var t, e;
                ! function() {
                    var t = document.getElementById("kt_denda_harian"),
                        e = document.getElementById("kt_denda_harian_edit"),
                        i = document.getElementById("kt_denda_harian_button"),
                        s = document.getElementById("kt_denda_harian_cancel"),

                        a = document.getElementById("kt_signin_email"),
                        b = document.getElementById("kt_signin_email_edit"),
                        c = document.getElementById("kt_signin_email_button"),
                        d = document.getElementById("kt_signin_cancel");
                    i.querySelector("button").addEventListener("click", (function() {
                            l()
                        })), s.addEventListener("click", (function() {
                            l()
                        })),

                        c.querySelector("button").addEventListener("click", (function() {
                            d()
                        })), s.addEventListener("click", (function() {
                            d()
                        }));
                    var l = function() {
                            t.classList.toggle("d-none"), i.classList.toggle("d-none"), e.classList.toggle(
                                "d-none")
                        },
                        d = function() {
                            a.classList.toggle("d-none"), c.classList.toggle("d-none"), b.classList.toggle(
                                "d-none")
                        }
                }(), e = document.getElementById("kt_denda_harian_change"), t = FormValidation.formValidation(
                        e, {
                            plugins: {
                                trigger: new FormValidation.plugins.Trigger,
                                bootstrap: new FormValidation.plugins.Bootstrap5({
                                    rowSelector: ".fv-row"
                                })
                            }
                        }), e.querySelector("#kt_denda_harian_submit").addEventListener("click", (function(n) {
                        n.preventDefault(), console.log("click"), t.validate().then((function(n) {
                            "Valid" == n ? swal.fire({
                                text: "Sent password reset. Please check your email",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then((function() {
                                e.reset(), t.resetForm()
                            })) : swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            })
                        }))
                    })),
                    function(t) {
                        var e, n = document.getElementById("kt_signin_change_email");
                        e = FormValidation.formValidation(n, {
                                fields: {
                                    emailaddress: {
                                        validators: {
                                            notEmpty: {
                                                message: "Email is required"
                                            },
                                        }
                                    },
                                },
                                plugins: {
                                    trigger: new FormValidation.plugins.Trigger,
                                    bootstrap: new FormValidation.plugins.Bootstrap5({
                                        rowSelector: ".fv-row"
                                    })
                                }
                            }),
                            n.querySelector("#kt_signin_submit").addEventListener("click", (function(t) {
                                t.preventDefault(), console.log("click"), e.validate().then((function(t) {
                                    "Valid" == t ? swal.fire({
                                        text: "Sent password reset. Please check your email",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn font-weight-bold btn-light-primary"
                                        }
                                    }).then((function() {
                                        n.reset(), e.resetForm()
                                    })) : swal.fire({
                                        text: "Sorry, looks like there are some errors detected, please try again.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn font-weight-bold btn-light-primary"
                                        }
                                    })
                                }))
                            }))

                    }()
            }
        };
        KTUtil.onDOMContentLoaded((function() {
            KTAccountSettingsSigninMethods.init()
        }));

        // var KTAccountSettingsSigninMethods = {
        //     init: function() {
        //         var t, e;
        //         ! function() {
        //             var t = document.getElementById("kt_signin_email"),
        //                 e = document.getElementById("kt_signin_email_edit"),
        //                 i = document.getElementById("kt_signin_email_button"),
        //                 s = document.getElementById("kt_signin_cancel");
        //             i.querySelector("button").addEventListener("click", (function() {
        //                 l()
        //             })), s.addEventListener("click", (function() {
        //                 l()
        //             }));
        //             var l = function() {
        //                 t.classList.toggle("d-none"), i.classList.toggle("d-none"), e.classList.toggle("d-none")
        //             }
        //         }(), e = document.getElementById("kt_signin_change_email"), t = FormValidation.formValidation(e, {
        //             plugins: {
        //                 trigger: new FormValidation.plugins.Trigger,
        //                 bootstrap: new FormValidation.plugins.Bootstrap5({
        //                     rowSelector: ".fv-row"
        //                 })
        //             }
        //         }), e.querySelector("#kt_signin_submit").addEventListener("click", (function(n) {
        //             n.preventDefault(), console.log("click"), t.validate().then((function(n) {
        //                 "Valid" == n ? swal.fire({
        //                     text: "Sent password reset. Please check your email",
        //                     icon: "success",
        //                     buttonsStyling: !1,
        //                     confirmButtonText: "Ok, got it!",
        //                     customClass: {
        //                         confirmButton: "btn font-weight-bold btn-light-primary"
        //                     }
        //                 }).then((function() {
        //                     e.reset(), t.resetForm()
        //                 })) : swal.fire({
        //                     text: "Sorry, looks like there are some errors detected, please try again.",
        //                     icon: "error",
        //                     buttonsStyling: !1,
        //                     confirmButtonText: "Ok, got it!",
        //                     customClass: {
        //                         confirmButton: "btn font-weight-bold btn-light-primary"
        //                     }
        //                 })
        //             }))
        //         }))
        //     }
        // };
        // KTUtil.onDOMContentLoaded((function() {
        //     KTAccountSettingsSigninMethods.init()
        // }));
        // "use strict";
        // var KTAccountSettingsSigninMethods = {
        //     init: function() {
        //         var t, e;
        //         ! function() {
        //             var t = document.getElementById("kt_signin_email"),
        //                 e = document.getElementById("kt_signin_email_edit"),
        //                 n = document.getElementById("kt_signin_password"),
        //                 o = document.getElementById("kt_signin_password_edit"),
        //                 i = document.getElementById("kt_signin_email_button"),
        //                 s = document.getElementById("kt_signin_cancel"),
        //                 r = document.getElementById("kt_signin_password_button"),
        //                 a = document.getElementById("kt_password_cancel");

        //             i.querySelector("button").addEventListener("click", (function() {
        //                     l()
        //                 })), s.addEventListener("click", (function() {
        //                     l()
        //                 })),

        //                 r.querySelector("button").addEventListener("click", (function() {
        //                     d()
        //                 })), a.addEventListener("click", (function() {
        //                     d()
        //                 }));
        //             var l = function() {
        //                     t.classList.toggle("d-none"), i.classList.toggle("d-none"), e.classList.toggle("d-none")
        //                 },
        //                 d = function() {
        //                     n.classList.toggle("d-none"), r.classList.toggle("d-none"), o.classList.toggle("d-none")
        //                 }
        //         }(), e = document.getElementById("kt_signin_change_email"), t = FormValidation.formValidation(e, {
        //                 fields: {
        //                     emailaddress: {
        //                         validators: {
        //                             notEmpty: {
        //                                 message: "Email is required"
        //                             },
        //                             emailAddress: {
        //                                 message: "The value is not a valid email address"
        //                             }
        //                         }
        //                     },
        //                     confirmemailpassword: {
        //                         validators: {
        //                             notEmpty: {
        //                                 message: "Password is required"
        //                             }
        //                         }
        //                     }
        //                 },
        //                 plugins: {
        //                     trigger: new FormValidation.plugins.Trigger,
        //                     bootstrap: new FormValidation.plugins.Bootstrap5({
        //                         rowSelector: ".fv-row"
        //                     })
        //                 }
        //             }), e.querySelector("#kt_signin_submit").addEventListener("click", (function(n) {
        //                 n.preventDefault(), console.log("click"), t.validate().then((function(n) {
        //                     "Valid" == n ? swal.fire({
        //                         text: "Sent password reset. Please check your email",
        //                         icon: "success",
        //                         buttonsStyling: !1,
        //                         confirmButtonText: "Ok, got it!",
        //                         customClass: {
        //                             confirmButton: "btn font-weight-bold btn-light-primary"
        //                         }
        //                     }).then((function() {
        //                         e.reset(), t.resetForm()
        //                     })) : swal.fire({
        //                         text: "Sorry, looks like there are some errors detected, please try again.",
        //                         icon: "error",
        //                         buttonsStyling: !1,
        //                         confirmButtonText: "Ok, got it!",
        //                         customClass: {
        //                             confirmButton: "btn font-weight-bold btn-light-primary"
        //                         }
        //                     })
        //                 }))
        //             })),
        //             function(t) {
        //                 var e, n = document.getElementById("kt_signin_change_password");
        //                 e = FormValidation.formValidation(n, {
        //                     fields: {
        //                         currentpassword: {
        //                             validators: {
        //                                 notEmpty: {
        //                                     message: "Current Password is required"
        //                                 }
        //                             }
        //                         },
        //                         newpassword: {
        //                             validators: {
        //                                 notEmpty: {
        //                                     message: "New Password is required"
        //                                 }
        //                             }
        //                         },
        //                         confirmpassword: {
        //                             validators: {
        //                                 notEmpty: {
        //                                     message: "Confirm Password is required"
        //                                 },
        //                                 identical: {
        //                                     compare: function() {
        //                                         return n.querySelector('[name="newpassword"]').value
        //                                     },
        //                                     message: "The password and its confirm are not the same"
        //                                 }
        //                             }
        //                         }
        //                     },
        //                     plugins: {
        //                         trigger: new FormValidation.plugins.Trigger,
        //                         bootstrap: new FormValidation.plugins.Bootstrap5({
        //                             rowSelector: ".fv-row"
        //                         })
        //                     }
        //                 }), n.querySelector("#kt_password_submit").addEventListener("click", (function(t) {
        //                     t.preventDefault(), console.log("click"), e.validate().then((function(t) {
        //                         "Valid" == t ? swal.fire({
        //                             text: "Sent password reset. Please check your email",
        //                             icon: "success",
        //                             buttonsStyling: !1,
        //                             confirmButtonText: "Ok, got it!",
        //                             customClass: {
        //                                 confirmButton: "btn font-weight-bold btn-light-primary"
        //                             }
        //                         }).then((function() {
        //                             n.reset(), e.resetForm()
        //                         })) : swal.fire({
        //                             text: "Sorry, looks like there are some errors detected, please try again.",
        //                             icon: "error",
        //                             buttonsStyling: !1,
        //                             confirmButtonText: "Ok, got it!",
        //                             customClass: {
        //                                 confirmButton: "btn font-weight-bold btn-light-primary"
        //                             }
        //                         })
        //                     }))
        //                 }))
        //             }()
        //     }
        // };
        // KTUtil.onDOMContentLoaded((function() {
        //     KTAccountSettingsSigninMethods.init()
        // }));
    </script>
@endpush
