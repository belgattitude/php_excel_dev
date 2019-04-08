<?php

declare(strict_types=1);
/*
  +---------------------------------------------------------------------------+
  | ExcelFormat                                                               |
  |                                                                           |
  | Reference file for NuSphere PHPEd (and possibly other IDE's) for use with |
  | php_excel interface to libxl by Ilia Alshanetsky <ilia@ilia.ws>           |
  |                                                                           |
  | php_excel "PECL" style module (http://github.com/iliaal/php_excel)        |
  | libxl library (http://www.libxl.com)                                      |
  |                                                                           |
  | Rob Gagnon <rgagnon24@gmail.com>                                          |
  +---------------------------------------------------------------------------+
*/
class ExcelFormat
{
    public const COLOR_BLACK              = 8;
    public const COLOR_WHITE              = 9;
    public const COLOR_RED                = 10;
    public const COLOR_BRIGHTGREEN        = 11;
    public const COLOR_BLUE               = 12;
    public const COLOR_YELLOW             = 13;
    public const COLOR_PINK               = 14;
    public const COLOR_TURQUOISE          = 15;
    public const COLOR_DARKRED            = 16;
    public const COLOR_GREEN              = 17;
    public const COLOR_DARKBLUE           = 18;
    public const COLOR_DARKYELLOW         = 19;
    public const COLOR_VIOLET             = 20;
    public const COLOR_TEAL               = 21;
    public const COLOR_GRAY25             = 22;
    public const COLOR_GRAY50             = 23;
    public const COLOR_PERIWINKLE_CF      = 24;
    public const COLOR_PLUM_CF            = 25;
    public const COLOR_IVORY_CF           = 26;
    public const COLOR_LIGHTTURQUOISE_CF  = 27;
    public const COLOR_DARKPURPLE_CF      = 28;
    public const COLOR_CORAL_CF           = 29;
    public const COLOR_OCEANBLUE_CF       = 30;
    public const COLOR_ICEBLUE_CF         = 31;
    public const COLOR_DARKBLUE_CL        = 32;
    public const COLOR_PINK_CL            = 33;
    public const COLOR_YELLOW_CL          = 34;
    public const COLOR_TURQUOISE_CL       = 35;
    public const COLOR_VIOLET_CL          = 36;
    public const COLOR_DARKRED_CL         = 37;
    public const COLOR_TEAL_CL            = 38;
    public const COLOR_BLUE_CL            = 39;
    public const COLOR_SKYBLUE            = 40;
    public const COLOR_LIGHTTURQUOISE     = 41;
    public const COLOR_LIGHTGREEN         = 42;
    public const COLOR_LIGHTYELLOW        = 43;
    public const COLOR_PALEBLUE           = 44;
    public const COLOR_ROSE               = 45;
    public const COLOR_LAVENDER           = 46;
    public const COLOR_TAN                = 47;
    public const COLOR_LIGHTBLUE          = 48;
    public const COLOR_AQUA               = 49;
    public const COLOR_LIME               = 50;
    public const COLOR_GOLD               = 51;
    public const COLOR_LIGHTORANGE        = 52;
    public const COLOR_ORANGE             = 53;
    public const COLOR_BLUEGRAY           = 54;
    public const COLOR_GRAY40             = 55;
    public const COLOR_DARKTEAL           = 56;
    public const COLOR_SEAGREEN           = 57;
    public const COLOR_DARKGREEN          = 58;
    public const COLOR_OLIVEGREEN         = 59;
    public const COLOR_BROWN              = 60;
    public const COLOR_PLUM               = 61;
    public const COLOR_INDIGO             = 62;
    public const COLOR_GRAY80             = 63;
    public const COLOR_DEFAULT_FOREGROUND = 64;
    public const COLOR_DEFAULT_BACKGROUND = 65;

    public const AS_DATE           = 1;
    public const AS_FORMULA        = 2;
    public const AS_NUMERIC_STRING = 3;

