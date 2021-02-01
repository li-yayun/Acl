<?php


namespace Lyy\AclService;

use App\Models\SkuSupply;
use Lyy\AclService\Model\jobs;

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
        $row = jobs::query()->get()->toArray();
        dd($row);
    }
}
