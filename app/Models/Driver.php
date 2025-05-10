<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Driver extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['f_name','l_name','mobile_no','basic_salary','joining_date','end_date','alternate_contact_no','email','address','city','pincode','state','status','aadhar_card_path','pan_card_path','driving_license_path','driving_license_validity','remark','bank_name','bank_account_no','bank_ifsc_code','reference_name','bank_branch','gpay_number'];

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
