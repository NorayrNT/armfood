@extends('layouts.app')

@section('content')
    @if(count($bag_prods))
    <div class="cart-main-wrapper section-space pb-0">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">фото</th>
                                        <th class="pro-title">имя</th>
                                        <th class="pro-price">цена</th>
                                        <th class="pro-quantity">кол-во</th>
                                        <th class="pro-subtotal">тотал</th>
                                        <th class="pro-remove">удалить</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($bag_prods && count($bag_prods))
                                        @foreach($bag_prods as $item)
                                            <tr class="cartprod{{$item->id}}tr wider smooth-border">
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
                                                <td class="pro-title">
                                                    <a href="/product/{{$item->id}}">{{$item->name}}</a>
                                                </td>
                                                <td class="pro-price">
                                                    <span class="cart-ind-price">{{$item->price}}</span>
                                                </td>
                                                <td class="pro-quantity">
                                                    <div>
                                                        <input type="number" class="cart-prod-input form-control text-center" value="1" min="1">
                                                    </div>
                                                </td>
                                                <td class="pro-subtotal">
                                                    <span class="cart-sub-price">{{$item->price}}</span>
                                                </td>
                                                <td class="pro-remove"><i class="far fa-trash-alt delete--prod"></i> </td>
                                            </tr>
                                        @endforeach    
                                    @endif                                        
                                </tbody>
                            </table>
                        </div>
                        <div class='wish_paginate'>
                            @if($bag_prods)
                                {{$bag_prods->links()}}
                            @endif
                        </div>
                    </div>
                </div>
                @if(count($bag_prods))
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <!-- <h3>Cart Totals</h3> -->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr class="total">
                                                <td>тотал</td>
                                                <td class="total-amount">
                                                    <span class="cart_total"></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="" class="btn btn__bg d-block to-checkout">платить</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
    @endif    
@endsection