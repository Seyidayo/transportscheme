$(document).ready(function() {
    $("#service").change(function(){
if($(this).val()=="1")
{    
    
    $("#destinationairport").show().prop('required',true);
    $("#destination").hide().removeAttr('required');
    $("#airport").show().prop('required',true);
    $("#flight").show().prop('required',true);
    $("#departuretime").show().prop('required',true);

    // $("#destination").val($("#destination option:first").val());
    // $("#flight").val($("#flight option:first").val());
    // $("#destinationairport").val($("#destinationairport option:first").val());
    // $("#airport").val($("#airport option:first").val());
    // $("#departuretime").val($("#departuretime option:first").val());
}
else if($(this).val()=="2")
{
    $("#destination").show().prop('required',true);
    $("#destinationairport").hide().removeAttr('required');
    $("#airport").hide().removeAttr('required');
    $("#flight").hide().removeAttr('required');
    $("#departuretime").hide().removeAttr('required');


    
    
}
else if($(this).val()=="3")
{
    $("#destination").show().prop('required',true);
    $("#destinationairport").hide().removeAttr('required');
    $("#airport").hide().removeAttr('required');
    $("#flight").hide().removeAttr('required');
    $("#departuretime").hide().removeAttr('required');

    // $("#destination").val($("#destination option:first").val());
    // $("#flight").val($("#flight option:first").val());
    // $("#destinationairport").val($("#destinationairport option:first").val());
    // $("#airport").val($("#airport option:first").val());
    // $("#departuretime").val($("#departuretime option:first").val());
}
else if($(this).val()=="4")
{
    $("#destination").show().prop('required',true);
    $("#destinationairport").hide().removeAttr('required');
    $("#airport").hide().removeAttr('required');
    $("#flight").hide().removeAttr('required');
    $("#departuretime").hide().removeAttr('required');

    // $("#destination").val($("#destination option:first").val());
    // $("#flight").val($("#flight option:first").val());
    // $("#destinationairport").val($("#destinationairport option:first").val());
    // $("#airport").val($("#airport option:first").val());
    // $("#departuretime").val($("#departuretime option:first").val());
}   
else
{
    $("#destinationairport").hide();
    $("#destination").hide();
    $("#airport").hide();
    $("#flight").hide();
    $("#departuretime").hide();

    // $("#destination").val($("#destination option:first").val());
    // $("#flight").val($("#flight option:first").val());
    // $("#destinationairport").val($("#destinationairport option:first").val());
    // $("#airport").val($("#airport option:first").val());
    // $("#departuretime").val($("#departuretime option:first").val());
}

});
    $("#destinationairport").hide();
    $("#destination").hide();
    $("#airport").hide();
    $("#flight").hide();
    $("#departuretime").hide();

    // $("#destination").val($("#destination option:first").val());
    // $("#flight").val($("#flight option:first").val());
    // $("#destinationairport").val($("#destinationairport option:first").val());
    // $("#airport").val($("#airport option:first").val());
    // $("#departuretime").val($("#departuretime option:first").val());
});

var basePrice = <?= $_SESSION['price']; ?>;

$(".calculate").change(function() {
    newPrice = basePrice;
    
    $('.calculate option:selected').each(function() {
        newPrice += $(this).data('price')
    });
    
    $('#item-price').html(newPrice);
});