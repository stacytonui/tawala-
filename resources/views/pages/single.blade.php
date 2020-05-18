@extends('layouts.app')

@section('content')
    <!-- END nav -->


    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
@foreach($product as $product)
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="#" class="image-popup"><img src="{{ asset('images/'.$product->imagePath) }}" class="img-fluid" ></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{ $product->name }}</h3>

    				<p class="price"><span>KES {{ $product->price }}</span></p>
    				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until.
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>

	                </div>
		            </div>
							</div>
							<div class="w-100"></div>

	          	<div class="w-100"></div>

          	</div>
                    <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                        <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                        <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                        <input type="hidden" value="{{ $product->imagePath }}" id="img" name="img">

                        <input type="hidden" value="1" id="quantity" name="quantity">
                        <div class="card-footer" style="background-color: white;">
                            <div class="row">

                                <p><button href="/add-to-cart/{{ $product->id }}" class="btn btn-success">Add to Cart</button></p>

                            </div>
                        </div>
                    </form>

    			</div>
    @endforeach
    		</div>
    	</div>
    </section>




@endsection
