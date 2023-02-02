<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" style="text-decoration:none" class="text-black">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('products')}}" style="text-decoration:none" class="text-black">List Jersey</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jersey Detail</li>
            </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>
                <strong>{{$product->nama}}</strong>
            </h2>
            <h3>
                Rp. {{number_format($product->harga)}}
                <h5>
                    @if ($product->is_ready == 1)
                    <span class="badge bg-success"><i class="fas fa-check" style="background-color: transparent"></i> Ready Stok</span>
                    @else
                    <span class="badge bg-danger"> <i class="fas fa-times" style="background-color: transparent"></i> Stok Habis</span>
                    @endif
                </h5>
            </h3>
            <div class="row">
                <div class="col">
                <form wire:submit.prevent="masukanKeranjang">
                <table class="table" style="border-top: hidden">
                    <tr>
                        <td>Liga</td>
                        <td>:</td>
                        <td>
                            <img src="{{ url('assets/liga') }}/{{ $product->liga->gambar }}" class="img-fluid" width="35">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis</td>
                        <td>:</td>
                        <td>
                            {{$product->jenis}}
                        </td>
                    </tr>
                    <tr>
                        <td>Berat</td>
                        <td>:</td>
                        <td>
                            {{$product->berat}}
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td>
                            <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{old('jumlah_pesanan')}}" required autocomplete="name">

                                @error('jumlah_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </td>
                    </tr>
                    @if ($jumlah_pesanan > 1)
                    @else
                    <tr>
                        <td colspan="3"><strong>Name Set (isi jika tambah nameset)</strong></td>
                    </tr>
                    <tr>
                        <td>Harga Nameset</td>
                        <td>:</td>
                        <td>
                            Rp. {{ number_format($product->harga_nameset)}}
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" value="{{old('nama')}}" autocomplete="name">

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>
                            <input id="nomor" type="number" class="form-control @error('nomor') is-invalid @enderror" wire:model="nomor" value="{{old('nomor')}}" autocomplete="name">

                                @error('nomor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </td>
                    </tr>
                    @endif
                </table>
                <div class="row">
                    <div class="col-md-12 d-grid gap">
                        <button class="btn btn-dark" @if($product->is_ready !== 1) disabled @endif><i class="fas fa-shopping-cart" style="background-color: transparent"></i> Masukan Keranjang</button>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
