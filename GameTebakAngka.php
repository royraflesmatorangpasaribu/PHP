// Dibuat Oleh Roy Rafles Matorang Pasaribu 
// pada 05 Agustus 2023

<?php
while(true){
    
echo "Welcome To My Game\n"; 
echo "===== Game Tebak Angka =====\n";
echo "Tebak sebuah angka antara 1 dan 9!\n";
$computer = rand(1,9);
echo "Masukkan Tebakanmu : ";
$player = trim(fgets(STDIN));
echo "Result => ";
if($player == $computer){
    echo "MENANG\n";
    exit;
}
else{
    echo "KALAH\n";
}
echo "Angka Yang diberikan komputer : $computer\n";
echo "Angka Yang kamu Tebak : $player\n\n\n";
    
}

