<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
	
	 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';
	
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
	
	
	public function employees()
	{
		return $this->hasMany(Employee::class, "company_id", "id");
	}
}
