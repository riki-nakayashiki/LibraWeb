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
                            <title>' . $title . '</title>
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
                            <link rel="stylesheet" href="./css/style.css">
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
        $htmlBanner = '
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
        $mainContent .= '</main>';

        return $mainContent;
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
                    <img src="/img/smart-recommendation.jpg" alt="pic-01">
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
                    <img src="/img/cataloging.jpg" alt="pic-02">
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
                    <img src="/img/award-winning.jpg" alt="pic-03">
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
                    <img src="/img/reading-culture.jpg" alt="pic-04">
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

}