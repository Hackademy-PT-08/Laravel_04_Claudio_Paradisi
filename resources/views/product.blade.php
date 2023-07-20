<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center my-5">
                <p class="h1">I nostri <span class="text-primary">Prodotti</span></p>
            </div>
            @foreach($products as $product)
            <div class="col-12 col-md-4 my-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{$product['img']}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product['name']}}</h5>
                        <p>In Stock <span class="badge rounded-pill text-bg-primary">{{$product['stock']}}</span></p>
                        <p class="h5">€{{$product['price']}}</p>
                         <a href="{{route('detail',['id' => $product['id']])}}" class="btn btn-primary">In Dettaglio</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>