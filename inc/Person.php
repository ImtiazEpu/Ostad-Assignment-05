<?php

/**
 * Initial Person Class
 */
class Person {
    private $name;
    private $email;

    /**
     * Sets the name property
     *
     * @param $name
     *
     * @return void
     */
    public function setName ( $name ): void {
        $this->name = $name;
    }

    /**
     * Sets the email property
     *
     * @param $email
     *
     * @return void
     */
    public function setEmail ( $email ): void {
        $this->email = $email;
    }

    /**
     * Returns the name property
     * @return mixed
     */
    public function getName () {
        return $this->name;
    }

    /**
     * returns the email property
     * @return mixed
     */
    public function getEmail () {
        return $this->email;
    }
}

$person = new Person();
$person->setName( "John Smith" );
$person->setEmail( "john@example.com" );
?>
<div>
    <pre>
        <h4>From Person class</h4>
        <?php
        echo "<p><strong>Name:</strong>" . $person->getName() . "</p>";
        echo "<p><strong>Email:</strong>" . $person->getEmail() . "</p>";
        ?>
    </pre>
</div>
