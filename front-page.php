<?php

show_admin_bar( true );
get_header();

get_template_part( 'sections/navbar' );
get_template_part( 'sections/slide-bar' );
get_template_part( 'sections/banner' );
get_template_part( 'sections/home-section' );
get_template_part( 'sections/about-section' );
get_template_part( 'sections/partners-section' );
get_template_part( 'sections/team-section' );
get_template_part( 'sections/career-section' );
get_template_part( 'sections/contact-section' );

get_footer();
