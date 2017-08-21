<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MemberSeller extends Model
{

    protected $table = 'pa_role_seller';

    public $timestamps = false;

    protected $primaryKey = 'uid';

    public function member()
    {
        return $this->belongsTo('App\Model\Member','uid','uid');
    }
}
