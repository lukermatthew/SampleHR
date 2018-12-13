@extends('layouts.app')

@section('title','Admin | Client USERS')

    @push('css')

    @endpush

@section('content')

            <section class="content">
                <header class="content__title">
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
                        <h4 class="card-title">CLIENT USERS</h4>
                        <h6 class="card-subtitle">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.</h6>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.clientemployees.create') }} "><i class="zmdi zmdi-plus"></i> Create Client</a>
                        <div class="table-responsive">
                            <table id="data-table" class="table table-bordered">
                                <thead class="thead-default">
                                    <tr>
                                    <th>#ID</th>
                                        <th>Client Employees</th>
                               
                                        <th>Date created</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                              
                                <tbody>
                                @foreach($client_employees as $key=>$client_employee)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $client_employee->name }}</td>
                                      
                                        <td>{{ $client_employee->created_at }}</td>
                                        <td>
                                                <a href="{{ route('admin.clientemployees.edit',$client_employee->id) }}" class="btn btn-info btn-sm">
                                                <span><i class="zmdi zmdi-edit zmdi-hc-fw"></i></span>edit</span>
                                                </a>

                                               <form id="delete-form-{{ $client_employee->id }}" action="{{ route('admin.clientemployees.destroy',$client_employee->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm " onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $client_employee->id }}').submit();
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

                <footer class="footer hidden-xs-down">
                    <p>© Material Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

       
     
@endsection



@push('js')

         <!-- Vendors: Data tables -->
         <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('Bootstrap4/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>


      

@endpush
