<!DOCTYPE html>

<html>

    <head>
        

       
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>CMOJ| <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Gather</title>
        <?php endif ?>

        
        <script src="/js/jquery-1.11.3.min.js"></script>

        
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="ques.php"><i>Overview</i></a></li>
                        <li><a href="q1.php">Question 1</a></li>
                        <li><a href="q2.php">Question 2</a></li>
                        <li><a href="q3.php">Question 3</a></li>
                        <li><a href="q4.php">Question 4</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                        
                    </ul>
                <?php endif ?>
                <div style="color: rgb(126, 36, 250)"><b><i><h1>CheckMate Online Judge</h1></i></b>   </div>
            </div>


            <div id="middle">
