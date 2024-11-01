<?php
/*
Plugin Name: Traducere data in romana
Plugin URI: http://www.zambesc.com/wordpress-plugin-pentru-a-traduce-data-in-limba-romana/
Description: Acest plugin va traduce data in limba romana
Version: 1
Author: Andrei
Author URI: http://www.zambesc.com/
*/

/*
This program is free software; you can redistribute it and/or modify it under the terms of the
GNU General Public License as published by the Free Software Foundation; either version 2 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if
not, write to the Free Software Foundation, Inc. 59 Temple Place - Suite 330, Boston, MA
02111-1307, USA or connect to: http://www.fsf.org/copyleft/gpl.html
*/




function modifica()
{
global $wp_locale;

// lunile anului
$wp_locale->month['01'] = 'Ianuarie';
$wp_locale->month['02'] = 'Februarie';
$wp_locale->month['03'] = 'Martie';
$wp_locale->month['04'] = 'Aprilie';
$wp_locale->month['05'] = 'Mai';
$wp_locale->month['06'] = 'Iunie';
$wp_locale->month['07'] = 'Iulie';
$wp_locale->month['08'] = 'August';
$wp_locale->month['09'] = 'Septembrie';
$wp_locale->month['10'] = 'Octombrie';
$wp_locale->month['11'] = 'Noiembrie';
$wp_locale->month['12'] = 'Decembrie';

// zilele saptamanii
$wp_locale->weekday['0'] = 'Duminica';
$wp_locale->weekday['1'] = 'Luni';
$wp_locale->weekday['2'] = 'Marti';
$wp_locale->weekday['3'] = 'Miercuri';
$wp_locale->weekday['4'] = 'Joi';
$wp_locale->weekday['5'] = 'Vineri';
$wp_locale->weekday['6'] = 'Sambata';

//abrevierea lunilor
$wp_locale->month_abbrev['Ianuarie'] = 'Ian';
$wp_locale->month_abbrev['Februarie'] = 'Feb';
$wp_locale->month_abbrev['Martie'] = 'Mar';
$wp_locale->month_abbrev['Aprilie'] = 'Apr';
$wp_locale->month_abbrev['Mai'] = 'Mai';
$wp_locale->month_abbrev['Iunie'] = 'Iun';
$wp_locale->month_abbrev['Iulie'] = 'Iul';
$wp_locale->month_abbrev['August'] = 'Aug';
$wp_locale->month_abbrev['Septembrie'] = 'Sep';
$wp_locale->month_abbrev['Octombrie'] = 'Oct';
$wp_locale->month_abbrev['Noiembrie'] = 'Noi';
$wp_locale->month_abbrev['Decembrie'] = 'Dec';

}

add_filter('locale','modifica');

?>
