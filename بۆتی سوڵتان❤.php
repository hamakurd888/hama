<?php
ob_start();
$Marcus = "1912710065:AAE_l5A9qlv0B1uk6jzJLInbsIWgia3Mbnk";
define('API_KEY',$Marcus);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
$dev_a = '1912710065:AAE_l5A9qlv0B1uk6jzJLInbsIWgia3Mbnk';
define('API_KEY',$dev_a);
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
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$dev_i = $message->chat->id;
$text = $message->text; 
$id = $message->from->id;
$admin = 1286382590;
$ADMIN = 1286382590;
$time = time() + (979 * 11 + 1 + 30);
$name = $message->from->first_name;
$data = $update->callback_query->data;
$message = $update->message;
$text = $message->text;
$name = $message->from->first_name;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$fwd = $update->message->forward_from_chat;
$r_n = $update->message->reply_to_message->from->first_name;
$r_u = $update->message->reply_to_message->from->username; 
$r_i = $update->message->reply_to_message->from->id;
$re = $update->message->reply_to_message;
$message_id = $update->message->reply_to_message->message_id;
$sticker = $update->message->sticker;
$video = $update->message->video;
$voice = $update->message->voice;
$audio = $update->message->audio;
$gif = $update->message->gif;
$hama = "HAMA_HACKER";





# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
if($text == "/start"){$from_id = $message->from->id;
$php_i = "shv6n";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$php_i&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$dev_i,
'text'=>"بۆ چاڵاک بوونی بۆتەکە ❤️🌸
کەناڵی بۆتەکان جۆین بکە 📃🌹
", 
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"کەناڵی بۆتەکان 📮", 'url'=>"https://telegram.me/HAMA_HACK_ANDROID"]]    
]    
])
]);return false;}
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>" ⚤︎┇بەخێربێیت $name
⚤︎┇من ناوم سوڵتانە ❤
⚤︎┇من داڕێژراوم بۆ پاراستنی گروپەکان
⚤︎┇تەنیا بمکە ناو گروپەکەوە
⚤︎┇دواتر بمکە بەئەدمین و /add بنێرە بۆم
⚤︎┇دروستکەری بۆت @HAM4KURD  .️", 
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"کەناڵ🗃",'url'=>"https://telegram.me/HAMA_HACK_ANDROID"]],
            [['text'=>"زیادی گروپچاتم بک",'url'=>"https://t.me/SULTAN_ROBOT_BOT?startgroup=new"]],
            
                  
            ]
        ])
        ]);
}
if($text =="/yasakan@SULTAN_ROBOT_BOT" or $text=="/yasakan"){
$php_i = "shv6n";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$php_i&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$dev_i,
'text'=>"
کەناڵی بۆتەکان جۆین بکە 
بۆ ئەوەی بۆتی جوانتر ببین 💯
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"کەناڵی بۆتەکان 📮", 'url'=>"https://telegram.me/HAMA_SHOTER"]]    
]    
])
]);return false;}
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"سڵاو دڵم $name
مـن بۆتی پاراستی گروپچاتم و لەهەمان کاتیشدا قسەخۆشی گروپچاتەکانم😋


1 فۆرواردکردنی پۆست بۆناو گروپ قەدەغەیە
2 وێنەو شتی نەشیاو قەدەغەیە 🔞
3 ڕیکلام کردن لەناو گروپچات قەدەغەیە😒
4 قسەی نەشیاو ڕێک باند 🕯😰
5 لینکی کەناڵ و شت قەدەغەیە
6 مونەرمەکان بۆدەرەوە😏😎
", 
    'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}











$MEMO = explode('بڵێ',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
]);
}

# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
$u = explode("\n",file_get_contents("data/dev_i.txt"));
$c = count($u)-1;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("data/dev_i.txt", $chat_id."\n",FILE_APPEND);
  }
  if ($text == '/yasakan' and $chat_id == $admin) {
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>" سڵاو دڵم 
مـن بۆتی پاراستی گروپچاتم و لەهەمان کاتیشدا قسەخۆشی گروپچاتەکانم😋


1 فۆرواردکردنی پۆست بۆناو گروپ قەدەغەیە
2 وێنەو شتی نەشیاو قەدەغەیە 🔞
3 ڕیکلام کردن لەناو گروپچات قەدەغەیە😒
4 قسەی نەشیاو ڕێک باند 🕯😰
5 لینکی کەناڵ و شت قەدەغەیە
6 مونەرمەکان بۆدەرەوە😏😎 "
    ]);
  }
  
  


  #ايبي عمر رويل
