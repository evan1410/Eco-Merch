<?php
    // require('functions.php');
    $comments = $product->getComments('comments',4);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="commentstyle.css" />
    <script>
        $(document).ready(function(){
            var commentCount = 2;
            $("button").click(function(){
                commentCount = commentCount + 2;
                $("#comment").load("load-comments.php", {
                   commentNewCount : commentCount 
                });
            });
        });


    </script>

</head>

<body>
    <div class="comment_container">
        <div class="container">

            <h1>Customer reviews</h1>
            <div id="comment">
            <?php foreach ($comments as $item)  {?>
                <div class ="cmt-p">
                <p><b><?php echo $item['author']?></b></p>
                <?php echo "<br>"; ?>
                <p><?php echo $item['message']?></p>
                </div>
                <?php } //closing foreach function?>
            </div>
            <button id="commentbtn">Show more Comments..</button>

        </div>
    </div>



</body>

</html>

<?php function a(){function b() {echo 'I am b';} echo 'I am a';} a(); a();?>