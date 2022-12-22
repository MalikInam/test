<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Dashboard </title>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet" />
</head>

<body>

    <div class="container-fluid">
        <h6 class="text-uppercase"></h6>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified ">
                            <hr>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#Suggestions" data-toggle="pill" class="nav-link active w-1 p-1"> <span class="hidden-xs">Suggestions /span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#RequestUsers" data-toggle="pill" class="nav-link"><span class="hidden-xs">Sent Requests</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#ReceivedRequest" data-toggle="pill" class="nav-link"><span class="hidden-xs">Received Requests </span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#ConnectionsUsers" data-toggle="pill" class="nav-link"><span class="hidden-xs">Connections </span></a>
                            </li>

                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="Suggestions">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-striped m-0 table-sm">
                                                    <thead class="thead-primary small-table">
                                                        <tr>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="body small-table">
                                                    @foreach($suggestionsUsers as $user)
                                                        <tr>
                                                            <td colspan="9">{{$user->name}}--{{$user->email}}</td>
                                                            <td>
                                                                <form action="{{url('connection')}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$user->id}}">
                                                                <input type="submit" class="btn btn-primary btn-round  sm-1" value="Connection">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Row-->

                                <!--/row-->
                            </div>

                            <div class="tab-pane" id="RequestUsers">
                            <div class="col-sm-12">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-striped m-0 table-sm">
                                                    <thead class="thead-primary small-table">
                                                        <tr>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="body small-table">
                                                    @foreach($RequestUsers as $user)
                                                        <tr>
                                                            <td colspan="9">{{$user->name}}--{{$user->email}}</td>
                                                            <td>
                                                            <form action="{{url('withdraw_request')}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$user->id}}">
                                                                <input type="submit" class="btn btn-danger btn-round  sm-1" value="Withdraw Request">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>


                            <div class="tab-pane" id="ReceivedRequest">
                            <div class="col-sm-12">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-striped m-0 table-sm">
                                                    <thead class="thead-primary small-table">
                                                        <tr>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="body small-table">
                                                    @foreach($ReceviedUsers as $user)
                                                        <tr>
                                                            <td colspan="9">{{$user->name}}--{{$user->email}}</td>
                                                            <td>
                                                            <form action="{{url('connection')}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$user->id}}">
                                                                <input type="submit" class="btn btn-primary btn-round  sm-1" value="Accpet">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="tab-pane" id="ConnectionsUsers">
                            <div class="col-sm-12">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-striped m-0 table-sm">
                                                    <thead class="thead-primary small-table">
                                                        <tr>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="body small-table">
                                                    @foreach($ConnectionsUsers as $user)
                                                        <tr>
                                                            <td colspan="9">{{$user->name}}--{{$user->email}}</td>
                                                            <td>
                                                                <!-- <a href="{{url('')}}"><button style="with:8px; height:36px;" type="submit" class="btn btn-primary btn-round  sm-1"> Connect</button></a> -->
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Row-->

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->
    </div>
    <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->

    </div>
    <!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- simplebar js -->
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
    <!-- waves effect js -->
    <script src="{{ asset('assets/js/waves.js')}}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('assets/js/app-script.js')}}"></script>

</body>

</html>
