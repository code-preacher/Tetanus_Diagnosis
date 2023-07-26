
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

$d=$crud->displayOneSpecific('diagnosis','id',$_GET['id']);
if ($d == false) {
 header("location:view-diagnose.php");
}
?>


<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">DIAGNOSIS</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Diagnostic Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="add-diagnose.php" method="POST">
                                       <div class="row p-t-20">

                                         
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Blood Stool: </label>
                                               <input class="form-control custom-select" value="<?php if ($d['f1']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="control-label">Diarrhea:</label>
                                            <input class="form-control custom-select" value="<?php if ($d['f2']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                        </div>
                                    </div>
                                    <!--/span-->



                                    <!--/span-->
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="control-label">Fever:</label>
                                       <input class="form-control custom-select" value="<?php if ($d['f3']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                    </div>
                                </div>
                                <!--/span-->
                                <!--/span-->

                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label">Headache:</label>
                                  <input class="form-control custom-select" value="<?php if ($d['f4']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                </div>
                            </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="control-label">High Temperature:</label>
                                  <input class="form-control custom-select" value="<?php if ($d['f5']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                                </div>
                            </div>
                            <!--/span-->
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Soar Throat:</label>
                                <input class="form-control custom-select" value="<?php if ($d['f6']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                            </div>
                        </div>
                        <!--/span-->
                        
                    <!--/span-->
                    <!--/span-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="control-label">Regular Sweating:</label>
                        <input class="form-control custom-select" value="<?php if ($d['f7']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                    </div>
                </div>
                <!--/span-->
                <!--/span-->
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Rapid Heart Beat:</label>
                    <input class="form-control custom-select" value="<?php if ($d['f8']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                </div>
            </div>

            <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Trouble Swallowing:</label>
                    <input class="form-control custom-select" value="<?php if ($d['f9']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                </div>
            </div>

            <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Muscle Stiffness:</label>
                    <input class="form-control custom-select" value="<?php if ($d['f10']=='1') { echo "Yes"; } else { echo "No"; } ?>" disabled="disabled">
                </div>
            </div>
            <!--/span-->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
 <?php
include 'inc/footer.php';
?>
 
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>