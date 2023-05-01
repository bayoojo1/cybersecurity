<?php 
class Answers
{
    public function vomitAnswers($tableName, $id)
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT question FROM $tableName WHERE id = :id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            $r = $stmt->fetch();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function recommendations($result) 
    {
        global $db;
        $json = array();
        try {
            $query = "SELECT * FROM cissp_domain WHERE domain = :domain";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':domain', $result, PDO::PARAM_STR);
            $stmt->execute();
            $r = $stmt->fetchAll();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

?>