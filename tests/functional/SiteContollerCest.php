<?php

namespace tests\functional;

class SiteContollerCest
{
    public function _before(\FunctionalTester $I)
    {
    }

    public function openIndexPage(\FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->seeResponseCodeIs(200);
    }
}