if ($text != '/start' ){
$get = file_get_contents("https://omarrealxp.000webhostapp.com/pp.php?text=$text");
  bot('sendMessage',[
    'chat_id'=>$dev_i,
    'text'=>"$get",
    'parse_mode'=>'markdown'
    ]);}
  
  
  
  
  if($re and $text =="لادانی ئاگاداری"){
 bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$r_i,
'can_send_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[$r_n](t.me/$r_u)
*ئاگاداری لەسەرت لادرا*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}if($re and $text=="ئاگاداری"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
[$r_n](t.me/$r_u)
*چاتت راگیرا بەهۆی سەرپێچی کردن لەگرووپ*",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
'parse_mode'=>"MarkDown",
]);
bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$r_i
]);
}




  

# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء



if($text == "/add"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"سڵاوو  $name 
من بەکارخرام ❤ لەم گروپچاتە
بۆبینینی فەرمانەکان /help دابگرە🥰

تکایە دڵنیابەرەوە لەوەی کە منت کردۆتە ئەدمینی فوول 💚🖤 

",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($text =="/help@SULTAN_ROBOT_BOT" or $text=="/help"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"
ئەو فەرمانانەی کە لەبۆتی سوڵتاندا هەیە❤💜

1 - قسەخۆشی گروپچاتە 😘😉
2 - بنوسە گۆرانی بۆ خۆشترین گۆرانی😊❤
3 - بەخێرهاتنی ئەندامان دەکات
4 - ڕێگرە لەهێنانی فۆروارد
5 - ڕێگرە لە هینانی لینک
6 - بنوسە ms بۆ دیاریکردنی ڕێژەی بەهێزی خەتەکەت
7 - بنوسە <code>وێنەکەم</code> بۆ نیشاندانی وێنەی خۆت
8 - بۆبینینی یاساکانی گروپ /yasakan دابگرە 
9 - بۆبینینی ئایدی خۆت ئەمە دابگرە /id 
10 بۆ ئاگەدارکردنەوەی ئەندام بەڕیپلەی بنوسە  <code>ئاگاداری</code>
10 - دروستکەری بۆت @HAM4KURD
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "Gyan"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"gyanu xosh ❤   $name️",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($text == "تب"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"ئێ ئێ دەچیە تایبەتی؟ ئێستا بەسەرۆک گروپ دەڵێم باندت بکات 🤌🏿🙂",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "حەمە"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"ئەوە حەمەیە @HAM4KURD",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($text == "hama"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"ئەوە حەمەیە @HAM4KURD",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "😂"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"پێبکەنە پێبکەنە
هەموو بەزەردەخەنە",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😂😒"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"hazale❤️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😂😂"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"love U pekanen🥺😂😻😂🥺",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😂🥺"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"saqau Bm🥺❤️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Gyana"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"gyan hanasakam,🐣❤️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "gyan"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"gyanu xosh 😻",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "gyana"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"bare bare 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}




 if($text == "🙂"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>" lew naya ama bas la xom juana🙂😂", 
'reply_to_message_id'=>$message->message_id, 
]);
}
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
if($text == "Hi"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"Hi la Hanasokam🙈😜" ,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "dllm" ){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"گیان دڵەکەم چۆن یارمەتیو بەم" ,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "duck"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"ئەمەتە دەکی شەکباب🐣🌻
@SHVANIT 🐣🙈" ,

'reply_to_message_id'=>$message->message_id, 
]);
}
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
if($text == "Choni"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"خراپم🥺
کەس من زیاد ناکا بۆ گروپەکەی💔", 
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "Slaw"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"سڵاو هەناسەکەم،🌸😻
بەخێربێیت😁🙈
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "دەستخۆش"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"دەستخۆشی ناوێت هەناسەکەم
❤❤
",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "بژی"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"خۆت زیاتر بژی هەناسەکەم،🌸😻

",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "/start@SULTAN_ROBOT_BOT"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"هاا😂 چتەوێت ئەگەر نازانیت دەست بنێ بە /add ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "من؟"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"نا باوکم 😒💔 ",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "باشە"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>" ❤❤❤❤❤❤❤
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "بیژی"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"عەیبە ئەو قسانەی مەکە
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "خۆت بیژی"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەسە 😒
",
'reply_to_message_id'=>$message->message_id, 
]);
}
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
if($text == "Xoshmdauit"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"Mnish xoshmdauit Sheta gian❤️🌻",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Kanall"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"ئەوەتە جۆینی بکە💕 
@HAMA_SHOTER
",
'reply_to_message_id'=>$message->message_id, 
]);
}
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
if($text =="lacho"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"To hamu shteki mnet waz nayanm😹💔",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😒"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"baba baba bchkolla😂" ,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "Bo"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"boya🥺😂" ,
'reply_to_message_id'=>$message->message_id, 
]);
} 

