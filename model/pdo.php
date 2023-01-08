<?php
    function main(){
        $vo=new PDO("mysql:host=localhost; dbname=duanmau; charset=utf8", "root", "");
        $vo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $vo;
    }
    function connect($le){
        try{
            $van=main();
            $stmt=$van->prepare($le);
            $stmt->execute();
        }catch(PDOException $xem){
            throw $xem;
        }finally{
            unset($van);
        }
    }
    function get_all($le){
        try{
            $van=main();
            $stmt=$van->prepare($le);
            $stmt->execute();
            $levanvo=$stmt->fetchAll();
            return $levanvo;
        }catch(PDOException $xem){
            throw $xem;
        }finally{
            unset($van);
        }
    }
    function get_one($le){
        $sql=array_slice(func_get_args(),1);
        try{
            $van=main();
            $stmt=$van->prepare($le);
            $stmt->execute($sql);
            $levanvo=$stmt->fetch(PDO::FETCH_ASSOC);
            return $levanvo;
        }catch(PDOException $xem){
            throw $xem;
        }finally{
            unset($van);
        }
    }
?>