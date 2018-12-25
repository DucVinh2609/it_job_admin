
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT-Jobs Admin  | Add CV</title>
    @include("viewAdmin.elements.stylesheet")

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="/system_admin/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>S-cart</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="/images/scart-min.png"></span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <style>
                .search-form {
                    width: 250px;
                    margin: 10px 0 0 20px;
                    border-radius: 3px;
                    float: left;
                }
                .search-form input[type="text"] {
                    color: #666;
                    border: 0;
                }
                .search-form .btn {
                    color: #999;
                    background-color: #fff;
                    border: 0;
                }
            </style>

            


            <!-- Navbar Right Menu -->
            @include("viewAdmin.elements.NavbarRightMenu")
        </nav>
    </header>
    @include("viewAdmin.elements.menu")
    <div class="content-wrapper" id="pjax-container">
        <section class="content-header">
            <h1>
                Add Location
                <small> </small>
            </h1>

            <!-- breadcrumb start -->
            
            <!-- breadcrumb end -->

        </section>

        <section class="content">


            <div class="row"><div class="col-md-12"><div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add</h3>

                    <div class="box-tools">
                        <div class="btn-group pull-right" style="margin-right: 5px">
                            <a href="{!! url('/api/admin_cv/') !!}" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{!! url('/api/admin_cv/add') !!}" method="POST" enctype="multipart/form-data" class="form-horizontal" >

                    <div class="box-body">

                        <div class="fields-group">


                            <div class="form-group  ">

                                <label for="Title" class="col-sm-2  control-label">Cover Letter</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        
                                        <input type="text"  name="cover_letter" value="" class="form-control name" placeholder="Input Name User" />

                                        
                                    </div>

                                    
                                </div>
                            </div>
                            <div class="form-group  ">

                                <label for="Title" class="col-sm-2  control-label">ID Candidate</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        
                                        <input type="text"  name="user_id" value="" class="form-control name" placeholder="Input ID Candidate" />

                                        
                                    </div>

                                    
                                </div>
                            </div>
                            <div class="form-group  ">

                                <label for="Title" class="col-sm-2  control-label">ID Post</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        
                                        <input type="text"  name="job_id" value="" class="form-control name" placeholder="Input ID Post" />

                                        
                                    </div>

                                    
                                </div>
                            </div>
                            <div class="form-group  ">

                                <label for="image" class="col-sm-2  control-label">CV</label>

                                <div class="col-sm-8">


                                    <input type="file" class="image" name="cv"  />


                                </div>
                            </div>
                            
                    

                            

                        </div>
                        
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">


                        <div class="col-md-2">
                        </div>

                        <div class="col-md-8">

                            <div class="btn-group pull-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                            
                            
                            
                            <div class="btn-group pull-left">
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-footer -->
                </form>
            </div>

        </div></div>

    </section>
    <script data-exec-on-popstate>

        $(function () {
            $(document).ready(function(){
                var id = $('select[name*="product_id"]').val();
                $.ajax({
                    url : 'https://demo.s-cart.org/system_admin/getInfoProduct',
                    type : "get",
                    datatype : "json",
                    dateType:"application/json; charset=utf-8",
                    data : {
                       id : id
                   },
                   success: function(result){
                    console.log(result);
                    var returnedData = JSON.parse(result);
                    $('#price-old').val(returnedData.price);
                }
            });
            });

            $('[name*="product_id"]').change(function(){
                var id = $(this).val();
                $.ajax({
                    url : 'https://demo.s-cart.org/system_admin/getInfoProduct',
                    type : "get",
                    datatype : "json",
                    dateType:"application/json; charset=utf-8",
                    data : {
                       id : id
                   },
                   success: function(result){
                    var returnedData = JSON.parse(result);
                    $('#price-old').val(returnedData.price);
                    var newPrice = returnedData.price * (100 - parseInt($('#off').val())) /100;
                    $('#price').val(newPrice);
                }
            });
            });

            $('#off').change(function(){
                var newPrice = $('#price-old').val().replace(',','') * (100 - parseInt($('#off').val())) /100;
                $('#price').val(newPrice);
            });


            function formatNumber (num) {
              return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
          }


          $(".product_id").select2({"allowClear":true,"placeholder":{"id":"","text":"Product"}});
          $('.off').inputmask({"alias":"currency","radixPoint":".","prefix":"","removeMaskOnSubmit":true,"digits":0});
          $('.price').inputmask({"alias":"currency","radixPoint":".","prefix":"","removeMaskOnSubmit":true,"digits":0});
          
          $('.status.la_checkbox').bootstrapSwitch({
            size:'small',
            onText: 'ON',
            offText: 'OFF',
            onColor: 'primary',
            offColor: 'default',
            onSwitchChange: function(event, state) {
                $(event.target).closest('.bootstrap-switch').next().val(state ? 'on' : 'off').change();
            }
        });

          $('.date_start').parent().datetimepicker({"format":"YYYY-MM-DD ","locale":"en","allowInputToggle":true});
          $('.date_end').parent().datetimepicker({"format":"YYYY-MM-DD ","locale":"en","allowInputToggle":true});
          $('.after-submit').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChecked', function () {
            $('.after-submit').not(this).iCheck('uncheck');
        });
      });
  </script>
</div>

<!-- Main Footer -->
<footer class="main-footer">

    <strong><a href="https://s-cart.org">IT-Jobs</a></strong>
</footer>

</div>

<script>
    function LA() {}
    LA.token = "YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx";
</script>

@include("viewAdmin.elements.script")

</body>
</html>
