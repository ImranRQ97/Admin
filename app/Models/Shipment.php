<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    // Define which attributes are mass assignable
    protected $fillable = [
        'from_company',
        'to_company',
        'from_address',
        'to_address',
        'vehicle_number',
        'model_name',
        'driver_name',
        'driver_no',
        'product_name',
        'quantity',
        'price',
        'invoice_number',
        'invoice_date',
        'user_id',
        'status',
    ];

    // Accessor for status badge color
    public function getStatusClassAttribute()
    {
        switch ($this->status) {
            case 'new':
                return 'secondary-subtle text-secondary';
            case 'lr_informed':
                return 'info-subtle text-info';
            case 'lr_generated':
                return 'warning-subtle text-warning';
            case 'cancelled':
                return 'danger-subtle text-danger';
                case 'completed':
                    return 'success-subtle text-success';
            default:
                return 'secondary-subtle text-secondary';
        }
        
    }
}
