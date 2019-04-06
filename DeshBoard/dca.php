<?php
 require 'db.php';
 $one=$_POST['copy'];
 if ($one==null) {
   $one=" We have not reviewed all real estate agents in Australia and have based our listings on industry body awards and sales figure awards. All care has been taken in the compilation of listings. However we cannot guarantee the quality of any advice given by individual agents or organisations listed on the website. Home buyers/sellers or investors should conduct their own due diligence before proceeding to appoint a real estate agent.Top 10 Real Estate Agent allows real estate agents and agencies who meet the website selection criteria to advertise and sponsor pages on the website. We also receive payments from agents where an agent enquiry form is submitted and a property is sold or rented out when we introduce users of the website to real estate agents and property managers. Where an agent enquiry form is submitted we will introduce users of the website to agents listed on the website where appropriate but may also pass user details onto other agents not listed on the website if appropriate. We will only ever pass user details onto one agent or property manager for each agent enquiry from submission.";
 }
 $update="UPDATE desclaimer SET des='$one'";
 $query=mysqli_query($connectionQuery,$update);

 if (!$query) {
   echo "Failed to change navbar";
   header("refresh:1 ; URL=footerch.php");
 }
 else {
   Header("location:footerch.php");
 }
 ?>













<?php
 require 'desh_file/desh_footer.php';
 ?>
