<?php
if(isset($_POST['submit'])){
  $schlname=$_POST['q1'];
  $schlemail=$_POST['q2'];
  $schlno=$_POST['q3'];
  $schladd=$_POST['q4'];
  $teaname=$_POST['q5'];
  $teano=$_POST['q6'];
  $mspainp1=$_POST['q7a'];
  $mspainp2=$_POST['q7b'];
  $softwarep1=$_POST['q8a'];
  $softwarep2=$_POST['q8b'];
  $djmixp1=$_POST['q9a'];
  $djmixp2=$_POST['q9b'];
  $quizp1=$_POST['q10a'];
  $quizp2=$_POST['q10b'];
  $stykzp1=$_POST['q11a'];
  $stykzp2=$_POST['q11b'];
  $sherlockedp1=$_POST['q12'];
  $gdp1=$_POST['q13a'];
  $gdp2=$_POST['q13b'];
  $photop1=$_POST['q14a'];
  $photop2=$_POST['q14b'];
  $airp1=$_POST['q15a'];
  $airp2=$_POST['q15b'];
  $photoshopp1=$_POST['q16a'];
  $photoshopp1=$_POST['q16b'];
  $gamingp1=$_POST['q17a'];
  $gamingp2=$_POST['q17b'];
  $adp1=$_POST['q18a'];
  $adp2=$_POST['q18b'];
  $adp3=$_POST['q18c'];
  $adp4=$_POST['q18d'];
  $adp5=$_POST['q18d'];
  $moviep1=$_POST['q19a'];
  $moviep2=$_POST['q19b'];
  $djp1=$_POST['q20'];
  $tuxp1=$_POST['q21a'];
  $tuxp2=$_POST['q21b'];
  $sherlockedp1=$_POST['q22'];
  $gamingp1=$_POST['q23a'];
  $gamingp2=$_POST['q23b'];
  $gamingp3=$_POST['q23c'];
  $gamingp4=$_POST['q23d'];
  $gamingp5=$_POST['q23d'];
  $gamingp6=$_POST['q23d'];
  // open the file "demosaved.csv" for writing


// save the column headers
$headers =  array(
   'School Name',
   'School Email',
   'School Telephone Number',
   'School Address',
    'Accompanying Teacher Name',
    'Accompanying Teacher Number',
    'Ms paint ',
    'senior programing',
    'Dj mixing',
    'Quiz ',
    'scratch',
    'Sherlocked',
    'show and tell',
    'Photography',
    'photoshop',
    'poster making',
    'Robotics',
    'web desiging ',
    'GAME-DEV',
    'ad making',
    'Jam-n-gd',
    'gaming',
   );

// Sample data. This can be fetched from mysql too
$data = array(
  $schlname,
  $schlemail,
  $schlno,
  $schladd,
  $teaname,
  $teano,
  $mspainp1,
  $mspainp2,
  $softwarep1,
  $softwarep2,
  $djmixp1,
  $djmixp2,
  $quizp1,
  $quizp2,
  $stykzp1,
  $stykzp2,
  $sherlockedp1,
  $gdp1,
  $gdp2,
  $photop1,
  $photop2,
  $airp1,
  $airp2,
  $photoshopp1,
  $gamingp1,
  $gamingp2,
  $adp1,
  $adp2,
  $adp3,
  $adp4,
  $adp5,
  $moviep1,
  $moviep2,
  $djp1,
  $tuxp1,
  $tuxp2,
  $sherlockedp1,
  $gamingp1,
  $gamingp2,
  $gamingp3,
  $gamingp4,
  $gamingp5,
  $gamingp6,
  
);


 $list[0] = array(
 'School Name',
 'School Email',
 'School Telephone Number',
 'School Address',
 'Accompanying Teacher Name',
 'Accompanying Teacher Number'
);


 $list[1] = array(
  $schlname,
  $schlemail,
  $schlno,
  $schladd,
  $teaname,
  $teano
);

$list[2] = array(
 'Event',
 'Participant 1',
 'participant 1 no',
 'participant 2 ',
 'participant 2 no.'
);

$list[3] = array(
 $headers[6],
 $data[6],
 $data[7],
 $data[8],
 $data[9],
 );


for ($i=9, $j=9; $i < 22, $j < 45 ; $i++, $j+=2) {

  $list[$i-2] = array($headers[$i], $data[$j], $data[$j+1]);
  // code...
}

$list[22] = array($headers[22], $data[41], $data[42], $data[43]);





$file = fopen($schlname.'.csv', 'w');
 // save each row of the data
foreach ($list as $line)
{
fputcsv($file, $line, ',');
}
fclose($file);
$schlname1=str_replace(" ","%20",$schlname);
$email_to="thevoidssn@gmail.com";
$headers="from: ".$schlemail;
$headers= 'Cc:aradhyaom924@gmail.com';
$email_subject='School Name : '.$schlname;
$message = "<html><head>
<title>Your email at the time</title>
</head>
<body>
<h1 style=\"color:red\">The Void Club</h1>
<h2>Click And Download</h2>
<a href='http://thevoidclub.tech/register".$schlname1.".csv'></a>
</body>";
//mail($email_to, $email_subject , $message,$headers);
//echo "<script>alert('You are registered..');location.href='http://thevoidclub.tech';</script>";
}
 ?>
