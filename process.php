<?php session_start(); ?>
<?php include 'connect.php'; ?>

<?php
if (isset($_POST['students'])){

    $ans = $_POST['students'];
    $column = '';
    $value = '';
    $email = '';
    $phone = '';
    $update = '';
    $total_sum = 0;
    $update_text = '';
    $core_human = 0;
    $spouse_common = 0;
    $transfer = 0;
    $additional_points = 0;
    $name = '';
    $ielsts_listening = 0;
    $ielsts_reading = 0;
    $ielts_writing = 0;
    $ielsts_speaking = 0;
    $marital_status = '';
    $body = '';


    $column .= 'councilor_id,';
    $value .= "'".$_SESSION['counselor_id']."'".",";

    for ($i=0;$i<count($ans);$i++) {
        if ( $ans[$i][0] == 'marital_status' ){

            $marital_status = $ans[$i][1];

        }

        if ($ans[$i][0] == 'name'){
            $name = $ans[$i][1];
        }
        if ($ans[$i][0] == 'ielts_value_listening' ){

            $ielsts_listening = $ans[$i][1];

        }
        if ($ans[$i][0] == 'ielts_value_reading'){

            $ielsts_reading= $ans[$i][1];

        }
        if ($ans[$i][0] == 'ielts_value_writing'){

            $ielts_writing = $ans[$i][1];

        }
        if ($ans[$i][0] == 'ielts_value_speaking'){

            $ielsts_speaking = $ans[$i][1];

        }



        if ($ans[$i][0] == 'education_value' || $ans[$i][0] == 'work_canada' || $ans[$i][0] == 'ielts_value_listening' || $ans[$i][0] == 'ielts_value_reading'
            || $ans[$i][0] == 'ielts_value_writing' || $ans[$i][0] == 'ielts_value_speaking' || $ans[$i][0] == 'age_value' ){

            $core_human += $ans[$i][1];

        }

        if ($ans[$i][0] == 'spouse_edu' || $ans[$i][0] == 'spouse_work' || $ans[$i][0] == 'spouse_ielts_listening' || $ans[$i][0] == 'spouse_ielts_reading' ||
            $ans[$i][0] == 'spouse_ielts_writing' ||$ans[$i][0] == 'spouse_ielts_speaking ' ){


            $spouse_common += $ans[$i][1];

        }
        if ($ans[$i][0] == 'language_edu' || $ans[$i][0] == 'canada_work_ex_edu_level' ||$ans[$i][0] == 'language_foreign_ex' ||
            $ans[$i][0] == 'canada_foreign_ex' || $ans[$i][0] == 'language_trade'){



            $transfer += $ans[$i][1];
            if ($transfer >=100){
                $transfer = 100;
            }

        }
        if ($ans[$i][0] == 'pro_nomination' || $ans[$i][0] == 'offer_of_employment' ||
            $ans[$i][0] == 'canadian_education' || $ans[$i][0] == 'siblings_canada' ){

            $additional_points += $ans[$i][1];
            if ($additional_points >=600){
                $additional_points = 600;
            }

        }


        if ($ans[$i][0] == 'email') {
            $email = $ans[$i][1];
        }
        if ($ans[$i][0] == 'phone') {
            $phone = $ans[$i][1];
        }
        if ($ans[$i][0] == 'total_sum') {
            $total_sum = $ans[$i][1];
        }

        /* if (!($ans[$i][1] == 'NULL') && !($ans[$i][1] == 0)){*/

        if ($i == count($ans) - 1) {
            $column .= $ans[$i][0];
            $value .= "'" . $ans[$i][1] . "'";
            $update .= $ans[$i][0] . "='" . $ans[$i][1] . "'";
        } else {

            $column .= $ans[$i][0] . ',';
            $value .= "'" . $ans[$i][1] . "'" . ',';
            $update .= $ans[$i][0] . "='" . $ans[$i][1] . "',";
        }







    }



    $query = "INSERT INTO client_info ($column)VALUES ($value)";
    if ($connect->query($query)){

        echo 'done';


    }else{
        echo 'wrong';
    }





}
?>
