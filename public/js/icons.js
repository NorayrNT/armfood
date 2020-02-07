"use strict";
export let getId = function(str = null) {
    if(str !== null) {
        let id = str.match(/[0-9]+/g)[0];
        return id;
    } else {
        return '';
    }
};

export let ajaxBagAction = function(id = null,icon = '') {
    
    $.ajax({
        method: 'post',
        url: `/bag/add-bag/${id}`,
        success: function(result) {
            if(result === 'register') {
                alert('Регистрируйтесь !');
            }else if(result === 'exists') {
                alert('Продукт уже добавлен в  корзинку !');
            } else {
                let cur_num = $(".bag_count").html();
                $(".bag_count").html(++cur_num);
                if(icon !== '') {
                    icon.addClass('green_icon');
                }
                alert('Продукт успешно добавлен в корзинку !')
            }
        }
    })
};

export let bagDel = function(id = null,tr = '') {
    if(id == null) {
        return ;
    } else {
        
        $.ajax({
            method: 'post',
            url: `/bag/del-bag/${id}`,
            success: function(result) {
                if(result === 'deleted') {
                    let cur_num = $(".bag_count").html();
                    $(".bag_count").html(--cur_num);
                    if(tr !== '') {
                        tr.remove();
                    }
                }
            }
        })
    }
}

export let calcTotal = function() {
    let subs = $(".cart-sub-price");
    let total_subs = 0;
    for(let i = 0; i < subs.length; i++) {
        total_subs += Number(subs.eq(i).html());
    }
    $(".cart_total").html(total_subs);

}



