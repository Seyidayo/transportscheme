

<!DOCTYPE html>
<html lang="en">
<head>


</head>
<body>

        <form id="myForm" role="form" method="POST" action="form2.php">

                <div class="form-group col-md-12">
                  <select class="calculate diff " id="service" name="serv" required>
                                          <option data-price="0" value="0">Choose A Service </option>
                                          <option data-price="0" value="1">Airport Shuttle</option>                      
                                        </select>
              
                </div>
              
                <div class="form-group col-md-12">
                  <select class="calculate diff" id="airport" name="arpt" required>
                                        <option data-price="0" value="0">Pick an Airport </option>
                                        <option data-price="6000" value="1">MM1</option>
                                        <option data-price="5900" value="2">MM2</option>
                                        
                                        </select>
              
                </div>
              
                <div class="col-md-12 row" style="margin-top:-20px">
                  <h4 class="price">Price Estimate: ₦<span id="item-price" name="price">0</span></h4>
                </div>
              
                <div class="col-md-6">
                  <a href="form2.php">
                                    <button style="float:right;" type="submit" class="button2">
                                    <span><span>NEXT</span></span></button></a>
                </div>
              
              </form>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <script>
 var basePrice = 0;

$(".calculate").change(function() {
    newPrice = basePrice;
    
    $('.calculate option:selected').each(function() {
        newPrice += $(this).data('price')
    });
    
    $('#item-price').html(newPrice);
});

$('form').submit(function() {
  alert($('#item-price').html()); // this is to show you it does work
  /*$.post('/your/controller', {
    value: $('#item-price').html()
  }, function(r) {
		console.log(r);
  });*/ // this is what you would do
  return false;
});

 </script>                   

</body>
</html>