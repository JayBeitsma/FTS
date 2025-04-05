<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-bold mb-4 p-4  text-white">Boekingen</h2>
                <button onclick="toggleSection('bookings-section')" class="text-blue-500 ml-4 mb-4">Show</button>
                <section id="bookings-section" class="p-6 pt-1 text-gray-900 dark:text-gray-100">
                    <x-admin-ticket-view :tickets="$tickets" />
                </section>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-bold mb-4 p-4  text-white">Busritten</h2>
                <button onclick="toggleSection('Busrides-section')" class="text-blue-500 ml-4 mb-4">Show</button>
                <section id="busrides-section" class="p-6 pt-1 text-gray-900 dark:text-gray-100">
                    <x-admin-busrides-view :busrides="$busrides" />
                </section>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-bold mb-4 p-4  text-white">Users</h2>
                <button onclick="toggleSection('users-section')" class="text-blue-500 ml-4 mb-4">Show</button>
                <section id="users-section" class="p-6 pt-1 text-gray-900 dark:text-gray-100">
                    <x-admin-users-view :users="$users" />
                </section>
            </div>
        </div>
    </div>

    <script>
        //Bookings toggle
        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            section.classList.toggle('hidden');
        }

        //Toggle all sections on page load
        document.addEventListener('DOMContentLoaded', function() {
            const sections = ['bookings-section', 'busrides-section', 'users-section'];
            sections.forEach(sectionId => {
                const section = document.getElementById(sectionId);
                if (section) {
                    section.classList.add('hidden');
                }
            });
        });
    </script>

</x-app-layout>
