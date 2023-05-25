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