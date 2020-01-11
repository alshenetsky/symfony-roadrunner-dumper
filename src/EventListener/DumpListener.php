<?php

namespace SymfonyRoadrunner\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use SymfonyRoadrunner\Exception\Dump;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class DumpListener
{
    public function onKernelException(ExceptionEvent $event)
    {
        $e = method_exists($event, 'getThrowable') ? $event->getThrowable() : $event->getException();
        if ($e instanceof Dump) {
            $event->allowCustomResponseCode();
            $event->setResponse(
                new Response($e, 200)
            );
        }
    }
}
