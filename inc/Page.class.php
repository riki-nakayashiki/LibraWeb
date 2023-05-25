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
        $mainContent .=self::informationRow();
        $mainContent .= '</main>';

        return $mainContent;
    }

     /**
     *@return string 
     */

     public static function informationRow(): string{
        $images = array(
            "./img/labtop.jpg",
            "./img/library.jpg",
            "./img/meeting.jpg",
            "./img/reading.jpg"
        );
        $row = '<section class = "infor">
                    <h2>Services</h2>
                    <aside class = "slides">    
                ';

        foreach ($images as $image) {
            $row .= '
                <figure>
                    <img src = "'. $image .'">
                    <figcaption>
                        <i class="fa-solid fa-clock"></i>
                        <h5>
                            10:00 - 17:00
                        </h5>
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