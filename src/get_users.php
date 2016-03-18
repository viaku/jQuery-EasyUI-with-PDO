<?php
/**
 * get_users.php
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

// Default code from previous version of get_users.php
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$offset = ($page-1)*$rows;
$result = array();

// Include conn.php for database details
include 'conn.php';

// Rows Count Query
$rcq = "select count(*) from users";

// Prepare query
$res = $conn->prepare($rcq);

// Execute the query
$res->execute();

// Number of Rows
$nor = $res->fetchColumn();

// Place into $result array
$result["total"] = $nor[0];

// Create items array
$items = array();

// Get all users sql
$gaus = "select * from users limit $offset,$rows";

// Query above
$nq = $conn->query($gaus)->fetchAll(PDO::FETCH_ASSOC);

// items array
$items = array();

// Store queried results into an array via array push
if(count($nq) > 0)
{
    foreach($nq as $row)
    {
        // array push
        array_push($items, $row);
    }
}

// Add items to array rows
$result["rows"] = $items;

// Shoot the json out brah
echo json_encode($result);

