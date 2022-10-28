<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
	
	 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';
	
	
	/**
     * The primary key associated with the table.
     *
     * @var string
     */
	protected $primaryKey = 'id';
	
	
	 /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;	
	
	  
	public function company()
	{
		return $this->belongsTo(Company::class);
	}
}
