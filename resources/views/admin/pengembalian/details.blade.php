@extends('layouts.admin.app')
@push('css')
    <script src="//rawcdn.githack.com/tobiasmuehl/instascan/4224451c49a701c04de7d0de5ef356dc1f701a93/bin/instascan.min.js">
    </script>
@endpush
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="card card-flush h-xl-100">

                <div class="card-header px-7 border-bottom">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-dark">Cart</span>
                    </h3>
                </div>
                @include('flash-message')
                <div class="hover-scroll-overlay-y me-n6">
                    <div class="card-body">

                        <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                            {{-- <div class="d-flex flex-stack mb-3"> --}}
                            <div class="row">
                                <div class="col">
                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-start">ITEMS</span>
                                </div>
                                <div class="col-1">
                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-center">QTY</span>
                                </div>
                                <div class="col-1">
                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-center">JUMLAH YANG SUDAH
                                        DIBALIKAN</span>
                                </div>
                                <div class="col-1">
                                    <span class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">ACCTION</span>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                        @foreach ($peminjaman->peminjamanitem as $item)
                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                {{-- <div class="d-flex flex-stack mb-3"> --}}
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ $item->buku->image }}" class="w-150px ms-n1" alt="">
                                    </div>
                                    <div class="col-7" style="align-self: center;">
                                        <a href="#"
                                            class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">{{ $item->buku->judul }}</a>
                                        <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item Code:
                                            {{ $item->buku->code }}</span>
                                    </div>
                                    <div class="col-1" style="align-self: center;">
                                        <input type="text" disable class="form-control text-center" name="qty[]"
                                            value="{{ $item->qty }}">
                                    </div>
                                    <div class="col-1" style="align-self: center;">
                                        <input type="text" disable class="form-control text-center" name="qty[]"
                                            value=" {{ $item->pengembalian_item_sum_qty }}">
                                    </div>
                                    <div class="col-1" style="align-self: center;">
                                        <button type="button" data-uuid="{{ $item->uuid }}"
                                            class="btn btn-primary btn-sm vdetails kebalian_buku" data-bs-toggle="modal"
                                            data-bs-target="#actionModal" data-id="{{ $item->id }}">Kebalikan
                                            Buku</button>
                                    </div>
                                </div>
                                <input type="hidden" name="buku_id[]" value="{{ $item->buku_id }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="actionModal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <form action="{{ route('admin.pengembalian.pengebalian-item-store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Details View</h5>
                        <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary"
                            data-bs-dismiss="modal" aria-label="Close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <div class="modal-body">
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0" id="tableItem">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                    <th class="min-w-140px">Ket. Status</th>
                                    <th class="min-w-140px">Total Yang di kembalian</th>
                                    <th class="min-w-140px">Denda</th>
                                    <th class="pe-0 text-end min-w-120px">Action</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="item-details" id="tableAppend">
                                <tr>
                                    <td>
                                        <select name="ketarangan_status[]" class="form-select ketStatus-1"
                                            aria-label="Select example" onchange="selectChange(1)" required>
                                            <option value="">Open this select keterangan</option>
                                            <option value="tepat_waktu">Tepat Waktu</option>
                                            <option value="terlambat">Terlambat / ({{ $denda }})</option>
                                            <option value="rusak_or_hilang">Rusak atau Hilang / ({{ $rusak }})
                                            </option>
                                        </select>
                                    </td>
                                    <td><input type="number" class="form-control text-center qtyTotal-1" name="qty[]"
                                            min="1" value="0" required onkeyup="inputChange(1)">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control text-center denda-1" name="denda[]" id=""
                                            value="0">
                                    </td>
                                    <td>
                                        <button type="button"
                                            class="btn btn-light-primary font-weight-bold addRow">+</button>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <input type="hidden" class="peminjaman_item" name="peminjaman_item_id">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" id="cancel"
                            data-bs-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary font-weight-bold" id="ok">Ok</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function inputChange(i) {
            var qty = $('.qtyTotal-' + i);
            qty.on("keyup", function() {
                $value = this.value
                qty.attr('value', $value)
                if ($('.ketStatus-' + i + ' option:selected').val() === 'terlambat') {
                    $('.denda-' + i).val(qty.attr('value') * {{ $denda }})
                } else if ($('.ketStatus-' + i + ' option:selected').val() === 'rusak_or_hilang') {
                    $('.denda-' + i).val(qty.attr('value') * {{ $rusak }})
                } else {
                    $('.denda').val('')
                }
            })
        }

        function selectChange(i) {
            var qty = $('.qtyTotal-' + i);

            $('.ketStatus-' + i).on('change', function() {
                if (this.value === 'terlambat') {
                    $('.denda-' + i).val(qty.attr('value') * {{ $denda }})
                } else if (this.value === 'rusak_or_hilang') {
                    $('.denda-' + i).val(qty.attr('value') * {{ $rusak }})
                } else {
                    $('.denda-' + i).val('');
                }
            })
        }

        $('.addRow').click(function() {
            let row = RowTable();
            htmlTableAdd(row);
        });


        function RowTable() {
            return document.getElementById("tableItem").rows.length;
        }

        function htmlTableAdd(row) {
            html = `
                <tr>
                    <td>
                        <select class="form-select ketStatus-` + row +
                `" aria-label="Select example" name="ketarangan_status[]" onchange="selectChange(` + row + `)">
                            <option>Open this select keterangan</option>
                            <option value="tepat_waktu">Tepat Waktu</option>
                            <option value="terlambat">Terlambat / ({{ $denda }})</option>
                            <option value="rusak_or_hilang">Rusak atau Hilang / ({{ $rusak }})</option>
                        </select>
                    </td>
                    <td><input type="number" class="form-control text-center qtyTotal-` + row + `" name="qty[]" min="1"
                            value="0" required onkeyup="inputChange(` + row + `)">
                    </td>
                    <td>
                        <input type="text" class="form-control text-center denda-` + row +
                `" name="denda[]" id="" value="0">
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="btn btn-light-danger font-weight-bold" id="remCF">-</a>
                    </td>
                </tr>
            `
            $('#tableAppend').append(html)
        }

        // function removeRow(row) {

        //     console.log(row);
        // }
        $("#tableAppend").on('click', '#remCF', function() {
            $(this).parent().parent().remove();
        });



        $('.kebalian_buku').click(function() {
            uuid = $(this).attr('data-uuid');
            $('.peminjaman_item').val(uuid);
        });
    </script>
@endpush
