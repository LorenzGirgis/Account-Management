<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use App\Models\AccountType;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();

        return view('accounts.index', [
            'accounts' => $accounts,
        ]);
    }

    public function create()
    {
        $accountTypes = AccountType::all();

        return view('accounts.create', [
            'accountTypes' => $accountTypes,
        ]);
    }

    public function store(AccountRequest $request)
    {
        $validated = $request->validated();

        Account::create($validated);

        return redirect()->route('index')->with('success', 'Account added successfully.');
    }

    public function edit(Account $account)
    {
        $accountTypes = AccountType::all();

        return view('accounts.edit', [
            'account' => $account,
            'accountTypes' => $accountTypes,
        ]);
    }

    public function update(AccountRequest $request, Account $account)
    {
        $validated = $request->validated();

        $account->update($validated);

        return redirect()->route('index')->with('success', 'Account updated successfully.');
    }

    public function destroy(Account $account)
    {
        $account->delete();

        return redirect()->route('index')->with('success', 'Account deleted successfully.');
    }
}