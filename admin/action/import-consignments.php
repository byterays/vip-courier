<?php ini_set('display_errors', 1); ?> 
<?php

require_once "app.php";
require_once "secure.php";


if ($_FILES) {


    ini_set('auto_detect_line_endings', TRUE);
    $handle = fopen($_FILES["data-file"]["tmp_name"], 'r');
    $isHeader = true;
    while (($data = fgetcsv($handle)) !== FALSE) {
        if ($isHeader) {
            $isHeader = false;
            continue;
        }
        //print_r($data);
        $stmt = $con->prepare("INSERT INTO lrn_lookup (internal_lrn, provider_lrn, `provider`) VALUES (?,?,?)");
        $stmt->execute([$data[0], $data[1], "delhivery"]);

        //echo "<hr/>";

        $stmt = $con->prepare("INSERT INTO consignment (`lrn`, `order_date`, `sender_name`, `sender_phone`, `pickup_location`, `pickup_date`, `receiver_name`, `receiver_phone`, `delivery_location`, `delivery_date`, `date_created`, `status`) 
                                                VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->execute([$data[0], $data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9], $data[10], date("Y-m-d hh:mm:ss"), $data[11]]);

    }
    ini_set('auto_detect_line_endings', FALSE);


    $_SESSION["flash"]["type"] = "success";
    $_SESSION["flash"]["message"] = "File imported successfully";
    header("location: ../list-consignments");
} else {
    $_SESSION["flash"]["type"] = "danger";
    $_SESSION["flash"]["message"] = "Invalid file or file not found.";
    header("location: ../import-consignments");
    exit;
}
