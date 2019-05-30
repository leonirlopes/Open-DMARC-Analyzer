<?php
/*
OpenDAnalyzer - Open Source DMARC Analyzer
index.php
2019 - John Bradley (userjack6880)

Available at: https://github.com/userjack6880/opendanalyzer

This file is part of OpenDAnalyzer.

OpenDAnalyzer is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software 
Foundation, either version 3 of the License, or (at your option) any later 
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with 
this program.  If not, see <https://www.gnu.org/licenses/>.
*/

// Includes
include_once 'includes.php';

// Header
$mysqli = dbConn();
if (!empty($_GET['range'])) { 
	debug("Using GET date value: ".$_GET['range']);
	$dateRange = $_GET['range']; 
} else { 
	debug("Using default date value: ".DATE_RANGE);
	$dateRange = DATE_RANGE; 
}

// Dashboard
dashboard($mysqli, $dateRange);

// Footer
$mysqli->close();

debug("\o/");

?>