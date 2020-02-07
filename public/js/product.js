$(document).ready(function() {
    
    // Product tabs
    $(".prod_tabs div").click(function() {
        let id = $(this).attr('id');
        $(".tab_contents div").css({'display':'none'});
        if($(this).css('active_tab')){
            true;
        } else {
            $(".active_tab").css("color","#9d9da1");
            $(".active_tab").removeClass('active_tab');
            $(this).addClass('active_tab');
            $(this).css({'color':'black'});
            $(".tab_contents div[data-toggle=" + id + "]").css({'display':'block'});
        }
        
    })

    // Account page's tabs
    $('#tab_list li').click(function () {
        let id = $(this).attr('id');
        if($(this).attr('class') === 'active_tab')   {
            true;
        } else {
            $(".acc_tab_contents > div").css({'display':'none'});
            $(".active_tab").removeClass('active_tab');
            $(this).addClass('active_tab'); 
            $(".acc_tab_contents div[data-toggle=" + id +"]").css({'display':'block'});
        }
    })
})