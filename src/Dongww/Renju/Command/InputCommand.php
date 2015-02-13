<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 13:26
 */

namespace Dongww\Renju\Command;

use Dongww\Renju\Application;
use Dongww\Renju\Config;
use Dongww\Renju\Situation\V1;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InputCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('renju:input')
            ->setDescription('Get the best Response by input points.')
            ->addArgument(
                'points',
                InputArgument::OPTIONAL
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $config = new Config(__DIR__ . '/../../../../config/options.yml');
        $app    = new Application($config);

        $response = $app->handle(V1::createFromParam($input->getArgument('points')));

        $output->writeln($response->toString());
    }
}
