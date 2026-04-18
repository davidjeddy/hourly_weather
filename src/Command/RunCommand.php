<?php
declare(strict_types=1);

namespace DavidJEddy\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

final class RunCommand extends Command
{
    /**
     * How long to make the progress part
     * 
     * @var [type]
     */
    public $progressBar = ['length' => 100];

    /**
     * Data source json
     * @var string
     */
    public $dataSourceFile = '/app/src/data.json';

    /**
     * property to hold the parsed data source
     * 
     * @var null
     */
    private $data = null;

    /**
     * [$highestTime description]
     * @var integer
     */
    private $times = [];

    /**
     * Setup the console command and its abilities
     * 
     * [configure description]
     * @return [type] [description]
     */
    protected function configure()
    {
        try {
            $this->data = \json_decode(\file_get_contents($this->dataSourceFile));
        } catch (\Exception $e) {
            throw new \Exception('Unable to parse data: ' . json_last_error(), 1);
        }

        $this->getHLTimes();
        $this->setName('run');
        $this->setDescription('Importing weather data for provided postal (zip) at the specified interval.');
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
        for ($i = 0; $i < $this->time['highest']; $i++) {
            // limit ticks to one per second, as the codes frequence is in minimal units of seconds
            sleep(1);

            for ($j; $j < count($this->data->); $j++) {

            }
            // if timer is below lowest time, continue

            // check each codes, if timer count matches code['value']
            // save request attempt
            // send async call for every codes

            // if timer is equal to highest time, reset
        }
    }

    /**
     * It's important to return 0 in a CLI ENV if no errors occured
     * 
     * @return [type] [description]
     */
    public function __destrcut()
    {
        echo "\n";
        return 0;
    }

    /**
     * Get the highest and lowest times
     * @return [type] [description]
     */
    private function getHLTimes()
    {
        $this->time['lowest']  = min($this->data);
        $this->time['highest'] = max($this->data);
    }

    /**
     * [makeRequest description]
     * @return [type] [description]
     */
    private function makeRequest()
    {

        // if request is successful, save to response table
        //  trigger weather processing
        // else save payload to error table
    }

    /**
     * Save correct responses to Weather table for human readable access
     * 
     * @return [type] [description]
     */
    private function saveWeather()
    {

    }
}
