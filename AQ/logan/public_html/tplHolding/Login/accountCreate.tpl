<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aura Aquatics Scheduling</title>
    <link rel="stylesheet" href="../../css/LoginGeneral.css" />
    <link rel="stylesheet" href="../../css/accountCreate.css" />
</head>
<body>     
    <div class ="contentContainer">
        <div class ="view">
            <div class="header">
                <img class="logo" src="../../images/logolog.png" alt="blank" width="100%" >
            </div>
            <div class = "container">
                <div class =" txt_feild">
                    <label>Enter Your Email:</label>
                    <input type="email" required>
                </div>
                <div class =" txt_feild">
                    <label>Choose a Password:</label>
                    <input type="password" required>
                </div>
                <div class =" txt_feild">
                    <label>Re-Enter Password:</label>
                    <input type="password" required>
                </div>
                
                <div class="buttonPadding">
                    <input class="button" onclick="window.location.href='emailVerification.php';"type="submit" value="Verify"> </input>
                </div> 

            </div>
            <div class = "footer">
                <p>
                    If you are have trouble logging in please try resetting password.
                    If that doesnt work please email cisdummy2022@gmail.com or contact your Manager
                </p>
            </div>
        </div>
    </div>
</body>
</html>