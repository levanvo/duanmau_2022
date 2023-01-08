<?php
    include "./model/pdo.php";
    include "./model/account.php";
    include "./model/kinds.php";
    include "./model/products.php";
    include "./model/comments.php";
    //===== 
    if(isset($_GET["act"]) && $_GET["act"]!=""){
        include "view/web_main/header.php";
        switch($_GET["act"]){
            case "web":
                echo"
                    <script>
                        window.location.href='index.php';
                    </script>
                ";
            case "login":
                if(isset($_POST["info1"]) && $_POST["info1"]!=""){
                    $gmail_1=$_POST["gm1"];
                    $account_1=$_POST["tk1"];
                    $pass_1=$_POST["mk1"];

                    $get_all_account=account_all();
                    foreach($get_all_account as $value){
                        extract($value);
                        if($email_account==$gmail_1 && $tk_account==$account_1 && $mk_account==$pass_1){
                            $info_only_one=account_one($id_account);
                            if(is_array($info_only_one)){
                                $_SESSION["vole"]=$info_only_one;
                            }
                            echo"
                                <script>
                                    window.location.href='index.php?act=web';
                                </script>
                            ";
                        }
                    }
                }
                include "./view/sign_in/login.php";
                break;
            case "logup":
                if(isset($_POST["info2"]) && $_POST["info2"]!=""){
                    $gmail_2=$_POST["gm2"];
                    $account_2=$_POST["tk2"];
                    $pass_2=$_POST["mk2"];
                    $pass_22=$_POST["mk22"];
                    if($pass_2==$pass_22){
                        account_register($account_2,$pass_2,$gmail_2);
                        echo"
                            <script>
                                alert('Successful registration');
                                window.location.href='index.php?act=login';
                            </script>
                        ";
                    }else{
                        echo"
                            <script>
                                alert('Wrong retype your pass !!');
                                window.location.href='index.php?act=login';
                            </script>
                        ";
                    }
                }
                include "./view/sign_in/login.php";
                break;
            case "logout":
                unset($_SESSION["vole"]);
                echo"
                    <script>
                        window.location.href='index.php?act=login';
                    </script>
                ";
                break;
            case "detail_product":
                if(isset($_GET["id_pd"]) & isset($_GET["id_k"])){
                    $id_pd=$_GET["id_pd"];
                    $id_k=$_GET["id_k"];
                    products_up_view($id_pd);
                    $get_all_pd_k=products_all_kinds_diffirent($id_k,$id_pd);//all products of kind
                    $dem_k=0;
                    foreach($get_all_pd_k as $value){
                        $dem_k++;
                    }
                    $get_pd_to_k=products_one_kinds($id_pd,$id_k);//one product
                    extract($get_pd_to_k);
                }
                include "view/web_main/detail_product.php";
                break;
            case "comment":
                if(isset($_POST["btn_comments"])){
                    $id_account=$_GET["id_account"];
                    $id_pd=$_GET["id_pd"];
                    $text_comment=$_POST["text_comment"];
                    $date=$_POST["date_cm"];
                    $take_product_one=products_one($id_pd);
                    $take_account_one=account_one($id_account);
                    extract($take_account_one);
                    extract($take_product_one);
                    comments_add($name_account,$img_account,$text_comment,$date,$id_pd,$id_account);
                    echo"<script>
                        window.location.href='index.php?act=detail_product&id_pd=$id_pd&id_k=$connect_to_kinds';
                    </script>";
                }
                include "view/web_main/detail_product.php";
                break;
        }
        include "view/web_main/footer.php";
    }else{
        include "view/web_main/header.php";
        include "view/web_main/body.php";
        include "view/web_main/footer.php";
    }
?>