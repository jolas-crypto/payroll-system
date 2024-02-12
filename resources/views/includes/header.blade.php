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
    <ul class="border-b border-gray-300 flex items-center px-6 py-2 space-x-1">
        <li class="font-normal">
            <a href="" class="flex item-center py-1 px-2 border-transparent hover:bg-gray-200 hover:rounded-md">
                <span>Dashboard</span>
            </a>
        </li>
        <li class="font-normal">
            <a href="" class="flex item-center py-1 px-2 border-transparent hover:bg-gray-200 hover:rounded-md">
                <span>Payroll</span>
            </a>
        </li>
        <li class="font-normal">
            <a href="" class="flex item-center py-1 px-2 border-transparent hover:bg-gray-200 hover:rounded-md">
                <span>Settings</span>
            </a>
        </li>
    </ul>
</header>

