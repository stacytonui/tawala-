@extends('layouts.app')

@section('content')
    <!-- END nav -->

    <div class="hero-wrap hero-bread " style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">

                    <h1 class="mb-0 bread">Home</h1>
                </div>
            </div>
        </div>


    </div>
    
        <div class="container">
    <div class="row my-4">
            <div class="col-md-4 my-1">
                <div class="card bg-success text-white">
                <div class="card-body">
                    <blockquote class="blockquote">
                    <h6 class="font-weight-bold">Order Time</h6>
                    <footer class="card-blockquote" style="font-size: 1rem;">Hours: <cite title="Source title">8:00 am to 5:00 pm</cite></footer>
                    <footer class="card-blockquote" style="font-size: 1rem;">Days: <cite title="Source title">Monday - Friday</cite></footer>
                    </blockquote>
                </div>
                </div>
            </div><!--col-md-4 my-1-->
            <div class="col-md-4 my-1">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                    <blockquote class="blockquote">
                        <h6 class="font-weight-bold">Deliveries</h6>
                        <footer class="card-blockquote" style="font-size: 1rem;">Orders before midday: <cite title="Source title">Same day</cite></footer>
                        <footer class="card-blockquote" style="font-size: 1rem;">Orders after midday: <cite title="Source title">Next day</cite></footer>
                    </blockquote>
                    </div>
                </div>
            </div><!--col-md-4 my-1-->
            <div class="col-md-4 my-1">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                    <blockquote class="blockquote">
                        <h6 class="font-weight-bold">Helpline</h6>
                        <footer class="card-blockquote" style="font-size: 1rem;">Contact: <cite title="Source title">+254 709 123 456</cite></footer>
                        <footer class="card-blockquote" style="font-size: 1rem;">Email: <cite title="Source title">tawalafoods@gmail.com</cite></footer>
                    </blockquote>
                    </div>
                </div>
            </div><!--col-md-4-->
            
        </div>
        </div>
        </div>
       
    






        <section class="ftco-section">
       
        <div class="container">
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
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('images/'.$product->imagePath) }}">

                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">{{ $product->name }}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="price-sale">KES {{ $product->price }}</span></p>
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

            </div>
            <div class="row text-center">
                {{ $products->links() }}
            </div>


        </div>
    </section>





    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




@endsection
