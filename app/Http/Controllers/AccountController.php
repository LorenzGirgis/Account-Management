<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('accounts.index');
    }

    public function create()
    {
        return view('accounts.create');
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'account_type' => 'required|in:valorant,minecraft,steam,gmail,discord,other',
            'account_name' => $request->input('account_type') === 'valorant' ? 'required' : '',
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Create a new account
        $account = new Account();
        $account->account_type = $validatedData['account_type'];
        $account->name = $validatedData['name'];
        $account->account_name = $validatedData['account_name'] ?? null; // Use null if the field is empty
        $account->email = $validatedData['email'];
        $account->password = Hash::make($validatedData['password']);
        $account->save();
    
        return redirect()->route('accounts.index')->with('success', 'Account added successfully');
    }
    
}