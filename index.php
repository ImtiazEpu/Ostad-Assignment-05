<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module - 05 Assignment</title>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="assets/milligram.css">

    <style>
        body {
            margin-top: 30px;
        }

        .accordion {
            margin: 50px 0px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column">
            <h1 style="text-align: center;">Module - 05 Assignment</h1>
            <h4 style="text-align: center;">HTML, Basic OOP, and Super-global Variables in PHP</h4>
            <div class="accordion">
                <details>
                    <summary>Task 1: HTML Basics</summary>
                    Create an HTML form that allows users to input their name and email address. The form should have
                    two fields: one for name and one for email. Use appropriate HTML tags to structure the form.
                </details>
                <details>
                    <summary>Task 2: Basic OOP in PHP</summary>
                    <div><h5>Create a PHP class called <code>"Person"</code> with the following properties and methods:
                        </h5></div>
                    <div><strong>Properties:</strong> <code>Name</code>, <code>Email</code></div>
                    <div>
                        <strong> Methods:</strong>
                        <ol>
                            <li><code>setName($name)</code>: sets the name property</li>
                            <li><code>setEmail($email)</code>: sets the email property</li>
                            <li><code>getName()</code>: returns the name property</li>
                            <li><code>getEmail()</code>: returns the email property</li>
                        </ol>
                    </div>
                    <div><h5> Create an instance of the Person class and set the name and email properties. Use the
                            <code>getName()</code> and <code>getEmail()</code> methods to display the properties on the
                            webpage.</h5></div>
                </details>
                <details>
                    <summary>Task 3: Super-global Variables in PHP</summary>
                    Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the
                    <code>$_POST</code> superglobal variable. Create a new instance of the Person class and use the
                    <code>setName()</code> and <code>setEmail()</code> methods to set the name and email properties
                    based on the form data. Use the <code>getName()</code> and <code>getEmail()</code> methods to
                    display the properties on the webpage.
                </details>
            </div>
            <div>
                <?php include_once 'inc/from-process.php' ?>
            </div>
            <form method="POST">
                <fieldset>
                    <label for="nameField">Name</label>
                    <input type="text" name="name" placeholder="Enter you name" id="nameField" required>
                    <label for="emilField">Email</label>
                    <input type="email" name="email" placeholder="example@mail.com" id="emilField" required>
                    <input style="width: 100%" class="button-primary" type="submit" name="submit" value="Send">
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>