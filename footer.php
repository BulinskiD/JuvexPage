   <footer id="foot"><span class="footerinfo d-lg-inline-block d-none">Projekt graficzny: Eliza Kuciakowska, Kodowanie: Dawid Buliński, Powered by Wordpress</span>
   	<span class="contact">
   		<strong class="d-none d-lg-inline">e-mail: <a style="text-decoration: none; color: #17A1A5;" href="mailto:<?php echo get_option('mail'); ?>"> 
   			<?php echo get_option('mail'); ?></a><br /></strong>
   			<strong>tel. <a style="text-decoration: none; color: #17A1A5;" href="tel:<?php echo get_option('tel'); ?>"><?php echo get_option('tel'); ?></a></strong><br/>
   			Działamy na terenie miasta Kraków - Kliny, Ruczaj.
   	</span>
   		<span class="fb"><a href="https://www.facebook.com/KursyNaukaJazdy/" rel="nofollow" target="_blank"><img src="<?php  echo get_template_directory_uri(); ?>/images/f-ogo_RGB_HEX-100.svg" alt="facebook logo" style="height:100%;" /></a></span>

   </footer>
   <?php wp_footer(); ?> 

</body>
</html>