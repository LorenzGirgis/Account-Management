<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Hash;

class Account extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::saving(function ($account) {
            if (!empty($account->password)) {
                $account->password = Hash::make($account->password);
            }
        });
    }

    protected $fillable = [
        'account_type_id',
        'name',
        'username',
        'email',
        'password',
    ];

    public function accountType(): BelongsTo
    {
        return $this->belongsTo(AccountType::class);
    }
}
