<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ModernStoreTheme
 */
    //Gets most recent posts.
    $query_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'post_per_page' => 3,
        'showposts' => 3,
    );
    //Displays posts inside THE LOOP/
    $my_query = new WP_Query($query_args);
    if ($my_query -> have_posts()){
        ?><div class="postsWrapper">
            <section id="recentPosts"> <?
            
        while($my_query -> have_posts()) {
            ?> <article class="postCard"> <?
            $my_query -> the_post();
            ?>
                <? the_post_thumbnail(); ?> 
                <div class = 'postText'>
                <h2 class="postTitle"><? the_title(); ?></h2>
                <? the_excerpt(); ?> </p>
                <a href="<?php the_permalink(); ?>">READ MORE</a>
                </div>

            </article>
            <?php
        }
        ?></section></div> <?
        wp_reset_postdata();
        }
    