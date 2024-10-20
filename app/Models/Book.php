<?php

namespace App\Models;

use App\Helpers\CustomHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Book extends Authenticatable
{
    use HasFactory, CRUDGenerator, SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'auhtor_id', 'slug', 'title', 'publish_date', 'category_id', 'genre', 'image_url','status','created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * It is used to enable or disable DB cache record
     * @var bool
     */
    protected $__is_cache_record = false;

    /**
     * @var
     */
    protected $__cache_signature;

    /**
     * @var string
     */
    protected $__cache_expire_time = 1; //days

    public function author()
    {
        return $this->belongsTo(User::class,'auhtor_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public static function generateUniqueBookName($bookname)
    {
        $bookname = Str::slug($bookname);
        $query = self::where('slug',$bookname)->count();
        if( $query > 0){
            $bookname = $bookname . $query . rand(111,999);
        }
        return Str::slug($bookname);
    }
}
