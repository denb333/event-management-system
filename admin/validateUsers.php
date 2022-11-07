<?php

function validateUsers($input_method, &$formdata, &$errors) {
    $formdata['username'] = filter_input($input_method, "username", FILTER_SANITIZE_STRING);
    $formdata['password'] = filter_input($input_method, "password", FILTER_SANITIZE_STRING);
    $formdata['role'] = filter_input($input_method, "role", FILTER_SANITIZE_STRING);
   

    if ($formdata['username'] === NULL ||
                    $formdata['username'] === FALSE ||
                    $formdata['username'] === "")
    {
        $errors['username'] = "Username required";
    }
    
    if ($formdata['password'] === NULL ||
                    $formdata['password'] === FALSE ||
                    $formdata['password'] === "")
    {
        $errors['password'] = "Password required";
    }   
    
    if ($formdata['role'] === NULL ||
                    $formdata['role'] === FALSE ||
                    $formdata['role'] === "")
    {
        $errors['role'] = "Role  required";
    }
    

    
}
