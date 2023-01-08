<?php
    // GET
    function comments_all(){
        $a="select*from comments_pd";
        return get_all($a);
    }
    function comments_all_kind_account($a1){
        $a="select*from comments_pd where key_to_pd=$a1";
        return get_all($a);
    }
    function comments_delete($a1){
        $a="delete from comments_pd where id_cm=$a1";
        return connect($a);
    }
    function comments_delete_all($a1){
        $a="delete from comments_pd where key_to_account=$a1";
        return connect($a);
    }
    // TAKE
    function comments_add($a1,$a2,$a3,$a4,$a5,$a6){
        $a="insert into comments_pd(name_account_cm,img_account_cm,content_cm,time_cm,key_to_pd,key_to_account)
            values('$a1','$a2','$a3','$a4',$a5,$a6)";
        return connect($a);
    }
    
?>