if($text == "Chone"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"Atu bashe.! 🥀😹" ,
'reply_to_message_id'=>$message->message_id, 
]);
} 
if($text == "Ardor"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"Waze le benn kaplle xoma 😻🖤!" ,
'reply_to_message_id'=>$message->message_id, 
]);
} 
if($text == "Xallo"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"La bra zeatra bo ardor wazean le benn🐻🖤" ,
'reply_to_message_id'=>$message->message_id, 
]);
} 
if($text =="Aa") {
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"kay bema dawat.! 🥀😹" ,
'reply_to_message_id'=>$message->message_id, 
]);
} 

if($text == "Jawm nia"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"bo Mallakam ☹️💔" ,
'reply_to_message_id'=>$message->message_id, 
]);
} 
if($text == "سڵاو"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"سڵاو لەتۆش    $nname",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "چۆنن"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"ئێمە باشین تۆچۆنیت  $nname",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "منیش باشم"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"یاخوا هەر باشبیت    $nname",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "چی هەیە"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"برنج و فاسۆڵیا  $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شازە"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"خۆوو شازی  $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "سینگڵم"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"خوا بت داتێ 😞 $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💔"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"کێ دڵی شکاندووی   $name",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "سوڵتان"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەڵێ چیت دەوێت؟😐",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "Sultan"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەڵێ چیت دەوێت؟😐",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "sultan"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەڵێ چیت دەوێت؟😐",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "هاک"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"نیمانە🙁   $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "پرسیارێک"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"فەرموو   $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "دڵم"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"موو نەرم لەخۆت   $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "دڵەکەم"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"وس😅   $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تۆحەقت چیە"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"چۆن حەقم نیە   $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بۆت"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"هـا چیت ئەوێت؟  $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if(preg_match('/^(.*)Qn|qn(.*)|(.*)T.me(.*)|(.*)#(.*)|t.me(.*)|(.*)quz|(.*)Quz|(.*)Forward|(.*)qwz|(.*)Qwz|(.*)ker|(.*)Ker|(.*)mamk(.*)|(.*)Mamk|(. *)قوز /',$text)  ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} 



$msgid = $message->message_id;
$reply = $message->reply_to_message; 
$reply_id = $reply->message_id;
  
if($reply and $text == "/del"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$reply_id
]);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$msgid
]);
}



if($rep && $text=="/pin" or $text=="هەڵواسین"){
        bot('pinChatMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$mid
        ]);
    }



if($text =="کات"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🇮🇶 عێڕاق \n" . "💤  ساڵ : " . date("Y") . "\n" . "Ⓜ️  مانگ : " . date("n") . "\n" . "🛂  ڕۆژ :" . date("j") . "\n" . "⚠️ کاتژمێر :" . date('g', $time) . "\n" . "🌀 خولەک :" . date('i', $time) . "\n" . " 💯",
'reply_to_message_id'=>$message->message_id
]);
}




