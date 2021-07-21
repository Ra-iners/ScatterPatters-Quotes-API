<?php
    header("Content-Type: Application/json");
    $user1 = (isset($_GET['user1']) ? $_GET['user1'] : null);
    $user2 = (isset($_GET['user2']) ? $_GET['user2'] : null);
    $user3 = (isset($_GET['user3']) ? $_GET['user3'] : null);
    $user4 = (isset($_GET['user4']) ? $_GET['user4'] : null);
    $user5 = (isset($_GET['user5']) ? $_GET['user5'] : null);
    $user6 = (isset($_GET['user6']) ? $_GET['user6'] : null);
    
    if($user6 != null)
    {
        $rndFile = randf("Users_6");
        $fstr = fopen($rndFile, "r");
        $data = fread($fstr, filesize($rndFile));

        $data = str_replace("{A}", $_GET['user1'], $data);
        $data = str_replace("{B}", $_GET['user2'], $data);
        $data = str_replace("{C}", $_GET['user3'], $data);
        $data = str_replace("{D}", $_GET['user4'], $data);
        $data = str_replace("{E}", $_GET['user5'], $data);
        $data = str_replace("{F}", $_GET['user6'], $data);
        
        fclose($fstr);
        echo "$data";
        die();
    }

    if($user5 != null)
    {
        $rndFile = randf("Users_5");
        $fstr = fopen($rndFile, "r");
        $data = fread($fstr, filesize($rndFile));

        $data = str_replace("{A}", $_GET['user1'], $data);
        $data = str_replace("{B}", $_GET['user2'], $data);
        $data = str_replace("{C}", $_GET['user3'], $data);
        $data = str_replace("{D}", $_GET['user4'], $data);
        $data = str_replace("{E}", $_GET['user5'], $data);
        
        fclose($fstr);
        echo "$data";
        die();
    }

    if($user4 != null)
    {
        $rndFile = randf("Users_4");
        $fstr = fopen($rndFile, "r");
        $data = fread($fstr, filesize($rndFile));

        $data = str_replace("{A}", $_GET['user1'], $data);
        $data = str_replace("{B}", $_GET['user2'], $data);
        $data = str_replace("{C}", $_GET['user3'], $data);
        $data = str_replace("{D}", $_GET['user4'], $data);
        
        fclose($fstr);
        echo "$data";
        die();
    }

    if($user3 != null)
    {
        $rndFile = randf("Users_3");
        $fstr = fopen($rndFile, "r");
        $data = fread($fstr, filesize($rndFile));

        $data = str_replace("{A}", $_GET['user1'], $data);
        $data = str_replace("{B}", $_GET['user2'], $data);
        $data = str_replace("{C}", $_GET['user3'], $data);
        
        fclose($fstr);
        echo "$data";
        die();
    }

    if($user2 != null)
    {
        $rndFile = randf("Users_2");
        $fstr = fopen($rndFile, "r");
        $data = fread($fstr, filesize($rndFile));

        $data = str_replace("{A}", $_GET['user1'], $data);
        $data = str_replace("{B}", $_GET['user2'], $data);
        
        fclose($fstr);
        echo "$data";
        die();
    }

    if($user1 != null)
    {
        $rndFile = randf("Users_1");
        $fstr = fopen($rndFile, "r");
        $data = fread($fstr, filesize($rndFile));

        $data = str_replace("{A}", $_GET['user1'], $data);
        
        fclose($fstr);
        echo "$data";
        die();
    }
    function randf($dir = 'Users1')
    {
        $files = glob($dir . '/*.*');
        $file = array_rand($files);
        return $files[$file];
    }
?>