    public const NUMFORMAT_GENERAL                 = 0;
    public const NUMFORMAT_NUMBER                  = 1;
    public const NUMFORMAT_NUMBER_D2               = 2;
    public const NUMFORMAT_NUMBER_SEP              = 3;
    public const NUMFORMAT_NUMBER_SEP_D2           = 4;
    public const NUMFORMAT_CURRENCY_NEGBRA         = 5;
    public const NUMFORMAT_CURRENCY_NEGBRARED      = 6;
    public const NUMFORMAT_CURRENCY_D2_NEGBRA      = 7;
    public const NUMFORMAT_CURRENCY_D2_NEGBRARED   = 8;
    public const NUMFORMAT_PERCENT                 = 9;
    public const NUMFORMAT_PERCENT_D2              = 10;
    public const NUMFORMAT_SCIENTIFIC_D2           = 11;
    public const NUMFORMAT_FRACTION_ONEDIG         = 12;
    public const NUMFORMAT_FRACTION_TWODIG         = 13;
    public const NUMFORMAT_DATE                    = 14;
    public const NUMFORMAT_CUSTOM_D_MON_YY         = 15;
    public const NUMFORMAT_CUSTOM_D_MON            = 16;
    public const NUMFORMAT_CUSTOM_MON_YY           = 17;
    public const NUMFORMAT_CUSTOM_HMM_AM           = 18;
    public const NUMFORMAT_CUSTOM_HMMSS_AM         = 19;
    public const NUMFORMAT_CUSTOM_HMM              = 20;
    public const NUMFORMAT_CUSTOM_HMMSS            = 21;
    public const NUMFORMAT_CUSTOM_MDYYYY_HMM       = 22;
    public const NUMFORMAT_NUMBER_SEP_NEGBRA       = 37;
    public const NUMFORMAT_NUMBER_SEP_NEGBRARED    = 38;
    public const NUMFORMAT_NUMBER_D2_SEP_NEGBRA    = 39;
    public const NUMFORMAT_NUMBER_D2_SEP_NEGBRARED = 40;
    public const NUMFORMAT_ACCOUNT                 = 41;
    public const NUMFORMAT_ACCOUNTCUR              = 42;
    public const NUMFORMAT_ACCOUNT_D2              = 43;
    public const NUMFORMAT_ACCOUNT_D2_CUR          = 44;
    public const NUMFORMAT_CUSTOM_MMSS             = 45;
    public const NUMFORMAT_CUSTOM_H0MMSS           = 46;
    public const NUMFORMAT_CUSTOM_MMSS0            = 47;
    public const NUMFORMAT_CUSTOM_000P0E_PLUS0     = 48;
    public const NUMFORMAT_TEXT                    = 49;

    public const ALIGNH_GENERAL     = 0;
    public const ALIGNH_LEFT        = 1;
    public const ALIGNH_CENTER      = 2;
    public const ALIGNH_RIGHT       = 3;
    public const ALIGNH_FILL        = 4;
    public const ALIGNH_JUSTIFY     = 5;
    public const ALIGNH_MERGE       = 6;
    public const ALIGNH_DISTRIBUTED = 7;

    public const ALIGNV_TOP         = 0;
    public const ALIGNV_CENTER      = 1;
    public const ALIGNV_BOTTOM      = 2;
    public const ALIGNV_JUSTIFY     = 3;
    public const ALIGNV_DISTRIBUTED = 4;

    public const BORDERSTYLE_NONE             = 0;
    public const BORDERSTYLE_THIN             = 1;
    public const BORDERSTYLE_MEDIUM           = 2;
    public const BORDERSTYLE_DASHED           = 3;
    public const BORDERSTYLE_DOTTED           = 4;
    public const BORDERSTYLE_THICK            = 5;
    public const BORDERSTYLE_DOUBLE           = 6;
    public const BORDERSTYLE_HAIR             = 7;
    public const BORDERSTYLE_MEDIUMDASHED     = 8;
    public const BORDERSTYLE_DASHDOT          = 9;
    public const BORDERSTYLE_MEDIUMDASHDOT    = 10;
    public const BORDERSTYLE_DASHDOTDOT       = 11;
    public const BORDERSTYLE_MEDIUMDASHDOTDOT = 12;
    public const BORDERSTYLE_SLANTDASHDOT     = 13;

