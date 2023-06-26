<x-app-layout>
    <div class="flex justify-center">
        <div class="w-96 bg-white p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Edit Account</h2>

            <form action="{{ route('update', $account) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full px-4 py-2" :value="old('name', $account->name)" autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div class="mb-4">
                    <x-input-label for="username" :value="__('Username')" />
                    <x-text-input id="username" name="username" type="text" class="mt-1 block w-full px-4 py-2" :value="old('username', $account->username)" autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('username')" />
                </div>

                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full px-4 py-2" :value="old('email', $account->email)" autocomplete="email" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full px-4 py-2" :value="old('password')" />

                    <div class="flex items-center mt-1">
                        <input type="checkbox" id="showPassword">
                        <label for="showPassword" class="ml-1 text-sm text-gray-700">Show Password</label>
                    </div>

                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div>

                <div class="mb-4">
                    <x-input-label for="account_type_id" :value="__('Account Type')" />
                    <x-select-input id="account_type_id" name="account_type_id" class="mt-1 block w-full px-4 py-2" :options="$accountTypes" :account="$account" />
                    <x-input-error class="mt-2" :messages="$errors->get('account_type_id')" />
                </div>

                <button type="submit" class="px-4 py-2 bg-indigo-500 text-white font-semibold rounded-md hover:bg-indigo-600">Save</button>
            </form>

            <form action="{{ route('destroy', $account->id) }}" method="POST" class="mt-2">
                @csrf
                @method('DELETE')

                <button type="submit" class="px-4 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600">Delete</button>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            document.getElementById('showPassword').addEventListener('change', function() {
                let passwordInput = document.getElementById('password');

                if (this.checked) {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            });
        </script>
    @endpush
</x-app-layout>
