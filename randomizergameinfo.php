<?php
#gameid from index.php
$gameid = $_POST["gameid"];

#curl game information
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rawg.io/api/games/".$gameid,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_USERAGENT => "SwitchGG https://github.com/treyshedrick/SwitchGG",
));

$jsongameinfo = json_decode(curl_exec($curl));
curl_close($curl);

#Info about the game
$GameInfo =
[
    "name" => $jsongameinfo->name,
    "description" => $jsongameinfo->description,
    "image" => $jsongameinfo->background_image_additional,
    "reviewsurl" => $jsongameinfo->metacritic_url,
    "esrbrating" => $jsongameinfo->esrb_rating->name,
];

#ESRB rating display Not Available if null
if($jsongameinfo->esrb_rating == NULL)
{
  $GameInfo["esrbrating"] = "Not Available";
}
?>