<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include 'php/links.php';
    ?>

    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="top">
            <?php
                $page = 'man';
                include 'php/header.php';
                include 'php/main_menu.php';
                include 'php/breadcrumbs.php';
            ?>
            <table class="table_cart center">
                <tr class="table_cart_tr">
                    <th class="table_cart_th">Product Details</th>
                    <th class="table_cart_th">unite Price</th>
                    <th class="table_cart_th">Quantity</th>
                    <th class="table_cart_th">shipping</th>
                    <th class="table_cart_th">Subtotal</th>
                    <th class="table_cart_th">ACTION</th>
                </tr>
                <tr class="table_cart_tr">
                    <td class="table_cart_td">
                        <div class="shop_prod_cart">
                            <a href="single.php">
                                <img src="img/product_cart_1.png" alt="photo" class="shop_prod_cart_img">
                            </a>
                            <div class="shop_prod_cart_content">
                                <h3 class="shop_prod_name">
                                    <a href="single.php" class="product_cart_name_link">Mango People T-shirt</a>
                                </h3>
                                <p class="stars shop_prod_stars"><i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </p>
                                <p class="option_name">Color: <span class="option_value">Red</span></p>
                                <p class="option_name">Size: <span class="option_value">XII</span></p>
                            </div>
                        </div>
                    </td>
                    <td class="table_cart_td">&dollar;150</td>
                    <td class="table_cart_td">
                        <input type="number" value="2" min="1">
                    </td>
                    <td class="table_cart_td">FREE</td>
                    <td class="table_cart_td">&dollar;300</td>
                    <td class="table_cart_td">
                        <a href="#" class="cart_delete"><i class="fa fa-times-circle"></i></a>
                    </td>
                </tr>
                <tr class="table_cart_tr">
                    <td class="table_cart_td">
                        <div class="shop_prod_cart">
                            <a href="single.php" class="product_cart_name_link">
                                <img src="img/product_cart_2.png" alt="photo" class="shop_prod_cart_img">
                            </a>
                            <div class="shop_prod_cart_content">
                                <h3 class="shop_prod_name">
                                    <a href="single.php" class="product_cart_name_link">Mango People T-shirt</a>
                                </h3>
                                <p class="stars shop_prod_stars"><i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </p>
                                <p class="option_name">Color: <span class="option_value">Red</span></p>
                                <p class="option_name">Size: <span class="option_value">XII</span></p>
                            </div>
                        </div>
                    </td>
                    <td class="table_cart_td">&dollar;150</td>
                    <td class="table_cart_td">
                        <input type="number" value="2" min="1">
                    </td>
                    <td class="table_cart_td">FREE</td>
                    <td class="table_cart_td">&dollar;300</td>
                    <td class="table_cart_td">
                        <a href="#" class="cart_delete"><i class="fa fa-times-circle"></i></a>
                    </td>
                </tr>
                <tr class="table_cart_tr">
                    <td class="table_cart_td">
                        <div class="shop_prod_cart">
                            <a href="single.php" class="product_cart_name_link">
                                <img src="img/product_cart_3.png" alt="photo" class="shop_prod_cart_img">
                            </a>
                            <div class="shop_prod_cart_content">
                                <h3 class="shop_prod_name">
                                    <a href="single.php" class="product_cart_name_link">Mango People T-shirt</a>
                                </h3>
                                <p class="stars shop_prod_stars"><i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </p>
                                <p class="option_name">Color: <span class="option_value">Red</span></p>
                                <p class="option_name">Size: <span class="option_value">XII</span></p>
                            </div>
                        </div>
                    </td>
                    <td class="table_cart_td">&dollar;150</td>
                    <td class="table_cart_td">
                        <input type="number" value="2" min="1">
                    </td>
                    <td class="table_cart_td">FREE</td>
                    <td class="table_cart_td">&dollar;300</td>
                    <td class="table_cart_td">
                        <a href="#" class="cart_delete"><i class="fa fa-times-circle"></i></a>
                    </td>
                </tr>
            </table>
            <div class="jc-sb center">
                <a href="#" class="shop_prod_button">cONTINUE sHOPPING</a>
                <a href="#" class="shop_prod_button">cLEAR SHOPPING CART</a>
            </div>

            <div class="client center">
                <div class="client_address">
                    <h4 class="client_title">Shipping Adress</h4>
                    <select class="client_select">
                        <option value="Bangladesh">Bangladesh</option>
                    </select>
                    <input type="text" class="client_input" placeholder="Postcode / Zip">
                    <input type="text" class="client_input" placeholder="State">
                    <a href="#" class="client_button">get a quote</a>
                </div>

                <div class="client_discount">
                    <h4 class="client_title">coupon discount</h4>
                    <p class="client_discount_caption">
                        Enter your coupon code if you have one
                    </p>
                    <input type="text" class="client_input" placeholder="State">
                    <a href="#" class="client_button">Apply coupon</a>
                </div>
                <div class="client_check">
                    <div class="client_stotal">
                        <p class="client_stotal_cap">Sub total</p>
                        <p class="client_stotal_val">&dollar;900</p>
                    </div>
                    <div class="client_gtotal">
                        <p class="client_gtotal_cap">grand total</p>
                        <p class="client_gtotal_val">&dollar;900</p>
                    </div>
                    <a href="#" class="button">proceed to checkout</a>
                </div>
            </div>

            <?php
            include 'php/subscribe.php';
        ?>
        </div>
        <?php
           
            include 'php/footer.php';
        ?>
    </div>
</body>

</html>