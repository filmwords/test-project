<h1>This is the index file</h1>

<h2>This line is added in the development branch</h2>

<p>Current time: <?php echo date('H:i:s'); ?></p>

<div>
    <?php echo file_get_contents('http://filmwords.com/monitoring/?embed=1'); ?>
</div>

<p><a href="page2.php">Go to page 2</a></p>
<p><a href="page3.html">link to Page3 (added in dev branch directly, not in feature branch)</a></p>
