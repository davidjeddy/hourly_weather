<?php
class TestCest
{
    // tests
    public function tryToTest(FunctionalTester $I)
    {
        exec('console test asdf1234', $output, $code);

        $I->assertEquals($output[0], 'Your string is: asdf1234');
        $I->assertEquals($code, 0);
    }
}
