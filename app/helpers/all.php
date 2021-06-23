<?php
session_start();

// Simple page redirect
function redirect($page)
{
    header("Location: " . URLROOT. $page);
}

# check if a user is logged in 
function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

// Flash message 
/* FLASH DOC : ex: flash('register_success','successfuly registred');
     * DISPLAY IN TEMPLATE : ex: flash('register_success');
     */
function flash($name = '', $message = '', $class = 'alert alert-success')
{
    if (!empty($name)) {
        if (!empty($message) && empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }

            if (!empty($_SESSION[$name . '_class'])) {
                unset($_SESSION[$name . '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } elseif (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo '
                    <div class="' . $class . '" role="alert">
                        ' . $_SESSION[$name] . '
                    </div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}




