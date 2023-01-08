<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/account.php";
    include "../../model/kinds.php";
    include "../../model/products.php";
    include "../../model/cart_and_history.php";
    //===== 
    if(isset($_SESSION["vole"]) & $_SESSION["vole"]!=1){
        if(isset($_GET["client"]) && $_GET["client"]!=""){
            include "./web_client/header_client.php";
            switch($_GET["client"]){
                case "dashboard":
                    include "dashboard/dashboard_client.php";
                    break;
                case "cart":
                    if(isset($_GET["id_account"]) && isset($_GET["id_pd"])){
                        $id_account=$_GET["id_account"];
                        $id_pd=$_GET["id_pd"];
                        $take_product_one=products_one($id_pd);
                        $take_account_one=account_one($id_account);
                        extract($take_account_one);
                        extract($take_product_one);
                        $check_same_cart=cart_all($id_account);
                        foreach($check_same_cart as $value){
                            extract($value);
                            if($id_pd == $connect_to_pd){
                                // echo "id SP chọn: ".$id_pd ." và id SP trong giỏ: ".$connect_to_pd."<br>";
                                echo"<script>
                                    alert('This product already exists in your cart !');
                                    window.location.href='../../index.php?act=web';
                                </script>";die;
                            }
                        }
                        cart_add($name_account,$email_account,$img_account,$name_pd,$img_pd,$price_pd,$discount_pd,$id_account,$id_pd);
                        echo"<script>
                            window.location.href='../../index.php?act=web';
                        </script>";
                    }
                    include "cart/cart_client.php";
                    break;
                case "delete_cart":
                    $id_cart=$_GET["id_cart"];
                    cart_delete($id_cart);
                    echo"<script>
                        window.location.href='index.php?client=cart';
                    </script>";
                    break;
                case "buy_cart":
                    if(isset($_GET["id_account"]) && isset($_GET["id_pd"])){
                        // if(isset($_POST["btn_buy_cart"])){
                            $id_account=$_GET["id_account"];
                            $id_pd=$_GET["id_pd"];
                            $take_product_one=products_one($id_pd);
                            $take_account_one=account_one($id_account);
                            extract($take_account_one);
                            extract($take_product_one);
                            // var_dump($_POST["btn_buy_cart"]);die;
                            // echo $id_account." và id_pd=: ".$id_pd;die;
                        // }
                    }
                    include "cart/buy_cart.php";
                    break;
                case "buy_cart_bill":
                    if(isset($_POST["btn_buy_cart"])){
                        // echo"<pre>";
                        // var_dump($_POST);die;
                        $id_pd=$_POST["id_pd"];
                        $id_account=$_POST["id_account"];
                        $img_pd=$_POST["img_pd"];
                        $name_pd=$_POST["name_pd"];
                        $price_pd=$_POST["price_pd"];
                        $quanlity_pd=$_POST["quanlity_pd"];
                        $price_pd_all=$price_pd*$quanlity_pd;
                        $img_account=$_POST["img_account"];
                        $name_account=$_POST["name_account"];
                        $email_account=$_POST["email_account"];
                        $phone_account=$_POST["phone_account"];
                        $address_account=$_POST["address_account"];
                        // echo $address_account;die;
                        $time=$_POST["time"];
                        bill_buy($name_account,$phone_account,$address_account,$img_account,$time,$name_pd,$img_pd,$price_pd,$price_pd_all,$quanlity_pd,$id_pd,$id_account);
                        account_certified_to_buy($id_account);
                        echo"<script>
                            alert('Payment successfully, thanks u so much <3');
                            window.location.href='../../index.php?act=web';
                        </script>";
                    }
                    break;
                case "history_buy":
                    include "history_buy/history_buy_client.php";
                    break;
                
            }
            include "./web_client/footer_client.php";
        }else{
            include "./web_client/header_client.php";
            include "./dashboard/dashboard_client.php";
            include "./web_client/footer_client.php";
        }
    }
?>