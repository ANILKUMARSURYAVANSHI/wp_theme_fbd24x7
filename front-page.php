       <?php get_header(); ?> 

 <section class="showcase">
             <div class="container">
                 <h1><?php echo get_theme_mod('showcase_heading','Custome wordpress Theme'); ?> </h1>
                 <p><?php echo get_theme_mod('showcase_text','this is the demo page for the site'); ?></p>
                 <a href="<?php echo get_theme_mod('btn_url','http://faridabad24x7.com' );?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text','Get Started'); ?></a>

             </div>
</section>
         <section class="boxes">
             <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="box">
                             <?php if(is_active_sidebar('box1')): ?>
                             <?php dynamic_sidebar('box1'); ?>
                            <?php endif; ?>
 
                         </div>

                     </div>
                     <div class="col-md-4">
                            <div class="box">
                            <?php if(is_active_sidebar('box2')): ?>
                             <?php dynamic_sidebar('box2'); ?>
                            <?php endif; ?>
                            </div>
   
                        </div>
                        <div class="col-md-4">
                                <div class="box">
                                   
                                <?php if(is_active_sidebar('box3')): ?>
                             <?php dynamic_sidebar('box3'); ?>
                            <?php endif; ?>
                                </div>
       
                            </div>

                 </div>

             </div>



         </section>

       <?php get_footer(); ?> 



