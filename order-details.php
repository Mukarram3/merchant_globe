<!-- header-area -->
<?php
   include('includes/header.php');

   // $userKey = $_GET['userKey'];
   $userKey= $_SESSION['userKey'];
?>
<!-- header-area-end -->

<!-- main-area -->
<main>


   <!-- contact-area -->
   <section class="contact-area pt-120 pb-120 home-four-shop-area">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-5 widget mt-5 mt-lg-0 m-auto">
               <div class="card">

                  <div class="card-body">

                     <span style="text-align: center; display: block;">
                        <img src="images/output-onlinegiftools.gif" alt="" style="text-align: center; width: 90px; margin: 10px 0px 10px 0px;">
                     </span>
                     <?php
                        $orderDetails = $db_handle->runQuery("SELECT * FROM order_details2 WHERE order_id='$userKey'");

            

                        // if (!empty($orderDetails)) {
                           // foreach($orderDetails as $key=>$value){
                        ?>  
                     <span>
                        <p class="text-center mb-0 text-white">Order Id: <span><?= $orderDetails[0]['order_id']?></span></p>
                        <p class="text-center">Transaction Id: <span><?= $orderDetails[0]['transaction_id']?></span></p>
                        <p class="mb-0">Date : <?= date("l jS \of F Y h:i:s A")?></p>
                        <p class="mb-0">Full Name: <?= ucwords($orderDetails[0]['customer_name']) ?></p>
                        <p class="mb-0">Email: <?= $orderDetails[0]['email']?></p>
                        <p class="mb-0">Mobile Number: <?= $orderDetails[0]['phone']?></p>
                        <span>
                           <div class="amount">
                              <p>Rs. <?= $orderDetails[0]['amount']?></p>
                              
                           </div>
                        </span>

                     </span>

                     <?php
                        // }
                     
                     // }?>



                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- contact-area-end -->


</main>
<!-- main-area-end -->


<!-- footer-area -->
<?php
   include('includes/footer.php');
?>
<!-- footer-area-end -->





<!-- JS here -->
<script data-cfasync="false" src="js/besDXp4bTmLM.js"></script>
<script src="js/t52JvErvSJ94.js"></script>
<script src="js/vAY16E4UewUR.js"></script>
<script src="js/iKOXE31uxxTB.js"></script>
<script src="js/s71phY6CAxhb.js"></script>
<script src="js/UUXeowpRr3mz.js"></script>
<script src="js/R9mAooRKf3tp.js"></script>
<script src="js/c7f6ofuYF9Uy.js"></script>
<script src="js/6aaUDfen7Aef.js"></script>
<script src="js/RvsN0QRLNEdH.js"></script>
<script src="js/AKpGVR4IceUi.js"></script>
<script src="js/i7bnWdInkYuY.js"></script>
<script src="js/MKJcyGGdl1Ie.js"></script>
<script src="js/ihuHhJkM7Nrm.js"></script>
<script src="js/85ipie9xHooa.js"></script>
<script src="js/K8Q0M4vkQEnv.js"></script>
<script src="js/ywVrIoFKS7nF.js"></script>
<script src="js/y77fZvrjemnS.js"></script>
<script src="js/pf33f7JOJb58.js"></script>
<script src="js/v7JvrV6pvRmY.js"></script>
</body>

</html>
