<?php

namespace SpecificationPattern;

class CustomerIsGold {

    public function isSatisfiedBy(Customer $customer)
    {
        return $customer->plan == 'gold';
    }
}


