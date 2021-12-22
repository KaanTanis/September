<?php

namespace KaanTanis\September;

use Illuminate\Support\Facades\Facade;
use KaanTanis\Models\September\September as Log;

class September extends Facade
{
    private $subject;
    private $userId;
    private $details;
    private $url;
    private $method;
    private $ip;
    private $userAgent;

    public function user($userId = null): static
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

    public function url($url = null): static
    {
        $this->url = $url ?? request()->url();
        return $this;
    }

    public function method($method = null): static
    {
        $this->method = $method ?? request()->method();
        return $this;
    }

    public function ip($ip = null): static
    {
        $this->ip = $ip ?? request()->ip();
        return $this;
    }

    public function userAgent($userAgent = null): static
    {
        $this->userAgent = $userAgent ?? request()->userAgent();
        return $this;
    }

    public function save($subject = null)
    {
        $subject = $this->subject ?? $subject;


        // todo: general check code quality
        $this->subject($subject);
        $this->url($this->url);
        $this->method($this->method);
        $this->ip($this->ip);
        $this->user($this->userId);

        dd($this);

        // Save log to database
        Log::create([

        ]);
    }
}
