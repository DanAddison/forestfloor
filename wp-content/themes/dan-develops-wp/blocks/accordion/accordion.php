<?php
// block for displaying accordion on Plan your Visit page
?>

<div class="block block-accordion">

  <?php while( have_rows( 'accordion_section' ) ): the_row(); ?>

    <div class="accordion-section">

      <div class="accordion-section__head">

        <h3><?php the_sub_field( 'title' ); ?></h3>

      </div><!-- /.accordion-section__head -->
      
      <div class="accordion-section__body">

        <?php the_sub_field( 'content' ); ?>

        <a href="#" class="accordion-close"></a>

      </div><!-- /.accordion-section__body -->

    </div><!-- /.accordion-section -->

  <?php endwhile; ?>

</div><!-- /.block-accordion -->