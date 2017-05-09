<?php
declare(strict_types=1);

namespace DavidJEddy\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class TestCommand extends Command
{
    /**
     * Setup the console command and its abilities
     * 
     * [configure description]
     * @return [type] [description]
     */
    protected function configure()
    {
        $this->setName('test');
        $this->setDescription('Testing console commands.');
        $this->addArgument('test-arg', InputArgument::REQUIRED, 'ARgument is required.');
    }

    /**
     * Execute a given set of instructions here
     * 
     * @param  InputInterface  $input  [description]
     * @param  OutputInterface $output [description]
     * @return [type]                  [description]
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $testString = $input->getArgument('test-arg');

        $output->writeln(sprintf(
            'Your string is: %s', $testString
        ));
    }

    /**
     * It's important to return 0 in a CLI ENV if no errors occured
     * z
     * @return [type] [description]
     */
    public function __destrcut()
    {
        return 0;
    }
}
