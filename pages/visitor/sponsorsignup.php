<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // header('Location:staff_home');
}

if (isset($_POST['sponsor_signup'])) {
    //staff login verification
    $user = $tbl_users->search('user_email', $_POST['user_email']);
    if ($user->rowCount() <= 0) {
        if ($_POST['user_password'] === $_POST['user_confirmpassword']) {
            $valsUser = [
                'user_id' => $_POST['user_id'],
                'user_email' => $_POST['user_email'],
                'user_password' =>  password_hash($_POST['user_password'], PASSWORD_DEFAULT),
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'gender' => $_POST['gender'],
                'dob' => $_POST['dob'],
                'is_archive' => '0',
                'role' => 'sponsor'
            ];
            $vals = [
                'id' => $_POST['id'],
                'user_id' => $_POST['user_id'],
                'client_name' => $_POST['client_name'],
                'primary_contact' => $_POST['primary_contact'],
                'address' => $_POST['address'],
                'sponsorship_band' => $_POST['sponsorship_band']
            ];
          
            $stmt1 = $tbl_users->insertUpdate($valsUser, 'user_id');

            if ($stmt1) {
                // $last_id = $stmt1->lastInsertId();
                  //sponsor table
          
                $stmt2 = $tbl_sponsors->insertUpdate($vals, 'id');
                if ($stmt2) {
                    echo ' <script>
						console.log();
						</script>';
                }
            } else {
                echo ' <script> alert(" error");
						
						</script>';
            }
        }
    } else {
        echo '<script> alert("Email already registered."); </script>';
    }
}

$title = "Sign Up!";
$content = loadTemplate("../templates/visitor/sponsorsignup_template.php", []);
