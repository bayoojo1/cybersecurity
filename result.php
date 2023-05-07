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
      <h1 style="text-align:center;">Your Organisation Risk Profile</h1>
      <?php
        echo '<p style="text-align:center;">You answered ' . count($answers) . ' out of 16 questions</p>';
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
            echo "<div style='text-align:center;'>";
            echo "<span style='background-color:green; color:white; font-size:26px; padding:20px;'>Risk is " .$risk.'</span>';
            echo "</div>";
           } else if(count($answers) <= 7) {
            $risk = 'High';
            echo "<div style='text-align:center;'>";
            echo "<span style='background-color:red; color:white; font-size:26px; padding:20px;'>Risk is " .$risk.'</span>';
            echo "</div>";
           } else {
            $risk = 'Medium';
            echo "<div style='text-align:center;'>";
            echo "<span style='background-color:orange; color:white; font-size:26px; padding:20px;'>Risk is " .$risk.'</span>';
            echo "</div>";
           }
        ?>
        <br />
        <br />
        <p style="text-align:center;">You answered 'YES' to the question(s) below:</p>
        <?php
            foreach ($answers as $answer) {
                $tableName = explode("-", $answer)[0];
                $id = explode("-", $answer)[1];
                $getAnswer = $getAnswers->vomitAnswers($tableName, $id);
                $theQuestion = json_decode($getAnswer, true);
                echo  '<pre>'.$theQuestion[0]['question'].'</pre>';
            }
          
        ?><?php 
        $domains = array('asset_security', 'comm_and_net_sec', 'id_and_assess_mgt', 'security_ops', 'sec_and_risk_mgt', 'sec_arch_and_eng', 'sec_assmt_and_testing', 'soft_dev_sec');

          foreach ($answers as $answer) {
            $count[] = explode('-', $answer)[0];
          }
          $results = array_diff($domains, $count);

          if(count($answers) === 16) {
            echo '<br />';
            echo '<p style="text-align:center; font-size:26px;">No recommendation</p>';
            echo '<p style="text-align:center; font-size:16px;">Your organisation meets all the requirements in the CISSP eight domains.</p>';
            echo '<br />';
          } else if(count($results) === 0) {
            echo '<p style="text-align:center; font-size:26px;">No recommendation</p>';
            echo '<p style="text-align:center; font-size:16px;">Even though your organisation did not meet (ALL) the requirements in the CISSP eight domains as provided in this tool, you\'ve implemented at least one requirement in each of the 8 domains.</p>';
          } else {
            echo '<hr>';
            echo '<h3 style="text-align:center;">Below are our recommendations</h3>';
            echo '<p style="text-align:center;">Click on each to see the steps to be taken to improve your organisation resilience to cryptopjacking attack</p>';
            echo '<br />';
            
            foreach ($results as $result) {
              //get the recommendations from the db
              $getRecommendation = $getAnswers->recommendations($result);
              $getRecommendation = json_decode($getRecommendation, true);
            
              echo '<p style="font-size:16px; text-align:center;"><a href='.$getRecommendation[0][0]['domain'].".php".' target="_blank">'.$getRecommendation[0][0]['heading'].'</a></p>';
            } 
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