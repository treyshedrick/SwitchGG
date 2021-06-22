<?php
include("environment.php");
#gameid from index.php
$gameid = $_POST["gameid"];

#curl game information
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rawg.io/api/games/".$gameid."&key=".$apikey,
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
    "hdclip" => $jsongameinfo->clip->clips->full,
];

#ESRB rating display Not Available if null
if($jsongameinfo->esrb_rating == NULL){
  $GameInfo["esrbrating"] = "Not Available";
}

#Game developers
for($devs=0; $devs<count($jsongameinfo->developers); $devs++){
  $gamedevs .= $jsongameinfo->developers[$devs]->name."<br>";
}
$GameInfo["developers"] = $gamedevs;

#Nintendo Store Url
$stores = $jsongameinfo->stores;
for($ns=0; $ns < count($jsongameinfo->stores); $ns++){
  $sname = $stores[$ns]->store->name;

  if($sname == "Nintendo Store"){
    $GameInfo["nintendostoreurl"] = $stores[$ns]->url;
  }
}

#Display video or secondary picture
function videoOrPicture($clip, $img){

  if($clip == NULL){
    echo "<img src=\"".$img."\" class=\"img-fluid\">";
  }
  else{
    echo "<video class=\"video-fluid z-depth-1\" autoplay playsinline loop controls muted>
            <source src=\"".$clip."\" type=\"video/mp4\">
          </video>";
  }
}

#Show metacritic url or not
function metacriticUrl($link){
  if($link != NULL){
    echo "<div class=\"col-lg-12\">
            <a href=\"".$link."\" class=\"btn btn-red btn-block\" target=\"_blank\">Metacritic Reviews</a>
          </div>";
  }
}
?>