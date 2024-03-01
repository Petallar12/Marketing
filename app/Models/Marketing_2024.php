<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing_2024 extends Model
{
    use HasFactory;
    protected $table ='marketing_2024';
    protected $primaryKey ='id';
    protected $fillable = [
        'date',
        'month',
        'source',
        'leads',
        'case_officer',
        'date_assigned',
        'name',
        'nationality', 
        'residence',
        'dob',
        'age',
        'email',
        'contact_number',
        'product_inquired',
        'other_message',
        'inquire_dependent', 
        'number_dependent',
        'status',
        'product_offered',
        'quoted_premium',
        'potential_commission',
        'insured_headcount',
        'placement_date',
        'product_sold_offered',
        'premium_annual',
        'commission_percentage',
        'commission', 
        'tat',
        'reason',
        'remarks',
        'encode_by',
        'created_at',
        'updated_at'

    ];
 
}
