<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteFirstTest extends TestCase
{
    /**
     * Test of routs.
     *
     * @return void
     */
    public function testRouts()
    {
        $statusOk = 200;

        $url = '/';
        $this->visit($url)->seePageIs($url)->assertResponseStatus($statusOk);

        $url = '/item';
        $this->visit($url)->seePageIs($url)->assertResponseStatus($statusOk);

        $url = '/item/1';
        $this->visit($url)->seePageIs($url)->assertResponseStatus($statusOk);
    }
}
