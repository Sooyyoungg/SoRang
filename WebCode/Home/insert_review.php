<?php
include "../base.php";
include "../config.php";
$alcname22 = $_GET['name'];
$_SESSION["name"] = $alcname22;
?>

    <article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			<h1>Insert Review</h1>
            <br>
            //check box·Î 1-5Á¡
            <form class="insert_review" method="get" action="insert_review_action.php">
            	<h2>score: </h2>
            	<input type="text" name="score" width="40" height="8" class="score_input" ><br>
            	<h3>detail review: </h3>
            	<input type="text" name="content" style="width:400px; height:100px" class="detail_input"><br><br>
            	<input type="submit" value="Submit">
            </form>
            <br>
		</div>
    </article>
   
<script>
    const myForm = document.getElementById("myForm");
        document.querySelector(".submit").addEventListener("click", function(){

        myForm.submit();

    });
</script>