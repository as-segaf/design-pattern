<?php
class CustomerBuilder{

     /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName = "";

    /**
     * @var string
     */
    private $email = "";

    /**
     * @var int
     */
    private $age;


    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of firstName
     *
     * @param  string  $firstName
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @param  string  $lastName
     *
     * @return  self
     */ 
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of age
     *
     * @param  int  $age
     *
     * @return  self
     */ 
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    public function build() :Customer
    {
        return new Customer(
            $this->id,
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->age
        );
    }
}