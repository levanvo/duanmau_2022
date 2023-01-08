<?php
    // GET
    function to_most_product_buy(){
        $a="select*from bills order by quantity_pd_bill desc limit 0,1";
        return get_all($a);
    }
    function to_maximum(){
        $a="select*from products order by price_pd desc limit 0,1";
        return get_all($a);
    }
    function to_minimum(){
        $a="select*from products order by price_pd asc limit 0,1";
        return get_all($a);
    }
    function to_average_fake(){
        $a="select*from products order by price_pd desc";
        return get_all($a);
    }
    function to_average_real($key){
        $a="select*from products order by price_pd desc limit $key,1";
        return get_all($a);
    }
    // TAKE

?>