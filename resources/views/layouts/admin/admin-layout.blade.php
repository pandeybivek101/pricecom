
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords"
        content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">

    <link href="{{asset('assets/bower_components/jquery.filer/css/jquery.filer.css')}}" type="text/css"
        rel="stylesheet" />
    <link href="{{asset('assets/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}"
        type="text/css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/component.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/flag-icon/flag-icon.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/menu-search/css/component.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color/color-1.css')}}" id="color" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/linearicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/slick-carousel/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/menu-search/css/component.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
    <style>
    .bootstrap-tagsinput{
        width: 100% !important;
        height: 140px !important;
    }
</style>
    @cloudinaryJS
    @yield('css')

</head>

<body>

    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
           
            @include('layouts.admin.navigation')

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="card-block">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend"
                                        id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online"
                                    data-username="Josephin Doe" data-toggle="tooltip" data-placement="left"
                                    title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online"
                                    data-username="Lary Doe" data-toggle="tooltip" data-placement="left"
                                    title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"
                                    data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-2.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia"
                                    data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen"
                                    data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="6" data-status="offline"
                                    data-username="Michael Scofield" data-toggle="tooltip" data-placement="left"
                                    title="Michael Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-3.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Michael Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="7" data-status="online"
                                    data-username="Irina Shayk" data-toggle="tooltip" data-placement="left"
                                    title="Irina Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-4.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Irina Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="8" data-status="offline"
                                    data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left"
                                    title="Sara Tancredi">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-5.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara Tancredi</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon"
                                    data-toggle="tooltip" data-placement="left" title="Samon">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Samon</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="10" data-status="online"
                                    data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left"
                                    title="Daizy Mendize">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Daizy Mendize</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="11" data-status="offline"
                                    data-username="Loren Scofield" data-toggle="tooltip" data-placement="left"
                                    title="Loren Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-3.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Loren Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk"
                                    data-toggle="tooltip" data-placement="left" title="Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-4.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara"
                                    data-toggle="tooltip" data-placement="left" title="Sara">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe"
                                    data-toggle="tooltip" data-placement="left" title="Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary"
                                    data-toggle="tooltip" data-placement="left" title="Lary">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png"
                            alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png"
                                alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
                    @include('layouts.admin.sidebar')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">

                                   @yield('content')
                                </div>
                            </div>

                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}">
    </script>

    <script type="text/javascript" src="{{asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}">
    </script>

    <script type="text/javascript" src="{{asset('assets/bower_components/modernizr/modernizr.js')}}"></script>
    <script type="text/javascript"
        src="{{asset('assets/bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/bower_components/classie/classie.js')}}"></script>

    <script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}">
    </script>
    <script src="{{asset('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}">
    </script>

    <script src="{{asset('assets/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>
    <script src="{{asset('assets/pages/filer/custom-filer.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/pages/filer/jquery.fileuploads.init.js')}}" type="text/javascript"></script>

    <script src="{{asset('assets/js/classie.js')}}"></script>
    <script src="{{asset('assets/js/modalEffects.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/pages/product-list/product-list.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/bower_components/i18next/i18next.min.js')}}"></script>
    <script type="text/javascript"
        src="{{asset('assets/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript"
        src="{{asset('assets/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('assets/bower_components/jquery-i18next/jquery-i18next.min.js')}}">
    </script>

    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('assets/js/demo-12.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/slick-carousel/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/pages/product-detail/product-detail.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/pages/data-table/js/data-table-custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
    
    <script>
        ClassicEditor.create( document.querySelector( '#desc' ) )
        then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );


        function alertify(){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        })
        }
    </script>


<script>



$('#ajaxform').on('submit', function(e) {
    var action=$('#ajaxform').attr('action')
    e.preventDefault();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        //url: "/dashboard/add-product",
        url:action,
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,

        success: function() {
            $('input').val('');
            toastr.success('Product has been successfully added!', 'Thankyou!');
            

        },
        error: function(response) {
            var obj = jQuery.parseJSON(response.responseText);
            var data=obj.errors;
            $('.errors').remove();
            $('input').css("border-color", "rgba(0,0,0,.15)");
            for (var key in data) {
                $("<span class='errors' style='color: red;font-family: serif;'>"+data[key][0]+"<span>").insertAfter('input[name='+key+']');
                $('input[name='+key+']').css("border-color", "red");
            }
            //console.log(data);

        }
    });

});


$('#editajax').on('submit', function(e) {
    var action=$('#editajax').attr('action')
    e.preventDefault();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        //url: "/dashboard/add-product",
        url:action,
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,

        success: function(response) {
            
            //var key = "foo";
            delete response['_token'];
            console.log(response);
            $.map(response, function(val, key) {
              // $("input['name:"+key+"]").val(val);
               console.log('done');
            });
                            

        },
        error: function(response) {
            console(response);
        }
    });

});


</script>

    @yield('js')


</body>

</html>