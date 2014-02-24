<?php

/*
 * This file is part of the TempoSimple project.
 *
 * (c) Loïc Chardonnet <loic.chardonnet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TempoSimple\Test\Functional\Cli;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use TempoSimple\Bundle\SpaghettiBundle\Command\PrintCheatSheetCommand;

class PrintCheatSheetCommandTest extends CommandTestCase
{
    public function testExecute()
    {
        $parameters = array();

        $this->givenThisCommand(new PrintCheatSheetCommand());
        $this->whenItIsRun($parameters);
        $this->thenItShouldSuceed();
    }
}