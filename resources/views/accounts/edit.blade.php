@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-96 bg-white p-6 rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Edit Account</h2>
            <form action="{{ route('accounts.update', ['account' => $account->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="{{ $account->name }}" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="account_name" class="block text-sm font-medium text-gray-700">Account Name</label>
                    <input type="text" name="account_name" id="account_name" value="{{ $account->account_name }}" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" value="{{ $account->email }}" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="flex items-center">
                        <input type="password" name="password" id="password" value="" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <input type="checkbox" id="showPassword" class="ml-2">
                        <label for="showPassword" class="ml-1 text-sm text-gray-700">Show Password</label>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="account_type_id" class="block text-sm font-medium text-gray-700">Account Type</label>
                    <select name="account_type_id" id="account_type_id" class="mt-1 px-4 py-2 w-full border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        @foreach($accountTypes as $accountType)
                            <option value="{{ $accountType->id }}" @if($accountType->id === $account->account_type_id) selected @endif>{{ $accountType->account_type }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-between">
                    <button type="submit" class="px-4 py-2 bg-indigo-500 text-white font-semibold rounded-md hover:bg-indigo-600">Save</button>
                    <form action="{{ route('accounts.destroy', ['account' => $account->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('showPassword').addEventListener('change', function() {
            var passwordInput = document.getElementById('password');
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
@endsection