<?php

class hrmsCest
{
 
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('https://hrms.synerzip.in/');
$I->fillField('#txtUsername','codeception');//css
$I->fillField('#txtPassword','codeception');
$I->click('#btn-login');
$I->see('Synerzip');

    }
}
