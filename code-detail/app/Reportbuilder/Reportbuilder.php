<?php

namespace App\Reportbuilder;
 
use App\User;
use App\Make;

class Reportbuilder
{
    
    protected $tablename;

    /**
     * @param PaymentGatewayInterface $gateway
     */
    function __construct(String $tablename)
    {
        $this->tablename = $tablename;
    }

    public function export($parameters = array())
    {
        return $this->tablename->getall($parameters);
    }
    public function get($parameters = array())
    {
        return $this->tablename->getall($parameters);
    }

  
    public function build($name)
    {
        switch($name)
        {
            case 'users':
                $this->tablename = new User();
                break;
			 case 'make':
                $this->tablename = new Make();
                break;

        }

        return $this;
    }
}