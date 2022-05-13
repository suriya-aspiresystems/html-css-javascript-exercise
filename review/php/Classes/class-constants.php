<?php
class goodBye{
    const leaveMessage="Thank for your visiting us!";
    public function Message(){
        echo self::leaveMessage;
    }
}
$visitAgain=new goodBye();
$visitAgain->Message();