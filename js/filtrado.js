$(document).ready(function(){

    //Agregadno el ACTIVE AL PIRMER ENLACE//
    $('.category-list .category-item[category="all"]').addClass('ct_item-active')
    $('.category-item').click(function(){
        var catProduct=$(this).attr('category');
       

       
       $('.category-item').removeClass('ct_item-active');
       $( this).addClass('ct_item-active');
             
        //Ocultando Productos===========//

        $('.products-items').css('transform' ,'scale(0)');
        function hideProduct(){
         $('.products-items').hide();
    }setTimeout(hideProduct,400);
      


        //Mostrando Productos====//

        function showProduct(){
            $('.products-items[category="'+catProduct+'"]').show();
            $('.products-items[category="'+catProduct+'"]').css('transform' ,'scale(1)');
        }setTimeout(showProduct,400);
       
    });
         //Mostrando Todos los Productos===//
    $('.category-item[category="all"]').click(function(){
        function showAll(){
            $('.products-items').show();
            $('.products-items').css('transform' ,'scale(1)');
        }setTimeout(showAll,400);
       


    });
});
