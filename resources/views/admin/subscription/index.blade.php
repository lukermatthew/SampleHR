@extends('layouts.app')

@section('title','Admin | Package')

    @push('css')

    @endpush

@section('content')

<section class="content">
                <div class="content__inner">
                @include('layouts.messages')      
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Subscription</h4>
                        <h6 class="card-subtitle">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.</h6>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.subscription.create') }} "><i class="zmdi zmdi-plus"></i> Create
                </a>
                        <div class="table-responsive">
               
                            <table id="data-table" class="table table-bordered">
                                <thead class="thead-default">
                                    <tr>
                                         <th>#ID</th>
                                        <th>Client Name</th>
                                        <th>Package</th>
                                        <th>Expiry Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                               
                                <tbody>
                                @foreach($subscriptions as $key=>$subscription)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $subscription->client->name }}</td>
                                        <td>{{ $subscription->package->name }}</td>
                                        <td>{{ $subscription->expiry_date }}</td>
                                        <td>
                                                <a href="{{ route('admin.subscription.edit',$subscription->id) }}" class="btn btn-info btn-sm">
                                                <span><i class="zmdi zmdi-edit zmdi-hc-fw"></i></span>edit</span>
                                                </a>

                                               <form id="delete-form-{{ $subscription->id }}" action="{{ route('admin.subscription.destroy',$subscription->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm"  onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $subscription->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><span><i class="zmdi zmdi-delete zmdi-hc-fw"></i>delete</button>
                                            </td>

                                       
                                    </tr>
                                   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                   
                 
                </div>


@endsection



@push('js')

         <!-- Vendors: Data tables -->
         <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>


      

@endpush





























