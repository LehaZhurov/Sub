<?php
use App\Task\CheckingEmailsTask;
use App\Task\NewsletterEndSubscriptionTask;
require 'callme.php';
/*
Все задания создаются в отдельном классе в папке Task
где описывается суть задания
 */

//Задание по рассылке предупреждений о заканчивающейся подписки
$scheduler->call(function () {
    NewsletterEndSubscriptionTask::start();
})->daily('23:00');
$scheduler->call(function () {
    CheckingEmailsTask::start();
})->daily('23:00');
