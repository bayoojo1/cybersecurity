<?php
  include "header.php";
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 style="text-align:center;">Cryptojacking Risk Assessment Tool</h1>
      <p style="text-align:center;">This tool would help in assessing any organisation risk level to Cryptojacking attack, and also provide recommendations on how they can mitigate the risk and improve their resilience to Cryptojacking attack.</p>
      <hr>
        <div class="jumbotron" style="background-color:#4da6ff; color:white;">
          <h3 style="text-align:center;">How To Use</h3>
          
            <p style="text-align:center; font-size:14px;">You are presented with a set of questions aim at eliciting the security posture and risks of your organisation.</p> 
            <p style="text-align:center; font-size:14px;">Provide your answer to each of the questions by ticking the checkboxes accordingly.</p>
            <p style="text-align:center; font-size:14px">A risk profile is returned based on your answers to the questions.</p>
            <p style="text-align:center; font-size:14px">The risk profile is accompanied with control recommendations.</p>
         
            <div>
              <p style="text-align:center; font-size:14px">To start, please click the button below.</p> 
              <div style="text-align:center;">
                <a href="questionnaire.php"><button type="button" class="btn btn-lg" style="background-color:black; color:white;">Start</button></a>
              </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>
<?php 
  include "footer.php";
?>