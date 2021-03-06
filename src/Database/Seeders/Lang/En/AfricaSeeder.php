<?php

namespace Lwwcas\LaravelCountries\Database\Seeders\Lang\En;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Models\CountryBuilder;

class AfricaSeeder extends Seeder
{

    /**
     * Attribute that defines the language of countries
     *
     * @var string
     */
    protected $lang = 'en';

    /**
     * Attribute that defines the continent of countries
     *
     * @var string
     */
    protected $region = 'africa';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Algeria',
                'iso_alpha_2' => 'DZ',
                'iso_alpha_3' => 'DZA',
                'iso_numeric' => '12',
                'international_phone' => '213',
            ],
            [
                'name' => 'Benin',
                'iso_alpha_2' => 'BJ',
                'iso_alpha_3' => 'BEN',
                'iso_numeric' => '204',
                'international_phone' => '229',
            ],
            [
                'name' => 'Angola',
                'iso_alpha_2' => 'AO',
                'iso_alpha_3' => 'AGO',
                'iso_numeric' => '24',
                'international_phone' => '244',
            ],
            [
                'name' => 'Botswana',
                'iso_alpha_2' => 'BW',
                'iso_alpha_3' => 'BWA',
                'iso_numeric' => '72',
                'international_phone' => '267',
            ],
            [
                'name' => 'Burkina Faso',
                'iso_alpha_2' => 'BF',
                'iso_alpha_3' => 'BFA',
                'iso_numeric' => '854',
                'international_phone' => '226',
            ],
            [
                'name' => 'Burundi',
                'iso_alpha_2' => 'BI',
                'iso_alpha_3' => 'BDI',
                'iso_numeric' => '108',
                'international_phone' => '257',
            ],
            [
                'name' => 'Cameroon',
                'iso_alpha_2' => 'CM',
                'iso_alpha_3' => 'CMR',
                'iso_numeric' => '120',
                'international_phone' => '237',
            ],
            [
                'name' => 'Cape Verde',
                'iso_alpha_2' => 'CV',
                'iso_alpha_3' => 'CPV',
                'iso_numeric' => '132',
                'international_phone' => '238',
            ],
            [
                'name' => 'Central African Republic',
                'iso_alpha_2' => 'CF',
                'iso_alpha_3' => 'CAF',
                'iso_numeric' => '140',
                'international_phone' => '236',
            ],
            [
                'name' => 'Chad',
                'iso_alpha_2' => 'TD',
                'iso_alpha_3' => 'TCD',
                'iso_numeric' => '148',
                'international_phone' => '235',
            ],
            [
                'name' => 'Comoros',
                'iso_alpha_2' => 'KM',
                'iso_alpha_3' => 'COM',
                'iso_numeric' => '174',
                'international_phone' => '269',
            ],
            [
                'name' => 'Congo - Brazzaville',
                'iso_alpha_2' => 'CG',
                'iso_alpha_3' => 'COG',
                'iso_numeric' => '178',
                'international_phone' => '242',
            ],
            [
                'name' => 'Congo - Kinshasa',
                'iso_alpha_2' => 'CD',
                'iso_alpha_3' => 'COD',
                'iso_numeric' => '180',
                'international_phone' => '243',
            ],
            [
                'name' => 'Côte d’Ivoire',
                'iso_alpha_2' => 'CI',
                'iso_alpha_3' => 'CIV',
                'iso_numeric' => '384',
                'international_phone' => '225',
            ],
            [
                'name' => 'Djibouti',
                'iso_alpha_2' => 'DJ',
                'iso_alpha_3' => 'DJI',
                'iso_numeric' => '262',
                'international_phone' => '253',
            ],
            [
                'name' => 'Egypt',
                'iso_alpha_2' => 'EG',
                'iso_alpha_3' => 'EGY',
                'iso_numeric' => '818',
                'international_phone' => '20',
            ],
            [
                'name' => 'Equatorial Guinea',
                'iso_alpha_2' => 'GQ',
                'iso_alpha_3' => 'GNQ',
                'iso_numeric' => '226',
                'international_phone' => '240',
            ],
            [
                'name' => 'Eritrea',
                'iso_alpha_2' => 'ER',
                'iso_alpha_3' => 'ERI',
                'iso_numeric' => '232',
                'international_phone' => '291',
            ],
            [
                'name' => 'Ethiopia',
                'iso_alpha_2' => 'ET',
                'iso_alpha_3' => 'ETH',
                'iso_numeric' => '231',
                'international_phone' => '251',
            ],
            [
                'name' => 'Gabon',
                'iso_alpha_2' => 'GA',
                'iso_alpha_3' => 'GAB',
                'iso_numeric' => '266',
                'international_phone' => '241',
            ],
            [
                'name' => 'Gambia',
                'iso_alpha_2' => 'GM',
                'iso_alpha_3' => 'GMB',
                'iso_numeric' => '270',
                'international_phone' => '220',
            ],
            [
                'name' => 'Ghana',
                'iso_alpha_2' => 'GH',
                'iso_alpha_3' => 'GHA',
                'iso_numeric' => '288',
                'international_phone' => '233',
            ],
            [
                'name' => 'Guinea',
                'iso_alpha_2' => 'GN',
                'iso_alpha_3' => 'GIN',
                'iso_numeric' => '324',
                'international_phone' => '224',
            ],
            [
                'name' => 'Guinea-Bissau',
                'iso_alpha_2' => 'GW',
                'iso_alpha_3' => 'GNB',
                'iso_numeric' => '624',
                'international_phone' => '245',
            ],
            [
                'name' => 'Kenya',
                'iso_alpha_2' => 'KE',
                'iso_alpha_3' => 'KEN',
                'iso_numeric' => '404',
                'international_phone' => '254',
            ],
            [
                'name' => 'Lesotho',
                'iso_alpha_2' => 'LS',
                'iso_alpha_3' => 'LSO',
                'iso_numeric' => '426',
                'international_phone' => '266',
            ],
            [
                'name' => 'Liberia',
                'iso_alpha_2' => 'LR',
                'iso_alpha_3' => 'LBR',
                'iso_numeric' => '430',
                'international_phone' => '231',
            ],
            [
                'name' => 'Libya',
                'iso_alpha_2' => 'LY',
                'iso_alpha_3' => 'LBY',
                'iso_numeric' => '434',
                'international_phone' => '218',
            ],
            [
                'name' => 'Madagascar',
                'iso_alpha_2' => 'MG',
                'iso_alpha_3' => 'MDG',
                'iso_numeric' => '450',
                'international_phone' => '261',
            ],
            [
                'name' => 'Malawi',
                'iso_alpha_2' => 'MW',
                'iso_alpha_3' => 'MWI',
                'iso_numeric' => '454',
                'international_phone' => '265',
            ],
            [
                'name' => 'Mali',
                'iso_alpha_2' => 'ML',
                'iso_alpha_3' => 'MLI',
                'iso_numeric' => '466',
                'international_phone' => '223',
            ],
            [
                'name' => 'Mauritania',
                'iso_alpha_2' => 'MR',
                'iso_alpha_3' => 'MRT',
                'iso_numeric' => '478',
                'international_phone' => '222',
            ],
            [
                'name' => 'Mauritius',
                'iso_alpha_2' => 'MU',
                'iso_alpha_3' => 'MUS',
                'iso_numeric' => '480',
                'international_phone' => '230',
            ],
            [
                'name' => 'Mayotte',
                'iso_alpha_2' => 'YT',
                'iso_alpha_3' => 'MYT',
                'iso_numeric' => '175',
                'international_phone' => '262',
            ],
            [
                'name' => 'Morocco',
                'iso_alpha_2' => 'MA',
                'iso_alpha_3' => 'MAR',
                'iso_numeric' => '504',
                'international_phone' => '212',
            ],
            [
                'name' => 'Mozambique',
                'iso_alpha_2' => 'MZ',
                'iso_alpha_3' => 'MOZ',
                'iso_numeric' => '508',
                'international_phone' => '258',
            ],
            [
                'name' => 'Namibia',
                'iso_alpha_2' => 'NA',
                'iso_alpha_3' => 'NAM',
                'iso_numeric' => '516',
                'international_phone' => '264',
            ],
            [
                'name' => 'Niger',
                'iso_alpha_2' => 'NE',
                'iso_alpha_3' => 'NER',
                'iso_numeric' => '562',
                'international_phone' => '227',
            ],
            [
                'name' => 'Nigeria',
                'iso_alpha_2' => 'NG',
                'iso_alpha_3' => 'NGA',
                'iso_numeric' => '566',
                'international_phone' => '234',
            ],
            [
                'name' => 'Rwanda',
                'iso_alpha_2' => 'RW',
                'iso_alpha_3' => 'RWA',
                'iso_numeric' => '646',
                'international_phone' => '250',
            ],
            [
                'name' => 'Réunion',
                'iso_alpha_2' => 'RE',
                'iso_alpha_3' => 'REU',
                'iso_numeric' => '638',
                'international_phone' => '262',
            ],
            [
                'name' => 'Saint Helena',
                'iso_alpha_2' => 'SH',
                'iso_alpha_3' => 'SHN',
                'iso_numeric' => '654',
                'international_phone' => '290',
            ],
            [
                'name' => 'Senegal',
                'iso_alpha_2' => 'SN',
                'iso_alpha_3' => 'SEN',
                'iso_numeric' => '686',
                'international_phone' => '221',
            ],
            [
                'name' => 'Seychelles',
                'iso_alpha_2' => 'SC',
                'iso_alpha_3' => 'SYC',
                'iso_numeric' => '690',
                'international_phone' => '248',
            ],
            [
                'name' => 'Sierra Leone',
                'iso_alpha_2' => 'SL',
                'iso_alpha_3' => 'SLE',
                'iso_numeric' => '694',
                'international_phone' => '232',
            ],
            [
                'name' => 'Somalia',
                'iso_alpha_2' => 'SO',
                'iso_alpha_3' => 'SOM',
                'iso_numeric' => '706',
                'international_phone' => '252',
            ],
            [
                'name' => 'South Africa',
                'iso_alpha_2' => 'ZA',
                'iso_alpha_3' => 'ZAF',
                'iso_numeric' => '710',
                'international_phone' => '27',
            ],
            [
                'name' => 'Sudan',
                'iso_alpha_2' => 'SD',
                'iso_alpha_3' => 'SDN',
                'iso_numeric' => '736',
                'international_phone' => '249',
            ],
            [
                'name' => 'Swaziland',
                'iso_alpha_2' => 'SZ',
                'iso_alpha_3' => 'SWZ',
                'iso_numeric' => '748',
                'international_phone' => '268',
            ],
            [
                'name' => 'São Tomé and Príncipe',
                'iso_alpha_2' => 'ST',
                'iso_alpha_3' => 'STP',
                'iso_numeric' => '678',
                'international_phone' => '239',
            ],
            [
                'name' => 'Tanzania',
                'iso_alpha_2' => 'TZ',
                'iso_alpha_3' => 'TZA',
                'iso_numeric' => '834',
                'international_phone' => '255',
            ],
            [
                'name' => 'Togo',
                'iso_alpha_2' => 'TG',
                'iso_alpha_3' => 'TGO',
                'iso_numeric' => '768',
                'international_phone' => '228',
            ],
            [
                'name' => 'Tunisia',
                'iso_alpha_2' => 'TN',
                'iso_alpha_3' => 'TUN',
                'iso_numeric' => '788',
                'international_phone' => '216',
            ],
            [
                'name' => 'Uganda',
                'iso_alpha_2' => 'UG',
                'iso_alpha_3' => 'UGA',
                'iso_numeric' => '800',
                'international_phone' => '256',
            ],
            [
                'name' => 'Western Sahara',
                'iso_alpha_2' => 'EH',
                'iso_alpha_3' => 'ESH',
                'iso_numeric' => '732',
                'international_phone' => '212',
            ],
            [
                'name' => 'Zambia',
                'iso_alpha_2' => 'ZM',
                'iso_alpha_3' => 'ZMB',
                'iso_numeric' => '894',
                'international_phone' => '260',
            ],
            [
                'name' => 'Zimbabwe',
                'iso_alpha_2' => 'ZW',
                'iso_alpha_3' => 'ZWE',
                'iso_numeric' => '716',
                'international_phone' => '263',
            ],
        ];

        CountryBuilder::create($countries, $this->region, $this->lang);

    }
}