if($text == "هیچ"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەخوا بیژیت🤣",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "hich"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەخوا بیژیت🤣",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "Hich"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەخوا بیژیت🤣",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "hech"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەخوا بیژیت🤣",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "Hech"){
bot('sendMessage',[
'chat_id'=>$dev_i, 
'text'=>"بەخوا بیژیت🤣",
'reply_to_message_id'=>$message->message_id, 
]);
}
$new_member = $update->message->new_chat_member; 
if($new_member){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"• بەخێربێیت بۆگروپچاتەکەمان
هیوادارین کاتێکی خۆش بەسەر بەریت❤     😻🤞🏿",
 reply_to_message_id =>$message->message_id,
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[
[ 'text' =>"• $name  ✔️", 'url' =>"https://t.me/HAMA_HACK_ANDROID"]
]
              ]
        ])
  ]);
}
if($left){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$message->message_id, 
'text'=>"بەخوای کەسێکی خوێڕی بوو  $name 😹🙌🏿", 
 reply_to_message_id =>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"  • $name  ✔️",'url'=>"https://t.me/HAMA_HACK_ANDROID"] 
]
]
])
]);
}
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
if($message->reply_to_message->from->id and $text == 'Dllakam' or $text == 'Hanasa' or $text == 'Muah' or $text == 'Sp' or $text == 'Xwanaka' and $id != 612393384){
$xyz = array('بۆ وات وت 😒', 
'خوش ولد ئەمە وانیە وەڵا 💋🙄',
'یاری بکەین 🙄😐',
'منالە ژیکەڵە 😶🙊',
'ماچم کە  😻',
'منافەسەت نیە لە موو نەرمی 😂🤷🏼‍♀️',
'دێی برۆین ',
'کوردە عەیاتەکەیە 🤓❤️',
'مونەرم خۆش وەلد ☹️',
'بەبا بەبا بچکۆڵە 🐣 ',
'بە ملی شکاوی 🙄😒',
'دە بەسە ماڵ ئاوا بێت مێشکوو بردم موو نەرم😂🤷🏼‍♀️',
'خۆش وەلەد 🤓',);
$reply_xyz = array_rand($xyz, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$xyz[$reply_xyz],
'reply_to_message_id'=>$message->message_id
]);
} 
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء

if($message->reply_to_message->from->id and $text == 'Xalki' or $text == 'Dllm' or $text == 'tell' or $text == '🤤💔' or $text == 'Bash' or $text =='🥺💔' or $text == 'kwa'and $id != 612393384 ){
$zyx = array('ژیانی ئەمرۆم ئەفرۆشم🙊🙄',
'میکیاج ئەکەی 😌',
'تەداخول. مەکە ئەمە شەری حایلیە😔',
'نازو مەکری کجه کوشتمی 😐💔',
'منالێکی خۆشی بۆ ئەوەنە لووت بەرزی 😒',
'خیانەتت لێ کردم😔',
'ئۆۆۆۆف خۆشمدەوێی 😍😍',
'دە تۆ پیاو بە ئایفۆن 12م بۆ بکرە  😶
زۆر دەمێکە حەژم. لێیەتی😣',
'برادەرایەتی هەموو شتێکە 😍😌',
'خۆم. ئەکوژم😥',
'خەلکی رانیەم ئەلێی دەبیە کەپلم 🙄🤐',
'من بووم. بە 6 سال🤧🤕',
'یاریم دەکرد🙁',
'بله خەمبار لە کوێی ؟ 😕😒',
'رقم لێتە لاچۆ🙌🏼',
'زۆر بێتاقەتم. کەس زیادم. ناکا بۆ گروپەکەی💔🥺',);
$reply_zyx = array_rand($zyx, 1);
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$zyx[$reply_zyx],
'reply_to_message_id'=>$message->message_id
]);
}
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
$voice = array('ئەلێی گوێم لەو سەوتە ناسکە بوە 😂',);
$reply_voice = array_rand($voice, 1);
if($message->voice){



bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$voice[$reply_voice],
'reply_to_message_id'=>$message->message_id
]);
}
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
$forward = array(' تکات لێ دەکەم فۆروارد مەنێرە بۆگروپچات❤😩',);
$reply_forward = array_rand($forward, 1);
if($message->forward){
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$forward[$reply_forward],
'reply_to_message_id'=>$message->message_id
]);
} 
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء

    


# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء
$forward = array(' تکات لێ دەکەم فۆروارد مەنێرە بۆگروپچات❤😩',);
$reply_forward = array_rand($forward, 1);
if($message->forward){
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$forward[$reply_forward],
'reply_to_message_id'=>$message->message_id
] ) ;
} 
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء



if($message->left_chat_member){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'text'=>$left[$reply_left],
'reply_to_message_id'=>$message->message_id
]);
} 
$link = array('زوو ئەو لینکەی بسڕەوە تاباندم نەکردووی 😡',) ;
$reply_link = array_rand($link, 1);

if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) and $message->chat->type == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$link[$reply_link],
'reply_to_message_id'=>$message->message_id
]);
}
# Dev:- @dev_a or @dev_i    ##  ch :- @php_i #
# للــــ هدوووووووووء



