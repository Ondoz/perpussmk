<div class="modal fade bd-example-modal-lg" id="kt_modal_edit_customer" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{route('admin.buku.store')}}" id="form-edit" enctype="multipart/form-data" method="post">
                {{method_field('PUT')}}
                @csrf
                <input type="hidden" name="uuid" id="uuid" value="">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_customer_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">Edit Buku</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div id="kt_modal_edit_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary" onclick="this.form.reset();" data-bs-dismiss="modal" aria-label="Close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">Judul</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input required type="text" class="form-control form-control-solid" id="judul" name="judul" placeholder="Judul" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class="row">
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Penulis</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input required type="text" class="form-control form-control-solid" id="penulis" name="penulis" placeholder="Penulis" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">Kategori</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Kategori"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select aria-label="Select a Kategori" data-control="select2" data-placeholder="Pilih Kategori" data-dropdown-parent="#kt_modal_edit_customer" class="form-select form-select-solid" id="kategori" name="kategori">
                                        <option value=""></option>
                                        @foreach ($kategori as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                       @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Tanggal Rilis</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input required type="date" class="form-control form-control-solid" id="tgl_rilis" name="tgl_rilis" placeholder="Tanggal Rilis" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Bahasa</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input required type="input" class="form-control form-control-solid" id="bahasa" name="bahasa" placeholder="Bahasa" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Negara</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input required type="input" class="form-control form-control-solid" id="negara" name="negara" placeholder="Negara" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Jumlah Halaman</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input required type="number" class="form-control form-control-solid" id="jumlah_halaman" name="jumlah_halaman" placeholder="Jumlah Halaman" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <div class="col">
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-bold mb-2">Jumlah Buku</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input required type="number" class="form-control form-control-solid" id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah Buku" />
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">Penerbit</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input required type="text" class="form-control form-control-solid" id="penerbit" name="penerbit" placeholder="Penerbit" />
                            <!--end::Input-->
                        </div>

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold mb-2">Description</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea required cols="30" rows="10" class="form-control form-control-solid" id="description" name="description" placeholder="Description"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <div class=" mb-7 fv-row text-center">
                            <label class="required fs-6 fw-bold mb-2">Cover Buku</label>
                        </div>
                        <div class=" mb-7 fv-row text-center">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url(/assets/admin/media/avatars/blank.png)">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-125px h-125px"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                   data-kt-image-input-action="change"
                                   data-bs-toggle="tooltip"
                                   data-bs-dismiss="click"
                                   title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>

                                    <!--begin::Inputs-->
                                    <input required type="file" id="image" name="image" accept=".png, .jpg, .jpeg" />

                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->

                                <!--begin::Cancel button-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                   data-kt-image-input-action="cancel"
                                   data-bs-toggle="tooltip"
                                   data-bs-dismiss="click"
                                   title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel button-->

                                 <!--begin::Remove button-->
                                 <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                 data-kt-image-input-action="remove"
                                 data-bs-toggle="tooltip"
                                 data-bs-dismiss="click"
                                 title="Remove avatar">
                                 <i class="bi bi-x fs-2"></i>
                             </span>
                            </div>
                            <!--end::Image input-->
                        </div>
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" onclick="this.form.reset()">Close</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
