<!DOCTYPE html>
<?php
    session_start();
    include('header.php');
    // include('scripts.php');
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if(isset($_GET['order'])){
            echo '<script>showAlert("Order","Order Successfull","success");</script>';
        }
    }
    //echo '<script>showAlert("Order","Order Successfull","success");</script>';
?>
        <!-- ---------------------small-nav---------------------------------------------------->
        <div class="nav-container">
            <div class="small-nav-bar">
                <nav>
                    <div class="dropdown">
                        <button class="dropbtn">Reusable Products</button>
                        <div class="dropdown-content">
                            <a href="grocery_bag.php">Grocery Bags</a>
                            <a href="#">Lunch Box</a>
                            <a href="#">Water Bottles</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Plastic Free Products</button>
                        <div class="dropdown-content">
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Recycled Products</button>
                        <div class="dropdown-content">
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- -------------------------------CART Items------------------------------------>
   <?php
        include('Template/_cart-template.php');
    ?>
   
    

<!--------------------------------FOOTER----------------------------------------------->

<?php
    include('footer.php');
?>
