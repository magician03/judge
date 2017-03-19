<?php
$q = $_POST["q_no"];
if( $q == "q3_out1.txt"){
      $fname = $_FILES["file"]["name"];
      $md = md5_file("qu3/out1.txt");
      $md_f = md5_file($fname);
      if($md == $md_f)
        echo "YES";
      else
        echo "NO";
    }
        
?>


<div class="panel panel-info">
  <div class="panel-heading">
    <h1 class="panel-title">Salary Survey</h1>
  </div>
  <div class="panel-body" style="text-align: left">
    Once there was a survey going on in the famous technical
company SoftTech.
Employee manager asked their employees to stand in a line.
In the survey every employee had to report the number of
employees standing in front of him with the same salary as
of that particular employee.</br></br>
There are N employee.</br></br>
Employee salary is given as an array of N elements.</br></br>

<b>Input</b> :
First line will contain an integer 'T' (number of test
cases ).</br>
For each test case there is an integer 'N' (number of
employees).</br>
Next line contains N integers a[1],a[2],..a[N].
a[i] denotes the salary of the 'i'th employee from left.</br>
<b>Output</b> :</br>
For each test case do :</br>
For each 'i' (1<= i <= N) print the number of employee in
front of the 'i'th employee with same salary as that of 'i'th
employee.</br>
<b><i>Constraint</i></b> :</br>
T<=10000</br>
1<=N<=5*100000</br>
sum of N over all test cases <=5*10^5</br>
1<=a[i]<=10^9</br>
<b>Sample input</b> :</br>
3</br>
4</br>
1 2 2 1</br>
5</br>
1 2 3 4 2</br>
7</br>
1 2 1 1 3 1 3</br>
<b>Sample output</b> :</br>
0 0 1 1</br>
0 0 0 0 1</br>
0 0 1 2 0 3 1</br>
<b>Explanation</b> :</br>
test case 3 :</br>
employee 1 has salary 1 , but there is no employee in
front of him with salary 1, hence print 0</br>
employee 2 has salary 2 , but there is no employee in
front of him with salary 2, hence print 0</br>
employee 3 has salary 1 , there is an employee in
front of him at position 1 with salary 1, hence print 1</br>
employee 4 has salary 1 , there are two employee in
front of him at position 1 and 3 with salary 1, hence</br>
print 2
  </div>

<h4>Download the Input files</h4>
<div class="list-group">
  <a href="qu3/in1.txt"><button type="button" class="list-group-item">Input file 1</button></a>
  <a href="qu3/in2.txt"><button type="button" class="list-group-item">Input file 2</button></a>
  <a href="qu3/in3.txt"><button type="button" class="list-group-item">Input file 3</button></a>
  <a href="qu3/in4.txt"><button type="button" class="list-group-item">Input file 4</button></a>
  <a href="qu3/in5.txt"><button type="button" class="list-group-item">Input file 5</button></a>
  <a href="qu3/in6.txt"><button type="button" class="list-group-item">Input file 6</button></a>
  <a href="qu3/in7.txt"><button type="button" class="list-group-item">Input file 7</button></a>
  
</div>
</br></br>
<h4>Submit and check your outputs</h4>
<ul class="list-group">
  <li class="list-group-item">
  	 <form action="q3.php" class="form-inline" method="POST" enctype="multipart/form-data" >
  	 <fieldset>
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q3_out1.txt">
         <input type="submit"/></fieldset>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q3.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q3_out2.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q3.php" class="form-inline" method="POST" enctype="multipart/form-data" >
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q3_out3.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q3.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q3_out4.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q3.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q3_out5.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q3.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q3_out6.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q3.php" class="form-inline" method="POST" enctype="multipart/form-data" >
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q3_out7.txt">
         <input type="submit"/>
      </form>
  </li>
  
</ul>

</div>