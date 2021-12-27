<?php
  get_header(); //in clean php include...
?>

  <article class="content px-3 py-5 p-md-5">

  <?php
  //all function are wp commands
    if(have_posts()){
      while(have_posts()){
        the_post();
        the_content();
      }
    }
  ?>

  </article>


<?php
  get_footer();
?>