<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_type_id',
        'account_name',
        'email',
        'password',
    ];

    public function accountType()
    {
        return $this->belongsTo(AccountType::class);
    }
}
