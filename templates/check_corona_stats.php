<?php
#
# check_corona_stats.pl PNP4Nagios template
# v0.1 2020-04-30
#
$opt[1] = "--title \"Statistics for $servicedesc\" -l 0";

$def[1] = "DEF:$ACT[1]=$RRDFILE[1]:$DS[1]:AVERAGE ";
$def[1] .= "AREA:$ACT[1]#838383:\"$NAME[1]\t\" ";
$def[1] .= "GPRINT:$ACT[1]:LAST:\"%2.0lf ".$UNIT[1]." current\" ";
$def[1] .= "GPRINT:$ACT[1]:MAX:\"%2.0lf ".$UNIT[1]." max\" ";
$def[1] .= "GPRINT:$ACT[1]:MIN:\"%2.0lf ".$UNIT[1]." min\\n\" ";

$def[1] .= "DEF:$ACT[3]=$RRDFILE[3]:$DS[3]:AVERAGE ";
$def[1] .= "AREA:$ACT[3]#99ff99:\"$NAME[3]\t\" ";
$def[1] .= "GPRINT:$ACT[3]:LAST:\"%2.0lf ".$UNIT[3]." current\" ";
$def[1] .= "GPRINT:$ACT[3]:MAX:\"%2.0lf ".$UNIT[3]." max\" ";
$def[1] .= "GPRINT:$ACT[3]:MIN:\"%2.0lf ".$UNIT[3]." min\\n\" ";

$def[1] .= "DEF:$ACT[2]=$RRDFILE[2]:$DS[2]:AVERAGE ";
$def[1] .= "AREA:$ACT[2]#000000:\"$NAME[2]\t\" ";
$def[1] .= "GPRINT:$ACT[2]:LAST:\"%2.0lf ".$UNIT[2]." current\" ";
$def[1] .= "GPRINT:$ACT[2]:MAX:\"%2.0lf ".$UNIT[2]." max\" ";
$def[1] .= "GPRINT:$ACT[2]:MIN:\"%2.0lf ".$UNIT[2]." min\\n\" ";

?>
