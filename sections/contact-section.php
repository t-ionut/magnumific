<div class="section" id="contact">
    <a class="anchor" name="contact"></a>
    <section id="contactsection">
        <div class="banner">
            <div class="container">
                <div class="content">
                    <p class="title"><?php _e( 'Contact', 'mgm' ); ?>
                    </p>
                </div>
            </div>    
        </div>
    </section>
    <div id="contact-details">
        <div id="map">
            <?php get_map(); ?>
        </div>
        <div id="contact-form">
            <p class="title">Email</p>
            <?php echo do_shortcode( '[contact-form-7 id="66" title="Email"]' ); ?>
        </div>
        <div id="address">
            <p class="title">Adresă</p>
            <p class="bold">Adresă:</p>
            <p>Strada Aurel Vlaicu 74, Satu Mare 440122</p>
            <p class="bold">Telefon:</p>
            <p>0261 712 110</p>
        </div>
    </div>
    <!-- GRAVITY FORMS OR SOMETHING ELSE WILL GO HERE -->
</div>
