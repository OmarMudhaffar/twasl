<?php
$botToken = "300049013:AAH_MhPC3CyxQUvLF2LR37u3eSbMRa5ZkYE";
$website = "https://api.telegram.org/bot".$botToken;
$sudo_id = 325384922;
$bot_id = 300049013;
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
$fwd2 = $update["message"]["forward_from"]["id"];
$user2 = $update["message"]["forward_from"]["username"];
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
$replay = $update["message"]["reply_to_message"]["from"]["id"];
$replay_user = $update["message"]["reply_to_message"]["from"]["username"];


if ($replay && $message == "هينة" && $for == $sudo_id){
	sendMessage($chatId, "دي لك زبالة 🌚😹 " . "@" . $replay_user);
}

$matches = explode(' ', $message); // Group id and msg / ايدي المجموعة او القناة + الرسالة سيرسلها البووت 
if($message){
sendMessage($matches[0], "$matches[1]");
}

if($fwd2 && $bot_id){
sendMessage($for, "💡Id : " . $fwd2 . "\n💡user : " . "@" . $user2);	
}

if ($replay && $message == "id"){
sendMessage($chatId, "💡Id : " . $replay . "\n💡User : " . "@" . $replay_user);
}

if ($nm){
sendMessage($chatId, "🔥اهلا عزيزي \n💡تابع @set_web ");
}

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
sendMessage($chatId, " لا تلعب العاب يا خرا " . "@" . $user);
}

if($song and $for != $sudo_id){
sendMessage($chatId, "لا ترسل اغاني يا خرا " . "@" . $user);
}

if($message == "نوع المجموعة"){
sendMessage ($chatId, "نوع المجموعة هوة : " . $type); 
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
	sendMessage($chatId, "اهلا بك 💡 بك يا" .  " @" . $user ." " . "اضفني 💭 الى مجموعتك 👥 وسوف اقوم بل تحذير 📵\n✨ قناة السورس @set_web" );
}

// code by omar

if ($message === "/id" && $message != $replay){
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
$time = time() + (979 * 11 + 1 + 30);
if ($message ==  'الوقت' ){
sendMessage($chatId, "🕛 البلد : العراق" . "\n" . "🕛 الساعة : " . date('G', $time) . "\n" . "🕛 الدقيقة : " . date('i', $time));
}

if ($message == "التاريخ"){
sendMessage($chatId, "📆 البلد : العراق \n" . "📆  السنة : " . date("Y") . "\n" . "📆 الشهر : " . date("n") . "\n" . "📆 اليوم :" . date("j"));	
}
date_default_timezone_set("Asia/Baghdad");


	function sendMessage ($chatId, $message){
		
		$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
		file_get_contents($url);
		}
		

		?>
		