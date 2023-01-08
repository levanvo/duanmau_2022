<?php
    // GET
    function account_all(){
        $a="select*from account";
        return get_all($a);
    }
    function account_one($id){
        $a="select*from account where id_account=$id";
        return get_one($a);
    }
    function account_one_in_all($id){
        $a="select*from account where id_account=$id";
        return get_all($a);
    }
    // TAKE
    function account_add($a1,$a2,$a3,$a4,$a5,$a6){
        $a="insert into account(name_account,tk_account,mk_account,img_account,email_account,role) values ('$a1','$a2','$a3','$a4','$a5',$a6)";
        connect($a);
    }
    function account_update($a1,$a2,$a3,$a4,$a5,$a6,$id){
        $a="update account set name_account='$a1',tk_account='$a2',mk_account='$a3',img_account='$a4',email_account='$a5',role=$a6 where id_account=$id";
        connect($a);
    }
    function account_register($a1,$a2,$a3){
        $a="insert into account(tk_account,mk_account,email_account)values('$a1','$a2','$a3')";
        connect($a);
    }
    function account_delete($id){
        $a="delete from account where id_account=$id";
        return connect($a);
    }
    function account_certified_to_buy($id){
        $a="update account set certified_buy_account=certified_buy_account+1 where id_account=$id";
        return connect($a);
    }
?>