<a href="index.php">Go back to index</a>
| <a href="<?php echo $_SERVER["REQUEST_URI"];?>">Refresh</a>

<!-- If "fixed_title" option under "popup_window" section (settings.json)
     is empty, then title for the popup window will be set using meta title -->
<title>Popup</title>
<h1>Popup</h1>

<a href="javascript:window.open('index.php')">window.open('index.php')</a>
<br><br>

<a href="javascript:window.open('index.php', '', 'width=1024,height=768')">
        window.open('index.php', '', 'width=1024,height=768')</a>
<br><br>

<a href="index.php" target="_blank">target="_blank"</a>
<br><br>