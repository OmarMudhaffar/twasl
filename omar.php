<?php
// By @Omar_Real 
// By @Send_Message  
// Ch @touch_t
$botToken = " "; // توكن البوت
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


$welcome = explode("/set", $message);
$im = implode("", $welcome);
if($message != in_array($message, $welcome) && $for == $sudo_id){
file_put_contents($welcome_file, "<?php\n" . '$we[] ='."'$im'" . ";");
}

if ($message != in_array($message, $welcome) && $for == $sudo_id &&  !$fwd && !$sticker && !$photo && !$audio && !$nm && !$fwd && !$gif && !$pin && !$test && !$left && !$video && !$np && !$dp && !$song){
sendmark($chatId, "تم ✅ اضافت الترحيب 👋" , $memb);
}

if($message == "/start"){
sendmark($chatId, $we[0], $memb);
}

if ($message && in_array($for,$ban)){
sendmark($chatId, "عذرا ❗️لقد تم حضرك لا يمكنك ارسال الرسائل 📩🔷",$memb);
}

if($message == "/setchat" && $for == $sudo_id && $type == "supergroup"){
sendmark($chatId, "تم ✅ تفعيل هاذه المجموعة لاستقبال الرسائل 📩🔹 " , $memb);
}

if ($message == "/setsudo" && $for == $sudo_id){
sendmark($chatId, "تم ✅ تفعيل استقبال الرسائل الى المطور 📩🔹" , $memb);
}

if ($message == "/setchat" && $for == $sudo_id && $type == "supergroup"){
file_put_contents($file4, "<?php" . "\n" . '$twasl[] = ' . $chatId . ";");
}

if ($message == "/setsudo" && $for == $sudo_id){
file_put_contents($file4, "<?php" . "\n" . '$twasl[] = ' . $sudo_id . ";");
}

if ($message && $chatId != $group && $type == "private" && !in_array($for,$ban)){
forwardMessage($twasl[0] ,$chatId, $memb);
}

if ($photo && $chatId != $group && $type == "private" or $audio && $type == "private" or $gif && $type == "private" or $test && $type == "private" && !in_array($for,$ban)){
forwardMessage($twasl[0] ,$chatId, $memb);
}

if ($sticker && $type == "private" && $for != in_array($for,$ban)){
forwardMessage($twasl[0],$chatId,$memb);
sendMessage($twasl[0], "الملصق بواسطت ☘ :  @" . $user);
}

if ($message && $fwdrep && !"/ban"){
sendMessage($fwdrep, " $message " );	
}

if ($reply && $message == "/ban" && $for == $sudo_id){
sendmark($fwdrep, "تم ✅ حضرك من البوت 🤖❗️");
}

if ($message == "/ban" and $for == $sudo_id){
file_put_contents($file, "\n" . '$ban[] = ' . $replay . ";", FILE_APPEND);
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
		?> 
