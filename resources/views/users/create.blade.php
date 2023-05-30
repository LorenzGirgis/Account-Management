@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center mb-6 py-4">Add Account</h1>
        <form action="{{ route('users.store') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2 text-lg font-medium text-black">Account Name</label>
                <input type="text" name="name" class="form-input border border-gray-300 rounded" value="{{ old('name') }}">
            </div>
            
            <div class="mb-4">
                <label for="account_type" class="block mb-2 text-lg font-medium text-black">Account Type</label>
                <select name="account_type" class="form-select border border-gray-300 rounded" onchange="handleAccountTypeChange(this.value)">
                <option value="valorant">Valorant</option>
                <option value="Discord">Discord</option>
                <option value="gmail">Email</option>
                    <option value="steam">Steam</option>
                    <option value="minecraft">Minecraft</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div id="riotFields" class="mb-4" style="display: none;">
                <label for="riot" class="block mb-2 text-lg font-medium text-black">Riot</label>
                <input type="text" name="riot" class="form-input border border-gray-300 rounded">
                
                <label for="platform" class="block mt-4 mb-2 text-lg font-medium text-black">Rank</label>
                <input type="text" name="platform" class="form-input border border-gray-300 rounded">
                
                <label for="email" class="block mt-4 mb-2 text-lg font-medium text-black">Email</label>
                <input type="text" name="email" class="form-input border border-gray-300 rounded">
                
                <label for="password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="password" class="form-input border border-gray-300 rounded">
            </div>
            
            <div id="gameFields" class="mb-4" style="display: none;">
                <label for="email" class="block mb-2 text-lg font-medium text-black">Email</label>
                <input type="text" name="game" class="form-input border border-gray-300 rounded">
                
                <label for="password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="password" class="form-input border border-gray-300 rounded">
            </div>
            
            <div id="emailFields" class="mb-4" style="display: none;">
                <label for="email" class="block mb-2 text-lg font-medium text-black">Email</label>
                <input type="text" name="email" class="form-input border border-gray-300 rounded">
                <label for="password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="password" class="form-input border border-gray-300 rounded">
            </div>
            
            <button type="submit" class="bg-black text-black px-4 py-2 rounded hover:bg-gray-800">Add Account</button>
        </form>
    </div>

    <script>
        function handleAccountTypeChange(value) {
            if (value === 'valorant') {
                document.getElementById('riotFields').style.display = 'block';
                document.getElementById('gameFields').style.display = 'none';
                document.getElementById('emailFields').style.display = 'none';
            } else if (value === 'steam') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'block';
                document.getElementById('emailFields').style.display = 'none';
            } else if (value === 'gmail') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'none';
                document.getElementById('emailFields').style.display = 'block';
            } else if (value === 'minecraft') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'block';
                document.getElementById('emailFields').style.display = 'none';
            } else if (value === 'other') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'none';
                document.getElementById('emailFields').style.display = 'block';
            }
        }
    </script>
@endsection
