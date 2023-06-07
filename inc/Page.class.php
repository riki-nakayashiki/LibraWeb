<?php

require_once("inc/Entity/User.class.php");

class Page
{
    /**
     * @return string
     */
    public static function pageHeader(string $title = ""): string
    {
        $htmlHeader = '
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
                            <link rel="stylesheet" href="./css/style.css">
                            <title>' . $title . '</title>
                        </head>
                        <body>
                        ';
        return $htmlHeader;
    }

    /**
     * @return string
     */
    public static function pageBanner(): string
    {
        $adminMenu = "";

        session_start();
        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            $loginUser = 'USER NAME : ' . $user->getFirstName() . ' ' . $user->getLastName();

            $loginButton = '<a href="logout.php" class="bg-info text-white">Logout</a>';

            //Check if the user is admin.
            if ($user->getUserType() === 'Admin') {
                $adminMenu = '<li><a href="#">Admin page</a></li>';
            }

        } else {
            $loginUser = '';
            $loginButton = '<a href="login.php" class="bg-info text-white">Login</a>';
        }

        $htmlBanner = '
                        <header class="header-main">
                            <section  class="d-flex justify-content-between align-items-center">
                                <figure class="d-flex align-items-center justify-content-between">
                                    <img src="./img/logo.png" alt="logo">
                                    <figcaption class="d-none d-md-flex">
                                        <h1>
                                            LibraWeb
                                        </h1>
                                    </figcaption>
                                </figure>
                                <h2>' . $loginUser . '</h2>
                                ' . $loginButton . '
                            </section>
                        </header>
                        <nav class="nav-main">
                            <ul class="d-none d-md-flex justify-content-between">
                                <li><a href="index.php">About</a></li>
                                <li><a href="#">Books</a></li>
                                <li><a href="#">Rooms</a></li>
                                <li><a href="#">Contact / Reviews</a></li>
                                ' . $adminMenu . '
                            </ul>
                            <details class="d-md-none">
                                <summary class="fa-solid fa-bars d-flex justify-content-end">
                                </summary>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Books</a></li>
                                    <li><a href="#">Rooms</a></li>
                                    <li><a href="#">Contact/Reviews</a></li>
                                    ' . $adminMenu . '
                                </ul>
                            </details>
                        </nav>
                        ';
        return $htmlBanner;
    }

    /**
     * @return string
     */
    public static function mainContent(): string
    {
        $mainContent = '<main>';
        $mainContent .= self::newsContent();
        $mainContent .= self::informationRow();
        $mainContent .= '</main>';

        return $mainContent;
    }

    /**
     *@return string 
     */

    public static function informationRow(): string
    {
        $images = array(
            array(
                'src' => "./img/labtop.jpg",
                'caption' => "10:00 - 17:00",
                'title' => "Laptop Rooms"
            ),
            array(
                'src' => "./img/library.jpg",
                'caption' => "10:00 - 19:00",
                'title' => "Study Rooms"
            ),
            array(
                'src' => "./img/meeting.jpg",
                'caption' => "10:00 - 16:00",
                'title' => "Meeting Rooms"
            ),
            array(
                'src' => "./img/reading.jpg",
                'caption' => "10:00 - 17:00",
                'title' => "Public reading Rooms"
            )
        );

        $row = '<section class = "infor">
                    <h2>Services</h2>
                    <aside class = "slides">    
                ';

        foreach ($images as $image) {
            $row .= '
                <figure>
                    <img src="' . $image['src'] . '">
                    <figcaption>
                        <i class="fa-solid fa-clock"></i>
                        
                            <h5>' . $image['title'] . '</h5>
                            <h6>' . $image['caption'] . '</h6>
                    
                    </figcaption>
                </figure>
            ';
        }

        $row .= '
            </aside>
        </section>';

        return $row;
    }

    /**
     * @return string
     */
    public static function newsContent(): string
    {
        $news = '
        <section class="news-highlights">
            <article>
                <h2>News & Highlights</h2>
            </article>
            <section class="news">
                <figure>
                    <img src="./img/smart-recommendation.jpg" alt="pic-01">
                    <figcaption>
                        <h4>
                            LibraWeb Introduces Smart Recommendation Engine
                        </h4>
                        <p>
                            LibraWebs Library Management System integrates a cutting-edge recommendation engine, leveraging machine learning algorithms to provide personalized book recommendations to library patrons. This intelligent feature enhances the reading experience, helping users discover books tailored to their interests.
                        </p>
                        <a href="#">Learn More</a>
                    </figcaption>
                </figure>
                <figure>
                    <img src="./img/cataloging.jpg" alt="pic-02">
                    <figcaption>
                        <h4>
                            Streamlined Cataloging
                        </h4>
                        <p>
                            LibraWeb unveils an upgraded Library Management System with a streamlined cataloging module. The new system simplifies the process of cataloging books, allowing librarians to efficiently organize and classify the librarys collection, ultimately saving time and improving accessibility for library users.
                        </p>
                        <a href="#">Learn More</a>
                    </figcaption>
                </figure>
                <figure>
                    <img src="./img/award-winning.jpg" alt="pic-03">
                    <figcaption>
                        <h4>
                            Award-Winning Innovation
                        </h4>
                        <p>
                            Our Library Management System receives industry acclaim, winning a prestigious award for its outstanding contribution to library automation. The systems user-friendly interface, advanced search capabilities, and robust administrative features set a new standard for library management software.
                        </p>
                        <a href="#">Learn More</a>
                    </figcaption>
                </figure>
                <figure>
                    <img src="./img/reading-culture.jpg" alt="pic-04">
                    <figcaption>
                        <h4>
                            LibraWeb Partners with National Literacy Campaign
                        </h4>
                        <p>
                            LibraWebs Library Management System joins forces with a national literacy campaign, aiming to promote reading culture and literacy across the country. This partnership empowers libraries to efficiently manage their resources and support community engagement, fostering a love for reading and knowledge in society.
                        </p>
                        <a href="#">Learn More</a>
                    </figcaption>
                </figure>
            </section>
        </section>
        ';
        return $news;
    }

    /**
     * @return string
     */
    public static function pageFooter(): string
    {
        $htmlFooter = '
                <footer class="footer">
                    <section class="contact-follow">
                        <article class="contact">
                            <h4>Contact Us</h4>
                            <p>Address:</p>
                            <small>889 W Pender St, Vancouver, BC V6C 3B2</small>
                            <p>Phone:</p>
                            <a href="tel:123-456-7890">123-456-7890</a>
                            <p>General Inquires:</p>
                            <a href = "mailto: LibraWeb@email.com">LibraWeb@mail.com</a>
                        </article>
                        <article class="follow">
                            <h4>Follow Us</h4>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </article>
                    </section>
                    <section class="copyright">
                        <p>
                            &copy; copyright LibraWeb co. Designed by: Riki Nakayashiki, Junhyeok Kang and Monika Nemcova
                        </p>
                        <p>
                        <a href="#">Terms of use</a> |
                        <a href="#">Privacy policy</a> |
                        <a href="#">Careers</a>
                        </p>
                    </section>
                </footer>
                ';
        return $htmlFooter;
    }

    /**
     * @return string
     */
    public static function pageEnd(): string
    {
        $htmlPageEnd = '
                </body>
                </html>';
        return $htmlPageEnd;
    }


    public static function roomTable($roomList)
    {
        $lowercasePurpose = strtolower($roomList);
        // var_dump($lowercasePurpose);
        $rooms = RoomDAO::getRoomByPurpose($lowercasePurpose);

        // get the list of rooms
        $roomNames = array();
        foreach ($rooms as $room) {
            $roomName = $room->getRoomName();
            if (!in_array($roomName, $roomNames)) {
                $roomNames[] = $roomName;
            }
        }

        // build table by using name of Room 
        $roomTables = '';
        foreach ($roomNames as $roomName) {
            $roomTables .= self::buildRoomTable($roomName, $rooms);
        }

        return $roomTables;
    }

    private static function buildRoomTable($roomName, $rooms)
    {
        $roomTable = '
            <table class="room-info">
                <thead>
                    <tr>
                        <th scope="col">Room Id</th>
                        <th scope="col">Room</th>
                        <th scope="col">capacity</th>
                        <th scope="col">Location</th>
                        <th scope="col">Start</th>
                        <th scope="col">End</th>
                    </tr>
                </thead>
                <tbody>';

        foreach ($rooms as $room) {
            $roomStatus = $room->getStatus();
            if (!$roomStatus) {
                if ($room->getRoomName() === $roomName) {
                    $roomTable .= self::buildRoomRow($room);
                }

            }
        }

        $roomTable .= '</tbody>
            </table>';

        return $roomTable;
    }

    private static function buildRoomRow($newRoom)
    {
        $statusColor = $newRoom->getStatus() ? 'red' : 'gainsboro';
        $row = '
            <tr style="background-color: ' . $statusColor . ';">
                <td>' . $newRoom->getId() . '</td>
                <td>' . $newRoom->getRoomName() . '</td>
                <td>' . $newRoom->getCapacity() . '</td>
                <td>' . $newRoom->getLocation() . '</td>
                <td>' . $newRoom->getStartTime() . '</td>
                <td>' . $newRoom->getEndTime() . '</td>
            </tr>';
        return $row;
    }
    /**
     * @return string
     */
    public static function pageTable($bookList): string
    {
        $table = '
            <table class="table caption-top">
            <thead>
            <tr>
                <th scope="col"><a href="?sortBy=id">#</a></th>
                <th scope="col"><a href="?sortBy=isbn">Isbn</a></th>
                <th scope="col"><a href="?sortBy=title">Title</a></th>
                <th scope="col"><a href="?sortBy=author">Author</a></th>
                <th scope="col"><a href="?sortBy=publication">Publication</a></th>
                <th scope="col"><a href="?sortBy=publisher">Publisher</a></th>
            </tr>
            </thead>
            <tbody>';
        foreach ($bookList as $book) {
            $table .= self::rows($book);
        }
        $table .= '</tbody>
            </table>
        ';

        return $table;
    }

    public static function rows($books)
    {
        $row = '
            <tr>
                <td>' . $books->getId() . '</td>
                <td>' . $books->getIsbn() . '</td>
                <td>' . $books->getBookTitle() . '</td>
                <td>' . $books->getBookAuthor() . '</td>
                <td>' . $books->getPublication() . '</td>
                <td>' . $books->getPublisher() . '</td>
            </tr>
        ';

        return $row;
    }

    public static function roomRow(): string
    {
        $images = array(
            array(
                'src' => "./img/pc.jpg",
                'caption' => "10:00 - 17:00",
                'title' => "Laptop Rooms"
            ),
            array(
                'src' => "./img/study.jpg",
                'caption' => "10:00 - 19:00",
                'title' => "Study Rooms"
            ),
            array(
                'src' => "./img/meet.jpg",
                'caption' => "10:00 - 16:00",
                'title' => "Meeting Rooms"
            )
        );

        $row = '<section class="room">
                    <h2>rooms</h2>
                    <aside class="slides">    
                ';

        foreach ($images as $image) {
            $row .= '
                <figure>
                    <img src="' . $image['src'] . '">
                    <figcaption>
                        <h5>' . $image['title'] . '</h5>
                        <h6>' . $image['caption'] . '</h6>
                        <a href="reservation.php?purpose=' . $image['title'] . '">Reserve</a>
                    </figcaption>
                </figure>
            ';
        }

        $row .= '
            </aside>
        </section>';

        return $row;
    }


    // page of reservation with room information
    public static function createReservationPage($purpose)
    {
        // make it lowercase 
        $lowercasePurpose = strtolower($purpose);
        // var_dump($lowercasePurpose);
        $rooms = RoomDAO::getRoomByPurpose($lowercasePurpose);

        $page = '<h2>Make a Reservation!</h2>';

        foreach ($rooms as $room) {
            $page .= '<div class="room-info ' . ($room->getStatus() ? 'available' : 'unavailable') . '">';
            $page .= '<h3>Room Name: ' . $room->getRoomName() . '</h3>';
            $page .= '<p>Capacity: ' . $room->getCapacity() . '</p>';
            $page .= '<p>Location: ' . $room->getLocation() . '</p>';
            $page .= '<p>Purpose: ' . $room->getPurpose() . '</p>';
            $page .= '<strong>Status: ' . ($room->getStatus() ? 'available' : 'unavailable') . '</strong>';
            $page .= '</div>';
        }

        return $page;
    }



    //success message
    public static function getSuccessMessage()
    {
        $htmlSuccess = '
        <article class="message">
            <aside class = "current">
                <h1>Reservation Successful!</h1>
                <p>Your reservation has been successfully made.</p>
                <p>Thank you for choosing our service.</p>
                <a href="room.php">Rooms</a>
            </aside>
        </article>
        ';
        return $htmlSuccess;
    }
    public static function getCurrentDate()
    {
        $currentDate = date('Y-m-d', strtotime('-1 day'));
        $htmlCurrentDate = '
        <article class="message">
            <aside class = "current">
                <h4>Available only: ' . $currentDate . '</h4>
                <h5>If you would like to make a reservation in advance, please call us</h5>
            </aside>
        </article>
        ';
        return $htmlCurrentDate;
    }
    //success message
    public static function getFailMessage()
    {
        $htmlSuccess = '
        <article class="message">
            <aside class = "current">
                <h1>Reservation Fail!</h1>
                <p>Your reservation has been failed.</p>
                <p>Please Try again</p>
                <a href="room.php">Rooms</a>
            </aside>
        </article>
        ';
        return $htmlSuccess;
    }
    // reservation page 
    public static function reservationRow($purpose): string
    {
        // make it lowercase 
        $lowercasePurpose = strtolower($purpose);
        // var_dump($lowercasePurpose);
        $rooms = RoomDAO::getRoomByPurpose($lowercasePurpose);


        $htmlRoom = '
        <form class="reservation-form" action="reservation.php" method="post" action="' . $_SERVER["PHP_SELF"] . '">
            <label for="roomId">Room ID:</label>
            <select name="roomId" id="roomId">';

        // Iterate through the rooms to populate room IDs
        foreach ($rooms as $room) {
            $roomId = $room->getId();
            $roomStatus = $room->getStatus();
            if (!$roomStatus) {
                $htmlRoom .= '<option value="' . $roomId . '">' . $roomId . '</option>';
            }
        }

        $htmlRoom .= '</select>
                
        <label for="roomName">Select Room:</label>
        <select name="roomName" id="roomName">';

        // Delete duplicate room names
        $uniqueRoomNames = array();

        foreach ($rooms as $room) {
            $roomName = $room->getRoomName();
            if (!in_array($roomName, $uniqueRoomNames)) {
                $htmlRoom .= '<option value="' . $roomName . '">' . $roomName . '</option>';
                $uniqueRoomNames[] = $roomName; // Exclude duplicates and add RoomName to the array
            }
        }
        $previousDate = date('Y-m-d', strtotime('-1 day'));
        $htmlRoom .= '</select>
                
        <label for="date">Select Date:</label>
        <input type="date" name="date" id="date" min="' . $previousDate . '" max="' . $previousDate . '" required>';

        // Generating reservation start time options
        $startStartTime = 10;
        $endStartTime = 15;

        if ($lowercasePurpose === 'laptop') {
            $endStartTime = 16;
        } elseif ($lowercasePurpose === 'study') {
            $endStartTime = 18;
        }

        $htmlRoom .= '<label for="start-time">Start Time:</label>';
        $htmlRoom .= '<select name="start-time" id="start-time">';

        for ($hour = $startStartTime; $hour <= $endStartTime; $hour++) {
            $htmlRoom .= '<option value="' . $hour . ':00">' . $hour . ':00</option>';
        }

        $htmlRoom .= '</select>';

        // Generating reservation end time options
        $startEndTime = $startStartTime + 1;
        $endEndTime = $endStartTime + 1;

        $htmlRoom .= '<label for="end-time">End Time:</label>';
        $htmlRoom .= '<select name="end-time" id="end-time">';

        for ($hour = $startEndTime; $hour <= $endEndTime; $hour++) {
            $htmlRoom .= '<option value="' . $hour . ':00">' . $hour . ':00</option>';
        }

        $htmlRoom .= '</select>';

        $htmlRoom .= '<input type="submit" value="Reserve">
        </form>';

        return $htmlRoom;


    }



    public static function filter()
    {
        $filtering = '
        <nav class="navbar bg-body-tertiary">
          <form class="d-flex" role="search" method="POST" action="' . $_SERVER["PHP_SELF"] . '">
            <input class="form-control me-2" type="search" name="search" placeholder="Search a book" aria-label="Search">
            <input class="btn btn-outline-success" type="submit" value="Search">
          </form>
        </nav>
        ';

        return $filtering;
    }

    public static function loginForm()
    {
        $loginForm = '
        <form method="POST" action="' . $_SERVER["PHP_SELF"] . '" class="loginForm">
            <table>
                <tbody>
                    <tr>
                        <td><label for="loginEmail">Email: </label></td>
                        <td><input type="email" placeholder="Enter Email" name="email" id="loginEmail"></td>
                    </tr>
                    <tr>
                        <td><label for="loginPassword">Password:</label></td>
                        <td><input type="password" name="password" id="loginPassword" placeholder="Password"></td>
                    </tr>
                    <tr class="loginButton">
                        <td><input type="submit" class="btn" value="Login"></td>
                    </tr>
                </tbody>
            </table>
        </form>
        ';
        return $loginForm;
    }

    public static function loginFailed()
    {
        return '
        <div class="alert alert-danger" role="alert">
        Wrong Email or Password!
        </div>
        ';
    }
    public static function logOut()
    {
        return '<h1 class="text-center">You are Logged Out!</h1>';
    }
}