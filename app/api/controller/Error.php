<?php


namespace app\api\controller;


use think\response\Json;

class Error
{
    /**
     * @param $name
     * @param $arguments
     * @return Json
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        $result=[
            'status'=>config("status.controller_not_found"),
            'message'=>"找不到该控制器",
            'result'=>null

        ];
        return json($result,400);


    }

}
