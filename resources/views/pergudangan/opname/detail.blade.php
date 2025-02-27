@extends('layout.general')
@section('title', 'Opname')

@section('content')
<div class="col-md-12">
    <h1>OPNAME PRODUK BIDANG PERDAGANGAN</h1>
</div>
{{-- Include Nav Menu Start --}}
@include('pergudangan.layout.nav-menu')
{{-- Include Nav Menu End --}}

<div class="col-md-12">
    <div class="card shadow-sm">
        <div class="card-body">
            <a href="{{url('/warehouse/opname')}}" class="text-decoration-underline fs-2 fw-bold">Opname Produk</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <polyline points="7 7 12 12 7 17"></polyline>
                <polyline points="13 7 18 12 13 17"></polyline>
            </svg>
            <span class="fs-2 fw-bold">Kopi Rojoku Pouds</span>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-4 mb-3 text-center">
                    <img class="rounded-circle" src="{{asset('assets/static/avatars/000f.jpg')}}" alt="" height="200" width="200">
                </div>
                <div class="col-md-8 mb-3">
                    <h2>Kopi Rojoku Pouds</h2>
                    <span class="fs-3">Kopi</span> <br>
                    <span class="fs-3">Produk Bidang Perdagangan</span>
                </div>
                <hr>
                <table class="fs-3 table table-borderless">
                    <tr>
                        <td>ID produk</td>
                        <td class="text-end">PR.123456789</td>
                    </tr>
                    <tr>
                        <td>Kategori Produk</td>
                        <td class="text-end">Kopi</td>
                    </tr>
                    <tr>
                        <td>Sub Kategori Produk</td>
                        <td class="text-end">Kopi Sachet</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="mb-3">
                <h2>Status Opname Produk</h2>
                <hr class="mt-1 mb-1">
                <div class="table-responsive">
                    <table class="fs-3 table table-borderless">
                        <tr>
                            <td>ID Opname</td>
                            <td class="text-end">SP.123456789</td>
                        </tr>
                        <tr>
                            <td>Tanggal Opname</td>
                            <td class="text-end">Selasa, 20 Maret 2022</td>
                        </tr>
                        <tr>
                            <td>Petugas Opname</td>
                            <td class="text-end">Andre Irawan</td>
                        </tr>
                        <tr>
                            <td>Stok Aktual</td>
                            <td class="text-end">300 DUS</td>
                        </tr>
                        <tr>
                            <td>Stok Opname</td>
                            <td class="text-end">280 DUS</td>
                        </tr>
                        <tr>
                            <td>Selisih</td>
                            <td class="text-end">20 DUS</td>
                        </tr>
                        <tr>
                            <td>Penyesuaian</td>
                            <td class="text-end"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
