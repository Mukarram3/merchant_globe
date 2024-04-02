<!-- header-area -->
<?php
include('includes/header.php');
include('includes/payment.php');
?>
<!-- header-area-end -->
<main>

    <!-- Top Cover start-->
    <section class="cover-area cover-bg third-cover-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cover-content text-center">
                        <h2>Check<span>out</span></h2>
                        <nav aria-label="cover">
                            <ol class="cover">
                                <li class="cover-item"><a href="index.php">Home</a></li>
                                <li class="cover-item"><a href="store.php">Store</a></li>
                                <li class="cover-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Cover End -->


    <section class="checkout-content pt-120 pb-80">
        <div class="page_content_wrap">

            <div class="content_wrap">



                <div class="content">


                    <article id="post-152"
                        class="post_item_single post_type_page post-152 page type-page status-publish hentry">


                        <div class="post_content entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="woocommerce-form-login-toggle">

                                    <div class="woocommerce-info">
                                        Returning customer? <a href="#" class="showlogin">Click here to login</a> </div>
                                </div>
                                <form class="woocommerce-form woocommerce-form-login login" method="post"
                                    style="display:none;">


                                    <p>If you have shopped with us before, please enter your details below. If you are a
                                        new customer, please proceed to the Billing section.</p>

                                    <p class="form-row form-row-first">
                                        <label for="username">Username or email&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="input-text fill_inited" name="username" id="username"
                                            autocomplete="username">
                                    </p>
                                    <p class="form-row form-row-last">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="input-text fill_inited" type="password" name="password"
                                            id="password" autocomplete="current-password">
                                    </p>
                                    <div class="clear"></div>


                                    <p class="form-row">
                                        <label
                                            class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                name="rememberme" type="checkbox" id="rememberme" value="forever">
                                            <span>Remember me</span>
                                        </label>
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                                            value="837fd63b3b"><input type="hidden" name="_wp_http_referer"
                                            value="/checkout/"> <input type="hidden" name="redirect"
                                            value="https://coinsforgame.com/checkout/">
                                        <button type="submit"
                                            class="woocommerce-button button woocommerce-form-login__submit"
                                            name="login" value="Login">Login</button>
                                    </p>
                                    <p class="lost_password">
                                        <a href="https://coinsforgame.com/wp-login.php?action=lostpassword">Lost your
                                            password?</a>
                                    </p>

                                    <div class="clear"></div>


                                </form>
                                <div class="woocommerce-form-coupon-toggle">

                                    <div class="woocommerce-info">
                                        Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>
                                    </div>
                                </div>

                                <form class="checkout_coupon woocommerce-form-coupon" method="post"
                                    style="display:none">

                                    <p>If you have a coupon code, please apply it below.</p>

                                    <p class="form-row form-row-first">
                                        <input type="text" name="coupon_code" class="input-text fill_inited"
                                            placeholder="Coupon code" id="coupon_code" value="">
                                    </p>

                                    <p class="form-row form-row-last">
                                        <button type="submit" class="button" name="apply_coupon"
                                            value="Apply coupon">Apply coupon</button>
                                    </p>

                                    <div class="clear"></div>
                                </form>
                                <div class="woocommerce-notices-wrapper"></div>



                                <form id="nameform" method="POST" class="checkout woocommerce-checkout">

                                    <div class="billing-details">
                                        <div class="row">
                                            <div class="left-side">
                                                <div class="innner-content pl-3">
                                                    <h3>Billing details</h3>
                                                    <div class="billing-form">
                                                        <!-- <form action="#"> -->

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="firstName">First name <span
                                                                        class="required">*</span></label>
                                                                <input type="text" name="fname">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="firstName">Last name <span
                                                                        class="required">*</span></label>
                                                                <input type="text" name="lname">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 mt-3">
                                                                <label for="company">Company name (optional)</label>
                                                                <input type="text" name="companyName">
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <label for="country">Country / Region <span
                                                                        class="required">*</span></label>
                                                                <select id="country" name="country">

                                                                </select>
                                                                <label for="state">State</label>
                                                                <span id="state-code"><select name="state"
                                                                        id="state"></span>
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <label for="country">Street address <span
                                                                        class="required">*</span></label>

                                                                <input type="text"
                                                                    placeholder="House number and street name">
                                                                <input type="text" class="mt-3"
                                                                    placeholder="Apartment, suit, unit, etc. (optional)">
                                                            </div>
                                                            <div class="col-md-12 mt-3">
                                                                <label for="company">Postcode / ZIP <span
                                                                        class="required">*</span></label>
                                                                <input type="text" name="postcode">
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <label for="company">Phone <span
                                                                        class="required">*</span></label>
                                                                <input type="text" name="phone" required>
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <label for="company">Email address <span
                                                                        class="required">*</span></label>
                                                                <input type="text" name="email" required>
                                                            </div>










                                                        </div>

                                                        <!-- </form> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-side">
                                                <div class="inner-content pl-3">
                                                    <h3>Addition notes</h3>
                                                    <textarea name="note" id="message"
                                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <h3>Your order</h3>


                                        <div id="shopping-cart">


                                            <a id="btnEmpty" href="index.php?action=btnEmpty">Empty Cart</a>
                                            <?php
                                            if (isset($_SESSION["cart_item"])) {
                                                $total_quantity = 0;
                                                $total_price = 0;
                                                ?>
                                            <table class="tbl-cart" cellpadding="10" cellspacing="1">
                                                <tbody>
                                                    <tr>
                                                        <th style="text-align:left;">Name</th>
                                                        <th style="text-align:left;">Code</th>
                                                        <th style="text-align:right;" width="5%">Quantity</th>
                                                        <th style="text-align:right;" width="10%">Unit Price</th>
                                                        <th style="text-align:right;" width="10%">Price</th>
                                                        <th style="text-align:center;" width="5%">Remove</th>
                                                    </tr>
                                                    <?php

                                                    foreach ($_SESSION["cart_item"] as $item) {
                                                        $item_price = $item["quantity"] * $item["price"];
                                                        ?>
                                                    <tr>
                                                        <td><img src="<?php echo $item["image"]; ?>"
                                                                class="cart-item-image" />
                                                            <?php echo $item["name"]; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $item["code"]; ?>
                                                        </td>
                                                        <td style="text-align:right;">
                                                            <?php echo $item["quantity"]; ?>
                                                        </td>
                                                        <td style="text-align:right;">
                                                            <?php echo "PKR " . $item["price"]; ?>
                                                        </td>
                                                        <td style="text-align:right;">
                                                            <?php echo "PKR " . number_format($item_price, 2); ?>
                                                        </td>
                                                        <td style="text-align:center;"><a
                                                                href="checkout.php?action=remove&code=<?php echo $item["code"]; ?>"
                                                                class="btnRemoveAction"><img
                                                                    src="images/icon-delete.png"
                                                                    alt="Remove Item" /></a></td>
                                                    </tr>
                                                        <?php
                                                        $total_quantity += $item["quantity"];
                                                        $total_price += ($item["price"] * $item["quantity"]);
                                                    }

                                                    
                                                    ?>
                                                    <input type="hidden" name="amount" value="<?= $total_price ?>">
                                                    <tr>
                                                        <td colspan="2" align="right">Total:</td>
                                                        <td align="right">
                                                            <?php echo $total_quantity; ?>
                                                        </td>
                                                        <td align="right" colspan="2"><strong>
                                                                <?php echo "PKR " . number_format($total_price, 2); ?>
                                                            </strong></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                                <?php
                                            } else {
                                                ?>
                                            <div class="no-records">Your Cart is Empty</div>
                                                <?php
                                            }
                                            ?>
                                        </div>

                                        <div id="payment" class="woocommerce-checkout-payment">
                                            <ul class="wc_payment_methods payment_methods methods">
                                                <!-- <li class="wc_payment_method payment_method_elegro">
                                                    <input id="payment_method_elegro" type="radio" class="input-radio"
                                                        name="payment_method" value="elegro" checked="checked"
                                                        data-order_button_text="" style="">

                                                    <label for="payment_method_elegro">
                                                        elegro Crypto Payment <img
                                                            src="https://elegro-public.s3.eu-central-1.amazonaws.com/elegro_email_logo.png"
                                                            alt="elegro Crypto Payment"> </label>
                                                    <div class="payment_box payment_method_elegro">
                                                        <p class="mt-2">Pay through the elegro Crypto Payment</p>
                                                    </div>
                                                </li> -->
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" id="epbtn" name="paymentMethod"
                                                            value="100007" />
                                                        Pay with Easypaisa
                                                    </label>
                                                    <div id="easypaisa">
                                                        <label>Enter Mobile Number </label>

                                                        <input type="tel" placeholder="3xxxxxxxxx" name="EPmsisdn"
                                                            value="" class="major_rev">
                                                    </div>

                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" id="jcbtn" name="paymentMethod"
                                                            value="100008" />
                                                        Pay with Jazzcash
                                                    </label>
                                                    <div id="jazz">
                                                        <label>Enter Mobile Number </label>

                                                        <input type="tel" placeholder="3xxxxxxxxx" name="JCmsisdn"
                                                            value="" class="major_rev">
                                                    </div>

                                                </div>

                                                <!-- <button type="submit">submit</button> -->
                                            </ul>
                                            <div class="form-row place-order">


                                                <div class="woocommerce-terms-and-conditions-wrapper">
                                                    <div class="woocommerce-privacy-policy-text">
                                                        <p>Your personal data will be used to process your order,
                                                            support your experience throughout this website, and for
                                                            other purposes described in our <a href=""
                                                                class="woocommerce-privacy-policy-link"
                                                                target="_blank">privacy policy</a>.</p>
                                                    </div>
                                                    <button type="submit" class="button alt" name="place_order"
                                                        id="place_order" value="Place order"
                                                        data-value="Place order">Place
                                                        order</button>
                                                </div>




                                                <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                    name="woocommerce-process-checkout-nonce" value="4921c1f06b"><input
                                                    type="hidden" name="_wp_http_referer"
                                                    value="/?wc-ajax=update_order_review">
                                            </div>
                                        </div>

                                    </div>


                                </form>



                                <!-- <form action="payment.php" method="POST" id="nameform">
                                    First Name: <input type="text" name="first"></br>
                                    Last Name: <input type="text" name="last"></br>
                                    <button type="submit" name="submit" form="nameform" value="submit">Submit</button>
                                    <button type="reset" value="Reset">Reset</button>
                                </form> -->

                            </div>
                        </div><!-- .entry-content -->


                    </article>

                </div><!-- </.content> -->

            </div><!-- </.content_wrap> -->
        </div>
    </section>

