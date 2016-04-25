<ul>
    <?php while(my_latest_posts(7)): // 7 articles ?>
        <li><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></li>
    <?php endwhile; ?>
</ul>