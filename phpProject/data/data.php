<?php


require_once ('db.php');


class Data{

    function fetch($query){
       
        try {
    
            $db = DB::getInstance();
            DB::setCharsetEncoding();
            $sqlExample = $query;
             
            $stm = $db->prepare($sqlExample);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
          
        } catch (Exception $e) {
            print $e->getMessage();
          
        }

    }


}





