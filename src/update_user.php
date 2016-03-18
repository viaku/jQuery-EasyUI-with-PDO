<?php
/**
 * update_user.php
 *
 * Short Description
 *
 * @package    jeasyui-crud-mysqli
 * @author     Vick Kumar <veeksie@gmail.com>
 * @copyright  2016 Vick Kumar <https://github.com/vk91/>
 * @license    Attribution 4.0 International (CC BY 4.0) <http://creativecommons.org/licenses/by/4.0/>
 * @build      2016.03
 * @created    3/18/2016
 * @version    1.0
 */

// Default code from previous version of update_user.php
$id = intval($_REQUEST['id']);
$user = htmlspecialchars($_REQUEST['username']);
$firstname = htmlspecialchars($_REQUEST['firstname']);
$lastname = htmlspecialchars($_REQUEST['lastname']);
$password = htmlspecialchars($_REQUEST['password']);
$newpass = password_hash("$password", PASSWORD_DEFAULT);
$email = htmlspecialchars($_REQUEST['email']);

// Include conn.php for database details
include 'conn.php';

// SQL to update users table
$sql = "update users set username='$user',firstname='$firstname',lastname='$lastname',password='$newpass',email='$email' where id=$id";

// Prepare statement
$stmt = $conn->prepare($sql);

// execute the query
if ($stmt->execute())
{
    // if stmt was executed, output this json
    echo json_encode(array(
        'id' => $id,
        'username' => $user,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'password' => $newpass,
        'email' => $email
    ));
}
else
{
    // otherwise error message json
    echo json_encode(array('errorMsg'=>'Some errors occured.'));
}

