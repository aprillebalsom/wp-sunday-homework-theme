<!-- importing the header -->
<?php get_header(); ?>

<div id="primary" class="content-area">

    <main id="id" class="site-main" role="main"> 

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">

                <h1>Sunday Homework</h1>

            </header>

            <div class="entry-content">

                <p>created on a sunday morning with coffee in hand</p>

            </div>

        </article>

    </main>

</div>

<?php get_sidebar(); ?>
    
<?php get_footer(); ?>