</main>

<div id="myModal" class="modal fade" role="dialog">
    <form action="#" method="post">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="operatorId" value=<?php echo isset($_POST['paymentMethod'])?$_POST['paymentMethod']:"" ?>>
                <input type="hidden" name="epmsisdn" value=<?php echo (isset($_POST['EPmsisdn']) && $_POST['EPmsisdn'] != "")?$_POST['EPmsisdn']:"" ?>>

                <input type="hidden" name="jcmsisdn" value=<?php echo (isset($_POST['JCmsisdn']) && $_POST['JCmsisdn'] != "")?$_POST['JCmsisdn']:"" ?>>

                <input type="hidden" name="price" value=<?php echo isset($_POST['amount'])?$_POST['amount']:"" ?>>
                <!-- <input type="hidden" name="price" value="1"> -->

                <p>Enter OTP</p>
                <input type="text" name="otp">
            </div>
            <div class="modal-footer">
            <button type="submit"  name="verify" id="verify" value="Place order" data-value="Verify OTP">Verify OTP</button>
            </div>
        </div>

    </div>
    </form>
</div>






<!-- footer-area -->
<?php
include('includes/footer.php');
include('includes/scriptFooter.php');
?>
<!-- footer-area-end -->
<script>
    
 var status = <?=$initjsonResponse['status']?>;
 
 console.log(status);
 if(status == 0000){
 $('#myModal').modal('show');
}

$(".major_rev").on("keyup", function () {               
  if ($(this).val() == 0) {
  $(this).val(null);                                     
  }                
});

</script>


</body>

</html>