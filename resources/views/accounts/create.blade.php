<x-app-layout>
    <div class="max-w-md mx-auto mt-8">
        <h2 class="text-3xl font-bold mb-4">Add Account</h2>

        <form action="{{ route('store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full px-4 py-2" :value="old('name')" autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mb-4">
                <x-input-label for="username" :value="__('Username')" />
                <x-text-input id="username" name="username" type="text" class="mt-1 block w-full px-4 py-2" :value="old('username')" autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('username')" />
            </div>

            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full px-4 py-2" :value="old('email')" autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full px-4 py-2" :value="old('password')" />
                <x-input-error class="mt-2" :messages="$errors->get('password')" />
            </div>

            <div class="mb-4">
                <x-input-label for="account_type_id" :value="__('Account Type')" />
                <x-select-input id="account_type_id" name="account_type_id" class="mt-1 block w-full px-4 py-2" :options="$accountTypes" />
                <x-input-error class="mt-2" :messages="$errors->get('account_type_id')" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Submit</button>
        </form>
    </div>
</x-app-layout>
