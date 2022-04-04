<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\AccountApplicationCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Source
{
    use CommonModel;

    /*
     * string
     * Use source to identify a search engine, newsletter name, or other source.
     */
    public ?string $source = null;

    /*
     * string
     * Use medium to identify a medium such as email or cost-per- click.
     */
    public ?string $medium = null;

    /*
     * string
     * Used for keyword analysis. Use campaign to identify a specific product promotion or strategic campaign.
     */
    public ?string $campaign = null;

    /*
     * string
     * Used for paid search. Use term to note the keywords for this ad.
     */
    public ?string $term = null;

    /*
     * string
     * Used for A/B testing and content-targeted ads. Use content to differentiate ads or links that point to the same URL.
     */
    public ?string $content = null;

    /*
     * string
     * is an optional HTTP header field that identifies the url where the request originated.
     */
    public ?string $http_referrer = null;


    public function toArray()
    {
        return [
            "source" => $this->source,
            "medium" => $this->medium,
            "campaign" => $this->campaign,
            "term" => $this->term,
            "content" => $this->content,
            "http_referrer" => $this->http_referrer
        ];
    }
}
