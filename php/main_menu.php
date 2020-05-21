<nav class="center">
    <ul class="menu">
        <li class="menu_list">
            <a href="index.php" class="menu_link 
            <?php
                if ($page == 'home'){
                    print('menu_link_active');
                }
            ?>">Home</a></li>
        <li class="menu_list">
            <a href="product.php" class="menu_link <?php
                if ($page == 'man'){
                    print('menu_link_active');
                }
            ?>">Man</a>
            <div class="drop">
                <div class="drop_flex">
                    <h3 class="drop_title">Women</h3>
                    <ul class="drop_menu">
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Dresses</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Tops</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Sweaters/Knits</a>
                        </li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Jackets/Coats</a>
                        </li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Blazers</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Denim</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Leggings/Pants</a>
                        </li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Skirts/Shorts</a>
                        </li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Accessories</a></li>
                    </ul>
                </div>
                <div class="drop_flex">
                    <h3 class="drop_title">Women</h3>
                    <ul class="drop_menu">
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Dresses</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Tops</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Sweaters/Knits</a>
                        </li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Jackets/Coats</a>
                        </li>
                    </ul>
                    <h3 class="drop_title">Women</h3>
                    <ul class="drop_menu">
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Dresses</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Tops</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Sweaters/Knits</a>
                        </li>
                    </ul>
                </div>
                <div class="drop_flex">
                    <h3 class="drop_title">Women</h3>
                    <ul class="drop_menu">
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Dresses</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Tops</a></li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Sweaters/Knits</a>
                        </li>
                        <li class="drop_list"><a href="product.php" class="drop_link link_hover">Jackets/Coats</a>
                        </li>
                    </ul>
                    <div class="drop_img_box">
                        <img src="img/drop_img.png" alt="image">
                        <div class="drop_img_text">
                            Super sale!
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="menu_list"><a href="product.php" class="menu_link <?php
                if ($page == 'women'){
                    print('menu_link_active');
                }
            ?>">Women</a></li>
        <li class="menu_list"><a href="product.php" class="menu_link">Kids</a></li>
        <li class="menu_list"><a href="product.php" class="menu_link">Accoseriese</a></li>
        <li class="menu_list"><a href="product.php" class="menu_link">Featured</a></li>
        <li class="menu_list"><a href="product.php" class="menu_link">Hot</a></li>
        <li class="menu_list"><a href="product.php" class="menu_link">Deals</a></li>
    </ul>
</nav>