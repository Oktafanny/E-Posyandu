<!-- page content -->
<!-- Add this in the <head> section of your HTML -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="display: inline-block;">
        <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Ibu</span>
                <div class="count">
                    <?= $total_ibu ?>
                </div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Anak</span>
                <div class="count ">
                    <?= $total_anak ?>
                </div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Petugas</span>
                <div class="count">
                    <?= $total_petugas ?>
                </div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>4% </i> From last Week</span>
            </div>
            <!-- <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                <div class="count">2,315</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                <div class="count">7,325</div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div> -->
            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Rata-rata BB Anak</span>
                <div class="count green">
                    <?= $rata_bb ?>
                </div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>4% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Rata-rata TB Anak</span>
                <div class="count green">
                    <?= $rata_tb ?>
                </div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>4% </i> From last Week</span>
            </div>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Line graph<small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">

                <div class="row x_title">
                    <div class="col-md-6">
                        <h3>Network Activities <small>Graph title sub-title</small></h3>
                    </div>
                    <div class="col-md-6">
                        <div id="reportrange" class="pull-right"
                            style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-sm-9 ">
                    <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3  bg-white">
                    <div class="x_title">
                        <h2>Top Campaign Performance</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-12 col-sm-12 ">
                        <div>
                            <p>Facebook Campaign</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Twitter Campaign</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                        <div>
                            <p>Conventional Media</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Bill boards</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <br />
</div>
<!-- /page content -->