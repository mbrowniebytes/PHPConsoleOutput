<?php
namespace Console;

class ConsoleOutput
{
    /*
        Text attributes
        0	All attributes off
        1	Bold on
        4	Underscore (on monochrome display adapter only)
        5	Blink on
        7	Reverse video on
        8	Concealed on

        Foreground colors
        30	Black
        31	Red
        32	Green
        33	Yellow
        34	Blue
        35	Magenta
        36	Cyan
        37	White

        Background colors
        40	Black
        41	Red
        42	Green
        43	Yellow
        44	Blue
        45	Magenta
        46	Cyan
        47	White
     */

    /**
     * show colored info msg on console
     *
     * @param string $msg
     */
    public function showInfo($msg)
    {
        $color_text = "\033[35m";   // purple on default
        $reset_text = "\033[0m";
        file_put_contents('php://stderr', $color_text . $msg . $reset_text . PHP_EOL, FILE_APPEND);
    }

    /**
     * show colored warning msg on console
     *
     * @param string $msg
     */
    public function showWarning($msg)
    {
        $color_text = "\033[31m";     // red on default
        $reset_text = "\033[0m";
        file_put_contents('php://stderr', $color_text . $msg . $reset_text . PHP_EOL, FILE_APPEND);
    }

    /**
     *  show colored error msg on console
     *
     * @param string $msg
     */
    public function showError($msg)
    {
        $color_text = "\033[37;41m"; // white on red
        $reset_text = "\033[0m";
        file_put_contents('php://stderr', $color_text . $msg . $reset_text . PHP_EOL, FILE_APPEND);
    }
}
