<?php


// EX 1 : Ecrire une fonction qui prend en paramètre une date donnée et qui retourne vrai si la date est un
// jour férié et faux si ce n’est pas un jour férié.

// $array = array('01-01-22','17-04-22', '18-04-2022','01-05-22','08-05-22','26-05-22', '06-06-22','14-07-22', '15-08-22','01-11-22','11-11-22','25-12-22'); 

// print(publicHoliday($array));


// function publicHoliday($array){
//     $specialDay = "";
//     $normalDay = date("d-m-y");

//         foreach ($array as  $arrays) {
//             if($normalDay == $arrays){
//                 $specialDay= 'It is a special day ! Go to the beach !';
//                 return $specialDay;
//             }
//         }
//         $specialDay= 'It is a normal day ! Go working ! ';
//         return $specialDay;
//         };

// ********OU *******/

// function isOffDay($date) {
//     $tables =  array('01-01-20','25-07-22','17-04-22', '02-03-15');
//     return in_array($date,$tables);
// }

// print isOffDay("20-07-22");

// EX 2 : Ecrire une fonction qui ne prend pas de paramètre et retourne un tableau des jours fériés en France.

// $array = array('01-01-22','17-04-22', '18-04-2022','01-05-22','08-05-22','26-05-22', '06-06-22','14-07-22', '15-08-22','01-11-22','11-11-22','25-12-22');

// // echo 'This is the specials days in France', $array;

// function afficherTableau(){
//     $array = array('01-01-22','17-04-22', '18-04-2022','01-05-22','08-05-22','26-05-22', '06-06-22','14-07-22', '15-08-22','01-11-22','11-11-22','25-12-22');
//     return $array;
// }
// print_r (afficherTableau());

// EX 3 : Ecrire une fonction qui prend en paramètre un numéro de sécurité sociale et qui retourne vrai
// quand le numéro est correct et faux quand le numéro n’est pas correct

// $array = array(1-12-05-76-654-88-99);

// print "<pre>";


// preg_match($myPattern,$myNumber,$match);    

// // 
// function numSecu($numberCheck){

//     $myPattern = '#^[12][0-9]{2}[0-1][0-9](2[AB]|[0-9]{2})[0-9]{3}[0-9]{3}[0-9]{2}$#';
//             if(preg_match($myPattern,$numberCheck)){
//                 echo 'valide';
//             }
//             else{
//                 echo 'non valide';
//             }  
//     };
//   $myNumber = "180105313010368";
//   print(numSecu($myNumber));

//  EX 4 : / Ecrire une fonction qui prend en paramètre un numéro de département et qui retourne le nom du
// département (fichier departements.csv joint)





// $csvDepartement = array_map('str_getcsv', file('departement.csv'));
// $csvVille = array_map('str_getcsv', file('villes_france.csv'));

// $departNum = "76";

// print_r(departName($departNum, $csvDepartement));
// function departName($departNum, $array){
//     foreach ($array as $key => $depart) {
//         if ($departNum == $depart[1]) 
//         {
//             $departFound = $depart[2];
//             return $departFound;
//         }
//     }
//     $departFound = "Département introuvable";
//     return $departFound;
// }

// EX 5 : Ecrire une fonction qui prend en paramètre un numéro de département et qui retourne un tableau
// de toutes les villes du département (fichier villes_france.csv joint)


// function villesDepart($departNum, $array){
//     $departVilles = array();
//     foreach ($array as $key => $ville) {
//         if ($departNum == $ville[1]) {
//             array_push($departVilles,$ville[4]);
//         }
//     }
//     if (count($departVilles) == 0) {
//         return "Département introuvable";
//     }
//     return $departVilles;
// }
// // var_dump($csvVille);
// var_dump(villesDepart($departNum, $csvVille));

//EX 6 : Ecrire une fonction qui prend en paramètre une date et qui retourne le nom du jour de la semaine
// en français


// $fmt = new IntlDateFormatter("fr_FR" ,0,0,NULL,NULL,"EEEE");
// echo(datefmt_format( $fmt , strtotime(Date('2022-07-27'))));
// //  "EEEE" => permet d'afficher le jour en entier
// //  "fr_FR" => fuseau horaire qui traduit donc en français
// //  "datefmt_format" => pour afficher le format de date demandé sur la ligne du dessus

// // Deuxième façon : plus limitée 

// $date='2022-07-29';
// function weekDay($date){
//     $weekDay = date("l", strtotime($date));
//     $day = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
//     $dayFrench = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
//     $frenchWeekDay = str_replace($day, $dayFrench, $weekDay);
//     return $frenchWeekDay;
// }
// print(weekDay($date));

