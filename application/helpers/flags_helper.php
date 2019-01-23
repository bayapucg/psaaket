<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter Flags Helper
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Demostenes Garcia
 * @link			http://www.demogar.com
 * @param		string $field_name = is the name of the field.
 * @param		string $country_selected = is the default value for the field.
 */

function select_countries($field_name, $country_selected)
{
	// Load the form helper
	$CI =& get_instance();
	$CI->load->helper('form');
	
	// Load the countries array
	$countries	= array(
		'af'	=>	'Afghanistan',
		'al'	=>	'Albania',
		'dz'	=>	'Algeria',
		'ad'	=>	'Andorra',
		'ai'	=>	'Anguilla',
		'ag'	=>	'Antigua - Barbuda',
		'ar'	=>	'Argentina',
		'am'	=>	'Armenia',
		'aw'	=>	'Aruba',
		'au'	=>	'Australia',
		'az'	=>	'Azerbaijan',
		'bs'	=>	'Bahamas',
		'bh'	=>	'Bahrain',
		'bd'	=>	'Bangladesh',
		'bb'	=>	'Barbados',
		'by'	=>	'Belarus',
		'be'	=>	'Belgium',
		'bz'	=>	'Belize',
		'bj'	=>	'Benin',
		'bm'	=>	'Bermuda',
		'bt'	=>	'Bhutan',
		'bo'	=>	'Bolivia',
		'ba'	=>	'Bosnia',
		'bw'	=>	'Botswana',
		'br'	=>	'Brazil',
		'bn'	=>	'Brunei',
		'bg'	=>	'Bulgaria',
		'bf'	=>	'Burkina Faso',
		'bi'	=>	'Burundi',
		'kh'	=>	'Cambodia',
		'cm'	=>	'Cameroon',
		'ca'	=>	'Canada',
		'cv'	=>	'Cape Verde',
		'cf'	=>	'Central Africa Republic',
		'td'	=>	'Chad',
		'cl'	=>	'Chile',
		'ci'	=>	'Christmas Island',
		'cn'	=>	'China',
		'co'	=>	'Colombia',
		'cg'	=>	'Congo',
		'ck'	=>	'Cook Islands',
		'cr'	=>	'Costa Rica',
		'ct'	=>	'Cote D\'Ivoire',
		'hr'	=>	'Croatia',
		'cu'	=>	'Cuba',
		'cb'	=>	'Curacao',
		'cy'	=>	'Cyprus',
		'cz'	=>	'Czech Republic',
		'dk'	=>	'Denmark',
		'dj'	=>	'Djibouti',
		'dm'	=>	'Dominica',
		'do'	=>	'Dominican Republic',
		'ec'	=>	'Ecuador',
		'eg'	=>	'Egypt',
		'sv'	=>	'El Salvador',
		'gq'	=>	'Equatorial Guinea',
		'er'	=>	'Eritrea',
		'ee'	=>	'Estonia',
		'et'	=>	'Ethiopia',
		'fo'	=>	'Faroe Islands',
		'fj'	=>	'Fiji',
		'fi'	=>	'Finland',
		'fr'	=>	'France',
		'ge'	=>	'Georgia',
		'de'	=>	'Germany',
		'gh'	=>	'Ghana',
		'gb'	=>	'Great Britain',
		'gr'	=>	'Greece',
		'gl'	=>	'Greenland',
		'gd'	=>	'Grenada',
		'gp'	=>	'Guadaloupe',
		'gu'	=>	'Guam',
		'gt'	=>	'Guatemala',
		'gn'	=>	'Guinea',
		'gy'	=>	'Guyana',
		'ht'	=>	'Haiti',
		'hn'	=>	'Honduras',
		'hk'	=>	'Hong Kong',
		'hu'	=>	'Hungary',
		'is'	=>	'Iceland',
		'in'	=>	'India',
		'id'	=>	'Indonesia',
		'ia'	=>	'Iran',
		'iq'	=>	'Iraq',
		'ir'	=>	'Ireland',
		'il'	=>	'Israel',
		'it'	=>	'Italy',
		'jm'	=>	'Jamaica',
		'jp'	=>	'Japan',
		'jo'	=>	'Jordan',
		'kz'	=>	'Kazakhstan',
		'ke'	=>	'Kenya',
		'ki'	=>	'Kiribati',
		'kr'	=>	'Korea',
		'kw'	=>	'Kuwait',
		'kg'	=>	'Kyrgyzstan',
		'la'	=>	'Laos',
		'lv'	=>	'Latvia',
		'lb'	=>	'Lebanon',
		'lr'	=>	'Liberia',
		'li'	=>	'Liechtenstein',
		'lu'	=>	'Luxembourg',
		'ly'	=>	'Lybia',
		'mk'	=>	'Macedonia',
		'my'	=>	'Malaysia',
		'ml'	=>	'Mali',
		'mt'	=>	'Malta',
		'mx'	=>	'Mexico',
		'md'	=>	'Moldova',
		'mn'	=>	'Mongolia',
		'ma'	=>	'Morocco',
		'mz'	=>	'Mozambique',
		'mn'	=>	'Myanmar',
		'na'	=>	'Namibia',
		'nu'	=>	'Nauru',
		'np'	=>	'Nepal',
		'nl'	=>	'Netherlands',
		'nz'	=>	'New Zealand',
		'ni'	=>	'Nicaragua',
		'ne'	=>	'Niger',
		'ng'	=>	'Nigeria',
		'no'	=>	'Norway',
		'om'	=>	'Oman',
		'pk'	=>	'Pakistan',
		'pa'	=>	'Panama',
		'py'	=>	'Paraguay',
		'pe'	=>	'Peru',
		'ph'	=>	'Philippines',
		'pl'	=>	'Poland',
		'pt'	=>	'Portugal',
		'pr'	=>	'Puerto Rico',
		'qa'	=>	'Qatar',
		'ro'	=>	'Romania',
		'ru'	=>	'Russia',
		'rw'	=>	'Rwanda',
		'lc'	=>	'St Lucia',
		'sm'	=>	'San Marino',
		'sa'	=>	'Saudi Arabia',
		'sn'	=>	'Senegal',
		'ss'	=>	'Serbia - Montenegro',
		'sg'	=>	'Singapore',
		'sk'	=>	'Slovakia',
		'si'	=>	'Slovenia',
		'so'	=>	'Somalia',
		'za'	=>	'South Africa',
		'es'	=>	'Spain',
		'sd'	=>	'Sudan',
		'sr'	=>	'Suriname',
		'se'	=>	'Sweden',
		'ch'	=>	'Switzerland',
		'sy'	=>	'Syria',
		'tw'	=>	'Taiwan',
		'th'	=>	'Thailand',
		'tg'	=>	'Togo',
		'tk'	=>	'Tokelau',
		'to'	=>	'Tonga',
		'tt'	=>	'Tridinidad Tobago',
		'tn'	=>	'Tunisia',
		'tr'	=>	'Turkey',
		'ua'	=>	'Ukraine',
		'ae'	=>	'United Arab Emirate',
		'gb'	=>	'United Kingdom',
		'us'	=>	'United States',
		'uy'	=>	'Uruguay',
		'va'	=>	'Vatican',
		've'	=>	'Venezuela',
		'vn'	=>	'Vietnam',
		'za'	=>	'Zimbawe'
	);
	
	// Return the dropdown
	return form_dropdown($field_name, $countries, $country_selected);
}

/* End of file ./application/helpers/flags_helper.php */
/* Location: ./application/helpers/flags_helper.php */