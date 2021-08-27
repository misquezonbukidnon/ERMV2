<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Office;
use App\Models\Position;
use App\Models\Classification;
use App\Models\EmploymentStatus;
use App\Models\EmployeeImage;
use App\Models\FileUpload;

class EmployeeRelationship extends Model
{
    use HasFactory;

    protected $fillable = [
        'employees_id',
        'offices_id',
        'positions_id',
        'classifications_id',
        'employment_statuses_id',
        'employee_images_id',
        'file_uploads_id'
    ];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'employees_id');
    }

    public function offices()
    {
        return $this->belongsTo(Office::class, 'offices_id');
    }

    public function positions()
    {
        return $this->belongsTo(Position::class, 'positions_id');
    }

    public function classifications()
    {
        return $this->belongsTo(Classification::class, 'classifications_id');
    }

    public function employment_statuses()
    {
        return $this->belongsTo(EmploymentStatus::class, 'employment_statuses_id');
    }

    public function employee_images()
    {
        return $this->belongsTo(EmployeeImage::class, 'employee_images_id');
    }

    public function file_uploads()
    {
        return $this->belongsTo(FileUpload::class, 'file_uploads_id');
    }
}
