
  <div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading test-center py-4 primary-text fs-4 fw-bold text-uppercase">
       <img src="asset/images/logo2.png" alt="" height="25">
    </div>

    <div class="list-group list-group-flush my-3">
       <div class="dashboard">
       <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-primary border-start border-primary border-5">
           <i class="fas fa-tachomeeter-alt me-2"></i>

           <i class="bi bi-layout-wtf m-1"></i>
           Dashboard

       </a>
    </div>
   <div class="list">

        <div class="dropdown">
            <button class="list-group-item list-group-item-action bg-transparent second-text text-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-people m-2"></i> Users
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li> <a href="{{ route('register_user') }}" class="list-group-item list-group-item-action bg-transparent second-text text-secondary">
                <i class="fa fa-id-card m-2"></i> Register User
            </a></li>
            <li><a href="dashboard.html" class="list-group-item list-group-item-action bg-transparent second-text text-secondary">
                <i class="fa fa-first-order m-2"></i> Role
            </a></li>
            <li><a href="dashboard.html" class="list-group-item list-group-item-action bg-transparent second-text text-secondary">
                <i class="fa fa-user-circle m-2"></i> Admin
            </a></li>
            </ul>
        </div>

        <a href="dashboard.html" class="list-group-item list-group-item-action bg-transparent second-text text-secondary">
            <i class="bi bi-house-door m-2"></i> Home
        </a>
        <a href="Employee.html" class="list-group-item list-group-item-action bg-transparent second-text text-secondary">
            <i class="bi bi-people m-2"></i> Employees
        </a>
        <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action bg-transparent second-text  text-secondary">
            <i class="bi bi-box-seam m-2"></i> Product
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text  text-secondary">
            <i class="bi bi-cash-coin m-2"></i> Cashier
        </a>

        {{--    --}}
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text text-secondary">
            <i class="bi bi-box-arrow-left m-2"></i> Logout
        </a>
        </div>



    </div>
   </div>
