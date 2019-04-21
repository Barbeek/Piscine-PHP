#!/usr/bin/php
<?php
function month($value)
{
    if ($value == "Janvier" || $value == "janvier")
        return (1);
    if ($value == "Fevrier" || $value == "fevrier")
        return (2);
    if ($value == "Mars" || $value == "mars")
        return (3);
    if ($value == "Avril" || $value == "avril")
        return (4);
    if ($value == "Mai" || $value == "mai")
        return (5);
    if ($value == "Juin" || $value == "juin")
        return (6);
    if ($value == "Juillet" || $value == "juillet")
        return (7);
    if ($value == "Aout" || $value == "aout" || $value == "Août" || $value == "août")
        return (8);
    if ($value == "Septembre" || $value == "septembre")
        return (9);
    if ($value == "Octobre" || $value == "octobre")
        return (10);
    if ($value == "Novembre" || $value == "novembre")
        return (11);    
    if ($value == "Decembre" || $value == "decembre")
        return (4);
}
if ($argc > 1)
{
	if (preg_match("/^([l.L]undi|[m.M]ardi|[m.M]ercredi|[j.J]eudi|[v.V]endredi|[s.S]amedi|[d.D]imanche) ([0-9]{1,2}) ([j.J]anvier|[f.F][e.é]vrier|[m.M]ars|[a.A]vril|[m.M]ai|[j.J]uin|[j.J]uillet|[a.A]oût|[s.S]eptembre|[o.O]ctobre|[n.N]ovembre|[d.D]écembre) ([0-9]{4}) ([00-24]{2}):([00-59]{2}):([00-59]{2})\Z/", $argv[1], $matches))
	{
		date_default_timezone_set("Europe/Paris");
		print(mktime($matches[5], $matches[6], $matches[7], month($matches[3]), $matches[2], $matches[4]));
	}
	else
		print("Wrong Format");
}
?>