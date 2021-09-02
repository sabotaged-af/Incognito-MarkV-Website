<?php
if(isset($_POST['submit'])){
  $schlname=$_POST['q1'];
  $schlemail=$_POST['q2'];
  $schlno=$_POST['q3'];
  $schladd=$_POST['q4'];
  $teaname=$_POST['q5'];
  $teano=$_POST['q6'];
  $webp1=$_POST['q7a'];
  $webp2=$_POST['q7b'];
  $cppp1=$_POST['q8a'];
  $cppp2=$_POST['q8b'];
  $quizp1=$_POST['q9a'];
  $quizp2=$_POST['q9b'];
  $crsp1=$_POST['q10a'];
  $crsp2=$_POST['q10b'];
  $stykzp1=$_POST['q11a'];
  $stykzp2=$_POST['q11b'];
  $photop1=$_POST['q12'];
  $gdp1=$_POST['q13'];
  $warp1=$_POST['q14a'];
  $warp2=$_POST['q14b'];
  $airp1=$_POST['q15a'];
  $airp2=$_POST['q15b'];
  $photoshopp1=$_POST['q16'];
  $gamingp1=$_POST['q17a'];
  $gamingp2=$_POST['q17b'];
  $adp1=$_POST['q18a'];
  $adp2=$_POST['q18b'];
  $adp3=$_POST['q18c'];
  $adp4=$_POST['q18d'];
  $adp5=$_POST['q18e'];
  $moviep1=$_POST['q19a'];
  $moviep2=$_POST['q19b'];
  $djp1=$_POST['q20'];
  $tuxp1=$_POST['q21a'];
  $tuxp2=$_POST['q21b'];
  $sherlockedp1=$_POST['q22'];
  $softwarep1=$_POST['q23a'];
  $softwarep2=$_POST['q23b'];
  $scratchp2=$_POST['q24a'];
  $scratchp1=$_POST['q24b'];
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
    'Air Hockey',
    'Photoshop',
    'Gaming',
    'Movie Making',
    'Ms paint paint',
    'Sherlocked',
    'GAME-DEV',
    'Scratch',
    'Ad-inact',
    'Scratch',
    'Ad - Making'
  );

// Sample data. This can be fetched from mysql too
$data = array(
  $schlname,
  $schlemail,
  $schlno,
  $schladd,
  $teaname,
  $teano,
  $webp1,
  $webp2,
  $cppp1,
  $cppp2,
  $quizp1,
  $quizp2,
  $crsp1,
  $crsp2,
  $stykzp1,
  $stykzp2,
  $photop1,
  $gdp1,
  $warp1,
  $warp2,
  $airp1,
  $airp2,
  $photoshopp1,
  $gamingp1,
  $gamingp2,
  $moviep1,
  $moviep2,
  $djp1,
  $tuxp1,
  $tuxp2,
  $sherlockedp1,
  $softwarep1,
  $softwarep2,
  $scratchp1,
  $scratchp2,
  $adp1,
  $adp2,
  $adp3,
  $adp4,
  $adp5
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
 'participant 2'
);

$list[3] = array(
 $headers[6],
 $data[6],
 $data[7]
 );


for ($i=6, $j=6; $i < 23, $j < 35  ; $i++, $j+=2) {

  $list[$i-3] = array($headers[$i], $data[$j], $data[$j+1]);
  // code...
}

$list[23] = array($headers[23], $data[35], $data[36], $data[37], $data[38], $data[39]);





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
<a href='https://resetxd.tech/".$schlname1.".csv'></a>
</body>";
mail($email_to, $email_subject , $message,$headers);
echo "<script>alert('You are registered..');location.href='https://resetxd.tech';</script>";
}
 ?>
