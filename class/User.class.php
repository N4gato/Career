<?php 

/**
* 
*/
class User
{
	private $_name ;
	private $_prenom ;
	private $_mail ;
	private $_CNE ;
	private $_usreName ;
	private $_pwd ;
	private $_pwdSh1 ;

	function __construct(array $info)
	{
		# code...
		set_name($info['name']);
		set_prenom($info['prenom']);
		set_mail($info['mail']);
		set_CNE($info['CNE']);
		set_usreName($info['userName']);
		set_pwd($info['pwd']);
		set_pwdSh1($info['pwdSh1']);

	}
	
	








    /**
     * Gets the value of _name.
     *
     * @return mixed
     */
    public function get_name()
    {
        return $this->_name;
    }
    
    /**
     * Sets the value of _name.
     *
     * @param mixed $_name the _name
     *
     * @return self
     */
    public function set_name($_name)
    {
        $this->_name = $_name;

        return $this;
    }

    /**
     * Gets the value of _prenom.
     *
     * @return mixed
     */
    public function get_prenom()
    {
        return $this->_prenom;
    }
    
    /**
     * Sets the value of _prenom.
     *
     * @param mixed $_prenom the _prenom
     *
     * @return self
     */
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Gets the value of _mail.
     *
     * @return mixed
     */
    public function get_mail()
    {
        return $this->_mail;
    }
    
    /**
     * Sets the value of _mail.
     *
     * @param mixed $_mail the _mail
     *
     * @return self
     */
    public function set_mail($_mail)
    {
        $this->_mail = $_mail;

        return $this;
    }

    /**
     * Gets the value of _CNE.
     *
     * @return mixed
     */
    public function get_CNE()
    {
        return $this->_CNE;
    }
    
    /**
     * Sets the value of _CNE.
     *
     * @param mixed $_CNE the _ c n e
     *
     * @return self
     */
    public function set_CNE($_CNE)
    {
        $this->_CNE = $_CNE;

        return $this;
    }

    /**
     * Gets the value of _usrName.
     *
     * @return mixed
     */
    public function get_usreName()
    {
        return $this->_usreName;
    }
    
    /**
     * Sets the value of _usreName.
     *
     * @param mixed $_usreName the _usre name
     *
     * @return self
     */
    public function set_usreName($_usrName)
    {
        $this->_usreName = $_usreName;

        return $this;
    }

    /**
     * Gets the value of _pwd.
     *
     * @return mixed
     */
    public function get_pwd()
    {
        return $this->_pwd;
    }
    
    /**
     * Sets the value of _pwd.
     *
     * @param mixed $_pwd the _pwd
     *
     * @return self
     */
    public function set_pwd($_pwd)
    {
        $this->_pwd = $_pwd;

        return $this;
    }

    /**
     * Gets the value of _pwdSh1.
     *
     * @return mixed
     */
    public function get_pwdSh1()
    {
        return $this->_pwdSh1;
    }
    
    /**
     * Sets the value of _pwdSh1.
     *
     * @param mixed $_pwdSh1 the _pwd sh1
     *
     * @return self
     */
    public function set_pwdSh1($_pwdSh1)
    {
        $this->_pwdSh1 = $_pwdSh1;

        return $this;
    }
}
 ?>