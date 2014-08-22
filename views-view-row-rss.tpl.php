<?php
// $Id: views-view-row-rss.tpl.php,v 1.1 2008/12/02 22:17:42 merlinofchaos Exp $
/**
 * @file views-view-row-rss.tpl.php
 * Default view template to display a item in an RSS feed.
 *
 * @ingroup views_templates
 */
?>
  <item>
    <title><?php print $title; ?></title>
    <description><?php print $description; ?></description>
    <?php $item_elements = ereg_replace('<pubDate>.*</pubDate>', '', $item_elements);  // removes pubdate
$item_elements = ereg_replace('<dc:creator>.*</dc:creator>', '', $item_elements);  // removes author
$item_elements = ereg_replace('<category .*</category>', '', $item_elements);  // removes terms

$item_elements = preg_replace("!^\s+(\D)!m", "\\1", $item_elements);  // removes some blank lines

print $item_elements;  ?>
  </item>
