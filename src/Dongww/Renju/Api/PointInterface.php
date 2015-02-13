<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 13:08
 */

namespace Dongww\Renju\Api;


interface PointInterface
{
    public function getX();

    public function getY();

    /**
     * 以字符串形式返回当前点的坐标，例如 H8
     *
     * @return string
     */
    public function output();
}
