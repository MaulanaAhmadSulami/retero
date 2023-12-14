<div class="min-h-screen flex flex-row justify-content-around">
    <div class="flex flex-col w-56 overflow-hidden border-r-2 border-t-2 rounded-t-md">
        <div class="py-4 px-4">
            <ul class="flex flex-col">
                <li>
                    <a href="/dashboard"
                        class="flex flex-row items-center mb-5 transform hover:translate-x-1 duration-200 ease-in-out hover:text-button">
                        <i class="fa-solid fa-house sidebar-icon"></i><span class="ml-2 text-[25px] font-ubuntuMonoBold">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.create') }}"
                        class="flex flex-row items-center mb-5 transform hover:translate-x-1 duration-200 ease-in-out hover:text-button">
                        <i class="fa-solid fa-ghost sidebar-icon"></i><span class="ml-2 text-[25px] font-ubuntuMonoBold">Create a post</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.profile', ['uuid' => Auth::user()->id]) }}"
                        class="flex flex-row items-center mb-5 transform hover:translate-x-1 duration-200 ease-in-out hover:text-button">
                        <i class="fa-solid fa-user sidebar-icon"></i> <span class="ml-2 text-[25px] font-ubuntuMonoBold">Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('auth.logout') }}" class="flex flex-row items-center mb-5 transform hover:translate-x-1 duration-200 ease-in-out hover:text-button">
                        <i class="fa-solid fa-door-open sidebar-icon"></i> <span class="ml-2 text-[25px] font-ubuntuMonoBold">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
