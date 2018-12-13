@extends('layouts.app')

@section('title','Package |')


@push('css')
 <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/dropzone/dist/dropzone.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/nouislider/distribute/nouislider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/trumbowyg/dist/ui/trumbowyg.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/flatpickr/flatpickr.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('Bootstrap4/vendors/bower_components/rateYo/min/jquery.rateyo.min.css') }}">

        <!-- App styles -->
        <link rel="stylesheet" href="{{ asset('Bootstrap4/css/app.min.css') }}">

        <!-- Demo only -->
        <link rel="stylesheet" href="{{ asset('Bootstrap4/demo/css/demo.css') }}">
@endpush


@section('content')
<section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Form Components</h1>
                        @include('layouts.messages')

                        <div class="actions">
                        <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                        <a href="" class="actions__item zmdi zmdi-check-all"></a>

                        <div class="dropdown actions__item">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="dropdown-item">Refresh</a>
                                <a href="" class="dropdown-item">Manage Widgets</a>
                                <a href="" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                    </header>

                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Package</h4>
                            <h6 class="card-subtitle">A jQuery Plugin to make masks on form fields and HTML elements.</h6>
                            
                            <form action="{{ route('admin.package.store') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Package</label>
                                        
                                       
                                        <input type="text"  id="name" class="form-control" name="name" >
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Amount</label>
                                        
                                        <input type="number" id="amount" class="form-control" name="amount">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                                <br>  </div>

                                 <a  class="btn btn-danger m-t-15 btn-sm" href="{{ route('admin.package.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 btn-sm">SUBMIT</button>

                            
                        </form>

                                

                              
                             
                        </div>
                    </div>

                    
@endsection


@push('js')
  <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

        <script src="{{ asset('Bootstrap4/vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/dropzone/dist/min/dropzone.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/nouislider/distribute/nouislider.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/rateYo/min/jquery.rateyo.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jquery-text-counter/textcounter.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/autosize/dist/autosize.min.js') }}"></script>

        <!-- App functions and actions -->
     
@endpush