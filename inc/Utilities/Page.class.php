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
                                <li><a href="index.php">About</a></li>
                                <li><a href="books.php">Books</a></li>
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
                'title' => "Reading Rooms"
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

    /**
     * @return string
     */
    public static function pageTable($bookList) : string {
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
                foreach($bookList as $book) {
                    $table .= self::rows($book);
                }
            $table .= '</tbody>
            </table>
        ';

        return $table;
    }

    public static function rows($books) {
        $row = '
            <tr>
                <td>'.$books->getId().'</td>
                <td>'.$books->getIsbn().'</td>
                <td>'.$books->getBookTitle().'</td>
                <td>'.$books->getBookAuthor().'</td>
                <td>'.$books->getPublication().'</td>
                <td>'.$books->getPublisher().'</td>
            </tr>
        ';

        return $row;
    }

    public static function filter(){
        $filtering = '
        <nav class="navbar bg-body-tertiary">
          <form class="d-flex" role="search" method="POST" action="'.$_SERVER["PHP_SELF"].'">
            <input class="form-control me-2" type="search" name="search" placeholder="Search a book" aria-label="Search">
            <input class="btn btn-outline-success" type="submit" value="Search">
          </form>
        </nav>
        ';

        return $filtering;
    }

}