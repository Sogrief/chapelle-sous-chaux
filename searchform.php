<form class="searchForm" action="<?php echo home_url( '/' ); ?>" method="get">
    <input type="text" name="s" id="search" placeholder="rechercher..." value="<?php the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php echo get_template_directory_uri(); ?>/dist/sources/icones/search.svg" />
</form>