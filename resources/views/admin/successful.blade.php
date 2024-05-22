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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Successful Orders</h1>
                    <!-- DataTales Example -->

                       
                    <div class="col-lg-12">
                    
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Date & Time</th>
                                            <th>Transaction Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key)
                                            <tr class="text-center">
                                                <td>{{$key->date_applied}}</td>
                                                <td>{{$key->transaction_id}}</td>
                                                <td>{{$key->firstName}}</td>
                                                <td>{{$key->lastName}}</td>
                                                <td>
                                                    <a href="{{route('admin.page.info', ['transaction_id'=>$key->transaction_id])}}" class="btn btn-primary">
                                                        <i class="fa fa-info"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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