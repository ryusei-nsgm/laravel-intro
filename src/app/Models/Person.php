<?php

namespace App\Models;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    protected $guarded = array('id');
    public $timestamps = false;

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData(){
        return $this->id . ': ' . $this->name . '(' . $this->age . ')';
    }

    public function board(){
        // return $this->hasOne('App\Models\Board');
        return $this->hasMany('App\Models\Board');
    }

    // グローバルスコープ
    protected static function boot()
    {
        parent::boot();
        // static::addGlobalScope('age', function (Builder $builder){
        //     $builder->where('age', '>', 20);
        // });

        // ScopePerson をグローバルスコープとして追加
        static::addGlobalScope(new ScopePerson);
    }

    // ローカルスコープ
    // public function scopeNameEqual($query, $str)
    // {
    //     return $query->where('name', $str);
    // }

    // public function scopeAgeGreaterThan($query, $n)
    // {
    //     return $query->where('age', '>=', $n);
    // }

    // public function scopeAgeLessThan($query, $n)
    // {
    //     return $query->where('age', '<=', $n);
    // }
}
