
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S-cart Admin  | Candidate</title>
    @include("viewAdmin.elements.stylesheet")

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="/test/public/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>S-cart</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="{{ asset('images/img/scart-min.png')}}"></span>
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

            <form action="{!! url('/api/admin_employer/') !!}" method="get" class="search-form" pjax-container>
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
                Shop category
                <small> </small>
            </h1>

            <!-- breadcrumb start -->
            
            <!-- breadcrumb end -->

        </section>

        <section class="content">

            
            <div class="row"><div class="col-md-12"><div class="box">
                
                <div class="box-header with-border">
                    <div class="pull-right">
                        
                        
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a href="{!! url('/api/admin_candidate/add') !!}" class="btn btn-sm btn-success" title="New">
                                <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;New</span>
                            </a>
                        </div>

                    </div>
                    <span>
                        
                    </span>
                </div>

                

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID<a class="fa fa-fw fa-sort" href="https://demo.s-cart.org/system_admin/shop_category?_sort%5Bcolumn%5D=id&_sort%5Btype%5D=desc"></a></th>
                                <th>Name</th>
                                <th>CV</th>
                                <th>Cover letter</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr >
                                <td >
                                    {{ $user-> id }}
                                </td>
                                <td >
                                    {{ $user-> name }}
                                </td>
                                <td >
                                    {{ $user-> CV }}
                                </td>
                                <td >
                                    {{ $user-> cover_letter }}
                                </td>
                                <td >
                                    {{ $user-> email}}
                                </td>
                                <td >
                                    {{ $user-> image }}
                                </td>
                                
                                <td >
                                    <a href="{{route('geteditCandidate',$user['id'])}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('getdeleteCandidate',$user['id'])}}"  class="grid-row-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>

                </div>

                

                <div class="box-footer clearfix">
                    Showing <b>1</b> to <b>18</b> of <b>18</b> entries<ul class="pagination pagination-sm no-margin pull-right">
                        <!-- Previous Page Link -->
                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                        
                        <!-- Pagination viewAdmin.elements -->
                        <!-- "Three Dots" Separator -->
                        
                        <!-- Array Of Links -->
                        <li class="page-item active"><span class="page-link">1</span></li>
                        
                        <!-- Next Page Link -->
                        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                    </ul>

                    <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

                        <small>Show</small>&nbsp;
                        <select class="input-sm grid-per-pager" name="per-page">
                            <option value="https://demo.s-cart.org/system_admin/shop_category?per_page=10" >10</option>
                            <option value="https://demo.s-cart.org/system_admin/shop_category?per_page=20" selected>20</option>
                            <option value="https://demo.s-cart.org/system_admin/shop_category?per_page=30" >30</option>
                            <option value="https://demo.s-cart.org/system_admin/shop_category?per_page=50" >50</option>
                            <option value="https://demo.s-cart.org/system_admin/shop_category?per_page=100" >100</option>
                        </select>
                        &nbsp;<small>entries</small>
                    </label>

                </div>
                <!-- /.box-body -->
            </div>
        </div></div>

    </section>
    <script data-exec-on-popstate>

        $(function () {
            
            $('.grid-switch-status').bootstrapSwitch({
                size:'mini',
                onText: 'ON',
                offText: 'OFF',
                onColor: 'primary',
                offColor: 'default',
                onSwitchChange: function(event, state){

                    $(this).val(state ? 'on' : 'off');

                    var pk = $(this).data('key');
                    var value = $(this).val();

                    $.ajax({
                        url: "/system_admin/shop_category/" + pk,
                        type: "POST",
                        data: {
                            "status": value,
                            _token: LA.token,
                            _method: 'PUT'
                        },
                        success: function (data) {
                            toastr.success(data.message);
                        }
                    });
                }
            });

            $('.grid-editable-sort').editable({"emptytext":"<i class=\"fa fa-pencil\"><\/i>","name":"sort"});
            
            $('.grid-row-delete').unbind('click').click(function() {

                var id = $(this).data('id');

                swal({
                    title: "Are you sure to delete this item ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Confirm",
                    showLoaderOnConfirm: true,
                    cancelButtonText: "Cancel",
                    preConfirm: function() {
                        return new Promise(function(resolve) {
                            $.ajax({
                                method: 'post',
                                url: '/system_admin/shop_category/' + id,
                                data: {
                                    _method:'delete',
                                    _token:LA.token,
                                },
                                success: function (data) {
                                    $.pjax.reload('#pjax-container');

                                    resolve(data);
                                }
                            });
                        });
                    }
                }).then(function(result) {
                    var data = result.value;
                    if (typeof data === 'object') {
                        if (data.status) {
                            swal(data.message, '', 'success');
                        } else {
                            swal(data.message, '', 'error');
                        }
                    }
                });
            });

            
            $('.grid-per-pager').on("change", function(e) {
                $.pjax({url: this.value, container: '#pjax-container'});
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
    LA.token = "2OSjS2rhXhGRhQYksSMBeGgbMZR5CO29pgYG2RLa";
</script>

@include("viewAdmin.elements.script")


</body>
</html>
    