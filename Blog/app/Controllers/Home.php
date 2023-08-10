<?php
namespace App\Controllers;
use App\Models\ImgModel;

class Home extends BaseController{ //START CLASS HOME

    protected $login;
    public function __construct()
    {
      session_start();
      $this->login = false;
    }

    public function index()
    {
      if($this->logged_in())
      {
        $user = Model('UserModel');
        $username = $user->find($_SESSION['user_id'])['username'];
        setcookie('username',$username, time()+172800);
        return view ('index',['username'=>$username]);
      }
      else
      {
        return view ('login');
      }
    }

    public function log_out()
    {
      if(isset($_COOKIE['remember_me']))
      {
        unset($_COOKIE['remember_me']);
        setcookie('remember_me', "", time()-3600);
      }
      session_destroy();
      return redirect()->to('/');
    }

    private function logged_in()
    {
      if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
      }
      if(isset($_COOKIE['remember_me']))
      {
        $user = Model('UserModel');
        if($user_id = $user->getUserIDByToken($_COOKIE['remember_me']))
        {
          $_SESSION['login'] = true;
          $_SESSION['user_id'] = $user_id;
        }
      }

      if(isset($_SESSION['login'])&&$_SESSION['login'])
          return $this->login = true;
        else
          return $this->login = false;
    }

    public function login()
    {
      if(isset($_COOKIE['remember_me']))
      {
        unset($_COOKIE['remember_me']);
        setcookie('remember_me', "", time()-3600);
      }
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $user = Model('UserModel');
      $user_data = $user->where('email',$email)->find();
      if(count($user_data) == 0)
      {
        header("refresh:5;url=http://localhost:8080/Home" );
        echo "El ususario no existe";
        exit();
      }
      if(!password_verify($pass,$user_data[0]['password']))
      {
        header("refresh:5;url=http://localhost:8080/Home" );
        echo "Usuario o contraseña incorrectos";
        exit();
      }
      if(isset($_POST['remember']))
      {
        $cookie = [
          'token'=>$this->getToken(16),
          ];

        $user->update($user_data[0]['ID'], $cookie);
        setcookie('remember_me',$cookie['token'], time()+31556926);
      }

      $_SESSION['login'] = true;
      $_SESSION['user_id'] = $user_data[0]['ID'];

      return redirect()->to('/');
    }

    public function register()
    {
      return view ('register');
    }

    public function attempt_register()
    {
      $user = Model('UserModel');
      $email = $_POST['email'];
      $username = $_POST['username'];
      $user->getUserByEmail($email);
      if($user->getUserByEmail($email))
      {
        exit('El usuario ya existe');
      }
      if($_POST['pass'] != $_POST['pass_confirm'])
      {
        exit('Las contraseñas no coinciden');
      }
      $hash = password_hash($_POST['pass'],PASSWORD_DEFAULT);
      $data = array(
        'username' => $username,
        'password' => $hash,
        'email' => $email
      );
      if(!$user->insert($data))
      {
        exit('Error al registrar');
      }
      return redirect()->to('/');
    }

    private function getToken($length)
    {
      $token = bin2hex(openssl_random_pseudo_bytes($length));
      return $token;
    }

    public function Galery()
    {
      $user = Model('UserModel');
      $username = $user->find($_SESSION['user_id'])['username'];
      $imagenes = new ImgModel();
      $datos = $imagenes->GetUrl();
      $data = array(
        'username' => $username,
        "datos"=>$datos
      );
      //$data = ["datos"=>$datos];
      //var_dump($datos);
      //var_dump($data);
      return view('galeria',$data);
    }
  }//END CLASS HOME
