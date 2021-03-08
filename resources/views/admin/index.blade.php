@include('layout.head')
@include('layout.header')
@include('layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
              
     
        <div class="tabs-animation">
        <div class="mb-3 card">
               
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="fa fa-newspaper text-dark opacity-8"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">NEWS</div>
                                <div class="widget-numbers">500</div>
                                <div class="widget-description opacity-8 text-focus">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block"></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="fa fa-globe-africa"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">EVENTS</div>
                                <div class="widget-numbers"><span>900</span></div>
                                
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block"></div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                <i class="fa fa-home text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">News Letter</div>
                                <div class="widget-numbers text-success"><span>563</span></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="card mb-3 widget-chart">
                        <div class="widget-chart-content">
                            <div class="icon-wrapper rounded">
                                <div class="icon-wrapper-bg bg-warning"></div>
                                <i class="fa fa-search-dollar text-warning"></i>
                            </div>
                            <div class="widget-numbers">
                                <span>300</span>
                            </div>
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold"> Donations </div>
                            <div class="widget-description opacity-8">
                                <span class="text-danger pr-1">
                                    <i class="fa fa-angle-down"></i>
                                    <span class="pl-1">54.1%</span>
                                </span>
                                down last 30 days
                            </div>
                        </div>
                        <div class="widget-chart-wrapper">
                            <div id="dashboard-sparklines-simple-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="card mb-3 widget-chart">
                        <div class="widget-chart-content">
                            <div class="icon-wrapper rounded">
                                <div class="icon-wrapper-bg bg-danger"></div>
                                <i class="fa fa-user-friends text-danger"></i>
                            </div>
                            <div class="widget-numbers"><span>2000</span></div>
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-danger font-weight-bold">
                                Members
                            </div>
                            <div class="widget-description opacity-8">
                                Compared to YoY:
                                <span class="text-info pl-1">
                                    <i class="fa fa-angle-down"></i>
                                    <span class="pl-1">14.1%</span>
                                </span>
                            </div>
                        </div>
                        <div class="widget-chart-wrapper">
                            <div id="dashboard-sparklines-simple-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-4">
                    <div class="card mb-3 widget-chart">
                        <div class="widget-chart-content">
                            <div class="icon-wrapper rounded">
                                <div class="icon-wrapper-bg bg-info"></div>
                                <i class="fa fa-user-cog text-info"></i>
                            </div>
                            <div class="widget-numbers text-danger"><span>$294</span></div>
                            <div class="widget-subheading fsize-1 pt-2 opacity-10 text-info font-weight-bold">
                                Management Team</div>
                            <div class="widget-description opacity-8">
                                Down by
                                <span class="text-success pl-1">
                                    <i class="fa fa-angle-down"></i>
                                    <span class="pl-1">21.8%</span>
                                </span>
                            </div>
                        </div>
                        <div class="widget-chart-wrapper">
                            <div id="dashboard-sparklines-simple-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            
           
        </div>
    </div>

    @include('layout.footerdash');