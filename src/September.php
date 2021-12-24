<?php

namespace KaanTanis\September;

use JetBrains\PhpStorm\NoReturn;
use KaanTanis\Models\September\September as Log;
use phpDocumentor\Reflection\Types\Integer;

/**
 * Save log
 */
class September extends Level
{

    /**
     * @var string
     */
    private string $subject;

    /**
     * @var int
     */
    private int $userId;

    /**
     * @var array
     */
    private array $details;

    /**
     * @var string
     */
    private string $url;

    /**
     * @var string
     */
    private string $method;

    /**
     * @var string
     */
    private string $ip;

    /**
     * @var string mixed
     */
    private string $userAgent;

    /**
     * @param null $userId
     * @return $this
     */
    public function user($userId = null): static
    {
        if (! $userId)
            $userId = auth()->id() ?? 'No login';

        $this->userId = $userId;
        return $this;
    }

    /**
     * @param $subject
     * @return $this
     */
    public function subject($subject): static
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @param $details
     * @return $this
     */
    public function details($details): static
    {
        $this->details = $details;
        return $this;
    }

    /**
     * @param null $url
     * @return $this
     */
    public function url($url = null): static
    {
        $this->url = $url ?? request()->url();
        return $this;
    }

    /**
     * @param null $method
     * @return $this
     */
    public function method($method = null): static
    {
        $this->method = $method ?? request()->method();
        return $this;
    }

    /**
     * @param null $ip
     * @return $this
     */
    public function ip($ip = null): static
    {
        $this->ip = $ip ?? request()->ip();
        return $this;
    }

    /**
     * @param null $userAgent
     * @return $this
     */
    public function userAgent($userAgent = null): static
    {
        $this->userAgent = $userAgent ?? request()->userAgent();
        return $this;
    }

    /**
     * @param null $level
     * @return $this
     */
    public function level($level = null): static
    {
        $this->level = $level ?? $this->level;
        return $this;
    }

    /**
     * @param null $subject
     */
    #[NoReturn] public function save($subject = null)
    {
        $this->subject($this->subject ?? $subject);
        $this->details($this->subject);
        $this->url($this->url);
        $this->method($this->method);
        $this->ip($this->ip);
        $this->user($this->userId);
        $this->level($this->level);

        // Save log to database
        Log::create([
            $this
        ]);
    }
}
