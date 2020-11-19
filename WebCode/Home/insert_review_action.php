<?php
    include "../base.php";
    include "../config.php";
    
    $userid=$_SESSION['userid'];
    
    $alcname333 = $_SESSION['name'];
    $score = $_GET["score"];
    $review = $_GET["content"];
    
    $sql_date = "SELECT NOW()";
    $run_sql_date = mysqli_query($db, $sql_date);
    $review_date = mysqli_fetch_array($run_sql_date)[0];

//     			$sql_random = "SELECT ROUND((RAND()*100)+1 AS random_num";
//     			$run_sql_random = mysqli_query($db, $sql_random);
//     			$review_no = mysqli_fetch_all($run_sql_random or die(mysqli_error($db)));
//     			echo $review_no;
    
    //user 정보는 session으로, review에 필요한 정보는 입력으로 받기
    //입력받은 review db에 insert
    $sql_insert = "INSERT INTO user_review VALUES ($userid, $review, $score, $alcname333, $review_date)";
    mysqli_query($db, $sql_insert);
?>

    <article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			<h1>Insert Review</h1>
            <br>
            <button onclick="location.href='rank_home.php'">OK. Go back to rank home page.</button>
            <br>
			
		</div>
    </article>