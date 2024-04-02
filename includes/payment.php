<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
    require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
    require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

        
    $fname = (isset($_POST['fname']) && $_POST['fname'] != "")?$_POST['fname']:"";
    $lname = (isset($_POST['lname']) && $_POST['lname'] != "")?$_POST['lname']:"";
    $companyName = (isset($_POST['companyName']) && $_POST['companyName'] != "")?$_POST['companyName']:"";
    $country = (isset($_POST['country']) && $_POST['country'] != "")?$_POST['country']:"";
    $mobile = (isset($_POST['phone']) && $_POST['phone'] != "")?$_POST['phone']:"";
    $email = (isset($_POST['email']) && $_POST['email'] != "")?$_POST['email']:"";
    $note = (isset($_POST['note']) && $_POST['note'] != "")?$_POST['note']:"";
    $paymentMethod = (isset($_POST['paymentMethod']) && $_POST['paymentMethod'] != "")?$_POST['paymentMethod']:"";
    $EPmsisdn = (isset($_POST['EPmsisdn']) && $_POST['EPmsisdn'] != "")?$_POST['EPmsisdn']:"";
    $JCmsisdn = (isset($_POST['JCmsisdn']) && $_POST['JCmsisdn'] != "")?$_POST['JCmsisdn']:"";
    $GLOBALS ['msisdn'] = "";
    $amount = (isset($_POST['amount']) && $_POST['amount'] != "")?$_POST['amount']:"";
    // $amount = 1;
    $otp = (isset($_POST['otp']) && $_POST['otp'] != "")?$_POST['otp']:"";

    $phone = substr($mobile, -10);


    $fullName = $fname." ".$lname;
    // exit;


if ($paymentMethod == 100007) {
    $msisdn = $EPmsisdn;
} elseif ($paymentMethod == 100008) {
    $msisdn = $JCmsisdn;
}
if (strlen($msisdn) == 11 && str_starts_with($msisdn, 0)) {
    $msisdn =  ltrim($msisdn, 0);
}

//exit();
    


