<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    
    /**
     * The name of the "id" column.
     *
     * @var string
     */
    const ID = 'id';

    /**
     * The name of the "header" column.
     *
     * @var string
     */
    const HEADER = 'header';

    /**
     * The name of the "body" column.
     *
     * @var string
     */
    const BODY = 'body';
    
    protected $fillable = ['header', 'body'];
    
    
}
