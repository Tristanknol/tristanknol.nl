<footer class="red-background">
    <div class="container p-4">
        <div class="row text-white">
            <?php dynamic_sidebar('footer'); ?>
        </div>
    </div>
</footer>
<div class="background-dark-red py-2">
    <div class="container">
        <div class="row justify-content-center justify-content-md-between flex-md-row flex-column text-white text-center text-md-left">
            <div class="col-12 col-md-6">© <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>.<a
                    style="color:#cacbcd;" class="pl-4" href="<?php echo get_site_url(); ?>/privacy-policy">Privacy
                    policy</a></div>
            <a class="col-12 col-md-6 text-right  text-center text-md-right mt-2 mt-md-0 text-white op-50"
               href="tristanknol.nl">Website gemaakt door <b>Tristan Knol</b></a>
        </div>
    </div>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>