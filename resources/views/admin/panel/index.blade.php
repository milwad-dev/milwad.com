@extends('admin.master')

@section('title', 'Panel')

@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="social-dash-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Social Media Dashboard</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <div class="action-btn">

                                    <div class="form-group mb-0">
                                        <div class="input-container icon-left position-relative">
                                                    <span class="input-icon icon-left">
                                                        <span data-feather="calendar"></span>
                                                    </span>
                                            <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                            <span class="input-icon icon-right">
                                                        <span data-feather="chevron-down"></span>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown action-btn">
                                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-download"></i> Export
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <span class="dropdown-item">Export With</span>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-print"></i> Printer</a>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-file-pdf"></i> PDF</a>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-file-text"></i> Google Sheets</a>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-file-csv"></i> CSV</a>
                                    </div>
                                </div>
                                <div class="dropdown action-btn">
                                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-share"></i> Share
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                        <span class="dropdown-item">Share Link</span>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-facebook"></i> Facebook</a>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-twitter"></i> Twitter</a>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-google"></i> Google</a>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-feed"></i> Feed</a>
                                        <a href="#" class="dropdown-item">
                                            <i class="la la-instagram"></i> Instagram</a>
                                    </div>
                                </div>
                                <div class="action-btn">
                                    <a href="#" class="btn btn-sm btn-primary btn-add">
                                        <i class="la la-plus"></i> Add New</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-25">
                        <div class="social-overview-wrap">

                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>Social Media Overview</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="social-overview">
                                        <li>
                                            <div class="social-box bg-facebook">
                                                <span class="la la-facebook"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Likes</p>
                                        </li>
                                        <li>
                                            <div class="social-box bg-twitter">
                                                <span class="la la-twitter"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Followers</p>
                                        </li>
                                        <li>
                                            <div class="social-box gradientInstragram">
                                                <span class="la la-instagram"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Followers</p>
                                        </li>
                                        <li>
                                            <div class="social-box bg-youtube">
                                                <span class="la la-youtube"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Subscribers</p>
                                        </li>
                                        <li>
                                            <div class="social-box bg-pinterest">
                                                <span class="la la-pinterest"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Followers</p>
                                        </li>
                                        <li>
                                            <div class="social-box bg-linkedin">
                                                <span class="la la-linkedin"></span>
                                            </div>
                                            <h3>5,461</h3>
                                            <p>Followers</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 mb-25">

                        <div class="card card-overview border-0">
                            <div class="card-header">
                                <h6>Facebook Overview</h6>
                                <div class="card-extra">
                                    <div class="card-tab btn-group nav nav-tabs">
                                        <a class="btn btn-xs btn-white active border-light" id="f_today-tab" data-toggle="tab" href="#f_overview-today" role="tab" area-controls="f_overview" aria-selected="true">Today</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_week-tab" data-toggle="tab" href="#f_overview-week" role="tab" area-controls="f_overview" aria-selected="false">Week</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_month-tab" data-toggle="tab" href="#f_overview-month" role="tab" area-controls="f_overview" aria-selected="false">Month</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_year-tab" data-toggle="tab" href="#f_overview-year" role="tab" area-controls="f_overview" aria-selected="false">Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="f_overview-today" role="" aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartOne"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>2,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>40%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartTwo"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>2,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                                                <span class="color-danger"><i data-feather="trending-down"></i>
                                                                                    <strong>15%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartThree"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>1,132</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartFour"></canvas>
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
                                    <div class="tab-pane fade" id="f_overview-week" role="" aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartFive"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>92,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>26%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartSix"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>9,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                                                <span class="color-danger"><i data-feather="trending-down"></i>
                                                                                    <strong>23%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartSeven"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>432</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>44%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartEight"></canvas>
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
                                    <div class="tab-pane fade" id="f_overview-month" role="" aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartNine"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>492,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>36%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartTen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>12,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                                                <span class="color-danger"><i data-feather="trending-down"></i>
                                                                                    <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartEleven"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>1,432</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>14%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartTwelve"></canvas>
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
                                    <div class="tab-pane fade" id="f_overview-year" role="" aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartThirteen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>492,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>36%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartFourteen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>12,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                                                <span class="color-danger"><i data-feather="trending-down"></i>
                                                                                    <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartFifteen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>1,432</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                                                <span class="color-success"><i data-feather="trending-up"></i>
                                                                                    <strong>14%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartSixteen"></canvas>
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
                                </div>

                                <!-- ends: .row -->
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-4 col-md-6 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Youtube Subscribers</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a href="#y_subscriber-week" class="active" data-toggle="tab" id="ys_week-tab" role="tab" area-controls="y_subscriber" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#y_subscriber-month" data-toggle="tab" id="ys_month-tab" role="tab" area-controls="y_subscriber" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#y_subscriber-year" id="ys_year-tab" data-toggle="tab" role="tab" area-controls="y_subscriber" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="y_subscriber-week" role="tabpanel" aria-labelledby="y_subscriber-week">
                                        <div class="card-chart-bar d-flex justify-content-between">
                                            <div class="card-bar-top">
                                                <p>Subscribers</p>
                                                <h3 class="card-bar-info d-flex align-items-end">25,472
                                                    <sub class="color-success">
                                                        <i data-feather="arrow-up"></i> 25%</sub>
                                                </h3>
                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="ys_barChartOne"></canvas>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="y_subscriber-month" role="tabpanel" aria-labelledby="y_subscriber-week">
                                        <div class="card-chart-bar d-flex justify-content-between">
                                            <div class="card-bar-top">
                                                <p>Subscribers</p>
                                                <h3 class="card-bar-info d-flex align-items-end">75,582
                                                    <sub class="color-success">
                                                        <i data-feather="arrow-up"></i> 45%</sub>
                                                </h3>
                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="ys_barChartTwo"></canvas>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="y_subscriber-year" role="tabpanel" aria-labelledby="y_subscriber-week">
                                        <div class="card-chart-bar d-flex justify-content-between">
                                            <div class="card-bar-top">
                                                <p>Subscribers</p>
                                                <h3 class="card-bar-info d-flex align-items-end">124,892
                                                    <sub class="color-success">
                                                        <i data-feather="arrow-up"></i> 65%</sub>
                                                </h3>
                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Gained
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="ys_barChartThree"></canvas>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-4 col-md-6 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Twitter Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#to_week" data-toggle="tab" id="to_week-tab" role="tab" area-controls="to_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#to_month" data-toggle="tab" id="to_month-tab" role="tab" area-controls="to_month" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#to_year" data-toggle="tab" id="to_year-tab" role="tab" area-controls="to_year" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="to_week" role="tabpanel" aria-labelledby="to_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>278</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpOne"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTwo"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpThree"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFour"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFive"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="to_month" role="tabpanel" aria-labelledby="to_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>378</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpOneM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>88.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTwoM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>4,417</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpThreeM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>7.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFourM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>10,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFiveM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="to_year" role="tabpanel" aria-labelledby="to_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>578</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpOneY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTwoY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpThreeY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFourY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFiveY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card-body -->
                        </div>

                    </div>
                    <div class="col-xxl-4 col-md-6 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Instagram Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#io_week" data-toggle="tab" id="io_week-tab" role="tab" area-controls="io_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#io_month" data-toggle="tab" id="io_month-tab" role="tab" area-controls="io_month" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#io_year" data-toggle="tab" id="io_year-tab" role="tab" area-controls="io_year" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="io_week" role="tabpanel" aria-labelledby="io_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>278</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSix"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSeven"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpEight"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpNine"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTen"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="io_month" role="tabpanel" aria-labelledby="io_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>378</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSixM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSevenM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpEightM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpNineM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTenM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="io_year" role="tabpanel" aria-labelledby="io_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>578</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSixY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSevenY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpEightY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpNineY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTenY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-4 col-md-6 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Linkedin Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#lo_week" data-toggle="tab" id="lo_week-tab" role="tab" area-controls="lo_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#lo_month" data-toggle="tab" id="lo_month-tab" role="tab" area-controls="lo_week" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#lo_year" data-toggle="tab" id="lo_year-tab" role="tab" area-controls="lo_week" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="lo_week" role="tabpanel" aria-labelledby="lo_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>178</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp11"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp12"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp13"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp14"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp15"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lo_month" role="tabpanel" aria-labelledby="lo_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>378</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp11M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp12M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp13M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp14M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp15M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lo_year" role="tabpanel" aria-labelledby="lo_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>578</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp11Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp12Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp13Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp14Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp15Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-8 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Social Traffic Metrics</h6>
                                <div class="card-extra">
                                    <div class="card-tab btn-group atbd-button-group mr-3 nav nav-tabs">
                                        <a class="btn btn-xs btn-white active border" id="f_today-tab" data-toggle="tab" href="#st_matrics-today" role="tab" area-controls="st_matrics" aria-selected="true">Today</a>
                                        <a class="btn btn-xs btn-white border" id="f_week-tab" data-toggle="tab" href="#st_matrics-week" role="tab" area-controls="st_matrics" aria-selected="false">Week</a>
                                        <a class="btn btn-xs btn-white border" id="f_month-tab" data-toggle="tab" href="#st_matrics-month" role="tab" area-controls="st_matrics" aria-selected="false">Month</a>
                                        <a class="btn btn-xs btn-white border" id="f_year-tab" data-toggle="tab" href="#st_matrics-year" role="tab" area-controls="st_matrics" aria-selected="false">Year</a>
                                    </div>
                                    <div class="dropdown dropleft">
                                        <a href="#" role="button" id="Today" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="Today">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="st_matrics-today" role="" aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Acquisition</th>
                                                    <th scope="col" colspan="3">Behavior</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>Users</td>
                                                    <td>New Users</td>
                                                    <td>Sessions</td>
                                                    <td>Bounce Rate</td>
                                                    <td>Pages / Sessions</td>
                                                    <td>Avg. Session Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Facebook</a>
                                                    </td>
                                                    <td>1,458</td>
                                                    <td>452</td>
                                                    <td>9,235</td>
                                                    <td>25%</td>
                                                    <td>3.9</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Twitter</a>
                                                    </td>
                                                    <td>4,785</td>
                                                    <td>426</td>
                                                    <td>8,156</td>
                                                    <td>-26%</td>
                                                    <td>1.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Linkedin</a>
                                                    </td>
                                                    <td>3,416</td>
                                                    <td>951</td>
                                                    <td>6,124</td>
                                                    <td>56%</td>
                                                    <td>5.3</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Youtube</a>
                                                    </td>
                                                    <td>5,426</td>
                                                    <td>753</td>
                                                    <td>9,147</td>
                                                    <td>15%</td>
                                                    <td>7.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Instagram</a>
                                                    </td>
                                                    <td>6,258</td>
                                                    <td>852</td>
                                                    <td>4,369</td>
                                                    <td>75%</td>
                                                    <td>2.7</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Google+</a>
                                                    </td>
                                                    <td>9,632</td>
                                                    <td>123</td>
                                                    <td>1,256</td>
                                                    <td>46%</td>
                                                    <td>2.6</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-week" role="tabpanel" aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Acquisition</th>
                                                    <th scope="col" colspan="3">Behavior</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>Users</td>
                                                    <td>New Users</td>
                                                    <td>Sessions</td>
                                                    <td>Bounce Rate</td>
                                                    <td>Pages / Sessions</td>
                                                    <td>Avg. Session Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Facebook</a>
                                                    </td>
                                                    <td>1,558</td>
                                                    <td>452</td>
                                                    <td>9,235</td>
                                                    <td>27%</td>
                                                    <td>6.9</td>
                                                    <td>00:06:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Twitter</a>
                                                    </td>
                                                    <td>4,585</td>
                                                    <td>426</td>
                                                    <td>8,856</td>
                                                    <td>-26%</td>
                                                    <td>1.5</td>
                                                    <td>00:03:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Linkedin</a>
                                                    </td>
                                                    <td>3,416</td>
                                                    <td>951</td>
                                                    <td>6,124</td>
                                                    <td>56%</td>
                                                    <td>5.3</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Youtube</a>
                                                    </td>
                                                    <td>5,426</td>
                                                    <td>553</td>
                                                    <td>4,647</td>
                                                    <td>20%</td>
                                                    <td>8.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Instagram</a>
                                                    </td>
                                                    <td>62,258</td>
                                                    <td>452</td>
                                                    <td>4,669</td>
                                                    <td>55%</td>
                                                    <td>1.7</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Google+</a>
                                                    </td>
                                                    <td>6,632</td>
                                                    <td>113</td>
                                                    <td>1,956</td>
                                                    <td>56%</td>
                                                    <td>5.6</td>
                                                    <td>00:06:16</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-month" role="tabpanel" aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Acquisition</th>
                                                    <th scope="col" colspan="3">Behavior</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>Users</td>
                                                    <td>New Users</td>
                                                    <td>Sessions</td>
                                                    <td>Bounce Rate</td>
                                                    <td>Pages / Sessions</td>
                                                    <td>Avg. Session Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Facebook</a>
                                                    </td>
                                                    <td>1,258</td>
                                                    <td>452</td>
                                                    <td>9,235</td>
                                                    <td>25%</td>
                                                    <td>3.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Twitter</a>
                                                    </td>
                                                    <td>4,785</td>
                                                    <td>423</td>
                                                    <td>8,156</td>
                                                    <td>-26%</td>
                                                    <td>1.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Linkedin</a>
                                                    </td>
                                                    <td>3,416</td>
                                                    <td>956</td>
                                                    <td>6,124</td>
                                                    <td>46%</td>
                                                    <td>5.3</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Youtube</a>
                                                    </td>
                                                    <td>5,426</td>
                                                    <td>753</td>
                                                    <td>9,147</td>
                                                    <td>15%</td>
                                                    <td>7.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Instagram</a>
                                                    </td>
                                                    <td>6,258</td>
                                                    <td>852</td>
                                                    <td>4,369</td>
                                                    <td>75%</td>
                                                    <td>2.7</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Google+</a>
                                                    </td>
                                                    <td>9,632</td>
                                                    <td>123</td>
                                                    <td>1,656</td>
                                                    <td>36%</td>
                                                    <td>2.8</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-year" role="tabpanel" aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" colspan="3">Acquisition</th>
                                                    <th scope="col" colspan="3">Behavior</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>Users</td>
                                                    <td>New Users</td>
                                                    <td>Sessions</td>
                                                    <td>Bounce Rate</td>
                                                    <td>Pages / Sessions</td>
                                                    <td>Avg. Session Duration</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Facebook</a>
                                                    </td>
                                                    <td>1,458</td>
                                                    <td>452</td>
                                                    <td>9,245</td>
                                                    <td>35%</td>
                                                    <td>5.9</td>
                                                    <td>00:08:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Twitter</a>
                                                    </td>
                                                    <td>4,285</td>
                                                    <td>424</td>
                                                    <td>8,356</td>
                                                    <td>-25%</td>
                                                    <td>1.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Linkedin</a>
                                                    </td>
                                                    <td>3,416</td>
                                                    <td>951</td>
                                                    <td>6,124</td>
                                                    <td>56%</td>
                                                    <td>5.3</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Youtube</a>
                                                    </td>
                                                    <td>5,426</td>
                                                    <td>753</td>
                                                    <td>9,147</td>
                                                    <td>15%</td>
                                                    <td>7.5</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Instagram</a>
                                                    </td>
                                                    <td>6,258</td>
                                                    <td>852</td>
                                                    <td>4,369</td>
                                                    <td>75%</td>
                                                    <td>2.7</td>
                                                    <td>00:05:16</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#">Google+</a>
                                                    </td>
                                                    <td>9,632</td>
                                                    <td>123</td>
                                                    <td>1,256</td>
                                                    <td>46%</td>
                                                    <td>2.6</td>
                                                    <td>00:05:16</td>
                                                </tr>
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
@endsection
