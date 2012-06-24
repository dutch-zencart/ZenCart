<?php
//dutch translation Zencart ; v1.3.7 2007-09-11 by Edwin Wiering ; v1.3.5 2006-09-04 by joostvdl ; dutch translation Zencart v1.2.6d 2005-11-12  by dutchguy 
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: banner_statistics.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Banner Statistieken');

define('TABLE_HEADING_SOURCE', 'Bron');
define('TABLE_HEADING_VIEWS', 'Views');
define('TABLE_HEADING_CLICKS', 'Klikken');

define('TEXT_BANNERS_DATA', 'D<br>a<br>t<br>a');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s dagelijkse statistieken voor %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s maandelijkse statistieken voor %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s jaarlijkse statistieken');

define('STATISTICS_TYPE_DAILY', 'Dagelijks');
define('STATISTICS_TYPE_MONTHLY', 'Maandelijks');
define('STATISTICS_TYPE_YEARLY', 'Jaarlijks');

define('TITLE_TYPE', 'Type:');
define('TITLE_YEAR', 'Jaar:');
define('TITLE_MONTH', 'Maand:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', '<strong>Foutmelding:</strong> Grafieken directory bestaat niet. Maak een grafieken directory. Voorbeeld: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', '<strong>Foutmelding:</strong> Grafieken directory is niet toegankelijk. Deze directory bevindt zich in: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>