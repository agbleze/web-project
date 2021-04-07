<?php 
    include 'AwardWinningMovie.php';
    $awm = new AwardWinningMovie('A1234', 'Max', 6.99, 'Best Picture');
    
    echo $awm->recommend('Japan');
?>