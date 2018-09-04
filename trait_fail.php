<?php

trait MySQL
{
    public function connect()
    {
        echo 'MySQL Connection Successfully Established';
    }
}

trait SQLServer
{
    public function connect()
    {
        echo 'SQL Server Connection Successfully Established';
    }
}

class DatabaseClient
{
    use MySQL, SQLServer;
}

$client = new DatabaseClient();

$client->connect();
echo '<br>';
$client->s_connect();

?>

/* ERROR RESULT:
* PHP Fatal error:  Trait method connect has not been applied, because there are collisions with other trait methods on DatabaseClient in /Users/jack/Documents/trait/index.php on line 19
* 
* Fatal error: Trait method connect has not been applied, because there are collisions with other trait methods on DatabaseClient in /Users/jack/Documents/trait/index.php on line 19
*/
