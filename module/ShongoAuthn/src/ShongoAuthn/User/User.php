<?php

namespace ShongoAuthn\User;


/**
 * User entity specific to the Shongo application.
 * 
 * @method string getPhoneNumber()
 * @method void setPhoneNumber(string $phoneNumber)
 * @method string getOrganization()
 * @method void setOrganization(string $organization)
 * @method string getLocale()
 * @method void setLocale(string $locale)
 * @method string getZoneinfo()
 * @method void setZoneinfo(string $zoneInfo)
 * @method string getOriginalId()
 * @method void setOriginalId(string $originalId)
 * @method integer getPerunId()
 * @method void setPerunId(integer $perunId)
 * @method string getPerunUrl()
 * @method void setPerunUrl(string $perunUrl)
 * @method array getPerunVos()
 * @method void setPerunVos(array $vos)
 * @method array getPrincipalNames()
 * @method void setPrincipalNames(array $principalNames)
 * @method \ShongoAuthn\User\AuthenticationInfo getAuthenticationInfo()
 * @method void setAuthenticationInfo(\ShongoAuthn\User\AuthenticationInfo $authenticationInfo)
 * @method integer getLoa()
 * @method void setLoa(integer $loa)
 */
class User extends \InoOicServer\User\User implements ShongoUserInterface
{

    const FIELD_PHONE_NUMBER = 'phone_number';

    const FIELD_ORGANIZATION = 'organization';

    const FIELD_LOCALE = 'locale';

    const FIELD_ZONEINFO = 'zoneinfo';

    const FIELD_ORIGINAL_ID = 'original_id';

    const FIELD_PERUN_ID = 'perun_id';

    const FIELD_PERUN_URL = 'perun_url';

    const FIELD_PERUN_VOS = 'perun_vos';

    const FIELD_PRINCIPAL_NAMES = 'principal_names';

    const FIELD_AUTHENTICATION_INFO = 'authentication_info';

    const FIELD_LOA = 'loa';

    protected $_fields = array(
        self::FIELD_ID,
        self::FIELD_NAME,
        self::FIELD_GIVEN_NAME,
        self::FIELD_FAMILY_NAME,
        self::FIELD_NICKNAME,
        self::FIELD_EMAIL,
        self::FIELD_PHONE_NUMBER,
        self::FIELD_ORGANIZATION,
        self::FIELD_LOCALE,
        self::FIELD_ZONEINFO,
        self::FIELD_ORIGINAL_ID,
        self::FIELD_PERUN_ID,
        self::FIELD_PERUN_URL,
        self::FIELD_PERUN_VOS,
        self::FIELD_PRINCIPAL_NAMES,
        self::FIELD_AUTHENTICATION_INFO,
        self::FIELD_LOA
    );


    public function getPerunId()
    {
        return $this->getValue(self::FIELD_PERUN_ID);
    }


    public function toArray()
    {
        $data = parent::toArray();
        
        if (isset($data['authentication_info']) && $data['authentication_info'] instanceof AuthenticationInfo) {
            $authenticationInfo = $data['authentication_info'];
            
            $data['authentication_info'] = $authenticationInfo->toArray();
        }
        
        return $data;
    }
}