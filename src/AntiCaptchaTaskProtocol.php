<?php
namespace abovesky\anticaptcha;

interface AntiCaptchaTaskProtocol
{
    public function getPostData();
    public function setTaskInfo($taskInfo);
    public function getTaskSolution();
}