<?php

// log user in to the app
if(isset($_POST['prolo_loguser'])){
    $email=trim($_POST['email']);
    $password=md5($_POST['password']);
    if( App::logUser(["AND"=>["email"=>$email, "password"=>$password]])){
        header("Location: ");
    }else{
        header("Location: ?signin=-1");
    }
}

// prepare login page
if(!empty($_GET['signin'])){
    switch($_GET['signin']){
        case '1'||'-1':
            $page->start("login");
            $code=new Section();
            $code->addItem($page->snip("login"));
            $code->data("action","index.php");
            $code->data("method","POST");
            $code->data("error",$_GET['signin']==-1?"Your signin attempt failed":"");
            $code->getIcons();
            $code->show();
        break;
        default:
        
    }
}
?>
