<?php
  $args = array(
    'prev_text' => '&lt; ',
    'next_text' => ' &gt;',
  );
?>

<?php if( paginate_links( $args ) ) : ?>

<div class="row row--pad row__pagination">

  <div class="pagination">

    <?php echo paginate_links( $args ); ?>

  </div><!-- pagination -->

</div><!-- row -->

<?php endif; ?>