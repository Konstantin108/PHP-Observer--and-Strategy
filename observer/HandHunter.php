<?php


class HandHunter
{
    private $observers;
    private $jobOpportunity;
    private static $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * @return HandHunter|null
     */
    public static function getInstance(): ?HandHunter
    {
        if(self::$instance == null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function register(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @return mixed
     */
    public function getAddedjobOpportunity()
    {
        return $this->jobOpportunity;
    }

    /**
     * @param mixed $jobOpportunity
     */
    public function setAddedjobOpportunity($jobOpportunity): void
    {
        $this->jobOpportunity = $jobOpportunity;
        $this->notifyObservers();
    }

    private function notifyObservers()
    {
        foreach ($this->observers as $observer)
        {
            $observer->notify($this->jobOpportunity);
        }
    }
}