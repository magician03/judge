<?php

    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
    render("ques3.php", ["title" => "Question 3"]);
    }
        
    $q = $_POST["q_no"];
    if( $q == "q3_out1.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu3/hello.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q3_out2.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu3/out2.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q3_out3.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu3/out3.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q3_out4.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu3/out4.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q3_out5.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu3/out5.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q3_out6.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu3/out6.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }
    else if($q == "q3_out7.txt"){
    	$fname = $_FILES["file"]["tmp_name"];
    	$md = md5_file("qu3/out7.txt");
    	$md_f = md5_file($fname);
    	if($md == $md_f)
    		echo "YES";
    	else
    		echo "NO";
    }



?>