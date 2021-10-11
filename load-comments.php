<?php 
 require('functions.php');
 $commentNewCount = $_POST['commentNewCount'];
 $comments = $product->getComments('comments', $commentNewCount);
foreach ($comments as $item)  {?>
                <p><?php echo $item['author']?></p>
                <p><?php echo $item['message']?></p>
                <?php } //closing foreach function?>