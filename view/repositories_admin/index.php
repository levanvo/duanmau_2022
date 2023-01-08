<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/account.php";
    include "../../model/kinds.php";
    include "../../model/products.php";
    include "../../model/comments.php";
    include "../../model/cart_and_history.php";
    include "../../model/dashboard.php";
    //===== 
    if(isset($_SESSION["vole"]) && $_SESSION["vole"]["role"]==1){
        if(isset($_GET["admin"]) && $_GET["admin"]!=""){
            include "./web_admin/header_admin.php";
            switch($_GET["admin"]){
                case "dashboard":
                    include "dashboard/dashboard_admin.php";
                    break;
                case "comments":
                    include "comments/comment_admin.php";
                    break;
                case "products":
                    if(isset($_POST["btn_products"])){
                        // echo"<pre>";
                        // var_dump($_FILES);die;
                        $name_pd=$_POST["name_pd"];
                        $img_pd=$_FILES["img_pd"]["name"];
                        $price_pd=$_POST["price_pd"];
                        $detail_pd=$_POST["detail_pd"];
                        $categories_pd=$_POST["categories_pd"];
                        move_uploaded_file($_FILES["img_pd"]["tmp_name"],"../../img/".$_FILES["img_pd"]["name"]);
                        products_add($name_pd,$img_pd,$price_pd,$detail_pd,$categories_pd);
                    }
                    include "products/products_admin.php";
                    break;
                case "update_pd":
                    if(isset($_POST["btn_products_update"])){
                        $name_pd=$_POST["name_pd"];
                        $img_pd1=$_FILES["img_pd1"]["name"];
                        $img_pd2=$_POST["img_pd2"];
                        $price_pd=$_POST["price_pd"];//virtual selling price - it can't use
                        $detail_pd=$_POST["detail_pd"];
                        $discount_pd=$_POST["discount_pd"];
                        $categories_pd=$_POST["categories_pd"];
                        $discount_pd_ok_price=(($discount_pd/100)*$price_pd)+$price_pd;//actual selling price
                        $id_product=$_POST["id_pppd"];
                        if($discount_pd > 100 || $discount_pd < -100){
                            echo"
                                <script>
                                    alert('Value unresonable !!');
                                    window.location.href='index.php?admin=products';
                                </script>
                            ";
                        }else{
                            if($img_pd1!=""){
                                move_uploaded_file($_FILES["img_pd1"]["tmp_name"],"../../img/".$_FILES["img_pd1"]["name"]);
                                products_update($name_pd,$img_pd1,$discount_pd_ok_price,$detail_pd,$discount_pd,$categories_pd,$id_product);
                                echo"
                                    <script>
                                        window.location.href='index.php?admin=products';
                                    </script>
                                ";
                            }else{
                                products_update($name_pd,$img_pd2,$discount_pd_ok_price,$detail_pd,$discount_pd,$categories_pd,$id_product);
                                echo"
                                    <script>
                                        window.location.href='index.php?admin=products';
                                    </script>
                                ";
                            }
                        }
                    }
                    include "products/update_pd_admin.php";
                    break;
                case "delete_pd":
                    $id_pd=$_GET["id_pd"];
                    products_delete($id_pd);
                    include "products/products_admin.php";
                    break;
                case "categories":
                    if(isset($_POST["btn_kinds"])){
                        $name_k=$_POST["name_k"];
                        kinds_add($name_k);
                    }
                    include "categories/categories_admin.php";
                    break;
                case "update_k":
                    if(isset($_POST["btn_kinds_update"])){
                        $name_k=$_POST["name_k"];
                        $id_k=$_POST["id_k"];
                        // echo $name_k ." và ".$id_k;die;
                        kinds_update($name_k,$id_k);
                        echo"
                            <script>
                                window.location.href='index.php?admin=categories';
                            </script>
                        ";
                    }
                    include "categories/update_ct_admin.php";
                    break;
                case "delete_k":
                    $id_k=$_GET["id_k"];
                    kinds_delete($id_k);
                    include "categories/categories_admin.php";
                case "users":
                    if(isset($_POST["btn_users"])){
                        $name_account=$_POST["name_account"];
                        $tk_account=$_POST["tk_account"];
                        $mk_account=$_POST["mk_account"];
                        $img_account=$_FILES["img_account"]["name"];
                        $email_account=$_POST["email_account"];
                        $role=$_POST["role"];
                        // echo "<pre>";
                        // var_dump($_POST);
                        // var_dump($_FILES);die;
                        move_uploaded_file($_FILES["img_account"]["tmp_name"],"../../img/".$_FILES["img_account"]["name"]);
                        account_add($name_account,$tk_account,$mk_account,$img_account,$email_account,$role);
                    }
                    include "users/users_admin.php";
                    break;
                case "update_account":
                    if(isset($_POST["btn_user_update"])){
                        $id_account=$_POST["id_account"];
                        $name_account=$_POST["name_account"];
                        $tk_account=$_POST["tk_account"];
                        $mk_account1=$_POST["mk_account1"];
                        $mk_account2=$_POST["mk_account2"];
                        $img_account1=$_FILES["img_account1"]["name"];
                        $img_account2=$_POST["img_account2"];
                        $email_account=$_POST["email_account"];
                        $role=$_POST["role"];
                        if($mk_account1==$mk_account2){
                            if($img_account1==""){
                                account_update($name_account,$tk_account,$mk_account1,$img_account2,$email_account,$role,$id_account);
                                echo"
                                    <script>
                                        window.location.href='index.php?admin=users';
                                    </script>
                                ";
                            }else{
                                move_uploaded_file($_FILES["img_account1"]["tmp_name"],"../../img/".$_FILES["img_account1"]["name"]);
                                account_update($name_account,$tk_account,$mk_account1,$img_account1,$email_account,$role,$id_account);
                                echo"
                                    <script>
                                        window.location.href='index.php?admin=users';
                                    </script>
                                ";
                            }
                        }else{
                            echo"
                                <script>
                                    alert('The password not same');
                                    window.location.href='index.php?admin=users';
                                </script>
                            ";
                        }
                    }
                    include "users/update_user_admin.php";
                    break;
                case "delete_account":
                    $id_account=$_GET["id_account"];
                    account_delete($id_account);
                    include "users/users_admin.php";
                    break;
                case "bills":
                    include "bills/bills_admin.php";
                    break;
                case "delete_cm":
                    $id_comment=$_GET["id_cm"];
                    comments_delete($id_comment);
                    echo"<script>
                        window.location.href='index.php?admin=comments';
                    </script>";
                    break;
                case "delete_all_cm":
                    comments_delete_all($id_account);
                    echo"<script>
                        window.location.href='index.php?admin=comments';
                    </script>";
                    break;
            }
            include "./web_admin/footer_admin.php";
        }else{
            include "./web_admin/header_admin.php";
            include "./dashboard/dashboard_admin.php";
            include "./web_admin/footer_admin.php";
        }
    }
?>