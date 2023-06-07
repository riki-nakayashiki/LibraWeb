<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Room.class.php");
require_once("./inc/Entities/ReservedRoom.class.php");
require_once("./inc/Utilities/PDOService.class.php");
require_once("./inc/Utilities/DAO/RoomDAO.class.php");
require_once("./inc/Utilities/DAO/ReservedRoomDAO.class.php");
require_once("./inc/Page.class.php");

// session_start();
RoomDAO::startDb();
ReservedRoomDAO::startDb();
echo Page::pageHeader("Reservation");
echo Page::pageBanner();
// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $roomId = intval($_POST['roomId']);
    $roomName = $_POST['roomName'];
    // just give the userId
    $userId = 1001;
    $date = $_POST['date'];
    $startTime = $_POST['start-time'];
    $endTime = $_POST['end-time'];
    $existReserved = ReservedRoomDAO::getReservedByRoomId($roomId);

    if(!$existReserved) {
        // change the room Status to true
        RoomDAO::updateRoomStatus($roomId);
        // Create a ReservedRoom object
        $reservedRoom = new ReservedRoom();
        $reservedRoom->setRoomId($roomId);
        $reservedRoom->setUserId($userId);
        $reservedRoom->setRoomName($roomName);
        $reservedRoom->setDate($date);
        $reservedRoom->setStartTime($startTime);
        $reservedRoom->setEndTime($endTime);
        // Insert the reserved room into the database
        $insertedId = ReservedRoomDAO::insertReservedRoom($reservedRoom);
    
        // Check if the insertion was successful
        if ($insertedId) {
            // Redirect to the success page
            // header('Location: success.php');
            echo page::getSuccessMessage();
            exit;
        } else {
            echo page::getFailMessage();
        }

    } else {
        echo $errorMessage = "Room already exists";
    }

};
if (isset($_GET['purpose'])) {
    $purpose = $_GET['purpose'];
    $splitPurpose = explode(' ', $purpose);
    $currentDate = date('Y-m-d');
    echo Page::getCurrentDate();
?>
    <section class="room-page">
        <aisde class = "room-table">
            <?php echo Page::roomTable($splitPurpose[0]); ?>
        </aisde>
        <?php echo Page::reservationRow($splitPurpose[0]); ?>
    </section>
<?php
echo Page::pageFooter();
echo Page::pageEnd();
}
?>



