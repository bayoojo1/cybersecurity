<?php
  include "header.php";
  require_once __DIR__ . "/inc/bootstrap.php";

  $questions = new Questions();
  $asset_securities = $questions->asset_security();
  $asset_securities = json_decode($asset_securities, true);

  $comm_and_net_sec = $questions->comm_and_net_sec();
  $comm_and_net_secs = json_decode($comm_and_net_sec, true);

  $id_and_assess_mgt = $questions->id_and_assess_mgt();
  $id_and_assess_mgts = json_decode($id_and_assess_mgt, true);

  $security_ops = $questions->security_ops();
  $security_ops = json_decode($security_ops, true);

  $sec_and_risk_mgt = $questions->sec_and_risk_mgt();
  $sec_and_risk_mgts = json_decode($sec_and_risk_mgt, true);

  $sec_arch_and_eng = $questions->sec_arch_and_eng();
  $sec_arch_and_engs = json_decode($sec_arch_and_eng, true);

  $sec_assmt_and_testing = $questions->sec_assmt_and_testing();
  $sec_assmt_and_testings = json_decode($sec_assmt_and_testing, true);

  $soft_dev_sec = $questions->soft_dev_sec();
  $soft_dev_secs = json_decode($soft_dev_sec, true);
?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8 text-left"> 
      <h1 style="text-align:center;">Questionnaire</h1>
      <p>The questions below are based on research and analysis carried out on possible cryptojacking attack vectors, threat actors, vulnerabilities and posible mitigation actions. It covers the eight (8) domains of CISSP</p>
      <p>Provide your answers, and follow through with the recommendations in other to achieve a more secured system for your organisation.</p>
      <hr>
      
      <?php if(!empty($asset_securities) && (is_array($asset_securities))) : ?>
        <div style="overflow-x:auto;">
        <form action="result.php" method="POST">
            <table id="stakes" class="table table-striped" style="width:100%; background-color:#f0f0f5; color:white; font-size:12px;">
                <thead style="background-color:#4da6ff;">
                    <tr style="font-size:16px; font-weight:bold;">
                        <th>Question</th>
                        <th>Answer</th>
                    </tr>
                </thead>              
                <tbody> 
                <tr style="background-color:black; color:white">
                    <th>Asset Security</th>
                </tr>          
                <?php foreach($asset_securities as $asset_security) : ?> 
                    <?php foreach($asset_security as $index => $value) : ?>
                <tr>
                    <td style="color:black;"><?php echo $value['question']; ?></td>
                    <td style="color:white;">
                        <input type="checkbox" name="option[]" value="<?php echo 'asset_security-'. $value['id']; ?>">
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <tr style="background-color:black; color:white">
                    <th>Communication and Network Security</th>
                </tr> 
                <?php foreach($comm_and_net_secs as $comm_and_net_sec) : ?> 
                    <?php foreach($comm_and_net_sec as $index => $value) : ?>
                <tr>
                    <td style="color:black;"><?php echo $value['question']; ?></td>
                    <td style="color:white;">
                        <input type="checkbox" name="option[]" value="<?php echo 'comm_and_net_sec-'. $value['id']; ?>">
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <tr style="background-color:black; color:white">
                    <th>ID and Access Management</th>
                </tr>
                <?php foreach($id_and_assess_mgts as $id_and_assess_mgt) : ?> 
                    <?php foreach($id_and_assess_mgt as $index => $value) : ?>
                <tr>
                    <td style="color:black;"><?php echo $value['question']; ?></td>
                    <td style="color:white;">
                        <input type="checkbox" name="option[]" value="<?php echo 'id_and_assess_mgt-'. $value['id']; ?>">
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <tr style="background-color:black; color:white">
                    <th>Security Operation</th>
                </tr>
                <?php foreach($security_ops as $security_op) : ?> 
                    <?php foreach($security_op as $index => $value) : ?>
                <tr>
                    <td style="color:black;"><?php echo $value['question']; ?></td>
                    <td style="color:white;">
                        <input type="checkbox" name="option[]" value="<?php echo 'security_ops-'. $value['id']; ?>">
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <tr style="background-color:black; color:white">
                    <th>Security and Risk Management</th>
                </tr>
                <?php foreach($sec_and_risk_mgts as $sec_and_risk_mgt) : ?> 
                    <?php foreach($sec_and_risk_mgt as $index => $value) : ?>
                <tr>
                    <td style="color:black;"><?php echo $value['question']; ?></td>
                    <td style="color:white;">
                        <input type="checkbox" name="option[]" value="<?php echo 'sec_and_risk_mgt-'. $value['id']; ?>">
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <tr style="background-color:black; color:white">
                    <th>Security Architecture and Engineering</th>
                </tr>
                <?php foreach($sec_arch_and_engs as $sec_arch_and_eng) : ?> 
                    <?php foreach($sec_arch_and_eng as $index => $value) : ?>
                <tr>
                    <td style="color:black;"><?php echo $value['question']; ?></td>
                    <td style="color:white;">
                        <input type="checkbox" name="option[]" value="<?php echo 'sec_arch_and_eng-'. $value['id']; ?>">
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <tr style="background-color:black; color:white">
                    <th>Security Assessment and Testing</th>
                </tr>
                <?php foreach($sec_assmt_and_testings as $sec_assmt_and_testing) : ?> 
                    <?php foreach($sec_assmt_and_testing as $index => $value) : ?>
                <tr>
                    <td style="color:black;"><?php echo $value['question']; ?></td>
                    <td style="color:white;">
                        <input type="checkbox" name="option[]" value="<?php echo 'sec_assmt_and_testing-'. $value['id']; ?>">
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <tr style="background-color:black; color:white">
                    <th>Software Development Security</th>
                </tr>
                <?php foreach($soft_dev_secs as $soft_dev_sec) : ?> 
                    <?php foreach($soft_dev_sec as $index => $value) : ?>
                <tr>
                    <td style="color:black;"><?php echo $value['question']; ?></td>
                    <td style="color:white;">
                        <input type="checkbox" name="option[]" value="<?php echo 'soft_dev_sec-'. $value['id']; ?>">
                    </td>
                </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                </tbody>   
            </table>
            <div style="text-align:center;">
                <input type="submit" value="Submit" class="btn btn-info btn-lg">
            </div>
            </form>
            <div style="margin-bottom:20px"></div>
        </div>
        <?php endif; ?>

    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>

<?php 
  include "footer.php";
?>