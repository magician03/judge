<?php

    require("../includes/config.php");
    //require_once './class.Diff.php';

    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("login.php", ["title" => "Log In"]);
    }
        // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	$q = $_POST["q_no"];
    	if ($q == "q1_out1.txt"){

    	$md1 = md5_file("qu1/out1.txt");
    	echo $md1;
    }
    else if( $q == "q3_out1.txt"){
    	$fname = $_FILES["file"]["name"];
    	$md = md5_file("qu3/out1.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    	
}

?>