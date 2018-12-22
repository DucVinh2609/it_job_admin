
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT-Job Admin  | Employer</title>
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
                <span class="logo-lg"><img src="/image/img/scart-min.png"></span>
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

            <form action="https://demo.s-cart.org/system_admin/shop_order" method="get" class="search-form" pjax-container>
                <div class="input-group input-group-sm ">
                    <input type="text" name="keyword" class="form-control" placeholder="Search order id, email, phone or name">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>


            <!-- Navbar Right Menu -->
            @include("viewAdmin.elements.NavbarRightMenu")
        </nav>
    </header>
    @include("viewAdmin.elements.menu")
    <div class="content-wrapper" id="pjax-container">
        <section class="content-header">
            <h1>
                Employer
                <small> </small>
            </h1>

            <!-- breadcrumb start -->

            <!-- breadcrumb end -->

        </section>

        <section class="content">


            <div class="row"><div class="col-md-12"><div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Employer</h3>

                    <div class="box-tools">
                        <div class="btn-group pull-right" style="margin-right: 5px">
                            <a href="{{ route('admin_employer')}}" class="btn btn-sm btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;List</span></a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{!! url('/api/admin_employer/add') !!}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    
                    <div class="box-body">

                        <div class="fields-group">


                            <div class="form-group  ">

                                <label for="en__name" class="col-sm-2  control-label">Name</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="text" id="en__name" name="txt_EmployerName" value="" class="form-control en__name" placeholder="Input Name" />


                                    </div>


                                </div>
                            </div>
                            
                            <div class="form-group  ">

                                <label for="en__description" class="col-sm-2  control-label">Description</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="text" id="en__description" name="txt_EmployerDecription" value="" class="form-control en__description" placeholder="Input Description" />


                                    </div>


                                </div>
                            </div>

                            <div class="form-group  ">

                                <label for="en__description" class="col-sm-2  control-label">Location</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="text" id="en__description" name="txt_EmployerLocation" value="" class="form-control en__description" placeholder="Input Location" />


                                    </div>


                                </div>
                            </div>
                            

                            <div class="form-group  ">

                                <label for="image" class="col-sm-2  control-label">Image Avatar</label>

                                <div class="col-sm-8">


                                    <input type="file" class="image" name="EmployerImageAvatar"  />


                                </div>
                            </div>

                            <div class="form-group  ">

                                <label for="image" class="col-sm-2  control-label">Image Cover</label>

                                <div class="col-sm-8">


                                    <input type="file" class="image" name="EmployerImageCover"  />


                                </div>
                            </div>
                            <div class="form-group  ">

                                <label for="en__name" class="col-sm-2  control-label">Email</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="text" id="en__name" name="txt_Email" value="" class="form-control en__name" placeholder="Input Email" />


                                    </div>


                                </div>
                            </div>
                            <div class="form-group  ">

                                <label for="en__name" class="col-sm-2  control-label">Password</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="text" id="en__name" name="txt_Password" value="" class="form-control en__name" placeholder="Input Password" />


                                    </div>


                                </div>
                            </div>
                            <div class="form-group  ">

                                <label for="en__name" class="col-sm-2  control-label">ID Eployer Detail</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="text" id="en__name" name="txt_IDEmployerDetail" value="" class="form-control en__name" placeholder="Input ID Eployer Detail" />


                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">

                        <input type="hidden" name="_token" value="YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx">

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
            $(".parent").select2({"allowClear":true,"placeholder":{"id":"","text":"Parent category"}});

            $("input.image").fileinput({"overwriteInitial":true,"initialPreviewAsData":true,"browseLabel":"Browse","showRemove":false,"showUpload":false,"deleteExtraData":{"image":"_file_del_","_file_del_":"","_token":"YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx","_method":"PUT"},"deleteUrl":"https:\/\/demo.s-cart.org\/system_admin\/","allowedFileTypes":["image"]});


            $('.sort:not(.initialized)')
            .addClass('initialized')
            .bootstrapNumber({
                upClass: 'success',
                downClass: 'primary',
                center: true
            });


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

            $('.after-submit').iCheck({checkboxClass:'icheckbox_minimal-blue'}).on('ifChecked', function () {
                $('.after-submit').not(this).iCheck('uncheck');
            });
        });
    </script>
</div>

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        &nbsp;&nbsp;&nbsp;&nbsp;

        <strong>Version</strong>&nbsp;&nbsp; 2.0.4

    </div>
    <!-- Default to the left -->
    <strong><a href="https://s-cart.org">S-Cart</a></strong> Free Open Source eCommerce for Business
</footer>

</div>

<script>
    function LA() {}
    LA.token = "YkDCfkRWPRyZTW2zQVo3IfKy3x6paUJmuFe7BBwx";
</script>

@include("viewAdmin.elements.script")


</body>
</html>
