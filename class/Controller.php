<?php
/**
 * Created by Maus 30.04.2019 18:29 mygomel@gmail.com
 */


class Controller
{

    protected $view;
    protected $db;

    public function __construct()
    {
        $this->view = new View();
        $this->db = new Db();

        session_start();
    }

    public function index()
    {

        $result = $this->db->query("SELECT * FROM products");
        $this->view->products = $result;

        return $this->view->render(__FUNCTION__);
    }

    public function auth()
    {
        Func::check(['name', 'password']);

        $sql = 'SELECT * FROM users WHERE login= ?';
        $result = $this->db->query($sql, [$_POST['name']]);

        if (isset($result[0]) && password_verify($_POST['password'], $result[0]['password'])) {
            $_SESSION['level'] = $result[0]['level'];
            header("Location: /");
        } else {
            exit("Login or password is wrong");
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: /");
    }

    public function add()
    {
        Func::check(['name', 'price']);

        Func::accessUser();

        $_POST['name'] = substr($_POST['name'], 0, 250); // Cut the string if it is long

        $this->db->execute("INSERT INTO products(name, description, price) VALUES(?, ?, ?)",
            [$_POST['name'], $_POST['description'] ?: null, (float)$_POST['price']]);

        header("Location: /");
    }

    public function edit($arg)
    {
        if (empty($arg)) exit('Error: missing parameters');

        Func::accessAdmin();

        if (isset($_POST['name']) && isset($_POST['price'])) {
            $this->db->execute("UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?", [$_POST['name'], $_POST['description'], $_POST['price'], (int)$arg]);
            header("Location: /");
        } else {
            $this->view->result = $this->db->query("SELECT * FROM products WHERE id = ?", [(int)$arg])[0];
            return $this->view->render(__FUNCTION__);
        }

    }

    public function delete($arg)
    {
        if (empty($arg)) exit('Error: missing parameters');

        Func::accessAdmin();

        $this->db->execute("DELETE FROM products WHERE id = ?", [(int)$arg]);

        header("Location: /");
    }


}