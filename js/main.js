
jQuery(function($) {
    $(".menu-item-has-children").append("<i class='fa fa-plus'></i>");
    $(".menu-item-has-children").mouseenter(function(){
        $(".fa-plus").remove();
        $(".fa-minus").remove();
        $(this).append( "<i class='fa fa-minus'></i>");
        $(".sub-menu").slideDown();
    });
    $(".menu-item-has-children").mouseleave(function(){
        $(".fa-minus").remove();
        $(this).append( "<i class='fa fa-plus'></i>");
        $(".sub-menu").hide();
    });
});