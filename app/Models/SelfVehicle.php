<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class SelfVehicle extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['vehicle_id','fule_type','register_date','chassis_num','eng_num','model_num','toll_stm','remark','f_s_d','f_e_d','file','tax_start_date','tax_end_date','tax_file','insurance_start_date','insurance_end_date','insurance_company_name','insurance_document','puc_start_date','puc_end_date','puc_file','permit_start_date','permit_end_date','permit_document','national_permit_start_date','national_permit_end_date','national_permit_file','loan_start_date','loan_end_date','bank_name','loan_amt','emi_count','emi_amt','emi_date','loan_document'];

    public function vehicleNumber()
    {
        return $this->hasOne(VehicalNumber::class, 'reference_id', 'id');
    }

    public function vehicleType()
    {
        return $this->hasOne(Vehicle::class, 'id', 'vehicle_id');
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
