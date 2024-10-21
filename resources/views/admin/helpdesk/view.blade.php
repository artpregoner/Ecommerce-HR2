@extends('layouts.app')
@section('title')Helpdesk - Reply @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')View Reply @endsection <!--active pageheader-->

@section('content')
<div class="chat-module">
    <div class="row">
        <div class="col-lg-6">
            <div class="email-title">
                <span class="icon"><i class="fas fa-inbox"></i></span> Ticket details
            </div>
        </div>
        <div class="form-group row text-right ml-auto">
            <div class="col col-sm-10 col-lg-12 offset-sm-10 offset-lg-5 ml-auto">
                <button type="button" class="btn btn-space btn-primary" onclick="window.history.back();">
                    Return to Ticket Lists
                </button>
            </div>
        </div>
    </div>
    <div class="chat-module-top">
        <div class="chat-module-body">
            <div class="media chat-item">
                <img alt="Admin" src="../assets/images/avatar-2.jpg" class="rounded-circle user-avatar-lg">
                <div class="media-body">
                    <div class="chat-item-title">
                        <span class="chat-item-author">Admin</span>
                        <span>4 days ago</span>
                    </div>
                    <div class="chat-item-body">
                        <p>Nice one, Nulla ut diam porttitor odio malesuada malesuada eu at ipsum.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="media chat-item">
                <img alt="User" src="../assets/images/avatar-3.jpg" class="rounded-circle user-avatar-lg">
                <div class="media-body">
                    <div class="chat-item-title">
                        <span class="chat-item-author">User</span>
                        <span>3 days ago</span>
                    </div>
                    <div class="chat-item-body">
                        <p>Roger that boss! Donec quis ante ut felis tincidunt blandit. 🔥</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="email editor">
        <div class="col-md-12 p-0">
            <div class="form-group">
                <label class="control-label sr-only" for="summernote">Descriptions</label>
                <textarea class="form-control" id="summernote" name="editordata" rows="6" placeholder="Write Descriptions"></textarea>
            </div>
        </div>
        <div class="email action-send">
            <div class="col-md-10">
                <div class="form-group">
                    <button class="btn btn-primary btn-space" type="submit">
                        <i class="icon s7-mail"></i> Send
                    </button>
                    <button onclick="window.history.back();" class="btn btn-secondary btn-space" type="button" onclick="document.getElementById('summernote').value = '';">
                        <i class="icon s7-close"></i> Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@endsection
