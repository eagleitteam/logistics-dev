<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class Income extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['income_Category','client_id','tranDate','recincomeamt','trip_ids','trip_no','adj_pmt','remark','voucher_ref'];

        public function Vouchermaster()
    {
        return $this->belongsTo(Vouchermaster::class, 'voucher_ref');
    }

    public function client()
        {
            return $this->belongsTo(Client::class, 'client_id');
        }


    public static function booted()
    {
        static::created(function (self $user)
        {
            if(Auth::check())
            {
                self::where('id', $user->id)->update([
                    'created_by'=> Auth::user()->id,
                ]);
            }
        });
        static::updated(function (self $user)
        {
            if(Auth::check())
            {
                self::where('id', $user->id)->update([
                    'updated_by'=> Auth::user()->id,
                ]);
            }
        });
        static::deleting(function (self $user)
        {
            if(Auth::check())
            {
                self::where('id', $user->id)->update([
                    'deleted_by'=> Auth::user()->id,
                ]);
            }
        });
    }
}
