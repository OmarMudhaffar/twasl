<?php

// By @Omar_Real 
// By @Send_Message  
// Ch @touch_t

$botToken = " xxxxx "; // توكن البوت
$website = "https://api.telegram.org/bot".$botToken;
$sudo_id = 325384922; // ايدي المطور
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$file = "banlist.php";
include "banlist.php";
$file4 = "twasl.php";
include "twasl.php";
$welcome_file = "welc.php";
include "welc.php";
include "control.php";
include "idst.php";
$start_id = "idst.php";


$users = count($start_ids);

if ($message == "/users" && $for == $sudo_id){
sendmark($chatId, "عدد المشتركين هوة 🚹 : " . $users, $memb);
}

if($message == "/start" && !in_array($for, $start_ids)){
file_put_contents($start_id, "\n" . '$start_ids[] = ' . $for . ";", FILE_APPEND);
}

if ($message == "/help" && $for == $sudo_id){
sendmark($chatId, "اهلا بك عزيزي ☘ الاوامر 📋 :\n\n
/addchat → لتفعيل بوت في مجموعة \n 
/addpv → لتفعيل الرسائل في الخاص \n
/ban → لحضر شخص\n
/unban → لالغاء الحضر \n
/unbanall → لازالة جميع المحضورين \n 
/bc ~ لعمل اذاعة\n
/users ~ عدد المشتركين\n
/set → لوضع ترحيب\n\n" . "[اضغط وتابع جديدنا ☘](https://telegram.me/touch_t) " , $memb);
}

$welcome = explode("/set", $message);
$im = implode("", $welcome);
if($message != in_array($message, $welcome) && $for == $sudo_id && $msssage != "/setchat" && $message != "/setsudo"){
file_put_contents($welcome_file, "<?php\n" . '$we[] ='."'$im'" . ";");
}

if ($message != in_array($message, $welcome) && $for == $sudo_id &&  !$fwd && !$sticker && !$photo && !$audio && !$nm && !$fwd && !$gif && !$pin && !$test && !$left && !$video && !$np && !$dp && !$song && $message != "/setchat" && $message != "/setsudo"){
sendmark($chatId, "تم ✅ اضافت الترحيب 👋" , $memb);
}

if($message == "/start" && $type == "private"){
sendmark($chatId, $we[0], $memb);
}


if($message == "/start" && $for == $sudo_id){
sendmark($chatId, "اهلا بك عزيزي 👤 ارسل \n/help ~ لعرض الاوامر",$memb);
}


if($message == "/welcome" && $for == $sudo_id){
sendmark($chatId, $we[0], $memb);
}

if ($message && in_array($for,$ban)){
sendmark($chatId, "عذرا ❗️لقد تم حضرك لا يمكنك ارسال الرسائل 📩🔷",$memb);
}

if($message == "/addchat" && $for == $sudo_id && $type == "supergroup"){
sendmark($chatId, "تم ✅ تفعيل هاذه المجموعة لاستقبال الرسائل 📩🔹 " , $memb);
}

if ($message == "/addpv" && $for == $sudo_id){
sendmark($chatId, "تم ✅ تفعيل استقبال الرسائل الى المطور 📩🔹" , $memb);
}

if ($message == "/addchat" && $for == $sudo_id && $type == "supergroup"){
file_put_contents($file4, "<?php" . "\n" . '$twasl[] = ' . $chatId . ";");
}

if ($message == "/addpv" && $for == $sudo_id){
file_put_contents($file4, "<?php" . "\n" . '$twasl[] = ' . $sudo_id . ";");
}

if ($message && $chatId != $group && $type == "private" && !in_array($for,$ban) && $for != $sudo_id){
forwardMessage($twasl[0] ,$chatId, $memb);
}

if ($photo && $chatId != $group && $type == "private" && $for != $sudo_id or $audio && $type == "private" && $for != $sudo_id or $gif && $type == "private" && $for != $sudo_id or $test && $type == "private" && !in_array($for,$ban) && $for != $sudo_id){
forwardMessage($twasl[0] ,$chatId, $memb);
}

if ($sticker && $type == "private" && $for != in_array($for,$ban) && $for != $sudo_id){
forwardMessage($twasl[0],$chatId,$memb);
sendMessage($twasl[0], "الملصق بواسطت ☘ :  @" . $user);
}

if ($message && $fwdrep && $message != "/ban" && $message != "/unban"){
sendMessage($fwdrep, " $message " );	
}

if ($reply && $message == "/ban" && $for == $sudo_id){
sendmark($chatId, "تم ✅ حضر العضو 🚹‼️", $memb);
sendmark($fwdrep, "تم ✅ حضرك من البوت 🤖❗️");
}

if ($reply && $message == "/ban" and $for == $sudo_id){
file_put_contents($file, "\n" . '$ban[] = ' . $fwdrep . ";", FILE_APPEND);
}

if($reply && $message == "/unban" && $for == $sudo_id){
$o = file_get_contents('banlist.php');
if (in_array($fwdrep,$ban)) {
$o = file_get_contents('banlist.php');
$o = str_replace($fwdrep,"0",$o);
$o = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $o);
file_put_contents('banlist.php', $o);
}

sendmark($chatId, "تم ✅ الغاء حضر العضو 🚹", $memb);
sendmark($fwdrep, "تم ✅ الغاء حضرك من البوت 🤖🍁");

}

if ($message == "/unbanall" && $for == $sudo_id){
sendmark($chatId, "تم ✅ حذف جميع المحضورين ‼️", $memb);
}

if ($message == "/unbanall" && $for == $sudo_id){
file_put_contents($file, "<?php");
}

    function forwardMessage ($group, $chatId, $memb){
		   $url = $GLOBALS[website].'/forwardMessage?chat_id='.$group.'&from_chat_id='.$chatId.'&message_id='.$memb;
			file_get_contents($url);
		}


	function sendMessage ($chatId, $message){
		

		$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
		file_get_contents($url);
		}
     
   function sendmark ($chatId, $message , $memb){
   $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=Markdown&text='.urlencode($message).'&disable_web_page_preview=true'.'&reply_to_message_id='.$memb;
   file_get_contents($url);
     }

ob_start();
define('API_KEY',$botToken);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message2 = $update->message;
$chat_id = $message2->chat->id;
$text = $message2->text;
$from_id = $message2->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

if ($text == "/bc"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'ارسل 📩 ما تريد نشره الان ✨🚹',
   'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [
          ['text'=>'ارسال ✅', 'callback_data'=>"bc"]
        ],
]
])
]);

}

if($text != "/bc" && !$data && $from_id == $sudo_id){
file_put_contents('bc.txt', $text);
}

if($data == "bc"){
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'تم النشر ✅',
]);


$d = file_get_contents('bc.txt');
$send = explode("\n", $txt);
for($y=0;$y<count($start_ids); $y++){

bot('sendMessage', [
'chat_id' => $start_ids[$y],
'text' => $d
]);

}
}
