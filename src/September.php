<?php

namespace KaanTanis\September;

use Illuminate\Support\Facades\Facade;

class September extends Facade
{
    private $subject;
    private $userId;
    private $details;
    private $url;
    private $method;
    private $ip;
    private $userAgent;

    public function userId($userId): static
    {
        if (! $userId)
            $userId = auth()->id() ?? 'No login';

        $this->userId = $userId;
        return $this;
    }

    public function subject($subject): static
    {
        $this->subject = $subject;
        return $this;
    }

    public function details($details): static
    {
        $this->details = $details;
        return $this;
    }

    public function url($url): static
    {
        $this->url = request()->url();
        return $this;
    }

    public function method($method): static
    {
        $this->method = request()->method();
        return $this;
    }

    public function ip($ip): static
    {
        $this->ip = request()->ip();
        return $this;
    }

    public function userAgent($userAgent): static
    {
        $this->userAgent = request()->userAgent();
        return $this;
    }
}
