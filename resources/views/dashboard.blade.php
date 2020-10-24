@extends('layouts.admin.admin-layout')

@section('content')
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-6">
            <div class="dashboard-header-title mb-30">
                <h5>Dashboard</h5>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-right">
                        <svg id="icon-home-26" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign card-icon">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                    </div>
                    <h5 class="mt-0 font-15" title="Revenue">Revenue</h5>
                    <h3 class="mt-3 mb-3 font-22">$7,254</h3>
                    <p class="mb-0 text-muted">
                        <span class="text-info mr-1">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"> 8.0%</i></span>
                        <span class="text-nowrap">Last month</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-right">
                        <svg id="icon-home-27" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up card-icon">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                            <polyline points="17 6 23 6 23 12"></polyline>
                        </svg>
                    </div>
                    <h5 class="mt-0 font-15" title="Growth">Growth</h5>
                    <h3 class="mt-3 mb-3 font-22">+ 30.56%</h3>
                    <p class="mb-0 text-muted">
                        <span class="text-success mr-2">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"> 5.0%</i></span>
                        <span class="text-nowrap">Last month</span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card widget-flat ">
                <div class="card-body">
                    <div class="float-right">
                        <svg id="icon-home-28" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users card-icon">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>

                    </div>
                    <h6 class="font-15 mt-0" title="Customers">Customers</h6>
                    <h3 class="mt-3 mb-3 font-22">36,254</h3>
                    <p class="mb-0">
                        <span class="text-danger mr-1">
                            <i class="fa fa-long-arrow-up " aria-hidden="true"> 6.1%</i></span>
                        <span class="">Last month</span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-right">
                        <svg id="icon-home-29" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award card-icon">
                            <circle cx="12" cy="8" r="7"></circle>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        </svg>
                    </div>
                    <h5 class=" mt-0 font-15" title="Revenue">Revenue</h5>
                    <h3 class="mt-3 mb-3 font-22">$10,245</h3>
                    <p class="mb-0">
                        <span class="text-primary mr-1">
                            <i class="fa fa-long-arrow-up" aria-hidden="true"> 15.2%</i></span>
                        <span class="">Last month</span>
                    </p>
                </div>
            </div>
        </div> <!-- end col-->
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Statistics</h5>
                    <div class="chart">
                        <canvas id="barChart" style="height:220px"></canvas>
                    </div>

                    <div class="row">
                        <div class="col-6 col-sm-3">
                            <div class="description-block border-right">
                                <span class="font-12 text-success"><i class="fa fa-caret-up"></i> 20%</span>
                                <h5 class="font-15 mb-1">$11,000</h5>
                                <span class="font-13">DAILY SALES</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-6 col-sm-3">
                            <div class="description-block border-right">
                                <span class="font-12 text-warning"><i class="fa fa-caret-left"></i> 30%</span>
                                <h5 class="font-15 mb-1">$6,000</h5>
                                <span class="font-13">WEEKLY SALES</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-6 col-sm-3">
                            <div class="description-block border-right">
                                <span class="font-12 text-success"><i class="fa fa-caret-up"></i> 60%</span>
                                <h5 class="font-15 mb-1">$11,000</h5>
                                <span class="font-13">MONTHLY SALES</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-6 col-sm-3">
                            <div class="description-block">
                                <span class="font-12 text-danger"><i class="fa fa-caret-up"></i> 50%</span>
                                <h5 class="font-15 mb-1">$30,000</h5>
                                <span class="font-13">Yearly SALES</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">For The Past 30 Days</h5>
                    <div class="statistic-right-area">
                        <div class="dash-widget-visits"></div>
                        <div class="past-statistic-an mt-30 d-flex justify-content-between">
                            <div class="past-statistic-ctn">
                                <h3 class="font-16 mb-1"><span class="counter">3,20,000</span></h3>
                                <p class="font-13">Page Views</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an d-flex justify-content-between">
                            <div class="past-statistic-ctn">
                                <h3 class="font-16 mb-1"><span class="counter">1,03,000</span></h3>
                                <p class="font-13">Total Clicks</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an d-flex justify-content-between">
                            <div class="past-statistic-ctn">
                                <h3 class="font-16 mb-1"><span class="counter">24,00,000</span></h3>
                                <p class="font-13">Site Visitors</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Email Statistics</h5>
                    <div class="email-statis-wrap text-center">
                        <div class="email-round-nock">
                            <input type="text" class="knob" value="0" data-rel="60" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#450b5a" data-thickness=".10" data-readonly="true">
                        </div>
                        <div class="email-ctn-nock">
                            <p class="text-dark mb-0 mt-2 font-13">Total Emails Sent</p>
                        </div>
                    </div>
                    <div class="email-round-gp d-flex justify-content-between">
                        <div class="email-round-pro">
                            <div class="email-signle-gp">
                                <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                            </div>
                            <div class="email-ctn-nock">
                                <p class="text-dark mb-0 mt-2 font-13">Bounce Rate</p>
                            </div>
                        </div>
                        <div class="email-round-pro">
                            <div class="email-signle-gp">
                                <input type="text" class="knob" value="0" data-rel="35" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#f1536e" data-thickness=".10" data-readonly="true" disabled>
                            </div>
                            <div class="email-ctn-nock">
                                <p class="text-dark mb-0 mt-2 font-13">Total Opened</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Timeline -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Activity Timeline</h5>
                    <!-- Dashboard Active Timeline -->
                    <ul class="dashboard-active-timeline list-unstyled" id="dashboardTimeline">
                        <li class="d-flex align-items-center mb-15">
                            <div class="timeline-icon bg-primary mr-3">
                                <i class="icon_plus"></i>
                            </div>
                            <div class="timeline-info">
                                <h6 class="mb-1 font-15">Client Meeting</h6>
                                <span class="font-13">Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                                <p class="mb-0 font-13">25 mins ago</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-center mb-15">
                            <div class="timeline-icon bg-warning mr-3">
                                <i class="icon_mic_alt"></i>
                            </div>
                            <div class="timeline-info">
                                <h6 class="mb-1 font-15">Email Newsletter</h6>
                                <span class="font-13">Cupcake gummi bears soufflé caramels candy</span>
                                <p class="mb-0 font-13">29 mins ago</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-center mb-15">
                            <div class="timeline-icon bg-danger mr-3">
                                <i class="icon_mail_alt"></i>
                            </div>
                            <div class="timeline-info">
                                <h6 class="mb-1 font-15">Plan Webinar</h6>
                                <span class="font-13">Candy ice cream cake caramels candy.</span>
                                <p class="mb-0 font-13">28 mins ago</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-center mb-15">
                            <div class="timeline-icon bg-success mr-3">
                                <i class="icon_check"></i>
                            </div>
                            <div class="timeline-info">
                                <h6 class="mb-1 font-15">Launch Website</h6>
                                <span class="font-13">Candy ice cream cake caramels candy. </span>
                                <p class="mb-0 font-13">45 mins ago</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-center mb-15">
                            <div class="timeline-icon bg-danger mr-3">
                                <i class="icon_mail_alt"></i>
                            </div>
                            <div class="timeline-info">
                                <h6 class="mb-1 font-15">Plan Webinar</h6>
                                <span class="font-13">Candy ice cream cake.</span>
                                <p class="mb-0 font-13">50 mins ago</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recent Post</h5>
                    <div class="recent-post-single mb-20">
                        <a href="#">
                            <div class="recent-post d-flex">
                                <div class="recent-post-img">
                                    <img class="post-img" src="{{asset('asets/image/1.png')}}" alt="" />
                                </div>
                                <div class="recent-post">
                                    <h6 class="mb-0 font-15">Lana Smith</h6>
                                    <p class="mb-0 font-13">Diamurabitur at dolor elementum</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="recent-post-single mb-20">
                        <a href="#">
                            <div class="recent-post d-flex">
                                <div class="recent-post-img">
                                    <img class="post-img" src="{{asset('asets/image/2.png')}}" alt="" />
                                </div>
                                <div class="recent-post">
                                    <h6 class="mb-0 font-15">Joli Smith</h6>
                                    <p class="mb-0 font-13">Diamurabitur at dolor elementum</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="recent-post-single mb-20">
                        <a href="#">
                            <div class="recent-post d-flex">
                                <div class="recent-post-img">
                                    <img class="post-img" src="{{asset('asets/image/3.png')}}" alt="" />
                                </div>
                                <div class="recent-post">
                                    <h6 class="mb-0 font-15">Jhon Deo</h6>
                                    <p class="mb-0 font-13">Diamurabitur at dolor</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="recent-post-single mb-20">
                        <a href="#">
                            <div class="recent-post d-flex">
                                <div class="recent-post-img">
                                    <img class="post-img" src="{{asset('asets/image/4.png')}}" alt="" />
                                </div>
                                <div class="recent-post">
                                    <h6 class="mb-0 font-15">Hasra Bin</h6>
                                    <p class="mb-0 font-13">Diamurabitur at dolor.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="recent-post-single mb-20">
                        <a href="#">
                            <div class="recent-post d-flex">
                                <div class="recent-post-img">
                                    <img class="post-img" src="{{asset('asets/image/5.png')}}" alt="" />
                                </div>
                                <div class="recent-post">
                                    <h6 class="mb-0 font-15">Sonla Smith</h6>
                                    <p class="mb-0 font-13">Diamurabitur at dolor</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="recent-post-button text-center">
                        <a href="#">View All</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Projects</h6>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Admintro</td>
                                    <td>01/01/2019</td>
                                    <td>26/04/2019</td>
                                    <td><span class="badge badge-danger">Released</span></td>
                                    <td>David</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Admintro</td>
                                    <td>01/01/2019</td>
                                    <td>26/04/2019</td>
                                    <td><span class="badge badge-success">Review</span></td>
                                    <td>Carlta </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Admintro</td>
                                    <td>01/05/2019</td>
                                    <td>10/09/2019</td>
                                    <td><span class="badge badge-info">Pending</span></td>
                                    <td>Jhon</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Admintro</td>
                                    <td>01/01/2019</td>
                                    <td>31/11/2019</td>
                                    <td><span class="badge badge-warning">Work in Progress</span>
                                    </td>
                                    <td>Ajoy Das</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Admintro</td>
                                    <td>01/01/2019</td>
                                    <td>31/12/2019</td>
                                    <td><span class="badge badge-danger text-white">Coming soon</span></td>
                                    <td>Yaretzi</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Admintro</td>
                                    <td>01/01/2019</td>
                                    <td>31/12/2019</td>
                                    <td><span class="badge badge-primary">Coming soon</span></td>
                                    <td>Nazrul</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h6 class="mb-0">Total Visit</h6>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-borderless table-sm tx-13 tx-nowrap mg-b-0">
                            <thead>
                                <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                                    <th class="wd-5p">Link</th>
                                    <th>Page Title</th>
                                    <th class="text-right">Per: (%)</th>
                                    <th class="text-right">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle"><a class="visit-icon" href="#"><svg id="icon-home-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link link-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg></a></td>
                                    <td class="align-middle tx-medium">Homepage</td>
                                    <td class="align-middle text-right">
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-inverse progress-bar-animated progress-bar-striped" style="width:65%;" role="progressbar"> <span class="sr-only">65% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-right"><span>65.35%</span></td>
                                </tr>

                                <tr>
                                    <td class="align-middle"><a class="visit-icon" href="#"><svg id="icon-home-21" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link link-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg></a></td>
                                    <td class="align-middle tx-medium">Services</td>
                                    <td class="align-middle text-right">
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-success progress-bar-animated progress-bar-striped" style="width: 84%;" role="progressbar"> <span class="sr-only">84% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span>84.97%</span></td>
                                </tr>

                                <tr>
                                    <td class="align-middle"><a class="visit-icon" href="#"><svg id="icon-home-22" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link link-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg></a></td>
                                    <td class="align-middle tx-medium">List of Products</td>
                                    <td class="align-middle text-right">
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-danger progress-bar-animated progress-bar-striped" style="width: 38%;" role="progressbar"> <span class="sr-only">38% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span>38.66%</span></td>
                                </tr>

                                <tr>
                                    <td class="align-middle"><a class="visit-icon" href="#"><svg id="icon-home-23" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link link-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg></a></td>
                                    <td class="align-middle tx-medium">Contact</td>
                                    <td class="align-middle text-right">
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-info progress-bar-animated progress-bar-striped" style="width: 16%;" role="progressbar"> <span class="sr-only">16% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span>16.11%</span></td>
                                </tr>

                                <tr>
                                    <td class="align-middle"><a class="visit-icon" href="#"><svg id="icon-home-24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link link-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg></a></td>
                                    <td class="align-middle tx-medium">Services</td>
                                    <td class="align-middle text-right">
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-warning progress-bar-animated progress-bar-striped" style="width: 84%;" role="progressbar"> <span class="sr-only">84% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td class="text-right"><span>84.97%</span></td>
                                </tr>

                                <tr>
                                    <td class="align-middle pb-0"><a class="visit-icon" href="#"><svg id="icon-home-25" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link link-icon">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg></a></td>
                                    <td class="align-middle tx-medium pb-0">Product 50%</td>
                                    <td class="align-middle text-right pb-0">
                                        <div class="progress h-6">
                                            <div class="progress-bar bg-success progress-bar-animated progress-bar-striped" style="width: 50%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td class="text-right pb-0"><span>50.34%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->
    </div>
</div>

@endsection