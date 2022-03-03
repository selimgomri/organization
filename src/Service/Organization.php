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

    public function deleteOrganization(int $id): bool
    {
        $datas = Organization::getOrganization();
        unset($datas['organizations'][$id]);
        $yaml = Yaml::dump($datas);


        return file_put_contents('../test_back/organizations.yaml', $yaml);
    }
}
