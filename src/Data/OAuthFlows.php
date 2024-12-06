<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\OpenApi\Data;

use Spatie\LaravelData\Data;

/**
 * @see https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.1.0.md#oauth-flows-object
 */
final class OAuthFlows extends Data
{
    public function __construct(
        public readonly ?OAuthFlow $implicit,
        public readonly ?OAuthFlow $password,
        public readonly ?OAuthFlow $clientCredentials,
        public readonly ?OAuthFlow $authorizationCode,
    ) {
        //
    }
}
