<!DOCTYPE html>
<!--Author :  Md Asadujjaman Rony
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Form</title>
    </head>
    <body>
        <h2>Personal Information</h2>
        <form action="formsubmit.php" method="post">
            <table border="0" cellpadding="5" cellspaceing="0" width="600">
                <tr>
                    <td><b> First, Last Name*:</b></td>
                    <td>
                        <input id="FirstName" name="FirstName" type="text" maxlength="60" style="width: 146px; border: 1px solid#999999" />
                        <input id="LastName" name="LastName" type="text" maxlength="60" style="width: 140px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td><b>Email*:</b></td>
                    <td>
                        <input id="Email" name="Email" type="text" maxlength="60" style="width: 250px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td><b>Cell Phone*:</b></td>
                    <td>
                        <input id="CellPhone" name="CellPhone" type="text" maxlength="15" style="width: 250px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td><b>Verification No*:</b></td>
                    <td>
                        <input id="VerificationNo" name="VerificationNo" type="text" maxlength="15" style="width: 250px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td><b>Country:</b></td>
                    <td>
                        <input id="Country" name="Country" type="text" maxlength="100" style="width: 146px; border: 1px solid#999999" /></td>
                </tr><tr>
                    <td><h3>BD Contact Person Details</h3></td>
            </tr><tr>
                    <td><b>Name*:</b></td>
                    <td>
                        <input id="Name" name="Name" type="text" maxlength="100" style="width: 300px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td><b>Phone*:</b></td>
                    <td>
                        <input id="Phone" name="Phone" type="text" maxlength="15" style="width: 300px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td><b>City*:</b></td>
                    <td>
                        <input id="City" name="City" type="text" maxlength="20" style="width: 250px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td><b>Address*</b></td>
                    <td>
                        <input id="Address" name="Address" type="text" maxlength="100" style="width: 250px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td><b>Relationship*:</b></td>
                    <td>
                        <input id="Relationship" name="Relationship" type="text" maxlength="20" style="width: 100px; border: 1px solid#999999" />
                    </td>
                </tr><tr>
                    <td colspan="2" align="center">
                        </br>
                        </br>
                        <input id="submit" name="submit" type="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
