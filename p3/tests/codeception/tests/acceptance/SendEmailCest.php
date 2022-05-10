<?php

class SendEmailCest
{
    public function _before(AcceptanceTester $I)
    {
        //refresh the database
        $I->amOnPage('/test/refresh-database');
    }

    // tests
    public function SendEmail(AcceptanceTester $I)
    {
        $I->amOnPage('/test/login-as/1');
        $I->amOnPage('/');
        $I->click('Send');
        $I->see('Please input the email address of the receiver');
        $I->fillField('[name=email]', "xunqiliu@outlook.com");
        $I->click('Send the email');
        $I->see('Email sent successfully');
    }
}
