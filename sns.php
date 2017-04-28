<div class="button-area">
   <div class="button-whole">
      <a class="button-link opensub" id="twitter"
         href="http://twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&amp;<?php echo urlencode(get_permalink()); ?>&amp;url=<?php echo urlencode(get_permalink()); ?>"
         target="_blank" title="Twitterで共有">
         <i class="fa fa-twitter"></i>
         <span class="text">Twitter</span>
      </a>
   </div>
   <div class="button-whole">
      <a class="button-link opensub" id="facebook"
         href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&amp;t=<?php echo urlencode(the_title("","",0)); ?>"
         target="_blank" title="Facebookで共有">
         <i class="fa fa-facebook"></i>
         <span class="text">facebook</span>
      </a>
   </div>
   <div class="button-whole">
      <a class="button-link opensub" id="ggl-plus" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>"
         target="_blank" title="Google+で共有">
         <i class="fa fa-google-plus"></i>
         <span class="text">Google+</span>
      </a>
   </div>
   <div class="button-whole">
      <a class="button-link opensub" id="hatena"
         href="http://b.hatena.ne.jp/add?mode=confirm&amp;url=<?php echo urlencode(get_permalink()); ?>&amp;title=<?php echo urlencode(the_title("","",0)); ?>"
         target="_blank"
         data-hatena-bookmark-title="<?php the_permalink(); ?>"
         title="このエントリーをはてなブックマークに追加">
         <strong>B!</strong>
         <span class="text">はてブ</span>
      </a>
   </div>
   <div class="button-whole">
      <a class="button-link opensub" id="pocket"
         href="http://getpocket.com/edit?url=<?php echo urlencode(get_permalink()); ?>"
         target="_blank" title="pocketで共有">
         <i class="fa fa-get-pocket"></i>
         <span class="text">pocket</span>
      </a>
   </div>
</div>