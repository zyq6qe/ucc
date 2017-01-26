<?php
include "base.php";

$dict = array(
    "ACCT" => ["BCOM"],
    "FIN" => ["BCOM"],
    "MARKADV" => ["BCOM","CAMD"],
    "CONS" => ["BCOM"],
    "SALES" => ["BCOM"],
    "DA" => ["BCOM", "EST"],
    "ENG" => ["EST"],
    "BIOMED" => ["EST"],
    "CHEME" => ["EST"],
    "CSCPE" => ["EST"],
    "CIVILENV" => ["EST"],
    "MECHAERO" => ["EST"],
    "EE" => ["EST"],
    "SYS" => ["EST"],
    "MSE" => ["EST"],
    "SCI" => ["EST"],
    "TECH" => ["EST"],
    "NSA" => ["PSG"],
    "COMMSERV" => ["PSG"],
    "POLI" => ["PSG"],
    "EDU" => ["ECYD"],
    "MEDIA" => ["CAMD"],
    "HADMIN" => ["HEALTH"],
    "HCONS" => ["HEALTH"],
    "HTECH" => ["HEALTH"]
);

$abbrev = array(
    "ACCT" => "Accounting",
    "FIN" => "Finance",
    "MARKADV" => "Marketing & Advertising",
    "CONS" => "Consulting",
    "SALES" => "Sales",
    "DA" => "Data Analytics",
    "ENG" => "General Engineering",
    "BIOMED" => "Biomedical Engineering",
    "CHEME" => "Chemical Engineering",
    "CSCPE" => "Computer Science & Computer Engineering",
    "CIVILENV" => "Civil & Environmental Engineering",
    "MECHAERO" => "Mechanical & Aerospace Engineering",
    "EE" => "Electrical Engineering",
    "SYS" => "Systems Engineering",
    "MSE" => "Material Science & Engineering",
    "SCI" => "Science",
    "TECH" => "Technology",
    "NSA" => "National Security & Intelligence",
    "COMMSERV" => "Community & Social Services",
    "POLI" => "Policy Research",
    "EDU" => "Education, Counseling and Youth Development",
    "MEDIA" => "Media (Journalism, writing, broadcasting, film)",
    "HADMIN" => "Healthcare Admin",
    "HCONS" => "Healthcare Consulting",
    "HTECH" => "Healthcare Tech"
);

$input = array(); //will hold list of func comms
$comm_list = array(); //will hold dictionary of comms to specific job area that was checked

if (!empty($_POST['check_list'])) { //form was posted
    foreach ($_POST['check_list'] as $check) { //for each checkbox that was checked checked
        foreach ($dict[$check] as $cat) { //reference dictionary to find associated func community
            if (!in_array($cat, $input)) { //if func community not in final input set
                //prevent duplicate func comms in input
                $input[] = $cat; //append to input arr
            }
            if (!isset($comm_list[$cat])) { //check if func community is not already a key in comm_list dict
                //add cat to comm_list and create new array of job areas associated to that category
                $comm_list[$cat] = [$check];
            } else {
                //else add job area to existing array assoc with that cat
                array_push($comm_list[$cat], $check);
            }
        }
    }
}

sort($input);
?>

<!------------BEGIN RENDERING------------>
<h1><?php echo $_POST['NAME'] ?></h1>
<?php
foreach ($input as $i) { //for each func comm that was selected?>
    <div id="container">
        <!--render color block-->
        <div class="block" id="<?php echo $i ?>"></div>
        <!--render list of jobs-->
        <div id="jobs">
            <ul>
            <?php
            foreach ($comm_list[$i] as $job) { //for each job selected assoc with that func comm
                echo "<li>".$abbrev[$job]."</li>";
            }
            ?>
            </ul>
        </div>
    </div>
<?php }

header("refresh:10; url=index.php");

//ACCT
//FIN
//MARKADV
//CONS
//SALES
//DA
//BUSO
//ENG
//BIOMED
//CHEME
//CSCPE
//CIVILENV
//MECHAERO
//EE
//SYS
//MSE
//SCI
//TECH
//NSA
//COMMSERV
//PSGO
//POLI
//EDU
//COUNS
//YOUTH
//ARTS
//MEDIA
//DESIGN
