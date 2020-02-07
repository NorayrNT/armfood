<div class='top_nav_wrapper'>
    <div class='top_nav'>
        <div class='f_ul_list'>
            <ul>
                <li class='with_submenu'>
                    <a href='/shop'>магазин</a>
                    <div class='megamenu animated fadeIn'>
                        <div class="nested_ul_wrapper">
                            @if(count($types))
                                @foreach($types->shuffle()->take(15)->chunk(4) as $item)
                                    @if($loop->last)
                                        <ul class='nested_ul_list'>
                                            @foreach($item as $list)                                        
                                                <li><a href="/shop/{{$list->id}}">{{$list->name}}</a></li> 
                                                @if($loop->last)
                                                    <li><a href="/shop">больше</a></li>
                                                @endif                                                                                   
                                            @endforeach
                                        </ul>
                                    @else
                                        <ul class='nested_ul_list'>
                                            @foreach($item as $list)                                        
                                                <li><a href="/shop/{{$list->id}}">{{$list->name}}</a></li>                                                                                  
                                            @endforeach
                                        </ul>       
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>                    
                </li>
                <li><a href='#'>о нас</a></li>
                <li><a href='#'>контакты</a></li>
            </ul>
        </div>
        <div class='logo_part'>
            <a href='/'><img src="{{asset('images/logo/trial_logo.png')}}"  alt='logo img' /></a>
        </div>
        <div class='s_ul_list'>
            <ul>
                <li class='arm_menu_list'>
                    <a href='/armenia'>армения</a>
                    <div class='arm_menu animated fadeInRight'>
                        <div class='arm_menu_wrapper'>
                            <ul class='arm_nested_ul'>
                                @if(count($armenia))
                                    @foreach($armenia as $arm)
                                        <li><a href="#{{$arm->section}}">{{$arm->section}}</a></li>
                                    @endforeach                                
                                @endif
                            </ul>
                        </div>
                    </div>
                </li>
                @if(Auth::check())
                    <li><a href='/account'>аккаунт</a></li> 
                @else
                    <li><a href="{{route('login')}}">вход</a></li>
                @endif                
                <li>
                    <a href='/bag' class='bag_icon'>
                        <i class="zmdi zmdi-shopping-cart"></i>
                        @if(count($bags))
                           <span class='bag_count'>{{count($bags)}}</span>
                        @else
                           <span class='bag_count'>0</span> 
                        @endif                        
                    </a>
                    <a href='/wishlist' class='wish_icon'>
                        <i class="zmdi zmdi-favorite"></i>
                        @if(count($wishes))
                         <span class='wish_count'>{{count($wishes)}}</span>
                        @else
                           <span class='wish_count'>0</span> 
                        @endif                        
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Mobile version goes here -->
<div class='m_top_nav'>
    
    <div class='m_nav_content'>
        <div class='m_menu_icon'>
            <div class='m1'></div>
            <div class='m2'></div>
            <div class='m3'></div>
        </div>
        <div class='m_logo'>
            <a href='/'><img src="{{asset('images/logo/trial_logo.png')}}"  alt='logo img' /></a>
        </div>
        <div class='m_bag'>
            <a href='/bag' class='bag_icon'>
                <i class="zmdi zmdi-shopping-cart"></i>
                @if(count($bags))
                    <span class='bag_count'>{{count($bags)}}</span>
                @else
                    <span class='bag_count'>0</span> 
                @endif 
            </a>
        </div>
    </div>
    
    <!-- Side menu -->
    <div class='side_menu_wrapper animated'>
        <div class='search_block'>
            <div class='search_input_div'>            
                <input type='text' placeholder='. . . serach' autofocus />
                <i class='fas fa-search'></i>
            </div>
        </div>
        
        <div class='s_cat_block'>
            <span class='close_icon'><i class="fas fa-times"></i></span>
            <ul class='parent_ul'>
                <li class='with_items'>
                    <span class='main_cat_name'>настольные наборы из обсидиана</span>
                    <span class='down'><i class="fas fa-angle-down"></i></span>
                    <ul class='child_ul'>
                        <li class='with_items'>   
                            <span class='main_cat_name'>кофе, чай, травы, яйца</span>
                            <span class='down'><i class="fas fa-angle-down"></i></span>
                            <ul class='child_ul'>
                                <li class='main_cat_name'>бастурма, шаурма, гриль</li>
                            </ul>
                        </li>                                
                    </ul>                                
                </li>
                <li>without nested ul second</li>                            
                <li><a href='#'>with a link</a></li>
            </ul>
        </div>
        
        <div class='other_items'>
            <ul>
                <li><a href="/shop">магазин</а></li>
                <li><a href="/contacts">контакт</а></li>
                <li><a href="/armenia">армения</а></li>
                @if(Auth::check())
                    <li><a href="/account">аккаунт</a></li> 
                @else
                    <li><a href="{{route('login')}}">вход</a></li>
                @endif              
            </ul>
        </div>

    </div>

</div>


