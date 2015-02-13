<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 13:14
 */

namespace Dongww\Renju;

use Dongww\Renju\Api\ApplicationInterface;
use Dongww\Renju\Api\SituationInterface;
use Dongww\Renju\Engine\V1;

class Application implements ApplicationInterface
{
    /** @var V1 */
    private $engine;

    public function __construct(Config $config)
    {
        $this->engine = new V1();
    }

    /**
     * 处理局面，返回应对局面
     *
     * @param SituationInterface $situation
     * @return SituationInterface
     */
    public function handle(SituationInterface $situation)
    {
        return $this->engine->handle($situation);
    }
}
