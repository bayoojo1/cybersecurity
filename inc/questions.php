<?php
class Questions
{
    public function asset_security()
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT * FROM asset_security ORDER BY RAND() LIMIT 2";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $r = $stmt->fetchAll();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function comm_and_net_sec()
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT * FROM comm_and_net_sec ORDER BY RAND() LIMIT 2";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $r = $stmt->fetchAll();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function id_and_assess_mgt()
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT * FROM id_and_assess_mgt ORDER BY RAND() LIMIT 2";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $r = $stmt->fetchAll();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function security_ops()
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT * FROM security_ops ORDER BY RAND() LIMIT 2";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $r = $stmt->fetchAll();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function sec_and_risk_mgt()
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT * FROM sec_and_risk_mgt ORDER BY RAND() LIMIT 2";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $r = $stmt->fetchAll();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function sec_arch_and_eng()
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT * FROM sec_arch_and_eng ORDER BY RAND() LIMIT 2";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $r = $stmt->fetchAll();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function sec_assmt_and_testing()
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT * FROM sec_assmt_and_testing ORDER BY RAND() LIMIT 2";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $r = $stmt->fetchAll();
            $json[] = $r;
            return json_encode($json, JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function soft_dev_sec()
    {
        global $db;
        $json = array();

        try {
            $query = "SELECT * FROM soft_dev_sec ORDER BY RAND() LIMIT 2";
            $stmt = $db->prepare($query);
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