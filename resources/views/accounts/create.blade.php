@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-8">
    <h2 class="text-3xl font-bold mb-4">Add Account</h2>

    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-semibold mb-1">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="account_name" class="block font-semibold mb-1">Account Name:</label>
            <input type="text" name="account_name" id="account_name" required placeholder="Enter Account Name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="email" class="block font-semibold mb-1">Email:</label>
            <input type="email" name="email" id="email" required placeholder="Enter Email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="password" class="block font-semibold mb-1">Password:</label>
            <input type="password" name="password" id="password" required placeholder="Enter Password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="account_type_id" class="block font-semibold mb-1">Account Type:</label>
            <select name="account_type_id" id="account_type_id" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                <option value="">Select Account Type</option>
                @foreach($accountTypes as $accountType)
                    <option value="{{ $accountType->id }}">{{ $accountType->account_type }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Submit</button>
        </div>
    </form>
</div>
@endsection
