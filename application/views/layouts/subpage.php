<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>SRC - DASHBOARD</title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon" />
        <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lineicons/style.css">    
        
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

        <!-- Calender Module -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/fullcalendar.css" rel="stylesheet">

        <!-- Calender Module End -->
        <script src="<?php echo base_url(); ?>assets/js/chart-master/Chart.js"></script>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
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
                  <div class="col-md-5 log alert alert-success"> <?php echo $this->session->flashdata('success'); ?> </div>
                  <?php
                      }elseif($this->session->flashdata('error')){
                        ?>
                  <div class="col-md-5 log alert alert-danger"> <?php echo $this->session->flashdata('error'); ?> </div>
                  <?php
                      }elseif($this->session->flashdata('warning')){
                          ?>
                  <div class="col-md-5 log alert alert-warning"> <?php echo $this->session->flashdata('warning'); ?> </div>
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
        <script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>
        <!-- Calender Scripts Starts Here -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fullcalendar.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <!-- Calender Scripts Starts Here -->
    </body>
</html>
