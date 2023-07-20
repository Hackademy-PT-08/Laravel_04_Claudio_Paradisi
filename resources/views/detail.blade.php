<x-layout>
    <div class="container-fluid my-5">
        <div class="row">
            
            <div class="col-6 w-50 mt-5">
                <figure class="img-fluid">
                    <img src="{{$product['img']}}" alt=""/>
                    <figcaption>
                        In Stock: <span class="badge rounded-pill text-bg-primary">{{$product['stock']}}</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-6 w-50 ms-auto">
            <h3 class="h1">{{$product['name']}}</h3>
                <h5 class="h3"> <span class="text-primary">A soli </span> €{{$product['price']}} </h5>
                <p>{{$product['description']}}</p>
                <a href="{{route('product')}}" class="btn btn-primary">Torna Indietro</a>
            </div>
        </div>
    </div>
</x-layout>