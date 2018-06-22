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
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <h2 class="news-head">Latest News </h2>
            </div>
        </div>
        <div class="row news-list" *ngFor="let news of newsList" [routerLink]="['latest-news-detail', news.id]">
            <div class="col-md-4 col-sm-4">
                <figure>
                    <img [src]="news.image" alt="{{news.heading}}" class="img-fluid">
                </figure>

            </div>
            <div class="col-md-8 col-sm-8">
                <h4>
                    <a>{{news.heading}}</a>
                </h4>
                <p class="news-author-days">
                    <span>{{news.author}}</span> |
                    <span>{{news.days}}</span>
                </p>
                <p>{{news.desc}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
         <div class="box">
                             <?php if(is_active_sidebar('box1')): ?>
                             <?php dynamic_sidebar('box1'); ?>
                            <?php endif; ?>
 
                         </div>

                    
             
                            <div class="box">
                            <?php if(is_active_sidebar('box2')): ?>
                             <?php dynamic_sidebar('box2'); ?>
                            <?php endif; ?>
                            </div>
   
                    
                      
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



