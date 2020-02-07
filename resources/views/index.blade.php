@extends('layouts.app')
    
@section('content')
    <!-- Cat header -->
    <div class='cat_intro'>
        <h2><span>все самое</span> <span>лучшее</span></h2>
        <h3><span>из</span>  <span>армении</span> <span> .  .  .</span> </h3>
    </div>
    
    <!-- Categories' show -->
    <div class='cat_block_wrapper'>       
        <div class='container-fluid'>
            <div class='row'>
                @if(count($types))                
                    @foreach($types->take(4) as $type)
                        <div class='home_prod col-6  col-md-3'>
                            <a href="/shop/{{$type->id}}">
                                @if(count($type->image))
                                    <img class='img-fluid' src="{{asset($type->image)}}" alt='name-of-cat'/>
                                @else
                                    <img class='img-fluid' src="images/no_photo.jpg" alt='name-of-cat'/>    
                                @endif
                            </a>
                            <div class='home_prod_info'>
                                <a href="/shop/{{$type->id}}">{{$type->name}}</a>
                            </div>
                        </div>     
                    @endforeach
                @endif 
                @if(count($types))
                    @foreach($types->take(7) as $item)
                        @if($loop->iteration <= 4 )
                            @continue
                        @else
                            <div class='home_prod col-6 col-md-4'>
                                <a href="/shop/{{$item->id}}">
                                    @if($item->image)
                                        <img class='img-fluid' src="{{asset($item->image)}}" alt='name-of-cat'/>
                                    @else
                                        <img class='img-fluid' src="images/no_photo.jpg" alt='name-of-cat'/>
                                    @endif   
                                </a>
                                <div class='home_prod_info'>
                                    <a href="/shop/{{$item->id}}">{{$item->name}}</a>
                                </div>                       
                            </div> 
                        @endif
                    @endforeach
                @endif
                @if(count($types))
                    @foreach($types->take(13) as $item)
                        @if($loop->iteration <= 7)
                            @continue
                        @endif
                        <div class='home_prod col-6 col-md-2'>
                            <a href="/shop/{{$item->id}}">
                                @if($item->image)
                                    <img class='img-fluid' src="{{asset($item->image)}}" alt='name-of-cat'/>
                                @else
                                    <img class='img-fluid' src="images/no_photo.jpg" alt='name-of-cat'/>
                                @endif   
                            </a>
                            <div class='home_prod_info'>
                                <a href="/shop/{{$item->id}}">{{$item->name}}</a>
                            </div>                       
                        </div>
                    @endforeach
                @endif 
            </div>
        </div>
    </div>
    <div class='more_cats'>
        <div class='more_wrapper animated zoomIn'>
            <div class='right_div'></div>
            <div class='left_div'></div>
            <a href='/shop' >показать больше</a>
        </div>
    </div>

    <div class='top_header_wrapper'>
        <div class='container'>
            <div class='top_prod_header'>
                <h3>популярные продукты</h3>
            </div>
        </div>
    </div>
    <!-- Top products start -->
    <div class='top_prod_wrapper'>    
        <div class='container'>
            <div class='top'>
                <!-- продукты -->
                @if(count($products))
                    @foreach($products->where('price','<=',$products->avg('price'))->shuffle()->take(12) as $prod)
                        <div class='top_products'>                            
                            <div class='img_div'>
                                @if(count($prod->images))
                                    <a href='/product/{{$prod->id}}'><img src="{{asset($prod->images[0])}}" alt='top_products' /></a>
                                @else
                                    <a href='/product/{{$prod->id}}'><img src="{{asset('images/no_photo.jpg')}}" alt='top_products' /></a>
                                @endif    
                            </div>
                            <div class='icons_div animated fadeInUp'>
                                @if(count($wishes) && $wishes->contains($prod->id))
                                    <div class='s-icon wishlist green_icon'><i class="far fa-heart"></i></div>
                                @else
                                    <div class='s-icon wishlist '><i class="far fa-heart"></i></div>
                                @endif
                                @if(count($bags) && $bags->contains($prod->id))
                                    <div class='s-icon cart green_icon'><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                @else
                                    <div class='s-icon cart'><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                @endif
                            </div>
                            <div class='name_div'>
                                <a href="/product/{{$prod->id}}"><h3>{{$prod->name}}</h3></a>
                            </div>
                            <div class='price_div'>
                                @if($prod->old_price)
                                    <span class='old_price'><del>{{$prod->old_price}}</del></span>
                                @endif
                                @if($prod->price)
                                    <span class='cur_price'>{{$prod->price}}</span>
                                @endif                                
                            </div>
                        </div>  
                    @endforeach
                @endif
            </div>        
            <!-- end of top -->
        </div>
        <!-- end of container -->
    </div>  
    <!-- Top Products End -->

    <div class='our_values'> 
        <div class='value_header'>
            <h2>почему мы</h2>
        </div>       
        <div class='container'>
            <div class='values'>
                <!-- first wrapper -->
                <div class='col-wrapper'>
                    <div class='row'>
                        <div class='col-12 col-sm-6 value_text'>
                            <h4>
                               асдлфкйал сдкфласкдфа кдйфакдйфлак дфлакдйф ладйфла дфадфа
                                асдкфал сдйфалсд йфлакдсфа йдфаксйдкай дфйасдкфал кдфакдфй
                                акдфл аксдй фл кай  дфлк  ай дфкйдк
                            </h4>
                        </div>
                        <div class='col-12 col-sm-6 value_img'>
                            <img src="{{asset('images/2.jpg')}}"  alt='our picture'/>
                        </div>    
                    </div>
                </div>
                <!-- second wrapper -->
                <div class='col-wrapper'>
                    <div class='row'>
                        <div class='col-12 col-sm-6 value_img'>
                            <img src="{{asset('images/2.jpg')}}"  alt='our picture'/>
                        </div> 
                        <div class='col-12 col-sm-6 value_text'>
                            <h4>
                                асдлфкйал сдкфласкдфа кдйфакдйфлак дфлакдйф ладйфла дфадфа
                                асдкфал сдйфалсд йфлакдсфа йдфаксйдкай дфйасдкфал кдфакдфй
                                акдфл аксдй фл кай  дфлк  ай дфкйдк
                            </h4>
                        </div>
                           
                    </div>
                </div>
                <!-- third wrapper -->
                <div class='col-wrapper'>
                    <div class='row'>
                        <div class='col-12 col-sm-6 value_text'>
                            <h4>
                               асдлфкйал сдкфласкдфа кдйфакдйфлак дфлакдйф ладйфла дфадфа
                                асдкфал сдйфалсд йфлакдсфа йдфаксйдкай дфйасдкфал кдфакдфй
                                акдфл аксдй фл кай  дфлк  ай дфкйдк
                            </h4>
                        </div>
                        <div class='col-12 col-sm-6 value_img'>
                            <img src="{{asset('images/2.jpg')}}"  alt='our_picture'/>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='partners_block'>
        <div class='container'>
            <div class='partner_header'>
                <h2>партнеры</h2>
                <h6>проверенное качество годами</h6>
            </div>
            <div class='partners'>    
                @if(count($partners))
                    @foreach($partners->chunk(2) as $partner)
                       <div class='partner_group'>
                            @foreach($partner as $item)                            
                                <div class='first_row'>
                                    <div class='partner_div'>
                                        <a href="{{$item->url}}">
                                            @if(count($item->image))
                                                <img src="{{asset($item->image)}}" alt='brand_photo' />
                                            @else
                                                <img src="images/no_photo.jpg" alt='brand_photo' />
                                            @endif    
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>                         
                    @endforeach               
                @endif
            </div>            
        </div>
    </div>    
    
    @endsection