	<footer role="contentinfo">
		<?php get_sidebar('footer'); ?>
		<div class="site-info container">
			<small>&copy; <?php bloginfo('name'); ?> <time datetime="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></time></small>
		</div>
	</footer>

<?php wp_footer(); ?>
<script>
	var navigation = responsiveNav(".nav-collapse", {
    	animate: true,                    // Boolean: Use CSS3 transitions, true or false
        transition: 284,                  // Integer: Speed of the transition, in milliseconds
        label: "Menu",                    // String: Label for the navigation toggle
        insert: "after",                  // String: Insert the toggle before or after the navigation
        customToggle: "",                 // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative",              // String: Position of the opened nav, relative or static
        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
        jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
        init: function(){},               // Function: Init callback
        open: function(){},               // Function: Open callback
        close: function(){}               // Function: Close callback
    });
</script>
</body>
</html>