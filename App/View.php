<?php


namespace App;


class View
    extends \Twig_Loader_Filesystem
{
    protected $data = [];

    use GetSetIsset;


    public function display($template, $page, $news, $count_post)
    {
        $loader = new \Twig_Loader_Filesystem('App/templates'); //создаем загрузчик файловой системы и передаем ему как параметром папку с шаблонами, чтобы найти шаблоны
        $twig = new \Twig_Environment($loader);//контекст (Twig_Environment) для хранения данных
        $temp = $twig->loadTemplate($template);
        echo $temp->render(array('news' => $news,
            'page' => $page,
            'count_post' => $count_post
        ));
    }

}