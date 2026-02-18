<?php
require_once 'config.php';

require_once 'controllers/AuthController.php';

$action = $_GET['action'] ?? 'login';

$auth = new AuthController();

switch ($action) {
    case 'login':
        $auth->showLogin();
        break;
    case 'do_login':
        $auth->login();
        break;
    case 'register':
        $auth->showRegister();
        break;
    case 'do_register':
        $auth->do_register();
        break;
    case 'verify':
        require_once 'views/verify.php';
        break;
    case 'do_verify':
        $auth->do_verify();
        break;
    case 'dashboard':
        $auth->showDashboard();
        break;
    case 'logout':
        $auth->logout();
        break;
    case 'audit': // Caso de la Fase 6 [cite: 136]
        if (!isLoggedIn())
            redirect('index.php?action=login');
        require_once 'models/AuditModel.php';
        require_once 'views/audit.php';
        break;
    default:
        echo "Sistema funcionando";
        break;
}
?>