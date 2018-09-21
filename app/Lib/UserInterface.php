<?php 
namespace App\Lib;

use Swoft\Bean\Annotation\Bean;

/**
 * @Bean(ref="boy")
 */
interface UserInterface
{
    public function getData();
}

