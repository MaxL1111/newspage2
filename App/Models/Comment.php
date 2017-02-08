<?php

namespace App\Models;

use App\Model;

use App\Db as Db;

/**
 * Class Comments
 * @package App\Models
 *
 * @property $autorcom
 */
class Comment extends Model
{
    const TABLE = 'comments';
    public $page_id;
    public $autor_com;
    public $text_com;


    //выборка комментариев к новости
    public static function findOneById($page_id)
    {
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE page_id=:page_id';
        $db = Db::instance();
        return $db->query(
            $sql,
            [':page_id' => $page_id],
            static::class
        );
    }

    //удаление комментариев из БД после удаления новости
    public function delete($id)
    {
        $page_id = $id;
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE page_id=:page_id';
        $db = Db::instance();
        $db->execute($sql, [':page_id' => $page_id])[0];
    }
    

    //валидация входящих данных в форме добавления комментария
    public function validate($autor_com, $text_com)
    {
        $obj = new \App\Validation();
        $autor_com = $obj->clean($autor_com);
        $text_com = $obj->clean($text_com);
        $data = [];

        if (!empty($autor_com) && !empty($text_com)) {
            if ($obj->check_length($autor_com, 2, 50) && $obj->check_length($text_com, 3, 400)) {
                $data['autor_com'] = $autor_com;
                $data['text_com'] = $text_com;
                return $data;
            }
        }
    }

}