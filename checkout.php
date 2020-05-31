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

            <ul class="menu-checkout center">
                <li class="menu-checkout__list">
                    <details class="menu-checkout__details" open>
                        <summary class="menu-checkout__summary">
                            01. Shipping Adress
                        </summary>

                        <div class="menu-checkout__content">
                            <form action="#" class="menu-checkout__form">
                                <h4 class="menu-checkout__name">
                                    Check as a guest or register
                                </h4>
                                <p class="menu-checkout__text">
                                    Register with us for future convenience
                                </p>

                                <input type="radio" class="menu-checkout__radio" id="menu-checkout__radio_guest"
                                    name="menu-checkout__radio">
                                <label for="menu-checkout__radio_guest" class="menu-checkout__label">checkout as
                                    guest</label>
                                <br>
                                <input type="radio" class="menu-checkout__radio mb-34"
                                    id="menu-checkout__radio_register" name="menu-checkout__radio" checked>
                                <label for="menu-checkout__radio_register" class="menu-checkout__label">register</label>

                                <h4 class="menu-checkout__name">register and save time!
                                </h4>
                                <p class="menu-checkout__text mb-34">
                                    Register with us for future convenience
                                </p>
                                <p class="menu-checkout__text">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    Fast and easy checkout
                                </p>
                                <p class="menu-checkout__text mb-34">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    Easy access to your order history and status
                                </p>

                                <a href="#" class="menu-checkout__button">continue</a>
                            </form>

                            <form action="#" class="menu-checkout__form">
                                <h4 class="menu-checkout__name">
                                    Already registed?
                                </h4>
                                <p class="menu-checkout__text">
                                    Please log in below
                                </p>

                                <label for="menu-checkout__email" class="menu-checkout__label">
                                    EMAIL ADDRESS<span class="note txt-17">*</span>
                                </label>
                                <input type="email" name="menu-checkout__email" id="menu-checkout__email"
                                    class="menu-checkout__input">

                                <label for="menu-checkout__password" class="menu-checkout__label">
                                    PASSWORD<span class="note txt-17">*</span>
                                </label>
                                <input type="email" name="menu-checkout__password" id="menu-checkout__password"
                                    class="menu-checkout__input">

                                <p class="menu-checkout__text note mb-29">
                                    * Required Fileds
                                </p>

                                <a href="#" class="menu-checkout__button">Log in</a>
                                <a href="#" class="menu-checkout__link-forgot">Forgot Password ?</a>
                            </form>
                        </div>
                    </details>
                </li>
                <li class="menu-checkout__list">
                    <details class="menu-checkout__details">
                        <summary class="menu-checkout__summary">02. BILLING INFORMATION

                        </summary>
                    </details>
                </li>
                <li class="menu-checkout__list">
                    <details class="menu-checkout__details">
                        <summary class="menu-checkout__summary">03. SHIPPING INFORMATION

                        </summary>
                    </details>

                </li>
                <li class="menu-checkout__list">
                    <details class="menu-checkout__details">
                        <summary class="menu-checkout__summary">04. SHIPPING METHOD

                        </summary>
                    </details>
                </li>
                <li class="menu-checkout__list">
                    <details class="menu-checkout__details">
                        <summary class="menu-checkout__summary">05. PAYMENT METHOD

                        </summary>
                    </details>
                </li>
                <li class="menu-checkout__list">
                    <details class="menu-checkout__details">
                        <summary class="menu-checkout__summary">06. ORDER REVIE

                        </summary>
                    </details>
                </li>
            </ul>

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