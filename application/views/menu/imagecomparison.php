<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/skins/_all-skins.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style type="text/css">
  

  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;   
    cursor: inherit;
    display: block;
}
</style>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">



  <!-- =============================================== -->

<!-------------------------------------------------------------------->
<?php
$this->load->view('components/header');
$this->load->view('components/sidemenu');

?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>




        <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Image Comparison</h3>

          <h3 style="color:#B22222" id="error"><?php echo $error;?></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>


         <div class="box-body">

            <div class="row">
              <div class="col-xs-5">

                <div class="box-header with-border">
                <h3 class="box-title">Upload Group Photo</h3>
                </div>
                <div class="box-body">
                  <div id="group_image" style="width:200px;height: 200px;text-align: center"></div>
                              
                </div>
                <div class="box-footer">
                  <div class="form-group">
                  <?php echo form_open_multipart('imagecontroller/do_upload_groupphoto');?> 
                  <div class="row">
                    <div class="col-xs-5">
                      <span class="btn btn-primary btn-file">
                          Browse for Group Photo
                          <input class="form-control" type="file" name = "group_photo"> 
                      </span>
                      
                    </div>
                    <div class="col-xs-2">
                       <input type = "submit" value = "upload" class="btn btn-info" />  
                    </div>
                  </div>
                  <?php echo form_close(); ?>
                  </div>
                </div>

                </div>
  

              <div class="col-xs-2">
                
                <button type="button" class="btn btn-info comparebtn">compare images</button>  

              </div>

              <div class="col-xs-5">



                <div class="box-header with-border">
                  <h3 class="box-title">Upload Single Photo</h3>
                </div>
                <div class="box-body">
                  <div id="check_image" style="width:200px;height: 200px;text-align: center"></div>             
                </div>
                <div class="box-footer">
                  <div class="form-group">
                    <?php echo form_open_multipart('imagecontroller/do_upload_checkphoto');?> 
                    <div class="row">
                      <div class="col-xs-5">
                         <span class="btn btn-primary btn-file">
                          Browse for Single Photo
                          <input class="form-control" type="file" name = "checkphoto">
                      </span>
                        
                      </div>
                      <div class="col-xs-2">
                        <input type = "submit" value = "upload" class="btn btn-info" />   
                      </div>
                    </div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
                <a href="../option/compareimage" class="btn btn-info comparebtn">Compare Images<a/>  
                  <div class="reply">hyy</div>
              </div>
           </div>

          </div>
        <!-- /.box-body -->
        <div class="box-footer">
              <div class="form-group">
              <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-5">
                   
                </div>
              </div>
              </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->



  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<?php
$this->load->view('components/footer');
$this->load->view('components/sidebarcontroller');
?>
<!-- ./wrapper -->
<!--//https://grabify.link/track/WMQ51H-->

<script src="<?php echo base_url(); ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/dist/js/demo.js"></script>
<!---Custom js--->
<script src="<?php echo base_url(); ?>public/custom/js/script.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/select2/select2.full.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>public/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
$(document).ready(function(){
//alert("hyy");

$.ajax({
    url:'<?php echo base_url(); ?>/public/upload_images/groupimage/img1.png',
    type:'HEAD',
    error: function(){
            //alert("image not found");
            img = $(this).find('image').text();
            $('<img />')
                            .attr('src', "<?php echo base_url(); ?>/public/upload_images/dummyimage/dummy.jpeg" + img + "")         // ADD IMAGE PROPERTIES.  
                                .width('200px').height('200px')
                            .appendTo($('#group_image')); 
    },
    success: function(){
              //alert("image found");

                    $.ajax({
                type: 'GET',
                url:'<?php echo base_url(); ?>/public/upload_images/groupimage/img1.png',
                success: function () {


                        img = $(this).find('image').text();

                        $('<img />')
                            .attr('src', "<?php echo base_url(); ?>/public/upload_images/groupimage/img1.png" + img + "")         // ADD IMAGE PROPERTIES.  
                                .width('113px').height('113px')
                            .appendTo($('#group_image'));       // ADD THE IMAGE TO DIV.
                 
                }
            });

              $('#error').hide();
    }
});


$.ajax({
    url:'<?php echo base_url(); ?>/public/upload_images/checkimage/img1.png',
    type:'HEAD',
    error: function(){
            //alert("image not found");
            img = $(this).find('image').text();
            $('<img />')
                            .attr('src', "<?php echo base_url(); ?>/public/upload_images/dummyimage/dummy.jpeg" + img + "")         // ADD IMAGE PROPERTIES.  
                                .width('200px').height('200px')
                            .appendTo($('#check_image')); 
    },
    success: function(){
              //alert("image found");

                    $.ajax({
                type: 'GET',
                url:'<?php echo base_url(); ?>/public/upload_images/checkimage/img1.png',
                success: function () {


                        img = $(this).find('image').text();

                        $('<img />')
                            .attr('src', "<?php echo base_url(); ?>/public/upload_images/checkimage/img1.png" + img + "")         // ADD IMAGE PROPERTIES.  
                                .width('113px').height('113px')
                            .appendTo($('#check_image'));       // ADD THE IMAGE TO DIV.
                 
                }
            });
    }
});



$('.comparebtn').click(function(){





                      
            //alert("hyy");
                $.ajax({
                    type: "GET",
                    url: "<?php echo site_url(); ?>/option/compareimage",
                    dataType:"json",
                    async: open,
                    cache: false,
                    timeout: 90000,
                    success: function(response){
                       
                        //alert(response);
                        console.log(response);
                        $('.reply').text(response);
                       
                        }
                    })






          
          });








});
</script>

</body>
</html>
