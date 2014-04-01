<?php namespace Pafelin\Laravel4GermanSlug;

class Slug {

	/**
	 * Generate a URL friendly "slug" from a given Cyrillic string.
	 *
	 * @param string $title
	 * @param string $separator
	 * @return string
	 */
	function make($title, $separator = '-')
	{
		$matrix = array(
			'ü' => 'ue', 'ö' => 'oe', 'ß' => 'ss', 'ä' => 'ae',
            'Ü' => 'Ue', 'Ö' => 'Oe', 'Š' => 'Ss', 'Ä' => 'Ae',
        );

		foreach ($matrix as $from => $to)
		{
			$title = mb_eregi_replace($from, $to, $title);
		}

		$title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', mb_strtolower($title));

		$flip = $separator == '-' ? '_' : '-';

		$title = preg_replace('!['.preg_quote($flip).']+!u', $separator, $title);

		$title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);

		return trim($title, $separator);
	}

}
