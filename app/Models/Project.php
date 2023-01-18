<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    public static function slugGenerator($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $project_exist = Project::where('slug', $slug)->first();
        while($project_exist){
            $slug = $original_slug . '-' . $c;
            $project_exist = Project::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }
}
