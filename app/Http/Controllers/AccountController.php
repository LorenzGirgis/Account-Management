<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\AccountType;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::with('accountType')->get();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        $accountTypes = AccountType::all();
        return view('accounts.create', compact('accountTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable',
            'account_name' => 'required',
            'email' => 'required|email|unique:accounts,email',
            'password' => 'required',
            'account_type_id' => 'required',
        ]);

        $account = new Account();
        $account->account_type_id = $request->account_type_id;
        $account->account_name = $request->account_name;
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = $request->password;
        $account->save();

        return redirect()->route('accounts.index')->with('success', 'Account added successfully.');
    }

    public function edit(Account $account)
    {
        $accountTypes = AccountType::all();
        return view('accounts.edit', compact('account', 'accountTypes'));
    }

    public function update(Request $request, Account $account)
    {
        $request->validate([
            'name' => 'nullable',
            'account_name' => 'required',
            'email' => 'required|email|unique:accounts,email,' . $account->id,
            'password' => 'required',
            'account_type_id' => 'required',
        ]);

        $account->account_type_id = $request->account_type_id;
        $account->account_name = $request->account_name;
        $account->name = $request->name;
        $account->email = $request->email;
        $account->password = $request->password;
        $account->save();

        return redirect()->route('accounts.index')->with('success', 'Account updated successfully.');
    }

    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('accounts.index')->with('success', 'Account deleted successfully.');
    }
}