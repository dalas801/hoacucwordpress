
<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" placeholder="Tìm kiếm thông tin về trà nào..." class="b-nav-search_input w-input" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" class="b-nav-search_button cc-light w-button"
            value="<?php echo esc_attr_x( '', 'submit button' ); ?>" />
    
</form>
