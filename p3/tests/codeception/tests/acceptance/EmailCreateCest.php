<?php

class EmailCreateCest
{
    public function _before(AcceptanceTester $I)
    {
        //refresh the database
        $I->amOnPage('/test/refresh-database');
    }

    // tests
    public function EmailCreate(AcceptanceTester $I)
    {
        $I->amOnPage('/test/login-as/1');
        $I->amOnPage('/');
        $I->click('CreateEmail');
        $I->see('Title');
        $I->fillField('[name=title]', "Test");
        $I->fillField('[name=content]', "Test");
        $I->click('Create');
        $I->see('Email created successfully');
    }
}
