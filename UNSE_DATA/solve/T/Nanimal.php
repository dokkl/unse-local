<?
$tab[1]=			"│32│37│42│48│53│58│03│09│14│19│24│30│35│40│45│51│56";
$tab[2]=			"│03│08│13│19│24│29│34│40│45│50│55│01│06│11│16│22│27";
$tab[3]=			"│31│36│42│47│52│57│03│08│13│18│24│29│34│39│45│50│55";
$tab[4]=			"│02│07│13│18│23│28│34│39│44│49│55│00│05│10│16│21│26";
$tab[5]=			"│32│37│43│48│53│58│04│09│14│19│25│30│35│40│46│51│56";
$tab[6]=			"│03│08│14│19│24│29│35│40│45│50│56│01│06│11│17│22│27";
$tab[7]=			"│33│38│44│49│54│59│05│10│15│20│26│31│36│41│47│52│57";
$tab[8]=			"│04│09│15│20│25│30│36│41│46│51│57│02│07│12│18│23│28";
$tab[9]=			"│35│40│46│51│56│01│07│12│17│22│28│33│38│43│49│54│59";
$tab[10]=		"│05│10│16│21│26│31│37│42│47│52│58│03│08│13│19│24│29";
$tab[11]=		"│36│41│47│52│57│02│08│13│18│23│29│34│39│44│50│55│00";
$tab[12]=		"│06│11│17│22│27│32│38│43│48│53│59│04│09│14│20│25│30";

$tab[1]=$tab[1].	"│01│06│12│17│22│27│33│38│43│48│54│59│04│09│15│20│25";
$tab[2]=$tab[2].	"│32│37│43│48│53│58│04│09│14│19│25│30│35│40│46│51│56";
$tab[3]=$tab[3].	"│00│06│11│16│21│27│32│37│42│48│53│58│03│09│14│19│24";
$tab[4]=$tab[4].	"│31│37│42│47│52│58│03│08│13│19│24│29│34│40│45│50│55";
$tab[5]=$tab[5].	"│31│37│12│17│22│28│33│38│43│49│54│59│04│10│15│20│25";
$tab[6]=$tab[6].	"│32│38│43│48│53│59│04│09│14│20│25│30│35│41│46│51│56";
$tab[7]=$tab[7].	"│02│08│13│18│23│29│34│39│44│50│55│00│05│11│16│21│26";
$tab[8]=$tab[8].	"│33│39│44│49│54│00│05│10│15│21│26│31│36│42│47│52│57";
$tab[9]=$tab[9].  "│04│10│15│20│25│31│36│41│46│52│57│02│07│13│18│23│28";
$tab[10]=$tab[10]."│34│40│45│50│55│01│06│11│16│22│27│32│37│43│48│53│58";
$tab[11]=$tab[11]."│05│11│16│21│26│32│37│42│47│53│58│03│08│14│19│24│29";
$tab[12]=$tab[12]."│35│41│46│51│56│02│07│12│17│23│28│33│38│44│49│54│59";

$tab[1]=$tab[1].	"│30│36│41│46│51│57│02│07│12│18│23│28│33│39│44│49";
$tab[2]=$tab[2].	"│01│07│12│17│22│28│33│38│43│49│54│59│04│10│15│20";
$tab[3]=$tab[3].	"│30│35│40│45│51│56│01│06│12│17│22│27│33│38│43│48";
$tab[4]=$tab[4].	"│01│06│11│16│22│27│32│37│43│48│23│28│04│09│14│09";
$tab[5]=$tab[5].	"│31│36│41│46│52│57│02│07│13│18│23│28│34│39│44│49";
$tab[6]=$tab[6].	"│02│07│12│17│23│28│33│38│44│49│54│59│05│10│15│20";
$tab[7]=$tab[7].	"│32│37│42│47│53│58│03│08│14│19│24│29│35│40│45│50";
$tab[8]=$tab[8].	"│03│08│13│18│24│29│34│39│45│50│55│00│06│11│16│21";
$tab[9]=$tab[9].	"│34│39│44│49│55│00│05│10│16│21│26│31│37│42│47│52";
$tab[10]=$tab[10]."│04│09│14│19│25│30│35│40│46│51│56│01│07│12│17│22";
$tab[11]=$tab[11]."│35│40│45│50│56│01│06│11│17│22│27│32│38│43│48│53";
$tab[12]=$tab[12]."│05│10│15│20│26│31│36│41│47│52│57│02│08│13│18│23";



for($i=1; $i<=12; $I++){
	for($ii=1; $ii<=9; $ii++){
		$tab_explode = explode("|",$tab[$i]);
			
		$tabb[$ii][$i]=$tab_explode[$ii];
	}
}

$yun0 = F_right($solar_year,2);

If($yun0<50){$yun0=$yun0+50;}

$resnum=$tabb[$yun0][$solar_month];
$relt=($resnum+$solar_day) % 60;

$ani="01-지치지 않는 <치타-02-붙임성 있는 <너구리-03-들떠있는 <원숭이-04-부지런한 <코알라-05-배려 깊은 <흑표범-06-사랑에 약한 <호랑이-07-질주하는 <치타-08-노련한 <너구리-09-야심있는 <원숭이-10-엄마 같은 <코알라-11-정직한 <아기사슴-12-인기 많은 <코끼리-13-명랑한 <늑대-14-혼자 노는 <양-15-듬직한 <원숭이-16-귀여운 <코알라-17-의지가 강한 <아기사슴-18-예민한 <코끼리-19-방랑하는 <늑대-20-조용한 <양-21-침착한 <페가수스-22-비상하는 <페가수스-23-천진난만한 <양-24-아이디어 많은 <늑대-25-온화한 <늑대-26-끈기 있는 <양-27-파란만장한 <페가수스-28-우아한 <페가수스-29-투지만만한 <양-30-적응 잘하는 <늑대-31-우두머리 <코끼리-32-야무진 <아기사슴-33-활동적인 <코알라-34-기분파 <원숭이-35-거절 못하는 <양-36-호감가는 <늑대-37-돌진하는 <코끼리-38-화려한 <아기사슴-39-낭만파 <코알라-40-헌신적인 <원숭이-41-대기만성형 <너구리-42-고집있는 <치타-43-분주한 <호랑이-44-정열적인 <흑표범-45-싹싹한 <코알라-46-나를 사랑하는 <원숭이-47-인정많은 <너구리-48-품위 있는 <치타-49-느긋한 <호랑이-50-마음 약한 <흑표범-51-흔들리지 않는 <사자-52-통솔력 있는 <사자-53-감정이 풍부한 <흑표범-54-낙천적인 <호랑이-55-기운센 <호랑이-56-겸손한 <흑표범-57-가슴이 뜨거운 <사자-58-마음 여린 <사자-59-자유분방한 <흑표범-60-자비로운 <호랑이";

$ani=explode("-", $ani);

for($i=0; $i < sizeof($ani); $i++){
	if($relt == $ani[$i]){$kword = $ani[$i + 1]; break;}
}

$kword2 = Split($kword,"<");
$kword2 = $kword2[1];
$kword=substr($kword,0, 2);
?>