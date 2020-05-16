<?php
#Initial API call that loads on page. Top rated Switch Games
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rawg.io/api/games?ordering=-rating&platforms=7",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_USERAGENT => "SwitchGG https://github.com/treyshedrick/SwitchGG",
));

$jsonarr = json_decode(curl_exec($curl));
curl_close($curl);
$numresults = count($jsonarr->results) - 1;
$randomnumber = rand(0,$numresults);
$GGresult = ($jsonarr->results[$randomnumber]);

$Game = 
[
  "id" => $GGresult->id,
  "name" => $GGresult->name,
  "releaseDate" => $GGresult->released,
  "metacritic" => $GGresult->metacritic,
  "rating" => $GGresult->rating,
  "image" => $GGresult->background_image,
];
if($Game[metacritic] == NULL)
{
  $Game[metacritic] = "Not Available";
}
?>
