@extends('home')

@section('content')
<div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">
@if(isset($product->photo))
{{$product->photo}}
               @endif                 
                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                       {{$product->labe}}
                                    </h2>
                                    <small>Many desktop publishing packages and web page editors now.</small>
                                    <div class="m-t-md">
                                        <h2 class="product-main-price">{{$product->price}} &nbsp;<code>DH</code> </h2>
                                    </div>
                                    <hr>

                                    <h4>Product description</h4>

                                    <div style="display:block" >
                                     {{$product->description}}
                                    </div>
                                

                                    <div>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Add to cart</button>
                                            <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Add to wishlist </button>
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
@endsection