<?php

namespace LinkValue\MobileNotifBundle\Entity\MobileClient;

/**
 * Interface to implement on a Mobile Client class.
 */
interface MobileClientInterface
{
    /**
     * Push a notification to a mobile client.
     *
     * @param MobileMessage $mobileMessage
     */
    public function push(MobileMessage $mobileMessage);
}