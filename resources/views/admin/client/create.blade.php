@extends('layouts.app')

@section('title','Package |')


@push('css')
 
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
                            <h4 class="card-title">Add Client</h4>
                            <h6 class="card-subtitle">A jQuery Plugin to make masks on form fields and HTML elements.</h6>
                            
                            <form action="{{ route('admin.client.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Client</label>
                                       
                                        <input type="text"  id="name" class="form-control" name="name" >
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                                               <br>  </div>

                                 <a  class="btn btn-danger m-t-15 btn-sm" href="{{ route('admin.client.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 btn-sm">SUBMIT</button>

                            
                        </form>

                                

                              
                             
                        </div>
                    </div>

                    
@endsection


@push('js')
  <!-- Javascript -->
     
@endpush