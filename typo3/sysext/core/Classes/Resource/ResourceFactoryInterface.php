<?php
namespace TYPO3\CMS\Core\Resource;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * An interface containing constants for the resource factory
 *
 * @deprecated This interface will be removed in TYPO3 v11 as it bears no use anymore due to PSR-14 events.
 */
interface ResourceFactoryInterface
{
    const SIGNAL_PreProcessStorage = 'preProcessStorage';
    const SIGNAL_PostProcessStorage = 'postProcessStorage';
}
