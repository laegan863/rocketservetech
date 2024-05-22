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
                    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Client Order Details</h1>
                    <!-- DataTales Example -->

                       
                    <div class="col-lg-12">
                    
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card shadow mb-4 p-5">
                            <form method="post" action="{{route('action.update', ['transaction_id' => $key->transaction_id])}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 text-end h5">
                                    <b>Transaction Code : {{$key->transaction_id}}</b>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>First Name *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->firstName}}" name="firstName">
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>Last  Name *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->lastName}}" name="lastName">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>Address Line 1 *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->Address_line_1}}" name="Address_line_1">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>Address Line 2 *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->Address_line_2}}" name="Address_line_2">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>City *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->city}}" name="city">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>State *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->state}}" name="state">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>Postal Code *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->Postal_code}}" name="Postal_code">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>Country *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->country}}" name="country">
                                    </div>
                                </div>

                                

                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>Phone number *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->user_number}}" name="user_number">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>Email address *</p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->user_email}}" name="user_email">
                                    </div>
                                </div>
                                

                                <div class="col-lg-4">
                                    <div class="col-12 my-2">
                                        <p>Order Type *</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-12 my-2">
                                        <h4></h4>
                                        <input readonly="" type="text" class="form-control" value="{{$key->description}}" name="description">
                                    </div>
                                </div>
                                
                                @if($key->status == 'successful')
                                    <div class="col-lg-4">
                                        <div class="col-12 my-2">
                                            <p>Status *</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="col-12 my-2">
                                            <h4></h4>
                                            <select class="form-control" name="status">
                                                <option value="{{$key->status}}">{{$key->status}}</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-primary col-4 mt-4" type="submit">Submit</button>
                                    </div>
                                @endif
                            </div>
                            </form>
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