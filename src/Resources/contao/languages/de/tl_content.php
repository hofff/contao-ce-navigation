<?php

declare(strict_types=1);

/**
 * Contao Content Navigation
 *
 * @copyright 2010-2011 InfinitySoft
 * @copyright 2018 nickname. Büro für visuelle Kommunikation Nicky Hoff
 */

$GLOBALS['TL_LANG']['tl_content']['toc_legend'] = 'Inhaltsverzeichnis';

/*
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['hofff_toc_source']            = array('Bereich', 'Bereich auswählen, für den die Inhaltsnavigation erstellt werden soll.');
$GLOBALS['TL_LANG']['tl_content']['hofff_toc_min_level']         = array('Start Level', 'Bei dieser Überschriftenebene anfangen (inklusive).');
$GLOBALS['TL_LANG']['tl_content']['hofff_toc_max_level']         = array('Stopp Level', 'Bei dieser Überschriftenebene aufhören (inklusive).');
$GLOBALS['TL_LANG']['tl_content']['hofff_toc_include']           = array('In Inhaltsnavigation aufnehmen', 'Element wird in der Inhaltsnavigation aufgenommen, soweit eine Überschrift definiert ist. Falls keine CSS-ID vorhanden ist, wird diese automatisch generiert.');
$GLOBALS['TL_LANG']['tl_content']['hofff_toc_force_request_uri'] = array('Request URI verwenden', 'Immer aktuelle Request URI anstelle der verknüpften Seite verwenden.');

$GLOBALS['TL_LANG']['tl_content']['hofff_toc_source_column'] = 'Artikel in Spalte';
$GLOBALS['TL_LANG']['tl_content']['hofff_toc_source_page']   = 'Artikel in Seite';

/*
 * Other
 */
$GLOBALS['TL_LANG']['tl_content']['hofff_toc_source_parent'] = 'Elternelement';
