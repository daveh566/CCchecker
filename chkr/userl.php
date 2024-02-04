<?php 
if ((strpos($message, "/rip") === 0)||(strpos($message, "!rip") === 0)||(strpos($message, ".rip") === 0)){

  if($role == "OWNER")
 
  {
$message = substr($message,5);
    $userid = explode(";",$message);
    $userid = clean($userid);
    $file = file_get_contents("./func/ips.txt");
    $lines = explode("\n",$file);
    foreach($lines as $line)
      {
        $found = 0;
        $userid2 = substr($line,0,11);
        if($userid == $userid2)
        {
          $found = 1;
          $content = explode("|",$line);
          $content = "$content[3]|";
                  $contents = file_get_contents("./func/ips.txt");
$contents = str_replace($content, '', $contents);
file_put_contents($dir, $contents);
        }
      }
if($found == 0)
 sendMessage($chatId,urlencode("
 𝗨𝗦𝗘𝗥 𝗡𝗢𝗧 𝗙𝗢𝗨𝗡𝗗 ❌
 "),0);
else 
{
  sendMessage($chatId,urlencode("𝗜𝗣 𝗥𝗘𝗠𝗢𝗩𝗘𝗗 ❌"),0);
}
  }
}
  ?>￼Enter
