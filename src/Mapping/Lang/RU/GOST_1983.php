<?php

namespace Koff\Transliterator\Mapping\Lang\RU;

use Koff\Transliterator\Mapping\MappingInterface;

/**
 * @author Vladimir Sadicov <sadikoff@gmail.com>
 *
 * @internal
 */
class GOST_1983 implements MappingInterface
{
    public function getCharMapping(): array
    {
        return [
            'Ё' => 'Ë',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ж' => 'Ž',
            'З' => 'Z',
            'И' => 'I',
            'Й' => 'J',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'H',
            'Ц' => 'C',
            'Ч' => 'Č',
            'Ш' => 'Š',
            'Щ' => 'Šč',
            'Ъ' => 'ʺ',
            'Ы' => 'Y',
            'Ь' => 'ʹ',
            'Э' => 'È',
            'Ю' => 'Ju',
            'Я' => 'Ja',
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ж' => 'ž',
            'з' => 'z',
            'и' => 'i',
            'й' => 'j',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'h',
            'ц' => 'c',
            'ч' => 'č',
            'ш' => 'š',
            'щ' => 'šč',
            'ъ' => 'ʺ',
            'ы' => 'y',
            'ь' => 'ʹ',
            'э' => 'è',
            'ю' => 'ju',
            'я' => 'ja',
            'ё' => 'ë'
        ];
    }
}
