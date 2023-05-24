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
                            <ul class="d-none d-md-flex justify-content-around">
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
        $mainContent .= '</main>';

        return $mainContent;
    }

    /**
     * @return string
     */
    public static function pageFooter(): string
    {
        $htmlFooter = '
                <footer>
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