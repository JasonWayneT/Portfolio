<?php get_header()?>
<div class="container-fluid">
    <div class="row">
        <header class= ' col-12 hero__wrapper--single'> 
                <h1 class='hero-text--single'><?php the_title()?></h1>
                <a href="<?php echo esc_url(site_url())?>"> <p>Home</p></a>
        </header>
    </div>
</div>
<div class="container">
    <div class="row col-12 flex-wrapper vertical">
        <div class="single__heading">
            <div class="single__thumbnail">
            <a href="<?php echo get_field('link')  ?>"> <img class="single__img"src="<?php echo get_field('img')['sizes']['large']?> ">   </a>
            </div>
            
            <div class="single__bullets ">
                <h2>Technologies Used:</h2>
                        <ul>
                            <li><h3><?php echo get_field('technology1')?></h3></li>
                            <li><h3><?php echo get_field('technology2')?></h3></li>
                            <li><h3><?php echo get_field('technology3')?></h3></li>
                        </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 single__content float-box">
           <h2 class="underline"><?php the_title()?></h2>
           <h4><?php echo get_field('description') ?></h4>
           <div>
           <a href="<?php echo get_field('link')  ?>"><button class="button--single">Check Out the Site</button></a>
           <a href="<?php echo get_field('git_link')['url']  ?>"><button class="button--single">Check Out the Code</button></a>
        </div>
        </div>
    
    </div>
</div>

<?php get_footer()?>


