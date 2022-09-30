<?php get_header(); ?>
<div id="decor-post1"></div>
<div id="decor-post2"></div>
<div id = "content-post" class='post'>
<?php 
    if(have_posts()): 
        while(have_posts()) : 
            the_post();
			if (has_post_thumbnail()) {
              echo "<div id='thumbnail' class='post'>";
              echo the_post_thumbnail('on-post-thumbnail');
              echo "</div>";
            }
			?>
			<h2 id= "title-post"><?php the_title(); ?></h2>
			<div id="decor-post3"></div>
            <img id="vr-glass" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/05/vr_glasses.png" alt="vr">
            <?php 
			the_content();
        endwhile; 
    endif; 

?>  
    <div id="decor-post4"></div>
    <div id="decor-post5"></div>
    <div id="decor-post6"></div>
    <div id="comment-post">
        <img id="tulis" src="http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/05/feather.png" alt="tulis"><?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>
	</div>
	<script>
      	let pesan = document.createElement("img");
        pesan.setAttribute("src", "http://nolderajatfilm.ub.ac.id/wp-content/uploads/2022/04/visi.png");
        pesan.setAttribute("alt", "pesan");
        pesan.setAttribute("id", "pesan");
        document.querySelector(".comment-form-comment").appendChild(pesan);
	</script>
</div>
<?php get_footer(); ?>