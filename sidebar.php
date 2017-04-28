      <!-- sidebar -->
      <div id="sidebar">
      <?php if( is_active_sidebar( 'sidebar-1' ) ) :
      dynamic_sidebar( 'sidebar-1' );
      else: ?>
        <div class="widget">
          <h2>No widget</h2>
          <p>ウィジェットは設定されていません。</p>
        </div>
      <?php endif; ?>
      </div>
      <!-- /sidebar -->