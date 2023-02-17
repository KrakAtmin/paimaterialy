<?php
echo 10,nl2br("\r\n");
echo nl2br("Test\r\n");
echo 21+37,nl2br("\r\n");
echo "Ala",nl2br("\r\n"),"Ma",nl2br("\r\n"),"Kota",nl2br("\r\n");
echo "Ala"."Ma"."Kota".nl2br("\r\n");

$zmien = 100;
printf ('%+d', $zmien);
echo nl2br("\r\n");
printf ("{%'x10b}", $zmien);
echo nl2br("\r\n");
printf ("{%010x}", $zmien);
echo nl2br("\r\n");
printf ("%.4f", $zmien);
echo nl2br("\r\n");
printf ("%e", $zmien);
echo nl2br("\r\n");
printf ("%c", $zmien);
echo nl2br("\r\n");

$tekst = "Ala ma kota";
printf ('%s', $tekst);
echo nl2br("\r\n");
printf ('{%15s}', $tekst);
echo nl2br("\r\n");
printf ('{%s \ }', $tekst);
echo nl2br("\r\n");
printf ('{%-015s}', $tekst);
echo nl2br("\r\n");
printf ('{%%%%%%%%%s}', $tekst);
echo nl2br("\r\n");
printf ('{%15.3s}', $tekst);
echo nl2br("\r\n");
printf ('<h1>{%-15.3s}</h1>', $tekst);
echo nl2br("\r\n");











?>