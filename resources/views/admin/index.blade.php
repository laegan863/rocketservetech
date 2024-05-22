<!DOCTYPE html>
<html lang="en">

@include('admin/files/head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            @include('admin/files/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    @include('admin/files/navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">                       
                    <div class="row">
                        <div class="h3 col-12">Orders Status:</div>
                        <div class="col-lg-4">
                            <a style="text-decoration:none" href="">
                                <div style="border-left:10px solid #718deb; font-weight:bold" class="card p-4">
                                    Pending Orders {{$pending}}
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a style="text-decoration:none" href="">
                                <div style="border-left:10px solid #f03e3e; font-weight:bold" class="card p-4">
                                    Successful Orders {{$successful}}
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a style="text-decoration:none" href="">
                                <div style="border-left:10px solid #22d45a; font-weight:bold" class="card p-4">
                                    Completed Orders {{$completed}}
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('admin/files/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
       <!-- Logout Modal-->
    @include('admin/files/modal_logout')

@include('admin/files/scripts')
</body>

</html>