<?php

class SentLogsCest
{
    public function _before(AcceptanceTester $I)
    {
        //refresh database
        $I->amOnPage('/test/refresh-database');
    }

    // tests
    public function SentLogPage(AcceptanceTester $I)
    {   
        $I->amOnPage('/test/login-as/1');
        $I->amOnPage('/sentlog');
        $I->see('Sent Logs');
        $I->see('Title');
    }
}
