 <footer>
    <div class="footer">
      <div class="container-full">
        <div class="row">
          <div class="col-md-3">
            <div class="text-copyright">
              <p>Copyright © 2016 Mahota</p>
            </div>
          </div>
          <div class="col-md-5 ">
            <div class="social-footer">
              <ul>
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-google-plus"></i></li>
                <li><i class="fa fa-twitter"></i></li>
                <li><i class="fa fa-youtube-play"></i></li>
                <li><i class="fa fa-instagram"></i></li>
              </ul>
             </div>
           </div> 
          <div class="col-md-4 col-lg-push-1">
              <nav class="menu menu--juno">
               <?php wp_nav_menu(array('menu'=>'footer-navigation', 'menu_class'=> 'menu__list',)); ?>
            </nav>
        
          </div><!-- end col-md-4-->  
        </div><!--end of row-->
      </div><!-- end of container-full-->
  </div>
 </footer>    
  </main> <!-- cd-main-content -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url');?>/js/main.js"></script> <!-- Resource jQuery -->
<script src="<?php echo bloginfo('template_url');?>/js/bootstrap.min.js"></script> <!-- Resource jQuery -->
<script type="text/javascript" src="<?php echo bloginfo('template_url');?>/js/jquery.jscrollpane.min.js"></script>
<script src="<?php echo bloginfo('template_url');?>/js/classie.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url');?>/js/box.js"></script>
<script type="text/javascript" id="sourcecode">
  $(document).ready(function(){
   $('.scroll-pane').jScrollPane();
  });
</script>
<?php wp_footer(); ?>
</body>
</html>
