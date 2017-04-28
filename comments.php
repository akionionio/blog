        <div id="comment-area">
          <?php if ( have_comments() ) :?>
            <h3 id="comments">Comment</h3>
            <ol class="commets-list">
              <!-- comment -->
              <?php wp_list_comments( 'avatar_size=55' ); ?>
              <!-- /comment -->
            </ol>
          <?php endif; ?>
        </div>
<?php $args = array(
'title_reply' => 'Leave a Reply',
'label_submit' => 'Submit Comment',
);
comment_form( $args ); ?>