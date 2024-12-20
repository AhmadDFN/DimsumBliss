@extends('template.template')

@section('title', $title)
@section('page-title', $page)

@section('content')

    <div class="bg-warning text-white rounded">
        @if (session('text'))
            <div class="alert alert-{{ session('type') }} text-center" style="width: 300px;" role="alert">
                {{ session('text') }}
            </div>
        @endif
    </div>
    <form action="{{ url('pembayaran/' . @$pembayaran->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @isset($pembayaran)
            @method('PUT')
        @endisset
        <div class="container-fluid pt-1 px-0">
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-warning rounded h-100 p-4">
                        <h5 class="mb-4 text-light">{{ @$page }}</h5>
                        <div class="form-floating mb-3">
                            <input type="hidden" name="id" value="{{ @$pembayaran->id }}">
                            <select class="form-select" id="pembayaran_id_pelanggan" name="pembayaran_id_pelanggan"
                                aria-label="Floating label select example">
                                <option selected>Pilih Pelanggan</option>
                                @foreach ($pelanggans as $item)
                                    <option value="{{ @$item->id }}"{{ @$item->id == @$idPelanggan ? 'Selected' : '' }}>
                                        {{ @$item->pelanggan_nama . ' - Uang Muka sekarang Rp. ' . number_format($item->pelanggan_hutang, '0', ',', '.') }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="pembayaran_id_pelanggan">Nama Pelanggan</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="pembayaran_jumlah" name="pembayaran_jumlah"
                                value="{{ @$jumlah->pembayaran_jumlah }}">
                            <label for="pembayaran_jumlah" class="form-label">Jumlah Bayar</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
