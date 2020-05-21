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
                $page = 'women';
                include 'php/header.php';
                include 'php/main_menu.php';
            ?>
            <nav class="nav_breadcrumbs center">
                <h3 class="breadcrumbs_title">New Arrivals</h3>
                <ul class="breadcrumbs_menu">
                    <li class="breadcrumbs_list"><a href="#" class="breadcrumbs_link link_hover">Home</a></li>
                    <li class="breadcrumbs_list"><a href="#" class="breadcrumbs_link link_hover">Men</a></li>
                    <li class="breadcrumbs_list"><a href="#" class="breadcrumbs_link breadcrumbs_link_active">New
                            Arrivals</a></li>
                </ul>

            </nav>

            <main>
                <section>
                    <div class="single_slider">
                        <div class="angle">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <img src="img/product_1.png" alt="photo">
                        <div class="angle">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="single_description">
                        <h5 class="text_pink">
                            WOMEN COLLECTION
                        </h5>
                        <div class="single_pagination_block">
                            <div class="single_pagination"></div>
                            <div class="single_pagination single_pagination_active"></div>
                            <div class="single_pagination"></div>
                        </div>
                        <h4 class="product_name">Moschino Cheap And Chic</h4>
                        <p class="single_text">
                            Compellingly actualize fully researched processes before proactive outsourcing.
                            Progressively syndicate collaborative architectures before cutting-edge services. Completely
                            visualize parallel core competencies rather than exceptional portals.
                        </p>
                        <div class="product_desc">
                            <p class="product_desc_box">
                                MATERIAL: <span class="text_black">COTTON</span>
                            </p>
                            <p class="product_desc_box">
                                DESIGNER: <span class="text_black">BINBURHAN</span>
                            </p>
                        </div>

                        <p class="price">$561</p>
                        <form action="#" class="form_product_option">

                            <div class="product_option">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <label for="color">
                                    <h5>CHOOSE COLOR</h5>
                                </label>
                                <select name="color" id="color">
                                    <option value="red" type="color" value="#ff0000">
                                        <img src="img/c_red.png" alt="color red"> Red
                                    </option>
                                    <option value="green">
                                        <div id="c_green" class="div_color"></div>Green
                                    </option>
                                    <option value="black">
                                        <div id="c_black" class="div_color"></div>Black
                                    </option>
                                </select>
                            </div>
                            <div class="product_option">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <label for="size">
                                    <h5>CHOOSE SIZE</h5>
                                </label>
                                <select name="size" id="size">
                                    <option value="XXL">
                                        <div id="s_xxl"></div>XXL
                                    </option>
                                    <option value="XL">
                                        <div id="s_xl"></div>XL
                                    </option>
                                    <option value="L">
                                        <div id="s_l"></div>L
                                    </option>
                                </select>
                            </div>
                            <div class="product_option">
                                <label for="color">
                                    <h5>QUANTITY</h5>
                                </label>
                                <input type="number" min=1 step=1 value=2>
                            </div>
                            <a href="#" class="button_white"><img src="img/cart_pink.png" class="product_add_img"
                                    alt="Add to cart"> Add to Cart</a>
                        </form>
                    </div>
                </section>

                <section class="products center top100">
                    <div class="products_head">
                        <h4 class="single_products_title">
                            you may like also
                        </h4>
                    </div>
                    <div class="product_box">
                        <div class="product">
                            <a href="#" class="single_product_link">
                                <img src="img/product_middle_20.png" alt="photo">
                            </a>
                            <div class="product_content">
                                <a href="#" class="product_name_link link_hover">BLAZE LEGGINGS</a>
                                <div class="jc-sb top16">
                                    <p class="product_price">&dollar;52.00</p>
                                    <p class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="product_hover">
                                <a href="#" class="product_add"><img src="img/cart_white.png" class="product_add_img"
                                        alt="Add to cart"> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product">
                            <a href="#" class="single_product_link">
                                <img src="img/product_middle_21.png" alt="photo">
                            </a>
                            <div class="product_content">
                                <a href="#" class="product_name_link link_hover">ALEXA SWEATER</a>
                                <div class="jc-sb top16">
                                    <p class="product_price">&dollar;52.00</p>
                                    <p class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="product_hover">
                                <a href="#" class="product_add"><img src="img/cart_white.png" class="product_add_img"
                                        alt="Add to cart"> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product">
                            <a href="#" class="single_product_link">
                                <img src="img/product_middle_22.png" alt="photo">
                            </a>
                            <div class="product_content">
                                <a href="#" class="product_name_link link_hover">AGNES TOP</a>
                                <div class="jc-sb top16">
                                    <p class="product_price">&dollar;52.00</p>
                                    <p class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="product_hover">
                                <a href="#" class="product_add"><img src="img/cart_white.png" class="product_add_img"
                                        alt="Add to cart"> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product">
                            <a href="#" class="single_product_link">
                                <img src="img/product_middle_23.png" alt="photo">
                            </a>
                            <div class="product_content">
                                <a href="#" class="product_name_link link_hover">SYLVA SWEATER</a>
                                <div class="jc-sb top16">
                                    <p class="product_price">&dollar;52.00</p>
                                    <p class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="product_hover">
                                <a href="#" class="product_add"><img src="img/cart_white.png" class="product_add_img"
                                        alt="Add to cart"> Add to Cart</a>
                            </div>
                        </div>                        
                    </div>
                </section>
            </main>
            <div class="top40"></div>
        </div>
        <?php
            include 'php/subscribe.php';
            include 'php/footer.php';
        ?>
    </div>
</body>

</html>