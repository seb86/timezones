<?php
/**
 * Lists all timezones by country and region.
 *
 * @github https://github.com/seb86/timezones
 */

namespace Time;

class Zones {

	/**
	 * Returns an array of timezones.
	 *
	 * @access public
	 *
	 * @static
	 */
	public static $timezones = array(
		// Africa.
		'AF' => array(
			'DZ'      => 'Africa/Algiers',
			'AO'      => 'Africa/Luanda',
			'BJ'      => 'Africa/Porto-Novo',
			'BW'      => 'Africa/Gaborone',
			'BF'      => 'Africa/Ouagadougou',
			'BI'      => 'Africa/Bujumbura',
			'CM'      => 'Africa/Douala',
			'CV'      => 'Atlantic/Cape_Verde',
			'CF'      => 'Africa/Bangui',
			'TD'      => 'Africa/Ndjamena',
			'KM'      => 'Indian/Comoro',
			'CG'      => 'Africa/Brazzaville',
			'CD'      => 'Africa/Kinshasa',
			'DJ'      => 'Africa/Djibouti',
			'EG'      => 'Africa/Cairo',
			'GQ'      => 'Africa/Malabo',
			'ER'      => 'Africa/Asmara',
			'ET'      => 'Africa/Addis_Ababa',
			'GA'      => 'Africa/Libreville',
			'GM'      => 'Africa/Banjul',
			'GH'      => 'Africa/Accra',
			'GN'      => 'Africa/Conakry',
			'GW'      => 'Africa/Bissau',
			'CI'      => 'Africa/Abidjan',
			'KE'      => 'Africa/Nairobi',
			'LS'      => 'Africa/Maseru',
			'LR'      => 'Africa/Monrovia',
			'LY'      => 'Africa/Tripoli',
			'MG'      => 'Indian/Antananarivo',
			'MW'      => 'Africa/Blantyre',
			'ML'      => 'Africa/Bamako',
			'MR'      => 'Africa/Nouakchott',
			'MU'      => 'Indian/Mauritius',
			'MA'      => 'Africa/Casablanca',
			'MZ'      => 'Africa/Maputo',
			'NA'      => 'Africa/Windhoek',
			'NE'      => 'Africa/Niamey',
			'NG'      => 'Africa/Lagos',
			'RW'      => 'Africa/Kigali',
			'ST'      => 'Africa/Sao_Tome',
			'SN'      => 'Africa/Dakar',
			'SC'      => 'Indian/Mahe',
			'SL'      => 'Africa/Freetown',
			'SO'      => 'Africa/Mogadishu',
			'ZA'      => 'Africa/Johannesburg',
			'SS'      => 'Africa/Juba',
			'SD'      => 'Africa/Khartoum',
			'SZ'      => 'Africa/Mbabane',
			'TZ'      => 'Africa/Dar_es_Salaam',
			'TG'      => 'Africa/Lome',
			'TN'      => 'Africa/Tunis',
			'UG'      => 'Africa/Kampala',
			'ZM'      => 'Africa/Lusaka',
			'ZW'      => 'Africa/Harare',
			'YT'      => 'Indian/Mayotte',
			'RE'      => 'Indian/Reunion',
			'SH'      => 'Atlantic/St_Helena',
			'EH'      => 'Africa/El_Aaiun',
			'default' => 'Asia/Kabul', // While it is part of asia we need it here so we can find it due to it also using "AF".
		),
		// Asia
		'AM' => 'Asia/Yerevan',
		'AZ' => 'Asia/Baku',
		'BH' => 'Asia/Bahrain',
		'BD' => 'Asia/Dhaka',
		'BT' => 'Asia/Thimphu',
		'BN' => 'Asia/Brunei',
		'KH' => 'Asia/Phnom_Penh',
		'CN' => 'Asia/Shanghai',
		'CY' => 'Asia/Nicosia',
		'GE' => 'Asia/Tbilisi',
		'IN' => 'Asia/Kolkata',
		'ID' => 'Asia/Jakarta',
		'IR' => 'Asia/Tehran',
		'IQ' => 'Asia/Baghdad',
		'IL' => 'Asia/Jerusalem',
		'JP' => 'Asia/Tokyo',
		'JO' => 'Asia/Amman',
		'KZ' => 'Asia/Almaty',
		'KW' => 'Asia/Kuwait',
		'KG' => 'Asia/Bishkek',
		'LA' => 'Asia/Vientiane',
		'LB' => 'Asia/Beirut',
		'MY' => 'Asia/Kuala_Lumpur',
		'MV' => 'Indian/Maldives',
		'MN' => 'Asia/Ulaanbaatar',
		'MM' => 'Asia/Yangon',
		'NP' => 'Asia/Kathmandu',
		'KP' => 'Asia/Pyongyang',
		'OM' => 'Asia/Muscat',
		'PK' => 'Asia/Karachi',
		'PS' => 'Asia/Gaza',
		'PH' => 'Asia/Manila',
		'QA' => 'Asia/Qatar',
		'SA' => 'Asia/Riyadh',
		'SG' => 'Asia/Singapore',
		'KR' => 'Asia/Seoul',
		'LK' => 'Asia/Colombo',
		'SY' => 'Asia/Damascus',
		'TW' => 'Asia/Taipei',
		'TJ' => 'Asia/Dushanbe',
		'TH' => 'Asia/Bangkok',
		'TR' => 'Europe/Istanbul',
		'TM' => 'Asia/Ashgabat',
		'AE' => 'Asia/Dubai',
		'UZ' => 'Asia/Tashkent',
		'VN' => 'Asia/Ho_Chi_Minh',
		'YE' => 'Asia/Aden',
		'HK' => 'Asia/Hong_Kong',
		'MO' => 'Asia/Macau',
		'TL' => 'Asia/Dili',
		// Europe.
		'AL' => 'Europe/Tirane',
		'AD' => 'Europe/Andorra',
		'AT' => 'Europe/Vienna',
		'BY' => 'Europe/Minsk',
		'BE' => 'Europe/Brussels',
		'BA' => 'Europe/Sarajevo',
		'BG' => 'Europe/Sofia',
		'HR' => 'Europe/Zagreb',
		'CZ' => 'Europe/Prague',
		'DK' => 'Europe/Copenhagen',
		'EE' => 'Europe/Tallinn',
		'FI' => 'Europe/Helsinki',
		'FR' => 'Europe/Paris',
		'DE' => 'Europe/Berlin',
		'GR' => 'Europe/Athens',
		'HU' => 'Europe/Budapest',
		'IS' => 'Atlantic/Reykjavik',
		'IE' => 'Europe/Dublin',
		'IT' => 'Europe/Rome',
		'XK' => 'Europe/Belgrade',
		'LV' => 'Europe/Riga',
		'LI' => 'Europe/Vaduz',
		'LT' => 'Europe/Vilnius',
		'LU' => 'Europe/Luxembourg',
		'MT' => 'Europe/Malta',
		'MD' => 'Europe/Chisinau',
		'MC' => 'Europe/Monaco',
		'ME' => 'Europe/Podgorica',
		'NL' => 'Europe/Amsterdam',
		'MK' => 'Europe/Skopje',
		'NO' => 'Europe/Oslo',
		'PL' => 'Europe/Warsaw',
		'PT' => 'Europe/Lisbon',
		'RO' => 'Europe/Bucharest',
		'RU' => 'Europe/Moscow',
		'SM' => 'Europe/San_Marino',
		'RS' => 'Europe/Belgrade',
		'SK' => 'Europe/Bratislava',
		'SI' => 'Europe/Ljubljana',
		'ES' => 'Europe/Madrid',
		'SE' => 'Europe/Stockholm',
		'CH' => 'Europe/Zurich',
		'TR' => 'Europe/Istanbul',
		'UA' => 'Europe/Kiev',
		'GB' => 'Europe/London',
		'VA' => 'Europe/Vatican',
		'GI' => 'Europe/Gibraltar',
		'SJ' => 'Arctic/Longyearbyen',
		'FO' => 'Atlantic/Faroe',
		'IM' => 'Europe/Isle_of_Man',
		'JE' => 'Europe/Jersey',
		'GG' => 'Europe/Guernsey',
		// North America.
		'AG' => 'America/Antigua',
		'BS' => 'America/Nassau',
		'BB' => 'America/Barbados',
		'BZ' => 'America/Belize',
		'CA' => 'America/Toronto',
		'CR' => 'America/Costa_Rica',
		'CU' => 'America/Havana',
		'DM' => 'America/Dominica',
		'DO' => 'America/Santo_Domingo',
		'SV' => 'America/El_Salvador',
		'GL' => 'America/Nuuk',
		'GD' => 'America/Grenada',
		'GT' => 'America/Guatemala',
		'HT' => 'America/Port-au-Prince',
		'HN' => 'America/Tegucigalpa',
		'JM' => 'America/Jamaica',
		'MX' => 'America/Mexico_City',
		'NI' => 'America/Managua',
		'PA' => 'America/Panama',
		'PR' => 'America/Puerto_Rico',
		'KN' => 'America/St_Kitts',
		'LC' => 'America/St_Lucia',
		'VC' => 'America/St_Vincent',
		'TT' => 'America/Port_of_Spain',
		'VG' => 'America/Tortola',
		'VI' => 'America/St_Thomas',
		'BM' => 'Atlantic/Bermuda',
		'BL' => 'America/St_Barthelemy',
		'PM' => 'America/Miquelon',
		// Oceania.
		'AS' => 'Pacific/Pago_Pago',
		'AU' => 'Australia/Sydney',
		'CK' => 'Pacific/Rarotonga',
		'FJ' => 'Pacific/Fiji',
		'PF' => 'Pacific/Tahiti',
		'GU' => 'Pacific/Guam',
		'KI' => 'Pacific/Tarawa',
		'MH' => 'Pacific/Majuro',
		'FM' => 'Pacific/Pohnpei',
		'NR' => 'Pacific/Nauru',
		'NZ' => 'Pacific/Auckland',
		'NU' => 'Pacific/Niue',
		'MP' => 'Pacific/Saipan',
		'PW' => 'Pacific/Palau',
		'PG' => 'Pacific/Port_Moresby',
		'WS' => 'Pacific/Apia',
		'SB' => 'Pacific/Guadalcanal',
		'TK' => 'Pacific/Fakaofo',
		'TO' => 'Pacific/Tongatapu',
		'TV' => 'Pacific/Funafuti',
		'VU' => 'Pacific/Efate',
		'WF' => 'Pacific/Wallis',
		// South America.
		'AR' => 'America/Argentina/Buenos_Aires',
		'BO' => 'America/La_Paz',
		'BR' => 'America/Sao_Paulo',
		'CL' => 'America/Santiago',
		'CO' => 'America/Bogota',
		'EC' => 'America/Guayaquil',
		'FK' => 'Atlantic/Stanley',
		'GF' => 'America/Cayenne',
		'GY' => 'America/Guyana',
		'PY' => 'America/Asuncion',
		'PE' => 'America/Lima',
		'SR' => 'America/Paramaribo',
		'UY' => 'America/Montevideo',
		'VE' => 'America/Caracas',
		// America and states.
		'US' => array(
			'AL'      => 'America/Chicago',
			'AK'      => 'America/Anchorage',
			'AZ'      => 'America/Phoenix',
			'AR'      => 'America/Chicago',
			'CA'      => 'America/Los_Angeles',
			'CO'      => 'America/Denver',
			'CT'      => 'America/New_York',
			'DE'      => 'America/New_York',
			'FL'      => 'America/New_York',
			'GA'      => 'America/New_York',
			'HI'      => 'Pacific/Honolulu',
			'ID'      => 'America/Boise',
			'IL'      => 'America/Chicago',
			'IN'      => 'America/Indiana/Indianapolis',
			'IA'      => 'America/Chicago',
			'KS'      => 'America/Chicago',
			'KY'      => 'America/New_York',
			'LA'      => 'America/Chicago',
			'ME'      => 'America/New_York',
			'MD'      => 'America/New_York',
			'MA'      => 'America/New_York',
			'MI'      => 'America/Detroit',
			'MN'      => 'America/Chicago',
			'MS'      => 'America/Chicago',
			'MO'      => 'America/Chicago',
			'MT'      => 'America/Denver',
			'NE'      => 'America/Chicago',
			'NV'      => 'America/Los_Angeles',
			'NH'      => 'America/New_York',
			'NJ'      => 'America/New_York',
			'NM'      => 'America/Denver',
			'NY'      => 'America/New_York',
			'NC'      => 'America/New_York',
			'ND'      => 'America/Chicago',
			'OH'      => 'America/New_York',
			'OK'      => 'America/Chicago',
			'OR'      => 'America/Los_Angeles',
			'PA'      => 'America/New_York',
			'RI'      => 'America/New_York',
			'SC'      => 'America/New_York',
			'SD'      => 'America/Chicago',
			'TN'      => 'America/Chicago',
			'TX'      => 'America/Chicago',
			'UT'      => 'America/Denver',
			'VT'      => 'America/New_York',
			'VA'      => 'America/New_York',
			'WA'      => 'America/Los_Angeles',
			'WV'      => 'America/New_York',
			'WI'      => 'America/Chicago',
			'WY'      => 'America/Denver',
			'default' => 'America/New_York',
		),
	);

