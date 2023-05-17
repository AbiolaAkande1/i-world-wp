<?php
/**
 * Template name: Front Page
 * 
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TechIT
 */

 get_header();

 $page_id = get_the_ID();

?>

<!-- THIS IS THE HERO SECTION -->
<section class="hero-section">
    <div class="site-wrapper">
        <div class="hero-section-wrapper"> 
            <!-- THIS IS THE HERO SECTION TEXT -->
            <div class="hero-section-text">
                <h2><?php the_field('hero_section_heading', $page_id); ?></h2>
                <p><?php the_field('hero_section_content', $page_id); ?></p>
            </div>
            <!-- THIS IS THE HERO SECTION IMAGE -->
            <div class="hero-section-image">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/hero-image.png" alt="hero-image">
            </div>
        </div>
    </div>
</section>

<!-- THIS IS THE HIGHER EDUCATION SECTION-->
<section class="higher-education-section">
    <div class="site-wrapper">
        <div class="higher-education-wrapper">
            <!-- THIS IS THE HIGHER EDUCATION HEADING-->
            <div class="higher-education-heading">
                <h1><?php the_field('higher_education_heading', $page_id); ?></h1>
                <img src="<?php echo get_template_directory_uri();?>/assets/icons/border.png" alt="border">
            </div>

            <!-- THIS IS THE FIRST CARD FOR THIS SECTION-->
            <div class="hostel-card">
                <?php $hostel_card = get_field('higher_education_content', $page_id); 
                    $hostel_heading = $hostel_card['hostel_heading'];
                    $hostel_title = $hostel_card['hostel_title'];
                    $hostel_text = $hostel_card['hostel_text'];
                    $hostel_button = $hostel_card['hostel_button'];
                ?>

                <!-- THIS IS THE HOSTEL CARD TEXT -->
                <div class="hostel-card-text">
                    <span>
                        <h4><?php echo $hostel_heading;?></h4>
                    </span>
                    <h2><?php echo $hostel_title;?></h2>
                    <p><?php echo $hostel_text;?></p>
                    <button><?php echo $hostel_button;?></button>
                </div>

                <!-- THIS IS THE HOSTEL CARD IMAGE -->
                <div class="hostel-card-image">
                    <span>
                        <img src="<?php echo get_template_directory_uri();?>/assets/icons/hotel-icon.png" alt="hotel-icon">
                    </span>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/hotel-image.png" alt="hotel-image">
                </div>
            </div>

            <!-- THIS IS THE SECOND CARD FOR THIS SECTION-->
            <div class="campus-card">
                <?php $campus_card = get_field('higher_education_content_2', $page_id); 
                    $campus_heading = $campus_card['campus_heading'];
                    $campus_title = $campus_card['campus_title'];
                    $campus_text = $campus_card['campus_text'];
                    $campus_button =$campus_card['campus_button'];
                ?>

                <!-- THIS IS THE CAMPUS CARD IMAGE-->
                <div class="campus-card-image">
                    <span>
                        <img src="<?php echo get_template_directory_uri();?>/assets/icons/hotel-icon.png" alt="hotel-icon">
                    </span>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/campus-image.png" alt="campus-image">
                </div>

                <!-- THIS IS THE CAMPUS CARD TEXT-->
                <div class="campus-card-text">
                    <span>
                        <h4><?php echo $campus_heading;?></h4>
                    </span>
                    <h2><?php echo  $campus_title;?></h2>
                    <p><?php echo $campus_text;?></p>
                    <button><?php echo $campus_button;?></button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
get_footer();