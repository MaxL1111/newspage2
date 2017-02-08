<?php


namespace App;


class View
{
    protected $data = [];

    use GetSetIsset;

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

}