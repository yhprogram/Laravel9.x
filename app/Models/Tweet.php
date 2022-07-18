<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $table = 'tweets';

    // idがtweet_idだった場合は下記で宣言しておく
    // protected $primarykey = 'tweet_id';

    // 主キーがプライマリーキーでなかった場合
    // public $incrementing = false;

    // 主キーが整数でなかった場合
    // protected $keyType = 'string';

    // // created_at, updated_atが不要の場合
    // public $timestamps = false;

    // created_at, updated_atを別名で使用している場合
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';
}
