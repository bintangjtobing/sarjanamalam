@extends('authen.index')
@section('title','Dashboard')
@section('content')
<?php $tokens = bin2hex(openssl_random_pseudo_bytes(64));?>
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-12 text-center p-5">
            <h1 class="text-gradient-blue-sarjana">{!!$usermg->count()!!}<span> users</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Verified Members</span>
                    <span class="info-box-number">{!!$usermg->count()!!}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">
                        10
                        <small>%</small>
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Laporan mingguan</h5>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">Something else here</a>
                                <a class="dropdown-divider"></a>
                                <a href="#" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <?php
                                    $today = date('d - M - Y');

                                ?>
                                <strong>{{$today}}</strong>
                            </p>

                            <div class="chart">
                                <!-- Sales Chart Canvas -->
                                <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Goal Tahun 2020</strong>
                            </p>

                            <div class="progress-group">
                                <?php $totalmembers = 1500;
                                    $countData =  $usermg->count();
                                    $resultData = $countData / $totalmembers;
                                    $persenData = $resultData * 100 ;
                                ?>
                                Verified Members
                                <span class="float-right"><b>{{$countData}}</b>/1500</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary" style="width: {{$persenData}}%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->

                            <div class="progress-group">
                                <?php $totalevent = 500;
                                    $countDataEv =  $event->count();
                                    $resultDataEve = $countDataEv / $totalevent;
                                    $persenDataeve = $resultDataEve * 100 ;
                                ?>
                                Event Request
                                <span class="float-right"><b>{{$countDataEv}}</b>/500</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger" style="width: {{$persenDataeve}}%"></div>
                                </div>
                            </div>

                            <!-- /.progress-group -->
                            {{-- <div class="progress-group">
                                <span class="progress-text">Visit Premium Page</span>
                                <span class="float-right"><b>480</b>/800</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                </div>
                            </div> --}}

                            <!-- /.progress-group -->
                            {{-- <div class="progress-group">
                                Send Inquiries
                                <span class="float-right"><b>250</b>/500</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                </div>
                            </div> --}}
                            <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./card-body -->
                {{-- <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                    17%</span>
                                <h5 class="description-header">$35,210.43</h5>
                                <span class="description-text">TOTAL REVENUE</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i>
                                    0%</span>
                                <h5 class="description-header">$10,390.90</h5>
                                <span class="description-text">TOTAL COST</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                    20%</span>
                                <h5 class="description-header">$24,813.53</h5>
                                <span class="description-text">TOTAL PROFIT</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                            <div class="description-block">
                                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i>
                                    18%</span>
                                <h5 class="description-header">1200</h5>
                                <span class="description-text">GOAL COMPLETIONS</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div> --}}
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-6">
            <!-- USERS LIST -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>

                    <div class="card-tools">
                        <span class="badge badge-danger">{{$usermg->count()}} New Members</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="users-list clearfix">
                        @foreach ($usermg->take(12) as $user)
                        <li>
                            <img class="newgen-profile" src="@if(!auth()->user()->displaypic){!!url('https://res.cloudinary.com/sarjanamalam/image/upload/v1583995015/sa-default_mdrqnt.png')!!}
        @else{!!asset('https://res.cloudinary.com/sarjanamalam/image/upload/'.$user->displaypic)!!}@endif"
                                alt="{{$user->name}} Image">
                            <a class="users-list-name" href="/{{$user->username}}" target="_blank">{{$user->name}}</a>
                            <span class="users-list-date">{{date('d M', strtotime($user->created_at))}}</span>
                        </li>
                        @endforeach
                    </ul>
                    <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="/user-config/{{$tokens}}">View All Users</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Browser Usage</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="chart-responsive">
                                <canvas id="pieChart" height="150"></canvas>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <ul class="chart-legend clearfix">
                                <li><i class="far fa-circle text-danger"></i> Chrome</li>
                                <li><i class="far fa-circle text-success"></i> IE</li>
                                <li><i class="far fa-circle text-warning"></i> FireFox</li>
                                <li><i class="far fa-circle text-info"></i> Safari</li>
                                <li><i class="far fa-circle text-primary"></i> Opera</li>
                                <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                            </ul>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer bg-white p-0">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                United States of America
                                <span class="float-right text-danger">
                                    <i class="fas fa-arrow-down text-sm"></i>
                                    12%</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                India
                                <span class="float-right text-success">
                                    <i class="fas fa-arrow-up text-sm"></i> 4%
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                China
                                <span class="float-right text-warning">
                                    <i class="fas fa-arrow-left text-sm"></i> 0%
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.footer -->
            </div>
            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Threads yang barusan terbit</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        @foreach ($threadData as $thread)
                        <li class="item">
                            <div class="product-info">
                                <a href="" class="product-title">{{$thread->subject}}
                                    <span class="badge badge-warning float-right">{{$thread->category}}</span></a>
                                <span class="product-description">
                                    {!!Str::limit($thread->thread,
                                    50)!!}
                                </span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="/threads/{{$tokens}}" class="uppercase">View All Products</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection
