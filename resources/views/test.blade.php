{{-- @foreach ($peminjaman as $item)

@endforeach --}}
<h4>{{$peminjaman->user->email}} - {{$peminjaman->user->name}}</h4>

<img src="data:image/png;base64, {!! base64_encode(QrCode::size(200)->format('png')->merge('http://www.smkn1sakra.sch.id/media_library/images/b62182c38fc2ed8c58be78f1fe97a025.png', .3, true)->generate(route('admin.peminjaman.show', $peminjaman->is_code))) !!} ">
