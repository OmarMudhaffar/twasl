<?php
$botToken = "300049013:AAH_MhPC3CyxQUvLF2LR37u3eSbMRa5ZkYE"; // توكن
$website = "https://api.telegram.org/bot".$botToken;
$sudo_id = 325384922;// ايدي المطور
$bot_id = 300049013; // ايدي البوت 
$group = -1001055207438; // ايدي الكروب لاستقبال الرسائل
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
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
$fwd3 = $update["message"]["forward_to"];
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
$reply = $update["message"]["reply_to_message"];
$replay = $update["message"]["reply_to_message"]["from"]["id"];
$replay_user = $update["message"]["reply_to_message"]["from"]["username"];
$user_id = $update['message']['from']['id'];
$text = $update['message']['text'];
$token =$botToken ;
$text = $update['message']['text'];
$mensagemID = $update['message']['reply_to_message']['message_id'];
$chatID = $update['message']['reply_to_message']['chat']['id'];
$fwdrep = $update['message']['reply_to_message']['forward_from']['id'];
$mensagemID = $update['message']['reply_to_message']['message_id'];
$number = str_word_count($message);
$numper = strlen($message);

if($number > 100 && $for != $sudo_id or $numper > 1000 && $for != $sudo_id){
sendMessage($chatId, "لا ❗️ترسل اكثر من 100 كلمة 🗒🔒 " . "\nسيد ❄️ @" . $user);
}

if ($message == "/help"){
	sendMessage($chatId, "اهلا 💡بك عزيزي" . " @" . $user . "\n
	
	كيفية 🗒 استخدام البوت 🤖🍃
	\n\n
	1~ اضف البوت لاي مجموعة وقم بجعله ادمن سوف يبدأ تلقائيا في التحذير 
	\n
	2~ لاضهار الايدي الخاص بك اكتب id/
	\n
	3~ لاضهار ايدي عضو بل قم بل رد عليه بل امر id
	\n
	4~ قم بتحويل رسالة من عضو الى البوت للحصول على معلوماته
	\n
	5~ اكتب الوقت لمعرفة الوقت 
	\n
	6~ اكتب التاريخ لمعرفت التاريخ 
	\n
	7~ ارسل رسالة للبوت سيتم تحوليها الى المطور ليتم الرد عليك 
	\n
	8~ لجعل البوت يكلم العضو قم بل رد على العضو وقم بكتابة كلة + الكلام سيقوم البوت بكتابت ما طلبت
	\n
	9~ اكتب هينة بل رد على شخص لاهانة عضو معين
	\n
	10~ قم بكتاب الامر (عدد الرسائل) لمعرفة هل مجموعتك متفاعلة ام لا 
	\n
	11~ قم بكتابة (me/) لمعرفة موقعك 
	\n\n
	مطور البوت 💡 @Omar_Real
	" 
	);
}
if ($message && $chatId != $group && $type == "private"){
	forwardMessage($group ,$chatId, $memb);
//	sendMessage($chatId, "TEST", $mensagens['message']['message_id'],$mensagemID , true);
}


if ($message && $fwdrep){
sendMessage($fwdrep, " $message " );	
}

if ($message){
sendMessage($for, $fwd3);	
}

$shit = explode(".", $message);



if($text == 'hi'){
	
sendMessage($chatId,"$text_reply");
}
if($text == 'هلو'){
sendMessage($chatId, "Hello");
}


if ($shit[0] == "كلة" && $reply ){
	sendMessage($chatId, "$shit[1] " . "@" . $replay_user);
}


if ($replay && $message == "هينة" && $for == $sudo_id){
	sendMessage($chatId, "دي لك زبالة 🌚😹 " . "@" . $replay_user);
}
if ($replay && $message == "هينة" && $for != $sudo_id){
	sendMessage($chatId, "عذرا ❗️ هاذا الامر لمشرف البوت فقط 👤📩");
}

$matches = explode(".", $message); // Group id and msg / ايدي المجموعة او القناة + الرسالة سيرسلها البووت 
if($message){
sendMessage($matches[0], "$matches[1]");
}

if($fwd2 and $type == "private"){
sendMessage($for, "💡Id : " . $fwd2 . "\n💡user : " . "@" . $user2);	
}

