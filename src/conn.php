<?php
/**
 * conn.php
 *
 * Connection to Database
 *
 * @package    jeasyui-crud-using-pdo
 * @author     Vick Kumar <veeksie@gmail.com>
 * @copyright  2016 Vick Kumar <https://github.com/vk91/>
 * @license    Attribution 4.0 International (CC BY 4.0) <http://creativecommons.org/licenses/by/4.0/>
 * @build      2016.03
 * @created    3/18/2016
 * @version    1.0
 */

$username = "root"; // Set username for database access
$password = ""; // Set password for database access
$host = "localhost"; // Set host for database access, usually 'localhost' or '127.0.0.1'
$dbname = "pts_db_v1"; // Set name of database

// Attempt to connect to the database using try, and catch
try
{
    // Declare new PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    // Throw error when error exception is caught
    echo "Connection failed: " . $e->getMessage();
}