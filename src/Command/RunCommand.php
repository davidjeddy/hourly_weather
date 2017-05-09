<?php
declare(strict_types=1);

namespace DavidJEddy\Command;

use Nette\Security\Passwords;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

final class RunCommand extends Command
{
    /**
     * [$frequence description]
     * @var null
     */
    protected $frequence = null;

    /**
     * Setup the console command and its abilities
     * 
     * [configure description]
     * @return [type] [description]
     */
    protected function configure()
    {

        $this->setName('run');
        $this->setDescription('Importing weather data for provided postal (zip) codes every ' .
            $this->frequence[1] . ' ' . $this->frequence[0] . '.');      
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
        $progress = new ProgressBar($output, 50);

        $progress->start();

        $i = 0;
        while ($i++ < 50) {
            // ... do some work

            // advance the progress bar 1 unit
            $progress->advance();

            // you can also advance the progress bar by more than 1 unit
            // $progress->advance(3);
        }

        // ensure that the progress bar is at 100%
        $progress->finish();
    }

    /**
     * It's important to return 0 in a CLI ENV if no errors occured
     * 
     * @return [type] [description]
     */
    public function __destrcut()
    {
        return 0;
    }
}