<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" type="image/ico" href="favicon.png" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faithful 32 - Modded Edition</title>
    <link href="Style.css" rel="stylesheet">
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-49976593-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body>
<!-- Logo -->
<h1 id="Logo">Faithful 32 <span style="color: #0026FF">Modd</span><span style="color: #32A800">ed Edi</span><span style="color: #E50000">tion</span></h1>
<!-- 1.7.10 DL -->
<a href="http://www.f32.me/F32-1.7.10.zip">
    <div class="LeftButton fluid-container">
        <span style="font-weight: bold; text-align: center">Download</span><br>
        Latest Pack (1.7.10) <br>
        <!-- Fetch and display last time file was modified. -->
        <?php
        // Output example: Last rebuilt: March 27 2015 22:16:23.
        echo "Last rebuilt: ".date("F d Y H:i",@filemtime("F32-1.7.10.zip"));
        ?>
        <br>
        <!-- Fetch md5 value from build script file and display. -->
        <?php
        $my_file = @fopen("1710sum.md5", "r");
        echo "md5 hash value: ";
        echo @fgets($my_file);
        @fclose($my_file);
        ?>
    </div>
</a>

<!-- 1.6.4 DL -->
<a href="http://www.f32.me/F32-1.6.4.zip">
    <div class="RightButton fluid-container">
        <span style="font-weight: bold; text-align: center">Download</span><br>
        Latest Pack (1.6.4)<br>
        <!-- Fetch and display last time file was modified. -->
        <?php
        // Output example: Last rebuilt: March 27 2015 22:16:23.
        echo "Last rebuilt: ".date("F d Y H:i",@filemtime("F32-1.6.4.zip"));
        ?>
        <br>
        <!-- Fetch md5 value from build script file and display. -->
        <?php
        $my_file = @fopen("164sum.md5", "r");
        echo "md5 hash value: ";
        echo @fgets($my_file);
        @fclose($my_file);
        ?>
    </div>
</a>
<!-- 1.5.2 & 1.4.7 DL -->
<a href="http://www.f32.me/old">
    <div class="FullWidthButton fluid-container">Older Packs (1.5.2 & 1.4.7)</div>
</a>
<!-- 1.7.10 Mod Support -->
<a href="http://www.f32.me/1710">
    <div class="LeftButton fluid-container">Individual Mod Support (1.7.10)</div>
</a>
<!-- 1.6.4 Mod Support -->
<a href="http://www.f32.me/164">
    <div class="RightButton fluid-container">Individual Mod Support (1.6.4)</div>
</a>
<div id="Text" class="fluid-container">
    <p>Please submit issues on Github <a href="https://github.com/F32Organization/Faithful32-1.7.10">(1.7.10)</a>
        <a href="https://github.com/F32Organization/Faithful32-1.6.4">(1.6.4)</a> if you have any questions, comments, or concerns.<br>
        Specific texture requests are acceptable.</p>
    <p id="Credit">Credit: Hosting provided by Greenphlem. <a href="https://github.com/F32Organization/siteF32/graphs/contributors">
            Designed by Github Contributors.</a> <a href="http://www.minecraftforum.net/forums/mapping-and-modding/resource-packs/1223254">
            Vanilla pack by Vattic.</a> <a href="https://github.com/F32Organization/Faithful32-1.7.10/graphs/contributors">
            Modded work by Github Contributors and older third parties.</a></p>
</div>
</body>
</html>
