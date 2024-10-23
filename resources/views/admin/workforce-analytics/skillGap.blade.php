@extends('layouts.app')
@section('title', 'Workforce - Skill Gap')
@section('header', 'Workforce')<!--pageheader-->
@section('active-header', 'Skill Gap')<!--active pageheader-->

@section('content')
<h1>Workforce Analytics</h1>
<div class="row">
    <div class="col-xl- col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block">
            <h5 class="section-title">Justified Tabs</h5>
            <p>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface..</p>
        </div> --}}
        <div class="tab-regular">
            <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#overview" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#skill_analysis" role="tab" aria-controls="profile" aria-selected="false">Skill Analysis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#performance" role="tab" aria-controls="contact" aria-selected="false">Performance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#training&development" role="tab" aria-controls="contact" aria-selected="false">Training & Development</a>
                </li>
            </ul>
            <div class="ecommerce-widget">
                <div class="tab-content" id="myTabContent7">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="home-tab-justify">
                        <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-muted">Total Employees</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1"><span><i class="fa fa-fw fas fas fa-users"></i></span></h1>
                                            </div>
                                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                <span><i class="fa fa-fw fas"></i></span><span>20</span>
                                            </div>
                                        </div>
                                        {{-- <div id="sparkline-revenue"></div> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-muted">Avg Performance</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1"><span><i class="fa fa-fw fas fa-angle-double-up"></i></span></h1>
                                            </div>
                                            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                <span><i class="fa fa-fw fas"></i></span><span>5.86%</span>
                                            </div>
                                        </div>
                                        {{-- <div id="sparkline-revenue2"></div> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-muted">Skill Gap Index</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1"><span><i class="fa fa-fw fas fas fa-ribbon"></i></span></h1>
                                            </div>
                                            <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                                <span>15.5%</span>
                                            </div>
                                        </div>
                                        {{-- <div id="sparkline-revenue3"></div> --}}
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-muted">Training Completion</h5>
                                            <div class="metric-value d-inline-block">
                                                <h1 class="mb-1"><span><i class="fa fa-fw fas fas fa-bookmark"></i></span></h1>
                                            </div>
                                            <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                                <span>78%</span>
                                            </div>
                                        </div>
                                        {{-- <div id="sparkline-revenue4"></div> --}}
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="skill_analysis" role="tabpanel" aria-labelledby="profile-tab-justify">
                        <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque. </p>
                    </div>
                    <div class="tab-pane fade" id="performance" role="tabpanel" aria-labelledby="contact-tab-justify">
                        <p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
                    </div>
                    <div class="tab-pane fade" id="training&development" role="tabpanel" aria-labelledby="contact-tab-justify">
                        <p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">AP and AR Balance
            </h5>
            <div class="card-body">
                <canvas id="chartjs_balance_bar"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/workforce/skillGap.js') }}"></script>
@endsection