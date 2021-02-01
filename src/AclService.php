<?php


namespace Lyy\AclService;

use App\Models\SkuSupply;

/**
 * Class AclService
 * @author  Lyy
 * @date    2021/1/29 0029
 * @package Lyy\AclService
 * @descript ：
 */
class AclService
{
    public static function testDb(){
        $row = SkuSupply::query()->first();
        dd($row);
    }
}
