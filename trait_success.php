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
    use MySQL, SQLServer {
      MySQL::connect insteadof SQLServer;
      SQLServer::connect as s_connect;
    }
}

$client = new DatabaseClient();

$client->connect();
echo "\n";
$client->s_connect();
echo "\n";

*/ RESULTS:
* MySQL Connection Successfully Established
* SQL Server Connection Successfully Established
*/
