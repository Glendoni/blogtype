<?php

use Illuminate\Database\Seeder;

class Language_arrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('language_arrs')->delete();
        
      $languages  = array (
 0 => 
  array (
    'id' => 'cs',
    'text' => 'Czech',
  ),
  1 => 
  array (
    'id' => 'cy',
    'text' => 'Welsh',
  ),
  2 => 
  array (
    'id' => 'da',
    'text' => 'Danish',
  ),
  3 => 
  array (
    'id' => 'de',
    'text' => 'German',
  ),
  4 => 
  array (
    'id' => 'en',
    'text' => 'English',
  ),
  5 => 
  array (
    'id' => 'aa',
    'text' => 'Afar',
  ),
  6 => 
  array (
    'id' => 'ab',
    'text' => 'Abkhazian',
  ),
  7 => 
  array (
    'id' => 'af',
    'text' => 'Afrikaans',
  ),
  8 => 
  array (
    'id' => 'am',
    'text' => 'Amharic',
  ),
  9 => 
  array (
    'id' => 'ar',
    'text' => 'Arabic',
  ),
  10 => 
  array (
    'id' => 'as',
    'text' => 'Assamese',
  ),
  11 => 
  array (
    'id' => 'ay',
    'text' => 'Aymara',
  ),
  12 => 
  array (
    'id' => 'az',
    'text' => 'Azerbaijani',
  ),
  13 => 
  array (
    'id' => 'ba',
    'text' => 'Bashkir',
  ),
  14 => 
  array (
    'id' => 'be',
    'text' => 'Byelorussian',
  ),
  15 => 
  array (
    'id' => 'bg',
    'text' => 'Bulgarian',
  ),
  16 => 
  array (
    'id' => 'bh',
    'text' => 'Bihari',
  ),
  17 => 
  array (
    'id' => 'bi',
    'text' => 'Bislama',
  ),
  18 => 
  array (
    'id' => 'bn',
    'text' => 'Bengali/Bangla',
  ),
  19 => 
  array (
    'id' => 'bo',
    'text' => 'Tibetan',
  ),
  20 => 
  array (
    'id' => 'br',
    'text' => 'Breton',
  ),
  21 => 
  array (
    'id' => 'ca',
    'text' => 'Catalan',
  ),
  22 => 
  array (
    'id' => 'co',
    'text' => 'Corsican',
  ),
  23 => 
  array (
    'id' => 'dz',
    'text' => 'Bhutani',
  ),
  24 => 
  array (
    'id' => 'el',
    'text' => 'Greek',
  ),
  25 => 
  array (
    'id' => 'eo',
    'text' => 'Esperanto',
  ),
  26 => 
  array (
    'id' => 'es',
    'text' => 'Spanish',
  ),
  27 => 
  array (
    'id' => 'et',
    'text' => 'Estonian',
  ),
  28 => 
  array (
    'id' => 'eu',
    'text' => 'Basque',
  ),
  29 => 
  array (
    'id' => 'fa',
    'text' => 'Persian',
  ),
  30 => 
  array (
    'id' => 'fi',
    'text' => 'Finnish',
  ),
  31 => 
  array (
    'id' => 'fj',
    'text' => 'Fiji',
  ),
  32 => 
  array (
    'id' => 'fo',
    'text' => 'Faeroese',
  ),
  33 => 
  array (
    'id' => 'fr',
    'text' => 'French',
  ),
  34 => 
  array (
    'id' => 'fy',
    'text' => 'Frisian',
  ),
  35 => 
  array (
    'id' => 'ga',
    'text' => 'Irish',
  ),
  36 => 
  array (
    'id' => 'gd',
    'text' => 'Scots/Gaelic',
  ),
  37 => 
  array (
    'id' => 'gl',
    'text' => 'Galician',
  ),
  38 => 
  array (
    'id' => 'gn',
    'text' => 'Guarani',
  ),
  39 => 
  array (
    'id' => 'gu',
    'text' => 'Gujarati',
  ),
  40 => 
  array (
    'id' => 'ha',
    'text' => 'Hausa',
  ),
  41 => 
  array (
    'id' => 'hi',
    'text' => 'Hindi',
  ),
  42 => 
  array (
    'id' => 'hr',
    'text' => 'Croatian',
  ),
  43 => 
  array (
    'id' => 'hu',
    'text' => 'Hungarian',
  ),
  44 => 
  array (
    'id' => 'hy',
    'text' => 'Armenian',
  ),
  45 => 
  array (
    'id' => 'ia',
    'text' => 'Interlingua',
  ),
  46 => 
  array (
    'id' => 'ie',
    'text' => 'Interlingue',
  ),
  47 => 
  array (
    'id' => 'ik',
    'text' => 'Inupiak',
  ),
  48 => 
  array (
    'id' => 'in',
    'text' => 'Indonesian',
  ),
  49 => 
  array (
    'id' => 'is',
    'text' => 'Icelandic',
  ),
  50 => 
  array (
    'id' => 'it',
    'text' => 'Italian',
  ),
  51 => 
  array (
    'id' => 'iw',
    'text' => 'Hebrew',
  ),
  52 => 
  array (
    'id' => 'ja',
    'text' => 'Japanese',
  ),
  53 => 
  array (
    'id' => 'ji',
    'text' => 'Yiddish',
  ),
  54 => 
  array (
    'id' => 'jw',
    'text' => 'Javanese',
  ),
  55 => 
  array (
    'id' => 'ka',
    'text' => 'Georgian',
  ),
  56 => 
  array (
    'id' => 'kk',
    'text' => 'Kazakh',
  ),
  57 => 
  array (
    'id' => 'kl',
    'text' => 'Greenlandic',
  ),
  58 => 
  array (
    'id' => 'km',
    'text' => 'Cambodian',
  ),
  59 => 
  array (
    'id' => 'kn',
    'text' => 'Kannada',
  ),
  60 => 
  array (
    'id' => 'ko',
    'text' => 'Korean',
  ),
  61 => 
  array (
    'id' => 'ks',
    'text' => 'Kashmiri',
  ),
  62 => 
  array (
    'id' => 'ku',
    'text' => 'Kurdish',
  ),
  63 => 
  array (
    'id' => 'ky',
    'text' => 'Kirghiz',
  ),
  64 => 
  array (
    'id' => 'la',
    'text' => 'Latin',
  ),
  65 => 
  array (
    'id' => 'ln',
    'text' => 'Lingala',
  ),
  66 => 
  array (
    'id' => 'lo',
    'text' => 'Laothian',
  ),
  67 => 
  array (
    'id' => 'lt',
    'text' => 'Lithuanian',
  ),
  68 => 
  array (
    'id' => 'lv',
    'text' => 'Latvian/Lettish',
  ),
  69 => 
  array (
    'id' => 'mg',
    'text' => 'Malagasy',
  ),
  70 => 
  array (
    'id' => 'mi',
    'text' => 'Maori',
  ),
  71 => 
  array (
    'id' => 'mk',
    'text' => 'Macedonian',
  ),
  72 => 
  array (
    'id' => 'ml',
    'text' => 'Malayalam',
  ),
  73 => 
  array (
    'id' => 'mn',
    'text' => 'Mongolian',
  ),
  74 => 
  array (
    'id' => 'mo',
    'text' => 'Moldavian',
  ),
  75 => 
  array (
    'id' => 'mr',
    'text' => 'Marathi',
  ),
  76 => 
  array (
    'id' => 'ms',
    'text' => 'Malay',
  ),
  77 => 
  array (
    'id' => 'mt',
    'text' => 'Maltese',
  ),
  78 => 
  array (
    'id' => 'my',
    'text' => 'Burmese',
  ),
  79 => 
  array (
    'id' => 'na',
    'text' => 'Nauru',
  ),
  80 => 
  array (
    'id' => 'ne',
    'text' => 'Nepali',
  ),
  81 => 
  array (
    'id' => 'nl',
    'text' => 'Dutch',
  ),
  82 => 
  array (
    'id' => 'no',
    'text' => 'Norwegian',
  ),
  83 => 
  array (
    'id' => 'oc',
    'text' => 'Occitan',
  ),
  84 => 
  array (
    'id' => 'om',
    'text' => '(Afan)/Oromoor/Oriya',
  ),
  85 => 
  array (
    'id' => 'pa',
    'text' => 'Punjabi',
  ),
  86 => 
  array (
    'id' => 'pl',
    'text' => 'Polish',
  ),
  87 => 
  array (
    'id' => 'ps',
    'text' => 'Pashto/Pushto',
  ),
  88 => 
  array (
    'id' => 'pt',
    'text' => 'Portuguese',
  ),
  89 => 
  array (
    'id' => 'qu',
    'text' => 'Quechua',
  ),
  90 => 
  array (
    'id' => 'rm',
    'text' => 'Rhaeto-Romance',
  ),
  91 => 
  array (
    'id' => 'rn',
    'text' => 'Kirundi',
  ),
  92 => 
  array (
    'id' => 'ro',
    'text' => 'Romanian',
  ),
  93 => 
  array (
    'id' => 'ru',
    'text' => 'Russian',
  ),
  94 => 
  array (
    'id' => 'rw',
    'text' => 'Kinyarwanda',
  ),
  95 => 
  array (
    'id' => 'sa',
    'text' => 'Sanskrit',
  ),
  96 => 
  array (
    'id' => 'sd',
    'text' => 'Sindhi',
  ),
  97 => 
  array (
    'id' => 'sg',
    'text' => 'Sangro',
  ),
  98 => 
  array (
    'id' => 'sh',
    'text' => 'Serbo-Croatian',
  ),
  99 => 
  array (
    'id' => 'si',
    'text' => 'Singhalese',
  ),
  100 => 
  array (
    'id' => 'sk',
    'text' => 'Slovak',
  ),
  101 => 
  array (
    'id' => 'sl',
    'text' => 'Slovenian',
  ),
  102 => 
  array (
    'id' => 'sm',
    'text' => 'Samoan',
  ),
  103 => 
  array (
    'id' => 'sn',
    'text' => 'Shona',
  ),
  104 => 
  array (
    'id' => 'so',
    'text' => 'Somali',
  ),
  105 => 
  array (
    'id' => 'sq',
    'text' => 'Albanian',
  ),
  106 => 
  array (
    'id' => 'sr',
    'text' => 'Serbian',
  ),
  107 => 
  array (
    'id' => 'ss',
    'text' => 'Siswati',
  ),
  108 => 
  array (
    'id' => 'st',
    'text' => 'Sesotho',
  ),
  109 => 
  array (
    'id' => 'su',
    'text' => 'Sundanese',
  ),
  110 => 
  array (
    'id' => 'sv',
    'text' => 'Swedish',
  ),
  111 => 
  array (
    'id' => 'sw',
    'text' => 'Swahili',
  ),
  112 => 
  array (
    'id' => 'ta',
    'text' => 'Tamil',
  ),
  113 => 
  array (
    'id' => 'te',
    'text' => 'Tegulu',
  ),
  114 => 
  array (
    'id' => 'tg',
    'text' => 'Tajik',
  ),
  115 => 
  array (
    'id' => 'th',
    'text' => 'Thai',
  ),
  116 => 
  array (
    'id' => 'ti',
    'text' => 'Tigrinya',
  ),
  117 => 
  array (
    'id' => 'tk',
    'text' => 'Turkmen',
  ),
  118 => 
  array (
    'id' => 'tl',
    'text' => 'Tagalog',
  ),
  119 => 
  array (
    'id' => 'tn',
    'text' => 'Setswana',
  ),
  120 => 
  array (
    'id' => 'to',
    'text' => 'Tonga',
  ),
  121 => 
  array (
    'id' => 'tr',
    'text' => 'Turkish',
  ),
  122 => 
  array (
    'id' => 'ts',
    'text' => 'Tsonga',
  ),
  123 => 
  array (
    'id' => 'tt',
    'text' => 'Tatar',
  ),
  124 => 
  array (
    'id' => 'tw',
    'text' => 'Twi',
  ),
  125 => 
  array (
    'id' => 'uk',
    'text' => 'Ukrainian',
  ),
  126 => 
  array (
    'id' => 'ur',
    'text' => 'Urdu',
  ),
  127 => 
  array (
    'id' => 'uz',
    'text' => 'Uzbek',
  ),
  128 => 
  array (
    'id' => 'vi',
    'text' => 'Vietnamese',
  ),
  129 => 
  array (
    'id' => 'vo',
    'text' => 'Volapuk',
  ),
  130 => 
  array (
    'id' => 'wo',
    'text' => 'Wolof',
  ),
  131 => 
  array (
    'id' => 'xh',
    'text' => 'Xhosa',
  ),
  132 => 
  array (
    'id' => 'yo',
    'text' => 'Yoruba',
  ),
  133 => 
  array (
    'id' => 'zh',
    'text' => 'Chinese',
  ),
  134 => 
  array (
    'id' => 'zu',
    'text' => 'Zulu',
  )
);  

        
        $langs = array_map(function($lang) {
    return array(
        'description' => $lang['text'],
        'code' => $lang['id']
    );
},  $languages);
        
      DB::table('language_arrs')->insert($langs);
       
        
        
    }
}
