<?php 
namespace App\Lib;

use App\Lib\UserInterface;
use Swoft\Bean\Annotation\Bean;

/**
 * @Bean("boy")
 */
class UserBoy implements UserInterface
{
    public function getData()
    {
        return 'boy';
    }
}