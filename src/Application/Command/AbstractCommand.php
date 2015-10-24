<?php

namespace Application\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractCommand extends Command
{

    /**
     * @var InputInterface 
     */
    protected $input;

    /**
     * @var OutputInterface 
     */
    protected $output;

    /**
     * {@inheritDoc}
     */
    public function run(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        $this->setHelperSet($this->getApplication()->getHelperSet());

        return parent::run($input, $output);
    }

    /**
     * @return InputInterface
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @return OutputInterface
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Outputs message, wrapped in "error" style
     * 
     * @param string $message
     * @return AbstractCommand
     */
    public function error($message)
    {
        $this->getOutput()->writeln('<error>' . $message . '</error>');

        return $this;
    }

    /**
     * Outputs message, wrapped in "success" style
     * 
     * @param string $message
     * @return AbstractCommand
     */
    public function success($message)
    {
        $this->getOutput()->writeln('<info>' . $message . '</info>');

        return $this;
    }

    /**
     * Outputs message 
     * 
     * @param string $message
     * @return AbstractCommand
     */
    public function info($message)
    {
        $this->getOutput()->writeln($message);

        return $this;
    }

}
