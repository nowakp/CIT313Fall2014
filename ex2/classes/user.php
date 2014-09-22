<?php
class User
{
    protected $user_id;

    protected $user_type;

    protected $first_name;

    protected $last_name;

    protected $email_address;

    protected $user_level;
    
    public function setFirst($First)
    {
        $this->first_name = $First;
        return;
    }
    
    public function getFirst()
    {
        return $this->first_name;
    }

}
?>