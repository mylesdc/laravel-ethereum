<?php
namespace Mylesdc\LaravelEthereum\Facade;
use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: lee
 * Date: 11/12/2017
 * Time: 3:31 PM
 */
class Ethereum extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mylesdc\LaravelEthereum\Lib\Ethereum::class;
    }
}