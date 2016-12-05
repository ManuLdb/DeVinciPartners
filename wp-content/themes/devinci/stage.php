<?php
// Template Name: Stage
?>

<?php get_header(); ?>
<main id="stage">
    <h1>Stages & Alternances </h1>
    <ul>
        <?php
        $recentPosts = new WP_Query();
        $recentPosts->query('category_name=stage & showposts=10');
        ?>
        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>


                <div class="row">
                    <div class="col s12 m6 contain" >
                        <div class="card darken-1  hoverable">
                            <div class="card-content">
                                <h2><span class="card-title"><?php the_field('titre'); ?></span></h2>
                                <p>
                                    <?php the_field('description'); ?>
                                </p>
                                <p>
                                    <?php the_field('contact_mail'); ?>
                                </p>
                                <p>
                                    <?php the_field('contact_tel'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


        <?php endwhile; ?>
    </ul>

</main>
<?php get_footer(); ?>
