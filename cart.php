<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
     href="css/style.css">

    <title>add to card</title>
  </head>
  <body class="bg-light">
   <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-11 mx-auto">
        <div class="row mt-5 gx-3">

         <!--  left side part -->
         <div class="col-md-12 col-lg-8 col-11 mx-auto main-cart mb-lg-0 mb-5 shadow">
          <div class="card p-4">
            <h2 class="py-4 font-weight-bold">
              cart (2 items)
            </h2>
            <div class="row">
             <!-- left side start -->
             <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
            <img src="img/1.jpg" class="img-fluid" alt="cart-img">
             </div>
               <!-- left side end -->
              <!--  product cart details -->
              <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                <div class="row">
                <!--   product cart name -->
                <div class="col-6 card-title">
                  <h1 class="mb-4 product_name">Blue froke</h1>
                  <p class="mb-2">frok - blue</p>
                   <p class="mb-2">frok: blue</p>
                    <p class="mb-3">size: m</p>
                </div>
                <!-- product quntity -->
                <div class="col-6">
         <ul class="pagination justify-content-end 
                    set_quantity">
        <li class="page-item">
        <button class="page-link" onclick="decreaseNumber
        ('textbox','itemvel')"><i class="fa fa-minus" aria-hidden="true"></i>
        </button>
        </li>
        <li class="page-item"><input type="text" class="page-link" value="0" id="textbox">
        </li>
         <li class="page-item">
        <button class="page-link" onclick="increaseNumber('textbox','itemvel')"><i class="fa fa-plus" 
          aria-hidden="true"></i>
        </button>
        </li>
                    
                  </ul>
                </div>
                  
                </div>
                <!-- move prices of card product -->
                <div class="row">
                  <div class="col-9 d-flex justify-content-between 
                  remove_wish">
                  <p><i class="fa fa-trash"></i>
                    Remove items
                  </p>

                  <p><i class="fa fa-heart"></i>
                    move to wish list
                  </p>

                    
                  </div>

                  <div class="col-3 d-flex justify-content-end price_money"> 
                    <h3>$<span id="itemvel">0.00</span></h3>
                    
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
          <hr /> 
         <!--  second card product start -->

         <div class="card p-4">
            <h2 class="py-4 font-weight-bold">
              cart (2 items)
            </h2>
            <div class="row">
             <!-- left side start -->
             <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
            <img src="img/4.jpg" class="img-fluid" alt="cart-img">
             </div>
               <!-- left side end -->
              <!--  product cart details -->
              <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                <div class="row">
                <!--   product cart name -->
                <div class="col-6 card-title">
                  <h1 class="mb-4 product_name">red 
                  zara froke</h1>
                  <p class="mb-2">frok - red</p>
                   <p class="mb-2">frok: red</p>
                    <p class="mb-3">size: m</p>
                </div>
                <!-- product quntity -->
                <div class="col-6">
         <ul class="pagination justify-content-end 
                    set_quantity">
        <li class="page-item">
        <button class="page-link"
         onclick="decreaseNumber('textbox1',
         'itemvel1')"><i class="fa fa-minus" aria-hidden="true"></i>
        </button>
        </li>
        <li class="page-item"><input type="text" class="page-link" value="0" id="textbox1">
        </li>
         <li class="page-item">
        <button class="page-link" onclick="increaseNumber('textbox1','itemvel1')"><i class="fa fa-plus" aria-hidden="true"></i>
        </button>
        </li>
                    
                  </ul>
                </div>
                  
                </div>
                <!-- move prices of card product -->
                <div class="row">
                  <div class="col-9 d-flex justify-content-between 
                  remove_wish">
                  <p><i class="fa fa-trash"></i>
                    Remove items
                  </p>

                  <p><i class="fa fa-heart"></i>
                    move to wish list
                  </p>

                    
                  </div>

                  <div class="col-3 d-flex justify-content-end price_money"> 
                    <h3>$<span id="itemvel1">0.00</span></h3>
                    
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>

           
         </div>

         <!-- rigth side part -->
            <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5"> 
              <div class="right_side p-3 shadow bg-white">
                <h2 class="product_name mb-5">the total amount of</h2>
                <div class="price_indiv d-flex justify-content-between">
                  <p>product amount</p>
          <p>$<span id="product_total_amt">0.00
          </span></p>
                  
                </div>
                 <div class="price_indiv d-flex justify-content-between">
                  <p>shipping charge</p>
                  <p>$<span id="shipping_charge">50.0</span></p>
                  
                </div>
                <hr /> 
                <div class="total_amt d-flex justify-content-between font-weight-bold">
                  <p>the total amount of(including VAT)</p>
                  <p>$<span id="total_cart_amt">
                    0.00
                  </span></p>
                  
                </div>
                <button class="btn btn-primary text-uppercase">checkout</button>
                
              </div>
             <!--  discount code of product -->
             <div class="discount_code mt-3 shadow">
              <div class="card">
                <div class="card-body">
                  <a class="d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-cotrols="collapseExample">
                   Add a discount code (optional) 
                   <span><i class="fa fa-chevron-down pt-1"></i></span>
                  </a>
                  <div class="collapse" id="collapseExample">
                    <div class="mt-3">
                      <input type="text" name="" id="discount_code1" class="form-control font-weight-bold"
                      placeholder="enter the discount code">
                      <small id="error_trw" class="text-dark mt-3">code is rinki</small>
                      
                    </div>
                    <button class="btn btn-primary btn-sm mt-3" onclick=
                    "discount_code()">Apply
                    </button>
                    
                  </div>
                  
                </div>
                
              </div>
     
             </div>
              <!-- discount extra part -->
               <div class="mt-3 shadow p-3 bg-white">
                <div class="pt-4">
                  <h5 class="mb-4">Expected  delivery date</h5>
                  <p>july 28th 2020 - july 30th 2020</p>
                  
                </div>
                
              </div>
              
            </div>
          
        </div>
        
      </div>
      
    </div>
     
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript">

    var product_total_amt = document.getElementById
    ('product_total_amt');
   var total_cart_amt = document.getElementById
   ('total_cart_amt');
   var shipping_charge = document.getElementById
   ('shipping_charge');
   var discountCode1 = document.getElementById
   ('discount_code1');


      const decreaseNumber = (incdec,itemprice) =>{
        var itemvel = document.getElementById
        (incdec);
           var itemprice = document.getElementById
        (itemprice);
       // console.log(itemvel.value);
       if(itemvel.value <= 0){
        itemvel.value = 0;
        alert('negative value is not allowed');
       }else{
        itemvel.value = parseInt(itemvel.value) - 1;
        itemvel.style.background = '#fff';
        itemvel.style.color = '#000';
        itemprice.innerHTML = parseInt(itemprice.innerHTML) - 15;
         product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) - 15;

         total_cart_amt.innerHTML = parseInt
         (product_total_amt.innerHTML) + 
         parseInt(shipping_charge.innerHTML);

       }
      }

      const increaseNumber = (incdec,itemprice) =>{
        var itemvel = document.getElementById
        (incdec);
        var itemprice = document.getElementById
        (itemprice);
       // console.log(itemvel.value);
       if(itemvel.value >= 5){
        itemvel.value = 5;
        alert('max 5 allowed');
        itemvel.style.background = 'red';
        itemvel.style.color = '#fff';
       }else{
        itemvel.value = parseInt(itemvel.value) + 1;
         itemprice.innerHTML = parseInt(itemprice.innerHTML) + 15;
         product_total_amt.innerHTML = parseInt
         (product_total_amt.innerHTML) + 15;

          total_cart_amt.innerHTML = parseInt
          (product_total_amt.innerHTML) + 
          parseInt(shipping_charge.innerHTML);

       }
      }
      const discount_code = () =>{
        let totalamtcurr = parseInt(total_cart_amt.innerHTML);
        let error_trw = document.getElementById
        ('error_trw');

        if(discountCode1.value === 'rinki'){
          let newtotalamt = totalamtcurr - 15;
          total_cart_amt.innerHTML = newtotalamt;
          error_trw.innerHTML = "code is valid";
        }else{
          error_trw.innerHTML = "try again! it is not valid code";

        }
      }

    </script>
  </body>
</html>