$T4TTTT = 1286382590; //ايديك
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt");
$SAIED1= file_get_contents("SAIED1.txt");
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

$SAIED9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED11);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED11);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'text'=>'- جۆینی کەناڵی بۆت بکە❤ 🤖".

'.$SAIED0.'
'.$SAIED1,
]);return false;}
if($SAIED17 == "ئەدمین" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- سڵاو سەرۆک 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- جۆینکردنی کەناڵ 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- دانانی کەناڵ1 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- سڕینەوەی کەناڵ 1 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- جۆینکردنی کەناڵ 📡2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- دانانی کەناڵ2 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- سڕینەوەی کەناڵ 2 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- بینینی ئەو کەناڵانەی زیادت کردوە 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- بـەشی ناردنی نامە☟ 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- ناردنی نامە بەفۆروارد ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- ناردنی نامە 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- ڕێژەی بەژداربوان 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- هاتنە ژورەوە بۆبۆت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- داگرساندن 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- کوژاندنەوەی 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- هاتنەوەی نامە 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- داگرساندن 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- کوژاندنەوەی 🔃❎".' ,'callback_data'=>"SAIED12"]],
[['text'=>'- پۆست پین 🔃".' ,'callback_data'=>"PIN"]],
   ] 
   ])
]);
}
if($SAIED19 == "ئەدمین" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
"text"=>'- سڵاو سەرۆک 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- جۆینکردنی کەناڵ 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- دانانی کەناڵ1 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- سڕینەوەی کەناڵ 1 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- جۆینکردنی کەناڵ 📡2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- دانانی کەناڵ2 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- سڕینەوەی کەناڵ 2 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- بینینی ئەو کەناڵانەی زیادت کردوە 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- بـەشی ناردنی نامە☟ 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- ناردنی نامە بەفۆروارد ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- ناردنی نامە 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- ڕێژەی بەژداربوان 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- هاتنە ژورەوە بۆبۆت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- داگرساندن 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- کوژاندنەوەی 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- هاتنەوەی نامە 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- داگرساندن 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- کوژاندنەوەی 🔃❎".' ,'callback_data'=>"SAIED12"]],
[['text'=>'- پۆست پین 🔃".' ,'callback_data'=>"PIN"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED0"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- ئێستا یوزەری کەناڵت بنێرە بەم شێوەیە @HAMA_HACKER Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ❌".' ,'callback_data'=>"ئەدمین"]],
]])
]);
file_put_contents("SAIED.txt","SAIED0");
}
if($SAIED17 and $SAIED == "SAIED0" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- کەناڵەکەت زیادکرا ✅".

-  تکایە بۆت بکە بەئەدمین لەکەناڵت 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
file_put_contents("SAIED0.txt","$SAIED17");
unlink("SAIED.txt");
}

