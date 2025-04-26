<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class TripMovement extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['trip_count_no', 'trip_date','vendor_id','origin','destination','vehicle_id','client_id','driver_id','per_day_allow','rate','advance','advance_date','toll','unloading_charges','holding_charges','balance_payment','payment_received_amount','payment_date','pod_no','pod_status','bill_status','payment_terms','invoice_no','invoice_date','courier_doc_no','courier_date','vendor_rate','remark'];

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
