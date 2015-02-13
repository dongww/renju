<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 13:06
 */
namespace Dongww\Renju\Situation;

use Dongww\Renju\Api\PointInterface;
use Dongww\Renju\Api\SituationInterface;


class V1 implements SituationInterface
{
    /**
     * @return PointInterface
     */
    public function getLastPoint()
    {
        // TODO: Implement getLastPoint() method.
    }

    /**
     * 从输入参数（Json 形式的点集，例如 [H8, H9]）生成局面
     *
     * @param string $param
     * @return SituationInterface
     */
    public static function createFromParam($param)
    {
        return new static();
    }

    /**
     * 以字符串形式（Json）返回当前局面，例如 [H8, H9]
     *
     * @return string
     */
    public function toString()
    {
        // TODO: Implement toString() method.
    }
}
