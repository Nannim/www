<?php
$handle = opendir('C:\wamp64\www\Nannim Video Player');
$projectContents = '';
while ($file = readdir($handle))
{
  if (is_dir($file))
  {
    $projectContents = '<li><a style="color:blue;" href='.$file.'>'.$file.'</a></li>';
  }
}
closedir($handle);
if (!isset($projectContents))
{
  echo 'No Files In List';
}
?>
<ol class="projects play-item" onclick='loadVideo("<?php echo $projectContents; ?>")';>
<?php echo $projectContents; ?>
</ol>
