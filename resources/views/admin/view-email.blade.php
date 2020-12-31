@extends('layouts.admin.admin-layout')
@section('content')
<div class="page-header">
    <div class="page-header-title">
        <h4>Inbox</h4>
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
            <li class="breadcrumb-item"><a href="#!">Inbox</a>
            </li>
        </ul>
    </div>
</div>

<div class="page-body">
    <div class="card">

        <div class="card-block email-card">
            <div class="row">

                <div class="col-lg-12 col-xl-3">
                    <div class="user-head row">
                        <div class="user-face">
                            <img src="assets/images/user.png" class="img-60" alt="User-Profile-Image">
                        </div>
                        <div class="user-name">
                            <span>John Doe</span>
                            <span><a href="http://flatable.phoenixcoded.net/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="5e343136303a313b6d6a1e39333f3732703d3133">[email&nbsp;protected]</a></span>
                        </div>
                    </div>
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
                    <div class="mail-box-head row">
                        <div class="col-sm-3">
                            <h3>Inbox</h3>
                        </div>
                        <div class="col-md-9">
                            <form class="f-right">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend"
                                        id="search-friends-2">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr class="unread">
                                            <td>
                                                <div class="check-star">
                                                    <div class="checkbox-fade fade-in-primary checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <span class="cr"><i
                                                                    class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class="icofont icofont-star text-warning"></i>
                                                </div>
                                            </td>
                                            <td><a href="read-mail.html" class="email-name">Google Inc</a></td>
                                            <td><a href="read-mail.html" class="email-name">Lorem ipsum dolor sit amet,
                                                    consectetuer adipiscing elit</a></td>
                                            <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a>
                                            </td>
                                            <td class="email-time">08:01 AM</td>
                                        </tr>
                                        @foreach($inboxMessages as $inboxMessage):
                                        <tr class="unread">
                                            <td>
                                                <div class="check-star">
                                                    <div class="checkbox-fade fade-in-primary checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <span class="cr"><i
                                                                    class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class="icofont icofont-star text-inverse"></i>
                                                </div>
                                            </td>
                                            <td><a href="read-mail.html" class="email-name">{{$inboxMessage->getFrom()[0]->mail}} </a></td>
                                            @php 
                                            
                                            
                                             @endphp
                                            <td><a href="read-mail.html" class="email-name">{{$inboxMessage->getSubject()}}</a></td>
                                            <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a>
                                            </td>
                                            <td class="email-time">10:01 AM</td>
                                        </tr>
                                        @endforeach
                                        <tr class="read">
                                            <td>
                                                <div class="check-star">
                                                    <div class="checkbox-fade fade-in-primary checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <span class="cr"><i
                                                                    class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                        </label>
                                                    </div>
                                                    <i class="icofont icofont-star text-primary"></i>
                                                </div>
                                            </td>
                                            <td><a href="read-mail.html" class="email-name">Harry John</a></td>
                                            <td><a href="read-mail.html" class="email-name">New upcoming data
                                                    available</a></td>
                                            <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a>
                                            </td>
                                            <td class="email-time">11:01 AM</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection