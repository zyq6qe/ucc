<?php
$dict = array(
    "ACCT" => ["BCOM"],
    "FIN" => ["BCOM"],
    "MARKADV" => ["BCOM","CAMD"],
    "CONS" => ["BCOM"],
    "SALES" => ["BCOM"],
    "DA" => ["BCOM", "EST"],
    "BUSO" => ["BCOM"],
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
    "PSGO" => ["PSG"],
    "POLI" => ["PSG"],
    "EDU" => ["ECYD"],
    "COUNS" => ["ECYD"],
    "YOUTH" => ["ECYD"],
    "ARTS" => ["CAMD"],
    "MEDIA" => ["CAMD"],
    "DESIGN" => ["CAMD"]
);

$input = array();

if (!empty($_POST['check_list'])) {
    foreach ($_POST['check_list'] as $check) {
        foreach ($dict[$check] as $cat) {
            echo $cat; ?>
            <br/>
            <?php
            if (!in_array($cat, $input)) {
                $input[] = $cat;
            }
        }
    }
}
?>
    <br/><br/>
<?php
print_r($input);

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