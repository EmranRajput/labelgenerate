        
        
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/images/labelworldlogo.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">LabelsWorld</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
        </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        
        
        <li>
            <a href="{{route('user.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
         <li>
            <a href="">
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
        </li>
        <li>
            <a href="{{route('recharge.plans')}}">
                <div class="parent-icon"><i class='bx bx-pen'></i>
                </div>
                <div class="menu-title">Recharge Plans</div>
            </a>
        </li>

        <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class='bx bx-note'></i>
                </div>
                <div class="menu-title">Bulk Label</div>
            </a>
        </li>
        <li>
            <a href="{{route('my.label')}}">
                <div class="parent-icon"><i class='bx bx-note'></i>
                </div>
                <div class="menu-title">Recent Labels</div>
            </a>
        </li>
        <li>
            <a href="{{route('recharge.plan')}}">
                <div class="parent-icon"><i class='bx bx-money'></i>
                </div>
                <div class="menu-title">Recharge</div>
            </a>
        </li>
        
        
        
        
    </ul>
    <!--end navigation-->
</div>