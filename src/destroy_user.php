<?php
/**
 * destroy_user.php
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

// Default code from previous version of destroy_user.php
$id = intval($_REQUEST['id']);

// Include conn.php for database details
include 'conn.php';

// sql to delete a record
$sql = "delete from users where id='$id'";

// execute ->exec($sql)
if ($conn->exec($sql))
{
    // if exec ran successfully, outpit this
    echo json_encode(array('success'=>true));
}
else
{
    // otherwise output this error message
    echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
