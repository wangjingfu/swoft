<?php 
namespace App\Controllers;

use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\Controller;
use App\Lib\UserInterface;
use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Bean;

/**
* @Bean("UserLogic")
* @Controller(prefix="/UserLogic")
*/
class UserLogicController
{
    /**
     * @Inject()
     * @var UserInterface
     */
    protected $userData;
    
    /**
     * @RequestMapping(route="get")
     */
    public function getData()
    {
        return $this->userData->getData();
    }
}