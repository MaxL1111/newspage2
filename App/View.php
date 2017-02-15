<?php


namespace App;


class View
    extends \Twig_Loader_Filesystem
{
    protected $data = [];

    use GetSetIsset;

/*
    //обработка входящих данных и включения в шаблон
    public function render($template, $page, $count_post)
    {
        ob_start();
        foreach ($this->data as $prop => $value) {
            $$prop = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    //функция вывода нужного шаблона пользователю
    public function display($template, $page, $count_post)
    {
        echo $this->render($template, $page, $count_post);
    }
*/


    
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