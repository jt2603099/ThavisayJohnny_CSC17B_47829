<?php

class ViewUser extends User {

    public function showAllUsers() {
        $datas = $this->getAllUsers();
        foreach ($datas as $data) {
            echo "Username is " . $data['UserID'] . "<br>";
            echo "Email is " . $data['Email'] . "<br>";
        }
    }
}

?>