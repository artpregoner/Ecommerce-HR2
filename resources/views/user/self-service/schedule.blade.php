@extends('layouts.app')
@section('title')Schedule @endsection
@section('header')Schedule @endsection <!--pageheader-->
@section('active-header')My Schedule @endsection <!--active pageheader-->

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div id='calendar1'></div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end simple calendar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- events calendar -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div id='wrap'>
                    <div id='external-events'>
                        <h4>Draggable Events</h4>
                        <div class='fc-event'>Leave</div>
                        <div class='fc-event bg-secondary border-secondary'>Rest Day</div>
                        <div class='fc-event bg-brand border-brand'>My Event 3</div>
                        <div class='fc-event bg-info border-info'>My Event 4</div>
                        <div class='fc-event bg-success border-success'>My Event 5</div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id='drop-remove'>
                            <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                        </div>
                    </div>
                    <div id='calendar'></div>
                    <div style='clear:both'></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection