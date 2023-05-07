<?php
  include "header.php";
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 style="text-align:center;">Cryptojacking Risk Assessment Tool</h1>
      <p style="text-align:center;">The tool will assist in assessing any organization's vulnerability to Cryptojacking attacks, and provide recommendations on how to mitigate the risk and improve resilience.</p>
      <hr>
        <div class="jumbotron" style="background-color:#4da6ff; color:white;">
          <h3 style="text-align:center;">How To Use</h3>
          
            <p style="text-align:center; font-size:14px;">You will be asked a series of questions aimed at determining your organization's security posture and risks.</p> 
            <p style="text-align:center; font-size:14px;">To answer each question, tick the checkboxes as appropriate.</p>
            <p style="text-align:center; font-size:14px">Your answers are used to generate a risk profile.</p>
            <p style="text-align:center; font-size:14px">The risk profile is accompanied with control recommendations.</p>
         
            <div>
              <p style="text-align:center; font-size:14px">Click on the button below to get started.</p> 
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