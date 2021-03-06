<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * navigation css file from theme Original
 *
 * @version $Id: theme_left.css.php 11409 2008-07-19 14:46:28Z lem9 $
 * @package phpMyAdmin-theme
 * @subpackage Original
 */

// unplanned execution path
if (!defined('PMA_MINIMUM_COMMON')) {
    exit();
}
?>
/******************************************************************************/
/* general tags */
html {
    font-size: <?php echo (null !== $_SESSION['PMA_Config']->get('fontsize') ? $_SESSION['PMA_Config']->get('fontsize') : $_COOKIE['pma_fontsize']); ?>;
}

input, select, textarea {
    font-size: 1em;
}

body {
<?php if (! empty($GLOBALS['cfg']['FontFamily'])) { ?>
    font-family:        <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
<?php } ?>
    background:         url(./themes/fitoDarkOrange/img/left_nav_bg.png) repeat-y right 0% #111;
    border-right:		1px solid #aaa;
    color:              white;
    margin:             0;
    padding:            0;
}

a img {
    border: 0;
}

a:link,
a:visited,
a:active {
    text-decoration:    none;
    color:              #FF8300;
}

ul {
    margin:0;
}

form {
    margin:             0;
    padding:            0;
    display:            inline;
}

select#select_server,
select#lightm_db {
    width:              100%;
}

/* buttons in some browsers (eg. Konqueror) are block elements,
   this breaks design */
button {
    display:            inline;
}


/******************************************************************************/
/* classes */

/* leave some space between icons and text */
.icon {
    vertical-align:     middle;
    margin-right:       0.3em;
    margin-left:        0.3em;
    background: #161616;
    border-left: 1px solid #222;
    border-top: 1px solid #222;
    border-right: 1px solid #060606;
    border-bottom: 1px solid #060606;
}
.icon:hover {
	background: #060606;
	border-left: 1px solid #000;
    border-top: 1px solid #000;
    border-right: 1px solid #161616;
    border-bottom: 1px solid #161616;
}
.navi_dbName {
    font-weight:    bold;
    color:          <?php echo $GLOBALS['cfg']['NaviDatabaseNameColor']; ?>;
}

/******************************************************************************/
/* specific elements */

div#pmalogo {
    <?php //better echo $GLOBALS['cfg']['logoBGC']; ?>
    padding:.3em;
}
div#pmalogo,
div#leftframelinks,
div#databaseList {
    text-align:         center;
    margin:      		20px 10px 0px 10px;
}

ul#databaseList {
    margin-bottom:      0.5em;
    padding-bottom:     0.5em;
    padding:20px 0;
}

#databaseList li {
    list-style-type:none;
    text-indent:29px;

}

ul#databaseList a {
    display: block;
    padding:5px;
}

div#navidbpageselector a,
ul#databaseList a {
    background: url(./themes/fitoDarkOrange/img/database.png) no-repeat 5% 50% transparent;
    color:              #0081FF;
    text-shadow: #000 1px 2px 1px,#222 -1px -2px 0px;
    font-weight:    bold;
}

ul#databaseList a:hover {
	color: white;
	text-shadow: #000 1px 1px, #0081FF 1px 1px 6px, #000 -1px -1px, #0081FF -1px -1px 6px;
}

ul#databaseList li.selected a {
    background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>;
}

div#leftframelinks .icon {
    padding:            0;
    margin:             0;
}

div#leftframelinks a img.icon {
    margin:             10px 10px 0 0;
    padding:            0.2em;
}

div#leftframelinks a:hover {

}

/* serverlist */
#body_leftFrame #list_server {
    list-style-image: url(<?php echo $GLOBALS['cfg']['ThemePath']; ?>/original/img/s_host.png);
    list-style-position: inside;
    list-style-type: none;
    margin: 0;
    padding: 0;
}

#body_leftFrame #list_server li {
    margin: 0;
    padding: 0;
}

div#left_tableList ul {
    list-style-type:    none;
    list-style-position: outside;
    margin:             0;
    padding:            0;
    background:         <?php echo (isset($_SESSION['userconf']['custom_color']) ? $_SESSION['userconf']['custom_color'] : $GLOBALS['cfg']['NaviBackground']); ?>;
}

div#left_tableList ul ul {
    font-size:          100%;
}

div#left_tableList a {
    background:         <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    text-decoration:    none;
}

#left_tableList{
	display:none;
}


div#left_tableList a:hover {
    background:         <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    text-decoration:    underline;
}

div#left_tableList li {
    margin:             0;
    padding:            0;
    white-space:        nowrap;
}
select{
-moz-border-radius: 2px 2px 2px 2px;
-border-border-radius:  2px 2px 2px 2px;
-webkit-border-radius: 2px 2px 2px 2px;
-moz-box-shadow:0 1px 2px #DDDDDD;	
border:1px solid #aaa;
color:#333333;
padding:3px;
background:url(./themes/fitoDarkOrange/img/input_bg.gif);
}

<?php if ($GLOBALS['cfg']['BrowseMarkerColor']) { ?>
/* marked items */
div#left_tableList > ul li.marked > a,
div#left_tableList > ul li.marked {
    background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>;
}
<?php } ?>

<?php if ($GLOBALS['cfg']['LeftPointerEnable']) { ?>
div#left_tableList > ul li:hover > a,
div#left_tableList > ul li:hover {
    background:         <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}
<?php } ?>

div#left_tableList img {
    padding:            0;
    vertical-align:     middle;
}

div#left_tableList ul ul {
    margin-<?php echo $left; ?>:        0;
    padding-<?php echo $left; ?>:       0.1em;
    border-<?php echo $left; ?>:        0.1em solid <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
    padding-bottom:     0.1em;
    border-bottom:      0.1em solid <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}

/* for the servers list in navi panel */
#serverinfo .item {
    white-space:        nowrap;
    color:              <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#serverinfo a:hover {
    background:         <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
    color:              <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

#imgpmalogo{
	-moz-box-shadow: 1px 1px 5px #000, -1px -1px 2px #222;
	padding: 5px;
	width: 191px;
	height: 28px;
	overflow: hidden;
}
#imgpmalogo:hover{
	background: #0A0A0A;
	-moz-box-shadow: -1px -1px 5px #000, 1px 1px 1px #1A1A1A;
	width: 191px;
	height: 28px;
	overflow: hidden;
}

#databaseList:after{
	content: "enjoy the freedom " url("./themes/fitoDarkOrange/img/pot.gif"); color: #ED6400; font-size: 1.3em; text-shadow: 2px 2px 3px #000, -2px -2px 3px #000; text-indent: 3em; display: inline-block;
}
