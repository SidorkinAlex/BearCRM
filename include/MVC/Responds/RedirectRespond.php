<?php


namespace SuiteCRM\MVC\Responds;


class RedirectRespond implements RespondInterface
{
    protected $redirectURI = '';

    /**
     * HTMLRespond constructor.
     * @param string $content
     * @param int $status
     */
    public function __construct(string $redirectURI)
    {
        $this->redirectURI = $redirectURI;
    }

    public function show(): string
    {
        header("Location: {$this->redirectURI}");
        return "";
    }

    public function is_empty(): bool
    {
        return false;
    }
}