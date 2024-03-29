<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" style="text-decoration:none" class="text-black">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
            </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
            <div class="alert alert-danger">
                {{session('message')}}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center" >
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Nama Set</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                    <img src="{{ url('assets/jersey') }}/{{ $pesanan_detail->product->gambar }}" class="img-fluid" width="100">
                                </td>
                                <td>{{$pesanan_detail->product->nama}}</td>
                                <td>
                                    @if ($pesanan_detail->namaset)
                                        Nama : {{$pesanan_detail->nama}} <br>
                                        Nomor : {{$pesanan_detail->nomor}}
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>{{$pesanan_detail->jumlah_pesanan}}</td>
                                <td>Rp. {{number_format($pesanan_detail->product->harga)}}</td>
                                <td>Rp. {{number_format($pesanan_detail->total_harga)}}</td>
                                <td><i wire:click="destroy({{$pesanan_detail->id}})" class="fas fa-trash text-danger" style="cursor: pointer"></i></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">Keranjang Kosong.</td>
                            </tr>
                        @endforelse
                        @if (!empty($pesanan))
                        <tr>
                            <td colspan="6" align="right"><strong>Total Harga :</strong></td>
                            <td><strong>Rp. {{number_format($pesanan->total_harga)}}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Kode Unik :</strong></td>
                            <td><strong>Rp. {{number_format($pesanan->kode_unik)}}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Total Yang Harus Dibayarkan :</strong></td>
                            <td><strong>Rp. {{number_format($pesanan->total_harga+$pesanan->kode_unik)}}</strong></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2">
                                <a href="{{route('checkout')}}" class="btn btn-success"><i class="fas fa-arrow-right" style="background-color: transparent"></i> Checkout</a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


