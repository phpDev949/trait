<?php
interface someDatabase
{
    public function connect();
}
trait MySQL
{
    public function connect()
    {
        echo "MySQL Connection Successfully Established \n";
    }
}
trait SQLServer
{
    public function connect()
    {
        echo "SQL Server Connection Successfully Established \n";
    }
}
trait exportingUtil
{
    public function toJson()
    {
        echo "Json export \n";
    }
    public function toXML()
    {
        echo "XML export \n";
    }
}
class MySQLClient implements someDatabase
{
    use MySQL, exportingUtil;
}
class SQLServerClient implements someDatabase
{
    use SQLServer, exportingUtil;
}
$m = new MySQLClient();
$m->connect();
$m->toJson();
$m->toXML();
echo "\n";
$s = new SQLServerClient();
$s->connect();
$s->toJson();
$s->toXML();
echo "\n";
/* RESULTS
* MySQL Connection Successfully Established 
* Json export 
* XML export 
*
* SQL Server Connection Successfully Established 
* Json export 
* XML export 
*/
?>
