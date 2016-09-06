<?php

namespace AppBundle\Entity\Infrasctucture;

/**
 * @author Vehsamrak
 * @property $registrationDate
 */
trait FormattedRegistrationDateTrait
{
    public function getRegistrationDate(): string
    {
        return $this->registrationDate->format('Y-m-d H:i:s');
    }
}