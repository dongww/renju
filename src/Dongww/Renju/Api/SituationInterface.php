<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 13:02
 */

namespace Dongww\Renju\Api;


interface SituationInterface
{
    /**
     * @return PointInterface
     */
    public function getLastPoint();

    /**
     * 从输入参数生成局面
     *
     * @param string $param
     * @return SituationInterface
     */
    public static function createFromParam($param);

    /**
     * 以字符串形式（Json）返回当前局面，例如 [H8, H9]
     *
     * @return string
     */
    public function toString();
}
