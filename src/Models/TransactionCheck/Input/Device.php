<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Models\TransactionCheck\Input;

use Monowarfs\Fraudnet\Models\Traits\CommonModel;

class Device
{
    use CommonModel;

    public ?string $ip_address = null;
    public ?string $resolution = null;
    public ?string $user_agent = null;
    public ?string $service = null;
    public ?string $client_id = null;
    public ?string $session_id = null;
    public ?string $fingerprint_id = null;
    public ?string $ip_type = null;
    public ?string $plugin_hash = null;
    public ?string $time_zone = null;
    public ?string $language = null;
    public ?string $is_proxy = null;
    public ?string $http_referer = null;
    public ?string $num_mime_types = null;
    public ?string $mime_types_hash = null;
    public ?string $num_fonts = null;
    public ?string $fonts_hash = null;
    public ?string $num_plugins = null;
    public ?string $plugins_hash = null;
    public ?string $color_depth = null;
    public ?bool $font_smoothing = null;
    public ?bool $java_support = null;
    public ?bool $touch_support = null;
    public ?bool $cookie_support = null;
    public ?string $canvas_fingerprint_id = null;
    public ?string $canvas_height = null;
    public ?string $canvas_width = null;
    public ?string $screen_height = null;
    public ?string $screen_width = null;
    public ?bool $is_tor = null;
    public ?string $geo = null;
    public ?string $city = null;
    public ?string $country = null;
    public ?string $postal_code = null;
    public ?string $timezone = null;
    public ?string $proxy_type = null;

    public function toArray()
    {
        return [
            'ip_address' => $this->ip_address,
            'resolution' => $this->resolution,
            'user_agent' => $this->user_agent,
            'service' => $this->service,
            'client_id' => $this->client_id,
            'session_id' => $this->session_id,
            'fingerprint_id' => $this->fingerprint_id,
            'ip_type' => $this->ip_type,
            'plugin_hash' => $this->plugin_hash,
            'time_zone' => $this->time_zone,
            'language' => $this->language,
            'is_proxy' => $this->is_proxy,
            'http_referer' => $this->http_referer,
            'num_mime_types' => $this->num_mime_types,
            'mime_types_hash' => $this->mime_types_hash,
            'num_fonts' => $this->num_fonts,
            'fonts_hash' => $this->fonts_hash,
            'num_plugins' => $this->num_plugins,
            'plugins_hash' => $this->plugins_hash,
            'color_depth' => $this->color_depth,
            'font_smoothing' => $this->font_smoothing,
            'java_support' => $this->java_support,
            'touch_support' => $this->touch_support,
            'cookie_support' => $this->cookie_support,
            'canvas_fingerprint_id' => $this->canvas_fingerprint_id,
            'canvas_height' => $this->canvas_height,
            'canvas_width' => $this->canvas_width,
            'screen_height' => $this->screen_height,
            'screen_width' => $this->screen_width,
            'is_tor' => $this->is_tor,
            'geo' => $this->geo,
            'city' => $this->city,
            'country' => $this->country,
            'postal_code' => $this->postal_code,
            'timezone' => $this->timezone,
            'proxy_type' => $this->proxy_type,
        ];
    }
}
