

<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

                <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                <input class="form-control px-5" disabled type="search" placeholder="Search">
                <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
                </div>


                <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                        <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                        </a>
                    </li>
                    
                    <li class="nav-item dark-mode d-none d-sm-flex">
                        <a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-large">
                        
                        <div class="dropdown-menu dropdown-menu-end">
                            
                            <div class="header-notifications-list">
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown dropdown-large">
                        
                        <div class="dropdown-menu dropdown-menu-end">
                            
                            <div class="header-message-list">
                                
                            </div>
                            
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" class="user-img" alt="user avatar"/>

                    <!-- <img src="{{asset('backend/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar"> -->
                    <div class="user-info ">
                        <p class="user-name mb-0">{{auth()->user()->name}}</p>
                        
                    </div>
                </a>
                <form id="logout-user" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
                    </li>
                    
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-user').submit();"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>