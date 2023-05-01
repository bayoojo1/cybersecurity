<?php
  include "header.php";
  require_once __DIR__ . "/inc/bootstrap.php";

  $getAnswers = new Answers();

  if(isset($_POST['option']) && !empty($_POST['option'])) {
    $answers = $_POST['option']; 
  } else {
    $answers = [];
  }
?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Your Organisation Risk Profile</h1>
      <?php
        echo 'You answered ' . count($answers) . ' out of 16 questions';
        echo "<br />";
        echo "<br />";
      ?><?php
          if(count($answers) === 0) {
            echo "<p style='font-size:20px; background-color:black; color:white; text-align:center;'>You did not provide answer to any of the questions!</p>";
            exit;
          }
        ?><?php
            $risk = '';
           if(count($answers) >= 12) {
            $risk = 'Low';
            echo "<p style='background-color:green; color:white; font-size:16px; text-align:center'>Your organisation's risk to Cryptojacking attack is " .$risk.'</p>';
           } else if(count($answers) <= 7) {
            $risk = 'High';
            echo "<p style='background-color:red; color:white; font-size:16px; text-align:center;'>Your organisation's risk to Cryptojacking attack is " .$risk.'</p>';
           } else {
            $risk = 'Medium';
            echo "<p style='background-color:orange; color:white; font-size:16px; text-align:center;'>Your organisation's risk to Cryptojacking attack is " .$risk.'</p>';
           }
        ?>
        <p>You answered 'YES' to the question(s) below:</p>
        <?php
            foreach ($answers as $answer) {
                $tableName = explode("-", $answer)[0];
                $id = explode("-", $answer)[1];
                $getAnswer = $getAnswers->vomitAnswers($tableName, $id);
                $theQuestion = json_decode($getAnswer, true);
                echo  '<pre>'.$theQuestion[0]['question'].'</pre>';
            }
          
        ?>

      <!---This is just for a test----->
      <hr>
      <h3>Below are our recommendations</h3>
      <?php
        foreach ($answers as $answer) {
          $array[] = explode('-', $answer)[0];
        }
        
        $domains = array('asset_security', 'comm_and_net_sec', 'id_and_assess_mgt', 'security_ops', 'sec_and_risk_mgt', 'sec_arch_and_eng', 'sec_assmt_and_testing', 'soft_dev_sec');
        $results = array_diff($domains, $array);
        
        foreach ($results as $result) {
          //get the recommendations from the db
          $getRecommendation = $getAnswers->recommendations($result);
          $getRecommendation = json_decode($getRecommendation, true);
         
          echo '<p style="font-size:16px"><a href='.$getRecommendation[0][0]['domain'].".php".'>'.$getRecommendation[0][0]['heading'].'</a></p>';
        } 
      ?>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>
<?php 
  include "footer.php";
?>