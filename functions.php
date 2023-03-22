<?php 

if (!function_exists('check_login')) {
    function check_login($con)
    {
        if(isset($_SESSION['user_id']))
        {
            $id = $_SESSION['user_id'];
            $query = "select * from user where user_id = ? limit 1";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        return null;
    }
}

if (!function_exists('random_num')) {
    function random_num($length)
    {
        if(!is_int($length) || $length < 1)
        {
            $length = 5;
        }

        $len = rand(4,$length);
        $text = "";

        for ($i=0; $i < $len; $i++) {
            $text .= rand(0,9);
        }
        return $text;
    }
}
