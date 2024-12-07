@extends('template.template')

@section('title', $title)
@section('page-title', $page)

@section('content')
    <style>
        body {
            color: black
        }
    </style>
    <!-- Statistik -->
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">👥</div>
                <h5>Total Pelanggan</h5>
                <h4>{{ $total_pelanggan }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">📦</div>
                <h5>Total Produk</h5>
                <h4>{{ $total_produk }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">💳</div>
                <h5>Total Transaksi</h5>
                <h4>{{ $total_transaksi }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">👤</div>
                <h5>Total User</h5>
                <h4>{{ $total_user }}</h4>
            </div>
        </div>
    </div>

    <!-- Pendapatan -->
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">💰</div>
                <h5>Pertahun</h5>
                <h4>Rp {{ number_format($rev_year->total, '0', ',', '.') }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">📆</div>
                <h5>Perbulan</h5>
                <h4>Rp {{ number_format($rev_month->total, '0', ',', '.') }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">📅</div>
                <h5>Perminggu</h5>
                <h4>Rp {{ number_format($rev_week, '0', ',', '.') }}</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">⏰</div>
                <h5>Perhari</h5>
                <h4>Rp {{ number_format($rev_day->total, '0', ',', '.') }}</h4>
            </div>
        </div>
    </div>

    <!-- Uang Muka -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card p-4 border border-warning bg-light text-center">
                <div class="card-icon">🧾</div>
                <h5>Total Uang Muka</h5>
                <h4>Rp {{ number_format($hutang->total, '0', ',', '.') }}</h4>
            </div>
        </div>
    </div>

@endsection
