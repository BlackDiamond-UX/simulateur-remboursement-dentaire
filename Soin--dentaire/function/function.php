<?php

function MyAge($plus, $moin)
{
    // A function for calculating age
    $date = $_POST['date-naissance'];
    $today = date("d-m-Y");
    $diff = date_diff(date_create($date), date_create($today));
    $age = $diff->format('%y');
    if ($age > 13) :
        echo  $plus;
    else : echo $moin . "€";
    endif;
}
// function for calculation of refund amount
function Montant()
{
    global $Montant;
    global $moin13;

    // variables
    $Rbsmnt_CQ = 70 / 100;
    $tarif_Detartrage = 29.92;
    $plus13_carie1 = 16.87;
    $plus13_carie2 = 28.92;
    $plus13_carie3 = 40.97;
    $plus13_canine = 33.74;
    $plus13_Premolaire = 48.2;
    $plus13_Molaire = 81.94;
    $moin13_carie1 = 19.28;
    $moin13_carie2 = 33.37;
    $moin13_carie3 = 48.2;
    $moin13_canine = 38.56;
    $moin13_Premolaire = 57.84;
    $moin13_Molaire = 93.99;
    $dent_de_lait = 16.72;
    $dent_de_permanente = 33.44;
    $Scellement_de_sillon = 21.69;


    // Coditions for choosing doctors
    switch ($_POST['dents']) {
        case 'Detartrage':
            $Montant = $tarif_Detartrage * $Rbsmnt_CQ;
            $moin13 = 0 * $Rbsmnt_CQ;;
            break;
        case 'Traitement carie 1 face':
            $Montant = $plus13_carie1 * $Rbsmnt_CQ;
            $moin13 = $moin13_carie1 * $Rbsmnt_CQ;
            break;
        case 'Traitement carie 2 face':
            $Montant = $plus13_carie2 * $Rbsmnt_CQ;
            $moin13 = $moin13_carie2 * $Rbsmnt_CQ;
            break;
        case 'Traitement carie 3 faces et +':
            $Montant = $plus13_carie3 * $Rbsmnt_CQ;
            $moin13 = $moin13_carie3 * $Rbsmnt_CQ;
            break;
        case 'Devitalisation(canine ou incisive)':
            $Montant  = $plus13_canine * $Rbsmnt_CQ;
            $moin13 = $moin13_canine * $Rbsmnt_CQ;
            break;
        case 'Devitalisation(Premolaire)':
            $Montant = $plus13_Premolaire * $Rbsmnt_CQ;
            $moin13 = $moin13_Premolaire * $Rbsmnt_CQ;
            break;
        case 'Devitalisation(Molaire)':
            $Montant = $plus13_Molaire * $Rbsmnt_CQ;
            $moin13 = $moin13_Molaire * $Rbsmnt_CQ;
            break;
        case 'Extraction dent de lait':
            $Montant = $dent_de_lait * $Rbsmnt_CQ;
            $moin13 = 0 * $Rbsmnt_CQ;
            break;
        case 'Extraction dent de permanente':
            $Montant = $dent_de_permanente * $Rbsmnt_CQ;
            $moin13 = 0 * $Rbsmnt_CQ;
            break;
        case 'Scellement de sillon':
            $Montant = $Scellement_de_sillon * $Rbsmnt_CQ;
            $moin13 = 0 * $Rbsmnt_CQ;;
            break;
        default:
            break;
    }

    MyAge($Montant, $moin13);
}
// function for calculation Garantie
function Garantie()
{
    global $sum;
    global $moin_13;

    // variables
    $Garantie = isset($_POST['Garantie']) ? $_POST['Garantie'] : NULL;
    $tarif_Detartrage = 29.92;
    $plus13_carie1 = 16.87;
    $plus13_carie2 = 28.92;
    $plus13_carie3 = 40.97;
    $plus13_canine = 33.74;
    $plus13_Premolaire = 48.2;
    $plus13_Molaire = 81.94;
    $moin13_carie1 = 19.28;
    $moin13_carie2 = 33.37;
    $moin13_carie3 = 48.2;
    $moin13_canine = 38.56;
    $moin13_Premolaire = 57.84;
    $moin13_Molaire = 93.99;
    $dent_de_lait = 16.72;
    $dent_de_permanente = 33.44;
    $Scellement_de_sillon = 21.69;


    switch ($_POST['dents']) {
        case 'Detartrage':
            $sum = $tarif_Detartrage * $Garantie / 100;
            $moin_13 = 0 * $Garantie / 100;
            break;
        case 'Traitement carie 1 face':
            $sum = $plus13_carie1 * $Garantie / 100;
            $moin_13 = $moin13_carie1 * $Garantie / 100;
            break;
        case 'Traitement carie 2 face':
            $sum = $plus13_carie2 * $Garantie / 100;
            $moin_13 = $moin13_carie2 * $Garantie / 100;
            break;
        case 'Traitement carie 3 faces et +':
            $sum = $plus13_carie3 * $Garantie / 100;
            $moin_13 = $moin13_carie3 * $Garantie / 100;
            break;
        case 'Devitalisation(canine ou incisive)':
            $sum  = $plus13_canine * $Garantie / 100;
            $moin_13 = $moin13_canine * $Garantie / 100;
            break;
        case 'Devitalisation(Premolaire)':
            $sum = $plus13_Premolaire * $Garantie / 100;
            $moin_13 = $moin13_Premolaire * $Garantie / 100;
            break;
        case 'Devitalisation(Molaire)':
            $sum = $plus13_Molaire * $Garantie / 100;
            $moin_13 = $moin13_Molaire * $Garantie / 100;
            break;
        case 'Extraction dent de lait':
            $sum = $dent_de_lait * $Garantie / 100;
            $moin_13 = 0 * $Garantie / 100;
            break;
        case 'Extraction dent de permanente':
            $sum = $dent_de_permanente * $Garantie / 100;
            $moin_13 = 0 * $Garantie / 100;
            break;
        case 'Scellement de sillon':
            $sum = $Scellement_de_sillon * $Garantie / 100;
            $moin_13 = 0 * $Garantie / 100;
            break;
        default:
            break;
    }

    MyAge($sum, $moin_13);
}

// function for calculation Rembourse
function Rembourse()
{
    global $sum;
    global $Montant;
    global $moin_13;
    global $moin13;
    global $sum2;
    $tarif_conv = $_POST['tarif-convotion'];
    $date = $_POST['date-naissance'];
    $today = date("d-m-Y");
    $diff = date_diff(date_create($date), date_create($today));
    $age = $diff->format('%y');
    $Rembourse = $Montant +  $sum;
    $Remboursemoin = $moin13 +  $moin_13;

    if ($age > 13) :
        if ($Rembourse > $tarif_conv) :
            $sum2 = $tarif_conv;
        else :
            $sum2 = $Rembourse;
        endif;
    else :
        if ($Remboursemoin > $tarif_conv) :
            $sum2 = $tarif_conv;
        else :
            $sum2 = $Remboursemoin;
        endif;
    endif;

    echo $sum2 . "€";;
}
// function for calculation Total
function Total()
{
    global $sum2;

    $tarif_conv = $_POST['tarif-convotion'];
    $sum3 = $tarif_conv - $sum2;
    echo $sum3 . "€";;
}
