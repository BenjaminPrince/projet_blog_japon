<?php

namespace App\EventSubscriber;

use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AdminSubscriber implements EventSubscriberInterface
{
        public static function getSubscribedEvents()
        {
            return[
                BeforeEntityPersistedEvent::class => ['']
            ];
        }
        
    public function setEntityCreatAt(BeforeEntityPersistedEvent $event)
    {
        $event->getEntityInstance();
}

