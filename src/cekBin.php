<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Enter the first six digits of a payment card for lookup; whether it is a credit, debit, charge or a prepaid card.
 *
 * cekBin v1
 *
 * @category   class
 * @package    cekBin
 * @author     Dwi Siswanto
 * @copyright  2017 a Copyright
 * @license    MIT
 * @link       https://github.com/dwisiswant0/cekBin
 */

namespace dwisiswant0;
define("API", "https://api.dw1.co");

class cekBin {
	private function call($data, $endpoint) {
		$context = stream_context_create(array(
			"http" => array(
				"method" => "POST",
				"header" => implode("\r\n", array(
					"User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0",
					"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
					"X-Requested-With: XMLHttpRequest"
				)),
				"content" => $data,
			),
		));

		$response = file_get_contents(API . $endpoint, false, $context);

		if (strpos($http_response_header[0], "200") == true) {
			return json_decode($response, true);
		} else {
			throw new Exception("Something wrong, but Idk why.");
		}
	}

	public function check($bin) {
		if (strlen($bin) <= 6 && !is_numeric($bin)) {
			throw new Exception("Value must be six digits or more!");
		} else {
			$post = self::call("no=" . $bin, "/bin/check");
			return $post;
		}
	}
}