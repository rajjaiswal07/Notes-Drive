<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<br><br>
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
     <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
     <script type="text/javascript" src="js/bootstrap.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<img src="images/slider/notes.jpg" alt="" title=""/>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Notes Drive</h2><p>Now easily manage all kind of notes by uploading them here.</p></div>
                </div>
	    	</li>
			<li>
	    		<img src="images/slider/study_material.jpg" alt="" title=""/>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Notes Drive</h2><p>All Kinds of Notes uploaded by students.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<img src="images/slider/vesitLogo.jpg" alt="" title=""/>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Upload Various Files</h2><p>User can upload various types of files like PDF, PPT, DOC etc..</p></div>
                </div>
	    	</li>
	    	<li>
	    		<img src="images/slider/vesit1.png" alt="" title=""/>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Controled By Admin</h2><p>Everying is managed and controled by administrator</p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
    </div>  
</div>
</body>
</html>









































<?php include 'includes/footer.php';?>

        