<?php
#Uses initialrandomizer.php totalresults to create number of pages to randomize through
$pagenumber = floor($totalresults/20);
if(isset($_POST['randomize']))
{
   $randompage = rand(0,$pagenumber);
   $GGresult = ($jsonarr->results[$randomnumber]);
}
?>