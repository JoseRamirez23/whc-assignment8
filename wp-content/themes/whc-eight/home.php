<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-eight
 */

get_header();
?>

    <section id="sec" style="background-image:url(<?php echo( get_header_image() ); ?>); background-size:cover;">

    <div class="row text-center">

    <div class="col-sm-12">
    <h2>We are Very capable digital agency</h2>
    </div>

    <div class="col-sm-12">
        <p>
        Lorem ipsum dolor sit amet consectetur
         adipisicing elit. Deserunt, suscipit 
         nostrum odio nobis, iusto quam non at 
        </p>
    </div>

    <div class="col-sm-12">
    <button type="button" id="buyIt">PURCHASE NOW</button>
    </div>


    </section>

    <section id="secTwo">
        <div class="row text-center">
            <div class="col-sm-12">
            <h2>Welcome to digency</h2>
            </div>
            <div class="col-sm-12">
            <p>Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Deserunt, suscipit 
            nostrum odio nobis, iusto quam non at</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 col-sm-12">
                <div class="circle">
            <i class="fas fa-pen-nib"></i>
                </div>
                <h3>Clean Design</h3>
                <p>Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Deserunt, suscipit 
            nostrum odio nobis</p>
            </div>

            <div class="col-md-4 col-sm-12">
            <div class="circle">
            <i class="fas fa-desktop" aria-hidden="true"></i>
            </div>
        
            <h3>Web Development</h3>
            
                <p>Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Deserunt, suscipit 
            nostrum odio nobis</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="circle">
            <i class="fas fa-chart-bar"></i>
                </div>
            <h3>Market Analysis</h3>
                <p>Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Deserunt, suscipit 
            nostrum odio nobis</p>
            </div>
        </div>
    </section>

    <section id="secThree">
        <div class="row text-center">
            <div class="col-3 left-line">
                <h2><i class="fab fa-stack-overflow white"></i> 230</h2>
                <p>Projects Done</p>
            </div>
            <div class="col-3 left-line">
                <h2><i class="fas fa-users white"></i> 789</h2>
                <p>Satisfied Clients</p>

            </div>
            <div class="col-3 left-line">
                <h2><i class="fas fa-coffee white"></i> 580</h2>
                <p>Cup of Coffe</p>
            </div>
            <div class="col-3">
                <h2><i class="fas fa-trophy white" ></i> 129</h2>
                <p>Awards Win</p>
            </div>
        </div>
    </section>

    <section id="secFour">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h3>Our Clients Say</h3>
                <p class="grayText">Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quidem odio cum fugiat 
                    unde. Maiores, tenetur. Molestiae, placeat
                     suscipit amet repudiandae quas omnis quod 
                     ratione nihil numquam 
                    laborum voluptatibus, distinctio est.</p>
                    <p ><b>Thanos</b><br>
                   <p class="grayText"> Happy Client</p>
                
                </p>
            </div>
            <div class="col-md-6 col-sm-12" >
                <div id="person"></div>
            </div>
        </div>
    </section>

    <section id="secFive">
        <div class="row">
            <div class="col-md-6">
                <form>
                <div class="input-group space">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="yourname" type="text" class="form-control" name="yourname" placeholder="Your Name">
  </div>

  <div class="input-group space">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Your Email">
  </div>

  <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

</form>
</div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sapiente facilis laborum omnis nihil accusamus ab eveniet! Velit, qui quibusdam quae ut quod neque labore esse, modi id commodi eos!</p>
                <p><i class="fas fa-thumbtack"></i> 28 Hosep tower, Park street, Fifth Avenue, Malybag, Dhaka<p>
                <p><i class="fas fa-phone"></i> 1-677-124-44227</p>
                <p><i class="fas fa-envelope"></i> info@Templetepath.com</p>
            </div>
        </div>
    </section>

    <section id="secSix">
        <div class="row">
        <div class="col-12">
       <?php dynamic_sidebar('map-1') ?>
        </div>
        </div>
    </section>

    <section id="secSeven">
        <div class="row text-center">
            <div class="col-12"><h2>Subscribe Newsletter</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing</p>
        </div>
            <div class="col-12">
                <input id="email" type="text"  name="email" placeholder="Your Email"> 
                <button type="button" id="btnColor">Submit</button>      
            </div>
            
        <div class="col-2"><div class="square"><i class="fas fa-wifi"></i></div></div>
        <div class="col-2"><div class="square"><i class="fab fa-instagram"></i></div></div>
        <div class="col-2"><div class="square"><i class="fab fa-twitter"></i></div></div>
        <div class="col-2"><div class="square"><i class="far fa-newspaper"></i></div></div>
        <div class="col-2"><div class="square"><i class="fab fa-facebook-f"></i></div></div>
            
                
                
                
            
            
        
        </div>
    
    </section>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		

		</main><!-- #main -->
    </div><!-- #primary -->
    
    <?php get_footer(); ?>

<?php


