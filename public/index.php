<?php

require '../vendor/autoload.php';
require '../src/Model/connectQuote.php';
//
use compass\Controllers\DefaultController;
//
$defaultController = new DefaultController();

// If no settings in the GET => go to DefaultController.php + function indexAction
// function indexAction : landing page with register and login choice, or birthday and maps
if (empty($_GET)){
  echo $defaultController->indexAction();
}

// If the GET section is register => go to register.php + function registerUserAction
// function registerUserAction : empty form to choose login/username...
elseif ($_GET['section'] === 'registermain'){
    echo $defaultController->registerMainAction();
}

// If the GET section is success => go to home.php + function successUserAction
// function registerUserAction : empty form to choose login/username...
elseif ($_GET['section'] === 'registersuccess') {
    echo $defaultController->addCitationAction();
}

// If the GET section is fail => go to index.php + function failUserAction
// function failUserAction : empty form to choose login/username...
elseif ($_GET['section'] === 'registerfail') {
    echo $defaultController->registerFailAction();
}
// If the GET section is login => go to login.php + function loginUserAction
// function registerUserAction : empty form to choose login/username...
elseif ($_GET['section'] === 'loginmain') {
    echo $defaultController->loginMainAction();
}

// If the GET section is success => go to home.php + function successUserAction
// function registerUserAction : empty form to choose login/username...
elseif ($_GET['section'] === 'loginsuccess') {
    echo $defaultController->loginSuccessAction();
}

// If the GET section is fail => go to index.php + function failUserAction
// function failUserAction : empty form to choose login/username...
elseif ($_GET['section'] === 'loginfail') {
    echo $defaultController->loginFailAction();
}

// If the GET section is fail => go to index.php + function failUserAction
// function failUserAction : empty form to choose login/username...
elseif ($_GET['section'] === 'admin') {
echo $defaultController->adminAction();
}

?>
