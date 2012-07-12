<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Nothing Interactive 2012 <https://www.nothing.ch/>
 * @author     Stefan Pfister <red@nothing.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['profilebox'] = '{type_legend},type;{profile_legend},profile_name,profile_role,profile_career;{contact_legend},profile_email,profile_phone;{image_legend},singleSRC;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['fields']['profile_name'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['profile_name'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['profile_role'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['profile_role'],
	'exclude'                 => true,
	'sorting'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['profile_career'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['profile_career'],
	'exclude'                 => true,
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>true, 'rte'=>'tinyMCE', 'maxlength'=>255, 'tl_class'=>'clr')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['profile_email'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['profile_email'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['profile_phone'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['profile_phone'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
);