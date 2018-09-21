<?php 
namespace App\Lib;

use App\Lib\UserInterface;
use Swoft\Bean\Annotation\Bean;

/**
 * @Bean("girl")
 */
class UserGirl implements UserInterface
{
    public function getData()
    {
        return 'girl';
    }
}