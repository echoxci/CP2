<?php

namespace App\Models;

use App\Core\Model;

class SkateboardModel extends Model
{

    static public function setDbColumns()
    {
        return ['name', 'description', 'img_path', 'price'];
    }

    static public function setTableName()
    {
        return 'skateboards';
    }
}