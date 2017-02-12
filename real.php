<?php

$botToken = ""; // your bot token
$website = "https://api.telegram.org/bot".$botToken;
$sudo_id = 325384922; // your id
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
// This file By @Omar_Real
$chatId = $update["message"]["chat"]["id"];
$nm = $update["message"]["new_chat_member"];
$type = $update["message"]["chat"]["type"];
$user = $update["message"]["from"]["username"];
$name = $update["message"]["chat"]["title"];
$message = $update["message"]["text"];
$mse = $update["message"]["text"];
$for = $update["message"]["from"]["id"];
$nam = $update["message"]["from"]["first_name"];
$sticker = $update["message"]["sticker"];
$photo = $update["message"]["photo"];
$audio = $update["message"]["voice"];
$link = $update["message"]["[Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee]/"];
$fwd = $update["message"]["forward_from"];
$pin = $update["message"]["pinned_message"];
$gif = $update["message"]["document"];
$ed = $update["message"]["edited_channel_post"];
$nt = $update["message"]["new_chat_title"];
$np = $update["message"]["new_chat_photo"];
$dp = $update["message"]["delete_chat_photo"];
$nm = $update["message"]["new_chat_member"];
$left = $update["message"]["left_chat_member"];
$test = $update["message"]["contact"];
$song = $update["message"]["audio"];
$location = $update["message"]["location"];
$memb = $update["message"]["message_id"];
$game = $update["message"]["game"]; 
$replay = $update["message"]["reply_to_message"];

/*
if($message && $replay){
sendMessage(325384922, "هاذ سوة رد لواحد " . "\n" . "معرفة : " . " @" . $user . "\n" . "رسالتة : " . $message . "\n" . "ايدي الكروب : " . $chatId);
}ط
if($message and $for == 325384922){
sendMessage(-1001098238423, $message);	
}
if($message){
	sendMessage(325384922, $message . " @" . $user);
}

*/


if($message == "/me" and $for == $sudo_id){
sendMessage($chatId, "انت المطور مال اني محح " . "@" . $user);
}

if($message == "/me" and $for != $sudo_id){
sendMessage($chatId, "انت عضو مستفرخ دي " . "@" . $user);
}

if($location and $for != $sudo_id){
sendMessage($chatId, "لا ترسل موقعك يا خرا " . "@" . $user);
}

if($game and $for != $sudo_id){
sendMessage($chatId, " مو وكت العاب هسه ابن لكحاب " . "@" . $user);
}

if($song and $for != $sudo_id){
sendMessage($chatId, "لا ترسل اغاني يا خرا " . "@" . $user);
}

if($message == "هلو"){
sendMessage($chatId,  "هلوات " . $re);
}

if($message == "type"){
sendMessage ($chatId, "🌝 The Type of Group is : " . $type); 
}

if($message == "عدد رسائلي"){
sendMessage ($chatId, "عدد رسائلك هوة : " . $memb); 
}




if($dp and $for != $sudo_id){
sendMessage($chatId, "هاذ الخرا وخر صورت الكروب " . "@" . $user);
}

if($np){
sendMessage($chatId, "تم تغير صورت الكروب بواسطت  " . "@" . $user);
}

if($nt){
sendMessage($chatId, "قام بتغيير الاسم " . "@" . $user);
}

if($ed){
sendMessage($chatId, "لا  تعدل يا خرا " . "@" . $user); // By OmarReal
}

if($gif and $for != $sudo_id){
sendMessage($chatId, "لا ترسل صور متحركة يا خرا " . "@" . $user);
}

if($pin and $for != $sudo_id){
sendMessage($chatId, "لا تثبت يا خرا " . "@" . $user);
}

if($fwd and $for != $sudo_id){
sendMessage($chatId, "لا تسوي توجيه يا خرا " . "@" . $user);
}

if($link and $for != $sudo_id){
sendMessage($chatId, "لا ترسل روابط يا خرا " . "@" . $user);
}

if($audio and $for != $sudo_id){
sendMessage($chatId, "لا ترسل بصمات يا خرا " . "@" . $user);
}

if($photo and $for != $sudo_id){
sendMessage($chatId, "لا ترسل صور يا خرا " . "@" . $user);
}



if($test and $for != $sudo_id){
sendMessage($chatId, "  لا ترسل جهة اتصال يخرا " . "@" . $user);
}


if ($left){
sendMessage($chatId, " هذا لخرا طلع   " . "@" . $user);
}


if ($sticker and $for != $sudo_id){
sendMessage($chatId, "لا ترسل ملصقات يا خرا " . "@" . $user); // OmarReal
}

if ($message == "/start"){
	sendMessage($chatId, "اهلا بك 💡 بك يا" .  " @" . $user ." " . "اضفني 💭 الى مجموعتك 👥 وسوف اقوم بل تحذير 📵");
}

// code by omar

if ($message == "/id"){
	sendMessage ($chatId, "🎈 Gp Id : " . $chatId 
	. "\n" . "🎈 User : " 
	. "@"  . $user 
	. "\n" 
	. "🎈 Gp name : " . $name
	
	. "\n" . "🎈 Msg text : " . $mse
	. "\n" . "🎈 Your Id : " . $for
	. "\n" . "🎈 Msg Number : " . $memb
	. "\n" . "🎈 Type : " . $type
	. "\n" . "🎈 Your Name : " . $nam
	);
}

// This File By @Omar_Real
/*
if ($message == "/id"){
	sendMessage($chatId, "اهلا 👋 يا @" . $user . "\n" . "لقدم تم ارسال 📩 طلبك في الخاص 💡\n تفقد الخاص ارسل 📪 رسالة للبوت اذا لم تتلقى شيئا 💸");
}
*/

		if ($message ==  '/date' ){
			sendMessage($chatId, date("📆 y-m-d \n ⏱ h:i:s"));
	
		
	}
	function sendMessage ($chatId, $message){
		
		$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
		file_get_contents($url);
		}
		
		?>
		
