
<!DOCTYPE html>
<html>
    <head>

        <?php echo $this->Html->charset(); ?>
        <title>

            <?php echo $this->fetch('title'); ?>
        </title>

        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            'animate',
            'bootstrap',
            'font-awesome.min',
            'owl.carousel',
            'owl.theme',
            'prettyPhoto',
            'font-awesome-4.1.0/css/font-awesome.min.css',
            'smoothness/jquery-ui-1.10.4.custom.min',
            'theme',
            '../rs-plugin/css/settings',
            'colors/turquoise',
            'responsive',
            'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,700'
        ));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <!-- Javascripts --> 

        <?php
        echo $this->Html->script(
                array(
                    'jquery-1.11.0.min',
                    'bootstrap.min',
                    'bootstrap-hover-dropdown.min',
                    'jquery.infinitescroll.min',
                    'owl.carousel.min',
                    'jquery.parallax-1.1.3',
                    'jquery.nicescroll',
                    'jquery.prettyPhoto',
                    'jquery-ui-1.10.4.custom.min',
                    'jquery.forms',
                    'jquery.sticky',
                    'waypoints.min',
                    'jquery.isotope.min',
                    'jquery.gmap.min',
                    'http://maps.google.com/maps/api/js?sensor=false',
                    '../rs-plugin/js/jquery.themepunch.tools.min',
                    '../rs-plugin/js/jquery.themepunch.revolution.min',
                    'custom'
                )
        );
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>
        <!-- menu -->
        <?php echo $this->element('topMenu'); ?>

        <!-- conteudo -->
        <?php echo $this->Session->flash(); ?>
        

        <?php echo $this->fetch('content'); ?>
        <!-- /conteudo -->

        <!-- footer -->
        <?php echo $this->element('footer'); ?>

    </body>
</html>
