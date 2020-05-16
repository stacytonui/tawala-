@extends('layouts.app')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 ftco-animate">
                    <form action="/order" class="billing-form" method="post">

                        @csrf
                        <h3 class="mb-4 billing-heading">Billing Details</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="firstname">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name}}">
                                    <input type="hidden" class="form-control" name="user_id" value="{{ $user->id}}">
                                </div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Location</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="location" id="" class="form-control">
                                            @foreach($locations as $location)
                                            <option name="location" value="{{ $location->name }}">{{ $location->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetaddress">Street Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ $user->street}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="house">House No</label>
                                    <input type="text" class="form-control" name="house" value="{{ $user->house}}">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Email Address</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email}}">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                </div>
                            </div>
                        </div>

                        <p><button  class="btn btn-primary py-3 px-4">Place an order</button></p>
                    </form><!-- END -->
                </div>
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Cart Total</h3>
                                <p class="d-flex">
                                    <span>Subtotal</span>
                                    <span>KES {{ \Cart::getTotal() }}</span>
                                </p>
                                <p class="d-flex">
                                    <span>Delivery</span>
                                    <span>KES 0.00</span>
                                </p>

                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>KES {{ \Cart::getTotal() }}</span>
                                </p>
                            </div>
                        </div>
                        <input type="hidden" value="\Cart::getContent()">
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Pay on Delivery</h3>



                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section>
@endsection
