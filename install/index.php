<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Software Install Wizard By Xgenious</title>
    <style>
        /*custom font*/
        @import url('https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap');

        :root {
            --heading-color: #333;
            --paragraph-color: #777;
            --main-color-one: #73cb01;
            --secondary-color: #30373f;
            --body-font: 'Nunito', sans-serif;;
        }

        /*basic reset*/
        * {
            margin: 0;
            padding: 0;
        }

        html {
            background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
        }

        body {
            font-family: var(--body-font);
            /*background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));*/
        }

        #msform {
            text-align: center;
            position: relative;
        }

        #msform .content-wrap {
            background: white;
            border: 0 none;
            border-radius: 3px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 40px 30px 40px 30px;
            box-sizing: border-box;
            position: relative;
        }

        #msform .content-wrap:not(:first-of-type) {
            display: none;
        }

        #msform input, #msform textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 13px;
        }

        #msform .action-button {
            width: 100px;
            background: var(--main-color-one);
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 1px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px var(--main-color-one);
        }

        .fs-title {
            font-size: 15px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
        }

        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            counter-reset: step;
            display: flex;
            justify-content: space-evenly;
        }

        #progressbar li.active {
            color: #2c3e50;
            font-weight: 700;
        }

        #progressbar li {
            list-style-type: none;
            color: white;
            text-transform: capitalize;
            font-size: 14px;
            position: relative;
            font-weight: 600;
        }

        #progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 30px;
            line-height: 30px;
            display: block;
            font-size: 14px;
            color: #333;
            background: white;
            border-radius: 3px;
            margin: 0 auto 15px auto;;
            font-weight: 700;
        }

        #progressbar li:after {
            content: '';
            width: 134%;
            height: 2px;
            background: white;
            position: absolute;
            left: -94%;
            top: 13px;
            z-index: -1;
        }

        #progressbar li:first-child:after {
            content: none;
        }

        #progressbar li:nth-child(2)::after {
            width: 130%;
            left: -60%;
        }

        #progressbar li.active:before{
            background: var(--main-color-one);
            color: white;
        }

        .brand-logo img {
            max-width: 200px;
            text-align: center;
        }

        .brand-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-direction: column;
            align-items: center;
        }

        .main-area {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
            width: 100%;
            padding: 100px 0;
        }

        .copyright-area {
            text-align: center;
            font-size: 14px;
            color: rgba(255, 255, 255, .6);
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding-bottom: 30px;
            background-color: rgb(198, 161, 207);
        }


        .copyright-area a {
            color: #fff;
        }

        .brand-logo .title {
            font-size: 40px;
            line-height: 50px;
            font-weight: 700;
            color: #fff;
            display: block;
            margin-bottom: 0px;
        }

        .brand-logo p {
            color: rgba(255, 255, 255, .8);
        }

        .get-support {
            position: fixed;
            right: 60px;
            bottom: 60px;
        }

        .get-support .icon-wrap {
            position: relative;
            z-index: 0;
        }

        .get-support .icon-wrap:hover .support-list {
            visibility: visible;
            opacity: 1;
        }

        .get-support .icon-wrap .support-list {
            position: absolute;
            bottom: 40px;
            left: 100px;
            margin: 0;
            padding: 0;
            list-style: none;
            width: 100%;
            visibility: hidden;
            opacity: 0;
            transition: 300ms all;
        }

        .get-support .icon-wrap .support-list li {
            display: block;
            background-color: #fff;
        }

        .get-support .icon-wrap .support-list li:nth-child(1),
        .get-support .icon-wrap .support-list li:nth-child(2) {
            position: absolute;
            bottom: 50px;
            right: 100px;
        }

        .get-support .icon-wrap .support-list li:nth-child(1) a,
        .get-support .icon-wrap .support-list li:nth-child(2) a {
            text-decoration: none;
            padding: 8px 20px;
            width: 180px;
            display: block;
            color: #333;
            font-weight: 600;
            transition: all 300ms;
        }

        .get-support .icon-wrap .support-list li:nth-child(1) a:hover,
        .get-support .icon-wrap .support-list li:nth-child(2) a:hover {
            background-color: var(--main-color-one);
            color: #fff;
        }

        .get-support .icon-wrap .support-list li:nth-child(2) {
            position: absolute;
            bottom: 90px;
            right: 100px;
        }

        .get-support .icon-wrap .support-list li:nth-child(2) a {
            text-decoration: none;
            padding: 8px 20px;
            width: 180px;
            display: block;
            color: #333;
            font-weight: 600;
            transition: all 300ms;
        }

        .get-support .icon-wrap i {
            display: inline-block;
            width: 80px;
            height: 80px;
            text-align: center;
            line-height: 80px;
            font-size: 40px;
            background-color: #fff;
            border-radius: 50%;
            color: var(--main-color-one);
            cursor: pointer;
        }

        .content-wrap h4 {
            font-size: 26px;
            line-height: 36px;
            margin-bottom: 20px;
            color: var(--heading-color);
        }

        .content-wrap p {
            color: var(--paragraph-color);
        }

        ul.check-list li.title:before {
            display: none;
        }

        ul.check-list li:before {
            position: static;
            content: "\f058";
            margin-right: 0;
            color: #2bad2b;
            font-family: fontawesome;
        }

        ul.check-list li + li {
            margin-top: 8px;
            color: var(--heading-color);
            opacity: .9;
        }

        ul.close-list .title {
            color: red;
        }

        ul.check-list .title {
            color: #2bad2b;
        }

        ul.close-list {
            margin: 0;
            padding: 0;
            list-style: none;
            margin: 20px 0;
        }

        ul.check-list .title, ul.close-list .title {
            font-size: 20px;
            font-weight: 700;
            margin: 20px 0;
            border-bottom: 1px solid #e2e2e2;
            padding-bottom: 10px;
        }

        ul.check-list {
            margin: 0;
            padding: 0;
            list-style: none;
            margin-bottom: 20px;
        }

        ul.close-list li.title:before {
            display: none;
        }

        ul.close-list li:before {
            position: static;
            content: "\f057";
            font-family: fontawesome;
            margin-right: 5px;
            color: red;
        }

        ul.close-list li {
            color: var(--heading-color);
            opacity: .78;
        }

        #msform .action-button {
            width: auto;
            padding: 15px 30px;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 600;
        }

        #msform .action-button:focus {
            border: none;
            outline: none;
            box-shadow: none;
        }

        .icon.check {
            color: #2bad2b;
        }

        .icon.close {
            color: #f35656;
        }

        table,
        .requirement-check {
            border-collapse: collapse;
            width: 100%;
        }

        th, td,
        .requirement-check th,
        .requirement-check td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(odd),
        .requirement-check tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        tr:nth-child(even),
        .requirement-check tr:nth-child(even) {
            background-color: #ececec;
        }

        #msform .action-button[disabled] {
            background-color: #eee;
            color: #444;
        }
        .content-wrap h5 {
            font-size: 20px;
            text-align: left;
            margin-bottom: 20px;
        }
        .form-block {
            margin-bottom: 30px;
            text-align: left;
        }

        .form-block label {
            opacity: .8;
            margin-bottom: 10px;
            display: block;
        }
        .form-group .form-control{
            border: 1px solid #e2e2e2;
            border-radius: 0;
        }
        .form-group .form-control:focus{
            outline: none;
            box-shadow: none;
        }
        #msform input[readonly] {
            background-color: #f2f2f2;
            font-weight: 600;
        }
        .alert {
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        ul.error-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        ul.error-list li+li {
            margin-top: 10px;
        }

        ul.error-list li {
            font-size: 14px;
            font-weight: 600;
        }
        .install-success {
            display: block;
            width: 100%;
            background-color: #fff;
            padding: 10px 20px;
            margin-bottom: 40px;
        }

        .install-success a {
            color: #fff;
            text-decoration: none;
            background-color: #000;
            padding: 3px 10px;
            border-radius: 3px;
            font-size: 14px;
            margin-left: 20px;
        }

        .install-success strong {
            color: red;
        }
    </style>
</head>
<body>
<?php

$error_list = [];
function extension_check($name)
{
    if (!extension_loaded($name)) {
        $response = false;
    } else {
        $response = true;
    }
    return $response;
}

function folder_permission($name)
{
    $perm = substr(sprintf('%o', fileperms($name)), -4);
    if ($perm >= '0775') {
        $response = true;
    } else {
        $response = false;
    }
    return $response;
}

function importDatabase($pt)
{
    $db = new PDO("mysql:host=$pt[database_host];dbname=$pt[database_name]", $pt['database_username'], $pt['database_password']);
    $query = file_get_contents("database.sql");
    $stmt = $db->prepare($query);
    if ($stmt->execute())
        return true;
    else
        return false;
}
function home_base_url(){
    $base_url = (isset($_SERVER['HTTPS']) &&
        $_SERVER['HTTPS']!='off') ? 'https://' : 'http://';
    $tmpURL = dirname(__FILE__);
    $tmpURL = str_replace(chr(92),'/',$tmpURL);
    $tmpURL = str_replace($_SERVER['DOCUMENT_ROOT'],'',$tmpURL);
    $tmpURL = ltrim($tmpURL,'/');
    $tmpURL = rtrim($tmpURL, '/');
    $tmpURL = str_replace('/install','',$tmpURL);
    $base_url .= $_SERVER['HTTP_HOST'].'/'.$tmpURL;
    return $base_url;
}

function verify_input_fields($all_fields){
    $error_count = 0;
    foreach ($all_fields as $key => $value){
        if (empty($_POST[$key])){
            $error_list['message'][$key] = $key;
            $error_count++;
        }
    }
    $error_list['error'] = $error_count > 0 ? true : false;
    return $error_list;
}

function setAdminEmail($pt){
    $db = new PDO("mysql:host=$pt[database_host];dbname=$pt[database_name]", $pt['database_username'], $pt['database_password']);
    $res = $db->query("UPDATE admins SET email='".$pt['admin_email']."' WHERE username='super_admin'");
    if ($res){
        return true;
    }else{
        return false;
    }
}

function systemInstall($all_fields){
    $status = false;
    if (file_exists('../@core/env-sample.txt')) {

        $str = file_get_contents('../@core/env-sample.txt');

        $str = str_replace('YOUR_APP_URL', $all_fields['app_url'],$str);
        $str = str_replace('YOUR_DATABASE_HOST', $all_fields['database_host'],$str);
        $str = str_replace('YOUR_DATABASE_NAME', $all_fields['database_name'],$str);
        $str = str_replace('YOUR_DATABASE_USERNAME', $all_fields['database_username'],$str);
        $str = str_replace('YOUR_DATABASE_PASSWORD', $all_fields['database_password'],$str);

        if (file_put_contents('../@core/.env', $str) != false){
            $status = true;
        }
    }

    return $status;
}

$extensions = [
    'BCMath', 'Ctype', 'JSON', 'Mbstring', 'OpenSSL', 'PDO', 'pdo_mysql', 'Tokenizer', 'XML', 'cURL', 'fileinfo', 'gd', 'gmp'
];

$folders = [
    '../@core/bootstrap/cache/', '../@core/storage/', '../@core/storage/app/', '../@core/storage/framework/', '../@core/storage/logs/'
];
?>
<div class="main-area">
    <div class="get-support">
        <div class="icon-wrap">
            <ul class="support-list">
                <li><a href="http://xgenious.com/">Visit Website</a></li>
                <li><a href="mailto:contact@xgenoius.com">Contact Support</a></li>
            </ul>
            <i class="fa fa-support"></i>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-outer-wrapper">
                    <div class="brand-logo">
                        <h2 class="title">XGENIOUS</h2>
                        <p>Software Installation Wizard</p>
                    </div>


                    <?php
                    if ($_POST) {
                        $alldata = $_POST;
                        $db_name = $_POST['database_name'];
                        $db_host = $_POST['database_host'];
                        $db_user = $_POST['database_username'];
                        $db_pass = $_POST['database_username'];
                        $status = verify_input_fields($alldata);
                        if (!$status['error']) {
                            if(!importDatabase($alldata)){
                                echo "<div class='alert-danger alert'>Please Check Your Database Information!<div>";
                            }else{
                                echo '<div class="alert-success alert">Database Import Done....</div>';
                                if(!systemInstall($alldata)){
                                    echo "<h2 class='text-center text-danger mt-5 mb-5'> Unexpected Error Occurred During Installation. Please Contact for Support.<h2>";
                                }else{
                                    echo '<div class="alert-success alert">Installed Successfully , Updating Admin Email ...</div>';
                                    if(setAdminEmail($alldata)){
                                        echo '<div class="alert-success alert">Admin Email Updated.....</div>';
                                    }else{
                                        echo '<div class="alert-danger alert">Admin Email Update Failed!</div>';
                                    }
                                    echo '<div class="install-success">Installation Completed... <strong> Now Delete Install Folder From Script.</strong>  <a href="'.home_base_url().'">Visit Website</a></div>';
                                }
                            }
                        }else{
                            ?>
                            <div class="alert alert-danger">
                                <ul class="error-list">
                                    <?php
                                    foreach ($status['message'] as $error){
                                        printf('<li>%1$s</li>',str_replace('_', ' ', $error) .' field is required');
                                    }
                                    ?>
                                </ul>
                            </div>
                        <?php } }?>
                    <form id="msform" action="index.php" method="post">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Terms Of Use</li>
                            <li>Server Requirement</li>
                            <li>Folder Permission</li>
                            <li>Required Database</li>
                            <li>Install Information</li>
                        </ul>
                        <!-- fieldsets -->
                        <div class="content-wrap with-step">
                            <h4>License to be used on one (1) domain only!</h4>
                            <p>The Regular license is for one website / domain only. If you want to use it on multiple
                                websites / domains you have to purchase more licenses (1 website = 1 license).</p>
                            <ul class="check-list">
                                <li class="title">You Can Do</li>
                                <li> Use on one (1) domain only.</li>
                                <li> Modify or edit as you want.</li>
                                <li> Translate language as you want.</li>
                            </ul>
                            <p><i class=""></i> If any error occured after your edit on code/database, we are not
                                responsible for that.</p>
                            <ul class="close-list">
                                <li class="title">You Can Not Do</li>
                                <li> Resell, distribute, give away or trade by any means to any third party or
                                    individual without permission.
                                </li>
                                <li> Include this product into other products sold on Envato market and its affiliate
                                    websites.
                                </li>
                                <li> Use on more than one (1) domain.</li>
                            </ul>
                            <p>For more information, Please Check <a href="https://codecanyon.net/licenses/faq">Envato
                                    License FAQ</a></p>
                            <button type="button" class="next action-button">I Agree, Next Step</button>
                        </div>
                        <div class="content-wrap with-step">
                            <h4>Server Requirements</h4>
                            <table class="requirement-check">
                                <tbody>
                                <tr>
                                    <td><strong>PHP</strong></td>
                                    <td>Required <strong>PHP</strong> version 7.3 or higher</td>
                                    <td>

                                        <?php
                                        $phpversion = version_compare(PHP_VERSION, '7.3', '>=');
                                        if ($phpversion == true) {
                                            print '<div class="icon check"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
                                        } else {
                                            print '<div class="icon close"><i class="fa fa-times-circle" aria-hidden="true"></i></div>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                $ext_errors = 0;
                                foreach ($extensions as $ext):
                                    ?>
                                    <tr>
                                        <td><strong><?php echo ucwords($ext); ?></strong></td>
                                        <td>Required <strong><?php echo ucwords($ext); ?></strong> PHP Extension</td>
                                        <td>
                                            <?php
                                            if (extension_check($ext)) {
                                                print '<div class="icon check"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
                                            } else {
                                                $ext_errors++;
                                                print '<div class="icon close"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
                                            }
                                            ?>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <button type="button"  class="previous action-button">Previous</button>
                            <button type="button" class="next action-button" <?php echo ($ext_errors > 0) ? 'disabled' : ''; ?> >Next </button>
                        </div>
                        <div class="content-wrap with-step">
                            <h4>Folder Permission</h4>
                            <table class="requirement-check">
                                <tbody>
                                <?php
                                $folder_errors = 0;
                                foreach ($folders as $ext): ?>
                                    <tr>
                                        <td><strong><?php echo str_replace('../','',ucwords($ext)); ?></strong></td>
                                        <td>Required <strong>Permission: 0775</strong></td>
                                        <td>
                                            <?php
                                            if (folder_permission($ext)) {
                                                print '<div class="icon check"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
                                            } else {
                                                print '<div class="icon close"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <button type="button"  class="previous action-button">Previous</button>
                            <button type="button" class="next action-button" <?php echo ($folder_errors > 0) ? 'disabled' : ''; ?> > Next </button>
                        </div>
                        <div class="content-wrap with-step">
                            <h4>Required Database Check</h4>
                            <table class="requirement-check">
                                <tbody>
                                <tr>
                                    <td><strong>Database</strong></td>
                                    <td>Required <strong>database.sql</strong> available</td>
                                    <td>
                                        <?php
                                        $database_errors = 0;
                                        $database = file_exists('database.sql');
                                        if ($database==true) {
                                            print '<div class="icon check"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
                                        }else{
                                            $database_errors++;
                                            print '<div class="icon close"><i class="fa fa-check-circle" aria-hidden="true"></i></div>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button"  class="previous action-button">Previous</button>
                            <button type="button" class="next action-button" <?php echo ($folder_errors > 0) ? 'disabled' : ''; ?> > Next </button>
                        </div>
                        <div class="content-wrap with-step">
                            <h4>Database & Admin Information</h4>
                            <div class="form-block">
                                <h5>Application URL</h5>
                                <div class="form-group">
                                    <label for="app_url">App URL</label>
                                    <input type="text" name="app_url" id="app_url" class="form-control" value="<?php echo home_base_url(); ?>">
                                </div>
                            </div>
                            <div class="form-block">
                                <h5>Database Information</h5>
                                <div class="form-group">
                                    <label for="database_host">Database Host</label>
                                    <input type="text" name="database_host" id="database_host" class="form-control" value="localhost" placeholder="Database Host">
                                </div>
                                <div class="form-group">
                                    <label for="database_username">Database Username</label>
                                    <input type="text" name="database_username" id="database_username" class="form-control" placeholder="Database Username">
                                </div>
                                <div class="form-group">
                                    <label for="database_name">Database Name</label>
                                    <input type="text" name="database_name" id="database_name" class="form-control" placeholder="Database Name">
                                </div>
                                <div class="form-group">
                                    <label for="database_password">Database Username Password</label>
                                    <input type="text" name="database_password" id="database_password" class="form-control" placeholder="Database Password">
                                </div>
                            </div>
                            <div class="form-block">
                                <h5>Admin Login Information</h5>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text"  class="form-control" value="super_admin" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text"  class="form-control" value="12345678" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="admin_email">Email</label>
                                    <input type="text" name="admin_email" id="admin_email" class="form-control" placeholder="Admin Email">
                                </div>
                            </div>
                            <button type="button"  class="previous action-button">Previous</button>
                            <button type="submit" class="action-button"> Install Now </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-inner">
                    &copy; 2020 All Right Reserved By <a href="https://xgenious.com/">XGENIOUS</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>
    $(document).ready(function ($) {
        "use strict";

        var current_fs, next_fs, previous_fs;

        $(document).on('click','.next',function (e) {
            e.preventDefault();

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            $("#progressbar li").eq($(".content-wrap.with-step").index(next_fs)).addClass("active");

            current_fs.hide();
            next_fs.show();
        });

        $(document).on('click',".previous",function (e) {
            e.preventDefault();

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            $("#progressbar li").eq($(".content-wrap.with-step").index(current_fs)).removeClass("active");

            previous_fs.show();
            current_fs.hide();
        });

        $(".submit").click(function () {
            return false;
        })
    })
</script>
</body>
</html>