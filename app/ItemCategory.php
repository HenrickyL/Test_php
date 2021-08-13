<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    /**
     * @var array
     */
    protected $hidden = array('created_at', 'updated_at');

    /**
     * @return mixed
     */
    public function items()
    {
        return $this->hasMany('App\Item');
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return mixed
     */
    public function toggleEnable()
    {
        $this->is_enabled = !$this->is_enabled;
        return $this;
    }
}
