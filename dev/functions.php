<?php
namespace dev;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;
use SymfonyRoadrunner\Exception\Dump;

function dd(...$vars)
{
    $dumper = new HtmlDumper;
    $throwable = new Dump();

    foreach ($vars as $var) {
        $throwable->addDump(
            $dumper->dump((new VarCloner)->cloneVar($var), true)
        );
    }

    throw $throwable;
}
