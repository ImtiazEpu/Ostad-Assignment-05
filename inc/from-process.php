<?php
if ( $_SERVER[ "REQUEST_METHOD" ] === "POST" && $_POST[ 'submit' ] === "Send" ) {
    include_once 'Person.php';
    if ( class_exists( 'Person' ) ) {
        $person = new Person();
        $name   = filter_input( INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
        $email  = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
        if ( ! empty( $name ) && ! empty( $email ) ) {
            $person->setName( $name );
            $person->setEmail( $email );
            ?>
            <div>
            <pre>
                 <h4>Form Submission Data</h4>
                <?php
                echo "<p><strong>Name:</strong>" . $person->getName() . "</p>";
                echo "<p><strong>Email:</strong>" . $person->getEmail() . "</p>";
                ?>
            </pre>
            </div>
            <?php
        } else {
            echo "<pre>Field's is required and cannot be empty</pre>";
        }
    } else {
        echo "<pre>Class Person not found.</pre>";
    }

}