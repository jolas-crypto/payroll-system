<header class="bg-blue-50 space-y-2">
    <nav class="flex justify-between items-center py-2 px-4">
        <div class="flex items-center">
            <h1 class="text-xl font-extralight">Payroll Management System</h1> 
        </div>
        <div class="flex items-center">
            <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            >Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>
    </nav>
    <ul class="border-b border-gray-300 flex items-center px-6 space-x-2">
        <li class="font-normal">
            <a href="{{ route('dashboard.index') }}" class="nav-module items-center {{ request()->is('dashboard') ? 'active-nav' : '' }}">
                <div class="flex items-center space-x-1">
                    <img src="/images/icons/dashboard-alt-svgrepo-com.svg" alt="Dashboard" srcset="" class="h-4">
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
        <li class="font-normal">
            <a
            href="{{ route('payroll-dashboard.index') }}" 
            class="nav-module items-center {{ request()->is('payroll-dashboard') || request()->is('premium') || request()->is('pag-ibig') || request()->is('phil-health') || request()->is('tax') ? 'active-nav' : '' }}">
                <div class="flex items-center space-x-1">
                    <img src="/images/icons/pay-svgrepo-com.svg" alt="Payroll" srcset="" class="h-4">
                    <span>Payroll</span>
                </div>
            </a>
        </li>
        <li class="font-normal">
            <a href="" class="nav-module items-center">
                <div class="flex items-center space-x-1">
                    <img src="/images/icons/setting-two-svgrepo-com.svg" alt="Setting" srcset="" class="h-4">
                    <span>Settings</span>
                </div>
            </a>
        </li>
    </ul>
</header>

