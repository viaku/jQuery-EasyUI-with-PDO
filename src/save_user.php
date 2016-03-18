<?php
/**
 * save_user.php
 *
 * Short Description
 *
 * @package    jeasyui-crud-using-pdo
 * @author     Vick Kumar <veeksie@gmail.com>
 * @copyright  2016 Vick Kumar <https://github.com/vk91/>
 * @license    Attribution 4.0 International (CC BY 4.0) <http://creativecommons.org/licenses/by/4.0/>
 * @build      2016.03
 * @created    3/18/2016
 * @version    1.0
 */

$user = htmlspecialchars($_REQUEST['username']);
$firstname = htmlspecialchars($_REQUEST['firstname']);
$lastname = htmlspecialchars($_REQUEST['lastname']);
$password = htmlspecialchars($_REQUEST['password']);

// Hash the password using php's built in password_hash func
$newpass = password_hash("$password", PASSWORD_DEFAULT);
$email = htmlspecialchars($_REQUEST['email']);

// Include conn.php for database details
include 'conn.php';


// prepare sql and bind parameters
$stmt = $conn->prepare("insert into users(username,firstname,lastname,password,email)
    VALUES (:username, :firstname, :lastname, :password, :email)");

// Bind params in sql statement to variables used
$stmt->bindParam(':username', $user);
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':password', $newpass);
$stmt->bindParam(':email', $email);

// Execute the sql inserts
if($stmt->execute())
{
    // if success, output this json
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
    // if error, throw this json message
    echo json_encode(array('errorMsg'=>'Some errors occured.'));
}

