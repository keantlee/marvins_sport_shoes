<nav class="col-md-2 d-none d-md-block sidebar dashboard-sidebar-navbar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column admin-sidebar-ul">
            <li class="nav-item">
                <a class="nav-link admin-active-button" href="{{ route('admin-main') }}"><img class="dashboard_icon" src="/images/icons/dashboard-white.png" alt="dashboard_icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
            </li>
            <li class="nav-item dashboard-sidebar-item">
                <a class="nav-link admin-sidebar-link" href="#"><img class="user_icon img-icons" src="/images/icons/user-profile-white(2).png" alt="user_icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Profile</a>
            </li>
            <li class="nav-item dashboard-sidebar-item">
                <a class="nav-link admin-sidebar-link" href="#"><img class="user_management_icon img-icons" src="/images/icons/user-management-white.png" alt="user_management_icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Management</a>
            </li>
            <li class="nav-item dashboard-sidebar-item">
                <a class="nav-link admin-sidebar-link" href="{{ route('admin-product-inventory') }}"><img class="product_inventory_icon img-icons" src="/images/icons/inventory-white(2).png" alt="product_inventory_icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product Inventory</a>
            </li>
            <li class="nav-item dashboard-sidebar-item">
                <a class="nav-link admin-sidebar-link" href="#"><img class="user_management_icon img-icons" src="/images/icons/orderlist-white.png" alt="order_management_icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Status</a>
            </li>            
        </ul>
    </div>
</nav>