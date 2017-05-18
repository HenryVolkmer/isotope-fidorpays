<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Isotope',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Src
	'Isotope\Model\Payment\FidorPays' => 'system/modules/isotope-fidorpays/src/Isotope/Model/Payment/FidorPays.php',
));


TemplateLoader::addFiles(array
(
    'iso_payment_fidorpays'                  => 'system/modules/isotope-fidorpays/templates',
));
