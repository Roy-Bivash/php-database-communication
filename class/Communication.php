<?php
class Communication
{
    private $cnx;

    public function __construct(){
        try{
            $this->cnx = new PDO(getenv('BDD_DNS'), getenv('BDD_LOGIN'), getenv('BDD_MDP'), [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
        catch (PDOException $e){
            throw new Exception("Database Connexion Error : ".$e->getMessage());
        }
    }

    public function QUERY(string $query, array $values = [], array $params = ["response" => true])
    {
        if($query == NULL) throw new Exception("No Query Given");
        $sql = $this->cnx->prepare($query);
        for ($i = 0; $i <= count($values)-1; $i++) {
            if($values[$i] != NULL){
                $sql->bindValue($i+1,htmlspecialchars($values[$i], ENT_QUOTES, 'UTF-8'));
            }else{
                $sql->bindValue($i+1,$values[$i]);
            }
        }
        $sql->execute();
        return ($params["response"]) ? $sql->fetchAll(PDO::FETCH_ASSOC) : true;
    }
}
?>


