<?php get_header()?>
<body>
 
    <!-- <div class="row">
        <div class='navList__dropDown' id='navList__dropDown'>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
        </div>
    </div> -->
    <main class=' row twelve columns flex-wrapper vertical'>
            
        <header class= ' twelve columns hero-wrapper  relative center'>  
                <div class="row flex-wrapper flex-center">
                        <!-- <nav class=' eleven columns flex-wrapper '>
                            <ul class= ' twelve columns flex-wrapper navList'>
                                <a href='#aboutme'><li class='navList__item' id='listItems'>About Me</li></a>
                                <a href='#skills'><li class='navList__item' id='listItems'>Skills</li></a>
                                <a href='#portfolio'><li class='navList__item' id='listItems'>Portfolio</li></a>
                                <a href='#contact'><li class='navList__item' id='listItems'>Contact</li></a>
                            </ul>
                        </nav> -->
                    </div>
            <div class=" hero-content flex-wrapper  center">

                <div class="hero__img">
                    <img  class='hero__imgPic'src="<?php echo get_template_directory_uri() . '/assets/myImg.jpg' ?>" alt="">
                </div>
                <div class="hero__textContainer">
                    <h1 class='hero-text' id='aboutme'>Hi</h1>
                    <h1 class= 'hero-text'>I<span style='color:#FCCB0A'>'</span>m</h1>
                    <h1 class= 'hero-text'>Jason Taylor</h1>
                    <h5 class= 'hero-text' > A Front End Developer</h5>
                </div>
                
            </div>
        </header>
             
            
    
        <div class="row moveDown ">
            <section class='  flex-wrapper float-box vertical'>
                <div > 
                    <img src="<?php echo get_template_directory_uri() . '/assets/logo.png' ?>" alt="logo" class= "float-box__logo" > 
                </div>
                <p class='float-box__text'>               
                <?php 
                $profile = new WP_Query(
                    array(
                        'post_type'=>'profile',
                        'post_per_page'=>'1'
                    )
                );
                while($profile->have_posts()){
                    $profile->the_post();?>
                    <?php the_content() ?>
                    
               <?php }
                
                              
                wp_reset_postdata(); ?>

                </p>
               
                    <button class='button'>
                    <a href='#highcontact' > Contact Me    </a>
                    </button>
             
               <div class=" flex-wrapper flex-center float-box_socialIcons ">
                    <a href='https://github.com/JasonWayneT' target="_blank"> 
                        <div class='socialIcons'>
                                
                               
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                <title  id="simpleicons-github-icon">GitHub icon</title>
                                <path d="M12,0.3c-6.6,0-12,5.4-12,12c0,5.3,3.4,9.8,8.2,11.4C8.8,23.8,9,23.4,9,23.1c0-0.3,0-1,0-2c-3.3,0.7-4-1.6-4-1.6
                                    c-0.5-1.4-1.3-1.8-1.3-1.8C2.5,17,3.7,17,3.7,17c1.2,0.1,1.8,1.2,1.8,1.2c1.1,1.8,2.8,1.3,3.5,1c0.1-0.8,0.4-1.3,0.8-1.6
                                    c-2.7-0.3-5.5-1.3-5.5-5.9c0-1.3,0.5-2.4,1.2-3.2C5.4,8.1,5,6.9,5.7,5.3c0,0,1-0.3,3.3,1.2c1-0.3,2-0.4,3-0.4c1,0,2,0.1,3,0.4
                                    c2.3-1.6,3.3-1.2,3.3-1.2c0.6,1.7,0.2,2.9,0.1,3.2c0.8,0.8,1.2,1.9,1.2,3.2c0,4.6-2.8,5.6-5.5,5.9c0.4,0.4,0.8,1.1,0.8,2.2
                                    c0,1.6,0,2.9,0,3.3c0,0.3,0.2,0.7,0.8,0.6c4.8-1.6,8.2-6.1,8.2-11.4C24,5.7,18.6,0.3,12,0.3"/>
                                </svg>
                        </div>
                    </a>
                    <a href='https://codepen.io/jasonwaynet/' target="_blank"> 
                        <div class='socialIcons'>
                                
                          
                            
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                 <title  id="Codepen">CodePen icon</title>
                            <g>
                                <path d="M256,0C114.6,0,0,114.6,0,256s114.6,256,256,256s256-114.6,256-256S397.4,0,256,0z M415.9,304.7c0,0.6,0,1.2-0.1,1.8
                                    c0,0.2-0.1,0.4-0.1,0.6c0,0.4-0.1,0.8-0.2,1.2c0,0.3-0.1,0.5-0.2,0.7c-0.2,0.3-0.3,0.7-0.4,1c-0.1,0.3-0.2,0.5-0.3,0.7
                                    c-0.2,0.3-0.3,0.6-0.5,0.9c-0.1,0.2-0.3,0.4-0.4,0.6c-0.2,0.2-0.4,0.5-0.6,0.8c-0.2,0.2-0.3,0.4-0.5,0.6c-0.2,0.2-0.5,0.5-0.7,0.7
                                    c-0.1,0.1-0.3,0.3-0.5,0.5c-0.3,0.3-0.5,0.5-0.8,0.7c-0.2,0.2-0.4,0.3-0.6,0.5c0,0.1-0.1,0.1-0.2,0.2l-146.3,97.5
                                    c-2.3,1.5-4.9,2.3-7.6,2.3c-2.6,0-5.3-0.8-7.6-2.3L102,316.2c-0.1-0.1-0.1-0.1-0.2-0.2c-0.2-0.2-0.4-0.3-0.6-0.5
                                    c-0.3-0.3-0.6-0.5-0.8-0.7c-0.1-0.1-0.3-0.3-0.5-0.5c-0.3-0.2-0.5-0.4-0.7-0.7c-0.2-0.2-0.4-0.4-0.5-0.6c-0.2-0.2-0.4-0.5-0.6-0.8
                                    c-0.1-0.2-0.3-0.4-0.4-0.6c-0.2-0.3-0.4-0.6-0.5-0.9c-0.1-0.3-0.2-0.5-0.3-0.7c-0.2-0.3-0.3-0.7-0.4-1s-0.1-0.5-0.2-0.7
                                    c-0.1-0.4-0.1-0.8-0.2-1.2c0-0.2-0.1-0.4-0.1-0.6c-0.1-0.6-0.1-1.2-0.1-1.8v-97.5c0-0.6,0-1.2,0.1-1.8c0-0.2,0.1-0.4,0.1-0.6
                                    c0-0.3,0.1-0.7,0.2-1.1c0.1-0.3,0.1-0.5,0.2-0.7c0.2-0.3,0.3-0.7,0.4-1c0.1-0.3,0.2-0.5,0.3-0.7c0.2-0.3,0.3-0.6,0.5-0.9
                                    c0.1-0.2,0.3-0.4,0.4-0.6c0.2-0.2,0.4-0.5,0.6-0.8c0.2-0.2,0.3-0.4,0.5-0.6l0.7-0.7c0.1-0.1,0.3-0.3,0.5-0.5
                                    c0.3-0.3,0.5-0.5,0.8-0.7c0.2-0.2,0.4-0.4,0.6-0.5c0.1-0.1,0.1-0.1,0.2-0.2l146.3-97.5c4.7-3.1,10.7-3.1,15.3,0l146.3,97.6
                                    c0.1,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.4,0.3,0.6,0.5c0.3,0.3,0.6,0.5,0.8,0.7c0.1,0.1,0.3,0.3,0.5,0.5c0.3,0.2,0.5,0.4,0.7,0.7
                                    c0.2,0.2,0.4,0.4,0.5,0.6c0.2,0.2,0.4,0.5,0.6,0.8c0.2,0.2,0.3,0.4,0.4,0.6c0.2,0.3,0.4,0.6,0.5,0.9c0.1,0.3,0.2,0.5,0.3,0.7
                                    c0.2,0.3,0.3,0.7,0.4,1c0.1,0.3,0.1,0.5,0.2,0.7c0.1,0.3,0.1,0.7,0.2,1.1c0,0.2,0.1,0.3,0,0.5c0.1,0.6,0.1,1.2,0.1,1.8V304.7z"/>
                                <polygon points="157.9,256 123.5,279 123.5,233 	"/>
                                <polygon points="242.2,312.4 242.2,376.5 134.5,304.7 182.6,272.5 	"/>
                                <polygon points="377.4,304.7 269.7,376.5 269.7,312.4 329.3,272.5 	"/>
                                <polygon points="304.6,256 256,288.5 207.4,256 256,223.5 	"/>
                                <polygon points="388.5,233 388.5,279 354.1,256 	"/>
                                <polygon points="377.5,207.3 329.4,239.5 269.8,199.6 269.8,135.5 	"/>
                                <polygon points="242.3,135.5 242.3,199.6 182.7,239.5 134.6,207.3 	"/>
                            </g>
                            </svg>
                            
                        </div>
                    </a>
              
                   
                    <a href='https://www.linkedin.com/in/jasonwaynetaylor/' target="_blank" >
                        <div class='socialIcons'>
                                
                                <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                <title  id="simpleicons-linkedin-icon">LinkedIn icon</title>
                                <path d="M20.4,20.5h-3.6v-5.6c0-1.3,0-3-1.9-3c-1.9,0-2.1,1.4-2.1,2.9v5.7H9.4V9h3.4v1.6h0c0.5-0.9,1.6-1.9,3.4-1.9
                                    c3.6,0,4.3,2.4,4.3,5.5L20.4,20.5L20.4,20.5z M5.3,7.4c-1.1,0-2.1-0.9-2.1-2.1c0-1.1,0.9-2.1,2.1-2.1c1.1,0,2.1,0.9,2.1,2.1
                                    C7.4,6.5,6.5,7.4,5.3,7.4z M7.1,20.5H3.6V9h3.6V20.5z M22.2,0H1.8C0.8,0,0,0.8,0,1.7v20.5c0,1,0.8,1.7,1.8,1.7h20.5
                                    c1,0,1.8-0.8,1.8-1.7V1.7C24,0.8,23.2,0,22.2,0L22.2,0z"/>
                                </svg>   
                        </div>
                    </a>
                </div> 
            </section>
        </div>
        <div class="container-fluid">
            <div class="row">
            <section class= "primaryImage twelve columns flex-wrapper vertical  row">
                <h2 class="content-header talignCenter  spacer "><span style="color: #FCCB0A" >01</span> Showcase</h2>
                <h4 class= 'talignCenter'>Recent Highlights</h4>
                    <div class=" flex-wrapper  vertical noWrap">
                    
                        <div class="hightlight__container">
                        <?php $showCase = new WP_Query( array(
                            'post_type'=>'showcase',
                            'post_per_page'=>1
                        ) );

                        while($showCase->have_posts()){
                            $showCase->the_post();?>
                            <div class="half alignSelfStart">
                                <div class="highlight__thumbnail">
                                    <img src="<?php echo get_field('thumbnail')['sizes']['large']?>" alt="">
                                </div>
                                <div class="highlight__buttons">
                                    <button class="button--small"> <a href="<?php echo esc_url(the_permalink())?>">More Info</a></button>
                                    <button class="button--small"><a href="<?php echo esc_url(get_field('link'))?>">Check Out the Site</a></button>
                                </div>
                            </div>
                            <div class="half">
                            <div class="highlight__description">
                                    <div class="highlight__descriptionTitle">
                                        <h4><?php the_title()?></h4>
                                    </div>
                                    <div class="highlight__descriptionBody">
                                        <p><?php the_content()?></p>
                                    </div>
                                </div>
                             </div>
                        <?php }  wp_reset_postdata();  ?>      
                            
                           
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row relative"> 
                <section class= "portfolio twelve columns flex-wrapper vertical bringUp row" id='portfolio'>
        
                    <h2 class="content-header "><span style="color: #FCCB0A" >02</span> Portfolio</h2>
                    <h4 class="talignCenter">Check out my recent work</h4>
                    <div class="imgContainer">  
                        
                        <?php $entryPosts = new WP_Query( array(
                            'post_type'=>'pentry',
                            'post_per_page'=>-1
                        ) );
                        
                        while($entryPosts->have_posts()){
                            $entryPosts->the_post();?>
                            
                                <div class="portfolio__imgWrapper">
                                    <div class="portfolio__imgOverlay">
                                        <h4> <?php echo get_the_title()?></h4>
                                        <button class="button--single"> <a href="<?php echo esc_url(the_permalink())?>">More Info</a></button>
                                        <button class="button--single"><a href="<?php echo get_field('link')?>">Check Out the Site</a></button>
                                    </div>
                                    <img class="portfolio__img"src="<?php echo get_field('img')['sizes']['large']?> ">               
                                </div>
                        <?php wp_reset_postdata(); } ?>       
                    </div> 
                </section>
            </div>
        </div>

        <span class='contactfix' id='highcontact'></span>
        <div class="displaynone indexUp">
        <div class= "indexUp relative shrink row">
            <section class=' center  moveUp flex-wrapper float-box '>
                <div class='flex-wrapper vertical'>
                    <div class= 'flex-wraper vertical' > 
                        <h2><span style="color: #FCCB0A" class='center' > 03</span> </span>Contact</h2>
                        <h3 class= 'float-box__text--h3'>
                            Let's Talk
                        </h3> 
                        <p class="float-box__text"> 
                            Jason.Wayne.T@gmail.com
                        </p>
                    </div>
                    <form action= 'contactform.php' method="post" class = 'center flex-wrapper vertical' id='ajax-contact'>
                        <input type="text" name='name' placeholder="Full Name" id='name' required>
                        <input type="text" name="email" placeholder="Email" id='email' required >
                        <input type="text" name="subject" placeholder="Subject" id='subject'>
                        <input type="text" name="message" placeholder="Message" id='message' required>
                        <button type='submit' name='submit' class='button' id='submitbtn'>Send</button>  
                    </form>
                </div>    
            </section>
        </div>
    </div>

        <div class="row relative mobileHide ">
            <div class= "mobileHide twelve columns secondaryImage">
                 <p style='display:flex; justify-content:flex-end; align-content:flex-end'></p> 
            </div>
        </div>
    </main>
    <?php get_footer()?>
    

  