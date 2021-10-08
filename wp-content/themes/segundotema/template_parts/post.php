<div class="post-preview">
  <a href="<?php the_permalink(); ?>">
    <h2 class="post-title">
      <?php the_title(); ?>
    </h2>
  </a>
  <p class="post-meta">Posted by
  <a href="<?php
    echo get_author_posts_url( get_the_author_meta('ID')); 
  ?>"><?php the_author(); ?></a>
  on <?php echo get_the_date(); ?></p>             
</div>
<hr>