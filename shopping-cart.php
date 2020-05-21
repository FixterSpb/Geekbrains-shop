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
            ?>
            <main class="shopping-cart center">
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
                                <img src="img/product_middle_10.png" alt="photo" class="shop_prod_cart_img">
                                <div class="shop_prod_cart_content">
                                    <h3 class="shop_prod_name">Mango People T-shirt</h3>
                                    <p class="option_name">Color: <span class="option_value">Red</span></p>
                                    <p class="option_name">Size: <span class="option_value">XII</span></p>
                                </div>
                            </div>
                        </td>
                        <td class="table_cart_td">&dollar;150</td>
                        <td class="table_cart_td">
                            <input type="number" name="1" id="1" value="2" min="1">
                        </td>
                        <td class="table_cart_td">FREE</td>
                        <td class="table_cart_td">&dollar;300</td>
                        <td class="table_cart_td">
                            <a href="#" class="cart_delete"><i class="fa fa-times-circle"></i></a>
                        </td>
                    </tr>
                </table>
            </main>
            <div class="banner_box center top100">
                <div class="row_box box_h340">
                    <div class="column_box">

                        <img src="img/icon_1.png" alt="icon">


                        <h4 class="sales_text text_center top32">Free Delivery</h4>
                        <p class="sales_text text_center">Worldwide delivery on all. Authorit tively morph
                            next-generation
                            innov tion with extensive models.</p>

                    </div>
                    <div class="column_box">

                        <img src="img/icon_2.png" alt="icon">


                        <h4 class="sales_text text_center top32">Sales & discounts</h4>
                        <p class="sales_text text_center">Worldwide delivery on all. Authorit tively morph
                            next-generation innov tion with extensive models.</p>

                    </div>
                    <div class="column_box">

                        <img src="img/icon_3.png" alt="icon">


                        <h4 class="sales_text text_center top32">Quality assurance</h4>
                        <p class="sales_text text_center">Worldwide delivery on all. Authorit tively morph
                            next-generation innov tion with extensive models.</p>

                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'php/subscribe.php';
            include 'php/footer.php';
        ?>
    </div>
</body>

</html>