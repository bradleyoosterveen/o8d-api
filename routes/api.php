<?php
    /**
     * Register your routes here
     */

    $router->url('', 'pages/index.php');

    /**
     * Authentication
     */
    $router->url('signin', 'pages/signin.php');
    $router->url('signout', 'pages/signout.php');

    /**
     * Calendar
     */
    $router->url('calendar/insert', 'pages/calendar/insert.php');
    $router->url('calendar/delete', 'pages/calendar/delete.php');
    $router->url('calendar/edit', 'pages/calendar/edit.php');

    /**
     * Meeting
     */
    $router->url('meeting/add', 'pages/meeting/add.php');
    $router->url('meeting/cancel', 'pages/meeting/cancel.php');
    $router->url('meeting/addwithusers', 'pages/meeting/addwithusers.php');
    $router->url('meeting/index', 'pages/meeting/index.php');

    /**
     * Block
     */
    $router->url('block/add', 'pages/block/add.php');

    /**
     * Admin
     */
    $router->url('admin/createnewuser', 'pages/admin/createnewuser.php');
?>