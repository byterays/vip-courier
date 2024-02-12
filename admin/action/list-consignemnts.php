<?php

require_once "app.php";
require_once "secure.php";



class Consignemnts{
        
    public function ListAll(){
        global $con;
        $stmt = $con->prepare("select lrn_lookup.internal_lrn, lrn_lookup.`provider_lrn`, lrn_lookup.`provider`, lrn_lookup.`date_created`,  lrn_lookup.`updated_on`,
        consignment.`order_date`,consignment.`sender_name`, consignment.`sender_phone`,consignment.`pickup_date`, consignment.`pickup_location`, 
        consignment.`receiver_name`, consignment.`receiver_phone`, consignment.`delivery_location`, 
        consignment.`delivery_date`, consignment.`status`  from lrn_lookup 
        inner join consignment  on  lrn_lookup.`internal_lrn`=consignment.`lrn`
        order by lrn_lookup.`updated_on` desc, lrn_lookup.`date_created` desc");
        $stmt->execute();
        $consignments = $stmt->fetchAll();
        return $consignments;

    }

}