if ($replay && $message == "id"){
sendMessage($chatId, "💡Id : " . $replay . "\n💡User : " . "@" . $replay_user);
}

if ($nm){
sendMessage($chatId, "🔥اهلا عزيزي \n💡تابع @set_web ");
}

if($message == "/me" and $for == $sudo_id && $type == "supergroup"){
sendMessage($chatId, "انت ♦️ مطور البوت 🕴 : " . "@" . $user);
}

elseif($message == "/me" && $type == "private"){
sendMessage($chatId, "عذرا 🍂 هذا الامر في المجموعات فقط 👥❇️");
}

if($message == "/me" and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "انت ♦️ مجرد عضو 👤 : " . "@" . $user);
}

if($location and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 ارسال المواقع 🏝🔒   " . "@" . $user);
}

if($game and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 لعب الالعاب 🕹🔒  : " . "@" . $user);
}

if($song and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 ارسال الاغاني 🎵🔒  : " . "@" . $user);
}

if($message == "نوع المجموعة" && $type == "supergroup"){
sendMessage ($chatId, "نوع 📛 المجموعة 👥 : " . $type); 
}

if($message == "عدد الرسائل" && $memb > 1000 && $type == "supergroup"){
sendMessage ($chatId, "عدد 📈 رسائل المجموعة 👥🔹  : " . $memb . "\nتهانيا 💡 مجموعتك متفاعلة 💯 "); 
}
elseif($message == "عدد الرسائل" && $type == "private"){
	sendMessage($chatId, "عذرا 🍂 هذا الامر في المجموعات فقط 👥❇️");
}

if($message == "عدد الرسائل" && $memb < 1000 && $type == "supergroup"){
sendMessage ($chatId, "عدد 📉 رسائل المجموعة 👥🔹  : " . $memb . "\nللاسف 💎 مجموعتك غير متفاعلة 💭"); 
}


if($dp){
sendMessage($chatId, "تم ✅ ازالة صورة المجموعة 🎑 بواسطت  : " . "@" . $user);
}

if($np){
sendMessage($chatId, "قام 👤 بتغير صورة المجموعة 🎑❕ :  " . "@" . $user);
}

if($nt){
sendMessage($chatId, "قام بتغير ❕اسم المجموعة 👥 : " . "@" . $user);
}

if($ed){
sendMessage($chatId, "لا  تعدل يا خرا " . "@" . $user); // By OmarReal
}

if($gif and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 ارسال الصور المتحركة 🎆🔒 : " . "@" . $user);
}

if($pin and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 عمل التثبيت 📍🔒  " . "@" . $user);
}



if($fwd && !$photo and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 عمل التوجيه 🔄🔒 : " . "@" . $user);
}


if($link and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 ارسال الروابط ⚙🔒 : " . "@" . $user);
}

if($audio and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 ارسال الصوتيات 📣🔒  " . "@" . $user);
}

if($photo and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 ارسال الصور 🎆🔒   " . "@" . $user);
}

if($test and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 ارسال جهات الاتصال 📱🔒  : " . "@" . $user);
}

if ($left){
sendMessage($chatId, "وداعا عزيز 📩" . "@" . $user);
}

if ($sticker and $for != $sudo_id && $type == "supergroup"){
sendMessage($chatId, "ممنوع 🚫 ارسال الملصقات 🔆🔒 : " . "@" . $user); // OmarReal
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
sendMessage($chatId, "🕛 البلد : العراق" . "\n" . "🕛 الساعة : " . date('g', $time) . "\n" . "🕛 الدقيقة : " . date('i', $time));
}

if ($message == "التاريخ"){
sendMessage($chatId, "📆 البلد : العراق \n" . "📆  السنة : " . date("Y") . "\n" . "📆 الشهر : " . date("n") . "\n" . "📆 اليوم :" . date("j"));	
}
date_default_timezone_set("Asia/Baghdad");


	function forwardMessage ($group, $chatId, $memb){
		   $url = $GLOBALS[website].'/forwardMessage?chat_id='.$group.'&from_chat_id='.$chatId.'&message_id='.$memb;
			file_get_contents($url);
		}


	function sendMessage ($chatId, $message){
		

		$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
		file_get_contents($url);
		}

		?>
		