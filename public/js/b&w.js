import  * as icons from  "./icons.js";

$(document).ready(function() {
    "use strict";

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
    
    // Wishlist actions
    $(".wishlist").click(function(){
        let icon = $(this);
        let id = icons.getId($(this).attr('class'));
         
        $.ajax({
            method: 'post',
            url: `/wishlist/add-wish/${id}`,
            success: function(result) {             
                if(result && result === 'register') {
                    alert('Регистрируйтесь !');
                }else if(result === 'deleted') {
                    let cur_num = $(".wish_count").html();
                    $(".wish_count").html(--cur_num);
                    icon.removeClass('green_icon');
                } else {
                    let new_num = $(".wish_count").html();
                    $(".wish_count").html(++new_num);
                    icon.addClass('green_icon');
                }
            }
        })
    })

    // Add to bag from product
    $(".bag").click(function() {
        let icon = $(this);       
        let id = icons.getId($(this).attr('class'));

        icons.ajaxBagAction(id,icon);
    })

    // Add to bag from wishlist
    $(".s-cart").click(function() {
        let id = icons.getId($(this).closest('tr').attr('class'));
        
        icons.ajaxBagAction(id);
    })
    
    //Delete from bag
    $(".delete--prod").click(function(){
        let tr = $(this).closest('tr');
        let id = icons.getId(tr.attr('class'));
        
        icons.bagDel(id,tr);
    })
    
    // Bag input change
    icons.calcTotal();
    
    let input = $(".pro-quantity div > input");   
    input.change(function() {
        let val = $(this).val();
        let price = $(this).closest('td').siblings('td.pro-price').children().html();
        $(this).closest('td').siblings("td.pro-subtotal").eq(0).children().html(val * price);
        
        icons.calcTotal();
    })
});
