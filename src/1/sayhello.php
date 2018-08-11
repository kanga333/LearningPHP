<html>
<head>
    <title>PHP says hello</title>
</head>
<body>
<?php
if ($_POST['user']) {
    print "Hello, ";
    print $_POST['user'];
    print "!";
} else {
    print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Yout Name: <input type="text" name="user"/>
<br/>
<button type="submit">Say Hello</button>
</form>
_HTML_;
}
?>
</body>
</html>