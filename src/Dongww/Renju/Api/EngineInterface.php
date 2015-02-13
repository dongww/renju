<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 14:20
 */

namespace Dongww\Renju\Api;


interface EngineInterface
{
    /**
     * @param SituationInterface $input
     * @return SituationInterface
     */
    public function handle(SituationInterface $input);
}
