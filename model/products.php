<?php
    //GET
    function products_all(){
        $a="select*from products";
        return get_all($a);
    }
    function products_all_limit($a1,$a2){
        $a="select*from products order by id_pd limit $a1,$a2";
        return get_all($a);
    }
    function products_all_kinds_limit($a1,$a2,$id_connect){
        $a="select*from products where connect_to_kinds=$id_connect order by id_pd limit $a1,$a2";
        return get_all($a);
    }
    function products_one($id){
        $a="select*from products where id_pd=$id";
        return get_one($a);
    }
    function products_view_tens(){
        $a="select*from products order by view_pd desc limit 0,10";
        return get_all($a);
    }
    function products_all_kinds_private($id_k){
        $a="select*from products where connect_to_kinds=$id_k";
        return get_all($a);
    }
    function products_one_kinds($id_pd,$id_k){
        $a="select*from products where id_pd=$id_pd and connect_to_kinds=$id_k";
        return get_one($a);
    }
    function products_all_kinds_diffirent($id_k,$id_pd){
        $a="select*from products where connect_to_kinds=$id_k and id_pd <> $id_pd";
        return get_all($a);
    }
    // function products_all_kinds($id_k){
    //     $a="select*from products where connect_to_kinds=$id_k";
    //     return get_all($a);
    // }
    //TAKE
    function products_add($a1,$a2,$a3,$a4,$a5){
        $a="insert into products(name_pd,img_pd,price_pd,detail_pd,connect_to_kinds)
            values('$a1','$a2',$a3,'$a4',$a5)";
        return connect($a);
    }
    function products_delete($id){
        $a="delete from products where id_pd=$id";
        return connect($a);
    }
    function products_update($a1,$a2,$a3,$a4,$a5,$a6,$id_pd){
        $a="update products set name_pd='$a1',img_pd='$a2',price_pd='$a3',detail_pd='$a4',discount_pd=$a5,connect_to_kinds=$a6 where id_pd=$id_pd";
        return connect($a);
    }
    function products_up_view($a1){
        $a="update products set view_pd=view_pd+1 where id_pd=$a1";
        return connect($a);
    }
?>