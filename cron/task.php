<?php
use App\Task\CheckingEmailsTask;
use App\Task\NewsletterEndSubscriptionTask;

//Задание по рассылке предупреждений о заканчивающейся подписки
NewsletterEndSubscriptionTask::start();
//Задание на проверку Email
CheckingEmailsTask::start();
