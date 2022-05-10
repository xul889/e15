<?php

class EmailEditCest
{
    public function _before(AcceptanceTester $I)
    {
        //refresh the database
        $I->amOnPage('/test/refresh-database');
    }

    // tests
    public function EmailEdit(AcceptanceTester $I)
    {
        $I->amOnPage('/test/login-as/1');
        $I->amOnPage('/');
        $I->click('View');
        $I->see('Edit');
        $I->click('Edit');
        $I->see('Title');
        $I->fillField('[name=title]', "Test");
        $I->fillField('[name=content]', "Test");
        $I->click('Submit');
        $I->see('Email updated successfully');

    }
}
