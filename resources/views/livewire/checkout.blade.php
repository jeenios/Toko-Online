<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" style="text-decoration:none" class="text-black">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('keranjang')}}" style="text-decoration:none" class="text-black">Keranjang</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
        <div class="col">
            <a href="{{route('keranjang')}}" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left" style="background-color: transparent"></i> Kembali</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h4>Informasi Pembayaran</h4>
            <hr>
            <p>Untuk pembayaran silahkan transfer direkening dibawah ini sebesar : <br> <strong>Rp. {{number_format($total_harga)}}</strong></p>
            <div class="media">
            <img class="mr-3" src="{{url('assets/bca.png')}}" alt="Bank BCA" width="80">
            <div class="media-body">
                <p class="mt-2">BANK BCA <br> No. Rekening 01234-567-8910 atas nama <strong>Ali Latukau</strong> </p>
                
                <a href="" class="btn btn-sm btn-success"><i class="fas fa-upload" style="background-color: transparent"></i> Upload Pembayaran</a>
            </div>
            </div>
        </div>
        <div class="col">
            <h4>Informasi Pengiriman</h4>
            <hr>
            <form wire:submit.prevent="checkout">
                <div class="form-group">
                    <label for="">No. Hp</label>
                    <input id="nohp" type="number" class="form-control @error('nohp') is-invalid @enderror" wire:model="nohp" value="{{old('nohp')}}">
                        @error('nohp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea wire:model="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                        @error('nohp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="d-grid gap mt-2">
                    <button type="submit" class="btn btn-success"><i class="fas fa-arrow-right" style="background-color: transparent"></i> Bayar</button>
                </div>
            </form>
        </div>
    </div>
</div>


