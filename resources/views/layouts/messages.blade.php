@if (count($errors) > 0)
  @foreach ($errors->all() as $error)
   

                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                {{ $error }}
                            </div>
  @endforeach
@endif

@if (session()->has('successMsg'))

                      

	
@endif


@if(session('successMsg'))
<div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                {{ session('successMsg') }}
                            </div>
@endif
