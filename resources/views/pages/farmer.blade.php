@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Register as a Farmer</div>

                    <div class="card-body">

                        <form method="POST" action="/farmer_registration">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                <div class="col-md-8">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="new-phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                <div class="col-md-8">
                                    <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" required autocomplete="new-location">

                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="land" class="col-md-4 col-form-label text-md-right">{{ __('Land Size') }}</label>

                                <div class="col-md-8">
                                    <input id="land" type="text" class="form-control @error('land') is-invalid @enderror"  name="land" required>

                                    @error('land')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="products" class="col-md-4 col-form-label text-md-right">{{ __('Products') }}</label>

                                <div class="col-md-8">
                                    <textarea id="products" type="text" class="form-control @error('products') is-invalid @enderror" placeholder="List Products" name="products" required></textarea>

                                    @error('products')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>




                            <div class="row justify-content-center pt-4">
                                <a class="" href="/register_vendor">
                                    Register as a Vendor
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
