<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 14:22
 */

namespace Dongww\Renju\Engine;


use Dongww\Renju\Api\EngineInterface;
use Dongww\Renju\Situation\V1 as SituationV1;
use Dongww\Renju\Api\SituationInterface;

class V1 implements EngineInterface
{
    /**
     * 根据输入的局面返回最佳应对局面
     *
     * @param SituationInterface $input
     *
     * @return SituationInterface
     */
    public function handle(SituationInterface $input)
    {
        return new SituationV1();
    }
}
