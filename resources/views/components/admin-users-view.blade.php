<div>
    <h2 class="text-2xl font-bold mb-4">Users</h2>
    <div class="flex flex-col space-y-4">
        @foreach ($users as $user)
            <div class="flex justify-between items-center bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                <div>
                    <h3 class="text-lg font-bold">{{ $user->name }}</h3>
                    <p class="text-gray-500"><span class="font-bold text-white">Email: </span>{{ $user->email }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Punten: </span>{{ $user->points }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">User ID: </span>{{ $user->id }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Aangemaakt op: </span>{{ $user->created_at }}</p>
                    <p class="text-gray-500"><span class="font-bold text-white">Bijgewerkt op: </span>{{ $user->updated_at }}</p>
                </div>
                <div>
                    <form action="{{ route('admin.dashboard.user.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Verwijderen</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
