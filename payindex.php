<html>
  <head>
  	 <title>Payment Page</title>
  	 <style>
      *{
        margin:0px;
        padding:0px;
       }
       .parent{
         width:100%;
         position:relative
        }
        .child1{
         width:50%;
         height:400px;
         background:cornflowerblue;
         border:2px solid cornflowerblue;
        }
        .child2{
          position:absolute;
          right:0px;
          top:0px;
         width:50%;
         height:400px;
         background:#fff;
         border:2px solid cornflowerblue;
         padding: 82px;
         box-sizing: border-box; 
        }
        .mobile{
          width: 400px;
          height: 300px;
          padding: 20px;
          margin-top: 50px;
          margin-left: 128px;
          box-sizing: border-box;
        }
        .paynow{
          padding: 20px 30px;
          text-decoration:none;
          background: #5b41c3;
          border: none;
          color: #fff;
          font-size: 16px;
        }
  	 </style>
  </head>
  <body>
    
    <div class="parent">

       <div class="child1">
         
         <img src="mobileimage.webp" class="mobile">
       </div>

       <div class="child2">
         <h2>X001 Mobile</h2>
         <br>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         <br><br><br>
           <?php
            $custid=base64_encode('cust'.rand(1000,1000));
            $amount=base64_encode(4000);
           ?>

         <a href="ordernow.php?custid=<?php echo $custid;?>&am=<?php echo $amount; ?>"  class="paynow">PayNow</a>
       </div>
      
    </div>


  </body>
</html>

<!-- /*https://github.com/devchandansh/payment-using-paytm-php*/ -->

