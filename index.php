<?php

class Notification
{
    public function __construct(public string $message)
    {

    }

    public function send() 
    {
        echo 'Show pop up flash message';
    }
}

class EmailNotification extends Notification
{
    public function send() 
    {
        echo 'Fired off an email notification';
    }
}

class OSNotification extends Notification
{
    public function send() 
    {
        echo 'Dispatch an OS-specific notification';
    }
}

$notification = new EmailNotification('Here is my notification');
$notification->send();


