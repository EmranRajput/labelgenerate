        
    <style>
    .logo-icon{
        width: 150px !important;
        margin-left: 20px !important;
    }
        .sidebar-wrapper .metismenu {
        margin-top: 10px !important;
    }
    .metismenu .fist_li{
        padding-top: 30px !important;
    }
    </style>    
<div class="sidebar-wrapper" data-simplebar="true">
    <!-- <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/images/labelworldlogo.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">LabelsWorld</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
        </div> -->
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <div>
                <img src="{{asset('backend/images/logo2.png')}}" class="logo-icon" alt="logo icon">
            </div>
        
        <li>
            <a href="#">
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

       
        
        
        
        
    </ul>
    <!--end navigation-->
</div>