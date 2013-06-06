<?php
/*
Template Name: Single Event
*/

get_header();


?>

<div class="content-full">


<div class="faculty faculty-individual">
        <div class="member">
            <div class="details">
                <div class="details-inner">
                	<img src='<?php the_field('event_image'); ?>' alt='event_image'>
                    <h3><a href="<?php the_permalink(); ?>"><span class="title"><?php the_field('event_name'); ?></span> <?php the_field('event_location'); ?> <?php the_field('event_date'); ?></a></h3>
                    <h4><?php the_field('event_time'); ?></h4>
                   
                    <div class="email">
                        <a href="<?php the_field('twitter_handle'); ?>"><?php the_field('event_website'); ?></a>
                    </div>
                </div>
            </div>
        </div>
 

</div>

</div>

<div class="clear"></div>

<?php get_footer(); ?>
