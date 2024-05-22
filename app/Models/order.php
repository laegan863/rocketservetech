<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
    	'transaction_id',
    	'date_applied',
	    'amount',
	    'description',
	    'user_email',
	    'user_number',
	    'firstName',
	    'lastName',
	    'Address_line_1',
	    'Address_line_2',
	    'city',
	    'state',
	    'Postal_code',
	    'country',
	    'status'
    ];
}
