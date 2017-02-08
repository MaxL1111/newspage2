<?php

namespace App\Controllers;

use App\View;

class Comment
    extends Base
{

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    //контроллер добавления комментария
    public function actionInsertOne()
    {
        $autor_com = $_POST['autor_com'];
        $text_com = $_POST['text_com'];

        $obj = new \App\Models\Comment();
        $data = $obj->validate($autor_com, $text_com);

        if (!empty($_POST['page_id'] && $data['autor_com'] && $data['text_com'])) {
            $comment = new \App\Models\Comment();
            $comment->page_id = $_POST['page_id'];
            $comment->autor_com = $data['autor_com'];
            $comment->text_com = $data['text_com'];
            $comment->insert();
            echo 'Ваш комментарий добавлен!';
        } else {
            echo 'Внимание!Комментарий не добавлен!Введенные данные некорректные либо пустые поля';
        }
    }


}