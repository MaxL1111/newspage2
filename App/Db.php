<?php


namespace App;

class Db
{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        try {
            $dsn = 'mysql:host=localhost;dbname=testtask';
            $this->dbh = new \PDO($dsn, 'test', 'test');
        } catch (\PDOException $e) {
            throw new \App\Exceptions\Db(' Ошибка соединения с базой данных :(  Зайдите позже! ');
        }
    }
    
    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query($sql, $params, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

    public function nav($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false !== $res) {
            return $sth->fetchAll();
        }
        return [];
    }
    

}