@extends('template.template')

@section('title', $title)
@section('page-title', $page)

@section('content')
    <div class="bg-warning rounded">
        @if (session('text'))
            <div class="alert alert-{{ session('type') }} text-center" style="width: 300px;" role="alert">
                {{ session('text') }}
            </div>
        @endif
    </div>
    <div class="col-12">
        <div class="rounded p-4 bg-warning" style="min-height: 65vh;">
            <a href="{{ url('pengadaan/create') }}"><button class="button-73 mb-2" id="tambahdata" role="button">Tambah
                    {{ $page }}</button></a>
            <div class="table-responsive">
                <table class="table table-striped table-warning">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Total</th>
                            <th scope="col">Catatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (@$pengadaans as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ @$item->produk->produk_nama }}</td>
                                <td>{{ @$item->pengadaan_tanggal }}</td>
                                <td>{{ number_format($item->pengadaan_jumlah, '0', ',', '.') }}</td>
                                <td>{{ number_format($item->pengadaan_harga, '0', ',', '.') }}</td>
                                <td>{{ number_format($item->pengadaan_total, '0', ',', '.') }}</td>
                                <td>{{ @$item->pengadaan_catatan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
