<?php
/**
 * Created by Maus 30.04.2019 11:34 mygomel@gmail.com
 */


class Db
{
    protected $db;

    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $this->db = new \PDO('mysql:host='.$config['host'].';charset=utf8;dbname='.$config['dbname'], $config['user'],
            $config['password']);
    }

    public function query($sql, $data = [])
    {
        $sth = $this->db->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->db->prepare($sql);
        return $sth->execute($data);
    }
}