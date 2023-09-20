<?php get_header(); ?>

<?php $hero = get_field('hero'); ?>

<section>
        <div class="wrapper section-padding padding-border">
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="column nav-gap change-center">
                <h4 class="h4-size gold"><?php echo $hero['small_title']; ?></h4>
                <h1 class="h1-size text-white center"><?php echo $hero['main_title']; ?></h1>
                <p class="p-hero text-white p-max center"><?php echo $hero['paragraph-hero']; ?></p>



                <?php if ($hero['link']) { ?>
                <a href="<?php echo $hero['link']; ?>" class="btn btn-header fit btn-header-change">
                    <?php echo $hero['link_text']; ?>
                </a>
                <?php } ?>


                </div>
            </div>
        </div>
    </section>
    </div>


    <?php $info = get_field('info'); ?>

    <section>
        <div class="wrapper section-normal padding-border blue-background">
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="column align-center nav-gap">
                    <h4 class="h4-size gold"><?php echo $info['gold']; ?></h4>
                    <h2 class="h2-size text-white change-text-center"><?php echo $info['world']; ?></h2>
                    <img src="wp-content/themes/Regal/images/weird.png" class="gold-icon">
                    <p class="p-hero p-max text-center text-white max"><?php echo $info['smallp']; ?></p>
                </div>
            </div>
            <div class="row small-top change-direction">
                <div class="column nav-gap" data-aos="fade-right" data-aos-duration="3000">
                    <img src="wp-content/themes/Regal/images/1.jpeg" class="img-small">
                    <h3 class="h3-size text-white text-center change-left">Personal Consultation</h3>
                    <p class="text-center text-white p-small change-left">We begin by scheduling a personal consultation with you to understand your specific needs and vision for your dream property.</p>
                </div>
                <div class="column nav-gap" data-aos="fade-right" data-aos-duration="3000">
                    <img src="wp-content/themes/Regal/images/3.jpeg" class="img-small">
                    <h3 class="h3-size text-white text-center change-left">Personal Consultation</h3>
                    <p class="text-center text-white p-small change-left">After identifying properties that match your criteria, we arrange exclusive tours for you to experience their opulence firsthand.</p>
                </div>
                <div class="column nav-gap" data-aos="fade-right" data-aos-duration="3000">
                    <img src="wp-content/themes/Regal/images/2.jpeg" class="img-small">
                    <h3 class="h3-size text-white text-center change-left">Personal Consultation</h3>
                    <p class="text-center text-white p-small change-left">When you've found your perfect luxury property, we skillfully negotiate on your behalf to secure the best possible terms and price.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper blue-background padding-border padding-normal padding-change">
            <div class="row">
                <div class="column align-center">
                    <img src="wp-content/themes/Regal/images/gold-alternative.png" class="gold-icon">
                </div>
            </div>
            <div class="row change-direction" data-aos="fade-up" data-aos-duration="1000">
                <div class="column">
                    <img src="wp-content/themes/Regal/images/chair.jpg" class="img-normal">
                </div>
                <div class="column nav-gap">
                    <h4 class="h4-size gold">BEAUTIFUL PROPERTY</h4>
                    <h3 class="h3-size text-white">Luxury Houses with Quality Comfort</h3>
                    <p class="text-white p-max">Experience the epitome of luxury living with our exceptional collection of houses that offer unparalleled comfort.</p>
                    <a href="#" class="btn btn-header fit">
                        EXPLORE PROPERTIES
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper blue-background padding-border padding-normal padding-change">
            <div class="row change-direction" data-aos="fade-up" data-aos-duration="1000">
                <div class="column nav-gap">
                    <h4 class="h4-size gold">EXCLUSIVE PORTFOLIO</h4>
                    <h3 class="h3-size text-white">Prime Locations & Neighborhoods</h3>
                    <p class="text-white p-max">Discover the allure of prime locations and coveted neighborhoods with our selection of luxury properties.</p>
                    <a href="#" class="btn btn-header fit">
                        EXPLORE HOMES
                    </a>
                </div>
                <div class="column">
                    <img src="wp-content/themes/Regal/images/changed.png" class="img-fluid img-square">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper section-normal padding-border blue-background">
            <div class="row">
                <div class="column align-center">
                    <img src="wp-content/themes/Regal/images/gold-alternative.png" class="gold-icon">
                </div>
            </div>
            <div class="row change-direction">
                <div class="column">
                    <img src="wp-content/themes/Regal/images/changed.png" class="card-img hover-image">
                    <div class="row card blue-background hover-div">
                        <div class="column nav-gap">
                            <h4 class="h4-size gold">2 BEDS 2 BATHS 63,898 SQ FT.</h4>
                            <p class="text-white">Belleville, Paris</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="wp-content/themes/Regal/images/houseblack.jpg" class="card-img hover-image">
                    <div class="row card blue-background hover-div">
                        <div class="column nav-gap">
                            <h4 class="h4-size gold">2 BEDS 2 BATHS 63,898 SQ FT.</h4>
                            <p class="text-white">Belleville, Paris</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <img src="wp-content/themes/Regal/images/couch.jpg" class="card-img hover-image">
                    <div class="row card blue-background hover-div">
                        <div class="column nav-gap">
                            <h4 class="h4-size gold">2 BEDS 2 BATHS 63,898 SQ FT.</h4>
                            <p class="text-white">Belleville, Paris</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper blue-background padding-border padding-normal">
            <div class="row">
                <div class="column nav-gap">
                    <h4 class="h4-size gold">DESTINATIONS</h4>
                    <h3 class="h3-size text-white">Our Areas</h3>
                    <p class="text-white p-hero max">Embark on a captivating journey through the most desirable locations that define the pinnacle of luxurious living</p>
                    <a href="#" class="btn btn-header fit">
                        EXPLORE PROPERTIES
                    </a>
                </div>
            </div>
            <div class="row change-direction">
                <div class="column london nav-gap" data-aos="fade-left" data-aos-duration="4000">
                    <img src="wp-content/themes/Regal/images/london.jpg" class="change-width">
                    <p class="text-white p-hero">London</p>
                </div>
                <div class="column nav-gap" data-aos="fade-left" data-aos-duration="4000">
                    <img src="wp-content/themes/Regal/images/newyork.jpg" class="change-width">
                    <p class="text-white p-hero">New York</p>
                </div>
                <div class="column nav-gap" data-aos="fade-left" data-aos-duration="4000"">
                    <img src="wp-content/themes/Regal/images/la.jpg" class="change-width">
                    <p class="text-white p-hero">Los Angles</p>
                </div>
                <div class="column nav-gap" data-aos="fade-left" data-aos-duration="4000">
                    <img src="wp-content/themes/Regal/images/tokyo.jpg" class="change-width">
                    <p class="text-white p-hero">tokyo</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper blue-background section-normal padding-border">
            <div class="row">
                <div class="column grey-background align-center nav-gap card-padding">
                    <img src="wp-content/themes/Regal/images/weird.png" class="gold-icon">
                    <h3 class="text-white h3-size change-text-center">Your Satisfaction Is Paramount</h3>
                    <p class="text-white max text-center">With an unwavering commitment to excellence, our team of experienced professionals is ready to provide personalized assistance and guidance throughout your real estate journey.</p>
                    <a href="#" class="btn btn-gold">GET STARTED</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper slider-background">
            <div class="for_slick_slider single-item">
                <div class="items nav-gap">
                    <div class="align-center col nav-gap">
                        <h4 class="h4-size gold">TESTIMONIALS</h4>
                        <h3 class="h3-size text-white">Client Experiences</h3>
                        <p class="text-white max text-center">Regal Realty's attention to detail and negotiation skills were truly remarkable. What impressed me the most was their dedication to ensuring every aspect of the transaction was handled flawlessly.</p>
                        <div class="row">
                            <div class="column fit">
                                <img src="wp-content/themes/Regal/images/person.webp" class="image-icon">
                            </div>
                            <div class="column">
                                <div class="row">
                                    <div class="column nav-gap person-change">
                                        <div class="icon"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></div>
                                        <p class="p-hero text-white">EMILY HUGHES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="items nav-gap">
                    <div class="align-center col nav-gap">
                        <h4 class="h4-size gold">TESTIMONIALS</h4>
                        <h3 class="h3-size text-white">Client Experiences</h3>
                        <p class="text-white max text-center">Regal Realty's attention to detail and negotiation skills were truly remarkable. What impressed me the most was their dedication to ensuring every aspect of the transaction was handled flawlessly.</p>
                        <div class="row">
                            <div class="column fit">
                                <img src="wp-content/themes/Regal/images/person.webp" class="image-icon">
                            </div>
                            <div class="column">
                                <div class="row">
                                    <div class="column nav-gap person-change">
                                        <div class="icon"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></div>
                                        <p class="p-hero text-white">EMILY HUGHES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="items nav-gap">
                    <div class="align-center col nav-gap">
                        <h4 class="h4-size gold">TESTIMONIALS</h4>
                        <h3 class="h3-size text-white">Client Experiences</h3>
                        <p class="text-white max text-center">Regal Realty's attention to detail and negotiation skills were truly remarkable. What impressed me the most was their dedication to ensuring every aspect of the transaction was handled flawlessly.</p>
                        <div class="row">
                            <div class="column fit">
                                <img src="wp-content/themes/Regal/images/person.webp" class="image-icon">
                            </div>
                            <div class="column">
                                <div class="row">
                                    <div class="column nav-gap person-change">
                                        <div class="icon"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></div>
                                        <p class="p-hero text-white">EMILY HUGHES</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </section>

    <section>
        <div class="wrapper section-normal padding-border  blue-background">
            <div class="row">
                <div class="column">
                    <h4 class="h4-size gold">BLOG</h4>
                    <h3 class="h3-size text-white">Our News & Insights</h3>
                </div>
            </div>
            <div class="row grey-background small-top no-padding change-direction" data-aos="fade-up" data-aos-duration="4000">
                <div class="column">
                    <img src="wp-content/themes/Regal/images/bed.jpg" class="img-normal">
                </div>
                <div class="column nav-gap small-left">
                    <h4 class="h4-size gold">TRENDS</h4>
                    <h3 class="h3-size text-white">Luxury Home Design Trends</h3>
                    <p class="text-white max-p">As we approach the new season, it's a great time to start thinking about how you can update your luxury home with the latest design...</p>
                    <p class="text-white p-hero max-p">Scarlett Gray</p>
                    <a href="#" class="btn btn-header fit">
                        READ MORE
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="blue-background padding-border section-normal">
        <div class="wrapper">
            <div class="row grey-background no-padding change-direction reverse" data-aos="fade-up" data-aos-duration="4000">
                <div class="column nav-gap small-left">
                    <h4 class="h4-size gold">TRENDS</h4>
                    <h3 class="h3-size text-white">Luxury Home Design Trends</h3>
                    <p class="text-white max-p">As we approach the new season, it's a great time to start thinking about how you can update your luxury home with the latest design...</p>
                    <p class="text-white p-hero">Scarlett Gray</p>
                    <a href="#" class="btn btn-header fit">
                        READ MORE
                    </a>
                </div>
                <div class="column">
                    <img src="wp-content/themes/Regal/images/bed.jpg" class="img-normal">
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>