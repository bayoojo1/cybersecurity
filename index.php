<?php
  include "header.php";
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Cyberjacking Risk Assessment Tool</h1>
      <p>This tool would help in assessing any organisation's risk level to Cryptojacking attack, and also provide recommendations on how they can mitigate the risk and improve their resilience to Cryptojacking attack.</p>
      <hr>
      <h3>How To Use</h3>
      <ul>
        <li>You are presented with a set of questions aim at eliciting the security posture and risks of your organisation.</li> 
        <li>Provide your answer to each of the questions by ticking the checkboxes accordingly.</li>
        <li>A risk profile is returned based on your answers to the questions.</li>
        <li>The risk profile is accompanied with control recommendations.</li>
        </ul>
        <div>
          <p>To start, please click the button below.</p> 
          <a href="questionnaire.php"><button type="button" class="btn btn-success" style="background-color:black; color:white;">Start</button></a>
        </div>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>
<?php 
  include "footer.php";
?>