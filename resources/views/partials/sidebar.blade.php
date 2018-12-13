<aside class="sidebar">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="{{ asset('Bootstrap4/demo/img/profile-pics/8.jpg') }}" alt="">
                            <div>
                                <div class="user__name">{{ Auth::user()->name }}</div>
                                <div class="user__email">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">View Profile</a>
                            <a class="dropdown-item" href="">Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </div>
                    </div>

                    <ul class="navigation">
                    @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'navigation__active' : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-view-week"></i> Manage</a>

                            <ul>
                            <li class="{{ Request::is('admin/client') ? 'navigation__active' : '' }}"><a href="{{ route('admin.client.index') }}">Client</a></li>
                                
                            <li class="{{ Request::is('admin/package') ? 'navigation__active' : '' }}"><a href="{{ route('admin.package.index') }}">Package</a></li>

                            <li class="{{ Request::is('admin/subscription') ? 'navigation__active' : '' }}"><a href="{{ route('admin.subscription.index') }}">Subscription</a></li>

                            <li class="{{ Request::is('admin/clientemployees') ? 'navigation__active' : '' }}"><a href="{{ route('admin.clientemployees.index') }}">Client Employees</a></li>
                               
                            </ul>
                        </li>

                      @endif

                        @if(Request::is('author*'))
                <li class="{{ Request::is('author/dashboard') ? 'navigation__active' : '' }}"><a href="{{ route('author.dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        

                     

                      @endif
                   
                </div>
            </aside>

            <aside class="chat">
                <div class="chat__header">
                    <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

                    <div class="chat__search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="scrollbar-inner">
                    <div class="listview listview--hover chat__buddies">
                        <a class="listview__item chat__available">
                            <img src="{{ asset('Bootstrap4/demo/img/profile-pics/3.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>hey, how are you doing.</p>
                            </div>
                        </a>

                        <a class="listview__item chat__available">
                            <img src="{{ asset('Bootstrap4/demo/img/profile-pics/3.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>hmm...</p>
                            </div>
                        </a>

                        <a class="listview__item chat__away">
                            <img src="{{ asset('Bootstrap4/demo/img/profile-pics/3.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>all good</p>
                            </div>
                        </a>

                        <a class="listview__item">
                            <img src="{{ asset('Bootstrap4/demo/img/profile-pics/3.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
                            </div>
                        </a>

                        <a class="listview__item">
                            <img src="{{ asset('Bootstrap4/demo/img/profile-pics/3.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>fusce dapibus</p>
                            </div>
                        </a>

                        <a class="listview__item chat__busy">
                            <img src="{{ asset('Bootstrap4/demo/img/profile-pics/3.jpg') }}" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>cras mattis consectetur purus sit amet fermentum.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="messages.html" class="btn btn--action btn-danger"><i class="zmdi zmdi-plus"></i></a>
            </aside>