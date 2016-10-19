<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="home-page-wrapper">
    <div class="home-banner pattern-overlay opacity-45">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <h1>Leading by experience.</h1>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper bg-white">
        <div class="container introduction-wrapper">
            <div class="row">
                <div class="col-md-8 offset-md-2 introduction">
                    <h2>Professionals in Community Management</h2>
                    <p>Forth Group specializes in Chicago community management in the city and nearby neighbourhoods. Our staff is comprised of seasoned professionals and our services are based on the latest web access technology for condominium and community associations. We utilize best practices within the community association industry to deliver excellent service at fixed rates.</p>
                </div>
            </div>
            <div class="row">
                <figure class="col-md-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-leading.png" alt="">
                    <figcaption>Leading by experience</figcaption>
                </figure>
                <figure class="col-md-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-tech.png" alt="">
                    <figcaption>Commitment <br> to Technology</figcaption>
                </figure>
                <figure class="col-md-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-dedication.png" alt="">
                    <figcaption>Dedication <br> to Service</figcaption>
                </figure>
                <figure class="col-md-3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-investment.png" alt="">                
                    <figcaption>Adding value to your Investment</figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="content-wrapper bg-light-green">
        <div class="container testimonial-wrapper">
            <div class="row">
                <div class="col-md-7">
                    <blockquote>
                        <p>Our building is managed by the Forth Group and they've been wonderful. Very responsive and honest. There were several incidents at our building that required thier response in the middle of the night and they have not failed us. Plus they are so close by they often respond within minutes. Thanks guys. Two thumbs up!</p>
                        <footer>Sam Y., Chicago</footer>
                    </blockquote>
                </div>
                <div class="col-md-5">
                    <?php // video goes here ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
