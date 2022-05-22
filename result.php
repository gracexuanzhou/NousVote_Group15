<?php
$title = shell_exec("python3 title.py");
$vote_y = shell_exec("python3 vote1.py");
$vote_n = shell_exec("python3 vote2.py");
echo "<?xml version=\"1.0\"?>\n";
?>

<vxml version = "2.1" application="http://webhosting.voxeo.net/208143/www/root.vxml">
    <form>
        <block>
            <var name="title" expr="'<?=$title?>'"/>
            <var name="count_y" expr="'<?=$vote_y?>'"/>
            <var name="count_n" expr="'<?=$vote_n?>'"/>
            <prompt>The current vote is: <value expr="title"/>.</prompt>
            <break time="1000"/>
            <prompt>The amount of YES is: <value expr="count_y"/>.</prompt>
            <prompt>The amount of No is: <value expr="count_n"/>.</prompt>
        </block>
    </form>

</vxml>