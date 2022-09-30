<?php

namespace salcode\WpExampleTestPhp8\RestEndpoints;

use Throwable;
use WP_REST_Request;
use WP_REST_Response;

class SiteTitle {
	/**
	 * REST endpoint to get Site Title.
	 *
	 * @param \WP_REST_Request $request The REST GET request.
	 * @return \WP_REST_Response The response to the request.
	 */
	public static function get() {
		try {
			return new WP_REST_Response(
				get_option( 'blogname' ),
				200
			);
		} catch (Throwable $t) {
			return new WP_REST_Response(
				[
					'message' => $t->getMessage(),
				],
				500
			);
		}
	}
}