	/**
	 * Returns the timezone specified.
	 *
	 * Country codes should follow the Unicode CLDR recommendation (https://cldr.unicode.org/translation/displaynames/countryregion-territory-names).
	 *
	 * @access public
	 *
	 * @static
	 *
	 * @param string $country Country to lookup timezone.
	 * @param string $region  Region in country to lookup timezone. No region specified will return a default timezone for the country if one exists.
	 *
	 * @return string Found timezone if any.
	 */
	public static function get_timezone( $country, $region = 'default' ) {
		$timezones = self::get_timezones();

		// If a region is not specified then return default.
		if ( empty( $region ) ) {
			$region = 'default';
		}

		if ( isset( $timezones[ $country ] ) ) {
			if ( is_array( $timezones[ $country ] ) ) {
				// Return specific timezone for region.
				if ( isset( $timezones[ $country ][ $region ] ) ) {
					return $timezones[ $country ][ $region ];
				}
			}

			// Make sure that we return nothing if we can't find a timezone.
			if ( is_array( $timezones[ $country ] ) ) {
				return '';
			}

			return $timezones[ $country ];
		}

		return '';
	} // END get_timezone()

	/**
	 * Get the timezones.
	 *
	 * @access public
	 *
	 * @static
	 */
	public static function get_timezones() {
		asort( self::$timezones );

		return self::$timezones;
	} // END get_timezones()
}
