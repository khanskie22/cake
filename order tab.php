
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tab</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="order.css">

</head>

<body> 
    
    <header id="header">

       
        <a id="a" href="para sa future.html" class="previous">&laquo; Go Back</a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
   
    </header>

    <div class="container">

        
        <section class="main-home">
            
        <div class="main-text">
            <h5>_______________________________________________</h5>
            <h1>SWEETNESS<br>OVERLOAD</h1>
            <p>DELIGHT IN <b>EVERY</b> BITE!</p>
            <h5>_______________________________________________</h5>
            <div>
                <iframe  src="https://www.youtube.com/embed/HTXB6flODww?autoplay=1"></iframe>
             </div>
  
            
       
        </section>

        <!--item section-->
 
        <div>
            <h2 class="cake">MENU</h2>
            <div class="listProduct">
            <?php
                require './backend/products.php';

                $stmt = $conn->prepare("SELECT * FROM products LIMIT 12"); // limit 12 items
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0):
                ?>
                    <div class="listProduct">
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <div class="item">
                                <div><img src="<?php echo htmlspecialchars($row['image']); ?>" alt="" style="border-radius: 12px;"></div>
                                <div><h3><?php echo htmlspecialchars($row['name']); ?></h3></div>
                                <div class="price"><?php echo htmlspecialchars($row['price']); ?></div>
                                <p>Available Stock: 
                                    <span id="stock" class="stock"><?php echo htmlspecialchars($row['quantity']); ?></span>
                                </p>
                                <button class="addCart"><a href="invoice.html">Buy now</a></button>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php
                else:
                    echo "<p>No products found.</p>";
                endif;
                ?>
            </div>
    

     <!--contact section-->

     <section class="contact">
        <div class="contact-info">
          <div class="first-info">
            <img style="width: 150px; height: 100px; " src="logo.png" alt="">
            <p>Sweetness Overload<br>By: Karra</p>
            <p>09266528911</p>
            <p>karradadul24@gmail.com</p>
  
            <div class="social-icon">
              <a href=""><i class='bx bxl-facebook'></i></a>
              <a href=""><i class='bx bxl-instagram' ></i></a>
              <a href=""><i class='bx bxl-twitter' ></i></a>
              <a href=""><i class='bx bxl-gmail' ></i></a>
            </div>
          </div>
  
          <div class="second-info">
            <h4>Support</h4>
            <p><a href="">Contact Us</a></p>
            <p><a href="">About page</a></p>
            <p><a href="">Supplier</a></p>
            <p><a href="">Privacy</a></p>
          </div>
  
          <div class="third-info">
            <h4>Shop</h4>
            <p>Cake Bundle</p>
            <p>Cupcakes</p>
            <p>Costumized Cakes</p>
            <p>Vento cake</p>
          </div>
  
          <div class="fourth-info">
            <h4>Company</h4>
            <p><a href="">About</a></p>
            <p><a href="">Location</a></p>
            <p><a href="">CEO</a></p>
          </div>
        </div>
      </section>
  
      <div class="end-text">
        <p>All Rights Reserved @2023. <br>Designed by Cyrelle Khen D. Orga</p>
      </div>

    
</body>
</html>