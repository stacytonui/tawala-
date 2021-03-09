@extends('layouts.app')

@section('content')
    <!-- END nav -->


    <section class="ftco-section">

        <div class="container">
        <div style="float:right;">
    <form action="/search" method="post">
    @csrf
    <input type="text" name="query"/>
    <input type="submit" class="btn btn-sm btn-primary" value="Search" />
    </form>
    </div>
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center">
                    <ul class="product-category">
                        <li><a href="/shop">All</a></li>
                        @foreach($categories as $category)
                            <li><a href="/category/{{$category->id}}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row">
            @if(is_null($products))
            @else
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="/product/{{ $product->id }}" class="img-prod"><img class="img-fluid" src="{{ asset('images/'.$product->imagePath) }}">

                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">{{ $product->name }}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">KSH {{ $product->price }}</span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">

                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                            <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                            <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                            <input type="hidden" value="{{ $product->imagePath }}" id="img" name="img">

                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="card-footer" style="background-color: white;">
                                                <div class="row">
                                                    <button href="/add-to-cart/{{ $product->id }}" class="buy-now d-flex justify-content-center align-items-center mx-1">Add to Cart
                                                        <span><i class="ion-ios-cart"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif

            </div>
            <div class="row text-center">
                {{ $products->links() }}
            </div>


        </div>
    </section>




@endsection
