<?php
namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Resume extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'resume';
}