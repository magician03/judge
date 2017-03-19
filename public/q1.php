<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("ques1.php", ["title" => "Question 1"]);
    }

    $q = $_POST["q_no"];
    if( $q == "q1_out1.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu1/out1.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q1_out2.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu1/out2.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q1_out3.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu1/out3.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q1_out4.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu1/out4.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q1_out5.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu1/out5.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q1_out6.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu1/out6.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    
        

?>