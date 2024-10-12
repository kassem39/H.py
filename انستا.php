<?php
ob_start();
define('API_KEY','6634940523:AAGwDe9npJherMdMJ5BhDyQgCLaZ0cpj2G4');
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);

function bot($method, $datas = [])
  {
  $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch))
    {
    var_dump(curl_error($ch));
    }
    else
    {
    return json_decode($res);
    }
  }

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$sudo = file_get_contents("ids.txt");
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$chs = file_get_contents('ch.txt');
$buy = file_get_contents("buy.txt");
$admin = 5625666546; // ايديك
$username = $update->message->from->username;
$reply = $message->reply_to_message->message_id;
$list = file_get_contents("blocklist.txt");
$rep = $message->reply_to_message->forward_from; 
$id = $rep->id; 
$Ch = "YYYJR"; // معرف قناتك بدون @
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$Ch&user_id=".$from_id);
#~~~~~@ABoWaTan~~~~~#
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
    'text'=>"
▫️ يجب عليك الإشتراك في قناة البوت أولاً ⚜️؛
▪️ @YYYJR 
◼️ إشترك في القناة ثم أرسل /start ، 📛",
       'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔘 اضغط هنا للاشتراك",'url'=>'t.me/YYYJR']],
]])
]);return false;}

$T4TTTT = $admin; 
$SAIED = file_get_contents("SAIED.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
$ebu = explode("\n",$list);
if(in_array($from_id,$ebu)){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"▪️ انت محظور من قبل صاحب البوت ،
▫️ لا يمكنك استخدام البوت ، 🚫
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/joinchat/AAAAAFJLEYCbh9gBk0AGug) ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
      ]);
    
}

if ($message->reply_to_message && $text== "حظر") {
			$myfile2 = fopen("blocklist.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$id\n");
			fclose($myfile2);
			bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🛠┇العضو : `$id` 
🕹┇تم حظره بنجاح ، 📛",
 'parse_mode'=>"MarkDown",
]);
			bot('sendmessage',[
'chat_id'=>$id,
'text'=>"

🚀┇ عزيزي تم حظرك من البوت 
📢┇تابع قناة البوت ؛ @YYYJR",
]);
		}
		
		if($message->reply_to_message && $text=="الغاء الحظر"){
			$newlist = str_replace($id,"",$list);
			file_put_contents("blocklist.txt",$newlist);
			bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🛠┇العضو : `$id` 
🕹┇تم الغاء حظره بنجاح ، ☑",
 'parse_mode'=>"MarkDown",
]);
			bot('sendmessage',[
'chat_id'=>$id,
'text'=>"
🚀┇ عزيزي تم الغاء حظرك من البوت 
📢┇تابع قناة البوت ؛ @YYYJR",
]);
}

function wr($type,$text,$id){
  $str = str_split(strtolower($text));
  switch ($type) {
      case 's':
      $url = 'https://bl-saadmohammed.000webhostapp.com/sz/';
      break;
      case 'n':
      $url = 'https://bl-saadmohammed.000webhostapp.com/nj3/';
      break;      
      case 'k':
      $url = 'https://bl-saadmohammed.000webhostapp.com/ke3/';
      break;
      case 'hl1':
      $url = 'https://bl-saadmohammed.000webhostapp.com/hl1o/';
      break;
      case 'hl2':
      $url = 'https://bl-saadmohammed.000webhostapp.com/hl2o/';
      break;
      case 'w1':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w1ae/';
      break;
      case 'w2':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w2ae/';
      break;
      case 'w3':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w3ae/';
      break;
      case 'sm':
      $url = 'https://bl-saadmohammed.000webhostapp.com/smv/';
      break;
      case 'ba':
      $url = 'https://bl-saadmohammed.000webhostapp.com/banz/';
      break;
      case 'kt':
      $url = 'https://bl-saadmohammed.000webhostapp.com/kto0/';
      break;
      case 'd3':
      $url = 'https://bl-saadmohammed.000webhostapp.com/d3zh/';
      break;
      case 'to':
      $url = 'https://bl-saadmohammed.000webhostapp.com/to/';
      break;
      case 'nj':
      $url = 'https://bl-saadmohammed.000webhostapp.com/nj0/';
      break;
      case 'hd':
      $url = 'https://bl-saadmohammed.000webhostapp.com/hdk1/';
      break;
      case 'zj':
      $url = 'https://bl-saadmohammed.000webhostapp.com/zjp/';
      break;
      case 'nf':
      $url = 'https://bl-saadmohammed.000webhostapp.com/nfk1/';
      break;
      case 'w4':
      $url = 'https://bl-saadmohammed.000webhostapp.com/w4ae/';
      break;
  
  }
    $i = 0;
    foreach($str as $char){$im[] = $url."".$char.'.jpg';}
    $q = getimagesize($im[0]);
    $num = $q[0]; 
    
    $img = imagecreatetruecolor($num * count($im), $q[1]);
   while ($i < count($im)) {
      $num1 = $num * $i;
      $cur = imagecreatefromjpeg($im[$i]);
      imagecopy($img, $cur, $num1, 0, 0, 0, getimagesize($im[0])[0], getimagesize($im[0])[1]);
      $i++;
    }
  imagejpeg($img,$id.'.jpg');
}

