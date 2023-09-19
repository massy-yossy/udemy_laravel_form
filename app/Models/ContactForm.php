<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact'
    ];

    public function ScopeSearch($query, $search){
        if($search !== null){
            $search_split = mb_convert_kana($search, 'S'); //全角から半角スペース
            $search_split2 = preg_split('/[\s]+/', $search_split); //空白で区切る
            foreach($search_split2 as $value){
                $query->where('name','like','%'.$value.'%');
            }
            return $query;
        }
    }
}
