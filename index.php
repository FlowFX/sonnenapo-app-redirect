<?php
/**
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *
 *	Sonnen-Apotheke App Download-Link Redirect
 *	========================================== 
 *
 *  Redirects to the iOS and Android stores respectively.
 * 
 * @author Florian Posdziech <hallo@flowfx.de>
 * @license GPLv3
 *
 */


require __DIR__ . '/vendor/autoload.php';

$detect = new Mobile_Detect;

$default = "https://www.sonnenapotheke-munster.de/die-sonnen-apotheke-als-app/";
$appstore = "https://itunes.apple.com/de/app/sonnen-apotheke-munster/id1145868735";
$playstore = "https://play.google.com/store/apps/details?id=de.brainscc.apoapp.munster";


if($detect->isTablet() ){
	// 
	header("Location: " . $default); /* Redirect to blog post */
	exit();
} elseif( $detect->isiOS() ){
	header("Location: " . $appstore); /* Redirect to iTunes App Store */
	exit();
} elseif( $detect->isAndroidOS() ){
	header("Location: " . $playstore); /* Redirect to Google Play Store */
	exit();
} else {
	header("Location: " . $default); /* Redirect to blogpost */
	exit();
}




