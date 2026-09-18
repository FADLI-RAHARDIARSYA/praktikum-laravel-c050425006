<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Mahasiswa extends Model
{
    use HasFactory;
    // Kolom yang boleh diisi melalui mass assignment
    protected $fillable = ['nim', 'nama', 'email', 'prodi', 'semester'];
}