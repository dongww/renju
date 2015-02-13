<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 13:14
 */

namespace Dongww\Renju\Api;


interface ApplicationInterface
{
    /**
     * 处理局面，返回应对局面
     *
     * @param SituationInterface $situation
     *
     * @return SituationInterface
     */
    public function handle(SituationInterface $situation);
}
