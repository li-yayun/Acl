<?php


namespace Lyy\AclService\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class base_model
 * @author  Lyy
 * @date    2021/2/1 0001
 * @package Lyy\AclService\Model
 * @descript ：
 */
class base_model extends Model
{
    protected $connection;

    /**
     * 设置连接
     * @param $connectName
     */
    public function setContent($connectName){
        $this->connection = $connectName;
    }
}
