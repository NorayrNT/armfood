@extends('layouts.app')

@section('content')
<div class='details_wrapper'>
    <div class='container'>
        <div class='row'>
            <div class='col-12 col-sm-12 col-md-6'>
                @if($products)                
                <div class='img_slider_block'>
                    @if(count($prod->images))
                        @foreach($prod->images as $img)
                            <div class='prod_img'>
                                <img src="{{asset($img)}}" class='img_fluid' alt='product image' />
                            </div>                          
                        @endforeach
                    @else
                        <div class='prod_img'>
                            <img src="{{asset('images/no_photo.jpg')}}" class='img_fluid' alt='product image' />
                        </div>
                    @endif
                </div>
            </div>
            <div class='col-12 col-sm-12 col-md-6' style='padding: 0px 0px 0px 30px'>
                <div class='prod_name_block'>
                    <div class='prod_name'>
                        <h3>{{$prod->name}}</h3>
                        <p class='prod_price'>{{$prod->price}}</p>
                    </div>
                </div>
                <div class='prod_tabs'>
                    <div id='tab1'class='active_tab'>описание</div>
                    <div id='tab2'>доставка</div>
                    <div id='tab3'>оплата</div>
                </div>
                <!-- tabs content start -->
                <div class='tab_contents'>
                    <div data-toggle = 'tab1' class='animated fadeIn'>
                        <p>{!! $prod->desc !!}</p>
                    </div>
                    @if(count($terms))
                    <div data-toggle = 'tab2' class='animated fadeIn'>                        
                        @if($terms['delivery'])
                            <p>{!! $terms['delivery'] !!}</p>
                        @endif
                    </div>
                    <div data-toggle = 'tab3' class='animated fadeIn'>
                        @if($terms['payment'])
                        <p>{!! $terms['payment'] !!}</p>
                        @endif
                    </div>
                    @endif
                </div>
                <!-- tabs content end -->
                <div class='add_bag'><button class='bag_btn'>в корзину</button></div>
            </div>
            @endif
        </div>
    <div>
    <!-- ad banner start -->
    <div class='ad_block'>
        <div class='container'>
            <div class='banner_block'>
                <img src="{{asset('images/10.jpg')}}" alt='banner image' class='img-fluid'/>
            </div>
        </div>
    </div>
    <!-- start related products -->
    <div class='related_header'>
        <h3>товары по теме</h3>
    </div>
    <div class='container'>
        <div class='top'>
            @if(count($related_prods))
                @foreach($related_prods as $item)
                    <div class='top_products'>
                        <div class='img_div'>                                        
                            <a href="/product/{{$item->id}}">
                            @if(count($item->images))
                                <img src="{{asset($item->images[0])}}" class='img-fluid' alt='top_products' />
                            @else
                                <img src="{{asset('images/no_photo.jpg')}}" class='img-fluid' alt='top_products' />
                            @endif
                            </a>                                    
                        </div>
                        <div class='icons_div animated fadeInUp'>
                            @if(count($wishes) && $wishes->contains($item->id))
                                <div class='s-icon wishlist green_icon'><i class="far fa-heart"></i></div>
                            @else
                                <div class='s-icon wishlist '><i class="far fa-heart"></i></div>
                            @endif
                            @if(count($bags) && $bags->contains($item->id))
                                <div class='s-icon cart green_icon'><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                            @else
                                <div class='s-icon cart'><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                            @endif
                        </div>
                        <div class='name_div'>
                            <a href="/product/{{$item->id}}">
                                <h3>{{$item->name}}</h3>
                            </a>
                        </div>
                        <div class='price_div'>
                            @if(count($item->old_price))
                                <span class='old_price'>
                                    <del>{{$item->old_price}}</del>                                            
                                </span>
                            @endif    
                            <span class='cur_price'>{{$item->price}}</span>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>        
        <!-- enf of top -->
    </div>
    <!-- end of container -->
</div>        
@endsection