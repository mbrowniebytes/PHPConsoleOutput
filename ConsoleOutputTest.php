<?php

namespace Console;

use PHPUnit_Framework_TestCase;

class ConsoleOutputTest extends PHPUnit_Framework_TestCase
{
    /** @var ConsoleOutput */
    protected $consoleOutput;

    protected function setUp()
    {
        parent::setUp();

        $this->consoleOutput = new ConsoleOutput();
    }

    /**
     * @visual
     */
    public function testShowOutput()
    {
        $this->consoleOutput->showInfo('test showInfo');

        $this->consoleOutput->showWarning('test showWarning');

        $this->consoleOutput->showError('test showError');
    }
}
