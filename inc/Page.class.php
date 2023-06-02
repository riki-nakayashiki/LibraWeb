<?php

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
        // Temporary code
        $userType = 1;
        $adminMenu = "";
        if ($userType == 1) {
            $adminMenu = '<li><a href="#">Admin page</a></li>';
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
                                <a href="#" class="bg-info text-white">Login</a>
                            </section>
                        </header>
                        <nav class="nav-main">
                            <ul class="d-none d-md-flex justify-content-between">
                                <li><a href="#">About</a></li>
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

     public static function informationRow(): string{
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
                    <img src="'. $image['src'] .'">
                    <figcaption>
                        <i class="fa-solid fa-clock"></i>
                        
                            <h5>'. $image['title'] .'</h5>
                            <h6>'. $image['caption'] .'</h6>
                    
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
    public static function newsContent() : string {
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


    public static function roomTable( $roomList) {
        $roomTable = '
            <table class = "room">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Room Name</th>
                        <th scope="col">capacity</th>
                        <th scope="col">Location</th>
                        <th scope="col">Purpose</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach($roomList as $room) {
                        $roomTable .= self::buildRoomRow($room);
                    }
        $roomTable .= '</tbody>
            </table>
        ';

        return $roomTable;
    }

    private static function buildRoomRow($newRoom){
        $row = '
            <tr>
                <td>'.$newRoom->getId().'</td>
                <td>'.$newRoom->getRoomName().'</td>
                <td>'.$newRoom->getCapacity().'</td>
                <td>'.$newRoom->getLocation().'</td>
                <td>'.$newRoom->getPurpose().'</td>
                <td>'.$newRoom->getStatus().'</td>
            </tr>
        ';

        return $row;
    }
    public static function roomRow(): string {
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
                    <img src="'. $image['src'] .'">
                    <figcaption>
                        <h5>'. $image['title'] .'</h5>
                        <h6>'. $image['caption'] .'</h6>
                        <a href="reservation.php?purpose='. $image['title'] .'">Reserve</a>
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
    public static function createReservationPage($purpose) {
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




    // reservation page 
    public static function reservationRow($purpose): string {
        // make it lowercase 
        $lowercasePurpose = strtolower($purpose);
        // var_dump($lowercasePurpose);
        $rooms = RoomDAO::getRoomByPurpose($lowercasePurpose);

        $htmlRoom = '
        <form class="reservation-form" action="reservation.php" method="post" action="'. $_SERVER["PHP_SELF"] .'">
            <label for="room">Select Room:</label>
            <select name="reservation" id="reservation">';

        foreach ($rooms as $room) {
            $htmlRoom .= '<option value="' . $room->getRoomName() . '">' . $room->getRoomName() . '</option>';
        }

        $htmlRoom .= '</select>

        <label for="date">Select Date:</label>
        <input type="date" name="date" id="date" required>';

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



}