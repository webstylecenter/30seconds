<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $language = new Language();
        $language->setName('Nederlands');
        $language->setShorthand('nl');

        $secondLanguage = new Language();
        $secondLanguage->setName('English');
        $secondLanguage->setShorthand('en');

        $manager->persist($language);
        $manager->persist($secondLanguage);

        $manager->flush();
    }
}