if ($text == '/start' && $chat_id != $list){
  bot('sendMessage', [
  'chat_id' => $chat_id, 
  'text' => "- اهلا وسهلا بك ؛ [$name](tg://user?id=$chat_id)

• في بوت الكتابة على الصور ، 📸
• يحتوي البوت على اكثر من 30 نوع من الصور ، 
• كل ماعليك ارسال اسمك باللغة الانكليزيةه واختيار نوع من انواع الصور وسوف يتم تصميم اسمك من قبل البوت ، 

• ممنوع ارسال الرموز والمسافات والسمايلات والاحرف العربية ، ⚠️
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/joinchat/AAAAAFJLEYCbh9gBk0AGug)",
 'parse_mode' => "MarkDown", 
'disable_web_page_preview' => true,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"- ضغط هنا وتابع جديدنا ، 📢", 'url' => "https://t.me/joinchat/AAAAAFJLEYCbh9gBk0AGug"]], 
[['text' => "- لشراء البوت ، 💵", 'url' => "https://t.me/ABoTaim"]],
]])
]);
}

if ($text != '/start' && $text != '/admin' && $text != '_' && $text != '.' && $text != '/' && $text != '-' && $text != '@' && $text != '/u' && $text != '/m' && $chat_id != $list) {
	if(preg_match('/([a-z])|([A-Z])/i',$text)){
		bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
- حسنآ عزيزي الان اختر نوع الكتابة التي تريد تصميمها ، ☑
- الاسم ، `$text` 💛
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/joinchat/AAAAAFJLEYCbh9gBk0AGug)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
      'reply_markup' => json_encode([
 'inline_keyboard' => [
[['text'=>'• بالورد والورق 2 ، 🌸','callback_data'=>'w4-'.$text],['text'=>'• بالنفاخ ، 🎈','callback_data'=>'nf-'.$text]],
      [['text'=>'• بالزجاج ، 🚂','callback_data'=>'zj-'.$text],['text'=>'• بالحديد ، 🛢','callback_data'=>'hd-'.$text]],
      [['text'=>'• بالنجوم ، 🌙','callback_data'=>'nj-'.$text],['text'=>'• بالضوء ، 🔦','callback_data'=>'to-'.$text]],
      [['text'=>'• بالـ 3D ، 🌍','callback_data'=>'d3-'.$text],['text'=>'• بالكتاب ، 📓','callback_data'=>'kt-'.$text]],
      [['text'=>'• بالباندا ، 🐼','callback_data'=>'ba-'.$text],['text'=>'• بالخرز 2 ، 🛸','callback_data'=>'sm-'.$text]],
      [['text'=>'• بالورق والمفاتيح ، 🗝','callback_data'=>'w3-'.$text],['text'=>'• بالورق واللماع ، 🔮','callback_data'=>'w2-'.$text]],
      [['text'=>'• بالورد والورق ، 🎐','callback_data'=>'w1-'.$text],['text'=>'• بالحلقة 3 ، 🏵','callback_data'=>'hl2-'.$text]],
      [['text'=>'• بالحلقة 2 ، 📯','callback_data'=>'hl1-'.$text],['text'=>'• بالكيبورد 2 ، 🌀','callback_data'=>'k-'.$text]],
      [['text'=>'• بالشمع 2 ، 🏜','callback_data'=>'s-'.$text],['text'=>'• بالنار 2 ، 💥','callback_data'=>'n-'.$text]],
[['text'=>"- لشراء البوت ، 💰",'url'=>"T.me/ABoTaim"]],
]]) ]);

} else 
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'- عذرا صديقي ، 😿💔
• ارسل فقط حروف انكليزية ، ☑
• بدون مسافات وعلامات وسمايلات واحرف عربية ، ⚠️'
  ]);
  }
  

