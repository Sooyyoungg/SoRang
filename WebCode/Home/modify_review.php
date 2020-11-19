<?php
include "../base.php";
include "../config.php";
$modify_review = $_GET["review"];
$_SESSION["review"] = $modify_review;
?>

	<article class="container">
		<div class="jumbotron" sttle="background-color : #F8F8FF">
			<h1>Modify Review</h1>
            <br>
            <form class="modify_review" method="get" action="modify_review_action.php">
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