<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
        <a href="/index.html">
        <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
        >
            <g fill="none" fill-rule="evenodd">
            <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
            />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
        </svg>
        <span class="brand-name">Sleek Dashboard</span>
        </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
        

        
            <li  class="has-sub active expand" >
                <a class="sidenav-item-link" href="admin/dashbaord" data-toggle="collapse" data-target="#dashboard"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
        

        

        
            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements1"
                aria-expanded="false" aria-controls="ui-elements1">
                <i class="mdi mdi-food"></i>
                
                <span class="nav-text">Menus</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="ui-elements1"
                data-parent="#sidebar-menu">
                <div class="sub-menu">             
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.plate.create')}}">
                            <span class="nav-text">Add Plate</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.plate.show')}}">
                            <span class="nav-text">Show Plates</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>
        
            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements2"
                aria-expanded="false" aria-controls="ui-elements2">
                <i class="mdi mdi-shopify"></i>
                
                <span class="nav-text">Orders</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="ui-elements2"
                data-parent="#sidebar-menu">
                <div class="sub-menu">             
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.order.create')}}">
                            <span class="nav-text">Add Order</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.order.show')}}">
                            <span class="nav-text">Show Orders</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>


            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements3"
                aria-expanded="false" aria-controls="ui-elements3">
                <i class="mdi mdi-nature-people"></i>
                
                <span class="nav-text">Users</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="ui-elements3"
                data-parent="#sidebar-menu">
                <div class="sub-menu">             
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.users')}}">
                            <span class="nav-text">Show Users</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>

            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements4"
                aria-expanded="false" aria-controls="ui-elements4">
                <i class="mdi mdi-message"></i>
                
                <span class="nav-text">Mails</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="ui-elements4"
                data-parent="#sidebar-menu">
                <div class="sub-menu">             
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.mails')}}">
                            <span class="nav-text">Show Mails</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>


            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements5"
                aria-expanded="false" aria-controls="ui-elements5">
                <i class="mdi mdi-cart-off"></i>
                
                <span class="nav-text">Coupons</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="ui-elements5"
                data-parent="#sidebar-menu">
                <div class="sub-menu">             
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.coupon.create')}}">
                            <span class="nav-text">Add Coupon</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.coupons')}}">
                            <span class="nav-text">Show Coupons</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>



            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements2"
                aria-expanded="false" aria-controls="ui-elements2">
                <i class="mdi mdi-newspaper"></i>
                
                <span class="nav-text">Blog</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="ui-elements2"
                data-parent="#sidebar-menu">
                <div class="sub-menu">             
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.order.create')}}">
                            <span class="nav-text">Add Order</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidenav-item-link" href="{{route('admin.order.show')}}">
                            <span class="nav-text">Show Orders</span>
                        </a>
                    </li>
                </div>
            </ul>
            </li>

        
        </ul>

    </div>

    <hr class="separator" />

    <div class="sidebar-footer">

    </div>
    
    </div>
</aside>