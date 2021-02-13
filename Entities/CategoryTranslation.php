<?php

namespace Modules\Iplan\Entities;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ["name", "slug", "description"];
    protected $table = 'iplan__category_translations';
}