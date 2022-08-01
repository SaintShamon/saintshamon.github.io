<?php 
    /*
    Template Name: Make An Enquery
    */
?>
<?php get_header(); ?>
<main class="has-sidebar" >
    <section class="heroWrapper">
        <div class="hero">
            <div class="hero__background"><img src="<?php echo get_template_directory_uri() . '/build/img/make_an_enquire_hero_background.png'; ?>" alt=""></div>
            <div class="container hero__content">
                <div class="hero__logo"><a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri() . '/build/img/logo.svg'; ?>" alt=""></a></div>
                <h1 class="hero__title">MAKE AN <br>ENQUIRY</h1>
            </div>
        </div>
        <div class="menu">
            <div class="menu__iconWrapper">
                <div class="menu__icon"><img src="<?php echo get_template_directory_uri() . '/build/img/menu_icon.svg'; ?>" alt=""></div>
            </div>
        </div>
    </section>
    <div class="container">
        <?php get_template_part('template-parts/global/breadcrumbs'); ?>
        <div class="components">
            
            <section class="formBlock">
                <div class="formBlock__text content-block">
                    <h3>Make An En Quiry</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="separator"></div>
                <div class="formBlock__wrapper">
                    <form action="">
                        <div class="input-wrapper">
                            <div class="input-title">Title</div>
                            <select name="" id="">
                                <option value="" selected disabled>Select</option>
                                <option value="">Title 1</option>
                                <option value="">Title 2</option>
                            </select>
                        </div>
                        <div class="input-wrapper">
                            <div class="input-title">First Name</div>
                            <input type="text">
                        </div>
                        <div class="input-wrapper">
                            <div class="input-title">Surname</div>
                            <input type="text">
                        </div>
                        <div class="input-wrapper">
                            <div class="input-title">School</div>
                            <input type="text">
                        </div>
                        <div class="input-wrapper">
                            <div class="input-title">Email Address</div>
                            <input type="text">
                        </div>
                        <div class="input-wrapper">
                            <div class="input-title">Enquiry</div>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form_button_wrapper"><input type="submit" value="Submit"></div>
                    </form>
                </div>
            </section>
            <section class="testimonials">
                <h2 class="testimonials__title">What our staff say “</h2>
                <div class="testimonials__list">
                    <div class="testimonials__item">
                        <div class="testimonials__itemText">Particular highlights were the residential weekend. I felt the programme was bespoke; an aspect of professional development I feel is lacking in many senior leadership courses.</div>
                        <div class="testimonials__itemSubtext">Aspiring Senior Leadership Programme</div>
                    </div>
                    <div class="testimonials__item">
                        <div class="testimonials__itemText">Particular highlights were the residential weekend. I felt the programme was bespoke; an aspect of professional development I feel is lacking in many senior leadership courses.</div>
                        <div class="testimonials__itemSubtext">Aspiring Senior Leadership Programme</div>
                    </div>
                    <div class="testimonials__item">
                        <div class="testimonials__itemText">Particular highlights were the residential weekend. I felt the programme was bespoke; an aspect of professional development I feel is lacking in many senior leadership courses.</div>
                        <div class="testimonials__itemSubtext">Aspiring Senior Leadership Programme</div>
                    </div>
                </div>
            </section>
            <section class="cta">
                <div class="cta__backgroundImage"><img src="<?php echo get_template_directory_uri() . '/build/img/get_in_touch_background.png'; ?>" alt=""></div>
                <div class="cta__content">
                    <h2 class="cta__title">Get in touch</h2>
                    <div class="cta__button">
                        <a href="#" class="btn">Contact us</a>
                    </div>
                </div>
            </section>
        </div>
        <div class="sidebar">
            <div class="sidebar__links">
                <div class="sidebar__link">
                    <a href="#">Overview</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">Strategic Partners</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">Alliance Partners</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">HCTSA Calendar</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">News</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">Our Programmes</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">Venues</a>
                </div>
                <div class="sidebar__link active">
                    <a href="#">Enquiry Form</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">Image Gallery</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">Resources</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">HCTSA Governance Group</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">Links</a>
                </div>
                <div class="sidebar__link">
                    <a href="#">HCTSA Brochure</a>
                </div>
            </div>
            <div class="sidebar__separator separator"></div>
            <h4 class="sidebar__blockTitle">News</h4>
            <div class="sidebar__block">
                <div class="sidebar__image"><img src="<?php echo get_template_directory_uri() . '/build/img/sidebar__image.png'; ?>" alt=""></div>
                <div class="sidebar__text text-lg">HCTSA Brochure <br>2020 - 2021</div>
                <div class="sidebar__button">
                    <a href="#" class="btn">View Brochure </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>