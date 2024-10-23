@extends('layouts.app')
@section('title')Helpdesk - Reply @endsection
@section('header')Helpdesk @endsection <!--pageheader-->
@section('active-header')View Reply @endsection <!--active pageheader-->

@section('content')
<div class="chat-module">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="email-title"><span class="icon"><i class="fas fa-inbox"></i></span> Ticket Reply </div>
                    <button type="button" class="btn btn-space btn-primary" onclick="window.history.back();">
                        Return to Ticket Lists
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="chat-module-top">
        <div class="chat-module-body">
            <div class="media chat-item">
                <img alt="Admin" src="{{ asset('template/assets/images/admin.webp') }}" class="rounded-circle user-avatar-lg">
                <div class="media-body">
                    <div class="chat-item-title">
                        <span class="chat-item-author">Admin</span>
                        <span>2 min ago</span>
                    </div>
                    <div class="chat-item-body">
                        <p>Gagawan na ng paraan.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="media chat-item">
                <img alt="User" src="{{ asset('template/assets/images/user1.png') }}" class="rounded-circle user-avatar-lg">
                <div class="media-body">
                    <div class="chat-item-title">
                        <span class="chat-item-author">User</span>
                        <span>1 min ago</span>
                    </div>
                    <div class="chat-item-body">
                        <p>Salamat po. 🔥</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="email editor">
        <div class="col-md-12 p-0">
            <div class="form-group">
                <label class="control-label sr-only" for="summernote">Descriptions</label>
                <textarea class="form-control" id="summernote" name="editordata" rows="6" placeholder="Write your reply!"></textarea>
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
