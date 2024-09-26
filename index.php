<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test task</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=EuclidCircularB&amp;family=Montserrat&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>

<body>

    <header class="header">

        <div class="header-block">
            <img class="header-block__logo" src="../images/ispring-header-logo.svg" alt="Ispring">
            <div class="header-block__menu" id="menu">
                <ul class="menu menu_info" id="menu-info">
                    <li class="navigation__item"><a class="menu__link menu__link_info menu__link_info_first" href="#">Products</a></li>
                    <li class="navigation__item"><img class="arrow-button" src="../images/arrow.svg" alt="Arrow"></li>
                    <li class="navigation__item"><a class="menu__link menu__link_info" href="#">Pricing</a></li>
                    <li class="navigation__item"><a class="menu__link menu__link_info" href="#">Support</a></li>
                    <li class="navigation__item"><a class="menu__link menu__link_info" href="#">Customers</a></li>
                    <li class="navigation__item"><a class="menu__link menu__link_info" href="#">Company</a></li>
                    <li class="navigation__item"><a class="menu__link menu__link_info" href="#">Blog</a></li>
                </ul>
                <ul class="menu menu_functions" id="menu-functions">
                    <li class="navigation__item"><a class="menu__link menu__link_functions menu__link_functions_first" href="#">EN</a></li>
                    <li class="navigation__item"><img class="arrow-button arrow-button_functions" src="../images/arrow.svg" alt="Arrow"></li>
                    <li class="navigation__item"><a class="menu__link" href="#"><img class="basket-button" src="../images/basket.svg" alt="Basket"></a></li>
                    <li class="navigation__item"><a class="menu__link" href="#"><img class="search-button" src="../images/search.svg" alt="Search"></a></li>
                    <li class="navigation__item"><a class="menu__link menu__link_functions" href="#">Log in</a></li>
                </ul>
            </div>
            <div class="burger" id="burger" onclick>
                <span class="burger__span"></span>
            </div>
        </div>

    </header>

    <main>

        <div class="pp-block container">
            <div class="pp-block__content">
                <p class="pp-block__title">Partner Program</p>
                <h1 class="pp-block__subtitle">Grow your revenue with iSpring</h1>
                <p class="pp-block__text-content">Offer your customers award-winning software for eLearning authoring and training management.</p>
                <button class="pp-block__cta-button cta-button" id="pp-cta-button" onclick>Become a Partner</button>
            </div>
            <div class="pp-block__collage">
                <img class="pp-image image" src="../images/pp-image.png" alt="Men">
                <img class="pp-image_small1" src="../images/pp-image2.png" alt="Diagram">
                <img class="pp-image_small2" src="../images/pp-image3.png" alt="Handshake">
            </div>
        </div>

        <div class="join-block container">
            <div class="join-block__content">
                <h1 class="join-block__title title">Join the team of eLearning enthusiasts</h1>
                <p class="join-block__text-content text-content">Tap into the rapidly growing eLearning market with the industry leader in course authoring and learning management — iSpring. </p>
                <img class="partners-image image" src="../images/partners.png" alt="Partners">
            </div>
            <div class="join-block__cards">
                <div class="join-block__card1 main-rectangle">
                    <p class="join-block__card-title">198 clients</p>
                    <p class="join-block__card-subtitle">from Fortune 500 companies</p>
                </div>
                <div class="join-block__card2 main-rectangle">
                    <p class="join-block__card-title">20 years </p>
                    <p class="join-block__card-subtitle">on the market </p>
                </div>
                <div class="join-block__card3 main-rectangle">
                    <p class="join-block__card-title join-block__card-title_card3">59,000 customers</p>
                    <p class="join-block__card-subtitle">from 172 countries</p>
                </div>
            </div>
        </div>

        <div class="benefits-block">
            <h1 class="benefits-block__title title">Benefits of partnering with iSpring</h1>
            <div class="benefits-block__cards">
                <div class="benefits-card main-rectangle">
                    <img class="benefits-card__image benefits-card__image1" src="../images/benefits-image1.svg" alt="Calendar icon">
                    <p class="benefits-card__title small-title">Recurring revenue and bonuses</p>
                    <p class="benefits-card__text-content text-content">Get profit from initial sales, as well as recurring revenue from subscription upgrades and license extensions and renewals.</p>
                </div>
                <div class="benefits-card main-rectangle">
                    <img class="benefits-card__image benefits-card__image2" src="../images/benefits-image2.svg" alt="Hand icon">
                    <p class="benefits-card__title small-title">24/7 customer support</p>
                    <p class="benefits-card__text-content text-content">We take care of post-sale customer support so you can focus on your business. Our support engineers are always ready to help.</p>
                </div>
                <div class="benefits-card main-rectangle">
                    <img class="benefits-card__image benefits-card__image3" src="../images/benefits-image3.svg" alt="Lamp icon">
                    <p class="benefits-card__title small-title">Expanded product offering </p>
                    <p class="benefits-card__text-content text-content">iSpring’s software can open a door to new business opportunities, enabling you to cover a wider range of client needs.</p>
                </div>
            </div>
            <button class="benefits-block__cta-button cta-button" id="benefits-cta-button" onclick>Become a Partner</button>
        </div>

        <div class="jump-block container">
            <div class="jump-block__content">
                <h1 class="jump-block__title title">Jump-start your business growth with iSpring </h1>
                <p class="jump-block__text-content text-content">Whether you are an eLearning consultant, VAR, software reseller, distributor, or tenderer, you can take advantage of the iSpring Partner Program and start increasing your revenue today. </p>
                <button class="jump-block__cta-button cta-button" id="jump-cta-button" onclick>Become a Partner</button>
            </div>
            <div class="jump-block__steps">
                <div class="step-card">
                    <img class="step-card__image" src="../images/step-image1.svg" alt="White octagon">
                    <div class="step-card__point step-card__point_1"></div>
                    <div class="step-card__point step-card__point_2"></div>
                    <div class="step-card__point step-card__point_3"></div>
                    <div class="step-card__point step-card__point_4"></div>
                    <div class="step-card__content">
                        <p class="step-card__title small-title">Sign up as a partner</p>
                        <p class="step-card__text-content text-content">Fill in the <a class="step-card__hyperlink" href="#cta-block">Partner Program form</a> to join our partner network. We will contact you shortly with all the details and reseller account information.</p>
                    </div>
                </div>
                <div class="step-card">
                    <img class="step-card__image" src="../images/step-image2.svg" alt="Orange octagon">
                    <div class="step-card__point step-card__point_1"></div>
                    <div class="step-card__point step-card__point_2"></div>
                    <div class="step-card__point step-card__point_3"></div>
                    <div class="step-card__point step-card__point_4"></div>
                    <div class="step-card__content">
                        <p class="step-card__title small-title">Get welcome training</p>
                        <p class="step-card__text-content text-content">In just 2 webinars, you and your employees will master the key features of iSpring software and learn how to use your reseller account in the most effective way.</p>
                    </div>
                </div>
                <div class="step-card">
                    <img class="step-card__image" src="../images/step-image3.svg" alt="Blue octagon">
                    <div class="step-card__content">
                        <p class="step-card__title small-title">Close your first deal</p>
                        <p class="step-card__text-content text-content">Selling iSpring software is easy because it is both powerful and user-friendly.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="promote-block container">
            <div class="promote-first-card main-rectangle">
                <h1 class="promote-first-card__title">Promote iSpring software easily</h1>
            </div>
            <div class="promote-card main-rectangle">
                <img class="promote-image1" src="../images/promote-image1.svg" alt="Rectangles icon">
                <p class="promote-card__title small-title">Free demo licenses</p>
                <p class="promote-card__text-content text-content">You will get free NFR licenses for all iSpring desktop products and a free iSpring Learn LMS account. These resources will be a useful aid in negotiations with your prospective clients.</p>
            </div>
            <div class="promote-card main-rectangle">
                <img class="promote-image2" src="../images/promote-image2.svg" alt="Plant icon">
                <p class="promote-card__title small-title">Marketing aids</p>
                <p class="promote-card__text-content text-content">We support our partners at all stages of the sales process: from lead generation to closing and follow-up. We also provide ready-made marketing aids: guidelines, presentations, sales proposals, etc.</p>
            </div>
            <div class="promote-card main-rectangle">
                <img class="promote-image3" src="../images/promote-image3.svg" alt="Circles icon">
                <p class="promote-card__title small-title">Co-marketing activities</p>
                <p class="promote-card__text-content text-content">We are always here to help you grow the market and expand your customer base. Our marketing specialists gladly take part in partners’ promotional activities, like workshops and conferences. </p>
            </div>
        </div>

        <div class="manage-block container">
            <img class="manage-block__image image" src="../images/screen-image.png" alt="Screenshot">
            <div class="manage-block__content">
                <h1 class="manage-block__title title">Manage all your sales online</h1>
                <p class="manage-block__text-content text-content">All partners get access to iSpring’s reseller portal. There you can process orders and license delivery, download license certificates and receipts, and view sales history with ease.</p>
                <button class="manage-block__cta-button cta-button" id="manage-cta-button" onclick>Become a Partner</button>
            </div>
        </div>

        <div class="languages-block">
            <h1 class="languages-block__title title">Products available in 17 languages</h1>
            <p class="languages-block__text-content text-content">iSpring software and services support a variety of languages to provide exceptional user experience to users from different countries. New languages are being covered on a regular basis.</p>
            <ul class="languages-list">
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">English</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Spanish</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">French</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">German</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Italian</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Japanese</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Portuguese</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Russian</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Polish</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Uzbek</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Chinese Simplified </p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Chinese Traditional</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Mongolian</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Norwegian</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Ukrainian</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Indonesian </p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Finnish</p>
                </li>
                <li class="languages-list__list-item">
                    <div class="red-point"></div>
                    <p class="languages-list__text-content">Azerbaijani </p>
                </li>
            </ul>
        </div>

        <div class="questions-block container">
            <div class="questions-block__banner">
                <img class="questions-block__image" src="../images/hands.svg" alt="Clapping icon">
                <p class="questions-block__title title">Have questions?</p>
                <p class="questions-block__title title">Reach out!</p>
            </div>
            <p class="questions-block__text-content text-content">We provide our partners with fast tech and sales assistance, including pre-sales and sales support.<br><br>Contact us any time at<br>partner@ispring.com.</p>
        </div>

        <p class="feedback-slider-title title">See how companies benefit from partnering with iSpring</p>

        <div class="feedback-slider swiper">
            <div class="feedback-slider__wrapper swiper-wrapper">
                <div class="feedback-slider__slide swiper-slide">
                    <div class="slide__title-container">
                        <img class="slide__image" src="../images/slide-rectangles.png" alt="Rectangles">
                        <p class="slide__title">Our income from partnering with iSpring has been increasing every year!</p>
                    </div>
                    <div class="slide__feedback-container">
                        <p class="slide__text-content text-content">Besides iSpring’s transparent discount system for partners, the software often becomes a door opener to selling learning management systems, which brings lern.link new business opportunities.</p>
                        <div class="slide__avatar">
                            <img class="avatar__image" src="../images/avatar.svg" alt="Avatar">
                            <div class="avatar__caption">
                                <p class="avatar__name">Guido Hornig</p>
                                <p class="avatar__job">Founder and director of lern.link</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-slider__slide swiper-slide">
                    <div class="slide__title-container">
                        <img class="slide__image" src="../images/slide-rectangles.png" alt="Rectangles">
                        <p class="slide__title">Slide2<br>Slide2<br>Slide2<br>Slide2<br></p>
                    </div>
                    <div class="slide__feedback-container">
                        <p class="slide__text-content text-content">Besides iSpring’s transparent discount system for partners, the software often becomes a door opener to selling learning management systems, which brings lern.link new business opportunities.</p>
                        <div class="slide__avatar">
                            <img class="avatar__image" src="../images/avatar.svg" alt="Avatar">
                            <div class="avatar__caption">
                                <p class="avatar__name">Guido Hornig</p>
                                <p class="avatar__job">Founder and director of lern.link</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-slider__slide swiper-slide">
                    <div class="slide__title-container">
                        <img class="slide__image" src="../images/slide-rectangles.png" alt="Rectangles">
                        <p class="slide__title">Slide3<br>Slide3<br>Slide3<br>Slide3<br></p>
                    </div>
                    <div class="slide__feedback-container">
                        <p class="slide__text-content text-content">Besides iSpring’s transparent discount system for partners, the software often becomes a door opener to selling learning management systems, which brings lern.link new business opportunities.</p>
                        <div class="slide__avatar">
                            <img class="avatar__image" src="../images/avatar.svg" alt="Avatar">
                            <div class="avatar__caption">
                                <p class="avatar__name">Guido Hornig</p>
                                <p class="avatar__job">Founder and director of lern.link</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="feedback-slider__button-container">
                <div class="swiper-button-prev_custom"></div>
                <div class="swiper-button-next_custom"></div>
            </div>
        </div>

        <div class="form-block-background">
            <form id="main-form" method="POST">
                <div class="form-block container">
                    <div class="form-block__collage">
                        <img class="form-block__image" src="../images/form-image.png" alt="Blue octagon">
                        <p class="form-block__title title">Become an iSpring Partner</p>
                        <p class="form-block__subtitle">Tell us about yourself and your company.</p>
                    </div>
                    <div class="form-field">
                        <p class="form-field__title">Company Information</p>

                        <p class="alert-message" id="empty-name-message">Empty field!</p>
                        <input class="form-field__input form-field__input_name" id="name" maxlength="255" placeholder="Company name">

                        <p class="alert-message" id="empty-phone-message">Empty field!</p>
                        <input class="form-field__input form-field__input_phone" id="phone" maxlength="255" placeholder="Phone">

                        <p class="alert-message" id="empty-email-message">Empty field!</p>
                        <p class="alert-message" id="incorrect-email-message">Incorrect format!</p>
                        <input class="form-field__input form-field__input_email" id="email" maxlength="255" placeholder="Email">

                        <p class="alert-message" id="empty-textarea-message">Empty field!</p>
                        <textarea class="form-field__textarea" id="textarea" autocomplete="off" placeholder="Brief company description (years in business, eLearning experience, and why you want to be an iSpring partner) "></textarea>

                        <p class="form-field__agreement text-content">By clicking "Become a Partner," you confirm that you're agreeing to our <a class="form-field__hyperlink" href="#">Terms</a> and <a class="form-field__hyperlink" href="#">Privacy Policy</a>.</p>

                        <p class="alert-message" id="existed-email-message">This email is already exists!</p>
                        <p class="success-message" id="success-message">Sent successfully!</p>
                        <input class="form-field__button" type="submit" name="main-submit-button" id="submit-button" value="Become a Partner">
                    </div>
                </div>
            </form>
        </div>

    </main>

    <footer class="footer-block">
        <div class="footer-block__company-info">
            <img class="footer-block__logo" src="../images/ispring-footer-logo.svg" alt="Ispring">
            <p class="footer-block__text-content footer-block__text-content_company-info">© 2001-2020 iSpring Solutions Inc. All rights reserved.</p>
            <p class="footer-block__text-content footer-block__text-content_company-info "><a class="footer-block__text-content footer-block__text-content_hyperlink" href="#">Terms of Use</a> | <a class="footer-block__text-content footer-block__text-content_hyperlink" href="#">Privacy Policy</a></p>
        </div>
        <div class="footer-block__form">
            <form id="subscribe-form" action="#" method="POST">
                <p class="footer-block__title">Subscribe to our newsletters</p>
                <p class="footer-block__text-content footer-block__text-content_subscribe">By clicking “Subscribe”, you agree to our Privacy Policy. All emails include an unsubscribe link, so you can opt-out at any time.</p>

                <p class="alert-subscribe-message" id="empty-subscribe-email-message">Empty field!</p>
                <p class="alert-subscribe-message" id="incorrect-subscribe-email-message">Incorrect format!</p>
                <p class="alert-subscribe-message" id="existed-subscribe-email-message">This email is already exists!</p>
                <p class="success-subscribe-message" id="success-subscribe-message">Sent successfully!</p>

                <div class="subscribe-form-field">
                    <input class="subscribe-form-field__input" id="subscribe-email" maxlength="255" placeholder="Email">
                    <input class="subscribe-form-field__button" type="submit" name="subscribe-button" id="subscribe-button" value="Subscribe">
                </div>
            </form>
        </div>

    </footer>

    <script type="module" src="js/slider-script.js"></script>
    <script src="js/index-script.js"></script>

</body>

</html>