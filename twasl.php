<?php

$group = -10010552072 // ايدي كروب لاستقبال رسايل او خاص
$botToken = ""; // توكن البوت

$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$mensagemID = $update['message']['reply_to_message']['message_id'];
$chatID = $update['message']['reply_to_message']['chat']['id'];
$fwdrep = $update['message']['reply_to_message']['forward_from']['id'];
$mensagemID = $update['message']['reply_to_message']['message_id'];
$memb = $update["message"]["message_id"];
$type = $update["message"]["chat"]["type"];

if($message == "/start" && $type != "supergroup"){
sendmark($chatId, "اهلا بك عزيزي ☘" . "\n[تابع جديدنا💡](https://t.me/set_web)")	;
}

if ($message && $chatId != $group && $type != "supergroup"){
	forwardMessage($group ,$chatId, $memb);
}

if ($message && $fwdrep){
sendMessage($fwdrep, " $message " );	
}

    function forwardMessage ($group, $chatId, $memb){
		   $url = $GLOBALS[website].'/forwardMessage?chat_id='.$group.'&from_chat_id='.$chatId.'&message_id='.$memb;
			file_get_contents($url);
		}


	function sendMessage ($chatId, $message){
		

		$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
		file_get_contents($url);
		}
   function sendmark ($chatId, $message){
   $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=Markdown&text='.urlencode($message) . '&disable_web_page_preview=true';
   file_get_contents($url);
     }
		?>
		
