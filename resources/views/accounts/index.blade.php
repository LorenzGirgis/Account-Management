@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center py-4">
                        Accounts
                    </h2>
                    @if(session('success'))
                        <div class="alert alert-success text-center font-weight-bold mb-4" id="success-message">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="flex justify-between mb-4">
                        <div>
                            <label for="filter" class="text-sm font-medium text-gray-500">Filter:</label>
                            <select id="filter" name="filter" class="block w-48 mt-1 py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="all">All</option>
                                <option value="Valorant">Valorant</option>
                                <option value="Discord">Discord</option>
                                <option value="Email">Email</option>
                                <option value="Steam">Steam</option>
                                <option value="Minecraft">Minecraft</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div>
                            <button id="clearFilterBtn" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Clear Filter</button>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var successMessage = document.getElementById('success-message');
                            if (successMessage) {
                                successMessage.style.fontWeight = 'bold';
                                setTimeout(function() {
                                    successMessage.style.display = 'none';
                                }, 3000);
                            }

                            var filterSelect = document.getElementById('filter');
                            var clearFilterBtn = document.getElementById('clearFilterBtn');
                            var accountItems = document.querySelectorAll('.account-item');
                            var noRecordsMessage = document.getElementById('no-records-message');

                            filterSelect.addEventListener('change', function() {
                                var selectedValue = this.value;

                                var matchingAccounts = Array.from(accountItems).filter(function(item) {
                                    return selectedValue === 'all' || selectedValue === item.dataset.accountType;
                                });

                                accountItems.forEach(function(item) {
                                    if (matchingAccounts.includes(item)) {
                                        item.style.display = 'block';
                                    } else {
                                        item.style.display = 'none';
                                    }
                                });

                                if (matchingAccounts.length === 0) {
                                    noRecordsMessage.style.display = 'block';
                                } else {
                                    noRecordsMessage.style.display = 'none';
                                }
                            });

                            clearFilterBtn.addEventListener('click', function() {
                                filterSelect.value = 'all';

                                accountItems.forEach(function(item) {
                                    item.style.display = 'block';
                                });

                                noRecordsMessage.style.display = 'none';
                            });

                            noRecordsMessage.style.display = 'none';
                        });
                    </script>
                    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        @forelse($accounts as $account)
                            <a href="#" class="group account-item" data-account-type="{{ $account->accountType->account_type }}">
                                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Account Image" class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <h3 class="mt-4 text-sm text-gray-700">{{ $account->account_name }}</h3>
                                <p class="mt-1 text-lg font-medium text-gray-900">{{ $account->accountType->account_type }}</p>
                            </a>
                        @empty
                            <p id="no-records-message" class="text-center text-gray-500 mt-4">No records found.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
