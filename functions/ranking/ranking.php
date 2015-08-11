<?php

# This Function use the PageRank Tool from WebPageAnalyse: http://www.webpageanalyse.com/pagerank
# Please note: Google™ search engine and PageRank™ algorithm are trademarks of Google Inc.

# Many Thanks to WebPageAnalyse!

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Anzeige der wichtigsten Website Rankings im Dashboard
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Kontaktdaten im Dashboard
add_action('wp_dashboard_setup', 'ck_dashboard_ranking');
function ck_dashboard_ranking() {
	global $wp_meta_boxes;
wp_add_dashboard_widget('custom_ranking_widget', 'Wichtige Website Rankings', 'custom_dashboard_ranking');
}

function custom_dashboard_ranking() {
	# Variablen
	# $website_url = get_site_url());
    # $website_url = str_replace("http://www.","",get_site_url());
	# $website_url = str_replace("https://www.","",get_site_url());
	# $website_url = str_replace("http://","",get_site_url());
	# $website_url = str_replace("https://","",get_site_url());
	$website_url = str_replace(array("http://www.","https://www.","http://","https://"),"",get_site_url());	

	# Alexa Ranking
	echo "<table style='width:100%'>";
	echo "<tr>";
	echo "<td>Goolge Page Rank</td>";
	echo "<td><img src='http://www.webpageanalyse.com/widget/pagerank/" . $website_url . "' alt='PageRank of christophkleinschmidt.de'>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Alexa Ranking</td>";
	echo "<td><a href='http://www.alexa.com/siteinfo/" . $website_url . "'><script type='text/javascript' src='http://xslt.alexa.com/site_stats/js/t/a?url=" . $website_url . "'></script></a></td>";
	echo "</tr>";
	echo "</table>";
}

?>