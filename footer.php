<footer class="footer_wrp">
	<div class="container">
    <div class="row">

			<div class="col-md-2">
        <?php if ( is_active_sidebar( 'fwidget-1' ) ) : ?>
          <div class="fotr_widgt">
            <?php dynamic_sidebar( 'fwidget-1' ); ?>
          </div>
        <?php else : ?>                
          <div class="fotr_widgt">
            <a href="#"><img src="https://i.ibb.co/BCwtj0C/demo-logo.png" alt="brand logo"></a>
          </div>
        <?php endif; ?>
			</div>

			<div class="col-md-5">
        <?php if ( is_active_sidebar( 'fwidget-2' ) ) : ?>          
          <div class="fotr_widgt">
            <?php dynamic_sidebar( 'fwidget-2' ); ?>
          </div>
          <?php else : ?>   
            <div class="fotr_widgt">
              <h2>Title text</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        <?php endif; ?>
			</div>

			<div class="col-md-2">
        <?php if ( is_active_sidebar( 'fwidget-3' ) ) : ?>
          <div class="fotr_widgt">
            <?php dynamic_sidebar( 'fwidget-3' ); ?>
          </div>
        <?php else : ?> 
          <div class="fotr_widgt">
            <h2>Title text</h2>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        <?php endif; ?>
			</div>

			<div class="col-md-3">
        <?php if ( is_active_sidebar( 'fwidget-4' ) ) : ?>
          <div class="fotr_widgt">
            <?php dynamic_sidebar( 'fwidget-4' ); ?>
          </div>
        <?php else : ?> 
          <div class="fotr_widgt">
            <h2>Social contact</h2>
            <ul>
              <li><a href="#"> <img src=""> </a></li>
              <li><a href="#"> <img src=""> </a></li>
              <li><a href="#"> <img src=""> </a></li>
            </ul>
          </div>
        <?php endif; ?>
			</div>
     
    </div> <!-----footer row end--->
	</div> <!-----footer container end--->
</footer> <!-----footer end--->


<style type="text/css">
.footer_wrp {
  display: block;
  width: 100%;
  background: #333;
  color: #fff;
  padding: 40px 00px;
  font-size: 14px;
  line-height: 1.5em;
  letter-spacing: 1px;
} 
.fotr_widgt {
  padding: 0px 15px 20px 15px;
} 
.fotr_widgt h2 {
  font-size: 18px;
}
.fotr_widgt p {}  
.fotr_widgt a {
  text-decoration: none;
  color: #fff;
}
.fotr_widgt ul {
  list-style: none;
  margin: 0;
  padding: 0;
} 
.fotr_widgt ul li{} 
.fotr_widgt ul li a:hover{
color: darkred;
} 
</style>
