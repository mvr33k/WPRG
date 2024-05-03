<?php
function day_of_week($date) {
    $days = array("poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota", "niedziela");
    $day_index = date('N', strtotime($date)) - 1;
    return $days[$day_index];
}

function calculate_age($birth_date) {
    $today = new DateTime();
    $birthdate = new DateTime($birth_date);
    $age = $birthdate->diff($today)->y;
    return $age;
}

function days_until_next_birthday($birth_date) {
    $today = new DateTime();
    $birthdate = new DateTime($birth_date);
    $next_birthday = new DateTime($today->format('Y') . '-' . $birthdate->format('m-d'));
    if ($next_birthday < $today) {
        $next_birthday->modify('+1 year');
    }
    $interval = $today->diff($next_birthday);
    return $interval->days;
}

if(isset($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];
    $day_of_week = day_of_week($birthdate);
    $age = calculate_age($birthdate);
    $days_until_next_birthday = days_until_next_birthday($birthdate);
    echo "Urodziłeś się w dzień: $day_of_week.<br>
    Masz $age lat.<br>
    Do Twoich kolejnych urodzin pozostało $days_until_next_birthday dni.";
}
?>
