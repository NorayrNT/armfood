$(document).ready(function () {
    // Categories' toggle
    $(".with_items").click(function() {
        $(this).children("ul.child_ul").eq(0).slideToggle();  
    }); 
    
    // Multi handle range input
    $("#filter").slider({
        range: true,
        min: 1000,
        max: 100000,
        values: [10000,222222],
        slide: function(event, ui) {
            $(".range_first_price").val(ui.values[0]);
            $(".range_second_price").val(ui.values[1]);
        }
    });

    // Mobile version
    $(".m_cat_list").click(function() {
        $(".shop_wrapper .parent_ul").fadeToggle('slow');
    })
    
})