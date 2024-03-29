<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" style="text-decoration:none" class="text-black">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Product</li>
            </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2>{{$title}}</h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fa fa-search" style="background-color: transparent"></i>
                </span>
            </div>
        </div>
    </div>

    <section class="product mb-5">
      <div class="row mt-4">
        @foreach($products as $product)
         <div class="col-md-3 mb-3">
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
        <div class="wrap-pagination-info">
            {{$products->links()}}
        </div>
   </section>
</div>
