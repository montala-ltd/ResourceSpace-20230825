<?php

function HookResourceconnectViewNextpreviewregeneratekey()
	{
	if (getval("resourceconnect_source","")=="") {return false;} # Not a ResourceConnect result set. 
	
	global $ref,$k,$scramble_key;
	
	# Create a new key when moving next/back for a given result set.
	
	$access_key=md5("resourceconnect" . $scramble_key);
	$k=substr(md5($access_key . $ref),0,10);
	
	return $k;
	}

function HooKResourceconnectViewReplaceviewnav()
    {
     # Replace navigation links for view page.
   global $is_resourceconnect,$show_related_themes;
   
   if (isset($is_resourceconnect))
       {      
       $show_related_themes=false;# Never show related themes
      return true;
       }
    }

function HooKResourceconnectViewReplacemaxlink()
    {
    # Replace navigation links for view page.
    global $is_resourceconnect;
    if (isset($is_resourceconnect))
        {       
        return true;
        }
    }
    
function HookResourceconnectViewViewallresults()	
	{
	# View all results.
	if (getval("resourceconnect_source","")=="") {return false;} # Not a ResourceConnect result set. 

	global $lang,$search;
	?>
	
	<a href="<?php echo urlencode(getval("resourceconnect_source","")) ?>/pages/search.php?search=<?php echo urlencode($search) ?>" onClick="return CentralSpaceLoad(this,true);"><?php echo $lang["viewallresults"]?></a>
	<?php
	return true;
	}


function HookResourceconnectViewNextpreviousextraurl()
	{
	if (getval("resourceconnect_source","")=="") {return false;} # Not a ResourceConnect result set. 

	# Forward the resourceconnect source.

	global $baseurl;
	return ("resourceconnect_source=" .$baseurl);
	}
	
function HookResourceconnectViewPreviewextraurl()
	{
	if (getval("resourceconnect_source","")=="") {return false;} # Not a ResourceConnect result set. 

	# Forward the resourceconnect source.

	global $baseurl;
	return ("resourceconnect_source=" .$baseurl . "\" target='_blank' empty=\"");
	}


function HookResourceconnectViewResourceactions_anonymous()
	{
	if (getval("resourceconnect_source","")=="") {return false;} # Not a ResourceConnect result set.

	global $lang,$title_field,$ref,$baseurl,$search,$offset,$scramble_key,$language,$resource;
	
	# Generate access key
	$access_key=md5("resourceconnect" . $scramble_key);
	
	# Formulate resource link (for collections bar)
	$view_url=$baseurl . "/pages/view.php?modal=true&ref=" . $ref . "&k=" . substr(md5($access_key . $ref),0,10) . "&language_set=" . urlencode($language) . "&resourceconnect_source=" . urlencode($baseurl);
	
	# Add to collections link.
	$url=getval("resourceconnect_source","") . "/plugins/resourceconnect/pages/add_collection.php?nc=" . time();
	$url.="&title=" . urlencode(get_data_by_field($ref,$title_field));
	$url.="&url=" . urlencode($view_url);
	
	# Add back URL
	$url.="&back=" . urlencode($baseurl . "/pages/view.php?" . $_SERVER["QUERY_STRING"]);
	
	# Add images
	if ($resource["has_image"]==1)
		{ 
		$url.="&thumb=" . urlencode(get_resource_path($ref,false,"col",false,"jpg"));
		$url.="&large_thumb=" . urlencode(get_resource_path($ref,false,"thm",false,"jpg"));
		$url.="&xl_thumb=" . urlencode(get_resource_path($ref,false,"pre",false,"jpg"));
		}	
	else
		{
		$url.="&thumb=" . urlencode($baseurl . "/gfx/" . get_nopreview_icon($resource["resource_type"],$resource["file_extension"],true));
		$url.="&large_thumb=" . urlencode($baseurl . "/gfx/" . get_nopreview_icon($resource["resource_type"],$resource["file_extension"],false));
		$url.="&xl_thumb=" . urlencode($baseurl . "/gfx/" . get_nopreview_icon($resource["resource_type"],$resource["file_extension"],false));
		}

	?>	
	<li><a target="collections" class="addToCollection" href="<?php echo $url ?>" onClick="return CollectionDivLoad(this,true);"><i class="fa fa-plus-circle"></i> <?php echo $lang["action-addtocollection"]?></a></li>
	<?php 
	}
	
	
function HookResourceconnectViewAfterheader()
	{
	?>
	<!-- START GRAB -->
	<?php
	}
	

function HookResourceconnectViewBeforefooter()
	{
	?>
	<!-- END GRAB -->
	<?php
	}

function HookResourceconnectViewBeforefields()
    {
    global $applicationname,$lang,$resourceconnect_affiliates,$resourceconnect_this;
    ?>
    <div class="itemNarrow"><h3><?php echo $lang["resourceconnect_affiliate"] ?></h3><p><?php echo $resourceconnect_affiliates[$resourceconnect_this]["name"] ?></p></div>
    <?php    
    }
