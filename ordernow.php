<?php
$custid=base64_decode($_REQUEST['custid']);
$amount=$_COOKIE["userId"];
$orderid="ORDS" . rand(10000,99999999);
?>
<html>
  <head>
  	 <title>Order Now</title>
     <style>
      *{
        margin:0px;
        padding:0px;
       }
       .btn{
        margin-top: 10px;
    width: 150px;
    height: 30px;
    color: #fff;
    border: none;
    background: cornflowerblue;
       }
       .parent{
         width:100%;
         position:relative
        }
        .child1{
         width:50%;
         height:400px;
         background:#f0faf6;
         border:2px solid #f0faf6;
        }
        .child2{
          position:absolute;
          right:0px;
          top:0px;
         width:50%;
         height:400px;
         background:#fff;
         border:2px solid #f0faf6;
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
        .mybtn{
          margin-top: 30px;
          width: 151px;
          height: 44px;
          border: none;
          background: #225c47;
          color: #fff;
          font-size: 17px;
        }
     </style>
  </head>
  <body>
    
    <div class="parent">
       
    <center>
       
          <h3>Customer ID</h3>
          
          <h3><?php  echo $custid ?></h3><br>
          <h3>Your Order ID</h3>
          <h4 style="color:red;"><?php echo $orderid;  ?></h4><br>
          <h3>Total Amount</h3>
          
          <h2 style="color:cornflowerblue;"><span>Amount:</span> Rs.<?php echo $_COOKIE["userId"];  ?></h2>

          <form method="post" action="PaytmKit/pgRedirect.php">
               <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
            name="ORDER_ID" autocomplete="off"
            value="<?php echo $orderid;  ?>">

               <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $custid;  ?>">
               <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">

               <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
            size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">

            <input type="hidden" title="TXN_AMOUNT" tabindex="10"
            type="text" name="TXN_AMOUNT"
            value="<?php  echo $amount;  ?>">
            <input value="CheckOut" type="submit" class="btn">
          </form>

      </center>

    </div>
  </body>
</html>