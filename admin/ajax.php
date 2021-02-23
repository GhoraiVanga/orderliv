<?php
$action = $_REQUEST['action'];

if (!empty($action)) {
    require_once 'includes/Player.php';
    $obj = new Player();
}

if ($action == 'adduser' && !empty($_POST)) {
    $name = $_POST['name'];
    $website=$_POST['WebSite'];
    $email=$_POST['email'];
    $comment=$_POST['Comment'];
    $date=$_POST['Date'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
 
    $status=$_POST['status'];
    $eid=$_POST['eid'];

    $playerId = (!empty($_POST['userid'])) ? $_POST['userid'] : '';

    // file (photo) upload
  
    if (!empty( $status['status'])) {
      
        $playerData = [
            'name' => $name,
            'city' => $city,
            'phone' => $phone,
            'status' => $status,
            'website'=>$website,
            'email'=>$email,
            'comment' =>$comment,
            'date' =>$date,
            'eid' =>$eid,

        ];
    } else {
        $playerData = [
               'name' => $name,
            'city' => $city,
            'phone' => $phone,
            'status' => $status,
            'website'=>$website,
            'email'=>$email,
            'comment' =>$comment,
            'date' =>$date,
             'eid' =>$eid,
        ];
    }

    if ($playerId) {
        $obj->update($playerData, $playerId);
    } else {
        $playerId = $obj->add($playerData);
    }

    if (!empty($playerId)) {
        $player = $obj->getRow('id', $playerId);
        echo json_encode($player);
        exit();
    }
}

if ($action == "getusers") {
    $page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
    $limit = 60;
    $start = ($page - 1) * $limit;

    $players = $obj->getRows($start, $limit);
    if (!empty($players)) {
        $playerslist = $players;
    } else {
        $playerslist = [];
    }
    $total = $obj->getCount();
    $playerArr = ['count' => $total, 'players' => $playerslist];
    echo json_encode($playerArr);
    exit();
}

if ($action == "getuser") {
    $playerId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    if (!empty($playerId)) {
        $player = $obj->getRow('id', $playerId);
        echo json_encode($player);
        exit();
    }
}

if ($action == "deleteuser") {
    $playerId = (!empty($_GET['id'])) ? $_GET['id'] : '';
    if (!empty($playerId)) {
        $isDeleted = $obj->deleteRow($playerId);
        if ($isDeleted) {
            $message = ['deleted' => 1];
        } else {
            $message = ['deleted' => 0];
        }
        echo json_encode($message);
        exit();
    }
}

if ($action == 'search') {
    $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) : '';
    $results = $obj->searchPlayer($queryString);
    echo json_encode($results);
    exit();
}
