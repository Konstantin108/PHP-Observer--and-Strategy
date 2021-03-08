<?php


class Applicant implements Observer
{
    private $firstName;
    private $lastName;
    private $email;
    private $workExperience;

    /**
     * Applicant constructor.
     */
    public function __construct($firstName, $lastName, $email, $workExperience)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->workExperience = $workExperience;
        HandHunter::getInstance()->register($this);
    }

    function notify($data)
    {
        echo
            $this->firstName . ' ' .
            $this->lastName . ' ' .
            $this->email . ' ' .
            $this->workExperience . ' ' .
            '- оповещён о появлении на сайте новой вакансии' . '<br>';
    }
}