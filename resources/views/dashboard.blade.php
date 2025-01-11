<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <!-- You can add profile, notifications, or settings here -->
            <div class="flex items-center space-x-4">
                <!-- Profile or Settings Menu -->
                <button class="text-gray-500 hover:text-gray-700 dark:text-gray-200 dark:hover:text-gray-400">
                    Profile
                </button>
                <button class="text-gray-500 hover:text-gray-700 dark:text-gray-200 dark:hover:text-gray-400">
                    Settings
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 p-6 text-gray-900 dark:text-gray-100">
                    <!-- Card 1: Stats Overview -->
                    <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Overview</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span>Total Users</span>
                                <span class="font-bold text-lg">2,345</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Total Sales</span>
                                <span class="font-bold text-lg">$12,345</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Pending Orders</span>
                                <span class="font-bold text-lg">56</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Recent Activities -->
                    <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Recent Activities</h3>
                        <ul class="space-y-3">
                            <li class="flex justify-between">
                                <span>User Registration</span>
                                <span class="text-gray-500 text-sm">10 mins ago</span>
                            </li>
                            <li class="flex justify-between">
                                <span>New Order</span>
                                <span class="text-gray-500 text-sm">1 hour ago</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Product Added</span>
                                <span class="text-gray-500 text-sm">3 hours ago</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Card 3: Quick Actions -->
                    <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Quick Actions</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-blue-600 hover:underline">Create New Product</a></li>
                            <li><a href="#" class="text-blue-600 hover:underline">Manage Orders</a></li>
                            <li><a href="#" class="text-blue-600 hover:underline">View Users</a></li>
                        </ul>
                    </div>

                    <!-- Card 4: Notifications -->
                    <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-2">Notifications</h3>
                        <ul class="space-y-3">
                            <li class="flex justify-between">
                                <span>New message from admin</span>
                                <span class="text-gray-500 text-sm">2 hours ago</span>
                            </li>
                            <li class="flex justify-between">
                                <span>System Update Available</span>
                                <span class="text-gray-500 text-sm">1 day ago</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Your subscription is about to expire</span>
                                <span class="text-gray-500 text-sm">3 days ago</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
