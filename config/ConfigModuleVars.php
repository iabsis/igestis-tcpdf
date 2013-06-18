<?php
/**
 * This class will permitt to set all global variables of the module
 * @Author : Gilles Hemmerlé <gilles.h@iabsis.com>
 */

namespace Igestis\Modules\Tcpdf;

define("IGESTIS_TCPDF_VERSION", "0.1-1");
define("IGESTIS_TCPDF_MODULE_NAME", "Tcpdf");
define("IGESTIS_TCPDF_TEXTDOMAIN", IGESTIS_TCPDF_MODULE_NAME .  IGESTIS_TCPDF_VERSION);
/**
 * Configuration of the module
 *
 * @author Gilles Hemmerlé
 */
class ConfigModuleVars {

    /**
     * @var String Numéro de version du module
     */
    const version = IGESTIS_TCPDF_VERSION;
    /**
     *
     * @var String Name of the module (used only on the source code) 
     */
    const moduleName = IGESTIS_TCPDF_MODULE_NAME;
    
    /**
     *
     * @var String Name of the menu showed to the user (blank if it is a simple service)
     */
    const moduleShowedName = "Tcpdf";
    
    /**
     *
     * @var String textdomain used for this module
     */
    const textDomain = IGESTIS_TCPDF_TEXTDOMAIN;    
    
    
}
