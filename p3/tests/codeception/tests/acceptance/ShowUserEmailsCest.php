<?php

class ShowUserEmailsCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/test/refresh-database');
    }

    // tests
    public function showEmails(AcceptanceTester $I)
    {
        $I->amOnPage('/test/login-as/1');
        $I->amOnPage('/');

       //see view button
        $I->see('View');
       
    }
    //show email details
    public function showEmailDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/test/login-as/1');
        $I->amOnPage('/');
        $I->click('View');
        $I->see('Edit');
    }
    //delete email
    public function deleteEmail(AcceptanceTester $I)
    {
        $I->amOnPage('/test/login-as/1');
        $I->amOnPage('/');
        $I->click('View');
        $I->click('Delete');
        $I->see('Are you sure you want to delete email');
        $I->click('Delete');
        $I->see('View');
    }

}