if (isset($_POST['place_order'])) {
    // session_start();

    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    // Shuffle the $str_result and returns substring
    // of specified length
    $rand=substr(str_shuffle($str_result), 0, 8);

    $_SESSION['userKey'] = $rand ;

    $initiateUrl = "https://staging.simpaisa.com/v2/wallets/transaction/initiate";

    $data = [
        "merchantId" => "2000093",
        "operatorId" => $paymentMethod,
        "userKey" => $_SESSION["userKey"],
        "msisdn" => $msisdn,
        "transactionType" => "0",
        "amount" => $amount,
    ];



    $curl = curl_init($initiateUrl);
    // Set the CURLOPT_RETURNTRANSFER option to true
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // Set the CURLOPT_POST option to true for POST request
    curl_setopt($curl, CURLOPT_POST, true);
    // Set the request data as JSON using json_encode function
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    // Set custom headers for RapidAPI Auth and Content-Type header
    curl_setopt(
        $curl,
        CURLOPT_HTTPHEADER,
        [
            'Content-Type: application/json'
        ]
    );


    // Execute cURL request with all previous settings
    $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);



    $initresponse = curl_exec($curl);
    $initjsonResponse = json_decode($initresponse, true);
    $data["type"] = $_SERVER['REQUEST_METHOD'];
    $reqSent = json_encode($data, true);

    // echo "<pre>";
    // print_r($data);
    // print_r($initjsonResponse);

    // echo $initresponse;
    curl_close($curl);

    // exit;


    // echo "<pre>";
    // print_r($initjsonResponse);

    if ($data['msisdn'] == '03123456789') {
        // $transactionId = $initjsonResponse['transactionId'];
        $query = $db_handle->insertQuery("INSERT INTO order_details2 (order_id, customer_name, transaction_id, amount, email, phone, status) VALUES ('$rand', '$fullName', 12345669, $amount, '$email', '$phone','Pending payment')");
        ?>
    <script type="text/javascript">
    function base_url() {
    var pathparts = location.pathname.split('/');
    if (location.host == 'localhost') {
        var url = location.origin+'/'+pathparts[1].trim('/')+'/'; // http://localhost/myproject/
    }else{
        var url = location.origin; // http://stackoverflow.com
    }
    return url;
    }
    window.location.href = base_url()+"/order-details.php";
    </script>
        <?php
    } else {
        if ($initjsonResponse['status'] == 0000) {
            $transactionId = $initjsonResponse['transactionId'];
            $query = $db_handle->insertQuery("INSERT INTO order_details2 (order_id, customer_name, transaction_id, amount, email, phone, status) VALUES ('$rand', '$fullName', $transactionId, $amount, '$email', '$phone','Pending payment')");
        } else {
        //     echo ("<script LANGUAGE='JavaScript'>
        
        // history.back();
        // </script>");
            ?>
        <script LANGUAGE='JavaScript'>
            <?php  $message = $initjsonResponse['message']?>
        Swal.fire({
            icon: 'error',
            title: '<?php print_r($message) ?>',
            text: 'Unable to process order'
        })
    </script>
            <?php
        }
    }
} elseif (isset($_POST['verify'])) {
    $operatorId=$_POST['operatorId'];
    $amount=$_POST['price'];

     
    // $userKey = $_POST['userKey'];
    // $number=$_POST['number'];

    $epmsisdn = $_POST['epmsisdn'];
    $jcmsisdn = $_POST['jcmsisdn'];
    

    if ($operatorId == 100007) {
        $msisdn = $epmsisdn;
    } elseif ($operatorId == 100008) {
        $msisdn = $jcmsisdn;
    }

    $verifyUrl = "https://staging.simpaisa.com/v2/wallets/transaction/verify";

    $userKey= $_SESSION['userKey'];

    $data = [
        "merchantId" => "2000093",
        "operatorId" => $operatorId,
        "userKey" => $userKey,
        "msisdn" => $msisdn,
        "transactionType" => "0",
        "amount" => $amount,
        "otp" => $otp
    ];


    $curl = curl_init($verifyUrl);
    // Set the CURLOPT_RETURNTRANSFER option to true
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // Set the CURLOPT_POST option to true for POST request
    curl_setopt($curl, CURLOPT_POST, true);
    // Set the request data as JSON using json_encode function
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    // Set custom headers for RapidAPI Auth and Content-Type header
    curl_setopt(
        $curl,
        CURLOPT_HTTPHEADER,
        [
            'Content-Type: application/json'
        ]
    );


    // Execute cURL request with all previous settings
    $responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);



    $verifyresponse = curl_exec($curl);
    $verifyjsonResponse = json_decode($verifyresponse, true);
    $data["type"] = $_SERVER['REQUEST_METHOD'];
    $reqSent = json_encode($data, true);

    $status = $verifyjsonResponse['message'];

    // echo $verifyresponse;

    curl_close($curl);

    $query = $db_handle->insertQuery("UPDATE order_details2 SET status='$status' WHERE order_id='$userKey' ");

    $orderDetails = $db_handle->runQuery("SELECT * FROM order_details2 WHERE order_id='$userKey'");

    if ($verifyjsonResponse['status'] == 0000) {
        $email = "operations@merchantsglobe.com";
        
        if (isset($email)) {
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 4;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;

            $mail->mailer = "smtp";
            $mail->Username = 'merchantsglobe70@gmail.com';
            $mail->Password = 'odsobnbcnnbnhaxf';
    
            // Sender and recipient address
            $mail->SetFrom('merchantsglobe70@gmail.com', 'merchantsglobe.com');
            $mail->addAddress($email, "MerchantGlobe");

            $mail->IsHTML(true);
            $mail->Subject = "Order Success";
            $item_first = '';
            $item_others = '';
            $item_td = "";
           
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $key => $value) {
                        $code = $value['code'];
                        $item_data  =  $db_handle->runQuery("SELECT * FROM product_details WHERE code='$code'");
                        
                    if ($count == 0) {
                        $item_first .= '<td style="border:1px solid #dddddd;text-align:left;padding:8px">'.$item_data[0]['name'].'</td>';
                    } else {
                        $item_td    .=  '<tr><td style="border:1px solid #dddddd;text-align:left;padding:8px">'.$item_data[0]['name'].'</td></tr>';
                    }

                        $count ++;
                }
            }

            $mail->Body = '<p>Hello team,</p><p> A voucher has been purchased by the following user.</p>
                            <table border="1" style="font-family: arial, sans-serif;border-collapse: collapse;width: 100%;">
                               <tr>
                                <th style="border:1px solid #dddddd;text-align:left;padding:8px">Name</th>
                                <td style="border:1px solid #dddddd;text-align:left;padding:8px">'.ucwords($orderDetails[0]['customer_name']).'</td>
                                
                              </tr>
                              <tr>
                                <th style="border:1px solid #dddddd;text-align:left;padding:8px">Email</th>
                                <td style="border:1px solid #dddddd;text-align:left;padding:8px">'.$orderDetails[0]['email'].'</td>
                                
                              </tr>
                              <tr>
                               <th style="border:1px solid #dddddd;text-align:left;padding:8px">Date & Time</th>
                                <td style="border:1px solid #dddddd;text-align:left;padding:8px">'.date('d/m/Y H:i A').'</td>
                              </tr>
                               
                              <tr>
                               <th style="border: 1px solid #dddddd;text-align: left;padding: 8px;" rowspan='.$count.'>Item</th>
                               '.$item_first.'
                              </tr> '.$item_td.'</table> <br> Thanks!';
                            

            $headers = "From: merchantsglobe70@gmail.com\r\n";
                    
            if ($mail->send()) {
                echo "Email is sent successfully.";
            }
        }

        ?>
        <script type="text/javascript">
            function base_url() {
            var pathparts = location.pathname.split('/');
            if (location.host == 'localhost') {
                var url = location.origin+'/'+pathparts[1].trim('/')+'/'; // http://localhost/myproject/
            }else{
                var url = location.origin; // http://stackoverflow.com
            }
            return url;
            }
                window.location.href = base_url()+"/order-details.php";
                </script>
                <?php
            
                unset($_SESSION["cart_item"]);
    } else {
        ?>
            <script LANGUAGE='JavaScript'>
            <?php  $message2 = $verifyjsonResponse['message']?>
            Swal.fire({
                icon: 'error',
                title: '<?php print_r($message2) ?>',
                text: 'Unable to process order'
            })
    </script>

        <?php
    //  echo '<pre>';
    //  print_r($verifyresponse);
    }
    
    // unset($_SESSION['userKey']);
}



