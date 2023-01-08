<?php
    // GET
    function cart_all($id_account){
        $a="select*from cart where connect_to_account=$id_account";
        return get_all($a);
    }
    // function cart_all_pd($id_pd){
    //     $a="select*from cart where connect_to_pd=$id_pd";
    //     return get_all($a);
    // }
    function bill_all($a1){
        $a="select*from bills where connect_to_account_bill=$a1";
        return get_all($a);
    }
    function bill_all_all(){
        $a="select*from bills";
        return get_all($a);
    }
    // TAKE
    function cart_add($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9){
        $a="insert into cart(name_account_c,email_account_c,img_account_c,name_pd_c,img_pd_c,price_pd_c,discount_pd_c,connect_to_account,connect_to_pd)
            values('$a1','$a2','$a3','$a4','$a5',$a6,$a7,$a8,$a9)";
        return connect($a);
    }
    function cart_delete($id){
        $a="delete from cart where id_c=$id";
        return connect($a);
    }
    function bill_buy($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12){
        $a="insert into bills(name_account_bill,phone_account_bill,address_account_bill,img_account_bill,time_account_bill,name_pd_bill,img_pd_bill,price_pd_bill,price_pd_all_bill,quantity_pd_bill,connect_to_pd_bill,connect_to_account_bill)
            values('$a1',$a2,'$a3','$a4','$a5','$a6','$a7',$a8,$a9,$a10,$a11,$a12)";
        return connect($a);
    }
?>