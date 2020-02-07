@extends('layouts.app')

@section('content')
    <div class="wishlist-main-wrapper section-space pb-0">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table wish-table table-responsive">
                            <table class="table">                                    
                                <tbody>
                                    @if($wish_prods && count($wish_prods))
                                        @foreach($wish_prods as $item)
                                            <tr class="adfadfk{{$item->id}} smooth-enter borders">
                                                <td class="pro-thumbnail">
                                                    @if(count($item->images))
                                                        <a href="/product/{{$item->id}}">
                                                            <img class="img-fluid" src="{{ $item->images[0] }}" />
                                                        </a>
                                                    @else
                                                        <a href="/product/{{$item->id}}">
                                                            <img class="img-fluid" src="{{asset('images/no_photo.jpg')}}" />
                                                        </a>
                                                    @endif
                                                </td>
                                                <td class="pro-title"><a href="/product/{{$item->id}}">{{$item->name}}</a></td>
                                                <td class="pro-price">{{ $item->price }}</span></td>
                                                <td class="pro-subtotal">
                                                    <button class="btn btn-hero shop-cart{{$item->id}} s-cart w-btn to-checkout">Add to Cart</button></td>
                                                <td class="pro-remove"><i class="fa fa-trash-o wish-remove"></i></td>
                                            </tr>
                                        @endforeach
                                    @endif                                        
                                </tbody>
                            </table>
                        </div>
                        <div class='wish_paginate'>
                            @if($wish_prods)
                                {{$wish_prods->links()}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Wishlist Page Content End -->
        </div>
    </div>
    <!-- wishlist main wrapper end -->
@endsection