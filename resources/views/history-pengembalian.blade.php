@extends('layouts.layouts')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="card card-flush">
                <div class="card-body">
                    <div class="p-10">
                        <div class="hover-scroll-overlay-y me-n6">
                            <div class="card-body">
                                @foreach ($peminjaman->peminjamanitem as $item)
                                    <div
                                        class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                        {{-- <div class="d-flex flex-stack mb-3"> --}}
                                        <div class="row">
                                            <div class="col-lg-2 col-md-3 col-sm-auto">
                                                <img src="{{ $item->buku->image }}" class="w-150px ms-n1" alt="">
                                            </div>
                                            <div class="col-lg-9 col-md-7 col-sm-auto" style="align-self: center;">
                                                <a href="#"
                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">{{ $item->buku->judul }}</a>
                                                <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item Code :
                                                    {{ $item->buku->code }}</span>
                                                <br>
                                                <div class="col-sm-auto" style="align-self: center;">
                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Jumlah
                                                        Yang di Pinjam
                                                        :
                                                        {{ $item->qty }}</span>

                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0"> Jumlah
                                                        Yang di Kembalikan
                                                        :
                                                        {{ $item->qty_sum_pengembalian }}</span>
                                                    <span class="text-gray-400 fw-bold fs-7 d-block text-start ps-0"> Denda
                                                        :
                                                        {{ $item->pengembalian_item[0]['denda'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal fade" id="modalStatus" tabindex="-1" role="dialog" aria-labelledby="modalStatusLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalStatusLabel">Status Peminjaman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda Yakin Akan Membatalkan ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route('status.update', ['uuid' => $peminjaman->uuid]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
