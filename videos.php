<?php

$videoArray = array
(
    "8.1 - Intro to Sequences" => 'Ch 8.1 - Intro sequences.mp4',
    "Avi Reichental - 3D Printing" => 'Avi Reichental - 3D Printing.mp4',
	"8.1 Bonus - Problem 53" => 'Ch 8.1 - Wrap up - Prob 53.mp4',
	"8.2 - Limits of Sequences" => 'Ch 8.2 - Limites of sequences.mp4', 
	
);

// get the q parameter from URL
$q=$_REQUEST["q"];
$hint="";


if ($q !== "")
{
    $q = strtolower($q);
    $len = strlen($q); 

    foreach($videoArray as $video)
    {
        if (stristr($video,$q))
        {
		echo $video;
            if ($hint == "")
            {
                $hint = "<h3>
							<a href='video.php?q=$video'>$NAME</a>
						</h3>
						<video width='350' height='270' controls>
  <source src='$video' type='video/mp4'>

	Your browser does not support the video tag.
	</video>";
            }
		
			else 
			{
				$video = "<h3><a href='video.php?q=$VIDEO'>$NAME</a></h3><video width='350' height='270' controls>
  <source src='$VIDEO' type='video/mp4'>

	Your browser does not support the video tag.
	</video>";
				$hint .= ", $video"; 
			}
        }
    }
}
echo $hint === "" ? "Sorry, nothing can be found!" : $hint;

		
?>