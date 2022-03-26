@extends('layouts.admin.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">

            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_signin_method">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Pengaturan Denda</h3>
                    </div>
                </div>
                <div id="kt_account_settings_signin_method" class="collapse show">
                    <div class="card-body border-top p-9">
                        <div class="d-flex flex-wrap align-items-center">
                            <div id="kt_denda_harian" class="">
                                <div class="fs-6 fw-bolder mb-1">Harian <span class="text-gray-500">( Denda ini akan
                                        berlaku apa bila peminjam melewati batas yang telah di tentukan )</span></div>
                                <div class="fw-bold text-gray-600" id="dendaHarian">Rp.
                                    {{ GeneralHelper::settingPerpustakan('denda_harian') }}</div>
                            </div>
                            <div id="kt_denda_harian_edit" class="flex-row-fluid d-none">
                                <form id="kt_denda_harian_change" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                    novalidate="novalidate">
                                    <div class="row mb-6">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                                <label for="denda_harian" class="form-label fs-6 fw-bolder mb-3">Denda
                                                    harian</label>
                                                <input type="number" class="form-control form-control-lg form-control-solid"
                                                    id="denda_harian" placeholder="Jumlah Denda Harian" name="denda_harian"
                                                    value="{{ GeneralHelper::settingPerpustakan('denda_harian') }}"
                                                    min="0">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button id="kt_denda_harian_submit" type="button"
                                            class="btn btn-primary me-2 px-6">Update</button>
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
                            <div id="kt_denda_kerusakan" class="">
                                <div class="fs-6 fw-bolder mb-1">Kerusakan <span class="text-gray-500"> (Denda Ini Termasuk
                                        dengan Kehilangan apa bila terjadi kehilangan saat meminjam buku ) </span></div>
                                <div class="fw-bold text-gray-600" id="dendaKerusakan">Rp.
                                    {{ GeneralHelper::settingPerpustakan('denda_kerusakan') }}</div>
                            </div>
                            <div id="kt_denda_kerusakan_edit" class="flex-row-fluid d-none">
                                <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                    novalidate="novalidate">
                                    <div class="row mb-6">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <div class="fv-row mb-0 fv-plugins-icon-container">
                                                <label for="denda_kerusakan" class="form-label fs-6 fw-bolder mb-3">Denda
                                                    Kerusakan</label>
                                                <input type="number" class="form-control form-control-lg form-control-solid"
                                                    id="denda_kerusakan" placeholder="Jumlah Denda Kerusakan"
                                                    name="denda_kerusakan"
                                                    value="{{ GeneralHelper::settingPerpustakan('denda_kerusakan') }}"
                                                    min="0">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button id="kt_signin_submit" type="button"
                                            class="btn btn-primary me-2 px-6">Update</button>
                                        <button id="kt_signin_cancel" type="button"
                                            class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                    </div>
                                    <div></div>
                                </form>
                            </div>
                            <div id="kt_denda_kerusakan_button" class="ms-auto">
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

                        a = document.getElementById("kt_denda_kerusakan"),
                        b = document.getElementById("kt_denda_kerusakan_edit"),
                        c = document.getElementById("kt_denda_kerusakan_button"),
                        d = document.getElementById("kt_signin_cancel");
                    i.querySelector("button").addEventListener("click", (function() {
                            l()
                        })), s.addEventListener("click", (function() {
                            l()
                        })),

                        c.querySelector("button").addEventListener("click", (function() {
                            d()
                        })), d.addEventListener("click", (function() {
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
                            fields: {
                                denda_harian: {
                                    validators: {
                                        notEmpty: {
                                            message: "Tidak Boleh Kosong"
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
                        }), e.querySelector("#kt_denda_harian_submit").addEventListener("click", (function(n) {
                        n.preventDefault(), console.log("click"), t.validate().then((function(n) {
                            var value = document.querySelector('input[name=denda_harian]').value
                            $.ajax({
                                url: ajaxUrlAdmin + 'setting',
                                type: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    key: 'denda_harian',
                                    value: value
                                },
                                success: function(e) {
                                    $('#dendaHarian').html('Rp. ' + value)
                                    swal.fire({
                                        text: "Denda Harian",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn font-weight-bold btn-light-primary"
                                        }
                                    })
                                },
                                error: function() {
                                    swal.fire({
                                        text: "Sorry, looks like there are some errors detected, please try again.",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn font-weight-bold btn-light-primary"
                                        }
                                    })
                                }

                            })
                        }))
                    })),
                    function(t) {
                        var e, n = document.getElementById("kt_signin_change_email");
                        e = FormValidation.formValidation(n, {
                                fields: {
                                    denda_kerusakan: {
                                        validators: {
                                            notEmpty: {
                                                message: "Tidak Boleh Kosong"
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
                                    var value = document.querySelector(
                                        'input[name=denda_kerusakan]').value
                                    $.ajax({
                                        url: ajaxUrlAdmin + 'setting',
                                        type: 'POST',
                                        data: {
                                            _token: '{{ csrf_token() }}',
                                            key: 'denda_kerusakan',
                                            value: value
                                        },
                                        success: function(e) {
                                            $('#dendaKerusakan').html('Rp. ' +
                                                value)
                                            swal.fire({
                                                text: "Denda Kerusakan",
                                                icon: "success",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                                }
                                            })
                                        },
                                        error: function() {
                                            swal.fire({
                                                text: "Sorry, looks like there are some errors detected, please try again.",
                                                icon: "error",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                                }
                                            })
                                        }
                                    });

                                }))
                            }))

                    }()
            }
        };
        KTUtil.onDOMContentLoaded((function() {
            KTAccountSettingsSigninMethods.init()
        }));
    </script>
@endpush
