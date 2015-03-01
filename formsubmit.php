<?php
include "dbconnect.php";


$FirstName          = isset($_REQUEST['FirstName'])     ? $_REQUEST['FirstName']        :"";
$Lastname           = isset($_REQUEST['LastName'])      ? $_REQUEST['LastName']         :"";
$Email              = isset($_REQUEST['Email'])         ? $_REQUEST['Email']            :"";
$CellPhone          = isset($_REQUEST['CellPhone'])     ? $_REQUEST['CellPhone']        :"";
$VerificationNo     = isset($_REQUEST['VerificationNo'])? $_REQUEST['VerificationNo']   :"";
$Country            = isset($_REQUEST['Country'])       ? $_REQUEST['Country']          :"";
$Name               = isset($_REQUEST['Name'])          ? $_REQUEST['Name']             :"";
$Phone              = isset($_REQUEST['Phone'])         ? $_REQUEST['Phone']            :"";
$City               = isset($_REQUEST['City'])          ? $_REQUEST['City']             :"";
$Address            = isset($_REQUEST['Address'])       ? $_REQUEST['Address']          :"";
$Relationship       = isset($_REQUEST['Relationship'])  ? $_REQUEST['Relationship']     :"";
$submit             = isset($_REQUEST['submit'])        ? $_REQUEST['submit']           :"";



query("INSERT INTO contactform
   SET firstname                                        = '$FirstName',
       lastname                                         = '$Lastname',
           email                                        = '$Email',
               cellphone                                = '$CellPhone',
                   verificationno                       = '$VerificationNo',
                       country                          = '$Country',
                           name                         = '$Name',
                               phone                    = '$Phone',
                                   city                 = '$City',
                                       address          = '$Address',
                                           relationship = '$Relationship'
                                               ");
//echo "Success";



?>


 <table border="0" cellpadding="5" cellspaceing="0" width="600">
                <tr>
                    <td><b> First, Last Name*:</b></td>
                    <td>
                        <?php echo $FirstName; ?>
                        <?php echo $Lastname; ?>
                        
                    
                        
                    </td>
                </tr><tr>
                    <td><b>Email*:</b></td>
                    <td>
                        <?php echo $Email; ?>
                    </td>
                </tr><tr>
                    <td><b>Cell Phone*:</b></td>
                    <td>
                        <?php echo $CellPhone; ?>
                    </td>
                </tr><tr>
                    <td><b>Verification No*:</b></td>
                    <td>
                        <?php echo $VerificationNo; ?>
                    </td>
                </tr><tr>
                    <td><b>Country:</b></td>
                    <td>
                        <?php echo $Country; ?>
                </tr><tr>
                    <td><h3>BD Contact Person Details</h3></td>
            </tr><tr>
                    <td><b>Name*:</b></td>
                    <td>
                        <?php echo $Name; ?>
                    </td>
                </tr><tr>
                    <td><b>Phone*:</b></td>
                    <td>
                        <?php echo $Phone; ?>
                    </td>
                </tr><tr>
                    <td><b>City*:</b></td>
                    <td>
                        <?php echo $City; ?>
                    </td>
                </tr><tr>
                    <td><b>Address*</b></td>
                    <td>
                        <?php echo $Address; ?>
                    </td>
                </tr><tr>
                    <td><b>Relationship*:</b></td>
                    <td>
                        <?php echo $Relationship; ?>
                    </td>
                </tr><tr>
                    <td colspan="2" align="center">
                        </br>
                        </br>
                        <p>Successfully Submit</p>

<button onclick="myFunction()">Done</button>

<script>
function myFunction() {
    alert("Thank you!");
}
</script>
                    </td>
                </tr>
            </table>