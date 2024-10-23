@extends('layouts.app')
@section('title', 'Workforce - Skill Gap')
@section('header', 'Workforce')<!--pageheader-->
@section('active-header', 'Skill Gap')<!--active pageheader-->
@section('styles')
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 40px;
    }

    .analytics-section {
        display: flex;
        justify-content: space-between;
        margin-bottom: 50px;
        flex-wrap: wrap; /* Allow wrapping on smaller screens */
    }

    .analytics-card {
        background: #ffffff; /* Light background */
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1); /* Softer shadow */
        flex: 1;
        margin: 0 10px;
        text-align: center;
        min-width: 300px; /* Minimum width for responsiveness */
    }

    .analytics-card h2 {
        color: #333333; /* Darker text color */
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .skill-gap-section, .recommendations-section {
        background: #ffffff; /* Light background */
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1); /* Softer shadow */
        margin-bottom: 30px;
    }

    .skill-gap-section h2, .recommendations-section h2 {
        color: #333333; /* Darker text color */
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        color: #333333; /* Darker text color */
    }

    .form-group input, .form-group select {
        width: 100%;
        padding: 10px;
        background: #f9f9f9; /* Light input background */
        border: 1px solid #ccc; /* Lighter border */
        border-radius: 8px;
        color: #333333; /* Darker text color */
        font-size: 1rem;
    }

    .btn-analyze {
        background-color: #ffb800;
        color: #121212;
        padding: 10px 20px;
        font-size: 1.1rem;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-analyze:hover {
        background-color: #ffc93c;
    }

    #skill-gap-analysis-result {
        margin-top: 30px;
        overflow-x: auto; /* Make it scrollable on small screens */
    }

    #skill-gap-analysis-result table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    #skill-gap-analysis-result th, #skill-gap-analysis-result td {
        padding: 10px;
        border: 1px solid #ccc; /* Lighter border */
    }

    #recommendations-list {
        list-style: none;
        padding: 0; /* Remove default padding */
    }

    #recommendations-list li {
        background: #f2f2f2; /* Light background for recommendations */
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 10px;
        font-weight: 600;
        transition: background 0.3s ease; /* Smooth transition */
    }

    #recommendations-list li:hover {
        background: #e2e2e2; /* Darker on hover */
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .analytics-section {
            flex-direction: column; /* Stack items on smaller screens */
        }
        .analytics-card {
            margin-bottom: 20px; /* Add margin below each card */
        }
    }
</style> 
@endsection

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
                    <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#overview" role="tab" aria-controls="home" aria-selected="false">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#skill_analysis" role="tab" aria-controls="profile" aria-selected="false">Skill Analysis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#performance" role="tab" aria-controls="contact" aria-selected="false">Performance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="setting-tab-justify" data-toggle="tab" href="#training-development" role="tab" aria-controls="setting" aria-selected="true">Training & Development</a>
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
                        @include('admin.workforce-analytics.partials.skill-analysis')
                    </div>
                    <div class="tab-pane fade" id="performance" role="tabpanel" aria-labelledby="contact-tab-justify">
                        <div class="row">
                            <div class="col-xl- col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                                <div class="card">
                                    <h5 class="card-header">Employee Performance Matrix</h5>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Employee</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Performance Score</th>
                                                    <th scope="col">Skill Proficiency</th>
                                                    <th scope="col">Training Status</th>
                                                    <th scope="col">Engagement Score</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Juan Dela Cruz</th>
                                                    <td>Marketing</td>
                                                    <td>85%</td>
                                                    <td>79%</td>
                                                    <td>1 / 2</td>
                                                    <td>8.5/10</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Maria Santos</th>
                                                    <td>IT</td>
                                                    <td>90%</td>
                                                    <td>83%</td>
                                                    <td>1 / 2</td>
                                                    <td>9/10</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="training-development" role="tabpanel" aria-labelledby="setting-tab-justify">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Training Investment by Department</h5>
                                    <div class="card-body">
                                        <canvas id="chartjs_balance_bar"></canvas>
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
@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/workforce/skillGap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
@section('scripts')
  <script>
    // Add any required JavaScript here for charts, interaction, etc.
    console.log("Skill Gap Analyzer loaded");
  </script>
@endsection