<?php
/*

Template Name: Course Detail

*/
//set up xml



   $thecoursecode = $_GET['coursecode'];
       //add calocc in url to coursecode
		$thecoursecode .= $_GET['calocc'];
			
        $xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT']."/feed/course_export.xml")

		or die("Error: Cannot create object");

	    
foreach ($xml->COURSE as $item) {  //course item loop works

	
//cleanup the coursecode in the xml

//$justcourseid = ($item->COURSE_ID);
$justcourseid = ($item->OFFERING_ID);
$justcodefromx = ($item->COURSE_CODE);
$ccodefromx = ($item->COURSE_CODE);
$ccodefromx = (string)$ccodefromx;
$ccodefromx = ltrim($ccodefromx);
$ccodefromx = preg_replace( "/\r|\n/", "", $ccodefromx );	

//cleanup the calocc in the xml
    $cleancal =  ($item->CALOCC);
	$cleancal = (string)$cleancal;
	$cleancal = ltrim($cleancal);
	$ccodefromx .= $cleancal;
	
//add calocc to end of coursecode	
if ($thecoursecode==$ccodefromx){





/* HEADER  */ 
?>
<!DOCTYPE html>


<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->

<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9"> <![endif]-->

<!--[if gt IE 9]> <html <?php language_attributes(); ?>> <![endif]-->

<!--[if !IE]> <!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>

<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-PD9P8C3');</script>

<!-- End Google Tag Manager -->

        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <title>College Course | <?php echo ltrim($item->DESCRIPTION) . " | " . ltrim($item->COURSE_CODE) ?></title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <meta name="description" content="<?php $newmeta = ltrim($item->DESCRIPTION) . " | " . ltrim($item->ADDITIONAL_INFO);
		echo (substr($newmeta, 0, 260)) ?>" />

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



        <?php oxy_add_apple_icons( 'iphone_icon' ); ?>

        <?php oxy_add_apple_icons( 'iphone_retina_icon', '114x114' ); ?>

        <?php oxy_add_apple_icons( 'ipad_icon', '72x72' ); ?>

        <?php oxy_add_apple_icons( 'ipad_retina_icon', '144x144' ); ?>

        <link rel="shortcut icon" href="<?php echo oxy_get_option( 'favicon' ); ?>">



        <?php wp_head(); ?>

		<link rel="stylesheet" href="/wp-content/themes/omega-child-theme/web%20fonts/gandhisans_bold_macroman/stylesheet.css" type="text/css" charset="utf-8" />

		<link rel="stylesheet" href="/wp-content/themes/omega-child-theme/web%20fonts/gandhisans_bolditalic_macroman/stylesheet.css" type="text/css" charset="utf-8" />

		<link rel="stylesheet" href="/wp-content/themes/omega-child-theme/web%20fonts/gandhisans_italic_macroman/stylesheet.css" type="text/css" charset="utf-8" />

		<link rel="stylesheet" href="/wp-content/themes/omega-child-theme/web%20fonts/gandhisans_regular_macroman/stylesheet.css" type="text/css" charset="utf-8" />

    </head>

    <body <?php body_class(); ?>>
    <!--with head  -->

<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PD9P8C3"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

        <div class="pace-overlay"></div>

        <?php oxy_create_nav(); ?>

        <div id="content" role="main">

<?PHP
/*  END HEADER  */


 ?>



<div class="wrap">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">



			

			<!-- content -->

     <?php       

        


	

    //echo '<p> Record number ' . $count++ .  '</p>';

	echo '<section class="section swatch-light-grey section-text-no-shadow section-inner-no-shadow section-normal section-opaque" data-label="">';

	echo '<div class="container">';

	echo '<div class="row vertical-top">';

	echo '<div class="col-md-6">';

	

	$course_urlint = strtolower($item->SUBJECT);

	$course_urlfin = preg_replace('#[ -]+#', '-', $course_urlint);

	echo '<div class=" element-short-top element-short-bottom" data-os-animation="none" data-os-animation-delay="0s">

		<ul class="inline">

			<li><a href="/index.php">Home</a></li>

			<li><a href="/courses/">Courses</a></li>

			<li><a href="/courses/' . $course_urlfin . '">' . $item->SUBJECT . '</a></li>

		</ul>

	</div>';

	

	echo '<div class="d-title"><h1>' . $item->SUBJECT . '</h1></div>';



if ($item->DESCRIPTION <>""){

	

	$desc = $item->DESCRIPTION;

	

	$break = '<br>';

	$empty = '';

	

	$newDesc =  str_replace(array("<br>", ""), '', $desc);

	

	echo '<div class="d-big-title">' . $newDesc . '</div>';	
	
	
	function custom_seo_description( $site_description ) {
 return "Custom description!";
}

add_filter( 'wpseo_metadesc', 'custom_seo_description', 10, 1 );


	}

	

	echo '</div>';	

	

	echo '<div class="col-md-6 text-right small-screen-left">';

	echo '<div class="divider-wrapper" style="visibility:hidden;background-color:">

		<div class="visible-xs" style="height:24px;"></div>

		<div class="visible-sm" style="height:24px;"></div>

		<div class="visible-md" style="height:72px;"></div>

		<div class="visible-lg" style="height:72px;"></div>

		</div>';
		$fred = "81133";
		$justcategory = preg_replace( "/\r|\n/", "",$justcategory );
		
		
		//this 'if then' section redirects course details to relevent college. It only works for one code
		
		$myproductid = wc_get_product_id_by_sku($item->COURSE_CODE);
		
		 if( current_user_can('administrator') ) { 
		 //remove thhis outer if wrapper to go live
		    echo ('<h2>YOU ARE ADMIN</h2>');
		 if($item->COURSE_CODE=="PART TIME"){
    echo ('<h2>THIS IS A PART TIME COURSE</h2>');
	//get my product id by sku
	
		 }
   echo '<a class="apply-button" target="_BLANK" href="/basket/?add-to-cart='.$myproductid.'"><p>ADD TO BASKET!</p><i class="fa fa-angle-right" aria-hidden="true"></i></a>';
		 
	
		 }
		 elseif($item->UCAS_SITE <> ""){
		echo '<a class="apply-button" target="_BLANK" href="'.$item->UCAS_SITE.'"><p>APPLY NOW!</p><i class="fa fa-angle-right" aria-hidden="true"></i></a>';
		 
		 }
		else{
			//normal applications
		echo '<a class="apply-button" target="_BLANK" href="https://apply.college.ac.uk/webenrolment.aspx?page=~/webcontrols/courseapply.ascx&OfferingID='.$justcourseid.'"><p>APPLY NOW!</p><i class="fa fa-angle-right" aria-hidden="true"></i></a>';
		}
	
		echo '<div class="divider-wrapper" style="visibility:hidden;background-color:">

		<div class="visible-xs" style="height:24px;"></div>

		<div class="visible-sm" style="height:24px;"></div>

		<div class="visible-md" style="height:0px;"></div>

		<div class="visible-lg" style="height:0px;"></div>

		</div>';

	echo '</div>';	

	echo '</div>';	

	echo '</div>';	

	echo '</section>';	



echo '<section class="section swatch-white course-info-row section-text-no-shadow section-inner-no-shadow section-normal section-opaque" data-label="">';

echo '<div class="container">';

echo '<div class="row vertical-top">';	

//first col

echo '<div class="col-md-7">';



if (strlen($item->DESCRIPTION) > 1){

	echo '<div class="course-info">';	

	echo '<div class="d-title course-title">Course Title</div><div class="d-content course-content">'. $newDesc . '</div>';

	echo '</div>';

	

}

if (strlen($item->COURSE_CODE) > 1){

	echo '<div class="course-info">';	

	echo '<div class="d-title course-title">Course Code</div><div class="d-content course-content">'. $item->COURSE_CODE .'</div>';

	echo '</div>';

	

}

if (strlen($item->TYPE) > 1){
	$item->TYPE = trim($item->TYPE);

	echo '<div class="course-info">';	

	echo '<div class="d-title course-title">Mode of Study</div><div class="d-content course-content">'. $item->TYPE .'</div>';

	echo '</div>';

	

}





if (strlen($item->LOCATION) > 1){	

	echo '<div class="course-info">';

	echo '<div class="d-title course-title">Location </div><div class="d-content course-content"><a class="location-content" href="/contact/#campuses">' . $item->LOCATION . '</a></div>';

	echo '</div>';

}

if (strlen($item->ENTRY_REQUIREMENTS) > 1){

	echo '<div class="course-info">';	

	echo '<div class="d-title course-title">Entry Requirements </div><div class="d-content course-content">' . $item->ENTRY_REQUIREMENTS . '</div>';

	echo '</div>';

}



if (strlen($item->LEADS_TO) > 1){	

	echo '<div class="course-info">';

	echo '<div class="d-title course-title">Leads on to </div><div class="d-content course-content">' . $item->LEADS_TO . '</div>';

	echo '</div>';

}


if ($item->START_DATE >0){	
//only show start date for part time courses
		if($item->TYPE =="PART TIME"){
	echo '<div class="course-info">';

	echo '<div class="d-title course-title">Start </div><div class="d-content course-content">' . $item->START_DATE . '</div>';

	echo '</div>';

}
}


if ($item->NUMBER_OF_WEEKS >0){	
//only show number of weeks for part time courses
	if($item->TYPE =="PART TIME"){

	echo '<div class="course-info">';		

	echo '<div class="d-title course-title">Number of Weeks</div><div class="d-content course-content">' . $item->NUMBER_OF_WEEKS . '</div>';

	echo '</div>';

}
}
	

if ($item->COST >0){
//only show cost for part time  or HE courses
	if($item->TYPE <>"FULL TIME"){

	echo '<div class="course-info">';

	echo '<div class="d-title course-title">Cost </div><div class="d-content course-content">' . $item->COST . '</div>';

	echo '</div>';


}
}





	

	echo '</div>';

	//second column

echo '<div class="col-md-5">';

//second column content here



if ($item->COURSE_CONTENT <>""){	

	$result = $item->COURSE_CONTENT;

	

	$str = 'Areas of study include:';

	$strRep = '<div class="study_areas">Areas of study include:</div>';

	

	$dot = '•';

	$square = '■';

	$hyphen = '-';

	

	$dotRep = '<div class="bullet">•</div>';



	echo '<div class="d-title about-title">ABOUT THE COURSE </div><div class="d-content about-content" style="display:block">'; 

	

	$wrapStudyAreas = str_replace( $str, $strRep, $result);

	$squareRep = str_replace( $square, $dot, $wrapStudyAreas);

	$hythenRep = str_replace( $hyphen, $dot, $squareRep);

	echo str_replace( $dot, $dotRep, $squareRep);

	

	echo '</div>';

	}

echo '</div></div></div></section>';







	//end of course item loop

	}

}

?>



          

            

            

            <!-- //content -->

       

		</main><!-- #main -->

	</div><!-- #primary -->

	<?php //get_sidebar(); ?>

</div><!-- .wrap -->



<?php get_footer();

