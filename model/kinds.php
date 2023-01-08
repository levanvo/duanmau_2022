<?php
    //GET
    function kinds_all(){
        $a="select*from kinds_pd";
        return get_all($a);
    }
    function kinds_one($id){
        $a="select*from kinds_pd where id_k=$id";
        return get_one($a);
    }
    //TAKE
    function kinds_add($a1){
        $a="insert into kinds_pd(name_k)values('$a1')";
        return connect($a);
    }
    function kinds_delete($id){
        $a="delete from kinds_pd where id_k=$id";
        return connect($a);
    }
    function kinds_update($a1,$id_k){
        $a="update kinds_pd set name_k='$a1' where id_k=$id_k";
        return connect($a);
    }
?>