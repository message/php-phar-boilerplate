<?php

namespace Application\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ApplicationCommand extends AbstractCommand
{

    const COMMAND_NAME = 'main';

    protected function configure()
    {
        $this->setName(static::COMMAND_NAME)
            ->setDescription('Main command, which is called by default if there is only one command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->error("Error message");
        $this->success("Success message");
        $this->info("Info message");
    }

}
