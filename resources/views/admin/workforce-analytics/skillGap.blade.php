@extends('layouts.app')
@section('title', 'Workforce - Skill Gap')
@section('header', 'Workforce')<!--pageheader-->
@section('active-header', 'Skill Gap')<!--active pageheader-->
{{-- @section('styles')
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
@endsection --}}

@section('content')
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header"><i class="fas fa-chart-line"></i> Skill Gap Analysis Tool</h5>
            <div class="card-body">
                <form id="form" data-parsley-validate="" novalidate="">
                    <div class="container">
                        <div class="form-container">
                            <div class="form-group">
                                <label for="person"><i class="fas fa-user"></i> Select Employee</label>
                                <select id="person" class="form-control">
                                    <option value="Art Javar Pregoner">Art Javar Pregoner</option>
                                    <option value="Renz Prado">Renz Prado</option>
                                    <option value="Kurven Palma">Kurven Palma</option>
                                    <option value="Ronnin Baldamera">Ronnin Baldamera</option>
                                    <option value="Khelli Mangat">Khelli Mangat</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="job"><i class="fas fa-briefcase"></i> Select Position</label>
                                <select id="job" class="form-control">
                                    <option value="HR Manager">HR Manager</option>
                                    <option value="Recruitment Specialist">Recruitment Specialist</option>
                                    <option value="Training Coordinator">Training Coordinator</option>
                                    <option value="Employee Relations Specialist">Employee Relations Specialist</option>
                                    <option value="Talent Acquisition Specialist">Talent Acquisition Specialist</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="date"><i class="fas fa-calendar"></i> Select Date</label>
                                <input type="date" id="date" class="form-control">
                            </div>
                        </div>

                        <div class="button-group">
                            <button type="button" onclick="performSkillGapAnalysis()" class="btn btn-info">
                                <i class="fas fa-analytics"></i> Analyze Skill Gaps
                            </button>
                            <button type="button" onclick="performSkillProfileAnalysis()" class="btn btn-light btn btn-outline-dark">
                                <i class="fas fa-user-chart"></i> View Skill Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="results" id="results"></div>
            <h5 class="card-header"><i class="fas fa-clipboard-list"></i> Analysis Results</h5>
            <div class="card-body">
                <div id="resultContent"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
// The JavaScript remains the same
<script>
    const skillsData = {
        "Art Javar Pregoner": {
            "HR Manager": {
                "Interviewing": 4,
                "Talent Sourcing": 3,
                "Onboarding": 2,
                "Employee Relations": 3
            },
            "Recruitment Specialist": {
                "Instructional Design": 2,
                "Presentation Skills": 4,
                "Employee Relations": 3,
                "Training Delivery": 5
            }
        },
        "Renz Prado": {
            "HR Manager": {
                "Interviewing": 3,
                "Talent Sourcing": 4,
                "Onboarding": 4,
                "Employee Relations": 3
            },
            "Recruitment Specialist": {
                "Instructional Design": 3,
                "Presentation Skills": 4,
                "Employee Relations": 3,
                "Training Delivery": 4
            }
        },
        "Kurven Palma": {
            "HR Manager": {
                "Interviewing": 2,
                "Talent Sourcing": 5,
                "Onboarding": 3,
                "Employee Relations": 4
            },
            "Recruitment Specialist": {
                "Instructional Design": 4,
                "Presentation Skills": 3,
                "Employee Relations": 5,
                "Training Delivery": 4
            }
        },
        "Ronnin Baldamera": {
            "HR Manager": {
                "Interviewing": 5,
                "Talent Sourcing": 4,
                "Onboarding": 3,
                "Employee Relations": 4
            },
            "Recruitment Specialist": {
                "Instructional Design": 3,
                "Presentation Skills": 4,
                "Employee Relations": 3,
                "Training Delivery": 5
            }
        },
        "Khelli Mangat": {
            "HR Manager": {
                "Interviewing": 4,
                "Talent Sourcing": 3,
                "Onboarding": 5,
                "Employee Relations": 3
            },
            "Recruitment Specialist": {
                "Instructional Design": 2,
                "Presentation Skills": 4,
                "Employee Relations": 3,
                "Training Delivery": 4
            }
        }
    };

    const targetSkills = {
        "HR Manager": {
            "Interviewing": 5,
            "Talent Sourcing": 4,
            "Onboarding": 3,
            "Employee Relations": 4
        },
        "Recruitment Specialist": {
            "Instructional Design": 5,
            "Presentation Skills": 4,
            "Employee Relations": 3,
            "Training Delivery": 5
        },
        "Training Coordinator": {
            "Instructional Design": 5,
            "Presentation Skills": 4,
            "Employee Relations": 3,
            "Training Delivery": 5
        },
        "Employee Relations Specialist": {
            "Employee Relations": 5,
            "Conflict Resolution": 4,
            "Performance Management": 4,
            "Coaching": 5
        },
        "Talent Acquisition Specialist": {
            "Talent Sourcing": 5,
            "Interviewing": 4,
            "Onboarding": 3,
            "Employer Branding": 4
        }
    };

    function performSkillGapAnalysis() {
        const person = document.getElementById('person').value;
        const job = document.getElementById('job').value;
        const personSkills = skillsData[person][job];
        const requiredSkills = targetSkills[job];

        let resultContent = '<div>';
        for (let skill in requiredSkills) {
            const currentLevel = personSkills[skill] || 0;
            const requiredLevel = requiredSkills[skill];
            const gap = requiredLevel - currentLevel;
            const status = gap > 0 ? 'Gap' : 'On Target';

            resultContent += `
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-primary" role="alert">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Skill</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Current Level</th>
                                            <th scope="col">Required Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="skill-name">${skill}</span></td>
                                            <td><span class="skill-gap">${status}</span></td>
                                            <td>${currentLevel}</td>
                                            <td>${requiredLevel}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }
        resultContent += '</div>';
        document.getElementById('resultContent').innerHTML = resultContent;
        document.getElementById('results').style.display = 'block';
    }

    function performSkillProfileAnalysis() {
        document.getElementById('results').style.display = 'block';
        document.getElementById('resultContent').innerHTML = `<p style="color:var(--text-color);">Coming Soon: Skill profile breakdowns for enhanced strategic insights.</p>`;
    }
</script>
@endsection



@section('scripts')
    <script src="{{ asset('asset/libs/js/admin/js/workforce/skillGap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
{{-- @section('content')
<h1>Workforce Analytics</h1>
<div class="row">
    <div class="col-xl- col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block">
            <h5 class="section-title">Justified Tabs</h5>
            <p>Takes the basic nav from above and adds the .nav-tabs class to generate a tabbed interface..</p>
        </div>
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
                                        <div id="sparkline-revenue"></div>
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
                                        <div id="sparkline-revenue2"></div>
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
                                        <div id="sparkline-revenue3"></div>
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
                                        <div id="sparkline-revenue4"></div>
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
@endsection --}}