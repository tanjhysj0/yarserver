<?php

namespace app\service;

use app\models\Article;

class  ArticleService
{
    /**
     * 取得用户信息
     * @return string
     */
    public function UserInfo()
    {
        return "用用户";
    }

    /**
     * 取得列表
     * @return string
     */

    public function lists()
    {
        $list = Article::get()->toArray();
        return $list;
    }

    /**
     * 取得一个用户的信息
     * @param $id
     * @return mixed
     */
    public function getOne($id){
        $one = Article::where('id',$id)->first();
        return $one->toArray();
    }

}