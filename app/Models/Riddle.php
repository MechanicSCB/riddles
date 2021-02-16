<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $difficulty
 * @property string $input
 * @property string $output
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 */

class Riddle extends Model
{
    use HasFactory;

    protected $guarded = [];


}