if($SAIED19 == "SAIED1"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- کەناڵ سڕایەوە ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED0.txt");
}
if($SAIED19 == "SAIED2"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- ئێستا یوزەری کەناڵت بنێرە بەم شێوەیە @HAMA_HACKER ".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ❌".' ,'callback_data'=>"ئەدمین"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($SAIED17 and $SAIED == "SAIED1" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- کەناڵەکەت زیادبوو ✅".

- تکایە بۆت بکە بەئەدمین لەکەناڵەکەت❤ 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
file_put_contents("SAIED1.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED3"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- کەناڵ سڕایەوە ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED1.txt");
}
if($SAIED19 == "SAIED4"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- ئەو کەناڵانەی زیادکراون☟☟ 📜".

- کەناڵی یەکەم '.$SAIED0.' 📡".

- کەناڵی دووەم '.$SAIED1.' 📢".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- ئێستا پۆستێک فۆروارد بکە بامنیش بڵاوی بکەمەوە ↪️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ❌".' ,'callback_data'=>"ئەدمین"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- فۆڕواردەکەت پۆستکرا ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
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
'text'=>'- ئێستا نامەکەت بنێرە با بڵاوی بکەمەوە 📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- بڵاوکرایەوە❤ ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
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
'text'=>'- ڕێژەی ئەندامانی بۆت  '.$SAIED3.' 👥".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- هاتنەژورەوە بۆبۆت هەڵکرا 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>'- نەفەری نوێ هاتە ناو بۆتەوە 🚶‍♂".

- ناوی '.$SAIED15.' 🔠".

- یوزەرەکەی '.$SAIED16.' ️".

- ئایدیەکەی '.$SAIED11.' 🆔".',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- هاتنە ژورەوەی بۆت کوژایەوە 🚸❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- هاتنەوەی نامە هەڵبوو 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}



if($text == "ms" or $text == "ms"){
  $load = sys_getloadavg();
  $mem = memory_get_usage();
  $ver = phpversion();  
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
• ᴘɪɴɢ : <code>$load[0]</code>
• ᴍᴇᴍ : <code>$mem KB</code>
• ᴘʜᴘ ᴠᴇʀ : <code>$ver</code>
",
 'parse_mode'=>"HTML",'reply_to_message_id'=>$message_id,
  ]); 
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


if($text =="بۆت دەرچۆ لەگرووپ" &&$from_id==$admin ){  
$send = file_get_contents("data/add.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/add.json', $send);  
bot('sendMessage',[  
'chat_id'=>$chat_id,  
'text'=>"📮┇من دەرکرام ~⪼ لەلایەن ئەدمین
🛠┇بەهۆی ئەدمینی ڕەسمی 
چەناڵمان @HAMA_HACK_ANDROID ",  
]);   
bot('leaveChat',[  
'chat_id'=>$chat_id,  
]);  
}



if($text =="/ID@SULTAN_ROBOT_BOT" or $text=="/ID"){
bot('sendmessage' , [
'chat_id' => $chat_id,
'text' => "
🎟 ¦ ئایدیەکەت •⊱ { $from_id } ⊰•
🤷‍♂️ ¦ ناوەکەت •⊱ { $name } ⊰•
",
'reply_to_message_id'=>$message->message_id,
]);}



if($text =="/id@SULTAN_ROBOT_BOT" or $text=="/id"){
bot('sendmessage' , [
'chat_id' => $chat_id,
'text' => "
🎟 ¦ ئایدیەکەت •⊱ { $from_id } ⊰•
🤷‍♂️ ¦ ناوەکەت •⊱ { $name } ⊰•
",
'reply_to_message_id'=>$message->message_id,
]);}






$stvoice = $message->voice_chat_started;
$envoice = $message->voice_chat_ended;
$invoice = $message->voice_chat_participants_invited;
if($stvoice){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"⌯  ئەم بەڕێزە  : [$name](tg://user?id=$from_id)
ڤۆیسی دەنگی کردەووە ",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
}
if($envoice){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"⌯ ئەم بەڕێزە : [$name](tg://user?id=$from_id)
ڤۆیسی دەنگی داخست  ",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
}

if($invoice){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"⌯ ئەم بەڕێزە : [$name](tg://user?id=$from_id)
بەژداری کرد لە ڤۆیسی دەنگی ❤  ",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
}



if($text == "وێنەکەم"){
$user = $message->from->username;
$first_name = $message->from->first_name;
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"t.me/$user",
'caption'=>"($first_name )  🎵فەرموو بەڕێزم ئەوەش وێنەکەت  ",
]);
}




if(preg_match('/(گۆرانی)/i',$text)and $text != "/start" and $text != "/admin"){
      bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"• چاوەڕێبە . . . 💚",
  ]);
bot("sendMediaGroup",[
            "chat_id"=>$chat_id,

            "media"=>json_encode([
                [ "type"=>"audio", "media" => "https://t.me/BANGUSHT7/11"],
                [ "type"=>"audio", "media" => "https://t.me/BANGUSHT7/12"],
                [ "type"=>"audio", "media" => "https://t.me/BANGUSHT7/13"],
                [ "type"=>"audio", "media" => "https://t.me/BANGUSHT7/14"],
          
           ]),

        ]);
}


$new = json_decode(file_get_contents('new.json'),true);
if($message->new_chat_member){
$new['new'][$chat_id][$from_id] = ($new['new'][$chat_id][$from_id]+1);
file_put_contents('new.json', json_encode($new));
}
if($new['new'][$chat_id][$from_id] == null){
$new = 0;
}else{
$new = $new['new'][$chat_id][$from_id];
}
if($text == 'add' or $text =='Add'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💢┇ناو »  [$name](tg://user?id=$from_id)
📊| ئەندامانەی زیادت کردووە بۆ گرووپ » $new ",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}

if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- هاتنەوەی نامە کوژایەوە 🔃❎".',

 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- گەڕانەوە ↩️".' ,'callback_data'=>"ئەدمین"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}




 