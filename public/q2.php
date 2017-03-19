<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("ques2.php", ["title" => "Question 2"]);
    }

    $q = $_POST["q_no"];
    if( $q == "q2_out1.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu2/out1.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q2_out2.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu2/out2.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q2_out3.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu2/out3.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q2_out4.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu2/out4.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q2_out5.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu2/out5.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    
        

?>