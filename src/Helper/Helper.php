<?php
/**
 * Helper
 *
 * @author Carlos Gartner <contato@carlosgartner.com.br>
 */

namespace Cagartner\BrazilCustomer\Helper;

/**
 * Class Helper
 * @package Cagartner\BrazilCustomer\Helper
 */
class Helper
{
    /**
     * Config path for Person Type
     */
    const CONFIG_PERSON_TYPE = 'customer.settings.brcustomer.person_type';
    /**
     * Config path for Show General Register
     */
    const CONFIG_SHOW_GENERAL_REGISTER = 'customer.settings.brcustomer_person.show_general_register';
    /**
     * Config path for Show State Register
     */
    const CONFIG_SHOW_STATE_REGISTER = 'customer.settings.brcustomer_company.show_state_register';
    /**
     * Config path for Show Fantasy Name
     */
    const CONFIG_SHOW_FANTASY_NAME = 'customer.settings.brcustomer_company.show_fantasy_name';

    /**
     * @return mixed
     */
    public static function getPersonType()
    {
        return core()->getConfigData(self::CONFIG_PERSON_TYPE);
    }

    /**
     * @return mixed
     */
    public static function isShowGeneralRegister()
    {
        return core()->getConfigData(self::CONFIG_SHOW_GENERAL_REGISTER);
    }

    /**
     * @return mixed
     */
    public static function isShowStateRegister()
    {
        return core()->getConfigData(self::CONFIG_SHOW_STATE_REGISTER);
    }

    /**
     * @return mixed
     */
    public static function isShowFantasyName()
    {
        return core()->getConfigData(self::CONFIG_SHOW_FANTASY_NAME);
    }
    
    /**
     * Clean all special characters from BrCustomer document field
     *
     * @param  string $value
     * @return string
     */
    public static function clearDocumentString(string $value): string
    {
        $value = preg_replace('/[^0-9]/', '', $value);
        return $value;
    }
}