@extends('layouts.app')

@section('content')
    <div class='shop_wrapper'>       
        <div class='container'>
            <div class='row'>                                     
                <div class='col-12 col-sm-3'>                    
                    
                    <!-- mobile catalogue list -->
                    <div class='m_cat_list'>
                        <span>кататалог</span>
                        <span><i class='fas fa-arrow-down'></i><span>   
                    </div>
                    <!-- mobile catalogue list end -->
                    
                    <div class='main_cat'>
                        <h4>кататалог</h4>                  
                    </div>
                   
                    <!-- category start -->
                    @if($type)
                        {{$type->createMenu()}} 
                    @endif            
                    <!-- category end -->
                    
                    <!-- filter start -->
                    <div class='cat_filter'>
                        <div class='filter_head'>
                            <h4>фильтр по цене</h4>
                        </div>
                        <div id='filter'></div>
                        <div class='filter_price'>   
                            <form action="" method='GET' enctype='multipart/form-data' >                                    
                                <div class='form_content'>                                        
                                    <span class='filter_price_name'>&#8381</span>
                                    <input type='text' class='range_first_price' name='first_price' value='10000'>
                                    <span class='price-between'>-</span>
                                    <input type='text' class='range_second_price' name='second_price' value='85000'>
                                    <button class='filter_btn'>фильтр</button>
                                    <div class='mini_filter_btn text-center'>
                                        <button >фильтр</button>    
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end of filter -->
                    
                    <!-- banner start  -->
                    <div class='left_ad_banner'>
                        <div class='img_banner'>
                            <img src="{{asset('images/4.jpg')}}" alt='ad banner' />
                        </div>
                    </div>
                    <div class='left_ad_banner'>
                        <div class='img_banner'>
                            <img src="{{asset('images/4.jpg')}}" alt='ad banner' />
                        </div>
                    </div>
                </div>
                    <!-- banner end -->
                    
                <!-- <div class='right_side'> -->
                <div class='col-12 col-sm-9'>
                    <div class='shop_banner'>
                        <img src="{{asset('images/shop-banner.jpg')}}" class='img-fluid' alt='baner image' />
                    </div>
                        <div class='row'>
                            @if(count($product))
                                @foreach($product as $item)
                                    <!-- single product start -->
                                    <div class='col-6 col-lg-4'>
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
                                                    <div class='s-icon wishlist add_wish{{$item->id}} green_icon'><i class="far fa-heart"></i></div>
                                                @else
                                                    <div class='s-icon wishlist add_wish{{$item->id}} '><i class="far fa-heart"></i></div>
                                                @endif
                                                @if(count($bags) && $bags->contains($item->id))
                                                    <div class='s-icon bag add_bag{{$item->id}} green_icon '><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                                @else
                                                    <div class='s-icon bag add_bag{{$item->id}}'><i class="zmdi zmdi-shopping-cart-plus"></i></div>
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
                                    </div>
                                    <!-- single product end --> 
                                @endforeach
                            @else 
                                <div class='text-center no_product w-100'>продуктов не найдено</div>    
                            @endif                                           
                        </div>
                    <div class='shop_pagination'>{{ $product->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection