$(document).ready(function (){
    // Top Nav    
    $(window).scroll(function(){        
        if($(this).scrollTop() > '110') {
            $(".top_nav").css({
                position: 'fixed',
                top:0,
                left:0,
                right:0,
                background: '#e9e9e9',
                transition: '.2s',
                'z-index': 500,                 
            });
        }else if($(this).scrollTop() < '110') {
            $(".top_nav").css({
                position: 'relative',
                transition: '.2s',
                background: 'transparent',
            });
        }
    });

    // Side menu open
    $(".m_menu_icon").click(function() {        
           $(".side_menu_wrapper").addClass('bounceInLeft');
            $(".side_menu_wrapper").css({
                left: 0
            }); 
        });
    $(".close_icon").click(function() {
        $(".side_menu_wrapper").removeClass('bounceInLeft');
        $(".side_menu_wrapper").css({            
            left: '-85%',
        });
        
    })

    // Result msg 
    if($(".result_msg").html() !== '') {
        setTimeout(function() {
            $(".result_msg").fadeOut();
        },3000);
    };
    
    
    // Footer    
    $(".parent_div").click(function () {
        $(".m_ul_list").slideToggle();
    });
})