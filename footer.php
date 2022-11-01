</div>
<footer class="footer">
    <div class="container flex flex-col lg:flex-row justify-between items-center w-full">

        <a href="/" class="logoPro">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.svg" alt=""/>
        </a>

        <div class="flex flex-col items-center lg:items-end">
            <?php
                wp_nav_menu(
                    array(
                    'theme_location' => 'footer-menu',
                    'container' => false
                    )
                );
            ?>
            <p class="text-xxs opacity-40 font-helvetica35 mt-1">Copyright © <?php echo date('Y'); ?> Dermalogica</p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
<style>@media(max-width:1024px) { html{ margin-top:0 !important; } #wpadminbar{ display: none !important; } }</style>


<script Type="text/javascript">
window.AmbitConfig = {
    webChatBaseUrl: 'https://wc.ambithub.com/v2/latest',
    botBaseUrl: 'https://dermalogica.ambithub.com'
};
(function(t, i) {
    var n = i.createElement("script");
    n.src = t.AmbitConfig.webChatBaseUrl + "/js/init.js";
    n.async = true;
    i.head.appendChild(n);
    t.Ambit = function() {
        t.Ambit.q = t.Ambit.q || [];
        t.Ambit.q.push(arguments)
    }
})(window, document);
</script>
</body>
</html>
