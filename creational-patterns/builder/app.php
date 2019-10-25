<?php
$user1 = (new CustomerBuilder())
    ->setId(1)
    ->setFirstName('pak')
    ->setLastName('bambang')
    ->setAge(12)
    ->build();
    
$user2 = (new CustomerBuilder())
    ->setId(2)
    ->setFirstName('agus')
    ->setAge(12)
    ->build();