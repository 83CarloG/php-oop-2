<?php

class User {

    protected $name;
    protected $lastname;
    public $email;
    public $password;

    public function setName ($name) 
    {
        $this->name = $name;
    }
    public function getName () 
    {
        return $this->name ;
    }
    public function setLastname ($lastname) 
    {
        $this->lastname = $lastname;
    }
    public function getLastname () 
    {
        return $this->lastname ;
    }
}

class Employee extends User {
    public $livello;
    public function __construct($email, $password, $livello = 0)
    {
        $this->email = $email;
        $this->password = $password;
        $this->livello = $livello;
    }
} 

$employee1 = new Employee('cgcolombo@email.it', 'carlus');
$employee1->setName('carlo');
$employee1->setLastname('colombo');
$employee1->livello = 5;

$employee2 = new Employee('paola@email.it', 'lott46');
$employee2->setName('paola');
$employee2->setLastname('pastori');

$employee3 = new Employee('mario55@email.it', 'persico49');
$employee3->setName('mario');
$employee3->setLastname('rossi');

$employees = [$employee1, $employee2, $employee3];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- style -->
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
</head>
<body>
<table>
    <tr>

    </tr>
        <?php foreach ($employees as $k => $employee) { ?>
            <tr>
                <td> <?php echo $k; ?> </td>
                <td> <?php echo $employee->getName(); ?> </td>
                <td> <?php echo $employee->getLastname(); ?> </td>
                <td> <?php echo $employee->email; ?> </td>
                <td> <?php echo $employee->password; ?> </td>
                <td> <?php echo $employee->livello; ?> </td>       
            </tr>
        <?php } ?>
</table>
</body>
</html>
