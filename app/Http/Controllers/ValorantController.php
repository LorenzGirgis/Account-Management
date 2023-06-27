<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Account;

class AccountController extends Controller
{
    public function show($id)
    {
        $account = Account::findOrFail($id);

        $stats = [];

        if ($account->accountType->name === 'Valorant') {
            $stats = $this->getValorantStats($account->username);
        }

        return view('accounts.show', compact('account', 'stats'));
    }

    private function getValorantStats($username)
    {
        $apiKey = config('app.riot_api_key');
        $region = 'eu'; // Replace with the appropriate region

        $response = Http::withHeaders([
            'X-Riot-Token' => $apiKey,
        ])->get("https://api.valorant.riotgames.com/v1/your_endpoint/{$region}/{$username}");

        if ($response->ok()) {
            return $response->json();
        }

        return [];
    }
}