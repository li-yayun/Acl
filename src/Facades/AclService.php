<?php
namespace Lyy\AclService\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * Class AclService
 * @author  Lyy
 * @date    2021/1/29 0029
 * @package ${NAMESPACE}
 * @descript ：
 */
class AclService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AclService';

    }
}
