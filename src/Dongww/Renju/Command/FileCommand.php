<?php
/**
 * User: dongww
 * Date: 2015-2-13
 * Time: 14:01
 */

namespace Dongww\Renju\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Parser;

class FileCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('renju:file')
            ->setDescription('Get the best Response by file.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $yaml        = new Parser();
        $pointsArray = $yaml->parse(file_get_contents(__DIR__ . '/../../../../config/points.yml'));
        $points      = json_encode($pointsArray['points']);

        $command = $this->getApplication()->find('renju:input');

        $arguments = array(
            'command' => 'renju:input',
            'points'  => $points,
        );

        $input      = new ArrayInput($arguments);
        $command->run($input, $output);
    }
}
