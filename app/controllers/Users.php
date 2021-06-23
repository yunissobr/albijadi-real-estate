<?php
class Users extends Controller
{

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        if (isLoggedIn()) {
            redirect('users/account');
        }
        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            $data = [
                'email' => trim($email),
                'username' => trim($username),
                'password' => trim($password),
                'confirm_password' => trim($confirm_password),
                'email_err' => '',
                'username_err' => '',
                'password_err' => '',
                'confirm_password_arr' => '',
            ];

            if (empty($data['email'])) {
                $data['email_err'] = "Please enter a valid email";
            } else if ($this->userModel->findUserByEmail($data['email'])) {
                $data['email_err'] = "Email already exist";
            }

            if (empty($data['username'])) {
                $data['username_err'] = "Please enter a username";
            } elseif ($this->userModel->findUserByUsername($data['username'])) {
                $data['username_err'] = "Username already taken";
            }

            if (empty($data['password'])) {
                $data['password_err'] = "Please enter a password";
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = "Password must be at least 6 characters";
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_arr'] = "Please re-type password";
            }

            if ($confirm_password != $password) {
                $data['confirm_password_arr'] = "Passwords dont match!";
            }

            if (empty($data['email_err']) && empty($data['username_err']) && empty($data['password_err']) && empty($data['confirm_password_arr'])) {
                # All is Done Go ahead insert the user

                # Hash the password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                # Register a userr
                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registred and can log in !');
                    redirect('users/login');
                } else {
                    die('something went wrong');
                }
            } else {
                # Something wrong Please load the view with errors
                $this->view('users/register', $data);
            }
        }

        $this->view('users/register', $data);
    }

    public function login()
    {
        if (isLoggedIn()) {
            redirect('users/account');
        }
        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            if (empty($data['email'])) {
                $data['email_err'] = "Please enter a valid email";
            } elseif (!$this->userModel->findUserByEmail($data['email'])) {
                $data['email_err'] = "No user found";
            }

            if (empty($data['password'])) {
                $data['password_err'] = "Please enter a password";
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = "";
            }

            if (empty($data['email_err']) && empty($data['password_err'])) {
                # Done, go login the user if pwd is correct
                $login_user = $this->userModel->login($data['email'], $data['password']);

                if ($login_user) {
                    # create user session
                    $this->createUserSession($login_user);
                    redirect('dashboard/');
                } else {
                    $data['password_err'] = "Incorrect password";
                    $this->view('users/login', $data);
                }
            } else {
                // load the view with errs
                $this->view('users/login', $data);
            }
        }

        $this->view('users/login', $data);
    }

  

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['user_email'] = $user->email;
        redirect('pages/index');
    }

    public function logout()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        } else {
            unset($_SESSION['user_id']);
            unset($_SESSION['user_name']);
            unset($_SESSION['user_email']);
            flash('logout_success', 'You just logged out !', 'alert alert-success');
            redirect('users/login');
        }

    }

}
