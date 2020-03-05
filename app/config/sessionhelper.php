<?php

/*
* Session Helper
* Description: Start Session and create functions for Log-in and Log-out.
*/

session_start();

/**
 * Check if admin logged in
 * @return bool
 */
function isLoggedIn() : bool
{
    if (!isset($_SESSION['id'])) {
        return false;
    }
    return true;
}

/**
 * Unset all session and logOut user
 */
function logOut(): void
{
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    session_destroy();
}