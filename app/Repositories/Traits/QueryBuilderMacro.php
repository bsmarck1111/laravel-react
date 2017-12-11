<?php
/**
 * Created by PhpStorm.
 * User: rummykhan
 * Date: 12/11/17
 * Time: 9:40 PM
 */

namespace App\Repositories\Traits;

trait QueryBuilderMacro
{
    public function getQueryBuilder()
    {
        return $this->model();
    }
}