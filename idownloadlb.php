<?php
    include ('dbconnect.php');
    //Check ID in url
    if(!empty($_GET['lb_id']))
    {
        $filename = basename($_GET['lb_id']);
        $filepath = "logbook-file/".$filename;
     
     if(!empty($filename) && file_exists($filepath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        //read file 
        readfile($filepath);
        exit;
    }
    else{
        echo "file not exit";
    }
}
    header('Location: iviewlogbook.php');

?>