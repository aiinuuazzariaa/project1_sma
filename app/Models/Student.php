<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    public $timestamps = false;
    protected $fillable = ['student_name', 'gender', 'address', 'id_major'];
}