<div class="container">
    <div class="banner">
        <img src="{{ url('assets/slider/slider2.png') }}" alt="">
    </div>

    <section class="pilih-liga mt-4">
      <h3><strong>Pilih Liga</strong></h3>
      <div class="row mt-4">
        @foreach($ligas as $liga)
        <div class="col">
            <a href="{{route('products.liga', $liga->id)}}">
                  <div class="card shadow">
                     <div class="card-body text-center">
                        <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                     </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   <section class="product mt-5 mb-5">
      <div class="row">
         <div class="col-md-10">
            <h3><strong>Best Products</strong></h3>
         </div>
         <div class="col-md-2 d-grid gap">
            <a href="{{route('products')}}" class="btn btn-dark"><i class="fa fa-eye" aria-hidden="true" style="background-color: transparent"></i> Lihat Semua</a>
         </div>
      </div>
      <div class="row mt-4">
        @foreach($products as $product)
         <div class="col-md-3">
               <div class="card">
                  <div class="card-body text-center">
                     <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product->nama }}</strong> </h5>
                                <h5>Rp. {{number_format($product->harga)}} </h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 d-grid gap">
                                <a href="{{route('products.detail', $product->id)}}" class="btn btn-dark btn-block"><i class="fa fa-eye" aria-hidden="true" style="background-color: transparent"></i> Detail</a>
                            </div>
                        </div>
                    </div>
               </div>
         </div>
         @endforeach
      </div>
   </section>
</div>