$data = explode('-',$data);
if($data[0] and $data[1]){
  wr($data[0],$data[1],$chat_id2);
bot('answercallbackquery', [
			'callback_query_id' => $update->callback_query->id,
			'text' => "- انتظر قليلا جار التصميم ... 💛"
		]);    
		bot('deletemessage',[
  'chat_id'=>$chat_id2,
  'message_id'=>$message_id2  
  ]);
    $dats = getimagesize("$chat_id2.jpg");
    $dest = imagecreatefromjpeg("$chat_id2.jpg");
  $src = imagecreatetruecolor($dats[0] ,$dats[1] + 1920);
  imagefill($src, 0, 0, imagecolorallocate($src,255,255,255));
  imagecopy($src, $dest, 0, 1000, 0, 0 ,$dats[0], $dats[1] );
  imagejpeg($src,"$chat_id2"."1.jpg");
  imagedestroy($src);
  imagedestroy($dest);  
    bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'.jpg'),
       'caption'=>"• تم تصميم الصورة الاولى بدون توسيط ، 🌚🌸'
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
    'reply_markup' => json_encode([
 'inline_keyboard' => [
[['text'=>"- اضغط هنا وتابع جديدنا ، 📢", 'url' => "https://t.me/joinchat/AAAAAFJLEYCbh9gBk0AGug"]], ]])
    ]);
  bot('sendPhoto',[
      'chat_id'=>$chat_id2,
      'photo'=>new CURLFile($chat_id2.'1.jpg'),
       'caption'=>"• تم تصميم الصورة الثانيةه بالتوسيط ، 🌝✨'
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ ",
    'reply_markup' => json_encode([
 'inline_keyboard' => [
[['text'=>"- اضغط هنا وتابع جديدنا ، 📢", 'url' => "https://t.me/joinchat/AAAAAFJLEYCbh9gBk0AGug"]], ]])
    ]); 
  unlink($chat_id2.'1.jpg');
unlink($chat_id2.'.jpg');  
}
if($text and $message->reply_to_message && $text!="/info" && $text!="حظر" && $text!="الغاء الحظر" && $text!="/forward" and !$data ){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
if($SAIED17 == "الاوامر" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>"

- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🛠
——————————————————
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"SAIED5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"SAIED7"]],
[['text'=>"تفعيل التواصل ، 🥁",'callback_data'=>"SAIED9"],['text'=>'• تعطيل التواصل ، 🏈' ,'callback_data'=>"SAIED10"]],
[['text'=>'• تفعيل التوجيه ، 🎨' ,'callback_data'=>"SAIED11"],['text'=>'• تعطيل التوجيه ، 🎯' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
}
if($SAIED19 == "SAIED" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
"text"=>"

- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🛠
——————————————————
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"SAIED5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"SAIED7"]],
[['text'=>'• تفعيل التواصل ، 🥁' ,'callback_data'=>"SAIED9"],['text'=>'• تعطيل التواصل ، 🏈' ,'callback_data'=>"SAIED10"]],
[['text'=>'• تفعيل التوجيه ، 🎨' ,'callback_data'=>"SAIED11"],['text'=>'• تعطيل التوجيه ، 🎯' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}


if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $SAIED3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('forwardMessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $SAIED3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"- عدد مشتركين البوت  [ $SAIED3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$SAIED15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$SAIED16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$SAIED11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $SAIED3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}
