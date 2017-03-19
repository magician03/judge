<div class="panel panel-info">
  <div class="panel-heading">
    <h1 class="panel-title">Morning Assembly</h1>
  </div>
  <div class="panel-body" style="text-align: left">
    It is morning time and Kendriya Vidyalaya is about to open. As is the custom of Kendriya
Vidyalayas, the school starts with the morning assembly. The students, as expected lack discipline
and thus, they are not standing in non-decreasing order of their heights. Their PT teacher is very
unhappy with this and wants the students to arrange themselves in non-decreasing order of their
heights, i.e., for any two students i,i+1, standing next to each other, their heights hi and hi+1 are such
that hi<=hi+1. The PT teacher announces to all the students that they should arrange themselves in
non-decreasing order of their heights. The students arrange themselves in the following way :</br></br>
1. They divide themselves into some groups. Each group contains consecutive students, i.e., a group
from student a to b will contain students a,a+1,a+2,..,b only.</br>
2. The division of students into groups is such that each student is present in only one of the group.
3. The students in a group arrange themselves in the non-decreasing order.</br>
4. The division of groups among students is such that after each group is arranged, all the students
are automatically arranged in the non-decreasing order of their heights.</br></br>
The PT teacher wants to know what is the maximum number of groups in which the students can be
divided, so that all the above conditions are satisfied. He turns to you for help. Help him and tell
him what is the maximum number of groups in which the students can be divided, so that the above
conditions are satisfied.</br></br>

<b>Input</b> :</br>
The first line contains the number of test cases t.</br>
For each test case, the first line will contain an integer n, the number of students.</br>
The next line contains n space-separated integers hi, denoting the height of the students
<b>Output</b> :</br>
You have to print the maximum number of groups in which the students can be divided so that the
division satisfies the given conditions.</br>
<b><i>Constraint</i></b> :</br>
t<=10</br>
1<=n<=10^5</br>
1<=hi<=10^9</br>
<b>Sample input</b> :</br>
3</br>
4</br>
4 3 1 7</br>
6</br>
5 1 4 3 3 6</br>
5</br>
1 2 3 4 5
<b>Sample output</b> :</br>
2</br>
2</br>
5</br>
<b>Explanation</b> :</br>
test case 1 :</br>
The given array denoting heights of students : [4 3 1 7]</br>
If the array is divided into two groups : [4 3 1] and [7].</br>
Sorting first group : [1 3 4]</br>
Sorting second group : [7]</br>
New array : [1 3 4 7] which is sorted.</br>
It is not possible to divide it in more than 2 groups, hence the answer is 2.</br>
  </div>

<h4>Download the Input files</h4>
<div class="list-group">
  <a href="qu1/in1.txt"><button type="button" class="list-group-item">Input file 1</button></a>
  <a href="qu1/in2.txt"><button type="button" class="list-group-item">Input file 2</button></a>
  <a href="qu1/in3.txt"><button type="button" class="list-group-item">Input file 3</button></a>
  <a href="qu1/in4.txt"><button type="button" class="list-group-item">Input file 4</button></a>
  <a href="qu1/in5.txt"><button type="button" class="list-group-item">Input file 5</button></a>
  <a href="qu1/in6.txt"><button type="button" class="list-group-item">Input file 6</button></a>
  
  
</div>
</br></br>
<h4>Submit and check your outputs</h4>
<ul class="list-group">
  <li class="list-group-item">
  	 <form action="q1.php" class="form-inline" method="POST" enctype="multipart/form-data">
  	 <fieldset>
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q1_out1.txt">
         <input type="submit"/></fieldset>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q1.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q1_out2.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q1.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q1_out3.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q1.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q1_out4.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q1.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q1_out5.txt">
         <input type="submit"/>
      </form>
  </li>
  <li class="list-group-item">
  	 <form action="q1.php" class="form-inline" method="POST" enctype="multipart/form-data">
         <input type="file" class="form-control" name="file" />
         <input type="hidden" name="q_no" class="form-control" value="q1_out6.txt">
         <input type="submit"/>
      </form>
  </li>
  
  
</ul>

</div>