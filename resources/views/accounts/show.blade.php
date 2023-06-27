<x-app-layout>
    <div class="flex justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center py-4">
                        Account Details
                    </h2>
                    <div class="flex justify-between mb-4">
                    </div>
                    <div>
                        <p class="text-lg font-medium text-gray-900">Name: {{ $account->name }}</p>
                        <p class="text-lg font-medium text-gray-900">Username: <span id="username" class="text-blue-500 cursor-pointer">{{ $account->username }}</span></p>
                        <p class="text-lg font-medium text-gray-900">Account Type: {{ $account->accountType->name }}</p>
                        <p class="text-lg font-medium text-gray-900">Email: {{ $account->email }}</p>
                        <button onclick="copyUsername()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                            Copy Username
                        </button>
                        @if ($account->accountType->name === 'Valorant')
                        <div class="flex justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                </div>
            </div>
        </div>
    </div>
                            @endif
                    </div>
                    <div class="flex justify-center mt-4">
                        <a href="{{ route('edit', $account->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyUsername() {
            const usernameElement = document.getElementById('username');
            const username = usernameElement.textContent;
            navigator.clipboard.writeText(username).then(function() {
                alert("Username copied to clipboard!");
            }).catch(function(error) {
                console.error("Error copying username to clipboard:", error);
            });
        }
    </script>
</x-app-layout>