    public const BORDERDIAGONAL_NONE = 0;
    public const BORDERDIAGONAL_DOWN = 1;
    public const BORDERDIAGONAL_UP   = 2;
    public const BORDERDIAGONAL_BOTH = 3;

    public const FILLPATTERN_NONE                = 0;
    public const FILLPATTERN_SOLID               = 1;
    public const FILLPATTERN_GRAY50              = 2;
    public const FILLPATTERN_GRAY75              = 3;
    public const FILLPATTERN_GRAY25              = 4;
    public const FILLPATTERN_HORSTRIPE           = 5;
    public const FILLPATTERN_VERSTRIPE           = 6;
    public const FILLPATTERN_REVDIAGSTRIPE       = 7;
    public const FILLPATTERN_DIAGSTRIPE          = 8;
    public const FILLPATTERN_DIAGCROSSHATCH      = 9;
    public const FILLPATTERN_THICKDIAGCROSSHATCH = 10;
    public const FILLPATTERN_THINHORSTRIPE       = 11;
    public const FILLPATTERN_THINVERSTRIPE       = 12;
    public const FILLPATTERN_THINREVDIAGSTRIPE   = 13;
    public const FILLPATTERN_THINDIAGSTRIPE      = 14;
    public const FILLPATTERN_THINHORCROSSHATCH   = 15;
    public const FILLPATTERN_THINDIAGCROSSHATCH  = 16;
    public const FILLPATTERN_GRAY12P5            = 17;
    public const FILLPATTERN_GRAY6P25            = 18;

    /**
     * Create a format within an Excel workbook.
     *
     * @see ExcelBook::addFormat()
     *
     * @param ExcelBook $book
     *
     * @return ExcelFormat
     */
    public function __construct(ExcelBook $book)
    {
    }

    // __construct

    /**
     * Get, or set the color of the bottom border of a cell.
     *
     * @param int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int
     */
    public function borderBottomColor($color = null)
    {
    }

    // borderBottomColor

    /**
     * Get, or set the border style for the bottom of a cell.
     *
     * @param int $style (optional, default=null) One of ExcelFormat::BORDERSTYLE_* constants
     *
     * @return int
     */
    public function borderBottomStyle($style = null)
    {
    }

    // borderBottomStyle

    /**
     * Set the border color on all sides of a cell.
     *
     * @param int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int The color, or true if no value supplied for $color
     */
    public function borderColor($color = null)
    {
    }

    // borderColor

    /**
     * Get, or set the color of the diagonal of a cell.
     *
     * @param int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int
     */
    public function borderDiagonalColor($color = null)
    {
    }

    // borderDiagonalColor

    /**
     * Get, or set the border for the diagonal of a cell.
     *
     * @param int $style (optional, default=null) One of ExcelFormat::BORDERDIAGONAL_* constants
     *
     * @return int
     */
    public function borderDiagonalStyle($style = null)
    {
    }

    // borderDiagonalStyle

    /**
     * Get, or set the color of the left side border of a cell.
     *
     * @param int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int
     */
    public function borderLeftColor($color = null)
    {
    }

    // borderLeftColor

    /**
     * Get, or set the border style for the left side of a cell.
     *
     * @param int $style (optional, default=null) One of ExcelFormat::BORDERSTYLE_* constants
     *
     * @return int
     */
    public function borderLeftStyle($style = null)
    {
    }

    // borderLeftStyle

    /**
     * Get, or set the color of the right side border of a cell.
     *
     * @param int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int
     */
    public function borderRightColor($color = null)
    {
    }

    // borderRightColor

    /**
     * Get, or set the border style for the right side of a cell.
     *
     * @param int $style (optional, default=null) One of ExcelFormat::BORDERSTYLE_* constants
     *
     * @return int
     */
    public function borderRightStyle($style = null)
    {
    }

    // borderRightStyle

    /**
     * Set the cell border style on all sides of a cell.
     *
     * @param int $style (optional, default=null) One of ExcelFormat::BORDERSTYLE_* constants
     *
     * @return int The border style, or true if no value supplied for $style
     */
    public function borderStyle($style = null)
    {
    }

