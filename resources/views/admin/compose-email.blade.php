@extends('layouts.admin.admin-layout')
@section('content')
<div class="page-header">
    <div class="page-header-title">
        <h4>Compose Mail</h4>
        <span>Find your read/unread mails in Inbox</span>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index-2.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Email</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Compose Email</a>
            </li>
        </ul>
    </div>
</div>

<div class="page-body">
    <div class="card">
        <div class="card-block email-card">
            <div class="row">

                <div class="col-lg-12 col-xl-3">
                    <div class="user-body" style="min-height: 654px;">
                        <div class="card-block">
                            <button class="btn btn-danger btn-block">Compose</button>
                        </div>
                        <ul class="page-list">
                            <li class="active">
                                <div class="mail-section">
                                    <a href="#">
                                        <i class="icofont icofont-inbox"></i> Inbox
                                    </a>
                                    <label class="label label-primary f-right">6</label>
                                </div>
                            </li>
                            <li>
                                <div class="mail-section">
                                    <a href="#">
                                        <i class="icofont icofont-star"></i> Starred
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="mail-section">
                                    <a href="#">
                                        <i class="icofont icofont-file-text"></i> Drafts
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="mail-section">
                                    <a href="#">
                                        <i class="icofont icofont-paper-plane"></i> Sent Mail
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="mail-section">
                                    <a href="#">
                                        <i class="icofont icofont-ui-delete"></i> Trash
                                    </a>
                                    <label class="label label-info f-right">30</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="card-block label-list">
                            <li>
                                <h5>Labels</h5>
                            </li>
                            <li>
                                <a class="mail-work" href="#">Work</a>
                            </li>
                            <li>
                                <a class="mail-design" href="#">Design</a>
                            </li>
                            <li>
                                <a class="mail-family" href="#">Family</a>
                            </li>
                            <li>
                                <a class="mail-friends" href="#">Friends</a>
                            </li>
                            <li>
                                <a class="mail-office" href="#">Office</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-12 col-xl-9">
                    <div class="mail-body">
                        <div class="mail-body-header">
                            <div class="btn-group" role="group" data-toggle="tooltip" data-placement="top" title=""
                                data-original-title=".btn-xlg">
                                <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                    <i class="icofont icofont-exclamation-circle"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                    <i class="icofont icofont-inbox"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                    <i class="icofont icofont-ui-delete"></i>
                                </button>
                            </div>
                            <div class="btn-group dropdown-split-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="icofont icofont-ui-folder"></i>
                                </button>
                                <button type="button"
                                    class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle primary</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown-split-primary">
                                <button type="button" class="btn btn-primary">
                                    More
                                </button>
                                <button type="button"
                                    class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle primary</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <div class="mail-body-content">
                            <form method='post' action="{{route('compose')}}">
                            @csrf
                                <div class="form-group">
                                    <input type="text" name='to' class="form-control" placeholder="To">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="email" name='cc' class="form-control" placeholder="Cc">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name='bcc' class="form-control" placeholder="Bcc">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name='subject' class="form-control" placeholder="Subject">
                                </div>
                                <!--<div class="summernote email-summernote" style="display: none;">Hello Summernote</div>
                                -->

                                <textarea class="textarea" cols='30' name='message' id='desc' placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd"></textarea>
                                
                                <div class="card-block">
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
<script type="text/javascript" src="{{asset('assets/bower_components/summernote/dist/summernote.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bower_components/summernote/lang/summernote-ko-KR.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pages/summernote/custom-note.js')}}"></script>
@endsection


@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/summernote/dist/summernote.css')}}">
@endsection