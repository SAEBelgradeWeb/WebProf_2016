<?php
echo '<pre>';
if(count($_POST)>0){
    print_r($_POST);
    $user = [];

    foreach($_POST as $key=>$value){
        $user[$key] = $value;
    }


    print_r($user);

}


?>


<form action="" method="post">
    <label for="">Input1 <input type="text" name="email" id=""></label>
    <label for="">Input2<input type="text" name="username" id=""></label>
    <label for="">Input3 <input type="text" name="pass" id=""></label>
    <label for="">Input4 <input type="text" name="phone" id=""></label>
    <label for="">Input1 <input type="text" name="email1" id=""></label>
    <label for="">Input2<input type="text" name="username1" id=""></label>
    <label for="">Input3 <input type="text" name="pass1" id=""></label>
    <label for="">Input4 <input type="text" name="phone1" id=""></label>
    <label for="">Input1 <input type="text" name="email2" id=""></label>
    <label for="">Input2<input type="text" name="username2" id=""></label>
    <label for="">Input3 <input type="text" name="pass2" id=""></label>
    <label for="">Input4 <input type="text" name="phone2" id=""></label>
    <label for="">Input1 <input type="text" name="email3" id=""></label>
    <label for="">Input2<input type="text" name="username3" id=""></label>
    <label for="">Input3 <input type="text" name="pass3" id=""></label>
    <label for="">Input4 <input type="text" name="phone3" id=""></label>
    <input type="submit" value="Send">
</form>
