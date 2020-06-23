<article <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <div class="thumbnail">
        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
    </div>
    <div class="meta-info">
        <p>
            by<span> <?php the_author_posts_link(); ?></span>
            <span>Categories <?php the_category(' '); ?></span>
            <?php the_tags('Tags: <span>', ', ','</span>'); ?>
        </p>
    </div>
    <p><?php the_excerpt(); ?></p>
</article>