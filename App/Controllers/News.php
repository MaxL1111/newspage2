<?php

namespace App\Controllers;

use App\View;


class News
    extends Base
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    //контроллер показа всех новостей
    public function actionIndex()
    {
        $page = (int)$_GET['page'];
        $count_p = \App\Models\News::count($page);
        $page = $count_p[0];
        $count_post = $count_p[1];
        $this->view->news = \App\Models\News::findAll($page);
        $this->view->display(__DIR__ . '/../templates/index.php', $page, $count_post);
    }

    //контроллер показа одной новости
    public function actionOne()
    {
        $id = (int)$_GET['id'];

        $this->view->news = \App\Models\News::findOneById($id);
        $this->view->display(__DIR__ . '/../templates/article.php', '', '');
    }

}