<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Corcel\Post as Corcel;
class Posts extends Corcel
{
    protected $postType = 'post';
}
