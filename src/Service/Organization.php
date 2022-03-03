<?php


namespace App\Service;

use Symfony\Component\Yaml\Yaml;

class Organization
{
    public function getOrganization(): array
    {
        

        $value = Yaml::parseFile('../test_back/organizations.yaml');
        
        return $value;
    }
}