// EX 7 : Ecrire une fonction qui prend en paramètre un nom de parking strasbourgeois et qui retourne si
// celui-ci est ouvert (vrai ou faux) (occupation-parkings-temps-reel-strasbourg.csv)
// Il faut déclarer la variable ***$csvParking**** dans la fonction pour qu'il soit pris en compte sinon il faut le mettre à l'extérieur et le mettre dans les paramètres de la fonction

// $parkingChoisi = "Parking Krimmeri Stade de la Meinau";

// function isParkingOpen($parkingChoisi) {

//     $csvParking = array_map(function($v){
//         return str_getcsv($v, ";");
//     }, file('parking.csv'));


//     foreach ($csvParking as $key => $parking) {
//         if ($parkingChoisi == $parking[0] ){
//             return $parking[4];
//         }
//     }
//     // on met le return à l'extérieur de la boucle sinon la boucle va retourner 'indispo à chaque fois
//     return 'indispo';
// }
// print (isParkingOpen($parkingChoisi));

// EX 8 : Ecrire une fonction qui prend en paramètre un nom de parking strasbourgeois et qui retourne le
// nombre de places disponibles du parking (occupation-parkings-temps-reel-strasbourg.csv)


// $parkingChoisi = "Parking Zénitfdfh";

// function placeDispo($parkingChoisi)
// {

//     $csvParking = array_map(function ($v) {
//         return str_getcsv($v, ";");
//     }, file('parking.csv'));
//     // var_dump($csvParking);

//     foreach ($csvParking as $parking) {
//         if ($parkingChoisi == $parking[0]) {
//             return $parking[6];
//         }
//     }
//     return 'parking inexistant';
// }

// print placeDispo($parkingChoisi);

// EX 9 : Ecrire une fonction qui prend en paramètre une ville et retourne le nombre de personnes travaillant
// dans cette ville à partir d’un tableau de données déjà existant (tableau_datas.php)

//  la variable qui est en paramètre ***$ville*** n'est aps mentionnée au dessus de la fonction car elle est cité directement en paramètre de la fonction quand elle est appelée et spécifiée dans le print

// function employes($ville){
//     $nbrEmploye = 0;
//     require('tableau_datas.php');
//     foreach ($tableau as $employe) {
//         if($ville == $employe[2]){
//             $nbrEmploye+=1;
//         }
//     }
//     return $nbrEmploye;
// }
// print(employes("Tokyo"));


// boucle for pour afficher le nom de chaque employé en utilisant le paramètre ***[0]***
// require('tableau_datas.php');
// for($i = 0; $i < count($tableau); $i++) {
//         var_dump($tableau[$i][0]);
// }

// // boucle for à DEUX DIMENSIONS : on boucle d'abord le tableau employé[$i] et ensuite on boucle les coordonnées des employes avec [$j]
// for($i = 0; $i < count($tableau); $i++) {
//     for($j = 0; $j < count($tableau[$i]); $j++) {
//         print($tableau[$i][$j]);
//     }
// }

// EX 10 :  Ecrire une fonction qui ne prend pas de paramètre et qui retourne le nom de la personne qui
// gagne le plus

//****METHODE 1 : */

// function salaire(){
//     require('tableau_datas.php');
//     $salaires = [];
//     foreach ($tableau as $employe) {
//         $salaire = str_replace(["$", ","],["", ""], $employe[5]);
//         var_dump($salaires);
//         array_push($salaires, $salaire);
//     }
//     foreach ($tableau as $employe) {
//         if(max($salaires) == str_replace(["$", ","],["", ""], $employe[5])){
//             return $employe[0];
//         }
//     }
// }
// print salaire();

//*****METHODE 2: */
// function meilleurSalaire() {
//     require('tableau_datas.php');
//     $meilleurePaye = 0;
//     $employeLeMieuxPaye = "";
    
//     foreach($tableau as $employe) {
//         $salaire = str_replace(["$",","], ["",""], $employe[5]);
//         if($salaire > $meilleurePaye) {
//             $meilleurePaye = $salaire;
//             $employeLeMieuxPaye = $employe[0];
//         }
//     }

//     echo "La personne qui gagne le plus est " . $employeLeMieuxPaye . " avec un salaire de $" . $meilleurePaye . ".";
// }
// meilleurSalaire();


//*****METHODE 3: */
// function meilleurSalaire() {
//     require('tableau_datas.php');
//     $listeSalaires = [];
//     foreach($tableau as $employe) {
//         array_push($listeSalaires, (str_replace(["$",","], ["",""], $employe[5])));
//     }
//     echo "La personne qui gagne le plus est " . $tableau[array_search(max($listeSalaires), $listeSalaires)][0] . " avec un salaire de " . $tableau[array_search(max($listeSalaires), $listeSalaires)][5] . "." ;
// }
// meilleurSalaire();