@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center mb-6 py-4">Add Account</h1>
        <form action="{{ route('accounts.store') }}" method="POST" class="max-w-md mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2 text-lg font-medium text-black">Account Name</label>
                <input type="text" name="name" class="form-input border border-gray-300 rounded" value="{{ old('name') }}">
            </div>

            <div class="mb-4">
                <label for="account_type" class="block mb-2 text-lg font-medium text-black">Account Type</label>
                <select name="account_type" class="form-select border border-gray-300 rounded" onchange="handleAccountTypeChange(this.value)">
                    <option value="valorant">Valorant</option>
                    <option value="discord">Discord</option>
                    <option value="gmail">Email</option>
                    <option value="steam">Steam</option>
                    <option value="minecraft">Minecraft</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div id="riotFields" class="mb-4" style="display: none;">
                <h1 class="text-3xl font-bold text-center mb-6 py-4">Valorant</h1>
                <label for="riot_name" class="block mb-2 text-lg font-medium text-black">Riot Name</label>
                <input type="text" name="riot" class="form-input border border-gray-300 rounded">

                <label for="riot_email" class="block mt-4 mb-2 text-lg font-medium text-black">Email</label>
                <input type="email" name="email" class="form-input border border-gray-300 rounded">

                <label for="riot_password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="password" class="form-input border border-gray-300 rounded">
            </div>

            <div id="gameFields" class="mb-4" style="display: none;">
                <h1 class="text-3xl font-bold text-center mb-6 py-4">Steam</h1>
                <label for="steam_name" class="block mb-2 text-lg font-medium text-black">Steam Name</label>
                <input type="text" name="steam_name" class="form-input border border-gray-300 rounded">

                <label for="steam_email" class="block mb-2 text-lg font-medium text-black">Email</label>
                <input type="text" name="steam_email" class="form-input border border-gray-300 rounded">

                <label for="steam_password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="steam_password" class="form-input border border-gray-300 rounded">
            </div>

            <div id="emailFields" class="mb-4" style="display: none;">
                <h1 class="text-3xl font-bold text-center mb-6 py-4">Email</h1>
                <label for="email_account" class="block mb-2 text-lg font-medium text-black">Email</label>
                <input type="email" name="email_account" class="form-input border border-gray-300 rounded">

                <label for="email_password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="email_password" class="form-input border border-gray-300 rounded">
            </div>

            <div id="minecraftFields" class="mb-4" style="display: none;">
                <h1 class="text-3xl font-bold text-center mb-6 py-4">Minecraft</h1>

                <label for="minecraft_name" class="block mb-2 text-lg font-medium text-black">Minecraft Name</label>
                <input type="text" name="minecraft_name" class="form-input border border-gray-300 rounded">

                <label for="minecraft_email" class="block mb-2 text-lg font-medium text-black">Email</label>
                <input type="email" name="minecraft_email" class="form-input border border-gray-300 rounded">

                <label for="minecraft_password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="minecraft_password" class="form-input border border-gray-300 rounded">
            </div>

            <div id="discordFields" class="mb-4" style="display: none;">
                <h1 class="text-3xl font-bold text-center mb-6 py-4">Discord</h1>

                <label for="discord_name" class="block mb-2 text-lg font-medium text-black">Discord Name</label>
                <input type="text" name="discord_name" class="form-input border border-gray-300 rounded">

                <label for="discord_email" class="block mb-2 text-lg font-medium text-black">Email</label>
                <input type="email" name="discord_email" class="form-input border border-gray-300 rounded">

                <label for="discord_password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="discord_password" class="form-input border border-gray-300 rounded">
            </div>

            <div id="otherFields" class="mb-4" style="display: none;">
                <h1 class="text-3xl font-bold text-center mb-6 py-4">Other</h1>
                <label for="other_email" class="block mb-2 text-lg font-medium text-black">Email</label>
                <input type="email" name="other_email" class="form-input border border-gray-300 rounded">

                <label for="other_password" class="block mt-4 mb-2 text-lg font-medium text-black">Password</label>
                <input type="password" name="other_password" class="form-input border border-gray-300 rounded">
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
                document.getElementById('minecraftFields').style.display = 'none';
                document.getElementById('discordFields').style.display = 'none';
                document.getElementById('otherFields').style.display = 'none';
            } else if (value === 'steam') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'block';
                document.getElementById('emailFields').style.display = 'none';
                document.getElementById('minecraftFields').style.display = 'none';
                document.getElementById('discordFields').style.display = 'none';
                document.getElementById('otherFields').style.display = 'none';
            } else if (value === 'gmail') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'none';
                document.getElementById('emailFields').style.display = 'block';
                document.getElementById('minecraftFields').style.display = 'none';
                document.getElementById('discordFields').style.display = 'none';
                document.getElementById('otherFields').style.display = 'none';
            } else if (value === 'minecraft') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'none';
                document.getElementById('emailFields').style.display = 'none';
                document.getElementById('minecraftFields').style.display = 'block';
                document.getElementById('discordFields').style.display = 'none';
                document.getElementById('otherFields').style.display = 'none';
            } else if (value === 'discord') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'none';
                document.getElementById('emailFields').style.display = 'none';
                document.getElementById('minecraftFields').style.display = 'none';
                document.getElementById('discordFields').style.display = 'block';
                document.getElementById('otherFields').style.display = 'none';
            } else if (value === 'other') {
                document.getElementById('riotFields').style.display = 'none';
                document.getElementById('gameFields').style.display = 'none';
                document.getElementById('emailFields').style.display = 'none';
                document.getElementById('minecraftFields').style.display = 'none';
                document.getElementById('discordFields').style.display = 'none';
                document.getElementById('otherFields').style.display = 'block';
            }
        }
    </script>
@endsection
