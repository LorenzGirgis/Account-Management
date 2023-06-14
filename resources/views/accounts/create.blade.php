@extends('layouts.app')

@section('content')
    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf

        <div>
            <label for="account_name">Account Name:</label>
            <input type="text" name="account_name" id="account_name" required>
        </div>

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="account_type_id">Account Type:</label>
            <select name="account_type_id" id="account_type_id" required>
                <option value="">Select Account Type</option>
                @foreach($accountTypes as $accountType)
                    <option value="{{ $accountType->id }}">{{ $accountType->account_type }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
