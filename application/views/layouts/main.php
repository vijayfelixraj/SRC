<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <title><?php echo SITE_NAME; ?> - <?php echo $template['title']; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon" />
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lineicons/style.css">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/js/chart-master/Chart.js"></script>

        <!-- CK-editor -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>

    </head>
    <body>
        <section id="container" >
        <!-- ********************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        ********************************************************************************************************* -->

          <?php $this->load->view('layouts/header'); ?>



        <!-- ************************************************************************************************
        MAIN SIDEBAR MENU
        ********************************************************************************************************** -->

        <?php $this->load->view('layouts/sidebar'); ?>

        <!-- ************************************************************************************************
        MAIN SIDEBAR MENU END
        ********************************************************************************************************** -->


          <!-- **********************************************************************************************************************************************************
          MAIN CONTENT
          *********************************************************************************************************************************************************** -->
          <!--main content start-->
          <section id="main-content">
              <section class="wrapper">
                <?php
                    if($this->session->flashdata('success')){
                        ?>
                  <div class="col-md-9 log alert alert-success"> <?php echo $this->session->flashdata('success'); ?> </div>
                  <?php
                      }elseif($this->session->flashdata('error')){
                        ?>
                  <div class="col-md-9 log alert alert-danger"> <?php echo $this->session->flashdata('error'); ?> </div>
                  <?php
                      }elseif($this->session->flashdata('warning')){
                          ?>
                  <div class="col-md-9 log alert alert-warning"> <?php echo $this->session->flashdata('warning'); ?> </div>
                  <?php
                      }
                      echo $template['body'];
                ?>
              </section>
          </section>

          <!--main content end-->

        <!--footer start-->
            <?php $this->load->view('layouts/footer'); ?>
        <!--footer Ends here-->

      </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>


        <!--common script for all pages-->
        <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gritter-conf.js"></script>

        <!--script for this page-->
        <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
    	<script src="<?php echo base_url(); ?>assets/js/zabuto_calendar.js"></script>

    	<script type="text/javascript">
          /*  $(document).ready(function () {
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Welcome Mr.<?php echo $this->session->userdata('username'); ?>!',
                // (string | mandatory) the text inside the notification
                text: 'Hover me to enable the Close Button. You are the Administrator for this site. <a href="#" target="_blank" style="color:#ffd777">Preview Userend.</a>.',
                // (string | optional) the image to display on the left
                image: '<?php echo base_url(); ?>assets/img/ui-sam.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: true,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'my-sticky-class'
            });

            return false;
          });*/
    	</script>

    	<script type="application/javascript">
            $(document).ready(function () {
                $("#date-popover").popover({html: true, trigger: "manual"});
                $("#date-popover").hide();
                $("#date-popover").click(function (e) {
                    $(this).hide();
                });

                $("#my-calendar").zabuto_calendar({
                    action: function () {
                        return myDateFunction(this.id, false);
                    },
                    action_nav: function () {
                        return myNavFunction(this.id);
                    },
                    ajax: {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                    legend: [
                        {type: "text", label: "Special event", badge: "00"},
                        {type: "block", label: "Regular event", }
                    ]
                });
            });

            function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>


    </body>
</html>