    // borderStyle

    /**
     * Get, or set the color of the top border of a cell.
     *
     * @param int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int
     */
    public function borderTopColor($color = null)
    {
    }

    // borderTopColor

    /**
     * Get, or set the border style for the top of a cell.
     *
     * @param int $style (optional, default=null) One of ExcelFormat::BORDERSTYLE_* constants
     *
     * @return int
     */
    public function borderTopStyle($style = null)
    {
    }

    // borderTopStyle

    /**
     * Get, or set the cell fill pattern.
     *
     * @param int $pattern (optional, default=null) One of ExcelFormat::FILLPATTERN_* constants
     *
     * @return int
     */
    public function fillPattern($pattern = null)
    {
    }

    // fillPattern

    /**
     * Get the font for this format.
     *
     * @see ExcelFormat::setFont()
     *
     * @return ExcelFont
     */
    public function getFont()
    {
    }

    // getFont

    /**
     * Get, or set whether the cell is hidden.
     *
     * @param bool $hidden (optional, default=null)
     *
     * @return bool
     */
    public function hidden($hidden = null)
    {
    }

    // hidden

    /**
     * Get, or set the cell horizontal alignment.
     *
     * @see ExcelFormat::verticalAlign()
     *
     * @param int $halign_mode (optional, default=null) One of ExcelFormat::ALIGNH_* constants
     *
     * @return int
     */
    public function horizontalAlign($halign_mode = null)
    {
    }

    // horizontalAlign

    /**
     * Get, or set the cell text indentation level.
     *
     * @param int $indent (optional, default=null) A number from 0-15
     *
     * @return int
     */
    public function indent($indent = null)
    {
    }

    // indent

    /**
     * Get, or set whether a cell is locked.
     *
     * @param bool $locked (optional, default=null)
     *
     * @return bool
     */
    public function locked($locked)
    {
    }

    // locked

    /**
     * Get, or set the cell number format.
     *
     * @param int $number_format Number format identifier.  One of ExcelFormat::NUMFORMAT_* constants
     *
     * @return int
     */
    public function numberFormat($number_format = null)
    {
    }

    // numberFormat

    /**
     * Get, or set the pattern background color.
     *
     * @param int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int
     */
    public function patternBackgroundColor($color = null)
    {
    }

    // patternBackgroundColor

    /**
     * Get, or set the pattern foreground color.
     *
     * @param int $color (optional, default=null) One of ExcelFormat::COLOR_* constants
     *
     * @return int
     */
    public function patternForegroundColor($color = null)
    {
    }

    // patternForegroundColor

    /**
     * Get, or set the cell data rotation.
     *
     * @param int $angle (optional, default=null) 0 to 90 (rotate left 0-90 degrees), 91 to 180 (rotate right 1-90 degrees), or 255 for vertical text
     *
     * @return int The angle of rotation, or false if setting an invalid value
     */
    public function rotate($angle = null)
    {
    }

    // rotate

    /**
     * Set the font for this format.
     *
     * @see ExcelFormat::getFont()
     *
     * @param ExcelFont $font
     *
     * @return bool
     */
    public function setFont($font)
    {
    }

    // setFont

    /**
     * Get, or set whether the cell is shrink-to-fit.
     *
     * @param bool $shrink (optional, default=null)
     *
     * @return bool
     */
    public function shrinkToFit($shrink = null)
    {
    }

    // shrinkToFit

    /**
     * Get, or set the cell vertical alignment.
     *
     * @see ExcelFormat::horizontalAlign()
     *
     * @param int $valign_mode (optional, default=null) One of ExcelFormat::ALIGNV_* constants
     *
     * @return int
     */
    public function verticalAlign($valign_mode = null)
    {
    }

    // verticalAlign

    /**
     * Get, or set the cell text wrapping.
     *
     * @param bool $wrap (optional, default=null)
     *
     * @return bool
     */
    public function wrap($wrap = null)
    {
    }

    // wrap
} // end ExcelFormat
