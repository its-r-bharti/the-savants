<aside id="default-sidebar"
    class="sticky top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="ms-3 font-black text-2xl">Features</span>
                </a>
            </li>
            <li>
                <a href="#dashboard"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">DashBoard</span>
                </a>
            </li>
            <li>
                <a href="#academics"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Academics</span>
                </a>
            </li>
            <li>
                <a href="#payments"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Payments</span>
                </a>
            </li>
            <li>
                <a href="#students"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Students</span>
                </a>
            </li>
            <li>
                <a href="#users"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>
            
            <li>
                <a href="#hostels"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Hostels</span>
                </a>
            </li>
            <li>
                <a href="#transport"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Transport</span>
                </a>
            </li>
            <li>
                <a href="#subject"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Subjects</span>
                </a>
            </li>
            <li>
                <a href="#exam"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Exams</span>
                </a>
            </li>
            <li>
                <a href="#setting"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                    <span class="flex-1 ms-3 whitespace-nowrap">Settings</span>
                </a>
            </li>

        </ul>
    </div>
    

</aside>



@include('schoolcomponents.Dashboard')
@include('schoolcomponents.academics')
@include('schoolcomponents.payments')
@include('schoolcomponents.students')
@include('schoolcomponents.users')

@include('schoolcomponents.hostel')
@include('schoolcomponents.transport')
@include('schoolcomponents.subject')
@include('schoolcomponents.exam')
@include('schoolcomponents.setting')


