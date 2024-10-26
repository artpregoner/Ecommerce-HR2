@extends('layouts.app')
@section('title', 'Recognition & Rewards Program')
@section('header', 'Employee Engagement')
@section('active-header', 'Recognition and Rewards Program')

@section('content')
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Create New Recognition</h5>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>Employee</label>
                        <select class="form-control">
                            <option>Select Employee</option>
                            <option>Pregoner</option>
                            <option>Pregoner</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Recognition Type</label>
                        <select class="form-control">
                            <option>Performance Award</option>
                            <option>Innovation Award</option>
                            <option>Team Player Award</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Points</label>
                        <input type="number" placeholder="Enter points" class="form-control">
                    </div>
                    <div class="form-group row text-right">
                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0 ml-auto">
                            <button type="submit" class="btn btn-success">Award Recognition</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Quick Stats</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Total Employees</th>
                            <th scope="col">Active Rewards</th>
                            <th scope="col">Points Awarded</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">150</th>
                            <td>25</td>
                            <td>1,240</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Recent Recognitions</h5>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Employee</th>
                            <th scope="col">Award Type</th>
                            <th scope="col">Points</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Art Javar Pregoner</th>
                            <td>Performance Award</td>
                            <td>100</td>
                            <td>2024-10-24</td>
                            <td><span class="badge badge-success">Approve</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Art Javar Pregoner</th>
                            <td>Innovation Award</td>
                            <td>150</td>
                            <td>2024-10-23</td>
                            <td><span class="badge badge-success">Approve</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection