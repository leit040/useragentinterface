<?php


namespace Leit040\Geo;


interface UserAgentInterface
{
    public function parse(string $userAgent);

    public function clientBrowser();

    public function clientOs();


}
