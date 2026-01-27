<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-300">Total Calls</h3>
                            <p class="text-3xl font-bold text-white">1,234</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-300">Answered Calls</h3>
                            <p class="text-3xl font-bold text-white">987</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-300">Abandoned Calls</h3>
                            <p class="text-3xl font-bold text-white">247</p>
                        </div>
                        <!-- Card 4 -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-300">Busy Calls</h3>
                            <p class="text-3xl font-bold text-white">12</p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-300">Call Volume</h3>
                            <div class="h-64 bg-gray-600 rounded-lg mt-4">
                                <!-- Chart placeholder -->
                                <div class="flex items-center justify-center h-full">
                                    <p class="text-gray-400">Chart will be here</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-300">Recent Calls</h3>
                            <div class="mt-4">
                                <table class="w-full text-left text-gray-400">
                                    <thead>
                                        <tr>
                                            <th class="py-2">Caller</th>
                                            <th class="py-2">Agent</th>
                                            <th class="py-2">Duration</th>
                                            <th class="py-2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-200">
                                        <tr>
                                            <td class="py-2">John Doe</td>
                                            <td class="py-2">Jane Smith</td>
                                            <td class="py-2">5m 23s</td>
                                            <td class="py-2 text-green-400">Answered</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Peter Jones</td>
                                            <td class="py-2">-</td>
                                            <td class="py-2">0m 12s</td>
                                            <td class="py-2 text-red-400">Abandoned</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Mary Johnson</td>
                                            <td class="py-2">Mike Brown</td>
                                            <td class="py-2">12m 5s</td>
                                            <td class="py-2 text-green-400">Answered</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>